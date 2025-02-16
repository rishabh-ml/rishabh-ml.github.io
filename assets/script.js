// script.js

document.addEventListener('DOMContentLoaded', () => {
    /* =============================
       Sticky Header and Scroll Events
    ================================ */
    const header = document.querySelector('header');
    const scrollTopBtn = document.getElementById('scrollToTopBtn');
    const menuIcon = document.getElementById('menu-icon');
    const navLinks = document.querySelectorAll('nav ul li a');

    function handleScroll() {
        // Sticky header toggle
        if (window.scrollY > 0) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }

        // Scroll to top button visibility
        if (scrollTopBtn) {
            if (window.scrollY > 300) {
                scrollTopBtn.classList.add('show');
            } else {
                scrollTopBtn.classList.remove('show');
            }
        }
    }

    window.addEventListener('scroll', handleScroll);

    /* =============================
       Scroll to Top Button
    ================================ */
    if (scrollTopBtn) {
        scrollTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    /* =============================
       Mobile Menu Toggle
    ================================ */
    if (menuIcon) {
        menuIcon.addEventListener('click', () => {
            const navUl = document.querySelector('nav ul');
            navUl.classList.toggle('show');
        });

        // Close mobile menu when a link is clicked
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                const navUl = document.querySelector('nav ul');
                if (navUl.classList.contains('show')) {
                    navUl.classList.remove('show');
                }
            });
        });
    }

    /* =============================
       Contact Form Validation
       (If you have a contact form and want client-side validation)
    ================================ */
    const contactForm = document.getElementById('contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', (e) => {
            // Basic validation logic
            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const subject = document.getElementById('subject');
            const message = document.getElementById('message');
            let valid = true;

            // Simple helper functions
            function setError(element, message) {
                const errorDisplay = element.parentElement.querySelector('.error-message');
                errorDisplay.innerText = message;
                element.classList.add('error');
            }

            function clearError(element) {
                const errorDisplay = element.parentElement.querySelector('.error-message');
                errorDisplay.innerText = '';
                element.classList.remove('error');
            }

            // Check name
            if (name.value.trim() === '') {
                setError(name, 'Name is required');
                valid = false;
            } else {
                clearError(name);
            }

            // Check email
            if (email.value.trim() === '') {
                setError(email, 'Email is required');
                valid = false;
            } else if (!validateEmail(email.value.trim())) {
                setError(email, 'Email is not valid');
                valid = false;
            } else {
                clearError(email);
            }

            // Check subject
            if (subject.value.trim() === '') {
                setError(subject, 'Subject is required');
                valid = false;
            } else {
                clearError(subject);
            }

            // Check message
            if (message.value.trim() === '') {
                setError(message, 'Message is required');
                valid = false;
            } else {
                clearError(message);
            }

            // Validate Email Format
            function validateEmail(inputEmail) {
                const re = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                return re.test(String(inputEmail).toLowerCase());
            }

            if (!valid) {
                e.preventDefault();
            }
        });
    }

    /* =============================
       Scroll Reveal Animation
       (Optional: If you want to fade-in elements as they come into view)
    ================================ */
    const revealElements = document.querySelectorAll('.fade-in, .slide-in');
    function revealOnScroll() {
        revealElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top < window.innerHeight - 50) {
                el.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check
});
