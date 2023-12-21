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
/*!********************************************************************!*\
  !*** ./resources/js/festival-decor/snowfall-xmas/snowfall-xmas.js ***!
  \********************************************************************/
__webpack_require__.r(__webpack_exports__);
document.addEventListener("DOMContentLoaded", function () {
  var c = document.querySelector(".snow-container"),
    p = 0.1,
    f = 1.25,
    pause = true,
    max = 30,
    flakes = [];
  var i,
    a = true;
  var r = function r(s) {
    var z = Math.random() * 5 + 1,
      vw = innerWidth - z,
      vh = innerHeight;
    s.style = "width:".concat(z, "px;height:").concat(z, "px;left:").concat(Math.random() * vw, "px;top:-").concat(z, "px;animation-duration:").concat((Math.random() * 3 + 2) / f, "s;animation-timing-function:linear;animation-name:").concat(Math.random() < 0.5 ? "fall" : "diagonalfall");
    setTimeout(function () {
      return parseInt(s.style.top) < vh ? r(s) : s.remove();
    }, parseFloat(s.style.animationDuration) * 1e3);
  };
  var cr = function cr() {
    return flakes.length < max && (flakes.push(c.appendChild(Object.assign(document.createElement("div"), {
      className: "snowflake absolute bg-white rounded-full opacity-80 pointer-events-none"
    }))), r(flakes[flakes.length - 1]));
  };
  var g = function g() {
    var n = Math.ceil(innerWidth * innerHeight / 1e3) * p,
      t = 5e3 / n;
    clearInterval(i);
    i = setInterval(function () {
      return a && flakes.length < max && requestAnimationFrame(cr);
    }, t);
  };
  var v = function v() {
    return pause && (a = !document.hidden) ? g() : clearInterval(i);
  };
  g();
  addEventListener("resize", function () {
    return clearInterval(i), setTimeout(g, 1e3);
  });
  addEventListener("visibilitychange", v);
});
window.setRemoveSanta = function () {
  document.querySelectorAll('.santatop, .senta-cap-open').forEach(function (e) {
    return e.classList.add('!hidden');
  });
  document.querySelectorAll('.santa-cap').forEach(function (e) {
    return e.classList.remove('!hidden');
  });
};
/******/ })()
;