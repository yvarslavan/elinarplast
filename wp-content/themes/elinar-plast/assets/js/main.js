document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
        });
    }

    // Highlight active menu item based on current URL
    const currentUrl = window.location.href.replace(/\/$/, ''); // Remove trailing slash
    const menuLinks = document.querySelectorAll('.main-nav a');
    let activeFound = false;

    menuLinks.forEach(link => {
        const linkUrl = link.href.replace(/\/$/, ''); // Remove trailing slash
        const parentLi = link.closest('li');

        // Check if this is the exact current page
        if (currentUrl === linkUrl) {
            if (parentLi) {
                parentLi.classList.add('current-menu-item', 'current_page_item');
                activeFound = true;

                // If this is a submenu item, also highlight the parent menu item
                const parentMenuItem = parentLi.closest('.sub-menu');
                if (parentMenuItem) {
                    const topLevelParent = parentMenuItem.closest('li.menu-item-has-children');
                    if (topLevelParent) {
                        topLevelParent.classList.add('current-menu-ancestor', 'current-page-ancestor');
                    }
                }
            }
        }
    });

    // If no exact match found, try to find parent by URL path
    if (!activeFound) {
        menuLinks.forEach(link => {
            const linkUrl = link.href.replace(/\/$/, '');
            const parentLi = link.closest('li');

            // Check if current URL starts with this link (for parent pages)
            if (linkUrl !== window.location.origin &&
                currentUrl.startsWith(linkUrl) &&
                linkUrl.length > window.location.origin.length) {

                if (parentLi) {
                    parentLi.classList.add('current-menu-ancestor', 'current-page-ancestor');
                }
            }
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

    // --- IMAGE LIGHTBOX LOGIC ---
    const lightbox = document.getElementById('image-lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxCaption = document.getElementById('lightbox-caption');
    const lightboxClose = document.querySelector('.lightbox-close');

    // Target images in specific sections to avoid logos/icons
    const zoomableImages = document.querySelectorAll('.section img, .entry-content img, .split-image img');

    zoomableImages.forEach(img => {
        img.style.cursor = 'zoom-in';
        img.addEventListener('click', function () {
            lightbox.classList.add('show');
            lightboxImg.src = this.src;
            if (this.alt && lightboxCaption) {
                lightboxCaption.innerHTML = this.alt;
            } else if (lightboxCaption) {
                lightboxCaption.innerHTML = '';
            }
            document.body.style.overflow = 'hidden';
        });
    });

    if (lightboxClose) {
        lightboxClose.addEventListener('click', function () {
            lightbox.classList.remove('show');
            document.body.style.overflow = '';
        });
    }

    if (lightbox) {
        lightbox.addEventListener('click', function (e) {
            if (e.target === lightbox) {
                lightbox.classList.remove('show');
                document.body.style.overflow = '';
            }
        });
    }

    // Close on Escape (for Lightbox)
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && lightbox && lightbox.classList.contains('show')) {
            lightbox.classList.remove('show');
            document.body.style.overflow = '';
        }
    });

    // --- FLOATING ACTION BUTTON (FAB) ---
    const fabContainer = document.querySelector('.fab-container');
    const fabTrigger = document.getElementById('fab-trigger');

    if (fabContainer && fabTrigger) {
        fabTrigger.addEventListener('click', function () {
            fabContainer.classList.toggle('active');
            fabTrigger.classList.toggle('active');
        });

        // Close FAB when clicking outside
        document.addEventListener('click', function (e) {
            if (!fabContainer.contains(e.target) && fabContainer.classList.contains('active')) {
                fabContainer.classList.remove('active');
                fabTrigger.classList.remove('active');
            }
        });
    }

    // --- SCROLL TO TOP BUTTON ---
    const scrollBtn = document.getElementById('scroll-top');
    const toggleScrollBtn = () => {
        if (!scrollBtn) return;
        if (window.scrollY > 200) {
            scrollBtn.classList.add('visible');
        } else {
            scrollBtn.classList.remove('visible');
        }
    };

    if (scrollBtn) {
        window.addEventListener('scroll', toggleScrollBtn);
        toggleScrollBtn();

        scrollBtn.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
});
