function myFunction() {
    var x = document.getElementById("body");
    var nav = document.getElementById("nav");
    var navBar = document.getElementById("navBar");
    var sideBar = document.getElementById("offcanvasScrolling");
    var close = document.getElementById("cls-btn");
    var mode = document.getElementById("mode");
    if (x.classList == "bg-white text-dark") {
        x.classList.replace("bg-white", "bg-dark");
        x.classList.replace("text-dark", "text-white");
        nav.classList.replace("navbar-light", "navbar-dark");
        navBar.classList.replace("navbar-light", "navbar-dark");
        navBar.classList.replace("bg-white", "bg-dark");
        sideBar.classList.replace("bg-white", "bg-dark");
        close.classList.replace("bg-transparent", "bg-white");
        mode.classList.replace("bi-brightness-high-fill", "bi-moon-fill");
    } else if (x.classList == "bg-dark text-white") {
        x.classList.replace("bg-dark", "bg-white");
        x.classList.replace("text-white", "text-dark");
        nav.classList.replace("navbar-dark", "navbar-light");
        navBar.classList.replace("navbar-dark", "navbar-light");
        navBar.classList.replace("bg-dark", "bg-white");
        sideBar.classList.replace("bg-dark", "bg-white");
        close.classList.replace("bg-white", "bg-transparent");
        mode.classList.replace("bi-moon-fill", "bi-brightness-high-fill");
    }
}

var navBar = document.getElementById("navBar");

function scroll() {
    let calc = window.scrollY; // mendapatkan posisi scroll dari atas ke bawah
    if (calc > 0) { // jika posisi scroll lebih dari 0 pixel
        navBar.classList.add("sticky-top"); // ganti background navbar
    }
}

//panggil saat inisialisasi
scroll();

// panggil saat discroll
window.onscroll = () => { // jika tidak work untuk arrow function, coba pakai function biasa
    scroll();
};
window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#navBar');
        const menu = document.body.querySelector('#menu');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink');
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const navBar = document.body.querySelector('#navBar');
    if (navBar) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#navBar',
            offset: 74,
        });
    };


    // // Collapse responsive navbar when toggler is visible
    // const navbarToggler = document.body.querySelector('.navbar-toggler');
    // const responsiveNavItems = [].slice.call(
    //     document.querySelectorAll('#navbarResponsive .nav-link')
    // );
    // responsiveNavItems.map(function(responsiveNavItem) {
    //     responsiveNavItem.addEventListener('click', () => {
    //         if (window.getComputedStyle(navbarToggler).display !== 'none') {
    //             navbarToggler.click();
    //         }
    //     });
    // });

});
