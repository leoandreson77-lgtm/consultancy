<?php
/**
 * Template Name: About Us Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Institution Profile</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">About Dehradun Defence College</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 680px; margin: 0 auto;">
                A Next-Generation Gurukul cultivating leadership, character, and academic mastery for the Indian Armed Forces.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container about-grid">
            <div>
                <img src="<?php echo esc_url($theme_uri . '/assets/images/director-mahendra.jpg'); ?>" alt="Mr. Mahendra Kukreja" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%; border: 4px solid #FFFFFF;">
                <div style="margin-top: 1.25rem; text-align: center;">
                    <h3 style="font-size: 1.35rem; color: var(--primary-navy);">Mr. Mahendra Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.9rem; text-transform: uppercase;">Founder & Director</p>
                </div>
            </div>

            <div>
                <span class="badge-navy">Leadership Message</span>
                <h2 style="margin: 0.75rem 0 1.25rem 0;">"Dear Aspirants, Let’s Turn Your Dreams Into Uniform Reality"</h2>
                
                <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                    Welcome to <strong>Dehradun Defence College</strong>, your dedicated partner in answering the noble call of serving our great nation. As a premier institution for NDA, CDS, AFCAT, and SSB preparation, our mission extends far beyond simply clearing entrance examinations.
                </p>

                <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                    We believe in shaping individuals into officers. That means instilling the unwavering integrity, self-discipline, mental resilience, and officer-like qualities (OLQs) that define leaders in the Indian Armed Forces. Whether you join us right after class 10th for our 2-Year NDA Foundation program or as a graduate preparing for CDS, you will experience an environment designed solely for your growth.
                </p>

                <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.75rem;">
                    Success demands tireless perseverance and deep self-belief. With our experienced retired defence assessors, rigorous academic modules, and authentic GTO training grounds, we stand beside you at every step of this sacred journey.
                </p>

                <div style="display: flex; gap: 1rem; align-items: center;">
                    <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Director Counseling">
                        <span>Meet With Director</span>
                    </button>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', get_theme_mod('ddc_phone_1', '+919719104024'))); ?>" class="btn btn-outline-navy">
                        <span>Call Campus Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
