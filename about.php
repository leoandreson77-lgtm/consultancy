<?php
/**
 * About Us Page - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'About Us | Dehradun Defence College - Premier Defence Academy';
$page_desc = 'Learn about Dehradun Defence College, our visionary Founder & Director Mr. Mahendra Kukreja, our Gurukul training philosophy, and our mission to groom India’s finest armed forces officers.';
$current_page = 'about';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Institution Profile</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">About Dehradun Defence College</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 680px; margin: 0 auto;">
                A Next-Generation Gurukul cultivating leadership, character, and academic mastery for the Indian Armed Forces.
            </p>
        </div>
    </section>

    <!-- Director's Message Section -->
    <section class="section-padding bg-slate">
        <div class="container about-grid">
            <div>
                <img src="assets/images/director-mahendra.jpg" alt="Mr. Mahendra Kukreja, Founder & Director" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%; border: 4px solid #FFFFFF;">
                <div style="margin-top: 1.25rem; text-align: center;">
                    <h3 style="font-size: 1.35rem; color: var(--primary-navy);"><?php echo DIRECTOR_NAME; ?></h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.9rem; text-transform: uppercase;"><?php echo DIRECTOR_ROLE; ?></p>
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
                    <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-navy">
                        <span>Call Campus Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision, Mission & Goals -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Our Guiding Light</span>
                <h2>Our Vision, Mission & Core Values</h2>
                <div class="gold-divider"></div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.25rem;" class="facilities-grid">
                <!-- Vision -->
                <div class="feature-box" style="border-top: 4px solid var(--primary-navy);">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="12 8 8 12 12 16 16 12 12 8"></polygon></svg>
                    </div>
                    <h3>Our Vision</h3>
                    <p style="line-height: 1.7; color: var(--text-muted);">
                        To nurture the finest future officers for the Indian Armed Forces. We envision an educational sanctuary where every motivated youth receives uncompromised guidance, top-tier academics, and true military character development.
                    </p>
                </div>

                <!-- Mission -->
                <div class="feature-box" style="border-top: 4px solid var(--accent-gold);">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Our Mission</h3>
                    <p style="line-height: 1.7; color: var(--text-muted);">
                        To align classroom instruction with the unique demands of UPSC defense examinations. Our mission synthesizes academic mastery, physical fitness, psychological stamina, and a deep, active sense of patriotism.
                    </p>
                </div>

                <!-- Goal -->
                <div class="feature-box" style="border-top: 4px solid var(--tricolor-green);">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </div>
                    <h3>Our Goal</h3>
                    <p style="line-height: 1.7; color: var(--text-muted);">
                        To cultivate honesty, discipline, courage, clear communication, public speaking, and genuine leadership stamina. We aim for nothing less than complete officer-level readiness.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Dehradun is the Defence Capital -->
    <section class="section-padding bg-slate">
        <div class="container about-grid">
            <div>
                <span class="badge-navy">Strategic Advantage</span>
                <h2 style="margin: 0.75rem 0 1rem 0;">Why Study in Dehradun? The City of Military Heritage</h2>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                    Dehradun is universally revered as India’s military training capital. Home to the legendary <strong>Indian Military Academy (IMA)</strong>, the <strong>Rashtriya Indian Military College (RIMC)</strong>, and historical cantonments, the very air of Dehradun inspires patriotism and military excellence.
                </p>
                <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                    Situated along Maldevta Road away from urban pollution, Dehradun Defence College provides clean mountain air, high elevation for endurance running, and peaceful natural surroundings that foster deep focus and physical stamina.
                </p>
                <div class="feature-check-list">
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Pristine Valley Climate</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Proximity to IMA & RIMC</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Retired Officer Mentors on Tap</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Distraction-Free Gurukul Campus</span>
                    </div>
                </div>
            </div>

            <div>
                <img src="assets/images/hero-cadets.jpg" alt="Dehradun Defence College Cadets on Parade" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
            </div>
        </div>
    </section>

    <!-- Admission CTA Banner -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 760px;">
            <span class="badge-gold">Join The Best</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Experience the Transformation First-Hand</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; margin-bottom: 2rem;">
                Visit our campus in Maldevta, Dehradun, interact with our faculty, and inspect our hostels and GTO ground.
            </p>
            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Campus Tour Visit">
                    Schedule Campus Visit
                </button>
                <a href="contact.php" class="btn btn-outline-white btn-lg">
                    Contact & Directions
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
