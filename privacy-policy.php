<?php
/**
 * Privacy Policy - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Privacy Policy | Dehradun Defence College';
$page_desc = 'Privacy Policy and Student Data Protection Practices for Dehradun Defence College. Learn how your admission inquiry information is handled securely.';
$current_page = 'privacy-policy';

include __DIR__ . '/includes/header.php';
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container container-narrow" style="text-align: center;">
            <span class="badge-gold">Legal & Compliance</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Privacy Policy</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem;">
                Last Updated: October 2026 • Dehradun Defence College
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container container-narrow">
            <div style="background: #FFFFFF; padding: 3rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); line-height: 1.8; color: var(--text-main);">
                
                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 1rem;">1. Introduction & Scope</h2>
                <p>
                    At <strong>Dehradun Defence College</strong>, located at Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand, we respect your privacy and are committed to safeguarding the personal data of our prospective students, enrolled cadets, and parents. This Privacy Policy outlines how we collect, utilize, and protect your information when interacting with our website (<code><?php echo SITE_URL; ?></code>) and admission forms.
                </p>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">2. Information We Collect</h2>
                <p>
                    When you voluntarily submit an admission enquiry or register for a course, we may collect:
                </p>
                <ul style="margin: 0.5rem 0 1.5rem 1.5rem; list-style-type: disc;">
                    <li><strong>Candidate Information:</strong> Full name, email address, mobile phone number, residential state or city.</li>
                    <li><strong>Academic Profile:</strong> Current education level (10th, 12th, Graduate), course of interest, and hostel accommodation requirements.</li>
                    <li><strong>Technical Details:</strong> IP address, browser user-agent, and submission timestamp for anti-spam and security verification.</li>
                </ul>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">3. Purpose of Processing</h2>
                <p>
                    The collected information is used strictly for:
                </p>
                <ul style="margin: 0.5rem 0 1.5rem 1.5rem; list-style-type: disc;">
                    <li>Contacting you regarding batch schedules, eligibility criteria, and fee structures.</li>
                    <li>Sending transactional acknowledgement emails and admission brochures requested by you.</li>
                    <li>Coordinating campus inspection visits, parent counseling, and hostel room bookings.</li>
                    <li>Preventing automated spam, malicious attacks, and unauthorized form submissions.</li>
                </ul>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">4. Non-Disclosure & Third-Party Protection</h2>
                <p>
                    We <strong>never sell, rent, or trade</strong> your personal contact numbers or email addresses to commercial telemarketing brokers or external agencies. Your information is accessed solely by authorized academic counselors at Dehradun Defence College.
                </p>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">5. Data Security & Storage</h2>
                <p>
                    We implement industry-standard cryptographic techniques, encrypted communication channels (SSL/TLS), and secure server-side file protections to ensure your information remains confidential and invulnerable to unauthorized access.
                </p>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">6. Grievance & Inquiries</h2>
                <p>
                    If you have questions regarding this Privacy Policy or wish to request the removal or correction of your admission contact details, please email our administration desk at:
                </p>
                <p style="background-color: var(--bg-slate); padding: 1rem 1.25rem; border-radius: var(--radius-sm); font-weight: 600;">
                    Email: <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a><br>
                    Phone: <?php echo CONTACT_PHONE_1; ?><br>
                    Address: Maldevta Road, Near Laal Pull, Lwarkha, Dehradun, Uttarakhand - 248008
                </p>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
