document.addEventListener('DOMContentLoaded', function() {
    const mobileNavToggler = document.querySelector('.mobile-nav-toggler');
    const mobileMenu = document.querySelector('.mobile-menu');
    const menuBackdrop = document.querySelector('.menu-backdrop');
    const closeBtn = document.querySelector('.mobile-menu .close-btn');

    mobileNavToggler.addEventListener('click', function() {
        mobileMenu.classList.toggle('active');
        menuBackdrop.classList.toggle('active');
    });

    closeBtn.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        menuBackdrop.classList.remove('active');
    });

    menuBackdrop.addEventListener('click', function() {
        mobileMenu.classList.remove('active');
        menuBackdrop.classList.remove('active');
    });
});
