<?php
/**
 * About Us Page - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'About Us | Dehradun Defence College - Premier Defence Academy';
$page_desc = 'Learn about Dehradun Defence College, our visionary Founder & Director Mr. Gaurav Sharma, our Gurukul training philosophy, and our mission to groom India’s finest armed forces officers.';
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

    <!-- Board of Directors Section -->
    <section class="section-padding bg-slate" id="leadership">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Visionary Guidance</span>
                <h2>Board of Directors & Institutional Leadership</h2>
                <div class="gold-divider"></div>
                <p>Guided by visionary educational leadership with deep roots in holistic student development and disciplined defence training in Dehradun.</p>
            </div>

            <!-- 3 Directors Grid -->
            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2rem; margin-bottom: 4rem;" class="facilities-grid">
                <?php foreach ($DDC_LEADERSHIP as $leader): ?>
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); display: flex; flex-direction: column; transition: transform var(--transition-normal), box-shadow var(--transition-normal);" class="leader-card">
                    <div style="height: 340px; overflow: hidden; background: #0B1B3D; position: relative;">
                        <img src="<?php echo $leader['image']; ?>" alt="<?php echo htmlspecialchars($leader['name']); ?>" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                    </div>
                    <div style="padding: 1.75rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.25rem;"><?php echo htmlspecialchars($leader['name']); ?></h3>
                        <div style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;"><?php echo htmlspecialchars($leader['role']); ?></div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin: 0 auto 1rem auto; display: inline-block; padding: 0.25rem 0.65rem;"><?php echo htmlspecialchars($leader['badge']); ?></span>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            <?php echo htmlspecialchars($leader['bio']); ?>
                        </p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <!-- Joint Leadership Message Box -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg); padding: 3rem 2.5rem;">
                <div class="about-grid" style="align-items: center;">
                    <div>
                        <span class="badge-saffron">Our Pledge to Aspirants</span>
                        <h2 style="margin: 0.75rem 0 1.25rem 0; font-size: 1.85rem;">"Where Excellence Meets Discipline: Turning Aspirations into Uniform Reality"</h2>
                        
                        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                            Under the joint patronage of <strong>Doon Public Senior Secondary School</strong> and <strong>Dehradun Defence College</strong>, we have built an ecosystem that eliminates the compromise between school board results and military commission goals.
                        </p>

                        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                            We believe in shaping individuals into officers. That means instilling the unwavering integrity, self-discipline, mental resilience, and officer-like qualities (OLQs) that define leaders in the Indian Armed Forces. Whether entering after Class 10th or preparing for graduate CDS/AFCAT entries, cadets receive round-the-clock mentorship from ex-defence assessors, certified psychologists, and senior educational mentors.
                        </p>

                        <div style="display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                            <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Director Counseling">
                                <span>Schedule Director Counseling</span>
                            </button>
                            <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-navy">
                                <span>Call Admissions Desk</span>
                            </a>
                        </div>
                    </div>

                    <div style="text-align: center; background: var(--bg-slate); padding: 2rem; border-radius: var(--radius-md); border: 1px solid var(--border-light);">
                        <div class="brand-crest" style="margin: 0 auto 1rem auto; width: 64px; height: 64px; border-radius: 50%; background: var(--primary-navy); display: flex; align-items: center; justify-content: center;">
                            <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="#D4AF37" stroke-width="2">
                                <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"/>
                            </svg>
                        </div>
                        <h4 style="color: var(--primary-navy); margin-bottom: 0.5rem; font-size: 1.15rem;">Institutional Synergy</h4>
                        <p style="color: var(--text-muted); font-size: 0.875rem; line-height: 1.6; margin-bottom: 1.25rem;">
                            Integrated Academic Schooling via <strong>Doon Public Senior Secondary School</strong> & Defence Academy Training at <strong>Dehradun Defence College</strong>.
                        </p>
                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; font-size: 0.85rem; color: var(--primary-navy); font-weight: 700;">
                            Maldevta Valley Campus • Dehradun
                        </div>
                    </div>
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
