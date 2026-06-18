function toggleFAQ(element) {
    const body = element.nextElementSibling;
    const icon = element.querySelector('span');

    if (body.style.maxHeight) {
        body.style.maxHeight = null;
        icon.textContent = '+';
    } else {
        body.style.maxHeight = body.scrollHeight + 'px';
        icon.textContent = '−';
    }
}

// Alternate backgrounds for all page-sections except CTA
document.addEventListener('DOMContentLoaded', function () {
    const sections = document.querySelectorAll('.page-section');
    let counter = 0;
    sections.forEach(function (sec) {
        sec.classList.remove('bg-gray');
        if (sec.querySelector('.cta-footer') || sec.classList.contains('container-custom')) return;
        sec.style.background = counter % 2 === 0 ? '#ffffff' : '#f9f9f9';
        counter++;
    });
});


