function changeNavbarElementsDesign() {
    const navbar = document.getElementsByClassName("navbar")[0];
    const headerTopElements = document.getElementsByClassName("header-top-element")[0];
    const headerHr = document.getElementsByClassName("header-hr")[0];
    const navLinks = document.querySelectorAll(".nav-link");
    const brandImage = document.getElementsByClassName("logo-image")[0];
    const linkActive = document.getElementsByClassName("link-active")[0];
    const mobileNavbar = document.getElementsByClassName("mobile-navbar")[0];
    const menuBtn = document.getElementById('menuBtn');
    const mobileLogo = document.getElementsByClassName('mobile-logo-image')[0];
    const bookNowFloat = document.getElementsByClassName('book-now-floating-btn')[0];

    const scrollThreshold = 50; 

    if(window.pageYOffset > scrollThreshold) {
        navbar.style.backgroundColor = 'rgba(240, 253, 244, 0.5)';
        navbar.style.boxShadow = 'rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px';
        navbar.style.backdropFilter = 'blur(15px)';
        headerTopElements.style.display = 'none';
        headerHr.style.display = 'none';
        brandImage.style.width = '70px';
        brandImage.style.backgroundColor = '#f0fdf4';
        brandImage.style.transform = 'rotate(360deg)';
        mobileNavbar.style.backdropFilter = 'blur(15px)';
        mobileNavbar.style.backgroundColor = 'rgba(255, 255, 255, 0.4)';
        mobileNavbar.style.boxShadow = 'rgba(0, 0, 0, 0.16) 0px 3px 6px, rgba(0, 0, 0, 0.23) 0px 3px 6px';
        menuBtn.style.color = '#14532d';
        mobileLogo.style.transform = 'rotate(360deg)';
        mobileLogo.style.width = '70px';

        navLinks.forEach(navLink => {
            navLink.style.color = 'rgb(5 46 22)';
            navLink.style.fontSize = '18px'
        });

        linkActive.classList.remove('bg-green-950');
        linkActive.classList.add('bg-green-50');

        bookNowFloat.classList.remove('bg-green-50', 'text-green-950')
        bookNowFloat.classList.add('bg-green-950', 'text-green-50')

    } else {
        navbar.style.backgroundColor = '';
        navbar.style.boxShadow = '';
        navbar.style.backdropFilter = '';
        headerTopElements.style.display = '';
        headerHr.style.display = '';
        brandImage.style.width = '';
        brandImage.style.transform = '';
        brandImage.style.backgroundColor = '';
        mobileNavbar.style.backdropFilter = '';
        mobileNavbar.style.backgroundColor = '';
        mobileNavbar.style.boxShadow = '';
        menuBtn.style.color = '';
        mobileLogo.style.transform = '';
        mobileLogo.style.width = '';

        navLinks.forEach(navLink => {
            navLink.style.color = '';
            navLink.style.fontSize = ''
        });

        linkActive.classList.remove('bg-green-50');
        linkActive.classList.add('bg-green-950');

        bookNowFloat.classList.remove('bg-green-950', 'text-green-50')
        bookNowFloat.classList.add('bg-green-50', 'text-green-950')
    }
}

document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('scroll', changeNavbarElementsDesign);
});

function toggleSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const menuIcon = document.querySelector('#menuIcon');

    sidebar.classList.toggle('translate-x-0');

    if (sidebar.classList.contains('translate-x-0')) {
        menuIcon.classList.replace('fa-bars', 'fa-xmark');
    } else {
        menuIcon.classList.replace('fa-xmark', 'fa-bars');
    }
}


function startCarousel() {
    const carousels = document.querySelectorAll('.carousel'); 

    carousels.forEach(carousel => {
        const images = carousel.querySelectorAll('.carousel-image');
        let currentIndex = 0;

        setInterval(() => {
            images[currentIndex].classList.remove('active'); 
            currentIndex = (currentIndex + 1) % images.length; 
            images[currentIndex].classList.add('active'); 
        }, 3000); 
    });
}


window.onload = startCarousel;


