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
                        <a href="index.php" class="nav-link link-active duration-1000 ease-in xl:text-xl lg:text-lg text-sm font-semibold text-green-50 bg-green-950 rounded-br-3xl rounded-tl-3xl px-3 py-2">HOME</a>
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
                <a href="booknow.php" class="book-now-floating-btn hidden hover:rounded-3xl xl:block bg-blue-50 text-base duration-200 ease-in rounded-md text-green-950 py-3 px-10 font-semibold ">
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
            <li class="sidebar-nav-link-active rounded-tl-3xl rounded-bl-3xl">
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
            <li>
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
    
    <div class="advantage py-10 -mt-5 sm:mt-0 flex flex-col xl:px-10 xl:gap-5 sm:flex-row gap-5 md:gap-2 px-5">
        <div class="fade-in advantage-box p-7 sm:p-4 sm:w-1/3 sm:h-[200px] lg:h-[300px] md:h-[210px] h-72 flex flex-col justify-center items-center text-center">
            <img src="assets/icon/users.png" class="w-3/12" alt="STRENGTH ICON">
            <h1 class="font-bold text-lg sm:text-[12px] text-green-950 md:text-[11px] lg:text-[15px] ">EXCEPTIONAL CUSTOMER SERVICE</h1>
            <p class="text-green-950 sm:text-[8px] md:text-[12px] lg:text-[15px] xl:text-[17px]">Our dedicated team is available 24/7 to cater to your every need, ensuring a seamless and enjoyable stay.</p>
        </div>
        
        <div class="fade-in advantage-box p-7 sm:p-4 sm:w-1/3 sm:h-[200px] lg:h-[300px] md:h-[210px] h-72 flex flex-col justify-center items-center text-center">
            <img src="assets/icon/location.png" class="w-3/12" alt="STRENGTH ICON">
            <h1 class="font-bold text-lg sm:text-[12px] text-green-950 md:text-[11px] lg:text-[15px] ">PRIME LOCATION</h1>
            <p class="text-green-950 sm:text-[8px] md:text-[12px] lg:text-[15px] xl:text-[17px]">Located in the heart of the city, our hotel offers easy access to popular attractions and key destinations.</p>
        </div>
        
        <div class="fade-in advantage-box p-7 sm:p-4 sm:w-1/3 sm:h-[200px] lg:h-[300px] md:h-[210px] h-72 flex flex-col justify-center items-center text-center">
            <img src="assets/icon/diamond.png" class="w-3/12" alt="STRENGTH ICON">
            <h1 class="font-bold text-lg sm:text-[12px] text-green-950 md:text-[11px] lg:text-[15px] ">EXCLUSIVE AFFORDABILITY</h1>
            <p class="text-green-950 sm:text-[8px] md:text-[12px] lg:text-[15px] xl:text-[17px]">Enjoy premium amenities at a price that fits your budget, combining luxury and value in every stay.</p>
        </div>
    </div>
    
    <div class="md:mt-10" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
        <div class="md:flex pb-5 md:pb-0">
            <div class="fade-in md:w-6/12">
                <img src="assets/rooms/whyRoom.jpg" alt="" class="h-full">
            </div>
            <div class="fade-in why-description md:py-2 px-5 md:px-5 lg:px-10 md:w-6/12">
                <div class="text-center md:text-left py-4 md:py-0 mb:pb-2">
                    <h1 class="text-2xl md:text-lg font-bold text-green-950 lg:text-xl xl:text-5xl">WHY CHOOSE US</h1>
                    <p class="text-green-900 md:text-xs lg:text-sm font-bold xl:text-lg xl:mt-3">SOME WORDS ABOUT US</p>
                </div>
                <div>
                    <p class="text-justify md:text-[12px] md:py-1 text-green-950 lg:text-[15px] lg:py-3 xl:py-5 xl:text-[17px]">Our hotel offers the perfect blend of luxury and convenience. With top-tier amenities, exceptional service, and a prime location, we ensure your stay is comfortable and memorable.</p>
                    <div class="mt-5 md:mt-3 sm:flex justify-between">
                        <div class="flex flex-col gap-4 items-center sm:items-start">
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800 sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-solid fa-wifi text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[15px]">FREE HIGH SPEED WIFI</p>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800 sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-solid fa-bowl-food text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[15px]">COMPLIMENTARY BREAKFAST</p>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800 sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-solid fa-user-tie text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[15px]">24/7 FRONT DESK SUPPORT</p>
                            </div>
                        </div>
                        <div class="flex flex-col pt-4 sm:pt-0 gap-4 sm:items-start items-center">
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800 sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-solid fa-location-dot text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[15px]">PRIME LOCATION NEAR TOURIST SPOTS</p>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800 sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-regular fa-heart text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[15px]">FAMILY-FRIENDLY ENVIRONMENT</p>
                            </div>
                            <div class="flex flex-col sm:flex-row sm:text-left text-center lg:items-center">
                                <i class="text-green-800  sm:text-xl md:text-xs lg:text-xl xl:text-3xl sm:w-[40px] xl:w-[50px] lg:w-[30px] md:w-[25px] fa-solid fa-house text-3xl"></i>
                                <p class="text-green-950 sm:text-xs md:text-[8px] lg:text-[12px] xl:text-[135x]">SPACIOUS AND MODERN ROOMS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="popular-room xl:py-5 relative mt-10 px-5 xl:px-10" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
        <div class="flex justify-center sm:justify-between sm:items-center mb-5">
            <div class="fade-in text-center pt-10 sm:text-left">
                <h2 class="text-green-900 underline text-md md:text-lg font-bold xl:text-xl">POPULAR</h2>
                <h1 class="text-green-950 text-xl font-bold md:text-2xl xl:text-3xl">Cost-Effective Accommodation</h1>
            </div>
            <div class="fade-in hidden sm:block">
                <a href="#" class="text-green-950 selft-end lg:text-xl">Explore All<i class="fa-solid fa-arrow-right ms-2"></i></a>
            </div>
        </div>
        <div class="flex md:pb-10 sm:px-20 xl:mt-10 flex-col md:justify-center md:flex-row md:px-0 md:gap-2 gap-5 xl:gap-5">
            <div class="fade-in bg-green-50 popular-room-box md:w-[300px] lg:w-[320px] xl:w-[400px] z-10">
                <div>
                    <img src="assets/rooms/lowroomOne.jpg" alt="">
                </div>
                <div class="px-3 py-2 sm:px-10 sm:py-5 md:px-2 md:py-2 bg-green-50">
                    <div class="flex gap-5 py-3 justify-center items-center">
                        <i class="md:text-sm fa-solid lg:text-2xl fa-bed text-green-950 text-xl"></i>
                        <p class="text-green-950 md:text-sm lg:text-lg font-semibold">Affordable Comfort</p>
                    </div>
                    <p class="text-green-950 text-justify md:text-xs py-2 xl:px-5 lg:text-sm">Experience cozy stays at unbeatable prices, ensuring great value without compromising quality.</p>
                </div>
                <div class="flex justify-between sm:px-5 sm:py-5 px-3 items-center pb-4">
                    <button class="bg-green-950 md:text-xs md:px-2 md:py-1 lg:py-2 lg:px-3 xl:px-4 lg:text-base hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2">BOOK NOW</button>
                    <div class="flex gap-1">
                        <span class="text-green-950 text-xl xl:text-xl lg:text-lg md:text-sm">&#8369;</span>
                        <p class="text-green-950 md:text-sm xl:text-xl lg:text-lg text-xl">3,999</p>
                    </div>
                </div>
            </div>
            <div class="fade-in bg-green-50 popular-room-box md:w-[300px] lg:w-[320px] xl:w-[400px] z-10">
                <div>
                    <img src="assets/rooms/lowroomTwo.jpg" alt="">
                </div>
                <div class="px-3 py-2 sm:px-10 sm:py-5 md:px-2 md:py-2 bg-green-50">
                    <div class="flex gap-5 py-3 justify-center items-center">
                        <i class="md:text-sm fa-solid lg:text-2xl fa-bed text-green-950 text-xl"></i>
                        <p class="text-green-950 md:text-sm lg:text-lg font-semibold">Value-Priced Lodging</p>
                    </div>
                    <p class="text-green-950 text-justify md:text-xs py-2 xl:px-5 lg:text-sm">Discover welcoming spaces designed for comfort and relaxation, all at a price that fits your budget.</p>
                </div>
                <div class="flex justify-between sm:px-5 sm:py-5 px-3 items-center pb-4">
                    <button class="bg-green-950 md:text-xs md:px-2 md:py-1 lg:py-2 lg:px-3 xl:px-4 lg:text-base hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2">BOOK NOW</button>
                    <div class="flex gap-1">
                        <span class="text-green-950 text-xl xl:text-xl lg:text-lg md:text-sm">&#8369;</span>
                        <p class="text-green-950 md:text-sm xl:text-xl lg:text-lg text-xl">3,999</p>
                    </div>
                </div>
            </div>
            <div class="fade-in bg-green-50 popular-room-box md:w-[300px] lg:w-[320px] xl:w-[400px] z-10">
                <div>
                    <img src="assets/rooms/lowroomThree.jpg" alt="">
                </div>
                <div class="px-3 py-2 sm:px-10 sm:py-5 md:px-2 md:py-2 bg-green-50">
                    <div class="flex gap-5 py-3 justify-center items-center">
                        <i class="md:text-sm fa-solid lg:text-2xl fa-bed text-green-950 text-xl"></i>
                        <p class="text-green-950 md:text-sm lg:text-lg font-semibold">Budget-Friendly Retreat</p>
                    </div>
                    <p class="text-green-950 text-justify md:text-xs py-2 lg:text-sm xl:px-5">Unwind in our comfortable accommodations that combine affordability with style and convenience.</p>
                </div>
                <div class="flex justify-between sm:px-5 sm:py-5 px-3 items-center pb-4">
                    <button class="bg-green-950 md:text-xs md:px-2 md:py-1 lg:py-2 lg:px-3 xl:px-4 lg:text-base hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2">BOOK NOW</button>
                    <div class="flex gap-1">
                        <span class="text-green-950 text-xl xl:text-xl lg:text-lg md:text-sm">&#8369;</span>
                        <p class="text-green-950 md:text-sm xl:text-xl lg:text-lg text-xl">3,999</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="sm:hidden pb-5 justify-center flex mt-5">
            <a href="#" class="text-green-900 font-bold hover:text-green-950">Explore All<i class="fa-solid fa-arrow-right ps-3"></i></a>
        </div>
    </div>
    
    <div class="py-10" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
        <div class="fade-in text-center pb-5">
            <h2 class="text-green-900 underline text-md sm:text-xl lg:text-2xl font-bold xl:text-3xl">POPULAR</h2>
            <h1 class="text-green-950 text-xl sm:text-3xl font-bold lg:text-4xl xl:mt-3 xl:text-5xl">Our Deluxe Rooms</h1>
        </div>
        
        <div class="flex gap-10 lg:mt-5 xl:mt-10 sm:gap-5 md:gap-0 px-5 flex-col sm:px-20 md:px-0">
            <div class="fade-in deluxe-room relative items-center flex flex-col md:flex-row">
                <img src="assets/rooms/roomOne.jpg" alt="ROOM ONE" class="md:w-3/6">
                <div class="deluxe-room-description sm:p-6 md:py-0 flex flex-col p-3 xl:px-10 md:w-3/6">
                    <h1 class="text-green-950 font-bold md:text-lg lg:text-2xl text-xl xl:text-3xl">Deluxe Family Room</h1>
                    <p class="text-green-800 mb-3 py-3 xl:py-5 md:py-0 md:text-xs lg:text-[15px] text-sm  xl:mt-2" style="line-height: 25px;">Spacious family room with a cozy atmosphere, perfect for bonding moments. Enjoy luxury amenities and a peaceful stay.</p>
                    <p class="md:text-xs lg:text-lg">Starts From &#8369;4,999 <span class="font-bold md:text-xs lg:text-lg">/24 HOURS</span></p>
                    <div class="py-2 flex flex-col gap-2 md:gap-1 lg:gap-3 xl:gap-5">
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">STATUS:<span class="ms-2 font-light">Available</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">PAYMENT:<span class="ms-2 font-light">30% Advance</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">GUEST:<span class="ms-2 font-light">5</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">BEDS:<span class="ms-2 font-light">2 Queen Beds</span></p>
                    </div>
                    <div class="flex mt-4 md:mt-2 gap-5 xl:mt-5">
                        <button class="bg-green-950 hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2 xl:text-lg lg:py-2 lg:px-3 md:text-sm md:px-2 md:py-1">BOOK NOW</button>
                        <a href="#" class="text-green-950 md:text-sm lg:text-lg self-end underline font-semibold xl:text-xl">MORE DETAILS</a>
                    </div>
                </div>
            </div>
        
            <div class="fade-in deluxe-room relative items-center flex flex-col md:flex-row">
                <div class="deluxe-room-description sm:p-6 md:py-0 flex flex-col order-2 md:order-1 p-3 xl:px-10 md:w-3/6">
                    <h1 class="text-green-950 font-bold md:text-lg lg:text-2xl text-xl xl:text-3xl">Deluxe Family Room</h1>
                    <p class="text-green-800 mb-3 py-3 xl:py-5 md:py-0 md:text-xs lg:text-[15px] text-sm  xl:mt-2" style="line-height: 25px;">Spacious family room with a cozy atmosphere, perfect for bonding moments. Enjoy luxury amenities and a peaceful stay.</p>
                    <p class="md:text-xs lg:text-lg">Starts From &#8369;4,999 <span class="font-bold md:text-xs lg:text-lg">/24 HOURS</span></p>
                    <div class="py-2 flex flex-col gap-2 md:gap-1 lg:gap-3 xl:gap-5">
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">STATUS:<span class="ms-2 font-light">Available</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">PAYMENT:<span class="ms-2 font-light">30% Advance</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">GUEST:<span class="ms-2 font-light">5</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">BEDS:<span class="ms-2 font-light">2 Queen Beds</span></p>
                    </div>
                    <div class="flex mt-4 md:mt-2 gap-5 xl:mt-5">
                        <button class="bg-green-950 hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2 xl:text-lg lg:py-2 lg:px-3 md:text-sm md:px-2 md:py-1">BOOK NOW</button>
                        <a href="#" class="text-green-950 md:text-sm lg:text-lg self-end underline font-semibold xl:text-xl">MORE DETAILS</a>
                    </div>
                </div>
                <img src="assets/rooms/roomTwo.jpg" alt="ROOM TWO" class="order-1 md:w-3/6 md:order-2">
            </div>
        
            <div class="fade-in deluxe-room relative items-center flex flex-col md:flex-row">
                <img src="assets/rooms/roomThree.jpg" alt="ROOM THREE" class="md:order-1 md:w-3/6">
                <div class="deluxe-room-description sm:p-6 md:py-0 flex flex-col p-3 xl:px-10 md:w-3/6 md:order-2">
                    <h1 class="text-green-950 font-bold md:text-lg lg:text-2xl text-xl xl:text-3xl">Deluxe Family Room</h1>
                    <p class="text-green-800 mb-3 py-3 xl:py-5 md:py-0 md:text-xs lg:text-[15px] text-sm  xl:mt-2" style="line-height: 25px;">Spacious family room with a cozy atmosphere, perfect for bonding moments. Enjoy luxury amenities and a peaceful stay.</p>
                    <p class="md:text-xs lg:text-lg">Starts From &#8369;4,999 <span class="font-bold md:text-xs lg:text-lg">/24 HOURS</span></p>
                    <div class="py-2 flex flex-col gap-2 md:gap-1 lg:gap-3 xl:gap-5">
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">STATUS:<span class="ms-2 font-light">Available</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">PAYMENT:<span class="ms-2 font-light">30% Advance</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">GUEST:<span class="ms-2 font-light">5</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">BEDS:<span class="ms-2 font-light">2 Queen Beds</span></p>
                    </div>
                    <div class="flex mt-4 md:mt-2 gap-5 xl:mt-5">
                        <button class="bg-green-950 hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2 xl:text-lg lg:py-2 lg:px-3 md:text-sm md:px-2 md:py-1">BOOK NOW</button>
                        <a href="#" class="text-green-950 md:text-sm lg:text-lg self-end underline font-semibold xl:text-xl">MORE DETAILS</a>
                    </div>
                </div>
            </div>
        
            <div class="fade-in deluxe-room relative items-center flex flex-col md:flex-row">
                <div class="deluxe-room-description sm:p-6 md:py-0 flex flex-col order-2 md:order-1 p-3 xl:px-10 md:w-3/6">
                    <h1 class="text-green-950 font-bold md:text-lg lg:text-2xl text-xl xl:text-3xl">Deluxe Family Room</h1>
                    <p class="text-green-800 mb-3 py-3 xl:py-5 md:py-0 md:text-xs lg:text-[15px] text-sm  xl:mt-2" style="line-height: 25px;">Spacious family room with a cozy atmosphere, perfect for bonding moments. Enjoy luxury amenities and a peaceful stay.</p>
                    <p class="md:text-xs lg:text-lg">Starts From &#8369;4,999 <span class="font-bold md:text-xs lg:text-lg">/24 HOURS</span></p>
                    <div class="py-2 flex flex-col gap-2 md:gap-1 lg:gap-3 xl:gap-5">
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">STATUS:<span class="ms-2 font-light">Available</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">PAYMENT:<span class="ms-2 font-light">30% Advance</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">GUEST:<span class="ms-2 font-light">5</span></p>
                        <p class="font-bold text-sm md:text-xs lg:text-[16px] ">BEDS:<span class="ms-2 font-light">2 Queen Beds</span></p>
                    </div>
                    <div class="flex mt-4 md:mt-2 gap-5 xl:mt-5">
                        <button class="bg-green-950 hover:bg-green-800 duration-200 ease-in text-green-50 px-3 py-2 xl:text-lg lg:py-2 lg:px-3 md:text-sm md:px-2 md:py-1">BOOK NOW</button>
                        <a href="#" class="text-green-950 md:text-sm lg:text-lg self-end underline font-semibold xl:text-xl">MORE DETAILS</a>
                    </div>
                </div>
                <img src="assets/rooms/roomFive.jpg" alt="ROOM FOUR" class="order-1 md:w-3/6 md:order-2">
            </div>
        </div>
    
        <div class="mt-10 flex justify-center">
            <button class="border border-green-950 duration-200 ease-in xl:text-xl text-green-950 hover:bg-green-950 hover:text-green-50 px-4 py-2">VIEW ALL</button>
        </div>
    </div>
    
    <div class="px-5 py-10">
        <div class="fade-in text-center pt-5">
            <h2 class="text-green-900 underline text-md sm:text-xl lg:text-2xl font-bold xl:text-3xl">TESTIMONIALS</h2>
            <h1 class="text-green-950 text-xl sm:text-3xl font-bold lg:text-4xl xl:text-5xl">What People Say About Us</h1>
        </div>
        <div class="pt-10 lg:pt-20 sm:px-20 flex md:px-0 md:flex-row lg:px-10 flex-col gap-20 md:gap-5 xl:px-20">
            <div class="fade-in relative mb-20 testimonial-box rounded-tl-[30px] xl:h-[215px] rounded-tr-[30px] w-full pt-10 pb-20 md:px-5 px-10" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
                <span class="p-5 rounded-full bg-green-950 text-green-50 absolute -translate-x-5 left-1/2 -top-5 h-1 w-1 items-center flex justify-center">1</span>
                <p class="text-justify pb-10 lg:text-[13px] xl:text-sm text-green-950">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod minima asperiores perferendis suscipit quae minus.</p>
                <div class="absolute testimonial-people">
                    <div class="flex items-center justify-center h-36 w-36 rounded-full bg-green-50" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
                        <img src="assets/testimonials/test.png" alt="Profile" class="rounded-full border-dashed border-2 border-green-950 p-2 h-20 xl:h-24 w-20 xl:w-24">
                    </div>
                    <p class="text-center text-green-950 text-xl md:text-[15px] lg:text-[19px] font-bold mt-3">Yuri Gonzaga</p>
                </div>
            </div>

            <div class="fade-in relative mb-20 testimonial-box rounded-tl-[30px] xl:h-[215px] rounded-tr-[30px] w-full pt-10 pb-20 md:px-5 px-10" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
                <span class="p-5 rounded-full bg-green-950 text-green-50 absolute -translate-x-5 left-1/2 -top-5 h-1 w-1 items-center flex justify-center">2</span>
                <p class="text-justify pb-10 lg:text-[13px] xl:text-sm text-green-950">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod minima asperiores perferendis suscipit quae minus.</p>
                <div class="absolute testimonial-people">
                    <div class="flex items-center justify-center h-36 w-36 rounded-full bg-green-50" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
                        <img src="assets/logo/logo.png" alt="Profile" class="rounded-full border-dashed border-2 border-green-950 p-2 h-20 xl:h-24 w-20 xl:w-24">
                    </div>
                    <p class="text-center text-green-950 text-xl md:text-[15px] lg:text-[19px] font-bold mt-3">Diana's Resort</p>
                </div>
            </div>

            <div class="fade-in relative mb-20 testimonial-box rounded-tl-[30px] xl:h-[215px] rounded-tr-[30px] w-full pt-10 pb-20 md:px-5 px-10" style="box-shadow: rgba(0, 0, 0, 0.15) 0px 5px 15px 0px">
                <span class="p-5 rounded-full bg-green-950 text-green-50 absolute -translate-x-5 left-1/2 -top-5 h-1 w-1 items-center flex justify-center">3</span>
                <p class="text-justify pb-10 lg:text-[13px] xl:text-sm text-green-950">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quod minima asperiores perferendis suscipit quae minus.</p>
                <div class="absolute testimonial-people">
                    <div class="flex items-center justify-center h-36 w-36 rounded-full bg-green-50" style="box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;">
                        <img src="assets/testimonials/testimony.jpg" alt="Profile" class="rounded-full border-dashed border-2 border-green-950 p-2 h-20 xl:h-24 w-20 xl:w-24">
                    </div>
                    <p class="text-center text-green-950 text-xl md:text-[15px] lg:text-[19px] font-bold mt-3">Princes Mateo</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-green-100 px-5 py-5 mt-20">
        <div class="fade-in text-center mt-5">
            <h1 class="text-green-950 text-xl md:text-3xl lg:text-4xl font-bold">FIND US</h1>
        </div>
        <div class="mt-10 flex flex-col gap-5">
            <div class="flex flex-col sm:flex-row sm:justify-center sm:gap-2 gap-10">
                <div class="fade-in min-w-[200px] xl:h-[300px] flex flex-col items-center justify-center lg:py-7 location-icon-box bg-green-50 p-5 sm:p-3 text-center">
                    <i class="lg:text-4xl fa-solid fa-envelope text-3xl"></i>
                    <p class="text-sm font-bold text-green-950 lg:text-lg sm:mt-1 mt-3">Message</p>
                    <p class="py-3 text-green-950 sm:text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, laborum.</p>
                    <p class="text-green-950 font-bold sm:text-sm lg:text-base">dianashotel@gmail.com</p>
                </div>
                <div class="fade-in min-w-[200px] xl:h-[300px] flex flex-col items-center justify-center lg:py-7 location-icon-box bg-green-50 p-5 sm:p-3 text-center">
                    <i class="lg:text-4xl fa-solid fa-phone text-3xl"></i>
                    <p class="text-sm font-bold text-green-950 lg:text-lg sm:mt-1 mt-3">Call</p>
                    <p class="py-3 text-green-950 sm:text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, laborum.</p>
                    <p class="text-green-950 font-bold sm:text-sm lg:text-base">09080984368</p>
                </div>
                <div class="fade-in min-w-[200px] xl:h-[300px] flex flex-col items-center justify-center lg:py-7 location-icon-box bg-green-50 p-5 sm:p-3 text-center">
                    <i class="lg:text-4xl fa-solid fa-location-dot text-3xl"></i>
                    <p class="text-sm font-bold text-green-950 lg:text-lg sm:mt-1 mt-3">Visit</p>
                    <p class="py-3 text-green-950 sm:text-xs lg:text-base">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, laborum.</p>
                    <p class="text-green-950 font-bold sm:text-sm lg:text-base">Bongabon, Nueva Ecija</p>
                </div>
            </div>
            <iframe class="fade-in min-h-72" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3842.1411721068657!2d121.13637507591672!3d15.637469150850338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3390cdf2afe5f7c5%3A0xfccb04a02e2ee827!2sDiana&#39;s%20Resort!5e0!3m2!1sen!2sph!4v1730427770215!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    
    <div class="pt-10 flex flex-col pb-10 bg-green-950">
        <div class="fade-in flex flex-col items-center">
            <p class="text-green-50 underline text-sm sm:text-lg md:text-xl lg:text-2xl font-bold">STAY IN TOUCH</p>
            <h1 class="text-green-50 text-xl sm:text-3xl md:text-4xl lg:text-5xl font-bold">News Letter</h1>
        </div>
        <div class="flex px-2 items-center md:px-10 mt-5 justify-center">
            <form class="fade-in px-1 py-5 text-center items-center justify-center gap-0 sm:gap-5 flex bg-green-50">
                <img src="assets/decoration/leaf-left.png" class="leaf left-leaf w-2/12" alt="LEAF" >
                <div>
                    <h1 class="text-green-950 text-md sm:text-2xl md:text-3xl lg:text-4xl font-bold">Subscribe to Our News Letter</h1>
                    <div class="flex mt-2 items-center justify-center">
                        <div class="items-center w-9/12 sm:w-full flex flex-col relative">
                            <input type="email" id="email" placeholder="" autocomplete="off" class="news-control peer bg-green-50 w-full h-[35px] sm:h-[40px] md:h-[45px] lg:h-[50px] ps-2 border border-green-950 focus:outline-none">
                            <label for="email" class="absolute left-0 duration-200 top-1 sm:top-2 md:top-3 peer-placeholder-shown:normal-case transform-translate-y-2 scale-75 origin-left peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-x-1 peer-focus:-translate-y-4 px-2 sm:peer-focus:-translate-y-5 peer-focus:bg-green-50 self-start text-green-950 font-semibold lg:text-lg lg:ps-5 text-md">Email</label>
                        </div>
                        <button class="news-control text-green-50 text-sm px-2 h-[35px] sm:h-[40px] md:h-[45px] lg:h-[50px] lg:w-[50px] lg:text-2xl flex items-center justify-center sm:px-4 sm:text-lg hover:bg-green-800 duration-200 bg-green-950"><i class="hover:-rotate-12 duration-200 fa-regular fa-bell"></i></button>
                    </div>
                </div>
                <img src="assets/decoration/leaf-right.png" class="leaf right-leaf w-2/12" alt="LEAF" >
            </form>
        </div>
    </div>  

    <?php include 'modal/book.php' ?>
    <?php include 'reusable/footer.php' ?>

    <script src="js/script.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/modal.js"></script>
</body>
</html>