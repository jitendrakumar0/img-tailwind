
jQuery(document).ready(function($) {

    $('.fantasy-cricket-sldier').owlCarousel({
        loop: true,
        items: 1,
        autoHeight:true,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        margin: 0,
        padding: 0,
        nav: true,
        dots: false,
        autoplay: true,
        center: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                nav: false,
                dots: true,
            },
            500: {
                nav: false,
                dots: true,
            },
            600: {
                nav: false,
                dots: true,
            },
            992: {
                nav: true,
                dots: false,
            },
            1299: {
                nav: true,
                dots: false,
            },
            1499: {
                nav: true,
                dots: false,
            }
        },
        navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
    });
});
    

$('.blog_slider-main').owlCarousel({
    loop: false,
    nav: true,
    dots: false,
    autoplay: false,
    left: false,
    freeDrag: false,
    lazyLoad: true,
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    stagePadding: 0,
    smartSpeed: 1200,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            dots: false,
            nav: false,
        },
        500: {
            items: 1,
            dots: false,
            nav: false,
        },
        600: {
            dots: false,
            nav: false,
        },
        992: {
            dots: false,
            nav: false,
            items: 2,
        },
        1000: {
            dots: false,
            nav: false,
            items: 3,
        },
        1299: {
            dots: false,
            nav: false,
            items: 3,
        },
        1499: {
            items: 3,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
