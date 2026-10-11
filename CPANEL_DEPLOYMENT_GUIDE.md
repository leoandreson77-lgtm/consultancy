# Step-by-Step cPanel Deployment Guide
## Dehradun Defence College Website

This guide walks you through deploying the standalone production version of the **Dehradun Defence College** website to standard cPanel shared hosting (Hostinger, GoDaddy, Bluehost, Namecheap, SiteGround, etc.).

---

### Prerequisites
- Active cPanel shared hosting account with Apache and PHP (PHP 7.4, 8.0, 8.1, 8.2, or 8.3).
- Domain name (e.g., `dehradundefencecollege.com`) pointed to your hosting nameservers.
- cPanel login credentials.

---

### Step 1: Prepare the Production Zip Archive
On your local machine, create a zip archive of the website files (excluding `.git` or local temporary folders):
1. Include:
   - `assets/` (css, js, images)
   - `includes/`
   - `storage/`
   - `index.php`
   - `about.php`
   - `courses.php`
   - `course-detail.php`
   - `faculty-facilities.php`
   - `results.php`
   - `blog.php`
   - `blog-single.php`
   - `gallery.php`
   - `contact.php`
   - `privacy-policy.php`
   - `terms.php`
   - `404.php`
   - `config.php`
   - `send-enquiry.php`
   - `.env.example`
   - `.htaccess`
2. Name the zip file `ddc-production.zip`.

---

### Step 2: Upload Files via cPanel File Manager
1. Log in to your cPanel dashboard.
2. Navigate to **Files** > **File Manager**.
3. Open the root directory for your domain:
   - For primary domain: open `public_html/`.
   - For an addon domain or subdomain: open the assigned directory (e.g., `public_html/subdomain/`).
4. Click the **Upload** icon on the top toolbar.
5. Select `ddc-production.zip` and wait for the upload bar to turn green (100%).
6. Return to File Manager, right-click `ddc-production.zip`, and choose **Extract**.
7. Delete the `.zip` archive after extraction is complete.

---

### Step 3: Configure Environment Variables & Permissions
1. In File Manager, ensure **Show Hidden Files (dotfiles)** is enabled in the top right **Settings**.
2. Make a copy of `.env.example` and rename it to `.env`:
   - Right-click `.env.example` > **Copy** > Enter `.env`.
3. Right-click `.env` > **Edit**:
   ```ini
   APP_ENV=production
   SITE_URL=https://dehradundefencecollege.com
   ADMIN_ENQUIRY_EMAIL=dehradundefencecollege@gmail.com

   # If using SMTP for outgoing emails:
   SMTP_ENABLED=false
   SMTP_HOST=smtp.gmail.com
   SMTP_PORT=587
   SMTP_SECURE=tls
   SMTP_USERNAME=your_email@gmail.com
   SMTP_PASSWORD=your_app_password
   SMTP_FROM_EMAIL=admissions@dehradundefencecollege.com
   SMTP_FROM_NAME="Dehradun Defence College Admissions"

   CSRF_SECRET=make_a_random_32_char_secret_string_here
   ```
4. Click **Save Changes**.
5. Ensure the `storage/` directory has write permissions:
   - Right-click `storage/` folder > **Change Permissions** > Set to `0755` (or `0775`).

---

### Step 4: Configure Free SSL Certificate
1. In cPanel, find **Security** > **SSL/TLS Status** (or **Let’s Encrypt SSL** / **AutoSSL**).
2. Check the box next to your domain name (`dehradundefencecollege.com` and `www.dehradundefencecollege.com`).
3. Click **Run AutoSSL**.
4. In 2–5 minutes, cPanel will automatically issue and install a free SSL certificate.
5. In **Domains** > **Domains**, toggle **Force HTTPS Redirect** to **ON**.

---

### Step 5: (Optional) Database Setup for Leads
If you wish to store student enquiries into a MySQL database:
1. In cPanel, navigate to **Databases** > **MySQL® Database Wizard**.
2. Create database name: `youruser_ddc`.
3. Create database user and strong password. Assign **ALL PRIVILEGES**.
4. Navigate to **phpMyAdmin** in cPanel.
5. Select your newly created database.
6. Click the **Import** tab on the top bar.
7. Choose `schema.sql` from the project files and click **Go**.
8. In `.env`, set:
   ```ini
   DB_ENABLED=true
   DB_HOST=localhost
   DB_NAME=youruser_ddc
   DB_USER=youruser_dbuser
   DB_PASS=your_password
   ```

---

### Step 6: Testing the Live Deployment
1. Open your domain in an incognito window: `https://dehradundefencecollege.com`.
2. Verify:
   - All images render crisply.
   - Navigation links to all 11 pages function properly.
   - The WhatsApp button launches WhatsApp with the pre-filled enquiry text.
   - Submit a test inquiry via the homepage hero card. Check for:
     * Client-side validation when leaving fields blank.
     * Immediate success message upon valid submission.
     * Receipt of email notification in `ADMIN_ENQUIRY_EMAIL`.
     * Entry recorded in `storage/leads.json`.
