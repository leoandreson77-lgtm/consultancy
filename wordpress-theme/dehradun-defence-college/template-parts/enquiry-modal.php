<?php
/**
 * Template Part: Admission Enquiry Modal Window
 * 
 * @package Dehradun_Defence_College
 */
?>
<!-- Quick Admission Enquiry Modal Window -->
<div class="ddc-modal-overlay" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="wpModalTitle">
    <div class="ddc-modal-box">
        <button type="button" class="ddc-modal-close close-enquiry-modal" aria-label="<?php esc_attr_e('Close Modal', 'dehradun-defence-college'); ?>">&times;</button>
        
        <div class="hero-form-header" style="margin-top: 0.5rem;">
            <span class="badge-gold">Admissions Open 2026</span>
            <h3 id="wpModalTitle" style="margin-top: 0.5rem;">Admission Enquiry & Counseling</h3>
            <p>Fill out the form below. Our senior defence counselor will contact you within 24 hours.</p>
        </div>

        <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
            <input type="hidden" name="action" value="ddc_submit_enquiry">
            <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
            <!-- Anti-Spam Hidden Field -->
            <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
            <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

            <div class="form-status-alert" role="alert"></div>

            <div class="form-group">
                <label class="form-label">Full Name *</label>
                <input type="text" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                <div class="form-error-feedback"></div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label">Mobile Number *</label>
                    <input type="tel" name="mobile_number" class="form-control" placeholder="10-Digit Mobile" required>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Address *</label>
                    <input type="email" name="email" class="form-control" placeholder="active.email@example.com" required>
                    <div class="form-error-feedback"></div>
                </div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label">Course of Interest *</label>
                    <select name="course_interest" class="form-control" required>
                        <option value="">Select Course</option>
                        <option value="NDA Foundation After 10th">NDA Foundation After 10th</option>
                        <option value="NDA (Girls) After 10th">NDA (Girls) Special Wing</option>
                        <option value="NDA Target / Dropper Batch (After 12th)">NDA Target / Dropper Batch</option>
                        <option value="CDS Training (Combined Defence Services)">CDS Training (IMA, OTA, AFA, INA)</option>
                        <option value="AFCAT Coaching">AFCAT Coaching</option>
                        <option value="SSB Interview 14-Day Camp">SSB Interview Comprehensive Training</option>
                        <option value="RIMC & Sainik School Coaching">RIMC & Sainik School Coaching</option>
                    </select>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label">Current Education Level</label>
                    <select name="education_level" class="form-control">
                        <option value="10th Appearing / Passed">10th Appearing / Passed</option>
                        <option value="11th Studying">11th Studying</option>
                        <option value="12th Appearing / Passed">12th Appearing / Passed</option>
                        <option value="Graduate / Final Year">Graduate / Final Year</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Preferred Contact Method</label>
                <div style="display: flex; gap: 1.5rem; font-size: 0.875rem; padding: 0.2rem 0;">
                    <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                        <input type="radio" name="preferred_contact" value="Call" checked> Phone Call
                    </label>
                    <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                        <input type="radio" name="preferred_contact" value="WhatsApp"> WhatsApp
                    </label>
                    <label style="display: flex; align-items: center; gap: 0.4rem; cursor: pointer;">
                        <input type="radio" name="preferred_contact" value="Email"> Email
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Message / Query (Optional)</label>
                <textarea name="message" class="form-control" rows="2" placeholder="Hostel requirements or specific queries"></textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" id="wp_modal_consent" name="privacy_consent" checked required>
                <label for="wp_modal_consent">
                    I agree to the <a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>" target="_blank" style="color: var(--primary-navy); font-weight: 600; text-decoration: underline;">Privacy Policy</a> and authorize Dehradun Defence College to contact me.
                </label>
                <div class="form-error-feedback"></div>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%;">
                <span>Submit Admission Enquiry</span>
            </button>
        </form>
    </div>
</div>
