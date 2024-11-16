<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/logo/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="../output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Diana's Resort | Admin Dashboard</title>
</head>
<body class="bg-slate-200">

    <header class="bg-slate-50 py-2 px-5 flex justify-between items-center">
        <h1 class="font-semibold text-2xl text-slate-600">Dashboard</h1>
        <div class="flex gap-3 items-center">
            <div class="w-[40px] h-[40px] bg-white rounded-xl flex items-center justify-center" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                <a href="#">
                    <i class="fa-regular fa-message text-green-950 text-base font-bold"></i>
                </a>
            </div>
            <div class="w-[40px] h-[40px] bg-white rounded-xl flex items-center justify-center" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                <a href="#">
                    <i class="fa-regular fa-bell text-green-950 text-lg font-bold"></i>
                </a>
            </div>
            <div class="flex items-center px-2 py-1 rounded-lg bg-white" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                <img src="../assets/testimonials/test.png" alt="ADMIN PROFILE" class="rounded-full w-[40px] h-[40px]">
                <div>
                    <p class="text-sm font-bold text-green-950">Yuri G.</p>
                    <p class="text-[10px] font-semibold text-green-950">yurigonzaga@gmail.com</p>
                </div>
            </div>
            <div class="w-[40px] h-[40px] bg-white rounded-xl flex items-center justify-center" style="box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;">
                <a href="#">
                    <i class="fa-solid fa-gear text-green-950 text-base font-bold"></i>
                </a>
            </div>
        </div>
    </header>

    <aside class="w-[300px] bg-slate-50 py-5">
        <div class="hotel-logo">
            <img src="../assets/logo/logo.png" class="w-[100px] p-3 bg-white" alt="">
            <h2></h2>
        </div>
        <ul class="px-10 mt-10 flex flex-col gap-3">
            <li class="aside-link active-link bg-gradient-to-r from-blue-700 to-blue-500 px-3 rounded-xl">
                <a href="#" class="text-green-50 flex items-center font-semibold">
                    <i class="fa-solid fa-tachometer-alt w-10 text-green-50 text-2xl"></i>
                    Dashboard
                </a>
            </li>
            <li class="aside-link hover:bg-gradient-to-r from-blue-200 to-blue-100 hover:px-3 rounded-xl duration-200 ease-in hover:h-[40px]">
                <a href="#" class="text-slate-600 flex items-center">
                    <i class="fa-solid fa-calendar-check w-[50px] text-slate-600 text-xl"></i>
                    Reservation
                </a>
            </li>
            <li class="aside-link hover:bg-gradient-to-r from-blue-200 to-blue-100 hover:px-3 rounded-xl duration-200 ease-in hover:h-[40px]">
                <a href="#" class="text-slate-600 flex items-center">
                    <i class="fa-solid fa-bed w-[50px] text-slate-600 text-xl"></i>
                    Rooms
                </a>
            </li>
            <li class="aside-link hover:bg-gradient-to-r from-blue-200 to-blue-100 hover:px-3 rounded-xl duration-200 ease-in hover:h-[40px]">
                <a href="#" class="text-slate-600 flex items-center">
                    <i class="fa-solid fa-tags w-[50px] text-slate-600 text-xl"></i>
                    Pricing
                </a>
            </li>
            <li class="aside-link hover:bg-gradient-to-r from-blue-200 to-blue-100 hover:px-3 rounded-xl duration-200 ease-in hover:h-[40px]">
                <a href="#" class="text-slate-600 flex items-center">
                    <i class="fa-solid fa-chart-line w-[50px] text-slate-600 text-xl"></i>
                    Statistics
                </a>
            </li>
            <li class="aside-link hover:bg-gradient-to-r from-blue-200 to-blue-100 hover:px-3 rounded-xl duration-200 ease-in hover:h-[40px]">
                <a href="#" class="text-slate-600 flex items-center">
                    <i class="fa-solid fa-globe w-[50px] text-slate-600 text-xl"></i>
                    Website
                </a>
            </li>
        </ul>        
    </aside>

    <div class="main px-5 pt-10 mt-10">
        <div class="flex gap-3">
            <a href="#" class="flex items-center justify-between w-full h-[200px] shadow-lg px-5 bg-gradient-to-r from-blue-400 to-blue-300 rounded-lg">
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold text-white drop-shadow-md">23</h1>
                    <h2 class="text-white font-semibold text-xl drop-shadow-md">Pending</h2>
                </div>
                <div>
                    <i class="text-white text-4xl drop-shadow-md fa-solid fa-hourglass-half"></i>
                </div>
            </a>
            <a href="#" class="flex items-center justify-between w-full h-[200px] shadow-lg px-5 bg-gradient-to-r from-green-400 to-green-300 rounded-lg">
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold text-white drop-shadow-md">27</h1>
                    <h2 class="text-white font-semibold text-xl drop-shadow-md">Booked</h2>
                </div>
                <div>
                    <i class="text-white text-4xl drop-shadow-md fa-solid fa-calendar-check"></i>
                </div>
            </a>
            <a href="#" class="flex items-center justify-between w-full h-[200px] shadow-lg px-5 bg-gradient-to-r from-orange-400 to-orange-300 rounded-lg">
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold text-white drop-shadow-md">11</h1>
                    <h2 class="text-white font-semibold text-xl drop-shadow-md">Check In</h2>
                </div>
                <div>
                    <i class="text-white text-4xl drop-shadow-md fa-solid fa-sign-in-alt"></i>
                </div>
            </a>
            <a href="#" class="flex items-center justify-between w-full h-[200px] shadow-lg px-5 bg-gradient-to-r from-red-400 to-red-300 rounded-lg">
                <div class="flex flex-col gap-3">
                    <h1 class="text-4xl font-semibold text-white drop-shadow-md">14</h1>
                    <h2 class="text-white font-semibold text-xl drop-shadow-md">Check Out</h2>
                </div>
                <div>
                    <i class="text-white text-4xl drop-shadow-md fa-solid fa-sign-out-alt"></i>  
                </div>
            </a>
        </div>

        <div class="pt-3 flex gap-3">
            <div class="flex flex-col gap-2">
                <a href="#" class="w-max">
                    <div class="shadow-md rounded-lg bg-white w-[250px] h-[200px] flex flex-col items-center justify-center">
                        <i class="fa-solid fa-bed text-5xl text-blue-500 drop-shadow-sm mb-3"></i>
                        <h2 class="text-slate-800 font-bold text-4xl">12</h2>
                        <h1 class="text-slate-700 font-semibold">Available Room</h1>
                    </div>
                </a>
                <a href="#" class="w-max">
                    <div class="shadow-md rounded-lg bg-white w-[250px] h-[200px] flex flex-col items-center justify-center">
                        <i class="fa-solid fa-lock text-5xl text-blue-500 drop-shadow-sm mb-3"></i>
                        <h2 class="text-slate-800 font-bold text-4xl">10</h2>
                        <h1 class="text-slate-700 font-semibold">Occupied Room</h1>
                    </div>
                </a>                             
            </div>
            <div class="w-full relative flex flex-col gap-2">
                <div class="flex gap-3">
                    <a href="#" class="shadow-lg h-[200px] rounded-lg bg-white flex flex-col items-center justify-center w-full">
                        <i class="fas fa-bed text-4xl text-slate-600"></i>
                        <h1 class="mt-4 text-xl font-semibold text-slate-700">Total Rooms</h1>
                    </a>
                    <a href="#" class="shadow-lg h-[200px] rounded-lg bg-white  flex flex-col items-center justify-center w-full">
                        <i class="fas fa-comment-dots text-4xl text-slate-600"></i>
                        <h1 class="mt-4 text-xl font-semibold text-slate-700">Feedback</h1>
                    </a>
                </div>                
                <div class="flex gap-2">
                    <a href="#" class="shadow-lg w-full h-[200px] rounded-lg justify-center items-center flex flex-col  bg-white">
                        <i class="fas fa-wallet text-4xl text-slate-600"></i>
                        <h1 class="mt-4 text-xl font-semibold text-slate-700">Total Earnings</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>