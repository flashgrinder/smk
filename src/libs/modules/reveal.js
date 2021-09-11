function init() {
    const revealItemsObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                revealItemsObserver.unobserve(entry.target);
                entry.target.classList.add('is-revealed');
            }
        });
    });

    Array.from(document.querySelectorAll('.js-reveal')).forEach((el) => {
        revealItemsObserver.observe(el);
    });
}

export default { init }