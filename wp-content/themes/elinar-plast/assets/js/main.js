document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
    }

    // Sticky Header Shadow on scroll
    const header = document.querySelector('.site-header');
    window.addEventListener('scroll', function () {
        if (window.scrollY > 10) {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        } else {
            header.style.boxShadow = 'none';
        }
    });

    // PVC Modal Trigger
    const pvcTrigger = document.getElementById('pvc-modal-trigger');
    const pvcModal = document.getElementById('pvc-modal');
    const pvcClose = pvcModal ? pvcModal.querySelector('.modal-close') : null;

    if (pvcTrigger && pvcModal) {
        pvcTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            pvcModal.classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });

        if (pvcClose) {
            pvcClose.addEventListener('click', function () {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        window.addEventListener('click', function (e) {
            if (e.target === pvcModal) {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && pvcModal.classList.contains('show')) {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // CTA Button Scroll Logic
        const pvcCtaBtn = document.getElementById('pvc-cta-btn');
        if (pvcCtaBtn) {
            pvcCtaBtn.addEventListener('click', function () {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';

                // Small timeout to allow layout to update
                setTimeout(function () {
                    const contactForm = document.querySelector('#contact-form');
                    if (contactForm) {
                        contactForm.scrollIntoView({ behavior: 'smooth' });
                    }
                }, 100);
            });
        }
    }
});

