# WordPress Installation & Custom Theme Integration Guide
## Dehradun Defence College Custom Theme

This guide walks you through installing and activating the custom **Dehradun Defence College** theme on any WordPress installation (self-hosted WordPress 5.8 through 6.7+).

---

### Step 1: Prepare the Theme Directory
The theme files are located inside:
```
wordpress-theme/dehradun-defence-college/
```
1. Compress the folder `dehradun-defence-college` into a zip file named:
   `dehradun-defence-college.zip`
2. Ensure the zip structure starts directly with the theme files or root folder:
   ```
   dehradun-defence-college/
   ├── style.css
   ├── functions.php
   ├── header.php
   ├── footer.php
   ├── front-page.php
   ├── assets/
   └── ...
   ```

---

### Step 2: Install & Activate the Theme

#### Method A: Via WordPress Admin Dashboard
1. Log in to your WordPress admin dashboard (`https://yourdomain.com/wp-admin`).
2. Navigate to **Appearance** > **Themes**.
3. Click **Add New Theme** at the top, then click **Upload Theme**.
4. Choose `dehradun-defence-college.zip` from your computer and click **Install Now**.
5. Once uploaded, click **Activate**.

#### Method B: Via cPanel File Manager or FTP
1. In cPanel File Manager, navigate to `public_html/wp-content/themes/`.
2. Upload `dehradun-defence-college.zip` and extract it.
3. In WordPress Admin > **Appearance** > **Themes**, locate **Dehradun Defence College** and click **Activate**.

---

### Step 3: Configure Theme Customizer (Contact & Business Info)
The theme includes native Customizer controls so you never have to hardcode phone numbers or addresses:
1. In WordPress Admin, go to **Appearance** > **Customize**.
2. Click **Academy Contact Information**:
   - **Primary Contact Phone**: `+91 9719104024`
   - **Secondary Contact Phone**: `+91 8650666609`
   - **WhatsApp Number**: `919719104024`
   - **Official Admission Email**: `dehradundefencecollege@gmail.com`
   - **Campus Physical Address**: `Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008`
   - **Admissions Office Hours**: `Monday - Sunday: 8:00 AM - 6:00 PM`
3. Click **Publish**.

---

### Step 4: Configure Navigation Menus
1. Navigate to **Appearance** > **Menus**.
2. Click **Create a New Menu**, name it `Primary Navigation`.
3. Add your pages:
   - Home
   - About Us
   - Courses
   - Faculty & Campus
   - Results
   - Gallery
   - Contact Us
4. Under **Menu Settings**, check the display location: **Primary Navigation Menu**.
5. Click **Save Menu**.

---

### Step 5: Configure Front Page Display
1. In WordPress Admin, go to **Settings** > **Reading**.
2. Under **Your homepage displays**, select **A static page (select below)**.
3. Select your created Home page for **Homepage** (uses `front-page.php` automatically).
4. Select your Blog page for **Posts page**.
5. Click **Save Changes**.

---

### Step 6: Managing Custom Post Types (Courses, Testimonials, Achievers)
The theme registers 3 clean Custom Post Types in your WordPress admin menu:
1. **Courses (`ddc_course`)**:
   - Add new courses with featured image, syllabus details, and category (NDA Foundation, CDS, AFCAT, SSB).
2. **Testimonials (`ddc_testimonial`)**:
   - Add student and parent reviews.
3. **Hall of Fame (`ddc_achiever`)**:
   - Add recommended officer cadets with photo and academy entry.

---

### Step 7: Configuring Reliable SMTP Email Delivery
To ensure enquiry notification emails reach inboxes without landing in spam:
1. In WordPress Admin, install the free plugin **WP Mail SMTP** or **FluentSMTP**.
2. Choose your SMTP provider:
   - **cPanel Webmail**: Use host `mail.yourdomain.com`, port `465` (SSL) or `587` (TLS), with your cPanel email and password.
   - **Google Workspace / Gmail**: Use Gmail API or App Password.
3. Send a test email from the plugin settings to verify successful connection.
