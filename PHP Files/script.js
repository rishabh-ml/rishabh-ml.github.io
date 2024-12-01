// script.js

document.addEventListener('DOMContentLoaded', () => {
    /* =============================
       Sticky Header and Scroll Events
    ================================ */
    const header = document.querySelector('header');
    const scrollTopBtn = document.getElementById('scrollToTopBtn');
    const menuToggle = document.getElementById('menu-toggle');
    const navLinks = document.querySelectorAll('nav ul li a');
    const scrollRevealElements = document.querySelectorAll('.reveal');
    const testimonials = document.querySelectorAll('.testimonial');
    const testimonialNav = document.querySelector('.testimonial-nav');
    let currentTestimonial = 0;

    // Sticky Header Function
    function handleScroll() {
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Scroll to Top Button Visibility
        if (window.scrollY > 300) {
            scrollTopBtn.style.display = 'block';
        } else {
            scrollTopBtn.style.display = 'none';
        }

        // Scroll Reveal Animation
        scrollRevealElements.forEach(el => {
            if (el.getBoundingClientRect().top < window.innerHeight - 50) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    /* =============================
       Scroll to Top Button
    ================================ */
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    /* =============================
       Mobile Menu Toggle
    ================================ */
    menuToggle.addEventListener('click', () => {
        document.body.classList.toggle('menu-active');
    });

    // Close mobile menu when a link is clicked
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (document.body.classList.contains('menu-active')) {
                document.body.classList.remove('menu-active');
            }
        });
    });

    /* =============================
       Lazy Loading Images
    ================================ */
    const lazyImages = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.getAttribute('data-src');
                img.removeAttribute('data-src');
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });

    /* =============================
       Testimonials Slider
    ================================ */
    function showTestimonial(index) {
        testimonials.forEach((testimonial, i) => {
            testimonial.classList.toggle('active', i === index);
        });
        const navDots = document.querySelectorAll('.testimonial-nav span');
        navDots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
    }

    testimonials.forEach((testimonial, index) => {
        const dot = document.createElement('span');
        dot.addEventListener('click', () => {
            currentTestimonial = index;
            showTestimonial(currentTestimonial);
        });
        testimonialNav.appendChild(dot);
    });

    showTestimonial(currentTestimonial);

    // Auto-slide Testimonials
    setInterval(() => {
        currentTestimonial = (currentTestimonial + 1) % testimonials.length;
        showTestimonial(currentTestimonial);
    }, 5000);

    /* =============================
       Contact Form Validation and Submission
    ================================ */
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();

            // Form Validation
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');
            let valid = true;

            if (name.value.trim() === '') {
                setError(name, 'Name is required');
                valid = false;
            } else {
                clearError(name);
            }

            if (email.value.trim() === '') {
                setError(email, 'Email is required');
                valid = false;
            } else if (!validateEmail(email.value.trim())) {
                setError(email, 'Email is not valid');
                valid = false;
            } else {
                clearError(email);
            }

            if (message.value.trim() === '') {
                setError(message, 'Message is required');
                valid = false;
            } else {
                clearError(message);
            }

            if (valid) {
                // Submit the form
                contactForm.submit();
            }
        });

        function setError(element, message) {
            const formGroup = element.parentElement;
            const errorDisplay = formGroup.querySelector('.error-message');

            errorDisplay.innerText = message;
            element.classList.add('error');
        }

        function clearError(element) {
            const formGroup = element.parentElement;
            const errorDisplay = formGroup.querySelector('.error-message');

            errorDisplay.innerText = '';
            element.classList.remove('error');
        }

        function validateEmail(email) {
            const re = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            return re.test(String(email).toLowerCase());
        }
    }

    /* =============================
       Scroll Reveal Animation
    ================================ */
    // Initial check
    handleScroll();
});
