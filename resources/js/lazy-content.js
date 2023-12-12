// resources/js/lazy-content.js

document.addEventListener('DOMContentLoaded', function() {
    const lazyContainer = document.getElementById('lazyContainer');
    const lazyContent = document.getElementById('lazyContent'); // Use getElementById

    if (lazyContent) {
        const options = {
            root: lazyContainer,
            rootMargin: '0px',
            threshold: 0.5 // Trigger when 50% of the element is visible
        };

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Load the content when it becomes visible
                    loadLazyContent(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        // Start observing the lazy content
        observer.observe(lazyContent);

        // Function to load the lazy content
        function loadLazyContent(element) {
            // Use AJAX, fetch, or any other method to load the content
            const src = element.getAttribute('data-src');
            fetch(src)
                .then(response => response.text())
                .then(data => {
                    element.innerHTML = data;
                })
                .catch(error => console.error('Error loading content:', error));
        }
    }
});
