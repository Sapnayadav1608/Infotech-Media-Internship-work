// Load common footer
if (document.getElementById('footer-placeholder')) {
    const footerPlaceholder = document.getElementById('footer-placeholder');
    const footerXhr = new XMLHttpRequest();
    footerXhr.open('GET', 'footer.html', false);
    footerXhr.send();
    if (footerXhr.status === 200) {
        footerPlaceholder.outerHTML = footerXhr.responseText.trim();
    }
}

// Load common navbar
if (document.getElementById('navbar-placeholder')) {
    const placeholder = document.getElementById('navbar-placeholder');
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'navbar.html', false); // synchronous
    xhr.send();
    if (xhr.status === 200) {
        placeholder.outerHTML = xhr.responseText.trim();
    }
    initNavbar();
} else {
    document.addEventListener('DOMContentLoaded', initNavbar);
}

// Add favicon dynamically to all pages
(function() {
    // Check if favicon already exists
    if (!document.querySelector('link[rel="icon"]')) {
        // Add multiple favicon sizes for better quality
        const favicon16 = document.createElement('link');
        favicon16.rel = 'icon';
        favicon16.type = 'image/png';
        favicon16.sizes = '16x16';
        favicon16.href = 'img/logo-1.png';
        document.head.appendChild(favicon16);
        
        const favicon32 = document.createElement('link');
        favicon32.rel = 'icon';
        favicon32.type = 'image/png';
        favicon32.sizes = '32x32';
        favicon32.href = 'img/logo-1.png';
        document.head.appendChild(favicon32);
        
        const favicon96 = document.createElement('link');
        favicon96.rel = 'icon';
        favicon96.type = 'image/png';
        favicon96.sizes = '96x96';
        favicon96.href = 'img/logo-1.png';
        document.head.appendChild(favicon96);
        
        const shortcutIcon = document.createElement('link');
        shortcutIcon.rel = 'shortcut icon';
        shortcutIcon.type = 'image/png';
        shortcutIcon.href = 'img/logo-1.png';
        document.head.appendChild(shortcutIcon);
        
        // Apple touch icon for better mobile display
        const appleTouchIcon = document.createElement('link');
        appleTouchIcon.rel = 'apple-touch-icon';
        appleTouchIcon.sizes = '180x180';
        appleTouchIcon.href = 'img/logo-1.png';
        document.head.appendChild(appleTouchIcon);
    }
})();

function initNavbar() {
// Mobile menu toggle
const hamburger = document.getElementById('hamburger');
const navMenu = document.getElementById('navMenu');

if (hamburger) {
    hamburger.addEventListener('click', () => {
        navMenu.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
}

// Mobile dropdown toggle
const dropdowns = document.querySelectorAll('.dropdown');

dropdowns.forEach(dropdown => {
    const toggle = dropdown.querySelector('.dropdown-toggle');

    toggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            e.stopPropagation();
            dropdown.classList.toggle('active');

            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown) {
                    otherDropdown.classList.remove('active');
                }
            });
        }
    });
});

// Mobile submenu toggle
const submenus = document.querySelectorAll('.dropdown-submenu');

submenus.forEach(submenu => {
    const subToggle = submenu.children[0]; // first direct child = the toggle link

    subToggle.addEventListener('click', (e) => {
        if (window.innerWidth <= 768) {
            e.preventDefault();
            e.stopPropagation();
            submenu.classList.toggle('active');

            submenus.forEach(other => {
                if (other !== submenu) other.classList.remove('active');
            });
        }
    });
});

// Close menu when clicking on a final nav link (not dropdown toggles or submenu toggles)
document.querySelectorAll('.nav-link:not(.dropdown-toggle)').forEach(link => {
    link.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
    });
});

// Close menu only when clicking actual leaf dropdown items (inside submenu)
document.querySelectorAll('.dropdown-submenu .submenu .dropdown-item').forEach(item => {
    item.addEventListener('click', () => {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
        dropdowns.forEach(dropdown => dropdown.classList.remove('active'));
    });
});

// Close mobile menu when clicking outside
document.addEventListener('click', (e) => {
    if (navMenu && hamburger && !navMenu.contains(e.target) && !hamburger.contains(e.target)) {
        navMenu.classList.remove('active');
        hamburger.classList.remove('active');
        dropdowns.forEach(dropdown => dropdown.classList.remove('active'));
    }
});

// Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#' && href !== '#products' && href !== '#materials' && href !== '#technical') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// Navbar background change on scroll
window.addEventListener('scroll', () => {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        navbar.style.backgroundColor = '#FFFFFF';
    } else {
        navbar.style.backgroundColor = 'var(--darker-bg)';
    }
});

// Active nav link based on current page
const currentPage = window.location.pathname.split('/').pop() || 'index.html';
document.querySelectorAll('.nav-link').forEach(link => {
    const linkPage = link.getAttribute('href');
    if (linkPage === currentPage) {
        link.classList.add('active-nav');
    }
});

// Prevent dropdown from closing when clicking inside (desktop)
document.querySelectorAll('.dropdown-menu').forEach(menu => {
    menu.addEventListener('click', (e) => {
        if (window.innerWidth > 768) {
            e.stopPropagation();
        }
    });
});
} // end initNavbar