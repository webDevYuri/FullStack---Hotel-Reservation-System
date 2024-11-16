<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_FILES["file"]) || !is_array($_FILES["file"]["name"])) {
        $_SESSION['error'] = "No files uploaded or invalid file data.";
        exit();
    }
    $requiredFields = ['fname', 'mname', 'lname', 'phone', 'email', 'password'];
    foreach ($requiredFields as $field) {
        if (empty($_POST[$field])) {
            $_SESSION['error'] = "All fields are required.";
            exit();
        }
    }

    $password = $_POST["password"];
    if (strlen($password) < 8) {
        $_SESSION['short-password'] = "Password must be at least 8 characters long.";
        header("Location: ../admin/sign_up_admin.php");
        exit();
    } elseif (!preg_match("/[a-zA-Z]/", $password)) {
        $_SESSION['password-no-letter'] = "Password must contain at least one letter.";
        header("Location: ../admin/sign_up_admin.php");
        exit();
    } elseif (!preg_match("/[0-9]/", $password)) {
        $_SESSION['password-no-number'] = "Password must contain at least one number.";
        header("Location: ../admin/sign_up_admin.php");
        exit();
    }

    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $target_dir = "uploads/";
    $uploadedFiles = [];

    $sql = "SELECT * FROM admin WHERE email = ?";
    $sql_stmt = $conn->prepare($sql);
    if ($sql_stmt === false) {
        die("MySQL Error: " . $conn->error);
    }
    $sql_stmt->bind_param("s", $email);
    $sql_stmt->execute();
    $result = $sql_stmt->get_result();
    if ($result->num_rows > 0) {
        $_SESSION['create-error'] = "Email already exists.";
        exit();
    }

    $fileCount = count($_FILES["file"]["name"]);
    for ($i = 0; $i < $fileCount; $i++) {
        if ($_FILES["file"]["error"][$i] == UPLOAD_ERR_OK) {
            $originalFileName = basename($_FILES["file"]["name"][$i]);
            $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
            $newFileName = $fname . "_" . time() . "_" . $i . "." . $fileExtension;
            $target_file = $target_dir . $newFileName;

            if (!move_uploaded_file($_FILES["file"]["tmp_name"][$i], $target_file)) {
                $_SESSION['error'] = "Error uploading file: " . $originalFileName;
                exit();
            }

            $uploadedFiles[] = $newFileName;
        } else {
            $_SESSION['error'] = "Error with file upload.";
            exit();
        }
    }

    $photo = $uploadedFiles[0]; 

    $query = "INSERT INTO admin (fname, mname, lname, phone, email, password, profile) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $query_insert = $conn->prepare($query);
    if ($query_insert === false) {
        die("MySQL Error: " . $conn->error);
    }
    $query_insert->bind_param("sssssss", $fname, $mname, $lname, $phone, $email, $hashed_password, $photo);
    $query_insert->execute();

    if ($query_insert->affected_rows > 0) {
        $_SESSION['create-success'] = "Admin account has been created successfully.";
        header("Location: ../admin/sign_in_admin.php");
    } else {
        $_SESSION['error'] = "Error creating account. Please try again.";
    }

    $query_insert->close();
    $conn->close();
    exit();
} else {
    exit();
}
