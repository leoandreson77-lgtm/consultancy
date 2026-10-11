<?php
/**
 * Individual Course Details - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$course_slug = $_GET['course'] ?? 'nda-foundation-10';

// Match or fallback to NDA Foundation
if (!isset($DDC_COURSES[$course_slug])) {
    $course_slug = 'nda-foundation-10';
}

$c = $DDC_COURSES[$course_slug];

$page_title = $c['title'] . ' | Dehradun Defence College';
$page_desc = $c['description'] . ' Join Dehradun Defence College in Dehradun for top results, hostel facilities, and SSB training.';
$current_page = 'course-detail';

include __DIR__ . '/includes/header.php';
?>

    <!-- Course Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container">
            <div style="display: flex; gap: 0.5rem; font-size: 0.85rem; color: var(--accent-gold); margin-bottom: 0.75rem;">
                <a href="index.php" style="color: #FFFFFF;">Home</a> &gt; 
                <a href="courses.php" style="color: #FFFFFF;">Courses</a> &gt; 
                <span><?php echo htmlspecialchars($c['title']); ?></span>
            </div>
            <span class="badge-gold"><?php echo htmlspecialchars($c['badge']); ?></span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.75rem 0; font-size: 2.65rem;"><?php echo htmlspecialchars($c['title']); ?></h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; max-width: 800px;">
                <?php echo htmlspecialchars($c['description']); ?>
            </p>
        </div>
    </section>

    <!-- Course Detail Grid & Sidebar Form -->
    <section class="section-padding bg-slate">
        <div class="container" style="display: grid; grid-template-columns: 1.8fr 1.2fr; gap: 3.5rem; align-items: start;">
            <!-- Left Main Content -->
            <div class="course-main-content">
                <!-- Course Overview Box -->
                <div style="background: #FFFFFF; padding: 2.25rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1.25rem;">Program Highlights & Structure</h2>
                    
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.25rem; margin-bottom: 1.5rem; background-color: var(--bg-slate); padding: 1.25rem; border-radius: var(--radius-md);">
                        <div>
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Target Audience:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);"><?php echo htmlspecialchars($c['target']); ?></div>
                        </div>
                        <div>
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Batch Duration:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);"><?php echo htmlspecialchars($c['duration']); ?></div>
                        </div>
                        <div style="grid-column: span 2;">
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: var(--text-muted); font-weight: 700;">Eligibility Requirement:</span>
                            <div style="font-weight: 700; color: var(--primary-navy);"><?php echo htmlspecialchars($c['eligibility']); ?></div>
                        </div>
                    </div>

                    <h3 style="font-size: 1.35rem; margin: 1.5rem 0 1rem 0;">Key Deliverables Included:</h3>
                    <ul style="display: grid; grid-template-columns: 1fr; gap: 0.75rem;">
                        <?php foreach ($c['features'] as $f): ?>
                        <li style="display: flex; align-items: center; gap: 0.75rem; font-size: 0.95rem;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" style="color: var(--tricolor-green); flex-shrink: 0;"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                            <span><?php echo htmlspecialchars($f); ?></span>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <!-- Academic Syllabus & Pedagogy -->
                <div style="background: #FFFFFF; padding: 2.25rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); margin-bottom: 2.5rem;">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1.25rem;">Academic Curriculum & UPSC Module</h2>
                    <p style="color: var(--text-muted); line-height: 1.7; margin-bottom: 1.25rem;">
                        Our teaching methodology combines conceptual depth with rigorous shortcut techniques to maximize marks within the strict UPSC time limits.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">1. Mathematics Mastery (Paper I)</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Algebra, Trigonometry, Matrices & Determinants, Analytical Geometry, Differential & Integral Calculus, Vector Algebra, Statistics and Probability. Daily speed solving drills.
                            </p>
                        </div>
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">2. General Ability Test (GAT - Paper II)</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                English Grammar, Vocabulary, Comprehension, Physics, Chemistry, General Science, Indian History, Freedom Movement, Geography, and Defense Current Affairs.
                            </p>
                        </div>
                        <div style="border: 1px solid var(--border-light); padding: 1.25rem; border-radius: var(--radius-md);">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.4rem;">3. Stage II: SSB Practical Orientation</h4>
                            <p style="font-size: 0.9rem; color: var(--text-muted);">
                                Officer Intelligence Rating (OIR), Picture Perception & Discussion Test (PPDT), GTO tasks on the outdoor campus ground, Psychological assessment (TAT/WAT/SRT), and Personal Interview.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Visual Campus Facilities for Course -->
                <div style="background: #FFFFFF; padding: 2.25rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm);">
                    <h2 style="font-size: 1.75rem; margin-bottom: 1rem;">Residential Life & Daily Conditioning</h2>
                    <img src="assets/images/ssb-gto-ground.jpg" alt="Outdoor Training for Cadets" style="border-radius: var(--radius-md); margin-bottom: 1.25rem; width: 100%;">
                    <p style="color: var(--text-muted); line-height: 1.7;">
                        Every enrolled student has access to our dedicated in-campus residential hostel with hygienic boarding, nutritious mess, parade grounds, and physical instructors to ensure full medical fitness for the Armed Forces.
                    </p>
                </div>
            </div>

            <!-- Right Sidebar: Direct Course Registration Form -->
            <div class="course-sidebar-card" style="background: #FFFFFF; padding: 2.25rem; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-lg); position: sticky; top: 100px;">
                <div class="hero-form-header">
                    <span class="badge-saffron">Enrollment 2026</span>
                    <h3 style="font-size: 1.5rem; margin-top: 0.5rem;">Register for this Course</h3>
                    <p>Direct admission guidance & fee breakdown for <strong><?php echo htmlspecialchars($c['title']); ?></strong></p>
                </div>

                <form action="send-enquiry.php" method="POST" class="ddc-enquiry-form" novalidate>
                    <input type="text" name="website_url_check" class="hp-field" tabindex="-1" autocomplete="off">
                    <input type="hidden" name="form_start_time" value="<?php echo time(); ?>">

                    <div class="form-status-alert" role="alert"></div>

                    <div class="form-group">
                        <label class="form-label">Full Name *</label>
                        <input type="text" name="full_name" class="form-control" placeholder="Candidate's Name" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Mobile Number *</label>
                        <input type="tel" name="mobile_number" class="form-control" placeholder="10-digit Mobile" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Address *</label>
                        <input type="email" name="email" class="form-control" placeholder="your.email@example.com" required>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Selected Course</label>
                        <select name="course_interest" class="form-control" required>
                            <option value="<?php echo htmlspecialchars($c['title']); ?>" selected><?php echo htmlspecialchars($c['title']); ?></option>
                        </select>
                        <div class="form-error-feedback"></div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Hostel Accommodation Needed?</label>
                        <select name="education_level" class="form-control">
                            <option value="Hostel Accommodation Required">Yes, Need Residential Hostel</option>
                            <option value="Day Scholar (Local Dehradun)">No, Day Scholar (Local Dehradun)</option>
                        </select>
                    </div>

                    <div class="form-check">
                        <input type="checkbox" id="cd_consent" name="privacy_consent" checked required>
                        <label for="cd_consent">I agree to the privacy policy & admissions terms.</label>
                        <div class="form-error-feedback"></div>
                    </div>

                    <button type="submit" class="btn btn-gold" style="width: 100%;">
                        <span>Submit Registration</span>
                    </button>
                </form>

                <div style="margin-top: 1.5rem; text-align: center; border-top: 1px solid var(--border-light); padding-top: 1.25rem;">
                    <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 0.5rem;">Prefer instant WhatsApp assistance?</p>
                    <a href="<?php echo WHATSAPP_LINK; ?>" class="btn btn-primary btn-sm" style="width: 100%;" target="_blank" rel="noopener">
                        <span>Chat With Admission Desk</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
