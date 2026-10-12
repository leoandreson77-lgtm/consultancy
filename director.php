<?php
/**
 * Leadership & Directors Page - Dehradun Defence College
 * Features: Upper side Neha Kukreja, Lower side Mahendra Kukreja
 */
require_once __DIR__ . '/config.php';

$page_title = "Leadership & Directors' Desk | Dehradun Defence College";
$page_desc = "Meet the directors of Dehradun Defence College - Managing Director Dr. Neha Kukreja and Executive Director Mahendra Kukreja. Dedicated mentorship, character building, and officer grooming.";
$current_page = 'about';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Hero Banner -->
    <section class="page-hero" style="background: linear-gradient(135deg, rgba(11,37,69,0.95), rgba(11,37,69,0.85)), url('assets/images/defence-motivation-wall.jpg') center/cover no-repeat; padding: 4.5rem 0 3.5rem 0; color: #FFFFFF; text-align: center;">
        <div class="container">
            <span class="badge-saffron" style="margin-bottom: 0.75rem; display: inline-block;">Guiding India's Future Officers</span>
            <h1 style="font-size: 2.75rem; color: #FFFFFF; margin-bottom: 0.75rem;">Leadership & Director's Desk</h1>
            <p style="font-size: 1.15rem; max-width: 780px; margin: 0 auto; color: rgba(255,255,255,0.85); line-height: 1.6;">
                The visionary leadership committed to nurturing discipline, academic supremacy, and Officer-Like Qualities (OLQ) in every cadet at our Maldevta residential campus.
            </p>
            <div style="display: flex; justify-content: center; gap: 0.75rem; margin-top: 1.5rem; font-size: 0.9rem;">
                <a href="index.php" style="color: var(--accent-gold);">Home</a>
                <span style="color: rgba(255,255,255,0.4);">/</span>
                <a href="about.php" style="color: var(--accent-gold);">About</a>
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
            <div class="director-profile-box" style="border: 2px solid var(--accent-gold);">
                <div style="display: grid; grid-template-columns: 280px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <div style="position: relative; display: inline-block;">
                            <img src="assets/images/director-neha.jpg" alt="Dr. Neha Kukreja - Managing Director" style="width: 240px; height: 260px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--accent-gold); box-shadow: var(--shadow-md);">
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
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="Direct Counseling - Neha Kukreja">
                                <span>Book Direct Counseling</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </button>
                            <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-navy btn-sm">
                                <span>Speak with Admissions Desk</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- LOWER SIDE: Mahendra Kukreja (Executive Director) -->
            <div class="director-profile-box" style="border: 2px solid var(--border-light);">
                <div style="display: grid; grid-template-columns: 280px 1fr; gap: 2.5rem; align-items: center;" class="director-detail-grid">
                    <div style="text-align: center;">
                        <div style="position: relative; display: inline-block;">
                            <img src="assets/images/director-mahendra.jpg" alt="Mahendra Kukreja - Executive Director" style="width: 240px; height: 260px; object-fit: cover; border-radius: var(--radius-md); border: 3px solid var(--primary-navy); box-shadow: var(--shadow-md);">
                            <span class="badge-saffron" style="position: absolute; bottom: -12px; left: 50%; transform: translateX(-50%); white-space: nowrap; font-size: 0.8rem; padding: 0.35rem 0.85rem;">Executive Director</span>
                        </div>
                        <h3 style="font-size: 1.35rem; color: var(--primary-navy); margin-top: 1.75rem; margin-bottom: 0.25rem;">Mr. Mahendra Kukreja</h3>
                        <p style="color: var(--primary-navy); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.5rem;">Executive Director & Personality Development Assessor</p>
                        <p style="font-size: 0.85rem; color: var(--text-muted);">Defence Pedagogy & OLQ Cultivation</p>
                    </div>

                    <div>
                        <div style="display: flex; align-items: center; gap: 0.5rem; margin-bottom: 0.75rem;">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="var(--primary-navy)"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                            <h3 style="font-size: 1.65rem; color: var(--primary-navy); margin: 0;">Philosophy of Military Officer Development</h3>
                        </div>
                        <div style="width: 60px; height: 3px; background: var(--primary-navy); margin-bottom: 1.25rem;"></div>

                        <p style="font-size: 1.05rem; line-height: 1.75; color: var(--text-dark); margin-bottom: 1rem;">
                            <em>"One who is an officer is an officer now, and will remain one, rest of one's life for! Uniform is earned not just by reading books, but by transforming one's mindset, courage, and grit."</em>
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1rem;">
                            At Dehradun Defence College, we cultivate the 15 Officer-Like Qualities (OLQ) through experiential living. From 5:30 AM morning fitness drills and obstacle courses on our dedicated 2-acre GTO ground, to evening group discussions, lecturettes, and psychological assessment evaluations, our training regimen mirrors the actual atmosphere of the Services Selection Board (SSB).
                        </p>
                        <p style="font-size: 0.975rem; line-height: 1.7; color: var(--text-muted); margin-bottom: 1.5rem;">
                            Our students are constantly assessed by retired Armed Forces officers, senior GTO assessors, and Interviewing Officers. We leave no stone unturned to ensure that every cadet walks into the SSB board with absolute clarity, unshakeable self-belief, and the physical stamina required to succeed.
                        </p>

                        <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <a href="courses.php" class="btn btn-navy btn-sm">
                                <span>Explore Training Batches</span>
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </a>
                            <a href="results.php" class="btn btn-outline-navy btn-sm">
                                <span>View 2025-2026 Selections</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Supporting Leadership Team -->
            <div style="margin-top: 4rem;">
                <div class="section-header" style="text-align: center; margin-bottom: 2.5rem;">
                    <span class="badge-navy">Executive Academic Panel</span>
                    <h2>Senior Leadership & Mentorship</h2>
                    <div class="gold-divider" style="margin: 0.75rem auto;"></div>
                </div>

                <div class="directors-grid">
                    <div class="director-card">
                        <div class="director-img-wrap">
                            <img src="assets/images/director-zaheer.jpg" alt="Mr. Zaheer Ahmed - Director Doon Public School" class="director-img">
                            <span class="director-badge">Schooling Patron</span>
                        </div>
                        <div class="director-content">
                            <h3>Mr. Zaheer Ahmed</h3>
                            <p class="director-role">Director, Doon Public Senior Secondary School</p>
                            <p class="director-bio">
                                Ensuring seamless synchronization between CBSE Senior Secondary academic schooling and UPSC defence entrance syllabus, keeping board performance stellar.
                            </p>
                        </div>
                    </div>

                    <div class="director-card">
                        <div class="director-img-wrap">
                            <img src="assets/images/director-gaurav.jpg" alt="Mr. Gaurav Sharma - Director Academics" class="director-img">
                            <span class="director-badge">Academic Head</span>
                        </div>
                        <div class="director-content">
                            <h3>Mr. Gaurav Sharma</h3>
                            <p class="director-role">Director & Head of Academic Faculty</p>
                            <p class="director-bio">
                                Master of UPSC Mathematics pedagogy and shortcut methodologies, overseeing curriculum execution, weekly doubt clearing, and continuous test simulations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Leadership Pledge to Parents -->
            <div class="leadership-pledge-card" style="background: linear-gradient(135deg, var(--primary-navy), #061930); color: #FFFFFF; border-radius: var(--radius-lg); padding: 3rem 2.5rem; margin-top: 4rem; border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg);">
                <div style="text-align: center; max-width: 800px; margin: 0 auto;">
                    <span class="badge-gold">Our Solemn Guarantee</span>
                    <h3 class="pledge-title" style="font-size: 2rem; color: #FFFFFF; margin: 0.75rem 0 1rem 0;">The Dehradun Defence College Pledge to Every Parent</h3>
                    <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
                        We understand the trust you place in us when sending your son or daughter away from home. Here is our unbending commitment to your child's well-being:
                    </p>
                </div>

                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.75rem;">
                    <div style="background: rgba(255,255,255,0.06); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.12);">
                        <h4 style="color: var(--accent-gold); font-size: 1.1rem; margin-bottom: 0.5rem;"> 100% Transparent Tracking</h4>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Bi-weekly performance reports, attendance tracking, and direct telephone counseling sessions with directors.
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.12);">
                        <h4 style="color: var(--accent-gold); font-size: 1.1rem; margin-bottom: 0.5rem;"> Uncompromised Safety</h4>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            24/7 CCTV surveillance, boundary security guards, biometric access, and dedicated resident female wardens for girls.
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.12);">
                        <h4 style="color: var(--accent-gold); font-size: 1.1rem; margin-bottom: 0.5rem;"> Zero Tolerance for Bullying</h4>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Strict anti-ragging discipline. A caring, brotherhood-oriented Gurukul where juniors are nurtured by mentors.
                        </p>
                    </div>

                    <div style="background: rgba(255,255,255,0.06); padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid rgba(255,255,255,0.12);">
                        <h4 style="color: var(--accent-gold); font-size: 1.1rem; margin-bottom: 0.5rem;"> Balanced Defence Diet</h4>
                        <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            4 hygienic daily meals formulated by defence dietary norms with milk, fresh seasonal produce, and clean RO water.
                        </p>
                    </div>
                </div>

                <div style="text-align: center; margin-top: 2.5rem;">
                    <a href="contact.php" class="btn btn-gold btn-lg">
                        <span>Plan a Campus Visit & Meet Directors</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
            </div>

        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
