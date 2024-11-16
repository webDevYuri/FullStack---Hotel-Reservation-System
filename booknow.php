<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diana's Resort | Home</title>
</head>
<body class="bg-green-50">

    <header class="book-now-header">
        <div class="navbar hidden sm:block py-2 z-20 shadow-md">
            <div class="flex items-center justify-center font-semibold mb-2 px-10">
                <div class="flex items-center text-slate-700 drop-shadow-md">
                    <i class="fa-solid fa-star"></i>
                    <p class="px-2">Don't miss out – Book Your Perfect Stay Today!</p>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

            <hr class="header-hr duration-300">

            <div class="py-3 flex justify-center items-center">
                <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="duration-1000 ease-in logo-image p-2"></a>
            </div>
        </div>
    </header>

    <div class="main h-full px-10 mt-10">
        <div>
            <form action="" class="flex gap-10">
                <div class="inputs w-full">
                    <div class="input-field flex flex-col">
                        <label for="name">Fullname</label>
                        <input type="text" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="input-field flex flex-col">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Email address">
                    </div>
                    <div class="input-field flex flex-col">
                        <label for="phone">Phone</label>
                        <input type="number" placeholder="Phone number">
                    </div>
                    <div class="input-field flex flex-col">
                        <label for="checkIn">Check In</label>
                        <input type="date" id="checkIn" name="checkIn">
                    </div>
                    <div class="input-field flex flex-col">
                        <label for="checkOut">Check Out</label>
                        <input type="date" id="checkOut" name="checkOut">
                    </div>
                    <div class="button">
                        <a href="#" class="bg-green-950 text-green-50 px-3 py-1 rounded-sm">Reserve Room</a>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    
    <?php include 'reusable/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>