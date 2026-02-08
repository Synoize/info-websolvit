// Page Loading
window.addEventListener("load", () => {
    setTimeout(() => {
        document.getElementById("loader").classList.add("hidden");
        document.getElementById("content").classList.remove("hidden");
    }, 2000);
});

// Data Animation
const animatedElements = document.querySelectorAll('[data-animate]');

const observer = new IntersectionObserver(
    (entries) => {
        entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('animate-show');
                }, index * 120); // stagger
            }
        });
    },
    { threshold: 0.2 }
);

animatedElements.forEach(el => observer.observe(el));