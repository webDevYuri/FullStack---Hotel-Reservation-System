<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="output.css">
    <link rel="shortcut icon" href="assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diana's Resort | Contact</title>
</head>
<body class="bg-green-50">
    <header>
        <nav class="navbar hidden sm:block py-2 fixed top-0 left-0 w-full z-50">
            <div class="header-top-element duration-300 flex items-center justify-between mb-2 px-10">
                <div class="social-header-links flex gap-3 xl:gap-5">
                    <a href="#" class="no-underline text-green-50 lg:-text-md text-sm xl:text-xl">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 lg:-text-md text-sm xl:text-xl">
                        <i class="fa-brands fa-tiktok"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 lg:-text-md text-sm xl:text-xl">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                    <a href="#" class="no-underline text-green-50 lg:-text-md text-sm xl:text-xl">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                </div>
                <div class="contact-header flex gap-5">
                    <div class="flex items-center">
                        <i class="fa-solid fa-phone text-green-50 lg:-text-md text-[10px] xl:text-base me-2"></i>
                        <p class="text-green-50 text-[10px] xl:text-base">+63 907 098 4368</p>
                    </div>
                    <div class="flex items-center">
                        <i class="fa-solid fa-envelope text-green-50 lg:-text-md text-[10px] xl:text-base me-2"></i>
                        <p class="text-green-50 text-[10px] xl:text-base">grandluxehotel@gmail.com</p>
                    </div>
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
                        <a href="contact.php" class="nav-link link-active duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 bg-green-950 rounded-br-3xl rounded-tl-3xl px-3 py-2">CONTACT</a>
                    </li>
                </ul>
                <a href="#" class="book-now-floating-btn hidden xl:block hover:rounded-3xl bg-green-50  text-base duration-200 ease-in rounded-md text-green-950 py-3 px-10 font-semibold ">
                    BOOK NOW
                </a>
            </div>
        </nav>

        <div class="flex sm:hidden justify-between p-5 mobile-navbar fixed top-0 left-0 w-full z-40">
            <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="mobile-logo-image duration-500 ease-in w-24 p-2"></a>
            <button onclick="toggleSidebar()" id="menuBtn" class="text-3xl font-bold text-green-50">
                <i class="fa-solid fa-bars" id="menuIcon"></i>
            </button>
        </div>
    </header>

    <aside class="sidebar sm:hidden left-0 w-2/3 ps-2 flex flex-col justify-center">
        <div class="flex -mt-10 flex-col ps-2 items-start gap-2">
            <a href="index.php"><img src="assets/logo/logo.png" alt="LOGO" class="shadow-2xl w-24 bg-green-50 p-2" style="border-radius: 23% 0% 24% 0% / 22% 10% 23% 10%;"></a>
            <div class="mb-1">
                <h1 class="font-bold text-lg text-green-950">Diana's Hotel & Resort</h1>
                <p class="text-md text-green-950">dianashotel@gmail.com</p>
            </div>
        </div>
        <ul class="flex flex-col gap-2 ps-5 pt-5">
            <li>
                <a href="index.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-house text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Home</p>
                </a>
            </li>
            <li>
                <a href="facilities.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-person-swimming text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Facilities</p>
                </a>
            </li>
            <li>
                <a href="rooms.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-bed text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Rooms</p>
                </a>
            </li>
            <li>
                <a href="offers.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-tags text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Offers</p>
                </a>
            </li>
            <li>
                <a href="gallery.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-images text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Gallery</p>
                </a>
            </li>
            <li class="sidebar-nav-link-active rounded-tl-3xl rounded-bl-3xl">
                <a href="contact.php" class="flex ps-3 py-1">
                    <i class="fa-solid w-[60px] fa-envelope text-green-950 text-2xl"></i>
                    <p class="text-xl text-green-950">Contact</p>
                </a>
            </li>            
        </ul>
        <div class="pe-2">
            <button class="mt-5 w-full hover:bg-green-800 duration-200 ease-in py-2 bg-green-950 text-green-50">BOOK NOW</button>
        </div>

        <hr class="mt-2 bg-green-700 h-0.5">

        <div class="px-5">
            <p class="pt-5 text-lg text-green-950 font-bold">Follow Us</p>
            <div class="flex gap-2 mt-2">
                <a href="#" class="text-green-950 text-xl bg-green-100 justify-center items-center flex w-[35px] h-[35px] shadow-lg rounded-full">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#" class="text-green-950 text-xl bg-green-100 justify-center items-center flex w-[35px] h-[35px] shadow-lg rounded-full">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="#" class="text-green-950 text-xl bg-green-100 justify-center items-center flex w-[35px] h-[35px] shadow-lg rounded-full">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="text-green-950 text-xl bg-green-100 justify-center items-center flex w-[35px] h-[35px] shadow-lg rounded-full">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>                
            </div>
        </div>
    </aside>

    <div class="hidden sm:block carousel">
        <img src="assets/bg/bg1.jpg" alt="BACKGROUND ONE" class="carousel-image active absolute top-0 left-0 w-full bottom-0 h-full">
        <img src="assets/bg/bg2.jpg" alt="BACKGROUND TWO" class="carousel-image absolute top-0 left-0 w-full bottom-0 h-full">
    </div>
    <div class="block relative sm:hidden carousel">
        <img src="assets/bg/mobilebg1.jpg" alt="BACKGROUND ONE" class="carousel-image active absolute top-0 left-0 w-full bottom-0 h-full">
        <img src="assets/bg/gftmobile.jpg" alt="BACKGROUND TWO" class="carousel-image absolute top-0 left-0 w-full bottom-0 h-full">
    </div>
    <div class="overlay"></div>

    <?php include 'reusable/tagline.php' ?>

    <div class="mt-10">
        <div class="fade-in flex flex-col justify-center items-center">
            <h1 class="text-lg font-bold text-green-950 sm:text-3xl md:text-4xl">CONTACT US</h1>
            <img src="assets/decoration/dark.png" alt="DECORATION" class="w-[100px] sm:w-[150px] sm:-mt-5 -mt-2 md:-mt-7">
        </div>
        <div class="px-5 flex flex-col gap-5 md:gap-0 md:flex-row md:justify-around">
            <div class="fade-in">
                <div class="flex py-3 flex-col gap-4 text-center md:text-left">
                    <p><i class="fa-solid fa-location-dot w-9 md:text-2xl md:w-12 text-green-950"></i><span class="text-green-800 md:text-lg">Bongabon, Nueva Ecija, Philippines</span></p>
                    <p><i class="fa-solid fa-envelope w-9 md:text-2xl md:w-12 text-green-950"></i><span class="text-green-800 md:text-lg">@dianashotel@gmail.com</span></p>
                    <p><i class="fa-solid fa-phone w-9 md:text-2xl md:w-12 text-green-950"></i><span class="text-green-800 md:text-lg">09080984368</span></p>
                    <hr class="bg-green-950">
                </div>
                <div class="flex flex-col items-center md:items-start">
                    <p class="text-green-950 font-semibold md:text-2xl">Follow Us</p>
                    <div class="flex gap-3 mt-2">
                        <i class="fa-brands md:text-2xl fa-facebook text-green-950"></i>
                        <i class="fa-brands md:text-2xl fa-square-instagram text-green-950"></i>
                        <i class="fa-brands md:text-2xl fa-tiktok text-green-950"></i>
                        <i class="fa-brands md:text-2xl fa-square-x-twitter text-green-950"></i>
                    </div>
                </div>
            </div>
            <div class="fade-in">
                <form class="flex flex-col p-10  relative" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                    <h2 class="text-base text-green-950 font-bold mb-1 md:mb-3 md:text-lg text-center">Send a Message</h2>
                    <div class="flex flex-col gap-5">
                        <div class="items-center flex flex-col relative">
                            <input type="text" id="name" placeholder="" autocomplete="off" class="text-green-900 text-xs sm:text-sm peer bg-green-50 w-full ps-5 border border-green-950 outline-green-950 h-[40px]">
                            <label for="name" class="absolute md:-left-0 lg:-left-0 duration-200 top-2 peer-placeholder-shown:normal-case transform-translate-y-2 scale-75 origin-left peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-x-1 md:peer-focus:translate-x-1 lg:peer-focus:translate-x-0 peer-focus:-translate-y-4 px-2 peer-focus:bg-green-50 self-start text-green-950 font-semibold text-sm">Name</label>
                        </div>
                        <div class="items-center flex flex-col relative">
                            <input type="email" id="email" placeholder="" autocomplete="off" class="text-green-900 text-xs sm:text-sm peer bg-green-50 w-full ps-5 border border-green-950 outline-green-950 h-[40px]">
                            <label for="email" class="absolute md:-left-0 lg:-left-0 duration-200 top-2 peer-placeholder-shown:normal-case transform-translate-y-2 scale-75 origin-left peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-x-1 md:peer-focus:translate-x-1 lg:peer-focus:translate-x-0 peer-focus:-translate-y-4 px-2 peer-focus:bg-green-50 self-start text-green-950 font-semibold text-sm">Email</label>
                        </div>
                        <div class="items-center flex flex-col relative">
                            <textarea id="textarea" placeholder="" autocomplete="off" class="text-green-900 text-xs sm:text-sm pt-5 peer bg-green-50 w-full ps-5 border border-green-950 outline-green-950 h-[100px]"></textarea>
                            <label for="textarea" class="absolute left-0 md:left-0 duration-200 top-2 transform scale-75 origin-left text-green-950 font-semibold text-sm peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-x-1 md:peer-focus:translate-x-1 peer-focus:-translate-y-4 px-2 peer-focus:bg-green-50">Message</label>
                        </div>
                        <a href="#" class="py-2 bg-green-950 text-green-50 hover:bg-green-800 duration-200 hover:rounded-lg text-center text-sm">SEND</a>
                    </div>
                    <div class="corner-frames">
                        <img src="assets/decoration/form-small-b-left.png" alt="CORNER FRAME" class="w-14">
                        <img src="assets/decoration/form-small-b-right.png" alt="CORNER FRAME" class="w-14">
                        <img src="assets/decoration/form-small-left.png" alt="CORNER FRAME" class="w-16">
                        <img src="assets/decoration/form-small-right.png" alt="CORNER FRAME" class="w-16">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include 'reusable/check-available-room.php' ?>

    <?php include 'reusable/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="js/animation.js"></script>
</body>
</html>