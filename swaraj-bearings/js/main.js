// AOS Animation Initialization
AOS.init({ duration: 1000, once: true });

// Navbar scroll shrink
window.addEventListener('scroll', () => {
    const topBar = document.querySelector('.top-bar');
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        topBar && topBar.classList.add('hide-topbar');
        navbar && navbar.classList.add('nav-top-zero');
    } else {
        topBar && topBar.classList.remove('hide-topbar');
        navbar && navbar.classList.remove('nav-top-zero');
    }
    navbar && navbar.classList.toggle('scrolled', window.scrollY > 50);
});

// Preloader/Spinner Hide
window.onload = function () {
    const spinner = document.getElementById('spinner');
    if (spinner) spinner.style.display = 'none';
};

// Series tab switcher (product detail pages)
function showSeries(series) {
    document.querySelectorAll('.series-section').forEach(s => s.classList.remove('active'));
    document.querySelectorAll('.series-nav-btn').forEach(b => b.classList.remove('active'));
    const sec = document.getElementById('series-' + series);
    const btn = document.getElementById('btn-' + series);
    if (sec) sec.classList.add('active');
    if (btn) btn.classList.add('active');
}

document.addEventListener('click', function(e) {
    const btn = e.target.closest('.series-nav-btn[data-series]');
    if (btn) showSeries(btn.dataset.series);
});
