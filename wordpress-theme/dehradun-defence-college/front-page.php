<?php
/**
 * Front Page Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <!-- 1. Hero Section -->
    <section class="hero-section" id="hero">
        <img src="<?php echo esc_url($theme_uri . '/assets/images/hero-cadets.jpg'); ?>" alt="Cadets at Dehradun Defence College" class="hero-overlay-bg">
        
        <div class="container hero-grid">
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
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-gold btn-lg">
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

            <!-- Quick Registration Card -->
            <div class="hero-form-card">
                <div class="hero-form-header">
                    <span class="badge-saffron">Admissions Open 2026 Batch</span>
                    <h3>Register For Admission</h3>
                    <p>Get batch counseling, fee structure & scholarship guidance</p>
                </div>

                <form action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="hidden" name="action" value="ddc_submit_enquiry">
                    <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('ddc_enquiry_nonce'); ?>">
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label">Student's Full Name *</label>
                        <input type="text" name="full_name" class="form-control" placeholder="e.g. Aman Sharma" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Contact Mobile Number *</label>
                        <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile Number" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="candidate@email.com" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Course of Interest *</label>
                        <select name="course_interest" class="form-control" required>
                            <option value="">Select Course</option>
                            <option value="NDA Foundation after 10th">NDA Foundation after 10th (2 Years)</option>
                            <option value="NDA (Girls) after 10th">NDA (Girls) Special Wing</option>
                            <option value="NDA Foundation after 12th">NDA Target / Dropper Batch (After 12th)</option>
                            <option value="CDS Training">CDS Training (Combined Defence Services)</option>
                            <option value="AFCAT">AFCAT Coaching</option>
                            <option value="SSB Training">SSB Interview 14-Day Practical Camp</option>
                        </select>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="wp_hero_consent" name="privacy_consent" checked required>
                        <label for="wp_hero_consent">
                            I authorize Dehradun Defence College to contact me with admission details.
                        </label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold" style="width: 100%;">
                        <span>Register Now</span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- 2. Proven Statistics -->
    <section class="stats-strip">
        <div class="container stats-grid">
            <div class="stat-item">
                <div class="stat-number">5+</div>
                <div class="stat-label">Years of Legacy</div>
                <div class="stat-sublabel">Proven Defence Coaching</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">18+</div>
                <div class="stat-label">Expert Mentors</div>
                <div class="stat-sublabel">Ex-Army Officers & UPSC Faculty</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">970+</div>
                <div class="stat-label">Cadets Trained</div>
                <div class="stat-sublabel">In Maldevta Valley Campus</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">68+</div>
                <div class="stat-label">Qualifiers</div>
                <div class="stat-sublabel">NDA, CDS & SSB Recommendations</div>
            </div>
        </div>
    </section>

    <!-- 3. About Teaser -->
    <section class="section-padding bg-slate" id="about">
        <div class="container about-grid">
            <div class="about-image-stack">
                <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-hostel.jpg'); ?>" alt="Dehradun Defence College Campus" class="about-main-img">
                <div class="about-badge-card">
                    <div class="num">10+</div>
                    <div class="txt">Acre Foothill Campus in Dehradun</div>
                </div>
            </div>

            <div class="about-content">
                <span class="badge-navy">About The Institute</span>
                <h2 style="margin: 0.75rem 0 1rem 0;">A Next-Generation Gurukul for India’s Future Officers</h2>
                
                <p style="font-size: 1.05rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                    Welcome to <strong>Dehradun Defence College</strong>, recognized as the premier NDA coaching academy in Dehradun. Located in the serene, unpolluted foothills of Maldevta Valley, our institution bridges the gap between traditional schooling and modern military officer development.
                </p>

                <p style="color: var(--text-muted); margin-bottom: 1.5rem;">
                    Our cadets live a structured defence routine starting with morning physical drills, followed by concept-driven UPSC lectures in smart classrooms, afternoon group discussions, and evening SSB obstacle course practice.
                </p>

                <div class="director-quote-box">
                    <p>“One who is an officer is an officer, and will remain one for the rest of one’s life. Our mission extends beyond exams; we instill the integrity, discipline, and officer-like qualities essential for the Indian Armed Forces.”</p>
                    <div class="author">— Mr. Mahendra Kukreja, Founder & Director</div>
                </div>

                <div style="margin-top: 2rem;">
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="btn btn-primary">
                        <span>Read Our Story & Philosophy</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Courses Grid -->
    <section class="section-padding" id="courses">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Training Programs</span>
                <h2>Our Elite Defence Courses</h2>
                <div class="gold-divider"></div>
                <p>Tailored coaching designed for different educational milestones, from 8th and 10th foundation to graduate-level CDS and AFCAT entries.</p>
            </div>

            <!-- Query CPT or Display Built-in Courses -->
            <div class="courses-grid">
                <?php
                $courses_query = new WP_Query([
                    'post_type'      => 'ddc_course',
                    'posts_per_page' => 6,
                ]);

                if ($courses_query->have_posts()) :
                    while ($courses_query->have_posts()) : $courses_query->the_post();
                ?>
                    <div class="course-card">
                        <div class="course-card-banner">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('ddc-course-thumb'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-training.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <span class="course-card-badge">Featured Program</span>
                        </div>
                        <div class="course-card-body">
                            <h3 class="course-card-title"><?php the_title(); ?></h3>
                            <p class="course-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="course-card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php the_title_attribute(); ?>">Enquire</button>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Fallback to static 3 prominent courses if CPT has not been populated yet
                ?>
                    <div class="course-card">
                        <div class="course-card-banner">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-training.jpg'); ?>" alt="NDA Foundation">
                            <span class="course-card-badge">2 Years Integrated</span>
                        </div>
                        <div class="course-card-body">
                            <span class="course-target-tag">Class 10th Passed / Appearing</span>
                            <h3 class="course-card-title">NDA Foundation (After 10th)</h3>
                            <p class="course-card-desc">Integrated 11th & 12th schooling with NDA written exam syllabus and early SSB foundation.</p>
                            <div class="course-card-footer">
                                <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Foundation After 10th">Enquire</button>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-banner">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/nda-success-cadets.jpg'); ?>" alt="NDA Girls">
                            <span class="course-card-badge" style="background-color: rgba(230, 90, 0, 0.9);">Special Girls Wing</span>
                        </div>
                        <div class="course-card-body">
                            <span class="course-target-tag">Female Defence Aspirants</span>
                            <h3 class="course-card-title">NDA (Girls) Special Batch</h3>
                            <p class="course-card-desc">Dedicated residential program designed specifically for female defence aspirants preparing for NDA entry.</p>
                            <div class="course-card-footer">
                                <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Girls Special Batch">Enquire</button>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-banner">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/ssb-gto-ground.jpg'); ?>" alt="SSB Training">
                            <span class="course-card-badge" style="background-color: rgba(19, 136, 8, 0.9);">14-Day Practical Camp</span>
                        </div>
                        <div class="course-card-body">
                            <span class="course-target-tag">All Defence Call Letter Holders</span>
                            <h3 class="course-card-title">SSB Interview Comprehensive Camp</h3>
                            <p class="course-card-desc">Hands-on practice on India’s most authentic outdoor GTO obstacle ground and individual psychology dossier evaluation.</p>
                            <div class="course-card-footer">
                                <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="SSB Interview Camp">Enquire</button>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>

            <div style="text-align: center; margin-top: 3.5rem;">
                <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-primary btn-lg">
                    <span>View All Defence Courses</span>
                </a>
            </div>
        </div>
    </section>

    <!-- 5. Facilities Spotlight -->
    <section class="section-padding bg-navy-dark" id="facilities">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">World-Class Infrastructure</span>
                <h2>10-Acre Campus & Military Training Grounds</h2>
                <div class="gold-divider"></div>
                <p>Located in the pristine foothills of Maldevta, Dehradun — providing the ideal environment for intense physical training and focused academic study.</p>
            </div>

            <div class="facilities-grid">
                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/ssb-gto-ground.jpg'); ?>" alt="SSB GTO Obstacle Ground">
                    <div class="facility-card-overlay">
                        <h4>Authentic GTO Ground</h4>
                        <p>Real military obstacle course designed to test individual courage, group coordination, and leadership stamina.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-hostel.jpg'); ?>" alt="Residential Hostels & Mess">
                    <div class="facility-card-overlay">
                        <h4>Residential Hostels & Mess</h4>
                        <p>Hygienic living quarters, 4 nutritious meals daily, disciplined schedule, and round-the-clock security.</p>
                    </div>
                </div>

                <div class="facility-card">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/classroom-training.jpg'); ?>" alt="Digital Classrooms">
                    <div class="facility-card-overlay">
                        <h4>Smart Digital Classrooms</h4>
                        <p>Interactive smart boards, air-conditioned lecture halls, and exhaustive defence library.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Call to Action -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 820px;">
            <span class="badge-gold">Take The First Step</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Ready to Wear the Uniform?</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Admissions for the 2026 Batch are actively underway. Connect with our admission mentors today.
            </p>
            <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Direct Admission 2026">
                <span>Enquire for 2026 Batch</span>
            </button>
        </div>
    </section>

<?php get_footer(); ?>
