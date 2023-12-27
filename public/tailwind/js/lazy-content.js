(()=>{/*!**************************************!*\
  !*** ./resources/js/lazy-content.js ***!
  \**************************************/document.addEventListener("DOMContentLoaded",function(){var t=document.querySelectorAll('img[loading="lazy"]');"loading"in HTMLImageElement.prototype?t.forEach(function(e){e.src=e.dataset.src,e.removeAttribute("loading")}):document.body.appendChild(Object.assign(document.createElement("script"),{src:"https://polyfill.io/v3/polyfill.min.js?features=loading"}))})})();
