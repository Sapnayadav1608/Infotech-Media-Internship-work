let slides = document.querySelectorAll('.slide');
let dots = document.querySelectorAll('.slider-dot');
let current = 0;
let interval = setInterval(nextSlide, 5000);

function showSlide(index) {
    // Remove active from current
    slides[current].classList.remove('active');
    dots[current].classList.remove('active');

    current = index;

    // Force reflow to restart CSS animations
    slides[current].classList.remove('active');
    void slides[current].offsetWidth;
    slides[current].classList.add('active');
    dots[current].classList.add('active');
}

function nextSlide() {
    showSlide((current + 1) % slides.length);
}

function prevSlide() {
    showSlide((current - 1 + slides.length) % slides.length);
}

dots.forEach((dot, i) => dot.addEventListener('click', () => { showSlide(i); resetInterval(); }));

function resetInterval() {
    clearInterval(interval);
    interval = setInterval(nextSlide, 5000);
}

function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 2000;
    const increment = target / (duration / 16);
    let current = 0;

    const updateCounter = () => {
        current += increment;
        if (current < target) {
            element.textContent = target >= 1000 ? Math.floor(current / 1000) + 'K+' : Math.floor(current) + '+';
            requestAnimationFrame(updateCounter);
        } else {
            element.textContent = target >= 1000 ? Math.floor(target / 1000) + 'K+' : target + '+';
        }
    };
    updateCounter();
}

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.querySelectorAll('.stat-value').forEach(counter => {
                if (counter.textContent === '0') animateCounter(counter);
            });
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.5 });

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.stats-row, .stat-box').forEach(section => observer.observe(section));
});
