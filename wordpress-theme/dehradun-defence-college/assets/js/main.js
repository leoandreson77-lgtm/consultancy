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

  // Mobile Submenu Accordion
  const navDropdowns = document.querySelectorAll('.nav-dropdown');
  navDropdowns.forEach(function (dropdown) {
    const toggle = dropdown.querySelector('.nav-dropdown-toggle');
    if (toggle && window.innerWidth <= 768) {
      toggle.addEventListener('click', function (e) {
        e.preventDefault();
        dropdown.classList.toggle('is-active');
      });
    }
  });

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
          statusAlert.classList.add('alert-error');
          statusAlert.textContent = 'A network error occurred. Please check your connection or contact our admission desk directly at +91 9719104024.';
          statusAlert.style.display = 'block';
        }
        console.error('Enquiry Submission Error:', error);
      });
    });
  });
});
