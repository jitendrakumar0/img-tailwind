import 'swiper';
import Swiper from 'swiper/bundle';
import '../plugins/intl-tel-input/build/js/intlTelInput.js';

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