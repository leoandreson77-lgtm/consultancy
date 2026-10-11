<?php
/**
 * Faculty and Facilities - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Faculty & Campus Facilities | Dehradun Defence College';
$page_desc = 'Discover the 10-acre residential campus, authentic GTO obstacle grounds, hostel, mess, and retired defence officer faculty mentors at Dehradun Defence College in Dehradun.';
$current_page = 'faculty-facilities';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">World-Class Infrastructure</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Our Faculty Leadership & Campus Facilities</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Mentorship by seasoned defence assessors paired with uncompromised residential and obstacle training grounds in the foothills of Dehradun.
            </p>
        </div>
    </section>

    <!-- Faculty Leadership Section -->
    <section class="section-padding bg-slate" id="faculty">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Guiding Cadets to the Academy</span>
                <h2>Faculty Mentors & Advisory Board</h2>
                <div class="gold-divider"></div>
                <p>Guided by retired armed forces officers and subject matter experts who understand the mindset required by the Union Public Service Commission and Service Selection Boards.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 2.25rem;" class="facilities-grid">
                <!-- Director 1: Zaheer Ahmed -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="assets/images/director-zaheer.jpg" alt="Mr. Zaheer Ahmed" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Zaheer Ahmed</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Owner — Doon Public Sr. Sec. School</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Visionary educational founder establishing the bedrock of academic discipline, values, and holistic cadet growth in Dehradun.
                    </p>
                </div>

                <!-- Director 2: Gaurav Sharma -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="assets/images/director-gaurav.jpg" alt="Mr. Gaurav Sharma" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Gaurav Sharma</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director & Principal</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Director — DDC & Principal — Doon Public School</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Leading institutional academic operations, board exam integration, UPSC syllabus mastery, and Officer-Like Qualities (OLQ) development.
                    </p>
                </div>

                <!-- Director 3: Mahendra Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="assets/images/director-mahendra.jpg" alt="Mr. Mahendra Kukreja" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Mr. Mahendra Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">Founder & Director — Dehradun Defence College</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Visionary mentor guiding defence entrance pedagogy, cadet lifestyle conditioning, and sustained excellence in Armed Forces selections.
                    </p>
                </div>

                <!-- Director 4: Neha Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); text-align: center; padding: 2rem 1.5rem;">
                    <img src="assets/images/director-neha.jpg" alt="Ms. Neha Kukreja" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 1.25rem auto; border: 3px solid var(--accent-gold);">
                    <h3 style="font-size: 1.25rem; color: var(--primary-navy);">Ms. Neha Kukreja</h3>
                    <p style="color: var(--tricolor-saffron); font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 0.25rem;">Director</p>
                    <span class="badge-navy" style="font-size: 0.725rem; margin-bottom: 0.75rem; display: inline-block;">College Enrollment Specialist</span>
                    <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6;">
                        Directing student admissions, parent counseling, eligibility roadmaps, and seamless enrollment into residential wings.
                    </p>
                </div>

                <!-- Mentor 2 -->
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

                <!-- Mentor 3 -->
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

    <!-- Campus & Infrastructure Showcase -->
    <section class="section-padding" id="facilities">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Campus Life</span>
                <h2>Complete In-House Defence Training Facilities</h2>
                <div class="gold-divider"></div>
                <p>Everything our cadets need to live, study, train, and succeed under one secure umbrella in Dehradun.</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <img src="assets/images/campus-hostel.jpg" alt="Hostel and Campus Buildings" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
                </div>
                <div>
                    <span class="badge-navy">Residential Facility</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">1. In-Campus Hostels & Nutritious Mess</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Our residential campus provides separate, highly secure boarding wings for male and female cadets. Rooms are well-ventilated, equipped with comfortable beds, study desks, and individual storage.
                    </p>
                    <ul class="feature-check-list" style="margin: 1rem 0;">
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Separate Boys & Girls Hostels</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>4 Wholesome Balanced Meals Daily</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>24/7 CCTV & Resident Wardens</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Uninterrupted Power & High-Speed WiFi</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <span class="badge-gold">Live GTO Ground</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">2. Full-Scale Outdoor Obstacle Course</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        SSB selection requires practical problem-solving under physical pressure. Our dedicated obstacle grounds allow cadets to practice Progressive Group Tasks (PGT), Half Group Tasks (HGT), and individual obstacles daily.
                    </p>
                    <ul class="feature-check-list" style="margin: 1rem 0;">
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Burma Bridge & Tarzan Swing</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Double Ditch & Tiger Leap</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Command Task Structures</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Snake Race / Group Obstacle Race</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/ssb-gto-ground.jpg" alt="SSB Obstacle Grounds Training" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 4rem;">
                <div>
                    <img src="assets/images/classroom-batch-study.jpg" alt="Cadet Classroom Batch Study & Newspaper Analysis" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
                </div>
                <div>
                    <span class="badge-saffron">Academic Mastery</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">3. Tiered Smart Classrooms & Daily Newspaper Analysis</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Rigorous academic training conducted in tiered, air-cooled lecture halls. Cadets study national defence strategy, current affairs via mandatory daily newspapers, and solve previous 20-year UPSC exam papers under senior faculty mentorship.
                    </p>
                    <ul class="feature-check-list" style="margin: 1rem 0;">
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Daily Morning National Newspaper & Editorial Reading</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Tiered Seating for Clear Visibility & Ergonomic Study</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Online CBT Exam Simulator & Weekly Test Series</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>One-on-One Faculty Doubt Removal Desks</span>
                        </li>
                    </ul>
                </div>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center;">
                <div>
                    <span class="badge-gold">Personality & OLQ Development</span>
                    <h3 style="font-size: 1.85rem; margin: 0.75rem 0 1rem 0;">4. Interactive Smart Panel & Cadet Lecturette Dais</h3>
                    <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                        Equipped with high-definition digital smart boards and an official Dehradun Defence College lecture podium. Cadets stand on dais to give 3-minute lecturettes, present defence topics, and eliminate stage fear before their actual SSB interviews.
                    </p>
                    <ul class="feature-check-list" style="margin: 1rem 0;">
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Interactive Smart Panels for Multi-Media Battle Analyses</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Cadet Dais & Podium for Individual Public Speaking</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Audio-Visual Motivation & Armed Forces Documentary Screenings</span>
                        </li>
                        <li class="feature-check-item">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span>Recorded Mock Presentations for Self-Critique & Improvement</span>
                        </li>
                    </ul>
                </div>
                <div>
                    <img src="assets/images/smart-class-lecture.jpg" alt="Interactive Smart Panel and Cadet Lecturette at Dais" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
                </div>
            </div>
        </div>
    </section>

    <!-- Visit Us CTA Banner -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 780px;">
            <span class="badge-gold">Campus Inspection</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Come See the Obstacle Ground & Hostels in Person</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Parents and aspirants are warmly invited to visit our Maldevta campus for a comprehensive tour and lunch with our faculty.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Schedule Campus Tour">
                    Book Campus Tour
                </button>
                <a href="contact.php" class="btn btn-outline-white btn-lg">
                    Location & Directions
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
