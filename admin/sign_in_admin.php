<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../output.css">
    <link rel="shortcut icon" href="../assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diana's Resort | Create Administrator</title>
</head>
<body class="create-admin-body">
    <div class="form-container h-full flex items-center justify-center">
        <form action="../backend/admin_login.php" method="POST" class="relative new-admin-form p-10 rounded-3xl flex flex-col items-center justify-center gap-3 w-[700px]">
            <div class="flex flex-col items-center justify-center text-center">
                <div class="bg-green-50 w-32 h-32 rounded-full shadow-lg flex justify-center items-center">
                    <i class="fa-solid fa-user-tie text-green-950 text-6xl"></i>
                </div>
                <p class="text-green-50 font-semibold">Welcome back.</p>
            </div>
            <div class="error-signup-message py-2">
            <div class="inputs flex flex-col gap-3 flex-nowrap">
                <div class="input-field">
                    <input type="email" name="email" id="email" placeholder="Email address" autocomplete="off" required class="bg-green-50 py-3 ps-3 w-[608px] rounded-md shadow-md focus:outline-none">
                </div>
                <div class="input-field relative">
                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off" required class="bg-green-50 py-3 ps-3 w-[608px] rounded-md shadow-md focus:outline-none">
                    <i class="fa-solid fa-eye absolute top-3 right-5 text-green-950 text-2xl" onclick="showPassword(event)" id="showPasswordIcon"></i>
                </div>
            </div>
            <div class="buttons mt-5">
                <button type="submit" id="submitNewAdmin" class="hover:bg-green-950 hover:text-green-50 duration-200 ease-in submit-new-admin w-[608px] bg-green-50 text-green-950 rounded-lg py-2">Login</button>
                <div class="flex items-center justify-center mt-2">
                    <p class="text-green-50">Do not have an account?</p>
                    <a href="sign_up_admin.php" class="ps-3 text-green-200 drop-shadow-md font-semibold">Sign Up</a>
                </div>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        window.history.forward();
        function showPassword(event) {
            const passwordInput = event.target.previousElementSibling;
            const showPasswordIcon = event.target;

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                showPasswordIcon.classList.replace("fa-eye", "fa-eye-slash");
            } else {
                passwordInput.type = "password";
                showPasswordIcon.classList.replace("fa-eye-slash", "fa-eye");
            }
        }

    </script>

</body>
</html>