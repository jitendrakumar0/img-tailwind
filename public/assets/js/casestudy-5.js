$('.app_screen_carosule').owlCarousel({
    loop: true,
	autoHeight:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	margin: 15,
	padding: 0,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
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
            items: 1,
        },
        992: {
            dots: false,
            nav: false,
            items: 1,
        },
        1000: {
            dots: false,
            nav: false,
            items: 1,
        },
        1299: {
            dots: false,
            nav: false,
            items: 1,
        },
        1499: {
            items: 1,
            dots: false,
            nav: false,
        }
    },
    navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});



$('.client_testimonial').owlCarousel({
    loop: true,
	autoHeight:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	margin: 15,
	padding: 0,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 1,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
            items: 3,
        }
    },
    // navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});




$('.other_project_carousel').owlCarousel({
    loop: true,
	autoHeight:true,
	animateOut: 'fadeOut',
	animateIn: 'fadeIn',
	margin: 15,
	padding: 0,
	nav: true,
	dots: false,
	autoplay: true,
	autoplayTimeout: 5000,
	autoplayHoverPause: true,
	responsiveClass: true,
    responsive: {
        0: {
            nav: false,
            dots: false,
            items: 1,
        },
        600: {
            nav: false,
            dots: false,
            items: 2,
        },
        1000: {
            nav: false,
            dots: false,
            items: 2,
        }
    },
    // navText: ["<i class='imgs img-chevron-left'></i>", "<i class='imgs img-chevron-right'></i>"]
});
