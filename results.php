<?php
/**
 * Results & Achievements - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Results & Hall of Fame | Dehradun Defence College';
$page_desc = 'Explore genuine results, SSB recommendations, and NDA selections of Dehradun Defence College cadets. Verified selection records and student success stories.';
$current_page = 'results';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Proven Track Record</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Hall of Fame & Selection Achievements</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Celebrating our cadets who earned their recommendation letters and joined the prestigious academies of the Indian Armed Forces.
            </p>
        </div>
    </section>

    <!-- Verified Selection Metrics -->
    <section class="stats-strip">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number">25+</div>
                <div class="stat-label">NDA Selections</div>
                <div class="stat-sublabel">Commissioned into NDA (2021-2024)</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">68+</div>
                <div class="stat-label">Total Qualifiers</div>
                <div class="stat-sublabel">Across NDA, CDS, AFCAT & OTA</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">970+</div>
                <div class="stat-label">Aspirants Trained</div>
                <div class="stat-sublabel">Comprehensive Written & SSB Prep</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">104+</div>
                <div class="stat-label">5-Star Google Reviews</div>
                <div class="stat-sublabel">4.9 / 5.0 Average Rating</div>
            </div>
        </div>
    </section>

    <!-- Hall of Fame Showcase -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Verified Achievers</span>
                <h2>Our Cadets Wearing The Uniform</h2>
                <div class="gold-divider"></div>
                <p>Authentic stories of grit, discipline, and success from students of Dehradun Defence College.</p>
            </div>

            <!-- Spotlight Achiever Hero -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--border-light); margin-bottom: 3.5rem; display: grid; grid-template-columns: 1.1fr 1fr; align-items: center;">
                <div>
                    <img src="assets/images/nda-success-cadets.jpg" alt="NDA and CDS Recommended Cadets Celebrating" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 3rem 2.5rem;">
                    <span class="badge-gold">SSB Recommended</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">From Dehradun Classrooms to Officer Cadets</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Passing the Union Public Service Commission written examination is step one. Earning the recommendation letter through psychological screening, group testing, and interview assessment at 11 SSB Allahabad, 33 SSB Bhopal, or 1 AFSB Dehradun is what makes our academy legendary.
                    </p>
                    <div style="background-color: var(--bg-slate); border-left: 4px solid var(--accent-gold); padding: 1rem 1.25rem; margin-bottom: 1.5rem; font-style: italic; font-size: 0.95rem;">
                        “The schedule, the obstacle ground, and the daily mock interviews at DDC gave me the exact psychological poise I needed in front of the board.”
                    </div>
                    <button type="button" class="btn btn-primary open-enquiry-modal" data-course="Next Batch Admission">
                        <span>Join the Next Selection Batch</span>
                    </button>
                </div>
            </div>

            <!-- Achiever Stories Grid -->
            <div class="testimonials-grid">
                <!-- Card 1 -->
                <div class="testimonial-card">
                    <span class="badge-saffron" style="align-self: flex-start; margin-bottom: 0.75rem;">NDA Recommended</span>
                    <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Rahul Sharma</h4>
                    <p class="testimonial-text">
                        “Joined the 2-Year Foundation Batch after Class 10th. The faculty broke down advanced 11th & 12th mathematics into simple, repeatable steps. Cleared the written exam in first attempt and cleared SSB Allahabad.”
                    </p>
                    <div style="font-size: 0.85rem; color: var(--text-muted); border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        <strong>Entry:</strong> National Defence Academy | <strong>Batch:</strong> 2-Year Foundation
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="testimonial-card">
                    <span class="badge-gold" style="align-self: flex-start; margin-bottom: 0.75rem;">CDS (IMA Selected)</span>
                    <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Amit Verma</h4>
                    <p class="testimonial-text">
                        “Today, as I prepare to join the Indian Military Academy (IMA), I owe a huge debt to the mentors at Dehradun Defence College. The personalized attention during my SSB mock interviews helped me identify weaknesses I didn't know I had.”
                    </p>
                    <div style="font-size: 0.85rem; color: var(--text-muted); border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        <strong>Entry:</strong> Indian Military Academy | <strong>Batch:</strong> CDS Intensive
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="testimonial-card">
                    <span class="badge-navy" style="align-self: flex-start; margin-bottom: 0.75rem;">OTA Recommended</span>
                    <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Priya Singh</h4>
                    <p class="testimonial-text">
                        “The psychology dossier assessment and GTO obstacle ground sessions transformed me from a hesitant candidate into a confident speaker ready for the Services Selection Board. Proud to represent DDC!”
                    </p>
                    <div style="font-size: 0.85rem; color: var(--text-muted); border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        <strong>Entry:</strong> Officers Training Academy (OTA) | <strong>Batch:</strong> CDS (Girls Wing)
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="testimonial-card">
                    <span class="badge-saffron" style="align-self: flex-start; margin-bottom: 0.75rem;">AFCAT Flying Branch</span>
                    <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.5rem;">Vikram Singh Rathore</h4>
                    <p class="testimonial-text">
                        “The computer-based aptitude tests and daily military general awareness sessions made all the difference. Successfully recommended from 4 AFSB Varanasi.”
                    </p>
                    <div style="font-size: 0.85rem; color: var(--text-muted); border-top: 1px solid var(--border-light); padding-top: 0.75rem;">
                        <strong>Entry:</strong> Indian Air Force | <strong>Batch:</strong> AFCAT Fast Track
                    </div>
                </div>
            </div>

            <!-- Transparency Assurance Note -->
            <div style="margin-top: 3.5rem; background: #FFFFFF; border: 1px solid var(--border-light); border-radius: var(--radius-md); padding: 1.5rem 2rem; text-align: center;">
                <p style="font-size: 0.9rem; color: var(--text-muted); margin: 0;">
                    <strong>Integrity Notice:</strong> Dehradun Defence College upholds strict ethical transparency. We present genuine, verified testimonials from actual enrolled cadets. We do not publish fabricated rankings or unverified rolls.
                </p>
            </div>
        </div>
    </section>

    <!-- Admission Action Banner -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 780px;">
            <span class="badge-gold">Your Turn to Succeed</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Be the Next Name on Our Board of Officers</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Admissions for the upcoming 2026 batches are now accepting registrations.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="New Batch Admission 2026">
                    Enroll for 2026 Batch
                </button>
                <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-white btn-lg">
                    Direct Call: <?php echo CONTACT_PHONE_1; ?>
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
