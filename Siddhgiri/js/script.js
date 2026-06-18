// ===== HERO CAROUSEL =====
const slides = document.querySelectorAll('.hero-slide');
let currentSlide = 0;
setInterval(function () {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
}, 4000);

// ===== PRELOADER =====
window.addEventListener('load', function () {
    const preloader = document.getElementById('preloader');
    setTimeout(function () {
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
        setTimeout(function () {
            preloader.style.display = 'none';
        }, 500);
    }, 1800);
});

// ===== NAVBAR SCROLL =====
window.addEventListener('scroll', function () {
    const nav = document.getElementById('navbar');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

// ===== HAMBURGER MENU =====
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');

hamburger.addEventListener('click', function () {
    hamburger.classList.toggle('open');
    navLinks.classList.toggle('open');
});

// Close menu on nav link click
navLinks.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', function () {
        hamburger.classList.remove('open');
        navLinks.classList.remove('open');
    });
});

// ===== REVEAL ON SCROLL =====
function revealElements() {
    document.querySelectorAll('.reveal').forEach(function (el) {
        if (el.getBoundingClientRect().top < window.innerHeight - 80) {
            el.classList.add('active');
        }
    });
}

window.addEventListener('scroll', revealElements);
revealElements();

// ===== COUNTER ANIMATION =====
function startCounters() {
    document.querySelectorAll('.counter').forEach(function (counter) {
        if (counter.dataset.counted) return;
        counter.dataset.counted = true;
        const target = +counter.getAttribute('data-target');
        const step = Math.ceil(target / 60);
        let current = 0;
        const timer = setInterval(function () {
            current += step;
            if (current >= target) {
                counter.textContent = target + '+';
                clearInterval(timer);
            } else {
                counter.textContent = current;
            }
        }, 30);
    });
}

window.addEventListener('scroll', function () {
    const heroStats = document.querySelector('.hero-stats');
    if (!heroStats) return;
    const rect = heroStats.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
        startCounters();
    }
});

// ===== SCROLL TO TOP =====
const scrollTopBtn = document.getElementById('scrollTop');

window.addEventListener('scroll', function () {
    if (window.scrollY > 400) {
        scrollTopBtn.classList.add('visible');
    } else {
        scrollTopBtn.classList.remove('visible');
    }
});

scrollTopBtn.addEventListener('click', function () {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

// ===== CONTACT FORM =====
const contactForm = document.getElementById('contactForm');
if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const success = document.getElementById('formSuccess');
        success.style.display = 'block';
        contactForm.reset();
        setTimeout(function () {
            success.style.display = 'none';
        }, 4000);
    });
}

// ===== ACTIVE NAV LINK ON SCROLL =====
const sections = document.querySelectorAll('section[id]');
window.addEventListener('scroll', function () {
    let current = '';
    sections.forEach(function (section) {
        if (window.scrollY >= section.offsetTop - 100) {
            current = section.getAttribute('id');
        }
    });
    document.querySelectorAll('.nav-item').forEach(function (link) {
        link.classList.remove('active');
        if (link.getAttribute('href') === '#' + current) {
            link.classList.add('active');
        }
    });
});
