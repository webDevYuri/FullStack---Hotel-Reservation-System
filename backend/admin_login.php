<?php
session_start();
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"]) || empty($_POST["password"])) {
        $_SESSION['error'] = "Email and password are required.";
        header("Location: ../admin/sign_in_admin.php");
        exit();
    }

    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("MySQL Error: " . $conn->error);
    }
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: ../admin/sign_in_admin.php");
        exit();
    }

    $user = $result->fetch_assoc();

    if (password_verify($password, $user['password'])) {
        $_SESSION['admin_id'] = $user['id'];
        $_SESSION['admin_name'] = $user['fname'] . ' ' . $user['lname'];
        $_SESSION['admin_email'] = $user['email'];
        $_SESSION['create-success'] = "Welcome, " . $user['fname'] . "!";
        header("Location: ../admin/dashboard.php"); 
    } else {
        $_SESSION['error'] = "Invalid email or password.";
        header("Location: ../admin/sign_in_admin.php");
    }

    $stmt->close();
    $conn->close();
    exit();
} else {
    header("Location: ../admin/sign_in_admin.php");
    exit();
}
