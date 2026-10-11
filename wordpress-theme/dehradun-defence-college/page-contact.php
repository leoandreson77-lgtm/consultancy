<?php
/**
 * Template Name: Contact Us Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$phone1  = get_theme_mod('ddc_phone_1', '+91 9719104024');
$phone2  = get_theme_mod('ddc_phone_2', '+91 8650666609');
$email   = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
$address = get_theme_mod('ddc_address', 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008');
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Get in Touch</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Contact Us & Campus Location</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Connect with our admissions desk, request a callback, or plan your visit to our scenic residential campus in Dehradun.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container" style="display: grid; grid-template-columns: 1fr 1.35fr; gap: 3.5rem; align-items: start;">
            <!-- Left Info Cards -->
            <div>
                <span class="badge-navy">Admissions Office</span>
                <h2 style="margin: 0.75rem 0 1.25rem 0; font-size: 2rem;">We Are Here to Guide You</h2>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 2rem;">
                    Available 7 days a week to assist aspirants and parents with batch counseling and hostel tours.
                </p>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Direct Admission Hotlines</h4>
                    <p style="font-size: 0.95rem; margin: 0; line-height: 1.6;">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone1)); ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo esc_html($phone1); ?></a><br>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone2)); ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo esc_html($phone2); ?></a>
                    </p>
                </div>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 1.25rem;">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Email Address</h4>
                    <a href="mailto:<?php echo esc_attr($email); ?>" style="color: var(--primary-navy); font-weight: 600;"><?php echo esc_html($email); ?></a>
                </div>

                <div style="background: #FFFFFF; padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <h4 style="font-size: 1.05rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Campus Location</h4>
                    <p style="font-size: 0.925rem; color: var(--text-muted); line-height: 1.6; margin: 0;">
                        <?php echo esc_html($address); ?>
                    </p>
                </div>
            </div>

            <!-- Right Form -->
            <div style="background: #FFFFFF; padding: 2.75rem 2.25rem; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg);">
                <div class="hero-form-header" style="text-align: left; margin-bottom: 1.75rem;">
                    <span class="badge-saffron">Admissions 2026</span>
                    <h3 style="font-size: 1.85rem; margin-top: 0.5rem;">Send an Admission Enquiry</h3>
                </div>

                <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="hidden" name="action" value="ddc_submit_enquiry">
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem;">
                        <div class="form-group">
                            <label class="form-label">Mobile Number *</label>
                            <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                            <div class="form-error-feedback"></div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">Email Address *</label>
                            <input type="email" name="email" class="form-control" placeholder="active.email@example.com" required>
                            <div class="form-error-feedback"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Course of Interest *</label>
                        <select name="course_interest" class="form-control" required>
                            <option value="">Select Course</option>
                            <option value="NDA Foundation after 10th">NDA Foundation after 10th</option>
                            <option value="NDA (Girls) after 10th">NDA (Girls) Special Wing</option>
                            <option value="NDA Target Batch 12th">NDA Target / Dropper Batch</option>
                            <option value="CDS Training">CDS Training (IMA, OTA, AFA)</option>
                            <option value="AFCAT">AFCAT Coaching</option>
                            <option value="SSB Training">SSB Interview 14-Day Practical Camp</option>
                        </select>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Message / Query</label>
                        <textarea name="message" class="form-control" rows="3" placeholder="Tell us if you need hostel accommodation."></textarea>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="wp_c_consent" name="privacy_consent" checked required>
                        <label for="wp_c_consent">I agree to the privacy policy.</label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold btn-lg" style="width: 100%;">
                        <span>Submit Admission Enquiry</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Google Map Embed -->
    <section class="section-padding" style="background-color: #FFFFFF;">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Directions</span>
                <h2>Campus Map & Directions</h2>
                <div class="gold-divider"></div>
            </div>
            <div style="border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-lg); border: 2px solid var(--border-light); height: 420px;">
                <iframe 
                    src="https://maps.google.com/maps?q=Dehradun%20Defence%20College%20Maldevta%20-%20NDA%20Coaching%20in%20Dehradun&t=m&z=14&output=embed&iwloc=near" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    title="Campus Location Map">
                </iframe>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
