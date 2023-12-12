/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/lazy-content.js ***!
  \**************************************/
__webpack_require__.r(__webpack_exports__);
// resources/js/lazy-content.js

document.addEventListener('DOMContentLoaded', function () {
  var lazyContainer = document.getElementById('lazyContainer');
  var lazyContent = document.getElementById('lazyContent'); // Use getElementById

  if (lazyContent) {
    // Function to load the lazy content
    var loadLazyContent = function loadLazyContent(element) {
      // Use AJAX, fetch, or any other method to load the content
      var src = element.getAttribute('data-src');
      fetch(src).then(function (response) {
        return response.text();
      }).then(function (data) {
        element.innerHTML = data;
      })["catch"](function (error) {
        return console.error('Error loading content:', error);
      });
    };
    var options = {
      root: lazyContainer,
      rootMargin: '0px',
      threshold: 0.5 // Trigger when 50% of the element is visible
    };
    var observer = new IntersectionObserver(function (entries, observer) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          // Load the content when it becomes visible
          loadLazyContent(entry.target);
          observer.unobserve(entry.target);
        }
      });
    }, options);

    // Start observing the lazy content
    observer.observe(lazyContent);
  }
});
/******/ })()
;