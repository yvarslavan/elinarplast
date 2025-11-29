document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (menuToggle && mainNav) {
        menuToggle.addEventListener('click', function () {
            mainNav.classList.toggle('active');
            menuToggle.classList.toggle('active');
        });
    }

    // Mobile Submenu Toggle
    const menuItemsWithChildren = document.querySelectorAll('.menu-item-has-children > a');
    menuItemsWithChildren.forEach(function (item) {
        item.addEventListener('click', function (e) {
            // Check if we are on mobile (or if the menu is in mobile mode)
            // We can check if the menu toggle is visible or rely on window width,
            // but since we want this behavior for the mobile menu, checking width is safer
            // or just applying it always if the link is '#'

            if (window.innerWidth <= 1024) {
                e.preventDefault();
                const parent = this.parentElement;
                parent.classList.toggle('open');
            }
        });
    });

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
    let headerShadowActive = false;

    window.addEventListener('scroll', function () {
        if (window.scrollY > 10) {
            if (!headerShadowActive) {
                header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
                headerShadowActive = true;
            }
        } else {
            if (headerShadowActive) {
                header.style.boxShadow = 'none';
                headerShadowActive = false;
            }
        }
    }, { passive: true });

    // PVC Modal - Initialize close handlers first (works on all pages)
    const pvcModal = document.getElementById('pvc-modal');
    if (pvcModal) {
        const pvcClose = pvcModal.querySelector('.modal-close');

        if (pvcClose) {
            pvcClose.addEventListener('click', function () {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        pvcModal.addEventListener('click', function (e) {
            if (e.target === pvcModal) {
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

    // PVC Modal Trigger (from main page)
    const pvcTrigger = document.getElementById('pvc-modal-trigger');
    if (pvcTrigger && pvcModal) {
        pvcTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            pvcModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Chamfer Modal - Initialize close handlers first (works on all pages)
    const chamferModal = document.getElementById('chamfer-modal');
    if (chamferModal) {
        const chamferClose = chamferModal.querySelector('.modal-close');

        if (chamferClose) {
            chamferClose.addEventListener('click', function () {
                chamferModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        chamferModal.addEventListener('click', function (e) {
            if (e.target === chamferModal) {
                chamferModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // CTA Button Scroll Logic
        const chamferCtaBtn = document.getElementById('chamfer-cta-btn');
        if (chamferCtaBtn) {
            chamferCtaBtn.addEventListener('click', function () {
                chamferModal.classList.remove('show');
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

    // Chamfer Modal Trigger (from main page)
    const chamferTrigger = document.getElementById('chamfer-modal-trigger');
    if (chamferTrigger && chamferModal) {
        chamferTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            chamferModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Profiles Modal - Initialize close handlers first (works on all pages)
    const profilesModal = document.getElementById('profiles-modal');
    if (profilesModal) {
        const profilesClose = profilesModal.querySelector('.modal-close');

        if (profilesClose) {
            profilesClose.addEventListener('click', function () {
                profilesModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        profilesModal.addEventListener('click', function (e) {
            if (e.target === profilesModal) {
                profilesModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // CTA Button Scroll Logic
        const profilesCtaBtn = document.getElementById('profiles-cta-btn');
        if (profilesCtaBtn) {
            profilesCtaBtn.addEventListener('click', function () {
                profilesModal.classList.remove('show');
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

    // Profiles Modal Trigger (from main page)
    const profilesTrigger = document.getElementById('profiles-modal-trigger');
    if (profilesTrigger && profilesModal) {
        profilesTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            profilesModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Injection Molding Modal - Initialize close handlers first (works on all pages)
    const injectionModal = document.getElementById('injection-modal');
    if (injectionModal) {
        const injectionClose = injectionModal.querySelector('.modal-close');

        if (injectionClose) {
            injectionClose.addEventListener('click', function () {
                injectionModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        injectionModal.addEventListener('click', function (e) {
            if (e.target === injectionModal) {
                injectionModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // CTA Button Scroll Logic
        const injectionCtaBtn = document.getElementById('injection-cta-btn');
        if (injectionCtaBtn) {
            injectionCtaBtn.addEventListener('click', function () {
                injectionModal.classList.remove('show');
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

    // Injection Molding Modal Trigger (from main page)
    const injectionTrigger = document.getElementById('injection-modal-trigger');
    if (injectionTrigger && injectionModal) {
        injectionTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            injectionModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Close on Escape key (unified handler for all modals)
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            if (pvcModal && pvcModal.classList.contains('show')) {
                pvcModal.classList.remove('show');
                document.body.style.overflow = '';
            }
            if (chamferModal && chamferModal.classList.contains('show')) {
                chamferModal.classList.remove('show');
                document.body.style.overflow = '';
            }
            if (profilesModal && profilesModal.classList.contains('show')) {
                profilesModal.classList.remove('show');
                document.body.style.overflow = '';
            }
            if (injectionModal && injectionModal.classList.contains('show')) {
                injectionModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        }
    });

    // Extruded Products Modal Trigger (Погонажные изделия)
    const extrudedTrigger = document.getElementById('extruded-modal-trigger');
    const extrudedModal = document.getElementById('extruded-modal');
    const extrudedClose = extrudedModal ? extrudedModal.querySelector('.modal-close') : null;

    if (extrudedTrigger && extrudedModal) {
        extrudedTrigger.addEventListener('click', function (e) {
            e.preventDefault();
            extrudedModal.classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevent background scrolling
        });

        if (extrudedClose) {
            extrudedClose.addEventListener('click', function () {
                extrudedModal.classList.remove('show');
                document.body.style.overflow = '';
            });
        }

        // Close on outside click
        window.addEventListener('click', function (e) {
            if (e.target === extrudedModal) {
                extrudedModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // Close on Escape key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && extrudedModal.classList.contains('show')) {
                extrudedModal.classList.remove('show');
                document.body.style.overflow = '';
            }
        });

        // CTA Button Scroll Logic
        const extrudedCtaBtn = document.getElementById('extruded-cta-btn');
        if (extrudedCtaBtn) {
            extrudedCtaBtn.addEventListener('click', function () {
                extrudedModal.classList.remove('show');
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

    // Footer Product Links - reuse existing modals
    const footerPvcLink = document.getElementById('pvc-modal-trigger-footer');
    const footerChamferLink = document.getElementById('chamfer-modal-trigger-footer');
    const footerProfilesLink = document.getElementById('profiles-modal-trigger-footer');
    const footerInjectionLink = document.getElementById('injection-modal-trigger-footer');

    // PVC Modal from footer
    if (footerPvcLink && pvcModal) {
        footerPvcLink.addEventListener('click', function (e) {
            e.preventDefault();
            pvcModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Chamfer Modal from footer
    if (footerChamferLink && chamferModal) {
        footerChamferLink.addEventListener('click', function (e) {
            e.preventDefault();
            chamferModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Profiles Modal from footer
    if (footerProfilesLink && profilesModal) {
        footerProfilesLink.addEventListener('click', function (e) {
            e.preventDefault();
            profilesModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Injection Modal from footer
    if (footerInjectionLink && injectionModal) {
        footerInjectionLink.addEventListener('click', function (e) {
            e.preventDefault();
            injectionModal.classList.add('show');
            document.body.style.overflow = 'hidden';
        });
    }

    // Universal Escape key handler for all modals
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            const modalIds = ['pvc-modal', 'chamfer-modal', 'profiles-modal', 'injection-modal', 'extruded-modal'];
            modalIds.forEach(function (modalId) {
                const modal = document.getElementById(modalId);
                if (modal && modal.classList.contains('show')) {
                    modal.classList.remove('show');
                    document.body.style.overflow = '';
                }
            });
        }
    });

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
        // Support both click and touch events for mobile
        const toggleFab = function (e) {
            e.preventDefault();
            e.stopPropagation();
            fabContainer.classList.toggle('active');
            fabTrigger.classList.toggle('active');
        };

        fabTrigger.addEventListener('click', toggleFab);
        fabTrigger.addEventListener('touchend', toggleFab);

        // Close FAB when clicking outside
        document.addEventListener('click', function (e) {
            if (!fabContainer.contains(e.target) && fabContainer.classList.contains('active')) {
                fabContainer.classList.remove('active');
                fabTrigger.classList.remove('active');
            }
        });

        // Also close on touch outside for mobile
        document.addEventListener('touchend', function (e) {
            if (!fabContainer.contains(e.target) && fabContainer.classList.contains('active')) {
                fabContainer.classList.remove('active');
                fabTrigger.classList.remove('active');
            }
        });
    }

    // --- SCROLL TO TOP BUTTON ---
    const scrollBtn = document.getElementById('scroll-top');
    let scrollBtnVisible = false;

    const toggleScrollBtn = () => {
        if (!scrollBtn) return;
        // Show button after scrolling 200px, works on both desktop and mobile
        if (window.scrollY > 200 || window.pageYOffset > 200) {
            if (!scrollBtnVisible) {
                scrollBtn.classList.add('visible');
                scrollBtnVisible = true;
            }
        } else {
            if (scrollBtnVisible) {
                scrollBtn.classList.remove('visible');
                scrollBtnVisible = false;
            }
        }
    };

    if (scrollBtn) {
        // Use both scroll and touchmove events for better mobile support
        window.addEventListener('scroll', toggleScrollBtn, { passive: true });
        window.addEventListener('touchmove', toggleScrollBtn, { passive: true });
        toggleScrollBtn();

        const scrollToTop = function (e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };

        scrollBtn.addEventListener('click', scrollToTop);
        scrollBtn.addEventListener('touchend', scrollToTop);
    }
});
