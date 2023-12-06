import Swiper from 'swiper/bundle';

import 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';


document.addEventListener('DOMContentLoaded', function () {
    const heroSwiper = new Swiper('.heroSwiper', {
        slidesPerView: 1,
        spaceBetween: 10,
        loop: true,
        speed: 1500,
        breakpoints: {
            320: {
                slidesPerView: 1.1,
                spaceBetween: 20
            },
            480: {
                slidesPerView: 1.1,
                spaceBetween: 30
            },
            640: {
                slidesPerView: 1.5,
                spaceBetween: 40
            },
            1150: {
                slidesPerView: 2.5,
                spaceBetween: 40
            },
            1350: {
                slidesPerView: 2.5,
                spaceBetween: 40
            },
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
            //   type: 'progressbar',
        },

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
            hide: true,
        },
    });

    
    var swiper = new Swiper(".mySwiper", {
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

