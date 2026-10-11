<?php
/**
 * Template Name: Leadership & Directors Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <!-- Page Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(135deg, rgba(11,37,69,0.95), rgba(11,37,69,0.85)), url('<?php echo esc_url($theme_uri . '/assets/images/defence-motivation-wall.jpg'); ?>') center/cover no-repeat; padding: 4.5rem 0 3.5rem 0; color: #FFFFFF; text-align: center;">
        <div class="container">
            <span class="badge-saffron" style="margin-bottom: 0.75rem; display: inline-block;">Guiding India's Future Officers</span>
            <h1 style="font-size: 2.75rem; color: #FFFFFF; margin-bottom: 0.75rem;">Leadership & Director's Desk</h1>
            <p style="font-size: 1.15rem; max-width: 780px; margin: 0 auto; color: rgba(255,255,255,0.85); line-height: 1.6;">
                The visionary leadership committed to nurturing discipline, academic supremacy, and Officer-Like Qualities (OLQ) in every cadet at our Maldevta residential campus.
            </p>
            <div style="display: flex; justify-content: center; gap: 0.75rem; margin-top: 1.5rem; font-size: 0.9rem;">
                <a href="<?php echo esc_url(home_url('/')); ?>" style="color: var(--accent-gold);">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <a href="<?php echo esc_url(home_url('/about-us/')); ?>" style="color: var(--accent-gold);">About</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <span style="color: #FFFFFF;">Directors</span>
            </div>
        </div>
    </section>

    <!-- Leadership Showcase -->
    <section class="section-padding bg-slate" id="directors-profiles">
        <div class="container">

            <div class="section-header" style="text-align: center; max-width: 820px; margin: 0 auto 3.5rem auto;">
                <span class="badge-gold">Steering Council</span>
                <h2>Dedicated to the Call of Duty & Student Welfare</h2>
                <div class="gold-divider" style="margin: 1rem auto;"></div>
                <p style="color: var(--text-muted); font-size: 1.05rem;">
                    Under the stewardship of Dr. Neha Kukreja and Mr. Mahendra Kukreja, Dehradun Defence College has emerged as Uttarakhand's benchmark residential academy for NDA, CDS, AFCAT, and SSB training.
                </p>
            </div>

            <!-- UPPER SIDE: Dr. Neha Kukreja (Managing Director) -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg); padding: 3rem 2.5rem; margin-bottom: 3.5rem;">
                <div style="display: grid; grid-template-columns: 280px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <div style="position: relative; display: inline-block;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/director-neha.jpg'); ?>" alt="Dr. Neha Kukreja - Managing Director" style="width: 240px; height: 260px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--accent-gold); box-shadow: var(--shadow-md);">
                            <span class="badge-navy" style="position: absolute; bottom: -12px; left: 50%; transform: translateX(-50%); white-space: nowrap; font-size: 0.8rem; padding: 0.35rem 0.85rem;">Managing Director</span>
                        </div>
                        <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-top: 1.75rem; margin-bottom: 0.25rem;">Dr. Neha Kukreja</h3>
                        <p style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.5rem;">Managing Director & Chief Student Mentor</p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">College Enrollment & Residential Welfare</p>
                    </div>

                    <div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--accent-gold)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <h3 style="font-size: 1.65rem; color: var(--primary-navy); margin: 0;">Director's Message to Parents & Aspirants</h3>
                        </div>
                        <div style="width: 60px; height: 3px; background: var(--accent-gold); margin-bottom: 1.25rem;"></div>

                        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--text-dark); margin-bottom: 1rem;">
                            <em>"When a parent entrusts their child to Dehradun Defence College, we do not view it merely as an academic admission — we view it as a sacred responsibility to sculpt an officer, a leader, and a disciplined human being."</em>
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1rem;">
                            Our mission is to provide an uncompromised, zero-distraction residential gurukul environment where cadets from across India can realize their dream of joining the National Defence Academy. With Dehradun's first <strong>100% in-house separate residential hostels for boys and girls</strong>, round-the-clock female wardens, biometric safety, and diet-balanced 4-meal mess, we guarantee that every student receives the utmost personal care, psychological confidence, and rigorous exam preparation.
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1.5rem;">
                            Whether your aspiration is NDA Foundation with 11th & 12th schooling, CDS, AFCAT, RIMC, or the Military Nursing Service, our doors and counseling desk are always open to guide you every step of the journey.
                        </p>

                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="Direct Counseling - Dr. Neha Kukreja">
                                <span>Book Direct Counseling</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                            <a href="tel:+917983670811" class="btn btn-outline-navy btn-sm">
                                <span>Speak with Admissions Desk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOWER SIDE: Mr. Mahendra Kukreja (Executive Director) -->
            <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 2px solid var(--border-light); box-shadow: var(--shadow-lg); padding: 3rem 2.5rem; margin-bottom: 3.5rem;">
                <div style="display: grid; grid-template-columns: 280px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <div style="position: relative; display: inline-block;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/director-mahendra.jpg'); ?>" alt="Mr. Mahendra Kukreja - Executive Director" style="width: 240px; height: 260px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--primary-navy); box-shadow: var(--shadow-md);">
                            <span class="badge-saffron" style="position: absolute; bottom: -12px; left: 50%; transform: translateX(-50%); white-space: nowrap; font-size: 0.8rem; padding: 0.35rem 0.85rem;">Executive Director</span>
                        </div>
                        <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-top: 1.75rem; margin-bottom: 0.25rem;">Mr. Mahendra Kukreja</h3>
                        <p style="color: var(--primary-navy); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.5rem;">Executive Director & Personality Development Assessor</p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Defence Pedagogy & OLQ Cultivation</p>
                    </div>

                    <div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--tricolor-saffron)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <h3 style="font-size: 1.65rem; color: var(--primary-navy); margin: 0;">Executive Director's Vision</h3>
                        </div>
                        <div style="width: 60px; height: 3px; background: var(--tricolor-saffron); margin-bottom: 1.25rem;"></div>

                        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--text-dark); margin-bottom: 1rem;">
                            <em>"Clearing defence examinations is not about cramming formulas; it is about cultivating an unbroken officer mindset that stays resilient in the face of pressure, uncertainty, and physical fatigue."</em>
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1rem;">
                            At Dehradun Defence College, we focus obsessively on both phases of military selection: the intellectual rigors of the Union Public Service Commission (UPSC) written exam, and the behavioral assessments of the Services Selection Board (SSB). From our early-morning 5:30 AM PT run to tactical chess and obstacle negotiating on our full-fledged GTO ground, our daily curriculum mirrors the lifestyle of military academies.
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1.5rem;">
                            Every DDCIAN is trained to possess Officer-Like Qualities (OLQ) — initiative, effective intelligence, courage, and stamina. That is why our cadets consistently earn recommendations at Allahabad, Bhopal, Bangalore, and Kapurthala boards.
                        </p>

                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="btn btn-primary btn-sm open-enquiry-modal" data-course="SSB Guidance - Mr. Mahendra Kukreja">
                                <span>Register for SSB Guidance</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Patron Directors: Zaheer Ahmed & Gaurav Sharma -->
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem;">
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-sm); display: flex; gap: 1.5rem; align-items: center;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-zaheer.jpg'); ?>" alt="Mr. Zaheer Ahmed" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid var(--accent-gold); flex-shrink: 0;">
                    <div>
                        <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Mr. Zaheer Ahmed</h4>
                        <span class="badge-navy" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Director & Patron</span>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0; line-height: 1.5;">
                            Owner, Doon Public Senior Secondary School. Educational pioneer anchoring strong CBSE academic standards and character discipline.
                        </p>
                    </div>
                </div>

                <div style="background: #FFFFFF; border-radius: var(--radius-lg); border: 1px solid var(--border-light); padding: 2rem; box-shadow: var(--shadow-sm); display: flex; gap: 1.5rem; align-items: center;">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/director-gaurav.jpg'); ?>" alt="Mr. Gaurav Sharma" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 3px solid var(--accent-gold); flex-shrink: 0;">
                    <div>
                        <h4 style="font-size: 1.2rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Mr. Gaurav Sharma</h4>
                        <span class="badge-navy" style="font-size: 0.75rem; margin-bottom: 0.5rem; display: inline-block;">Director & Principal</span>
                        <p style="font-size: 0.85rem; color: var(--text-muted); margin: 0; line-height: 1.5;">
                            Leading academic curriculum synergy between board syllabus and UPSC NDA written competitive examination.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>
