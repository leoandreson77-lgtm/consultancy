# Dehradun Defence College — Official Website & Custom WordPress Theme

A premium, modern, conversion-focused, and fully responsive website for **Dehradun Defence College**, specializing in NDA Foundation, CDS, AFCAT, and SSB Interview Preparation with in-campus residential hostel and outdoor GTO obstacle grounds.

---

## 🌟 Key Features

1. **Brand Visual Identity**:
   - Deep Royal Navy Blue (`#0B1B3D`), Pure White, Royal Gold (`#D4AF37`), and subtle Indian Tri-color accents (Saffron & Green).
   - High-resolution, photorealistic visuals depicting parade drills, director leadership, classroom smart lectures, and SSB obstacle courses.
   - Clean, modern typography using Google Fonts (**Outfit** for headings and **Inter** for reading text).

2. **11 Complete Pages & Custom 404**:
   - `index.php` (Home with live ticker, courses filter, facilities spotlight, cadet routine, testimonials, FAQs)
   - `about.php` (About Us with Founder & Director Mr. Mahendra Kukreja profile, vision, mission, and military heritage)
   - `courses.php` (Courses Catalog with filter tabs and eligibility matrix)
   - `course-detail.php` (Deep-dive course syllabus, daily schedule, and dedicated sidebar enquiry form)
   - `faculty-facilities.php` (Faculty & Facilities with 10-acre campus, hostel, mess, and GTO grounds)
   - `results.php` (Hall of Fame, verified selection statistics, and cadet recommendation stories)
   - `blog.php` (Defence Blog & Exam Preparation Guides)
   - `blog-single.php` (Individual educational article reading layout)
   - `gallery.php` (Interactive photo grid with lightbox modal and video drill highlights)
   - `contact.php` (Direct hotlines, transit directions from Railway Station/Airport, Google Map, and full form)
   - `privacy-policy.php` (Student data compliance & privacy notice)
   - `terms.php` (Campus discipline, hostel guidelines, and admission rules)
   - `404.php` (Custom military-themed coordinates error page)

3. **Secure Admission Enquiry Engine (`send-enquiry.php`)**:
   - Full client-side and server-side validation.
   - Rigorous Indian mobile number format validation (10 digits starting with 6, 7, 8, or 9).
   - Email syntax sanitization.
   - Honeypot anti-spam defense (`website_url_check`) & submission speed verification.
   - Safe logging to `storage/leads.json` with file locking.
   - Branded HTML notifications to administrator (`ADMIN_ENQUIRY_EMAIL`) and automated acknowledgement to applicant.
   - Asynchronous AJAX submission with loading spinner and non-fake validation feedback.

4. **Two Deployment Paths Included**:
   - **Standalone PHP / cPanel Website** (Works directly on standard Apache / cPanel / LiteSpeed web servers).
   - **Native Custom WordPress Theme** (`wordpress-theme/dehradun-defence-college/` ready to drop into `wp-content/themes/`).

---

## 🚀 Local Testing & Running the Standalone Version

### Option A: Using PHP Built-In Web Server
If PHP is installed on your local computer:
```bash
# Navigate to the project root directory
cd consultancy

# Start the PHP development server on port 8000
php -S localhost:8000
```
Open your browser and navigate to:
```
http://localhost:8000
```

### Option B: Using XAMPP / WampServer / MAMP
1. Copy or clone this folder into your web server directory:
   - For XAMPP: `C:\xampp\htdocs\consultancy`
   - For WampServer: `C:\wamp64\www\consultancy`
2. Start the Apache service in XAMPP / WampServer control panel.
3. Visit `http://localhost/consultancy` in your web browser.

---

## 📁 Project Directory Structure

```
consultancy/
├── assets/
│   ├── css/
│   │   └── style.css                 # Master responsive stylesheet with tokens
│   ├── js/
│   │   └── main.js                   # Navigation, filter, lightbox, and AJAX handler
│   └── images/
│       ├── hero-cadets.jpg           # Cadets morning parade at Dehradun campus
│       ├── director-mahendra.jpg     # Founder & Director Mr. Mahendra Kukreja
│       ├── ssb-gto-ground.jpg        # Authentic outdoor GTO obstacle grounds
│       ├── campus-hostel.jpg         # 10-acre campus & residential hostel buildings
│       ├── classroom-training.jpg    # Smart digital lecture hall & mentors
│       └── nda-success-cadets.jpg    # Successful cadets holding recommendation letters
├── includes/
│   ├── header.php                    # Header with SEO, marquee, and navigation
│   ├── footer.php                    # 4-Column footer with quick links & official portals
│   ├── enquiry-modal.php             # Popup admission enquiry modal window
│   └── floating-widgets.php          # Floating WhatsApp, scroll-to-top, & mobile bar
├── storage/                          # Secure directory for leads.json
├── wordpress-theme/
│   └── dehradun-defence-college/     # Complete custom WordPress theme
│       ├── style.css                 # Theme declaration & Gutenberg classes
│       ├── functions.php             # Enqueue, CPTs, Customizer, AJAX handler
│       ├── header.php                # Theme header
│       ├── footer.php                # Theme footer
│       ├── front-page.php            # Home template
│       ├── page.php                  # Standard page template
│       ├── single.php                # Single blog post template
│       ├── single-ddc_course.php     # Custom post type course template
│       ├── archive.php               # Archive template
│       ├── 404.php                   # 404 template
│       ├── page-about.php            # Custom About Us page template
│       ├── page-courses.php          # Custom Courses catalog template
│       ├── page-contact.php          # Custom Contact Us page template
│       ├── page-faculty-facilities.php
│       ├── page-results.php
│       ├── page-gallery.php
│       ├── template-parts/
│       │   ├── enquiry-modal.php
│       │   └── whatsapp-btn.php
│       └── screenshot.png            # WordPress dashboard theme screenshot
├── config.php                        # Central configuration & business info
├── .env.example                      # Protected environment variables template
├── send-enquiry.php                  # Secure server-side form processor
├── schema.sql                        # MySQL / MariaDB leads table schema
├── .htaccess                         # Apache performance, caching, & security
├── README.md                         # Project overview & running instructions
├── CPANEL_DEPLOYMENT_GUIDE.md        # Step-by-step cPanel hosting guide
├── WORDPRESS_INSTALLATION_GUIDE.md   # WordPress theme installation & setup guide
└── PRE_DEPLOYMENT_CHECKLIST.md       # Pre-flight testing & verification checklist
```

---

## 📞 Verified Business Identity & Contact Details
- **Academy Name**: Dehradun Defence College
- **Founder & Director**: Mr. Gaurav Sharma
- **Primary Phone**: +91 9719104024
- **Secondary Phone**: +91 8650666609 / +91 7895510755
- **Official Email**: `dehradundefencecollege@gmail.com`
- **Campus Address**: Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008
- **Office Hours**: Monday - Sunday: 8:00 AM - 6:00 PM
- **Key Statistics**: 5+ Years, 18+ Mentors, 8+ Specialised Courses, 970+ Trained Cadets, 68+ Qualifiers (25+ joined NDA between 2021-2024).
