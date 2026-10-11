<?php
/**
 * Homepage - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Best NDA Coaching in Dehradun | Dehradun Defence College';
$page_desc = 'Join Dehradun Defence College for top-rated NDA coaching in Dehradun, NDA foundation after 10th, CDS, AFCAT & SSB interview training with residential hostel and obstacle grounds.';
$current_page = 'home';

include __DIR__ . '/includes/header.php';
?>

    <!-- 1. Hero Section -->
    <section class="hero-section" id="hero">
        <img src="assets/images/hero-cadets.jpg" alt="Cadets at Dehradun Defence College" class="hero-overlay-bg">
        
        <div class="container hero-grid">
            <!-- Left Hero Content -->
            <div class="hero-content">
                <div class="hero-badge-wrap">
                    <span class="badge-gold">
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                        India’s Premier Defence Training Gurukul
                    </span>
                </div>

                <h1>
                    Where Excellence Meets Uniform: <br>
                    <span class="gold-highlight">Best NDA Coaching</span> in Dehradun
                </h1>

                <p class="hero-subtext">
                    Transforming young aspirants into commissioned officers of the Indian Armed Forces. Specialized preparation for <strong>NDA (Foundation & Target), CDS, AFCAT & SSB Interviews</strong> with ex-defence officers, comprehensive UPSC academics, and in-campus residential hostel.
                </p>

                <div class="hero-actions">
                    <a href="courses.php" class="btn btn-gold btn-lg">
                        <span>Explore Courses</span>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                    
                    <button type="button" class="btn btn-outline-white btn-lg open-enquiry-modal" data-course="NDA 2026 Batch">
                        <span>Enquire Now</span>
                    </button>
                </div>

                <div class="hero-trust-bullets">
                    <div class="hero-trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>25+ NDA Joined (2021-2024)</span>
                    </div>
                    <div class="hero-trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Ex-SSB Assessors & GTO Ground</span>
                    </div>
                    <div class="hero-trust-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>In-Campus Residential Hostel</span>
                    </div>
                </div>
            </div>

            <!-- Right Hero Quick Form Card -->
            <div class="hero-form-card">
                <div class="hero-form-header">
                    <span class="badge-saffron">Admissions Open 2026 Batch</span>
                    <h3>Register For Admission</h3>
                    <p>Get batch counseling, fee structure & scholarship guidance</p>
                </div>

                <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label" for="hero_name">Student's Full Name *</label>
                        <input type="text" id="hero_name" name="full_name" class="form-control" placeholder="e.g. Aman Sharma" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="hero_mobile">Contact Mobile Number *</label>
                        <input type="tel" id="hero_mobile" name="mobile_number" class="form-control" placeholder="10-digit Mobile Number" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="hero_email">Email Address *</label>
                        <input type="email" id="hero_email" name="email" class="form-control" placeholder="candidate@email.com" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="hero_course">Course of Interest *</label>
                        <select id="hero_course" name="course_interest" class="form-control" required>
                            <option value="">Select Course</option>
                            <option value="NDA Foundation after 10th">NDA Foundation after 10th (2 Years)</option>
                            <option value="NDA (Girls) after 10th">NDA (Girls) Special Wing</option>
                            <option value="NDA Foundation after 12th">NDA Target / Dropper Batch (After 12th)</option>
                            <option value="CDS Training">CDS Training (Combined Defence Services)</option>
                            <option value="AFCAT">AFCAT Coaching</option>
                            <option value="SSB Training">SSB Interview 14-Day Practical Camp</option>
                            <option value="RIMC / Sainik School">RIMC & Sainik School Coaching</option>
                        </select>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="hero_consent" name="privacy_consent" checked required>
                        <label for="hero_consent">
                            I authorize Dehradun Defence College to contact me with admission details.
                        </label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold" style="width: 100%;">
                        <span>Register Now</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 2. Proven Track Record / Statistics Strip -->
    <section class="stats-strip">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number"><?php echo $DDC_STATS['years_of_excellence']; ?></div>
                <div class="stat-label">Years of Legacy</div>
                <div class="stat-sublabel">Dedicated Defence Mentorship</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo $DDC_STATS['expert_faculties']; ?></div>
                <div class="stat-label">Expert Mentors</div>
                <div class="stat-sublabel">Ex-Army Officers & UPSC Specialists</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo $DDC_STATS['trained_cadets']; ?></div>
                <div class="stat-label">Cadets Trained</div>
                <div class="stat-sublabel">Across India in Maldevta Campus</div>
            </div>
            <div class="stat-item">
                <div class="stat-number"><?php echo $DDC_STATS['officer_qualifiers']; ?></div>
                <div class="stat-label">Selections & Recommendations</div>
                <div class="stat-sublabel">NDA, CDS, AFCAT & SSB Qualified</div>
            </div>
        </div>
    </section>

    <!-- 3. About Dehradun Defence College -->
    <section class="section-padding bg-slate" id="about-teaser">
        <div class="container about-grid">
            <div class="about-image-stack">
                <img src="assets/images/campus-hostel.jpg" alt="Dehradun Defence College Campus and Foothills" class="about-main-img">
                <div class="about-badge-card">
                    <div class="num">10+</div>
                    <div class="txt">Acre Scenic Campus in Dehradun Valley</div>
                </div>
            </div>

            <div class="about-content">
                <span class="badge-navy">About The Institute</span>
                <h2 style="margin: 0.75rem 0 1rem 0;">A Next-Generation Gurukul for India’s Future Officers</h2>
                
                <p style="font-size: 1.05rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                    Welcome to <strong>Dehradun Defence College</strong>, operating in synergy with <strong>Doon Public Senior Secondary School</strong> (under the patronage of Director Mr. Zaheer Ahmed) and guided by Director Mr. Gaurav Sharma and College Enrollment Director Ms. Neha Kukreja. Located in the serene foothills of Maldevta Valley, our institution bridges the gap between top board schooling and elite defence officer development.
                </p>

                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    We don’t believe in rote memorization. Our cadets live a structured defence routine starting with morning physical drills, followed by concept-driven UPSC lectures in smart classrooms, afternoon group discussions, and evening SSB obstacle course practice.
                </p>

                <div class="feature-check-list">
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Integrated 11th & 12th Board Schooling</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Full-Scale Live GTO Obstacle Course</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Dedicated Safe Girls Hostel Wing</span>
                    </div>
                    <div class="feature-check-item">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                        <span>Mentorship by Ex-Defence Officers</span>
                    </div>
                </div>

                <!-- Director Quote -->
                <div class="director-quote-box">
                    <p>“One who is an officer is an officer, and will remain one for the rest of one’s life. Our mission extends beyond exams; we instill the integrity, discipline, and officer-like qualities essential for the Indian Armed Forces.”</p>
                    <div class="author">— <?php echo DIRECTOR_NAME; ?>, <?php echo DIRECTOR_ROLE; ?></div>
                </div>

                <div style="margin-top: 2rem;">
                    <a href="about.php" class="btn btn-primary">
                        <span>Read Our Story & Philosophy</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Elite Defence Courses Section -->
    <section class="section-padding" id="courses">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Training Programs</span>
                <h2>Our Elite Defence Courses</h2>
                <div class="gold-divider"></div>
                <p>Tailored coaching designed for different educational milestones, from 8th and 10th foundation to graduate-level CDS and AFCAT entries.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="course-filter-nav">
                <button type="button" class="course-filter-btn active" data-filter="all">All Programs</button>
                <button type="button" class="course-filter-btn" data-filter="nda">NDA Foundation</button>
                <button type="button" class="course-filter-btn" data-filter="graduate">Graduate Entries (CDS/AFCAT)</button>
                <button type="button" class="course-filter-btn" data-filter="ssb">SSB & School Entries</button>
            </div>

            <!-- Courses Grid -->
            <div class="courses-grid">
                <!-- Course 1 -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/classroom-batch-study.jpg" alt="NDA Foundation After 10th Classroom Study">
                        <span class="course-card-badge">2 Years Integrated</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Class 10th Passed / Appearing</span>
                        <h3 class="course-card-title">NDA Foundation (After 10th)</h3>
                        <p class="course-card-desc">
                            Integrated 11th & 12th schooling with NDA written exam syllabus and early SSB foundation. Balances board excellence with military discipline.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Complete CBSE/State Board Curriculum</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Mathematics Shortcuts & Concept Classes</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Daily Morning Drill & Physical Conditioning</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-foundation-10" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Foundation After 10th">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 2 -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/nda-success-cadets.jpg" alt="NDA Girls Special Wing">
                        <span class="course-card-badge" style="background-color: rgba(230, 90, 0, 0.9);">Special Girls Wing</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Female Defence Aspirants</span>
                        <h3 class="course-card-title">NDA (Girls) Special Batch</h3>
                        <p class="course-card-desc">
                            Dedicated residential program designed specifically for female defence aspirants preparing to crack the National Defence Academy with women mentors.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>High-Security Residential Hostel Wing</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Officer-Led Fitness & Stamina Training</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Mock SSB Interviews & Public Speaking</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-girls-10" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Girls Special Batch">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 3 -->
                <div class="course-card" data-category="nda">
                    <div class="course-card-banner">
                        <img src="assets/images/hero-cadets.jpg" alt="NDA Target Batch 12th">
                        <span class="course-card-badge">Fast Track 6M / 1Y</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">12th Passed / Repeaters</span>
                        <h3 class="course-card-title">NDA Target & Dropper Batch</h3>
                        <p class="course-card-desc">
                            High-intensity, exam-focused revision and mock test program targeting UPSC NDA 1 & 2 examinations with shortcut techniques and doubt support.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Targeted Mathematics & Physics Crash Modules</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Extensive GAT & Current Affairs Dossiers</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Weekly Full-Length OMR Mock Tests</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=nda-target-12" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Target Batch 12th">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 4 -->
                <div class="course-card" data-category="graduate">
                    <div class="course-card-banner">
                        <img src="assets/images/classroom-training.jpg" alt="CDS Exam Coaching">
                        <span class="course-card-badge">Graduate Entry</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Graduates (IMA / OTA / AFA / INA)</span>
                        <h3 class="course-card-title">CDS Training Program</h3>
                        <p class="course-card-desc">
                            Comprehensive preparation for Combined Defence Services. Dedicated focus on Advanced Mathematics, English Grammar, and Comprehensive General Knowledge.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Special OTA (Non-Math) Batch Available</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>In-depth General Studies & Current Affairs</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Integrated SSB Guidance & Psychology Prep</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=cds-training" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="CDS Training">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-cds-syllabus-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 5 -->
                <div class="course-card" data-category="graduate">
                    <div class="course-card-banner">
                        <img src="assets/images/campus-hostel.jpg" alt="AFCAT Exam Coaching">
                        <span class="course-card-badge">Air Force Entry</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">Air Force Aspirants</span>
                        <h3 class="course-card-title">AFCAT Coaching</h3>
                        <p class="course-card-desc">
                            Specialized coaching for Air Force Common Admission Test. Master Verbal Ability, Numerical Ability, Reasoning, and Military Aptitude with CBTS tests.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Spatial & Military Aptitude Special Tricks</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Daily Aviation News & Defence GK Briefings</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>AFSB Interview & Screening Preparation</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=afcat-coaching" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="AFCAT Coaching">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-afcat-syllabus-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Course 6 -->
                <div class="course-card" data-category="ssb">
                    <div class="course-card-banner">
                        <img src="assets/images/ssb-gto-ground.jpg" alt="SSB Interview Practical Training">
                        <span class="course-card-badge" style="background-color: rgba(19, 136, 8, 0.9);">14-Day Live Camp</span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag">All Defence Call Letter Holders</span>
                        <h3 class="course-card-title">SSB Interview Comprehensive Camp</h3>
                        <p class="course-card-desc">
                            Hands-on practice on India’s most authentic outdoor GTO obstacle ground, personal psychology dossier evaluation, and one-on-one interview mocks.
                        </p>
                        <div class="course-features-summary">
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Full GTO Ground (PGT, HGT, FGT, Snake Race)</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Psychology Test Feedback (TAT, WAT, SRT, SDT)</span>
                            </div>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span>Personal Interview by Ex-President of SSB</span>
                            </div>
                        </div>
                        <div class="course-card-footer">
                            <a href="course-detail.php?course=ssb-interview" class="btn btn-outline-navy btn-sm">Course Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="SSB Interview Camp">Enquire</button>
                        </div>
                        <div style="margin-top: 0.65rem;">
                            <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-navy btn-sm" style="width: 100%; justify-content: center; font-size: 0.8rem; padding: 0.45rem 0.65rem; background-color: var(--bg-light-blue); border-color: rgba(11, 27, 61, 0.15); gap: 0.4rem;">
                                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" style="color: var(--accent-gold-hover);"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                                <span>Download Timetable (PDF)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Homepage Timetable Download Banner -->
            <div class="timetable-banner-card">
                <div>
                    <span class="badge-gold" style="margin-bottom: 0.75rem;">Official Academics</span>
                    <h3 style="color: #FFFFFF; font-size: 1.85rem; margin-bottom: 0.75rem;">Download Batch Timetable & Daily Study Plans</h3>
                    <p style="color: rgba(255,255,255,0.85); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.25rem;">
                        Get verified daily schedules, subject hourly allocations, PT drills, and SSB preparation routines prepared by our academic directors in downloadable PDF format.
                    </p>
                    <div style="display: flex; gap: 0.75rem; flex-wrap: wrap;">
                        <a href="courses.php#timetable-download-center" class="btn btn-gold btn-sm" style="gap: 0.5rem;">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            <span>Browse All 8 Timetable PDFs</span>
                        </a>
                        <a href="assets/downloads/ddc-nda-target-timetable.pdf" download class="btn btn-outline-white btn-sm">
                            <span>Download NDA Timetable</span>
                        </a>
                    </div>
                </div>
                <div class="timetable-banner-links">
                    <a href="assets/downloads/ddc-nda-foundation-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">NDA Foundation</span>
                    </a>
                    <a href="assets/downloads/ddc-nda-target-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">NDA Target 12th</span>
                    </a>
                    <a href="assets/downloads/ddc-cds-syllabus-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">CDS Study Plan</span>
                    </a>
                    <a href="assets/downloads/ddc-afcat-syllabus-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">AFCAT Air Force</span>
                    </a>
                    <a href="assets/downloads/ddc-rimc-entrance-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">RIMC Dehradun</span>
                    </a>
                    <a href="assets/downloads/ddc-afmc-neet-timetable.pdf" download style="background: rgba(255,255,255,0.08); padding: 0.85rem; border-radius: var(--radius-md); border: 1px solid rgba(212,175,55,0.3); color: #FFFFFF; display: flex; align-items: center; gap: 0.6rem; transition: background 0.2s;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: var(--accent-gold); flex-shrink: 0;"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                        <span style="font-size: 0.825rem; font-weight: 600;">AFMC + NEET Plan</span>
                    </a>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3.5rem;">
                <a href="courses.php" class="btn btn-primary btn-lg">
                    <span>View All 8+ Courses & Fee Structure</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Why Choose Dehradun Defence College -->
    <section class="section-padding bg-slate" id="why-choose-us">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Core Advantages</span>
                <h2>Why Choose Dehradun Defence College?</h2>
                <div class="gold-divider"></div>
                <p>Designed from the ground up to cultivate Officer-Like Qualities (OLQs) while delivering exceptional UPSC written results.</p>
            </div>

            <div class="why-choose-grid">
                <!-- Box 1 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                    </div>
                    <h3>Exceptional Results</h3>
                    <p>Consistently ranked among the top defence academies in Uttarakhand with 25+ NDA entries (2021-2024) and hundreds of written test qualifiers.</p>
                </div>

                <!-- Box 2 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    </div>
                    <h3>Hostel & Mess Inside Campus</h3>
                    <p>Disciplined boarding facilities with separate boys and girls hostel wings, 24/7 security, wardens, and nutritious military diet.</p>
                </div>

                <!-- Box 3 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 14 14"></polyline></svg>
                    </div>
                    <h3>Full-Fledged GTO Ground</h3>
                    <p>On-campus authentic obstacle course including Burma Bridge, Tiger Leap, Tarzan Swing, Commando Walk, and snake race tracks.</p>
                </div>

                <!-- Box 4 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3>Ex-Defence Mentorship</h3>
                    <p>Direct mentoring from retired Brigadier, Colonel, and Commander rank assessors who have served on actual Service Selection Boards.</p>
                </div>

                <!-- Box 5 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                    </div>
                    <h3>Special Batches for Girls</h3>
                    <p>Tailored physical conditioning and safe residential environment supporting the increasing entry of women officers into the Armed Forces.</p>
                </div>

                <!-- Box 6 -->
                <div class="feature-box">
                    <div class="feature-icon-wrapper">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <h3>Affordable & Transparent Fees</h3>
                    <p>Quality defence coaching made accessible. Transparent batch fees with no hidden costs and merit scholarships for deserving candidates.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Real SSB GTO Ground & Campus Facilities -->
    <section class="section-padding bg-navy-dark" id="facilities-teaser">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">World-Class Infrastructure</span>
                <h2>10-Acre Campus & Military Training Grounds</h2>
                <div class="gold-divider"></div>
                <p>Located in the pristine foothills of Maldevta, Dehradun — providing the ideal environment for intense physical training and focused academic study.</p>
            </div>

            <div class="facilities-grid">
                <div class="facility-card">
                    <img src="assets/images/ssb-gto-ground.jpg" alt="SSB GTO Obstacle Training Ground">
                    <div class="facility-card-overlay">
                        <h4>Authentic GTO Ground</h4>
                        <p>Real military obstacle course designed to test individual courage, group coordination, and leadership stamina.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="assets/images/campus-hostel.jpg" alt="Residential Hostel & Mess">
                    <div class="facility-card-overlay">
                        <h4>Residential Hostels & Mess</h4>
                        <p>Hygienic living quarters, 4 nutritious meals daily, disciplined schedule, and round-the-clock CCTV security.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="assets/images/smart-classroom-lecture-hall.jpg" alt="Smart Classrooms & Lecture Hall">
                    <div class="facility-card-overlay">
                        <h4>Smart Classroom Lecture Hall</h4>
                        <p>Tiered lecture halls with interactive digital smart panels, daily newspaper analysis, and UPSC question drills.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="assets/images/ssb-smart-panel-instruction.jpg" alt="Interactive SSB Strategy Panel">
                    <div class="facility-card-overlay">
                        <h4>Interactive SSB Strategy Panel</h4>
                        <p>Digital obstacle scenarios and cadet dais for 3-minute lecturettes, public presentations, and SSB interview conditioning.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="assets/images/kabaddi-outdoor-ground.jpg" alt="Outdoor Sports Grounds & Kabaddi">
                    <div class="facility-card-overlay">
                        <h4>Outdoor Sports & Conditioning</h4>
                        <p>Dedicated sports grounds in Maldevta foothills building physical agility, stamina, teamwork, and reflexes.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="assets/images/chess-indoor-session.jpg" alt="Tactical Chess & Motivation Room">
                    <div class="facility-card-overlay">
                        <h4>Tactical Chess & Mind Gym</h4>
                        <p>Strategic chess sessions and Defence Motivation Wall inspiring tactical foresight and unbroken character.</p>
                    </div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 3rem;">
                <a href="faculty-facilities.php" class="btn btn-gold">
                    <span>Explore All Campus Facilities</span>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 7. A Day in the Life of a Cadet (Gurukul Routine) -->
    <section class="section-padding" id="cadet-routine">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Fauji Lifestyle</span>
                <h2>Daily Routine of a DDC Cadet</h2>
                <div class="gold-divider"></div>
                <p>Instilling military discipline, time management, and stamina through an unbroken daily schedule.</p>
            </div>

            <div class="routine-timeline">
                <div class="routine-step highlight">
                    <div class="routine-time">05:30 AM</div>
                    <div class="routine-title">Reveille & Morning PT</div>
                    <div class="routine-desc">Physical training, 5km cross-country run, calisthenics, and parade drill on the main ground.</div>
                </div>

                <div class="routine-step">
                    <div class="routine-time">08:00 AM</div>
                    <div class="routine-title">Breakfast & Inspection</div>
                    <div class="routine-desc">Nutritious high-protein breakfast in the mess, followed by room and uniform inspection.</div>
                </div>

                <div class="routine-step highlight">
                    <div class="routine-time">09:00 AM - 01:30 PM</div>
                    <div class="routine-title">Academic UPSC Classes</div>
                    <div class="routine-desc">Intensive syllabus lectures on Mathematics, Physics, English, History, and Current Affairs.</div>
                </div>

                <div class="routine-step">
                    <div class="routine-time">03:30 PM</div>
                    <div class="routine-title">SSB Drills & GTO Ground</div>
                    <div class="routine-desc">Group planning exercises, lecturette practice, obstacle negotiating, and psychological tests.</div>
                </div>

                <div class="routine-step highlight">
                    <div class="routine-time">06:00 PM - 08:30 PM</div>
                    <div class="routine-title">Evening Mentored Study</div>
                    <div class="routine-desc">Guided self-study hours with faculty on hand for one-on-one doubt clearing and formula revision.</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. Hall of Fame / Star Achievers -->
    <section class="section-padding bg-slate" id="achievers">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Proven Results</span>
                <h2>Congratulations to Our Star Achievers!</h2>
                <div class="gold-divider"></div>
                <p>Our students proudly wearing the uniform of the Indian Army, Navy, and Air Force.</p>
            </div>

            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: center; margin-bottom: 3rem;">
                <div>
                    <img src="assets/images/nda-success-cadets.jpg" alt="Successful NDA Recommended Cadets" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-xl); width: 100%;">
                </div>
                <div>
                    <span class="badge-saffron">Recommended for NDA & CDS</span>
                    <h3 style="margin: 0.75rem 0 1rem 0; font-size: 1.85rem;">From Classrooms in Dehradun to the National Defence Academy</h3>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Clearing the NDA written exam and clearing the Services Selection Board (SSB) are two completely different beasts. At Dehradun Defence College, we prepare our cadets to dominate both.
                    </p>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.5rem;">
                        Our structured training programs ensure that students achieve peak physical condition, rock-solid academic foundations in mathematics and science, and the psychological maturity necessary to earn a recommendation letter.
                    </p>
                    <a href="results.php" class="btn btn-primary">
                        <span>View Complete Hall of Fame & Selections</span>
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 9. Student & Parent Testimonials (Google Verified) -->
    <section class="section-padding" id="testimonials">
        <div class="container">
            <div class="section-header">
                <div class="google-reviews-badge">
                    <!-- Google G Logo -->
                    <svg class="google-logo-icon" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.82-2.4 3.68v3.05h3.88c2.27-2.09 3.665-5.17 3.665-9.17z"/>
                        <path fill="#34A853" d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.05c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.15C3.26 21.36 7.33 24 12 24z"/>
                        <path fill="#FBBC05" d="M5.28 14.27c-.25-.72-.38-1.49-.38-2.27s.13-1.55.38-2.27V6.58H1.25C.45 8.18 0 9.99 0 12s.45 3.82 1.25 5.42l4.03-3.15z"/>
                        <path fill="#EA4335" d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.33 0 3.26 2.64 1.25 6.58l4.03 3.15c.95-2.83 3.6-4.98 6.72-4.98z"/>
                    </svg>
                    <div>
                        <div style="font-weight: 800; color: var(--primary-navy); font-size: 1.1rem;">4.9 ★★★★★ EXCELLENT</div>
                        <div style="font-size: 0.8rem; color: var(--text-muted);">Based on 104+ Verified Reviews on Google</div>
                    </div>
                </div>

                <h2>What Our Students & Parents Say</h2>
                <div class="gold-divider"></div>
                <p>Real stories of hard work, transformation, and ultimate victory from cadets who trained at Dehradun Defence College.</p>
            </div>

            <div class="testimonials-grid">
                <!-- Testimonial 1 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “My biggest challenge was always the written exam mathematics. The faculty at Dehradun Defence College didn't just teach; they mentored. Their specific focus on NDA-oriented shortcuts and constant mock tests gave me the confidence I needed. I finally cracked the written on my first attempt with them!”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">RS</div>
                        <div>
                            <div class="author-name">Rahul Sharma</div>
                            <div class="author-sub">NDA 151 Batch Qualified</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “DDC goes beyond the classrooms. While the written prep is excellent, it was the SSB guidance that changed the game for me. The psychology dossier assessments and practical sessions on the GTO ground were intense but necessary. They transformed me from a shy student into a confident speaker ready for the Services Selection Board.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">PS</div>
                        <div>
                            <div class="author-name">Priya Singh</div>
                            <div class="author-sub">CDS Aspirant (SSB Recommended)</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “Coming from a civilian non-defence background, I needed an environment that lived and breathed discipline. Dehradun Defence College provided exactly that. The morning 5:30 AM PT, the schedule, and being surrounded by focused aspirants kept me on track. Highly recommended for any serious defence aspirant.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">VR</div>
                        <div>
                            <div class="author-name">Vikram Singh Rathore</div>
                            <div class="author-sub">AFCAT Qualified</div>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 4 -->
                <div class="testimonial-card">
                    <div class="testimonial-rating">★★★★★</div>
                    <p class="testimonial-text">
                        “I joined Dehradun Defence College specifically for SSB Interview Preparation, and the training is world-class. Real-time mock interviews, GTO tasks, psychology rounds, and personal feedback from ex-army officers. If you're looking to succeed in the SSB, this is the best place in Dehradun.”
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">NS</div>
                        <div>
                            <div class="author-name">Nidhi Sood</div>
                            <div class="author-sub">Verified Google Reviewer</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. Frequently Asked Questions (FAQ) -->
    <section class="section-padding bg-slate" id="faqs">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Clear Answers</span>
                <h2>Frequently Asked Questions</h2>
                <div class="gold-divider"></div>
                <p>Everything you need to know about admissions, batches, eligibility, and facilities.</p>
            </div>

            <div class="faq-accordion">
                <!-- FAQ 1: Best NDA Coaching in Dehradun -->
                <div class="faq-item active">
                    <button type="button" class="faq-question">
                        <span>1. Which is the Best NDA Coaching in Dehradun & Top NDA Coaching Institute in India?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        <strong>Dehradun Defence College (DDC)</strong> is widely recognized as the <strong>Best NDA Coaching in Dehradun</strong> and among the top NDA coaching institutes in India. With a dedicated 14-acre residential campus, retired armed forces faculty, daily 8-10 hours academic rigor, an authentic outdoor GTO obstacle ground, and direct integration with Doon Public Senior Secondary School, DDC produces top officer selections year after year in UPSC NDA, CDS, AFCAT, and SSB boards.
                    </div>
                </div>

                <!-- FAQ 2: Schooling & Hostel -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>2. Do you provide NDA Coaching with Schooling, Hostel and Mess Facilities in Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes! DDC specializes in integrated <strong>NDA Coaching with Schooling in Dehradun</strong> in partnership with <em>Doon Public Senior Secondary School</em>. Students prepare for their CBSE 11th & 12th board exams and NDA syllabus simultaneously. Our <strong>NDA Coaching with Hostel and Mess Facilities</strong> includes separate secure residential buildings for boys and girls, hygienic dining mess providing nutritious military diet, 24/7 security, evening library study halls, and disciplined daily routines.
                    </div>
                </div>

                <!-- FAQ 3: NDA Foundation & Pre-NDA -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>3. What is the NDA Foundation Course after 10th and Pre-NDA Foundation Course (8th to 10th)?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Our <strong>NDA Foundation Course after 10th</strong> is a comprehensive 2-year integrated program covering Class 11th & 12th PCM along with UPSC NDA Mathematics, GAT, and SSB interview conditioning. For younger cadets, our <strong>Pre-NDA Foundation Course (8th to 10th class)</strong> builds rock-solid conceptual mastery in NCERT Mathematics, English, General Science, and officer personality traits so they easily clear defence entrances on their first attempt.
                    </div>
                </div>

                <!-- FAQ 4: CDS, OTA & AFCAT -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>4. Do you offer CDS Coaching in Dehradun, CDS OTA Coaching, and AFCAT Preparation?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes. We are a premier <strong>CDS Coaching in Dehradun</strong> and leading <strong>CDS OTA Coaching Institute</strong> for graduate defence aspirants targeting IMA, INA, AFA, and OTA Chennai. Furthermore, our <strong>AFCAT Exam Preparation Coaching</strong> targets numerical ability, verbal ability, military reasoning, and general awareness with specialized shortcut solving methods and regular full-length mock drills.
                    </div>
                </div>

                <!-- FAQ 5: SSB & GTO Ground -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>5. Why is DDC rated for the Best GTO Ground and SSB Interview Coaching in Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Dehradun Defence College features the <strong>Best GTO Ground for SSB Training</strong> in Uttarakhand, complete with Burma Bridge, Tiger Leap, Tarzan Swing, Commando Walk, Double Ditch, PGT, HGT, and Snake Race obstacles built to exact military testing dimensions. Our <strong>SSB Interview Coaching Dehradun</strong> includes individual psychology dossiers (TAT, WAT, SRT, SDT), daily Group Discussions, and 1-on-1 personal interview mocks led by ex-SSB board presidents and psychologists.
                    </div>
                </div>

                <!-- FAQ 6: RIMC, Sainik & MNS -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>6. Do you provide RIMC, Sainik School, and Military Nursing Service (MNS) Coaching?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes! We provide specialized <strong>RIMC and Sainik School Coaching Dehradun</strong> for Class 6th and 8th young entrants, including written exam practice and viva-voce interview grooming. Additionally, our dedicated women wing conducts <strong>Military Nursing Service (MNS) Coaching</strong> integrated with NEET UG, ToGIGE screening, and medical fitness training to commission female aspirants as Nursing Officers in the Armed Forces.
                    </div>
                </div>

                <!-- FAQ 7: Location & Sahastradhara / JK Tower -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>7. How is DDC connected to Sahastradhara Road, JK Tower, and Dreamers Edu Hub Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Aspirants searching for <strong>NDA coaching near Sahastradhara Road Dehradun</strong>, <strong>top-rated defence academy near JK Tower Dehradun</strong>, or hubs like <strong>Dreamers Edu Hub Dehradun</strong> / <strong>Doon Defence Dreamers</strong> can reach our expansive residential campus in under 20 minutes via Raipur - Maldevta Road. Situated in a pollution-free green valley, our campus provides the ideal quiet atmosphere, clean mountain air, and physical obstacle grounds that crowded city centers cannot offer.
                    </div>
                </div>

                <!-- FAQ 8: Best in Uttarakhand -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>8. Why choose DDC as the Best NDA written and SSB coaching in Uttarakhand?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Dehradun Defence College stands as the <strong>Best NDA written and SSB coaching in Uttarakhand</strong> because of its complete 360-degree ecosystem: CBSE school education, experienced UPSC faculty, exhaustive chapter-wise question banks, weekly OMR mock tests, daily SSB Officer-Like Qualities (OLQ) training, and dedicated physical fitness conditioning led by ex-officers.
                    </div>
                </div>
            </div>

            <!-- Schema.org FAQPage Structured Data -->
            <script type="application/ld+json">
            {
              "@context": "https://schema.org",
              "@type": "FAQPage",
              "mainEntity": [
                {
                  "@type": "Question",
                  "name": "Which is the Best NDA Coaching in Dehradun & Top NDA Coaching Institute in India?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Dehradun Defence College is widely recognized as the Best NDA Coaching in Dehradun and among the top NDA coaching institutes in India, offering expert faculty, schooling integration with Doon Public Senior Secondary School, in-campus hostel, and authentic outdoor GTO obstacle grounds."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Do you provide NDA Coaching with Schooling, Hostel and Mess Facilities in Dehradun?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, DDC offers comprehensive NDA Coaching with Schooling in Dehradun in partnership with Doon Public Senior Secondary School, along with disciplined residential hostel and mess facilities for boys and girls."
                  }
                },
                {
                  "@type": "Question",
                  "name": "What is the NDA Foundation Course after 10th and Pre-NDA Foundation Course?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The NDA Foundation Course after 10th covers CBSE 11th & 12th board syllabus alongside UPSC NDA preparation. The Pre-NDA Foundation Course (8th to 10th class) builds core fundamentals in Maths, Science, and English for younger cadets."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Do you offer CDS Coaching in Dehradun, CDS OTA Coaching, and AFCAT Preparation?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Dehradun Defence College provides premier CDS Coaching in Dehradun, CDS OTA Coaching for short service commission, and specialized AFCAT Exam Preparation Coaching."
                  }
                },
                {
                  "@type": "Question",
                  "name": "Why is DDC rated for the Best GTO Ground and SSB Interview Coaching in Dehradun?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "DDC features the Best GTO Ground for SSB Training in Uttarakhand with full-scale outdoor obstacles, psychological dossier evaluations (TAT, WAT, SRT), and 1-on-1 interview mocks led by ex-defence officers."
                  }
                },
                {
                  "@type": "Question",
                  "name": "How to reach DDC from Sahastradhara Road, JK Tower, and Dreamers Edu Hub Dehradun?",
                  "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Aspirants searching for NDA coaching near Sahastradhara Road Dehradun or near JK Tower Dehradun can reach our Maldevta campus in under 20 minutes via Raipur Road."
                  }
                }
              ]
            }
            </script>
        </div>
    </section>

    <!-- 11. Final Call To Action Banner -->
    <section class="section-padding bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%); position: relative;">
        <div class="container" style="text-align: center; max-width: 820px;">
            <span class="badge-gold">Take The First Step</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0 1.25rem 0; font-size: 2.5rem;">
                Ready to Wear the Olive Green, White, or Air Force Blue?
            </h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2.25rem;">
                Admissions for the 2026 Batch are actively underway. Seats for residential hostel batches are limited to maintain personal attention.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Direct Admission 2026">
                    <span>Enquire for 2026 Batch</span>
                </button>
                <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-outline-white btn-lg" target="_blank" rel="noopener">
                    <span>Chat on WhatsApp</span>
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
