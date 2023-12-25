
    // const progressCircles = document.querySelectorAll(".autoplay-progress svg");
    // const progressContents = document.querySelectorAll(".autoplay-progress span");
    // var heroSwiperThumbs = new Swiper(".heroSwiperThumbs", {
    //     // spaceBetween: 0,
    //     slidesPerView: 1,
    //     // watchSlidesProgress: true,
    //     effect: "fade",
    //     speed: 5500,
    //     pagination:false,
    //     navigation:false
    // });
    // const heroSwiper = new Swiper('.heroSwiper', {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     // autoplay: {
    //     //     delay: 2500,
    //     //     disableOnInteraction: false
    //     // },
    //     speed: 1500,
    //     thumbs: {
    //         swiper: heroSwiperThumbs,
    //     },
    //     loop: true,
    //     keyboard: {
    //         enabled: true,
    //     },
    //     breakpoints: {
    //         320: {
    //             centeredSlides: true,
    //             slidesPerView: 1.2,
    //             spaceBetween: 20
    //         },
    //         480: {
    //             centeredSlides: true,
    //             slidesPerView: 1.2,
    //             spaceBetween: 20
    //         },
    //         640: {
    //             centeredSlides: true,
    //             slidesPerView: 1.2,
    //             spaceBetween: 20,
    //         },
    //         1024: {
    //             centeredSlides: false,
    //             slidesPerView: 2.5,
    //             spaceBetween: 40
    //         },
    //         1350: {
    //             slidesPerView: 2.5,
    //             spaceBetween: 40
    //         },
    //     },
    //     // pagination: {
    //     //     el: ".swiper-pagination",
    //     //     clickable: true,
    //     //     dynamicBullets: true,
    //     //     //   type: 'progressbar',
    //     // },

    //     navigation: {
    //         nextEl: '.swiper-button-next',
    //         prevEl: '.swiper-button-prev',
    //     },

    //     scrollbar: {
    //         el: '.swiper-scrollbar',
    //         hide: true,
    //     },
    //     on: {
    //         autoplayTimeLeft(s, time, progress) {
    //             progressCircles.forEach(progressCircle => {
    //                 // Do something with each progress circle
    //                 progressCircle.style.setProperty("--progress", 1 - progress);
    //             });
                
    //             progressContents.forEach(progressContent => {
    //                 // Do something with each progress content
    //                 progressContent.textContent = `${Math.ceil(time / 1000)}s`;
    //             });
    //         }
    //     },
    // });
    
    // var logoClouds = new Swiper(".logo-clouds", {
    //     slidesPerView: 1,
    //     spaceBetween: 20,
    //     loop: true,
    //     centeredSlides: true,
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 5,
    //             spaceBetween: 20
    //         },
    //         480: {
    //             slidesPerView: 5,
    //             spaceBetween: 20
    //         },
    //         640: {
    //             slidesPerView: 7,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 7,
    //             spaceBetween: 30
    //         },
    //         1350: {
    //             slidesPerView: 9,
    //             spaceBetween: 30
    //         },
    //     },
    //     speed:5000,
    //     allowTouchMove: false,
    //     autoplay: {
    //         enabled: true,
    //         delay: 0,
    //     },
    // });
    
    // var AwardsRecognitions = new Swiper(".AwardsRecognitions", {
    //     slidesPerView: 2,
    //     spaceBetween: 10,
    //     speed:5000,
    //     // allowTouchMove: false,
    //     autoplay: {
    //         enabled: true,
    //         delay: 0,
    //     },
    //     loop: true,
    //     effect: 'coverflow',
    //     centeredSlides: true,
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 2,
    //             spaceBetween: 20
    //         },
    //         480: {
    //             slidesPerView: 2,
    //             spaceBetween: 20
    //         },
    //         640: {
    //             slidesPerView: 2,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 2,
    //             spaceBetween: 30
    //         },
    //         1350: {
    //             slidesPerView: 2,
    //             spaceBetween: 30
    //         },
    //     },
    // });
    
    // var testimonialsSwiper = new Swiper(".testimonialsSwiper", {
    //     slidesPerView: 2,
    //     spaceBetween: 10,
    //     speed:2000,
    //     // allowTouchMove: false,
    //     autoplay: {
    //         enabled: true,
    //         delay: 2500,
    //     },
    //     loop: true,
    //     effect: 'coverflow',
    //     centeredSlides: true,
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 1.3,
    //             spaceBetween: 0
    //         },
    //         480: {
    //             slidesPerView: 1.4,
    //             spaceBetween: 10
    //         },
    //         640: {
    //             slidesPerView: 1.5,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 1.8,
    //             spaceBetween: 30
    //         },
    //         1350: {
    //             slidesPerView: 2,
    //             spaceBetween: 30
    //         },
    //     },
    // });
    
    // var portfolioSwiper = new Swiper(".portfolioSwiper", {
    //     slidesPerView: 2,
    //     spaceBetween: 10,
    //     speed:2000,
    //     // allowTouchMove: false,
    //     autoplay: {
    //         enabled: true,
    //         delay: 2500,
    //     },
    //     loop: true,
    //     effect: 'coverflow',
    //     centeredSlides: true,
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 1.5,
    //             spaceBetween: 20
    //         },
    //         480: {
    //             slidesPerView: 1.8,
    //             spaceBetween: 20
    //         },
    //         640: {
    //             slidesPerView: 2.5,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 3.5,
    //             spaceBetween: 30
    //         },
    //         1350: {
    //             slidesPerView: 4,
    //             spaceBetween: 30
    //         },
    //     },
    // });
    
    // var blogsSwiper = new Swiper(".blogsSwiper", {
    //     slidesPerView: 2,
    //     spaceBetween: 10,
    //     speed:1000,
    //     loop: false,
    //     effect: 'slide',
    //     breakpoints: {
    //         320: {
    //             slidesPerView: 1,
    //             spaceBetween: 30
    //         },
    //         480: {
    //             slidesPerView: 1.2,
    //             spaceBetween: 20
    //         },
    //         640: {
    //             slidesPerView: 2,
    //             spaceBetween: 30,
    //         },
    //         1024: {
    //             slidesPerView: 2.6,
    //             spaceBetween: 30
    //         },
    //         1350: {
    //             slidesPerView: 3,
    //             spaceBetween: 30
    //         },
    //     },
    // });
    
    
    // var servicesSwiperThumb = new Swiper(".servicesSwiperThumb", {
    //     spaceBetween: 20,
    //     slidesPerView: "auto",
    //     freeMode: false,
    //     loop:true,
    //     watchSlidesProgress: false,
    //     // centeredSlides: true,
    //     centerInsufficientSlides: true,
    //     centeredSlidesBounds: true,
    //     speed: 500,

    // });
    // var servicesSwiper = new Swiper(".servicesSwiper", {
    //     spaceBetween: 10,
    //     loop:true,
    //     slidesPerView: 1,
    //     effect: 'fade',
    //     thumbs: {
    //         swiper: servicesSwiperThumb,
    //     },
    //     speed: 1500,
    // });