# Pre-Deployment Testing & Quality Checklist
## Dehradun Defence College

Perform this pre-flight verification before pointing live production traffic to your domain.

---

### 1. Visual & Responsive Design
- [ ] **Desktop (1440px+)**: Check hero layout, two CTAs, stats ticker, courses grid, and footer alignment.
- [ ] **Laptop (1024px–1366px)**: Check navigation spacing, cards grid, and form dimensions.
- [ ] **Tablet (768px–1023px)**: Verify that columns wrap cleanly without horizontal overflow.
- [ ] **Mobile (<768px)**:
  - [ ] Hamburger menu opens smoothly and closes on overlay click or link selection.
  - [ ] Mobile sticky bottom bar appears with clickable "Call Now" and "Enquire Now".
  - [ ] Floating WhatsApp button does not obstruct important text.
- [ ] **Typography**: Headings use Google Font *Outfit* and body text uses *Inter*.
- [ ] **Imagery**: No broken images. All images load with descriptive `alt` tags.

---

### 2. Navigation & Page Links
- [ ] `index.php` (Home) renders correctly.
- [ ] `about.php` displays Founder & Director Mr. Mahendra Kukreja portrait and message.
- [ ] `courses.php` displays all 8+ programs and eligibility comparison table.
- [ ] `course-detail.php?course=nda-foundation-10` loads individual course syllabus and sidebar form.
- [ ] `faculty-facilities.php` displays mentors and campus facility breakdown.
- [ ] `results.php` displays verified selection metrics and cadet stories.
- [ ] `blog.php` & `blog-single.php` render articles with clean typography.
- [ ] `gallery.php` interactive lightbox modal opens and closes via ESC and X button.
- [ ] `contact.php` displays Google Maps embed, transit directions, and contact details.
- [ ] `privacy-policy.php` and `terms.php` legal pages load correctly.
- [ ] `404.php` returns HTTP 404 header and military-themed coordinates message when visiting non-existent URLs.

---

### 3. Admission Enquiry Form & Anti-Spam
- [ ] **Required Field Validation**:
  - [ ] Submitting empty form highlights errors under Name, Mobile, Email, and Course.
  - [ ] Entering an invalid phone number (e.g. `12345`) triggers error: *"Please enter a valid 10-digit Indian mobile number"*.
  - [ ] Entering an invalid email format triggers error: *"Please enter a valid email address"*.
  - [ ] Unchecking consent checkbox halts submission.
- [ ] **Honeypot Protection**:
  - [ ] Hidden field `website_url_check` is invisible to human users.
  - [ ] Submitting data in `website_url_check` immediately returns HTTP 400 spam rejection.
- [ ] **Submission Speed Check**:
  - [ ] Submissions completed in under 2 seconds are rejected to thwart automated bots.
- [ ] **Feedback State**:
  - [ ] Submit button transitions into a loading state during request.
  - [ ] On successful submission, form clears and displays green success confirmation.
  - [ ] An entry is safely written to `storage/leads.json`.

---

### 4. Direct Communication Features
- [ ] **Click-to-Call**: Clicking phone numbers (`+91 9719104024`, `+91 8650666609`) opens phone dialer on mobile devices.
- [ ] **Click-to-Email**: Clicking email opens default mail client with `dehradundefencecollege@gmail.com`.
- [ ] **Floating WhatsApp**: Clicking opens WhatsApp with pre-filled enquiry message:
  *"Hello Dehradun Defence College, I am interested in admission for NDA/Defence exam coaching. Please share course and batch details."*
- [ ] **Google Map**: Embed loads correctly with Maldevta location coordinates.

---

### 5. Server & Environment Security
- [ ] `.env` file is placed in root with `APP_ENV=production`.
- [ ] Real SMTP credentials or valid cPanel email configured.
- [ ] Access to `.env` and `storage/` is blocked via `.htaccess` (returns 403 Forbidden when requested directly in browser).
- [ ] HTTPS is enforced and valid SSL certificate is active.
- [ ] Directory browsing (`Options -Indexes`) is disabled.

---

### 6. SEO & Performance
- [ ] Valid `<title>` tag and unique `<meta name="description">` on every page.
- [ ] Open Graph (`og:title`, `og:image`, `og:description`, `og:url`) tags present in `<head>`.
- [ ] Schema.org `EducationalOrganization` JSON-LD structured data embedded on homepage.
- [ ] Images have lazy loading enabled for below-the-fold assets.
- [ ] Gzip compression enabled in `.htaccess`.
