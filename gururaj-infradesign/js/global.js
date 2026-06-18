// ===== WHATSAPP BUTTON =====
const waBtn = document.createElement('a');
waBtn.href = 'https://wa.me/919967425595';
waBtn.target = '_blank';
waBtn.className = 'whatsapp-btn';
waBtn.innerHTML = '<i class="bi bi-whatsapp"></i>';
waBtn.setAttribute('aria-label', 'WhatsApp');
document.body.appendChild(waBtn);

// ===== BACK TO TOP BUTTON =====
const topBtn = document.createElement('a');
topBtn.href = '#';
topBtn.className = 'back-to-top';
topBtn.innerHTML = '<i class="bi bi-arrow-up"></i>';
topBtn.setAttribute('aria-label', 'Back to top');
document.body.appendChild(topBtn);

window.addEventListener('scroll', () => {
  topBtn.classList.toggle('show', window.scrollY > 300);
});

topBtn.addEventListener('click', (e) => {
  e.preventDefault();
  window.scrollTo({ top: 0, behavior: 'smooth' });
});
