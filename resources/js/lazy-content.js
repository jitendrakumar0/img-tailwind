document.addEventListener('DOMContentLoaded', () => {
    var lazyImages = document.querySelectorAll('img[loading="lazy"]');
    if ('loading' in HTMLImageElement.prototype) {
        lazyImages.forEach(img => { img.src = img.dataset.src; img.removeAttribute('loading'); });
    } else document.body.appendChild(Object.assign(document.createElement('script'), { src: 'https://polyfill.io/v3/polyfill.min.js?features=loading' }));
});
