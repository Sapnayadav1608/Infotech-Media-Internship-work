// Hamburger Menu Toggle
const hamburger = document.querySelector('.hamburger');
const navbar = document.querySelector('.navbar');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navbar.classList.toggle('open');
    });
}

// Hero Carousel
const slides = document.querySelectorAll('.carousel-slide');
const dots = document.querySelectorAll('.dot');
const prevBtn = document.querySelector('.carousel-btn.prev');
const nextBtn = document.querySelector('.carousel-btn.next');

if (slides.length) {
    let current = 0;
    let autoPlay = setInterval(nextSlide, 4000);

    function goToSlide(index) {
        slides[current].classList.remove('active');
        dots[current].classList.remove('active');
        current = (index + slides.length) % slides.length;
        slides[current].classList.add('active');
        dots[current].classList.add('active');
    }

    function nextSlide() { goToSlide(current + 1); }
    function prevSlide() { goToSlide(current - 1); }

    nextBtn.addEventListener('click', () => { clearInterval(autoPlay); nextSlide(); autoPlay = setInterval(nextSlide, 4000); });
    prevBtn.addEventListener('click', () => { clearInterval(autoPlay); prevSlide(); autoPlay = setInterval(nextSlide, 4000); });

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => { clearInterval(autoPlay); goToSlide(i); autoPlay = setInterval(nextSlide, 4000); });
    });
}

// Dynamic Bubbles in all sections
document.addEventListener('DOMContentLoaded', () => {
    const fadeEls = document.querySelectorAll('.fade-up');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => {
                    entry.target.classList.add('visible');
                }, i * 120);
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });

    fadeEls.forEach(el => observer.observe(el));

    const sections = document.querySelectorAll('.features, .about-snippet, .packages-preview, .gallery-preview, .testimonials, .faq, .welcome-section, .about-stats, .amenities-section, .funfacts-section, .awards-section, .faq-section, .reach-section, .pkg-section, .inclusions-section, .gallery-section, .blog-section, .contact-info-section, .contact-main-section');

    sections.forEach(section => {
        for (let i = 0; i < 8; i++) {
            const bubble = document.createElement('span');
            bubble.classList.add('section-bubble');
            bubble.style.width = Math.random() * 60 + 20 + 'px';
            bubble.style.height = bubble.style.width;
            bubble.style.left = Math.random() * 100 + '%';
            bubble.style.animationDuration = Math.random() * 6 + 6 + 's';
            bubble.style.animationDelay = Math.random() * 5 + 's';
            section.appendChild(bubble);
        }
    });
});

// Gallery Filter Tabs
const galleryTabs = document.querySelectorAll('.gallery-tab');
const galItems = document.querySelectorAll('.gal-item');

if (galleryTabs.length) {
    galleryTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            galleryTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;
            galItems.forEach(item => {
                if (filter === 'all' || item.dataset.category === filter) {
                    item.classList.remove('hidden');
                } else {
                    item.classList.add('hidden');
                }
            });
        });
    });
}

// Lightbox
const lightbox = document.getElementById('lightbox');
const lightboxImg = document.getElementById('lightbox-img');
const lightboxCaption = document.getElementById('lightbox-caption');
let currentIndex = 0;
let visibleItems = [];

