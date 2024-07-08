// (function() {
//     function adjustStyles() {
//         const width = window.innerWidth;
//         console.log(`Window width: ${width}px`);

//         if (width <= 1800) {
//             const sliderImg = document.querySelector('.slider-img > img');
//             if (sliderImg) {
//                 sliderImg.style.marginRight = '0';
//                 console.log('.slider-img > img: marginRight set to 0');
//             } else {
//                 console.log('.slider-img > img not found');
//             }
//         }

//         if (width <= 1500) {
//             const customContainer = document.querySelector('.custom-container');
//             const bannerBg = document.querySelector('.banner-bg');
//             const liveMovieImg = document.querySelector('.live-movie-img img');
//             const breadcrumbBg = document.querySelector('.breadcrumb-bg');
//             const headerStyleTwo = document.querySelector('.header-style-two::after');
//             const galleryArea = document.querySelector('.gallery-area.position-relative');
//             const galleryBg = document.querySelector('.gallery-bg');
//             const galleryNav = document.querySelector('.gallery-area .slider-nav');
//             const servicesBgTwo = document.querySelector('.services-bg-two');
//             const sliderBg = document.querySelector('.slider-bg');
//             const footerSearchForm = document.querySelector('.footer-search form');
//             const headerLang = document.querySelector('.header-style-two .header-action ul li.header-lang');
//             const headerActionItems = document.querySelectorAll('.header-action > ul > li');

//             if (customContainer) {
//                 customContainer.style.maxWidth = '1330px';
//                 console.log('.custom-container: maxWidth set to 1330px');
//             } else {
//                 console.log('.custom-container not found');
//             }

//             if (bannerBg) {
//                 bannerBg.style.padding = '260px 0 200px';
//                 console.log('.banner-bg: padding set to 260px 0 200px');
//             } else {
//                 console.log('.banner-bg not found');
//             }

//             if (liveMovieImg) {
//                 liveMovieImg.style.maxWidth = '100%';
//                 console.log('.live-movie-img img: maxWidth set to 100%');
//             } else {
//                 console.log('.live-movie-img img not found');
//             }

//             if (breadcrumbBg) {
//                 breadcrumbBg.style.padding = '230px 0 170px';
//                 console.log('.breadcrumb-bg: padding set to 230px 0 170px');
//             } else {
//                 console.log('.breadcrumb-bg not found');
//             }

//             if (headerStyleTwo) {
//                 headerStyleTwo.style.display = 'none';
//                 console.log('.header-style-two::after: display set to none');
//             } else {
//                 console.log('.header-style-two::after not found');
//             }

//             if (galleryArea) {
//                 galleryArea.style.padding = '120px 0 120px';
//                 galleryArea.style.marginBottom = '0';
//                 console.log('.gallery-area.position-relative: padding and marginBottom set');
//             } else {
//                 console.log('.gallery-area.position-relative not found');
//             }

//             if (galleryBg) {
//                 galleryBg.style.height = '100%';
//                 console.log('.gallery-bg: height set to 100%');
//             } else {
//                 console.log('.gallery-bg not found');
//             }

//             if (galleryNav) {
//                 galleryNav.style.maxWidth = '900px';
//                 galleryNav.style.position = 'unset';
//                 console.log('.gallery-area .slider-nav: maxWidth and position set');
//             } else {
//                 console.log('.gallery-area .slider-nav not found');
//             }

//             if (servicesBgTwo) {
//                 servicesBgTwo.style.padding = '120px 0 120px';
//                 console.log('.services-bg-two: padding set to 120px 0 120px');
//             } else {
//                 console.log('.services-bg-two not found');
//             }

//             if (sliderBg) {
//                 sliderBg.style.padding = '130px 0 130px';
//                 console.log('.slider-bg: padding set to 130px 0 130px');
//             } else {
//                 console.log('.slider-bg not found');
//             }

//             if (footerSearchForm) {
//                 footerSearchForm.style.minWidth = '240px';
//                 console.log('.footer-search form: minWidth set to 240px');
//             } else {
//                 console.log('.footer-search form not found');
//             }

//             if (headerLang) {
//                 headerLang.style.paddingLeft = '0';
//                 headerLang.style.marginLeft = '25px';
//                 console.log('.header-style-two .header-action ul li.header-lang: paddingLeft and marginLeft set');
//             } else {
//                 console.log('.header-style-two .header-action ul li.header-lang not found');
//             }

//             headerActionItems.forEach(item => {
//                 item.style.position = 'relative';
//                 item.style.marginLeft = '25px';
//                 console.log('.header-action > ul > li: position and marginLeft set');
//             });
//         }
//     }

//     window.addEventListener('resize', adjustStyles);
//     window.addEventListener('load', adjustStyles);
// })();
