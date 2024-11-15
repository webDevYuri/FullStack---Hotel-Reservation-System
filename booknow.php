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

<header>
        <nav class="navbar hidden sm:block py-2 fixed top-0 left-0 w-full z-50">
            <div class="header-top-element duration-300 flex items-center justify-center text-white font-semibold mb-2 px-10">
                <div class="flex items-center">
                    <i class="fa-solid fa-star text-orange-400"></i>
                    <p class="px-2 text-green-700">Don't miss out – Book Your Perfect Stay Today!</p>
                    <i class="fa-solid fa-star text-orange-400"></i>
                </div>
            </div>

            <hr class="header-hr duration-300">

            <div class="2xl:p-10 p-5 nav-link-list flex justify-center items-center relative">
                <ul class="nav-container flex items-center 2xl:gap-7 xl:gap-2 gap-1 justify-center">
                    <li>
                        <a href="index.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 px-3 py-2">HOME</a>
                    </li>
                    <li>
                        <a href="facilities.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 px-3 py-2">FACILITIES</a>
                    </li>
                    <li>
                        <a href="rooms.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-md text-sm font-semibold text-green-50 px-3 py-2 me-2">ROOMS</a>
                    </li>
                    <li>
                        <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="duration-1000 ease-in logo-image p-2"></a>
                    </li>
                    <li>
                        <a href="offers.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 px-3 py-2 ml-2">OFFERS</a>
                    </li>
                    <li>
                        <a href="gallery.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 px-3 py-2">GALLERY</a>
                    </li>
                    <li>
                        <a href="contact.php" class="nav-link duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 px-3 py-2">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="flex sm:hidden justify-between p-5 mobile-navbar fixed top-0 left-0 w-full z-40">
            <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="mobile-logo-image duration-500 ease-in w-24 p-2"></a>
            <button onclick="toggleSidebar()" id="menuBtn" class="text-3xl font-bold text-green-50">
                <i class="fa-solid fa-bars" id="menuIcon"></i>
            </button>
        </div>
    </header>

    <div class="main h-full"></div>
    
    <?php include 'reusable/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>