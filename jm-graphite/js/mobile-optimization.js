/* ===== MOBILE OPTIMIZATION JAVASCRIPT ===== */

document.addEventListener('DOMContentLoaded', function() {
    
    // ===== TOUCH DEVICE DETECTION =====
    const isTouchDevice = () => {
        return (('ontouchstart' in window) ||
                (navigator.maxTouchPoints > 0) ||
                (navigator.msMaxTouchPoints > 0));
    };
    
    // ===== MOBILE MENU OPTIMIZATION =====
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('#navbarCollapse');
    const megaMenu = document.getElementById('megaMenu');
    
    if (navbarToggler && navbarCollapse) {
        // Close mega menu when regular links are clicked
        const regularNavLinks = navbarCollapse.querySelectorAll('a.nav-link:not(#productsToggle)');
        regularNavLinks.forEach(link => {
            link.addEventListener('click', function() {
                if (window.innerWidth < 992) {
                    // Close navbar
                    navbarToggler.click();
                    // Also close mega menu if open
                    if (megaMenu) {
                        megaMenu.style.display = 'none';
                    }
                }
            });
        });
        
        // Close menu when clicking outside navbar (but not on mega menu items)
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.navbar') && navbarCollapse.classList.contains('show')) {
                // Don't close if clicking on mega menu
                if (!megaMenu || !megaMenu.contains(event.target)) {
                    navbarToggler.click();
                    if (megaMenu) {
                        megaMenu.style.display = 'none';
                    }
                }
            }
        });
    }
    
    // ===== VIEWPORT HEIGHT FIX FOR MOBILE =====
    const setViewportHeight = () => {
        const vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
    };
    
    setViewportHeight();
    window.addEventListener('resize', setViewportHeight);
    window.addEventListener('orientationchange', setViewportHeight);
    
    // ===== SMOOTH SCROLL FOR ANCHOR LINKS =====
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && document.querySelector(href)) {
                e.preventDefault();
                const target = document.querySelector(href);
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // ===== LAZY LOADING FOR IMAGES =====
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });
        
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }
    
    // ===== BACK TO TOP BUTTON OPTIMIZATION =====
    const backToTopBtn = document.querySelector('.back-to-top');
    if (backToTopBtn) {
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopBtn.style.display = 'flex';
            } else {
                backToTopBtn.style.display = 'none';
            }
        });
        
        backToTopBtn.addEventListener('click', (e) => {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // ===== FORM INPUT OPTIMIZATION =====
    const formInputs = document.querySelectorAll('input, textarea, select');
    formInputs.forEach(input => {
        // Add focus styles for better mobile UX
        input.addEventListener('focus', function() {
            this.style.fontSize = '16px'; // Prevent zoom on iOS
        });
        
        // Add blur event
        input.addEventListener('blur', function() {
            this.style.fontSize = '';
        });
    });
    
    // ===== PREVENT DOUBLE TAP ZOOM =====
    let lastTouchEnd = 0;
    document.addEventListener('touchend', function(event) {
        const now = Date.now();
        if (now - lastTouchEnd <= 300) {
            event.preventDefault();
        }
        lastTouchEnd = now;
    }, false);
    
    // ===== OPTIMIZE CAROUSEL FOR MOBILE =====
    const carousels = document.querySelectorAll('.owl-carousel');
    if (carousels.length > 0 && typeof $.fn.owlCarousel !== 'undefined') {
        carousels.forEach(carousel => {
            const $carousel = $(carousel);
            if ($carousel.hasClass('products-carousel')) {
                $carousel.owlCarousel({
                    items: 1,
                    loop: true,
                    margin: 10,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: { items: 1 },
                        480: { items: 1 },
                        768: { items: 2 },
                        992: { items: 3 },
                        1200: { items: 4 }
                    }
                });
            }
        });
    }
    
    // ===== TOUCH FEEDBACK FOR BUTTONS =====
    if (isTouchDevice()) {
        const buttons = document.querySelectorAll('button, .btn, a.btn');
        buttons.forEach(btn => {
            btn.addEventListener('touchstart', function() {
                this.style.opacity = '0.8';
            });
            
            btn.addEventListener('touchend', function() {
                this.style.opacity = '1';
            });
        });
    }
    
    // ===== OPTIMIZE ANIMATIONS FOR MOBILE =====
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (prefersReducedMotion) {
        document.documentElement.style.scrollBehavior = 'auto';
        document.querySelectorAll('[class*="animation"]').forEach(el => {
            el.style.animation = 'none';
        });
    }
    
    // ===== RESPONSIVE FONT SIZE =====
    const adjustFontSize = () => {
        const width = window.innerWidth;
        const root = document.documentElement;
        
        if (width < 480) {
            root.style.fontSize = '14px';
        } else if (width < 768) {
            root.style.fontSize = '15px';
        } else if (width < 992) {
            root.style.fontSize = '16px';
        } else {
            root.style.fontSize = '16px';
        }
    };
    
    adjustFontSize();
    window.addEventListener('resize', adjustFontSize);
    
    // ===== MOBILE DROPDOWN OPTIMIZATION =====
    // Mega menu toggle is handled in header.php inline script to avoid conflicts
    
    // ===== PERFORMANCE OPTIMIZATION =====
    // Debounce scroll events
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            // Perform scroll-based actions
        }, 100);
    });
    
    // ===== NETWORK STATUS CHECK =====
    window.addEventListener('online', () => {
        console.log('Connection restored');
    });
    
    window.addEventListener('offline', () => {
        console.log('Connection lost');
    });
    
    // ===== PRINT OPTIMIZATION =====
    window.addEventListener('beforeprint', () => {
        document.body.style.overflow = 'visible';
    });
    
    window.addEventListener('afterprint', () => {
        document.body.style.overflow = '';
    });
});

// ===== UTILITY FUNCTIONS =====

// Detect device type
function getDeviceType() {
    const width = window.innerWidth;
    if (width < 480) return 'mobile-xs';
    if (width < 768) return 'mobile-sm';
    if (width < 992) return 'tablet';
    if (width < 1200) return 'desktop-sm';
    return 'desktop-lg';
}

// Check if element is in viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Throttle function for performance
function throttle(func, limit) {
    let inThrottle;
    return function() {
        const args = arguments;
        const context = this;
        if (!inThrottle) {
            func.apply(context, args);
            inThrottle = true;
            setTimeout(() => inThrottle = false, limit);
        }
    };
}

// Debounce function
function debounce(func, delay) {
    let timeoutId;
    return function() {
        const context = this;
        const args = arguments;
        clearTimeout(timeoutId);
        timeoutId = setTimeout(() => func.apply(context, args), delay);
    };
}