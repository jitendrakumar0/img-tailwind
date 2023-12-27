import 'swiper';
import 'swiper';
import 'swiper/css/navigation';
// import 'swiper/css/pagination';
// import 'swiper/css/scrollbar';
import '../plugins/intl-tel-input/build/js/intlTelInput.js';

import Swiper from 'swiper/bundle';
import intlTelInput from '../plugins/intl-tel-input/build/js/intlTelInput.js';


// document.addEventListener("DOMContentLoaded", () => {
//     initSwipers({ spaceBetween: 5, slidesPerView: 2 });
//     function initSwipers(defaults = {}, selector = ".swiper") {
//         document.querySelectorAll(selector).forEach(swiper => {
//             const options = { ...defaults, ...JSON.parse(swiper.dataset.swiper || "{}") };
//             new Swiper(swiper, options);
//         });
//     }
// });

document.addEventListener("DOMContentLoaded", () => {
    initSwipers({ spaceBetween: 5, slidesPerView: 2 });

    function initSwipers(defaults = {}, selector = ".swiper") {
        document.querySelectorAll(selector).forEach(swiper => {
            const options = { ...defaults, ...JSON.parse(swiper.dataset.swiper || "{}") };

            // Add video-related options
            options.on = {
                ...options.on,
                transitionStart: function() {
                    var videos = document.querySelectorAll('video');
                    Array.prototype.forEach.call(videos, function(video) {
                        video.pause();
                    });
                },
                transitionEnd: function() {
                    var activeIndex = this.activeIndex;
                    var activeSlide = document.getElementsByClassName('swiper-slide')[activeIndex];
                    var activeSlideVideo = activeSlide.getElementsByTagName('video')[0];

                    // Check if video element is defined before playing
                    if (activeSlideVideo) {
                        activeSlideVideo.play();
                    }
                }
            };

            new Swiper(swiper, options);
        });
    }
});





document.addEventListener('DOMContentLoaded', function () {

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

    var buttons = document.querySelectorAll("button");
    var anchors = document.querySelectorAll("a");

    buttons.forEach(function (button) {
        button.addEventListener("mouseover", addColorViolet);
        button.addEventListener("mouseout", removeColorViolet);
    });

    anchors.forEach(function (anchor) {
        anchor.addEventListener("mouseover", addPreload);
        anchor.addEventListener("mouseout", removePreload);
    });

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

    // Active navbar on scroll
    window.addEventListener('scroll', function () {
        var scroll = window.scrollY || document.documentElement.scrollTop;
        var mainBody = document.querySelector('body');
        if (scroll <= 80) {
            mainBody.classList.remove('group/ns');
        } else {
            mainBody.classList.add('group/ns');
        }
    });

});


document.addEventListener('DOMContentLoaded', function() {
    const input = document.querySelector("#phone");
    const iti = intlTelInput(input, {
        nationalMode: true,
        initialCountry: 'in',
        placeholderNumberType: 'FIXED_LINE',
        onlyCountries: ["in", "us", "cn", "jp", "br", "ru", "gb", "de", "fr", "it", "es", "kr", "au", "ca", "mx", "id", "tr", "za", "ng", "eg", "ar"], 
        localizedCountries: {
            in: "India",
            fr: "Frankreich",
            de: "Deutschland",
            es: "Spanien",
            it: "Italien",
            ch: "Schweiz",
            nl: "Niederlande",
            at: "Österreich",
            dk: "Dänemark",
        },
        preferredCountries: ["in","us"],
        nationalMode: false,
        separateDialCode: true,
        // utilsScript: "./node_modules/intl-tel-input/build/js/utils.js?1701962297307"
    });

    var phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function() {
        phoneInput.value = phoneInput.value.replace(/\D/g, '');
    });

});

(function() {
    'use strict';

    document.querySelectorAll('.needs-validation').forEach(form => {
        form.addEventListener('submit', event => {
            event.preventDefault();
            event.stopPropagation();
            
            const invalidElements = form.querySelectorAll(':invalid');
            if (!form.checkValidity()) {
                if (invalidElements.length > 0) {
                    invalidElements[0].focus();
                }
            } else {
                const xhr = new XMLHttpRequest();
                xhr.open('POST', document.getElementById('ajxURL').value, true);
                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                xhr.onreadystatechange = () => {
                    const submitBtn = event.submitter;
                    submitBtn.classList.add('disabled');

                    event.preventDefault();
                    event.stopPropagation();
                    if (xhr.readyState == 4) {
                        if (xhr.status == 200) {
                            const data = JSON.parse(xhr.responseText);
                            window.location = document.getElementById('reUrl').value;
                        } else {
                            alert('Error posting feed.');
                        }
                    }
                };
                xhr.send(new URLSearchParams(new FormData(document.forms['feedInput'])).toString());
            }
            form.classList.add('check');
        }, false);
    });
})();
