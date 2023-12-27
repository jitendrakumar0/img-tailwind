/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/lazy-content.js ***!
  \**************************************/
document.addEventListener('DOMContentLoaded', function () {
  var lazyImages = document.querySelectorAll('img[loading="lazy"]');
  if ('loading' in HTMLImageElement.prototype) {
    lazyImages.forEach(function (img) {
      img.src = img.dataset.src;
      img.removeAttribute('loading');
    });
  } else document.body.appendChild(Object.assign(document.createElement('script'), {
    src: 'https://polyfill.io/v3/polyfill.min.js?features=loading'
  }));
});
/******/ })()
;