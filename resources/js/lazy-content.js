
document.addEventListener("DOMContentLoaded", function() {
    const images = document.querySelectorAll("img[data-src]");

    const options = {
        root: null,
        rootMargin: "0px",
        threshold: 0.5
    };

    const observer = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute("data-src");
                observer.unobserve(img);
            }
        });
    }, options);

    images.forEach(img => {
        observer.observe(img);
    });
});