if (lightbox) {
    galItems.forEach((item, i) => {
        item.addEventListener('click', () => {
            visibleItems = [...galItems].filter(el => !el.classList.contains('hidden'));
            currentIndex = visibleItems.indexOf(item);
            openLightbox(currentIndex);
        });
    });

    function openLightbox(index) {
        const item = visibleItems[index];
        const video = item.querySelector('video');
        const img = item.querySelector('img');
        const caption = item.querySelector('.gal-overlay span').textContent;
        const wrap = document.querySelector('.lightbox-img-wrap');

        // Remove previous media
        const prevVideo = wrap.querySelector('video');
        if (prevVideo) prevVideo.remove();
        lightboxImg.style.display = '';

        if (video) {
            lightboxImg.style.display = 'none';
            const v = document.createElement('video');
            v.src = video.src;
            v.controls = true;
            v.autoplay = true;
            v.style.maxWidth = '100%';
            v.style.maxHeight = '80vh';
            v.style.borderRadius = '12px';
            wrap.insertBefore(v, lightboxCaption);
        } else {
            lightboxImg.src = img.src;
            lightboxImg.alt = img.alt;
        }
        lightboxCaption.textContent = caption;
        lightbox.style.display = 'flex';
        lightbox.classList.add('active');
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        lightbox.style.display = 'none';
        const v = document.querySelector('.lightbox-img-wrap video');
        if (v) { v.pause(); v.remove(); }
        lightboxImg.style.display = '';
    }

    document.querySelector('.lightbox-close').addEventListener('click', closeLightbox);
    document.querySelector('.lightbox-prev').addEventListener('click', () => { currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length; openLightbox(currentIndex); });
    document.querySelector('.lightbox-next').addEventListener('click', () => { currentIndex = (currentIndex + 1) % visibleItems.length; openLightbox(currentIndex); });
    lightbox.addEventListener('click', (e) => { if (e.target === lightbox) closeLightbox(); });
    document.addEventListener('keydown', (e) => {
        if (!lightbox.classList.contains('active')) return;
        if (e.key === 'ArrowLeft') { currentIndex = (currentIndex - 1 + visibleItems.length) % visibleItems.length; openLightbox(currentIndex); }
        if (e.key === 'ArrowRight') { currentIndex = (currentIndex + 1) % visibleItems.length; openLightbox(currentIndex); }
        if (e.key === 'Escape') closeLightbox();
    });
}

// Home Page Gallery Lightbox
const homeLightbox = document.getElementById('home-lightbox');
const homeLightboxImg = document.getElementById('home-lightbox-img');
const homeLightboxCaption = document.getElementById('home-lightbox-caption');
const homeGalItems = document.querySelectorAll('.gallery-item');
let homeCurrentIndex = 0;

if (homeLightbox && homeGalItems.length) {
    homeGalItems.forEach((item, i) => {
        item.addEventListener('click', () => {
            homeCurrentIndex = i;
            openHomeLightbox(homeCurrentIndex);
        });
    });

    function openHomeLightbox(index) {
        const item = homeGalItems[index];
        const video = item.querySelector('video');
        const img = item.querySelector('img');
        const wrap = homeLightbox.querySelector('.lightbox-img-wrap');

        const prevVideo = wrap.querySelector('video');
        if (prevVideo) prevVideo.remove();
        homeLightboxImg.style.display = '';

        if (video) {
            homeLightboxImg.style.display = 'none';
            const v = document.createElement('video');
            v.src = video.src;
            v.controls = true;
            v.autoplay = true;
            v.style.maxWidth = '100%';
            v.style.maxHeight = '80vh';
            v.style.borderRadius = '12px';
            wrap.insertBefore(v, homeLightboxCaption);
            homeLightboxCaption.textContent = 'Video';
        } else {
            homeLightboxImg.src = img.src;
            homeLightboxImg.alt = img.alt;
            homeLightboxCaption.textContent = img.alt;
        }
        homeLightbox.style.display = 'flex';
        homeLightbox.classList.add('active');
    }

    function closeHomeLightbox() {
        homeLightbox.classList.remove('active');
        homeLightbox.style.display = 'none';
        const v = homeLightbox.querySelector('.lightbox-img-wrap video');
        if (v) { v.pause(); v.remove(); }
        homeLightboxImg.style.display = '';
    }

    homeLightbox.querySelector('.lightbox-close').addEventListener('click', closeHomeLightbox);
    homeLightbox.querySelector('.lightbox-prev').addEventListener('click', () => { homeCurrentIndex = (homeCurrentIndex - 1 + homeGalItems.length) % homeGalItems.length; openHomeLightbox(homeCurrentIndex); });
    homeLightbox.querySelector('.lightbox-next').addEventListener('click', () => { homeCurrentIndex = (homeCurrentIndex + 1) % homeGalItems.length; openHomeLightbox(homeCurrentIndex); });
    homeLightbox.addEventListener('click', (e) => { if (e.target === homeLightbox) closeHomeLightbox(); });
    document.addEventListener('keydown', (e) => {
        if (!homeLightbox.classList.contains('active')) return;
        if (e.key === 'ArrowLeft') { homeCurrentIndex = (homeCurrentIndex - 1 + homeGalItems.length) % homeGalItems.length; openHomeLightbox(homeCurrentIndex); }
        if (e.key === 'ArrowRight') { homeCurrentIndex = (homeCurrentIndex + 1) % homeGalItems.length; openHomeLightbox(homeCurrentIndex); }
        if (e.key === 'Escape') closeHomeLightbox();
    });
}

