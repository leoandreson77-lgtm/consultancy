<?php
/**
 * Template Name: Results & Achievements Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Proven Track Record</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Hall of Fame & Selection Achievements</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Celebrating our cadets who earned their recommendation letters and joined the prestigious academies of the Indian Armed Forces.
            </p>
        </div>
    </section>

    <!-- Metrics Strip -->
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

    <!-- Achievers Showcase -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Verified Achievers</span>
                <h2>Our Cadets Wearing The Uniform</h2>
                <div class="gold-divider"></div>
            </div>

            <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; box-shadow: var(--shadow-xl); border: 1px solid var(--border-light); margin-bottom: 3.5rem; display: grid; grid-template-columns: 1.1fr 1fr; align-items: center;">
                <div>
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-success-cadets.jpg'); ?>" alt="NDA Achievers" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div style="padding: 3rem 2.5rem;">
                    <span class="badge-gold">SSB Recommended</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">From Dehradun Classrooms to Officer Cadets</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Our structured training programs ensure that students achieve peak physical condition, rock-solid academic foundations in mathematics and science, and the psychological maturity necessary to earn a recommendation letter.
                    </p>
                    <button type="button" class="btn btn-primary open-enquiry-modal" data-course="Next Batch Admission">
                        <span>Join the Next Selection Batch</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
