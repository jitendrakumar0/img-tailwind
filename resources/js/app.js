import Swiper from 'swiper/bundle';

import 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';


document.addEventListener('DOMContentLoaded', function () {
    const progressCircles = document.querySelectorAll(".autoplay-progress svg");
    const progressContents = document.querySelectorAll(".autoplay-progress span");
    var heroSwiperThumbsSlider = new Swiper(".heroSwiperThumbsSlider", {
        // spaceBetween: 0,
        slidesPerView: 1,
        // watchSlidesProgress: true,
        effect: "fade",
        speed: 5500,
        pagination:false,
        navigation:false
    });
    const heroSwiper = new Swiper('.heroSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false
        },
        speed: 1500,
        thumbs: {
            swiper: heroSwiperThumbsSlider,
        },
        loop: true,
        keyboard: {
            enabled: true,
        },
        breakpoints: {
            320: {
                centeredSlides: true,
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            480: {
                centeredSlides: true,
                slidesPerView: 1.2,
                spaceBetween: 20
            },
            640: {
                centeredSlides: true,
                slidesPerView: 1.2,
                spaceBetween: 20,
            },
            1024: {
                centeredSlides: false,
                slidesPerView: 2.5,
                spaceBetween: 40
            },
            1350: {
                slidesPerView: 2.5,
                spaceBetween: 40
            },
        },
        // pagination: {
        //     el: ".swiper-pagination",
        //     clickable: true,
        //     dynamicBullets: true,
        //     //   type: 'progressbar',
        // },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
        on: {
            autoplayTimeLeft(s, time, progress) {
                progressCircles.forEach(progressCircle => {
                    // Do something with each progress circle
                    progressCircle.style.setProperty("--progress", 1 - progress);
                });
                
                progressContents.forEach(progressContent => {
                    // Do something with each progress content
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                });
            }
        },
    });
    
    var logoClouds = new Swiper(".logo-clouds", {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            320: {
                slidesPerView: 5,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 5,
                spaceBetween: 20
            },
            640: {
                slidesPerView: 7,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 7,
                spaceBetween: 30
            },
            1350: {
                slidesPerView: 9,
                spaceBetween: 30
            },
        },
        speed:5000,
        allowTouchMove: false,
        autoplay: {
            enabled: true,
            delay: 0,
        },
    });
    
    var AwardsRecognitions = new Swiper(".AwardsRecognitions", {
        slidesPerView: 2,
        spaceBetween: 10,
        speed:5000,
        // allowTouchMove: false,
        autoplay: {
            enabled: true,
            delay: 0,
        },
        loop: true,
        effect: 'coverflow',
        centeredSlides: true,
        breakpoints: {
            320: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 2,
                spaceBetween: 30
            },
            1350: {
                slidesPerView: 2,
                spaceBetween: 30
            },
        },
    });

    document.body.addEventListener("mousemove", function (event) {
        var cursor = document.getElementById("cursor");
        var cursor2 = document.getElementById("cursor2");
    
        cursor.style.left = event.clientX + "px";
        cursor.style.top = event.clientY + "px";
        cursor2.style.left = event.clientX + "px";
        cursor2.style.top = event.clientY + "px";
    });

    var cursor2 = document.getElementById("cursor2");

    function addHoverClass() {
        document.body.classList.add("hover");
    }

    function removeHoverClass() {
        document.body.classList.remove("hover");
    }

    removeHoverClass();

    var hoverLinks = document.querySelectorAll(".hoverLink");

    hoverLinks.forEach(function (link) {
        link.addEventListener("mouseover", addHoverClass);
        link.addEventListener("mouseout", removeHoverClass);
    });

    // Color change on scroll
    var buttons = document.querySelectorAll("button");
    var anchors = document.querySelectorAll("a");

    buttons.forEach(function (button) {
        // Your code for each button
        button.addEventListener("mouseover", addColorViolet);
        button.addEventListener("mouseout", removeColorViolet);
    });

    anchors.forEach(function (anchor) {
        // Your code for each anchor
        anchor.addEventListener("mouseover", addPreload);
        anchor.addEventListener("mouseout", removePreload);
    });

    // Other functions...

    function addColorViolet() {
        document.body.classList.add("group/cyan");
    }

    function removeColorViolet() {
        document.body.classList.remove("group/cyan");
    }

    function addPreload() {
        document.body.classList.add("group/preload");
    }

    function removePreload() {
        document.body.classList.remove("group/preload");
    }
    
    
    
    var swiper3 = new Swiper(".mySwiper", {
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,

    });
    var swiper2 = new Swiper(".mySwiper2", {
        spaceBetween: 10,
        // navigation: {
        // nextEl: ".swiper-button-next",
        // prevEl: ".swiper-button-prev",
        // },
        thumbs: {
        swiper: swiper,
    },
    });

    let card =  document.querySelector('.card')
    // console.log(card)
    card.forEach(function(e){
        e.addEventListener('click', (aa)=>{
            aa.classList.add('show')
        })
    })
});

