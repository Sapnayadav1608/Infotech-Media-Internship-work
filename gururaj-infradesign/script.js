// Hero Video Swap - exactly 8 seconds each
const videos = [document.getElementById('video1'), document.getElementById('video2')];
let current = 0;

function playVideo(index) {
  videos.forEach(v => { v.classList.remove('active'); v.pause(); });
  videos[index].classList.add('active');
  videos[index].currentTime = 0;
  videos[index].play();
}

videos.forEach((video, index) => {
  video.addEventListener('timeupdate', function () {
    if (this.currentTime >= 8) {
      current = (index + 1) % videos.length;
      playVideo(current);
    }
  });
});

playVideo(0);


const productSwiper = new Swiper('.productSwiper', {
  slidesPerView: 1,
  spaceBetween: 24,
  loop: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
  pagination: { el: '.swiper-pagination', clickable: true },
  navigation: false,
  breakpoints: {
    640: { slidesPerView: 2 },
    1024: { slidesPerView: 3 }
  }
});

// AOS Init
AOS.init({ duration: 800, once: true, offset: 80 });

// Counter Animation
const counters = document.querySelectorAll('.counter');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const target = +entry.target.getAttribute('data-target');
      let count = 0;
      const step = Math.ceil(target / 60);
      const timer = setInterval(() => {
        count += step;
        if (count >= target) {
          entry.target.innerText = target + '+';
          clearInterval(timer);
        } else {
          entry.target.innerText = count + '+';
        }
      }, 30);
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.5 });

counters.forEach(c => observer.observe(c));

// Smooth Scroll
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

// Contact Form Handling
document.getElementById('contactForm').addEventListener('submit', function (e) {
  e.preventDefault();

  // Submit animation placeholder
  const btn = this.querySelector('button');
  btn.innerText = "Sending...";

  setTimeout(() => {
    this.reset();
    btn.innerText = "Submit Inquiry";
    const msg = document.getElementById('successMsg');
    msg.classList.remove('d-none');
    setTimeout(() => msg.classList.add('d-none'), 4000);
  }, 1500);
});