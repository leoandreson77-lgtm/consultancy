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
                        <img src="assets/images/classroom-training.jpg" alt="NDA Foundation After 10th">
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
                    </div>
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
                    <img src="assets/images/classroom-training.jpg" alt="Smart Classrooms & Defence Library">
                    <div class="facility-card-overlay">
                        <h4>Smart Digital Classrooms</h4>
                        <p>Interactive smart boards, air-conditioned lecture halls, and exhaustive defence library with past 20 years papers.</p>
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
                <!-- FAQ 1 -->
                <div class="faq-item active">
                    <button type="button" class="faq-question">
                        <span>1. Which is the best NDA coaching institute in Dehradun?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Dehradun Defence College is widely recognized as a premier institute for NDA preparation in Dehradun. We offer expert faculty, comprehensive study materials, daily mock tests, an authentic on-campus GTO obstacle course, and rigorous physical training to ensure consistently high selection rates for the National Defence Academy.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>2. What courses are offered at Dehradun Defence College?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        We provide specialized, result-oriented coaching for a variety of defense entrance exams, including NDA Foundation (after 8th and 10th), NDA Target Batch (after 12th), NDA Special Wing for Girls, CDS (Combined Defence Services), AFCAT, CAPF (AC), OTA Training, and comprehensive 14-day SSB Interview practical camps.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>3. Do you provide hostel facilities for outstation students?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes, Dehradun Defence College offers secure, disciplined, and hygienic hostel facilities with separate buildings for boys and girls. Our hostels provide a true "fauji" lifestyle environment, complete with nutritious mess food, dedicated study rooms, 24/7 wardens, and strict schedules to keep aspirants focused on their goals.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>4. How does Dehradun Defence College prepare students for the SSB Interview?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Our SSB Interview preparation is led by highly experienced ex-defence officers. The training includes psychological test dossier evaluation (TAT, WAT, SRT, SDT), personal mock interviews conducted by ex-interviewing officers, English communication and lecturette sessions, and practical on-ground GTO tasks on our campus obstacle course to build genuine Officer-Like Qualities (OLQs).
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>5. What is the fee structure for NDA/CDS coaching?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        We offer competitive and transparent fee structures depending on course duration (e.g. 6-month crash course, 1-year dropper batch, or 2-year integrated foundation). For detailed fee breakdowns, installment schedules, and current scholarship opportunities, please call our admission counseling desk directly at +91 9719104024.
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>6. Are physical training and ground activities included in the curriculum?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Absolutely. Written exam success is only half the battle. We conduct daily morning PT (Physical Training) and regular sports activities under the guidance of retired military physical instructors to ensure our cadets meet the strict medical and physical standards of the Indian Armed Forces.
                    </div>
                </div>

                <!-- FAQ 7 -->
                <div class="faq-item">
                    <button type="button" class="faq-question">
                        <span>7. Can students from non-math backgrounds crack the NDA exam?</span>
                        <span class="faq-toggle-icon">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </span>
                    </button>
                    <div class="faq-answer">
                        Yes! We have dedicated basic-to-advanced foundation classes specifically structured for students who feel weak in mathematics. Our experienced faculty teaches from root concepts using shortcut techniques and time-management strategies that make clearing the NDA math cutoff fully achievable.
                    </div>
                </div>
            </div>
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
