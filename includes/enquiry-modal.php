<?php
/**
 * Quick Admission Enquiry Modal - Dehradun Defence College
 */
require_once __DIR__ . '/../config.php';
?>
<!-- Quick Admission Enquiry Modal Window -->
<div class="ddc-modal-overlay" id="enquiryModal" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
    <div class="ddc-modal-box">
        <button type="button" class="ddc-modal-close close-enquiry-modal" aria-label="Close Modal">&times;</button>
        
        <div class="hero-form-header" style="margin-top: 0.5rem;">
            <span class="badge-gold">Admissions Open 2026</span>
            <h3 id="modalTitle" style="margin-top: 0.5rem;">Admission Enquiry & Counseling</h3>
            <p>Fill out the form below. Our senior defence counselor will contact you within 24 hours.</p>
        </div>

        <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
            <!-- Anti-Spam Hidden Fields -->
            <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
            <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

            <!-- Form Status Messages -->
            <div class="form-status-alert" role="alert"></div>

            <div class="form-group">
                <label class="form-label" for="modal_name">Full Name *</label>
                <input type="text" id="modal_name" name="full_name" class="form-control" placeholder="Candidate's Full Name" required>
                <div class="form-error-feedback"></div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="modal_mobile">Mobile Number *</label>
                    <input type="tel" id="modal_mobile" name="mobile_number" class="form-control" placeholder="10-Digit Mobile" required>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="modal_email">Email Address *</label>
                    <input type="email" id="modal_email" name="email" class="form-control" placeholder="active.email@example.com" required>
                    <div class="form-error-feedback"></div>
                </div>
            </div>

            <div class="form-row-2col">
                <div class="form-group">
                    <label class="form-label" for="modal_course">Course of Interest *</label>
                    <select id="modal_course" name="course_interest" class="form-control" required>
                        <option value="">Select Course</option>
                        <option value="NDA Foundation After 10th">NDA Foundation After 10th</option>
                        <option value="NDA (Girls) After 10th">NDA (Girls) Special Wing</option>
                        <option value="NDA Target / Dropper Batch (After 12th)">NDA Target / Dropper Batch (After 12th)</option>
                        <option value="CDS Training (Combined Defence Services)">CDS Training (IMA, OTA, AFA, INA)</option>
                        <option value="AFCAT Coaching">AFCAT Coaching</option>
                        <option value="SSB Interview 14-Day Camp">SSB Interview Comprehensive Training</option>
                        <option value="RIMC & Sainik School Coaching">RIMC & Sainik School Coaching</option>
                        <option value="CAPF (AC) & OTA Wing">CAPF (AC) & OTA Wing</option>
                    </select>
                    <div class="form-error-feedback"></div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="modal_edu">Current Education Level</label>
                    <select id="modal_edu" name="education_level" class="form-control">
                        <option value="10th Appearing / Passed">10th Appearing / Passed</option>
                        <option value="11th Studying">11th Studying</option>
                        <option value="12th Appearing / Passed">12th Appearing / Passed</option>
                        <option value="Graduate / Final Year">Graduate / Final Year</option>
                        <option value="8th or Below (RIMC/Sainik)">8th or Below (RIMC/Sainik)</option>
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
                <label class="form-label" for="modal_msg">Message / Query (Optional)</label>
                <textarea id="modal_msg" name="message" class="form-control" rows="2" placeholder="Tell us if you need hostel accommodation, specific batch dates, etc."></textarea>
            </div>

            <div class="form-check">
                <input type="checkbox" id="modal_consent" name="privacy_consent" checked required>
                <label for="modal_consent">
                    I agree to the <a href="privacy-policy.php" target="_blank" style="color: var(--primary-navy); font-weight: 600; text-decoration: underline;">Privacy Policy</a> and authorize Dehradun Defence College to contact me via Call, SMS, or WhatsApp regarding admission guidance.
                </label>
                <div class="form-error-feedback"></div>
            </div>

            <button type="submit" class="btn btn-gold" style="width: 100%;">
                <span>Submit Admission Enquiry</span>
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </button>
        </form>
    </div>
</div>
