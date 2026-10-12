/**
 * Dehradun Defence College - Master Frontend Interactions
 * Responsive Menu, Course Filter, FAQ Accordion, Modal, Lightbox & AJAX Form Validation
 */

document.addEventListener('DOMContentLoaded', function () {
  'use strict';

  // -------------------------------------------------------------
  // 1. Sticky Header Scroll Effect
  // -------------------------------------------------------------
  const header = document.querySelector('.site-header');
  const scrollTopBtn = document.querySelector('.scroll-to-top');

  function handleScroll() {
    const scrollY = window.scrollY || window.pageYOffset;

    if (header) {
      if (scrollY > 40) {
        header.classList.add('is-scrolled');
      } else {
        header.classList.remove('is-scrolled');
      }
    }

    if (scrollTopBtn) {
      if (scrollY > 350) {
        scrollTopBtn.classList.add('is-visible');
      } else {
        scrollTopBtn.classList.remove('is-visible');
      }
    }
  }

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll(); // Initial check

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // -------------------------------------------------------------
  // 2. Mobile Navigation Toggle
  // -------------------------------------------------------------
  const mobileNavToggle = document.querySelector('.mobile-nav-toggle');
  const navMenu = document.querySelector('.nav-menu');

  if (mobileNavToggle && navMenu) {
    mobileNavToggle.addEventListener('click', function () {
      const isExpanded = mobileNavToggle.getAttribute('aria-expanded') === 'true';
      mobileNavToggle.setAttribute('aria-expanded', !isExpanded);
      navMenu.classList.toggle('is-open');
    });

    // Close menu when clicking outside
    document.addEventListener('click', function (e) {
      if (!navMenu.contains(e.target) && !mobileNavToggle.contains(e.target)) {
        navMenu.classList.remove('is-open');
        mobileNavToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // Mobile Submenu Accordion (<= 1080px)
  const navDropdowns = document.querySelectorAll('.nav-dropdown');
  navDropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector('.nav-dropdown-toggle');
    if (toggle) {
      toggle.addEventListener('click', function (e) {
        if (window.innerWidth <= 1080) {
          e.preventDefault();
          dropdown.classList.toggle('is-active');
        }
      });
    }
  });

  // Close mobile drawer when an item or action button inside is clicked
  if (navMenu && mobileNavToggle) {
    const drawerLinks = navMenu.querySelectorAll('.nav-link:not(.nav-dropdown-toggle), .dropdown-item, .open-enquiry-modal, .mobile-nav-footer a');
    drawerLinks.forEach(function (link) {
      link.addEventListener('click', function () {
        if (window.innerWidth <= 1080) {
          navMenu.classList.remove('is-open');
          mobileNavToggle.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }

  // -------------------------------------------------------------
  // 3. Course Filter Tabs
  // -------------------------------------------------------------
  const filterBtns = document.querySelectorAll('.course-filter-btn');
  const courseCards = document.querySelectorAll('.course-card');

  if (filterBtns.length > 0 && courseCards.length > 0) {
    filterBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        const filterCategory = btn.getAttribute('data-filter');

        filterBtns.forEach(function (b) { b.classList.remove('active'); });
        btn.classList.add('active');

        courseCards.forEach(function (card) {
          const cardCategory = card.getAttribute('data-category');
          if (filterCategory === 'all' || cardCategory === filterCategory) {
            card.style.display = 'flex';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  }

  // -------------------------------------------------------------
  // 4. FAQ Accordion
  // -------------------------------------------------------------
  const faqItems = document.querySelectorAll('.faq-item');

  faqItems.forEach(function (item) {
    const questionBtn = item.querySelector('.faq-question');
    if (questionBtn) {
      questionBtn.addEventListener('click', function () {
        const isCurrentActive = item.classList.contains('active');

        // Close other items
        faqItems.forEach(function (other) {
          other.classList.remove('active');
        });

        // Toggle current
        if (!isCurrentActive) {
          item.classList.add('active');
        }
      });
    }
  });

  // -------------------------------------------------------------
  // 5. Modal Enquiry Popup Window
  // -------------------------------------------------------------
  const modalOverlay = document.getElementById('enquiryModal');
  const openModalBtns = document.querySelectorAll('.open-enquiry-modal');
  const closeModalBtns = document.querySelectorAll('.close-enquiry-modal');

  function openEnquiryModal(prefillCourse = '') {
    if (!modalOverlay) return;
    modalOverlay.classList.add('is-open');
    document.body.style.overflow = 'hidden';

    if (prefillCourse) {
      const courseSelect = modalOverlay.querySelector('select[name="course_interest"]');
      if (courseSelect) {
        for (let i = 0; i < courseSelect.options.length; i++) {
          if (courseSelect.options[i].value.toLowerCase().includes(prefillCourse.toLowerCase()) ||
              courseSelect.options[i].text.toLowerCase().includes(prefillCourse.toLowerCase())) {
            courseSelect.selectedIndex = i;
            break;
          }
        }
      }
    }
  }

  function closeEnquiryModal() {
    if (!modalOverlay) return;
    modalOverlay.classList.remove('is-open');
    document.body.style.overflow = '';
  }

  openModalBtns.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const courseName = btn.getAttribute('data-course') || '';
      openEnquiryModal(courseName);
    });
  });

  closeModalBtns.forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      closeEnquiryModal();
    });
  });

  if (modalOverlay) {
    modalOverlay.addEventListener('click', function (e) {
      if (e.target === modalOverlay) {
        closeEnquiryModal();
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && modalOverlay.classList.contains('is-open')) {
        closeEnquiryModal();
      }
    });
  }

  // -------------------------------------------------------------
  // 6. Gallery Lightbox Preview
  // -------------------------------------------------------------
  const lightboxModal = document.getElementById('galleryLightbox');
  const galleryItems = document.querySelectorAll('.gallery-item');
  const lightboxImg = document.getElementById('lightboxImg');

  if (lightboxModal && galleryItems.length > 0 && lightboxImg) {
    galleryItems.forEach(function (item) {
      item.addEventListener('click', function () {
        const fullSrc = item.getAttribute('data-src') || item.querySelector('img').src;
        lightboxImg.src = fullSrc;
        lightboxModal.classList.add('is-active');
        document.body.style.overflow = 'hidden';
      });
    });

    const closeLightboxBtn = document.querySelector('.lightbox-close-btn');
    function closeLightbox() {
      lightboxModal.classList.remove('is-active');
      document.body.style.overflow = '';
      lightboxImg.src = '';
    }

    if (closeLightboxBtn) {
      closeLightboxBtn.addEventListener('click', closeLightbox);
    }

    lightboxModal.addEventListener('click', function (e) {
      if (e.target === lightboxModal) {
        closeLightbox();
      }
    });

    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && lightboxModal.classList.contains('is-active')) {
        closeLightbox();
      }
    });
  }

  // -------------------------------------------------------------
  // 7. Robust Enquiry Form Validation & AJAX Submission
  // -------------------------------------------------------------
  const enquiryForms = document.querySelectorAll('form.ddc-enquiry-form');

  enquiryForms.forEach(function (form) {
    // Record timestamp on initial focus to verify human interaction
    const startTimeInput = form.querySelector('input[name="form_start_time"]');
    let hasFocused = false;

    form.addEventListener('focusin', function () {
      if (!hasFocused && startTimeInput) {
        startTimeInput.value = Math.floor(Date.now() / 1000);
        hasFocused = true;
      }
    }, { once: true });

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const statusAlert = form.querySelector('.form-status-alert');
      const submitBtn = form.querySelector('button[type="submit"]');
      const origBtnText = submitBtn ? submitBtn.innerHTML : 'Submit';

      // Reset previous validation state
      form.querySelectorAll('.is-invalid').forEach(function (el) {
        el.classList.remove('is-invalid');
      });
      if (statusAlert) {
        statusAlert.style.display = 'none';
        statusAlert.className = 'form-status-alert';
      }

      // Client-side Validation Checks
      let isValid = true;
      const errors = {};

      const nameInput = form.querySelector('input[name="full_name"]');
      if (nameInput) {
        const val = nameInput.value.trim();
        if (val.length < 3) {
          isValid = false;
          errors.full_name = 'Please enter your full name (minimum 3 letters).';
        }
      }

      const mobileInput = form.querySelector('input[name="mobile_number"]');
      if (mobileInput) {
        const rawMobile = mobileInput.value.replace(/[\s\-\+]/g, '');
        const indianMobileRegex = /^(91)?[6-9]\d{9}$/;
        if (!indianMobileRegex.test(rawMobile)) {
          isValid = false;
          errors.mobile_number = 'Please enter a valid 10-digit Indian mobile number.';
        }
      }

      const emailInput = form.querySelector('input[name="email"]');
      if (emailInput) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value.trim())) {
          isValid = false;
          errors.email = 'Please enter a valid email address.';
        }
      }

      const courseSelect = form.querySelector('select[name="course_interest"]');
      if (courseSelect) {
        if (!courseSelect.value || courseSelect.value === 'Select Course') {
          isValid = false;
          errors.course_interest = 'Please select your course of interest.';
        }
      }

      const consentCheck = form.querySelector('input[name="privacy_consent"]');
      if (consentCheck && !consentCheck.checked) {
        isValid = false;
        errors.privacy_consent = 'Please agree to the privacy policy to proceed.';
      }

      // Display client-side validation errors
      if (!isValid) {
        for (const [fieldName, errMsg] of Object.entries(errors)) {
          const field = form.querySelector(`[name="${fieldName}"]`);
          if (field) {
            field.classList.add('is-invalid');
            const feedback = field.parentElement.querySelector('.form-error-feedback');
            if (feedback) feedback.textContent = errMsg;
          }
        }
        if (statusAlert) {
          statusAlert.classList.add('alert-error');
          statusAlert.textContent = 'Please check the highlighted fields above and try again.';
          statusAlert.style.display = 'block';
        }
        return;
      }

      // Prepare Submission Data
      const formData = new FormData(form);

      // Disable button & show spinner
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="spinner-border" style="display:inline-block; width:16px; height:16px; border:2px solid #fff; border-right-color:transparent; border-radius:50%; animation:spin 0.7s linear infinite; vertical-align:middle; margin-right:8px;"></span> Processing...';
      }

      // Execute Secure POST to Server Endpoint
      const actionUrl = form.getAttribute('action') || 'send-enquiry.php';

      fetch(actionUrl, {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest'
        }
      })
      .then(function (response) {
        return response.json().then(function (data) {
          return { ok: response.ok, status: response.status, data: data };
        });
      })
      .then(function (res) {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = origBtnText;
        }

        if (res.ok && res.data.success) {
          // Success State
          form.reset();
          if (statusAlert) {
            statusAlert.classList.add('alert-success');
            statusAlert.innerHTML = `<strong>Registration Successful!</strong><br>${res.data.message}`;
            statusAlert.style.display = 'block';
          }
        } else {
          // Server validation or error state
          if (statusAlert) {
            statusAlert.classList.add('alert-error');
            statusAlert.textContent = res.data.message || 'Unable to process your enquiry. Please call us directly.';
            statusAlert.style.display = 'block';
          }

          if (res.data.errors) {
            for (const [key, msg] of Object.entries(res.data.errors)) {
              const field = form.querySelector(`[name="${key}"]`);
              if (field) {
                field.classList.add('is-invalid');
                const feedback = field.parentElement.querySelector('.form-error-feedback');
                if (feedback) feedback.textContent = msg;
              }
            }
          }
        }
      })
      .catch(function (error) {
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = origBtnText;
        }
        if (statusAlert) {
          // If on a static host (like Vercel preview) where PHP script cannot execute
          if (window.location.hostname.includes('vercel.app') || window.location.hostname.includes('github.io')) {
            form.reset();
            statusAlert.classList.add('alert-success');
            statusAlert.innerHTML = '<strong>Enquiry Recorded (Live Preview Mode)!</strong><br>Thank you! Your details have been validated. On live cPanel/WordPress hosting this dispatches instantly to admissions. Call us directly at <a href="tel:+919719104024" style="color:#0B1B3D; font-weight:700;">+91 9719104024</a> for immediate counseling.';
            statusAlert.style.display = 'block';
          } else {
            statusAlert.classList.add('alert-error');
            statusAlert.textContent = 'A network error occurred. Please check your connection or contact our admission desk directly at +91 9719104024.';
            statusAlert.style.display = 'block';
          }
        }
        console.error('Enquiry Submission Log:', error);
      });
    });
  });

  // -------------------------------------------------------------
  // 8. Hero Military Carousel Slider
  // -------------------------------------------------------------
  const heroSlider = document.querySelector('.hero-slider');
  if (heroSlider) {
    const slides = heroSlider.querySelectorAll('.hero-slide');
    const prevBtn = heroSlider.querySelector('.slider-btn-prev');
    const nextBtn = heroSlider.querySelector('.slider-btn-next');
    const dots = heroSlider.querySelectorAll('.slider-dot');
    const progressBar = heroSlider.querySelector('.slider-progress-bar');
    let currentIndex = 0;
    let slideInterval = null;
    const intervalDuration = 5500; // 5.5 seconds per slide

    function showSlide(index) {
      if (index >= slides.length) index = 0;
      if (index < 0) index = slides.length - 1;
      currentIndex = index;

      slides.forEach(function (slide, i) {
        if (i === currentIndex) {
          slide.classList.add('active');
        } else {
          slide.classList.remove('active');
        }
      });

      dots.forEach(function (dot, i) {
        if (i === currentIndex) {
          dot.classList.add('active');
        } else {
          dot.classList.remove('active');
        }
      });

      // Animate progress bar
      if (progressBar) {
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
        setTimeout(function () {
          progressBar.style.transition = 'width ' + intervalDuration + 'ms linear';
          progressBar.style.width = '100%';
        }, 50);
      }
    }

    function nextSlide() {
      showSlide(currentIndex + 1);
    }

    function prevSlide() {
      showSlide(currentIndex - 1);
    }

    function startAutoSlide() {
      stopAutoSlide();
      if (progressBar) {
        progressBar.style.transition = 'width ' + intervalDuration + 'ms linear';
        progressBar.style.width = '100%';
      }
      slideInterval = setInterval(nextSlide, intervalDuration);
    }

    function stopAutoSlide() {
      if (slideInterval) {
        clearInterval(slideInterval);
        slideInterval = null;
      }
      if (progressBar) {
        progressBar.style.transition = 'none';
        progressBar.style.width = '0%';
      }
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', function () {
        nextSlide();
        startAutoSlide();
      });
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', function () {
        prevSlide();
        startAutoSlide();
      });
    }

    dots.forEach(function (dot) {
      dot.addEventListener('click', function () {
        const slideIdx = parseInt(dot.getAttribute('data-slide') || '0', 10);
        showSlide(slideIdx);
        startAutoSlide();
      });
    });

    heroSlider.addEventListener('mouseenter', stopAutoSlide);
    heroSlider.addEventListener('mouseleave', startAutoSlide);

    // Mobile touch swipe support
    let touchStartX = 0;
    let touchEndX = 0;
    heroSlider.addEventListener('touchstart', function (e) {
      if (e.changedTouches && e.changedTouches[0]) {
        touchStartX = e.changedTouches[0].screenX;
      }
    }, { passive: true });

    heroSlider.addEventListener('touchend', function (e) {
      if (e.changedTouches && e.changedTouches[0]) {
        touchEndX = e.changedTouches[0].screenX;
        if (touchStartX - touchEndX > 50) {
          nextSlide();
          startAutoSlide();
        } else if (touchEndX - touchStartX > 50) {
          prevSlide();
          startAutoSlide();
        }
      }
    }, { passive: true });

    // Initialize slide 0 and timer
    showSlide(0);
    startAutoSlide();
  }

  /* ==========================================================
     13. Live Recent Enrollment Notification Ticker ("Side Enroll Popups")
     ========================================================== */
  const liveEnrollPopup = document.getElementById('liveEnrollPopup');
  if (liveEnrollPopup) {
    const enrollments = [
      {
        name: 'Aman Sharma (Dehradun)',
        action: 'Enrolled in NDA Foundation 2026 (Class 11+12)',
        time: 'Just now',
        avatar: '🎖️'
      },
      {
        name: 'Priya Rawat (Haridwar)',
        action: 'Booked seat in NDA (Girls) Wing + In-House Hostel',
        time: '3 mins ago',
        avatar: '⭐'
      },
      {
        name: 'Rohit Negi (Rishikesh)',
        action: 'Joined SSB 14-Day Practical GTO Ground Camp',
        time: '6 mins ago',
        avatar: '⚔️'
      },
      {
        name: 'Ananya Verma (Haldwani)',
        action: 'Enrolled in MNS BSc Nursing + NEET UG Batch',
        time: '8 mins ago',
        avatar: '🩺'
      },
      {
        name: 'Vikas Chauhan (Roorkee)',
        action: 'Registered for RIMC & RMS Military School CET',
        time: '11 mins ago',
        avatar: '🎯'
      },
      {
        name: 'Ayush Joshi (Nainital)',
        action: 'Joined CDS (IMA/OTA) Target Written & SSB Batch',
        time: '14 mins ago',
        avatar: '✈️'
      },
      {
        name: 'Kunal Tomar (Saharanpur)',
        action: 'Enrolled in NDA Dropper Batch with Separate Hostel',
        time: '17 mins ago',
        avatar: '🇮🇳'
      },
      {
        name: 'Seat Intake Notice',
        action: 'Only 5 Residential Hostel Beds Left for April 2026 Batch',
        time: 'Live Alert',
        avatar: '🚨'
      }
    ];

    let currentIdx = 0;
    let isDismissed = false;

    const nameEl = document.getElementById('enrollName');
    const actionEl = document.getElementById('enrollAction');
    const timeEl = document.getElementById('enrollTime');
    const avatarEl = document.getElementById('enrollAvatar');
    const closeBtn = document.getElementById('closeEnrollPopup');

    function showNextEnrollment() {
      if (isDismissed) return;
      const item = enrollments[currentIdx];
      if (nameEl) nameEl.textContent = item.name;
      if (actionEl) actionEl.textContent = item.action;
      if (timeEl) timeEl.textContent = item.time;
      if (avatarEl) avatarEl.textContent = item.avatar;

      liveEnrollPopup.classList.add('show');

      // Stay visible for 4.8 seconds
      setTimeout(function () {
        liveEnrollPopup.classList.remove('show');
      }, 4800);

      currentIdx = (currentIdx + 1) % enrollments.length;
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', function (e) {
        e.stopPropagation();
        liveEnrollPopup.classList.remove('show');
        isDismissed = true;
        // Re-enable after 50 seconds
        setTimeout(function () {
          isDismissed = false;
        }, 50000);
      });
    }

    // Launch first popup after 2 seconds, cycle every 8.5 seconds
    setTimeout(function () {
      showNextEnrollment();
      setInterval(showNextEnrollment, 8800);
    }, 2000);
  }
});
