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

    <!-- Academic Teaching Faculty Showcase -->
    <?php 
    $faculty_members = ddc_get_faculty_members(); 
    if (!empty($faculty_members)):
    ?>
    <section class="section-padding bg-white" id="academic-faculty">
        <div class="container">
            <div class="section-header">
                <span class="badge-saffron">Subject Matter Experts</span>
                <h2>Distinguished Academic Faculty</h2>
                <div class="gold-divider"></div>
                <p>Guided by seasoned educators and NIT/IIT post-graduates who turn rigorous science and mathematics into high-scoring competitive mastery.</p>
            </div>

            <div class="faculty-showcase-container" style="margin-bottom: 3.5rem;">
                <?php foreach ($faculty_members as $fac): ?>
                    <div class="faculty-member-card">
                        <div class="faculty-member-sidebar">
                            <div class="faculty-member-photo-frame">
                                <img src="<?php echo esc_url($theme_uri . '/assets/images/' . $fac['photo']); ?>" alt="<?php echo esc_attr($fac['name'] . ' - ' . $fac['role']); ?>" class="faculty-member-photo" loading="lazy">
                            </div>
                            <span class="faculty-badge-role"><?php echo esc_html($fac['role']); ?></span>
                            <h3 class="faculty-member-name"><?php echo esc_html($fac['name']); ?></h3>
                            <div class="faculty-member-qual"><?php echo esc_html($fac['education']); ?></div>
                            <div class="faculty-exp-badge">★ <?php echo esc_html($fac['experience']); ?> ★</div>
                        </div>

                        <div class="faculty-member-content">
                            <div class="faculty-quote-banner">
                                <p>“<?php echo esc_html($fac['quote']); ?>”</p>
                            </div>

                            <p class="faculty-bio-text"><?php echo esc_html($fac['bio']); ?></p>

                            <div>
                                <div class="faculty-exams-label">
                                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    <span>Target Competitive Exams Mastered:</span>
                                </div>
                                <div class="faculty-exam-tags-wrap">
                                    <?php foreach ($fac['exams'] as $exam): ?>
                                        <span class="faculty-exam-pill"><?php echo esc_html($exam); ?></span>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Faculty Mentors -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Guiding Cadets to the Academy</span>
                <h2>Faculty Mentors & Advisory Board</h2>
                <div class="gold-divider"></div>
            </div>

            <div class="facilities-grid">
                <!-- Director 1: Mahendra Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-mahendra.jpg'); ?>" alt="Mr. Mahendra Kukreja" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Mahendra Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Managing Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Managing Director — Dehradun Defence College</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Managing Director guiding defence entrance pedagogy, cadet lifestyle conditioning, and sustained excellence in Armed Forces selections.
                    </p>
                </div>

                <!-- Director 2: Zaheer Ahmed -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-zaheer.jpg'); ?>" alt="Mr. Zaheer Ahmed" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Zaheer Ahmed</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Director — DDC & Managing Director — Doon Public Senior Secondary School</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Director of DDC and Managing Director of Doon Public Senior Secondary School, dedicated to character-driven academic schooling.
                    </p>
                </div>

                <!-- Director 3: Gaurav Sharma -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-gaurav.jpg'); ?>" alt="Mr. Gaurav Sharma" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Gaurav Sharma</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director & Principal</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Director — DDC & Principal — Doon Public Senior Secondary School</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Director of DDC and Principal of Doon Public Senior Secondary School, spearheading strategic NDA preparation and UPSC academic mastery.
                    </p>
                </div>

                <!-- Director 4: Neha Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-neha.jpg'); ?>" alt="Ms. Neha Kukreja" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Ms. Neha Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Director — Dehradun Defence College (DDC)</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Director of Dehradun Defence College, directing candidate academic admissions, counseling roadmaps, batch enrollments, and student-parent onboarding.
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
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>" alt="Authentic Dehradun Defence College Campus Building and Hostels">
                    <div class="facility-card-overlay">
                        <h4>In-Campus Hostels & Academic Complex</h4>
                        <p>Dehradun's 1st campus with 100% in-house separate boys & girls wings, biometric security, and 4 military mess meals.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/cadets-parade-assembly.jpg'); ?>" alt="Cadets Parade Ground Assembly and Obstacle Course">
                    <div class="facility-card-overlay">
                        <h4>Grand Parade & Obstacle Grounds</h4>
                        <p>Massive drill grounds with Himalayan backdrop, Burma Bridge, Tiger Leap, and full Progressive Group Tasks setup.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-lecture-hall-real.jpg'); ?>" alt="Authentic Stepped Smart Lecture Hall with Cadets in Uniform">
                    <div class="facility-card-overlay">
                        <h4>Stepped Smart Lecture Halls</h4>
                        <p>Tiered lecture theatres packed with uniform cadets, daily morning newspaper analysis, and 20-year UPSC prep.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-girls-wing-formation.jpg'); ?>" alt="NDA Girls Wing Cadets Morning Formation in Uniform">
                    <div class="facility-card-overlay">
                        <h4>Dedicated NDA (Girls) Wing</h4>
                        <p>Independent residential quarters, 24/7 female wardens, morning drill formations, and tailored SSB personality grooming.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-front-office.jpg'); ?>" alt="Official Front Office Reception & Admission Counseling Helpdesk">
                    <div class="facility-card-overlay">
                        <h4>Front Office & Admission Helpdesk</h4>
                        <p>Centrally located on Sahastradhara Road for one-on-one career roadmaps, parent counseling, and campus tours.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-ground-physical-training.jpg'); ?>" alt="Cadet Physical Agility & Endurance Grounds">
                    <div class="facility-card-overlay">
                        <h4>Physical Conditioning & Obstacle Drills</h4>
                        <p>Outdoor cross-country trails, agility conditioning, and sports sessions in scenic Maldevta foothills.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-study-library.jpg'); ?>" alt="Cadet Evening Study Hall and Reference Library">
                    <div class="facility-card-overlay">
                        <h4>Cadet Study Hall & Library</h4>
                        <p>Structured evening self-study supervised by resident mentors with comprehensive defence literature.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/chess-indoor-session.jpg'); ?>" alt="Indoor Chess & Tactical Motivation Center">
                    <div class="facility-card-overlay">
                        <h4>Tactical Chess & Mind Gym</h4>
                        <p>Indoor strategic games cultivating foresight, mental resilience, and military values.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
