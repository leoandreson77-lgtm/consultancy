<?php
/**
 * Template Name: Faculty and Facilities Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">World-Class Infrastructure</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Our Faculty Leadership & Campus Facilities</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Mentorship by seasoned defence assessors paired with uncompromised residential and obstacle training grounds in the foothills of Dehradun.
            </p>
        </div>
    </section>

    <!-- Faculty Mentors -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Guiding Cadets to the Academy</span>
                <h2>Faculty Mentors & Advisory Board</h2>
                <div class="gold-divider"></div>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.25rem;" class="facilities-grid">
                <!-- Director 1: Zaheer Ahmed -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-zaheer.jpg'); ?>" alt="Mr. Zaheer Ahmed" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Zaheer Ahmed</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director & Patron</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Owner — Doon Public Sr. Sec. School</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Visionary educational founder dedicated to character-driven academic schooling and holistic youth empowerment in Dehradun.
                    </p>
                </div>

                <!-- Director 2: Gaurav Sharma -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-gaurav.jpg'); ?>" alt="Mr. Gaurav Sharma" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Gaurav Sharma</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Dehradun Defence College</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Spearheading strategic NDA examination preparation, UPSC academic mastery, and Officer-Like Qualities (OLQ) development.
                    </p>
                </div>

                <!-- Director 3: Neha Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-neha.jpg'); ?>" alt="Ms. Neha Kukreja" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Ms. Neha Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">College Enrollment Specialist</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Directing candidate academic admissions, counseling roadmaps, batch enrollments, and student-parent onboarding.
                    </p>
                </div>

                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <div style="width: 140px; height: 140px; border-radius: 50%; background: var(--primary-navy); color: var(--accent-gold); display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2.5rem; font-family: var(--font-heading); font-weight: 800;">
                        COL
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Senior GTO Officer (Retd.)</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.75rem;">Ex-Senior GTO, Selection Center</p>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Over 28 years of Indian Army service and former Group Testing Officer assessor. Guides cadets through real obstacle course tasks and command dynamics.
                    </p>
                </div>

                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <div style="width: 140px; height: 140px; border-radius: 50%; background: var(--primary-navy-dark); color: #FFFFFF; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold); font-size: 2.5rem; font-family: var(--font-heading); font-weight: 800;">
                        PSY
                    </div>
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Defence Psychologist Panel</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.75rem;">SSB Psychology Specialists</p>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Ex-DIPR trained psychologist assessors evaluating cadets' dossiers (TAT, WAT, SRT, SDT) and helping remove subconscious mental barriers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Infrastructure</span>
                <h2>10-Acre Campus Facilities</h2>
                <div class="gold-divider"></div>
            </div>

            <div class="facilities-grid">
                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-hostel.jpg'); ?>" alt="Hostel and Mess">
                    <div class="facility-card-overlay">
                        <h4>Residential Hostels & Mess</h4>
                        <p>Separate boys & girls hostels with 4 nutritious meals daily and strict discipline.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/ssb-gto-ground.jpg'); ?>" alt="GTO Ground">
                    <div class="facility-card-overlay">
                        <h4>Live Outdoor Obstacle Ground</h4>
                        <p>Burma Bridge, Tarzan Swing, Tiger Leap, and full Progressive Group Tasks setup.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-training.jpg'); ?>" alt="Digital Classrooms">
                    <div class="facility-card-overlay">
                        <h4>Smart Digital Lecture Halls</h4>
                        <p>Equipped with smart interactive screens, AC comfort, and extensive defence archives.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
