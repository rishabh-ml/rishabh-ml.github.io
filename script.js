// GSAP and ScrollTrigger Animations
document.addEventListener('DOMContentLoaded', () => {
    // Smooth Scroll for Internal Links Only
    const internalLinks = document.querySelectorAll('a[href^="#"]');
    internalLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const targetID = event.target.getAttribute('href');
            const targetSection = document.querySelector(targetID);
            if (targetSection) {
                gsap.to(window, { duration: 1, scrollTo: targetSection });
            }
        });
    });

    // Responsive Navigation Toggle
    const menuIcon = document.getElementById('menu-icon');
    const nav = document.getElementById('nav-links');
    menuIcon.addEventListener('click', () => {
        nav.classList.toggle('active');
    });

    // Scroll to Top Button
    const scrollToTopBtn = document.getElementById('scrollToTopBtn');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });
    scrollToTopBtn.addEventListener('click', () => {
        gsap.to(window, { duration: 1, scrollTo: 0 });
    });

    // GSAP Animations for Sections
    gsap.utils.toArray('section').forEach(section => {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: 'top 80%',
            },
            opacity: 0,
            y: 50,
            duration: 1,
            ease: 'power2.out',
        });
    });

    // Lazy Loading Images
    const lazyImages = document.querySelectorAll('img[data-src]');
    const loadImg = (image) => {
        image.setAttribute('src', image.getAttribute('data-src'));
        image.onload = () => {
            image.removeAttribute('data-src');
        };
    };
    if ('IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    loadImg(img);
                    imgObserver.unobserve(img);
                }
            });
        });
        lazyImages.forEach((img) => {
            observer.observe(img);
        });
    } else {
        // Fallback for older browsers
        lazyImages.forEach((img) => {
            loadImg(img);
        });
    }

    // Web3Forms Form Submission Handling
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Form data
            const formData = new FormData(contactForm);

            // AJAX request
            fetch(contactForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            }).then(response => {
                if (response.ok) {
                    alert('Your message has been sent successfully!');
                    contactForm.reset();
                } else {
                    response.json().then(data => {
                        if (Object.hasOwn(data, 'errors')) {
                            alert('Please fill out all required fields correctly.');
                        } else {
                            alert('Oops! There was a problem submitting your form.');
                        }
                    });
                }
            }).catch(error => {
                alert('Oops! There was a problem submitting your form.');
                console.error('Web3Forms Error:', error);
            });
        });
    }
});
