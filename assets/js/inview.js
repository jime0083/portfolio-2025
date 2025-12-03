/**
 * Simple Inview using Intersection Observer
 * Adds 'is-inview' class when element enters viewport.
 */
document.addEventListener('DOMContentLoaded', function () {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-inview');
            } else {
                entry.target.classList.remove('is-inview');
            }
        });
    }, observerOptions);

    // Observe elements with specific classes
    const targets = document.querySelectorAll('.slide-down-bounce, .fade-in-left, .fade-in-right, .js-split-text');
    targets.forEach(target => {
        observer.observe(target);
    });
});
