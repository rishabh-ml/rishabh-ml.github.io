// Smooth Scroll for Navigation Links
document.querySelectorAll('nav ul li a').forEach(link => {
    link.addEventListener('click', (event) => {
      event.preventDefault();
      const targetID = event.target.getAttribute('href').substring(1);
      const targetSection = document.getElementById(targetID);
  
      if (targetSection) {
        window.scrollTo({
          top: targetSection.offsetTop,
          behavior: 'smooth'
        });
      }
    });
  });
  
  // Mobile Navigation Toggle
  const navToggle = document.createElement('div');
  navToggle.classList.add('nav-toggle');
  navToggle.innerHTML = '<i class="fas fa-bars"></i>';
  document.querySelector('header').appendChild(navToggle);
  
  const nav = document.querySelector('nav ul');
  navToggle.addEventListener('click', () => {
    nav.classList.toggle('active');
    navToggle.classList.toggle('active');
  });
  
  // Lazy Loading Images
  const lazyImages = document.querySelectorAll('img');
  const imageObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const img = entry.target;
        img.src = img.dataset.src;
        img.removeAttribute('data-src');
        observer.unobserve(img);
      }
    });
  });
  
  lazyImages.forEach(image => {
    imageObserver.observe(image);
  });
  
  // Animate on Scroll Initialization
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      duration: 1000, // Animation duration in milliseconds
      once: true      // Only animate once when in view
    });
  });
  
  // Footer Year Update
  const footerYear = document.createElement('span');
  footerYear.innerText = new Date().getFullYear();
  document.querySelector('footer').appendChild(footerYear);
  