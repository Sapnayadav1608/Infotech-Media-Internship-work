document.getElementById('bookingForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const btn = document.getElementById('bookingSubmit');
    btn.disabled = true;
    btn.textContent = 'Sending...';
    fetch('booking-mail.php', { method: 'POST', body: new FormData(this) })
        .then(res => res.text())
        .then(response => {
            if (response.trim() === 'success') {
                document.getElementById('bookingForm').style.display = 'none';
                document.querySelector('.booking-modal h2').style.display = 'none';
                document.querySelector('.modal-sub').style.display = 'none';
                document.getElementById('bookingSuccess').style.display = 'flex';
                setTimeout(() => {
                    document.getElementById('bookingModal').classList.remove('active');
                    document.body.style.overflow = '';
                    document.getElementById('bookingForm').reset();
                    document.getElementById('bookingForm').style.display = '';
                    document.querySelector('.booking-modal h2').style.display = '';
                    document.querySelector('.modal-sub').style.display = '';
                    document.getElementById('bookingSuccess').style.display = 'none';
                    btn.disabled = false;
                    btn.textContent = 'Send Booking Request 🎉';
                }, 3000);
            } else {
                btn.disabled = false;
                btn.textContent = 'Send Booking Request 🎉';
                alert('Something went wrong. Please try again or call us directly.');
            }
        })
        .catch(() => {
            btn.disabled = false;
            btn.textContent = 'Send Booking Request 🎉';
            alert('Network error. Please try again.');
        });
});