// Video hover play/pause
document.querySelectorAll('.gal-video, .home-video-item').forEach(item => {
    const video = item.querySelector('video');
    if (!video) return;
    item.addEventListener('mouseenter', () => video.play());
    item.addEventListener('mouseleave', () => { video.pause(); video.currentTime = 0; });
});

// Packages Filter Tabs
const pkgTabs = document.querySelectorAll('.pkg-tab');
const pkgCards = document.querySelectorAll('.pkg-card');

if (pkgTabs.length) {
    pkgTabs.forEach(tab => {
        tab.addEventListener('click', () => {
            pkgTabs.forEach(t => t.classList.remove('active'));
            tab.classList.add('active');
            const filter = tab.dataset.filter;
            pkgCards.forEach(card => {
                if (filter === 'all' || card.dataset.category === filter) {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });
    });
}

// FAQ Accordion
document.querySelectorAll('.faq-question').forEach(question => {
    question.addEventListener('click', () => {
        const item = question.parentElement;
        const isOpen = item.classList.contains('open') || item.classList.contains('active');
        document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open', 'active'));
        if (!isOpen) {
            item.classList.add('open');
            item.classList.add('active');
        }
    });
});

// Booking Modal
const bookingModal = document.getElementById('bookingModal');
const closeModal = document.getElementById('closeModal');
const bookingSubmit = document.getElementById('bookingSubmit');
const bookingSuccess = document.getElementById('bookingSuccess');
const bookingFormDiv = document.getElementById('bookingForm');

function openBookingModal() {
    bookingModal.classList.add('active');
    document.body.style.overflow = 'hidden';
}

function closeBookingModal() {
    bookingModal.classList.remove('active');
    document.body.style.overflow = '';
    if (bookingSuccess) bookingSuccess.style.display = 'none';
    if (bookingFormDiv) {
        bookingFormDiv.style.display = 'block';
        bookingFormDiv.reset();
    }
    const modalH2 = document.querySelector('.booking-modal h2');
    const modalSub = document.querySelector('.modal-sub');
    const btn = document.getElementById('bookingSubmit');
    if (modalH2) modalH2.style.display = '';
    if (modalSub) modalSub.style.display = '';
    if (btn) { btn.disabled = false; btn.textContent = 'Send Booking Request 🎉'; }
}

// Open on all Book Now buttons
document.querySelectorAll('.btn-book, a.btn-primary[href="packages.html"], a.btn-primary[href="contact.html"]').forEach(btn => {
    if (btn.classList.contains('btn-book') || btn.textContent.trim() === 'Book Now') {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            openBookingModal();
        });
    }
});

document.querySelectorAll('.btn-book').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        openBookingModal();
    });
});

if (closeModal) closeModal.addEventListener('click', closeBookingModal);

if (bookingModal) {
    bookingModal.addEventListener('click', (e) => {
        if (e.target === bookingModal) closeBookingModal();
    });
}

document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape' && bookingModal && bookingModal.classList.contains('active')) closeBookingModal();
});


