<?php
/**
 * Courses & Programs - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Defence Courses & Programs | NDA, CDS, AFCAT, SSB | Dehradun Defence College';
$page_desc = 'Explore complete defence courses at Dehradun Defence College: NDA Foundation after 10th, NDA Girls Wing, NDA 12th Dropper Batch, CDS, AFCAT, SSB 14-day training camp, RIMC & Sainik School.';
$current_page = 'courses';

include __DIR__ . '/includes/header.php';
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Academic Excellence</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Defence Courses & Preparation Programs</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                Scientifically designed training modules combining UPSC syllabus mastery, physical conditioning, and SSB personality development.
            </p>
        </div>
    </section>

    <!-- Courses Grid Section -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Admission Programs 2026</span>
                <h2>Choose Your Pathway to Commission</h2>
                <div class="gold-divider"></div>
                <p>Select your educational qualification to find the ideal batch and preparation track.</p>
            </div>

            <!-- Filter Buttons -->
            <div class="course-filter-nav">
                <button type="button" class="course-filter-btn active" data-filter="all">All Programs</button>
                <button type="button" class="course-filter-btn" data-filter="nda">NDA Foundation</button>
                <button type="button" class="course-filter-btn" data-filter="graduate">Graduate Entries (CDS/AFCAT)</button>
                <button type="button" class="course-filter-btn" data-filter="ssb">SSB & School Entries</button>
            </div>

            <div class="courses-grid">
                <?php foreach ($DDC_COURSES as $slug => $c): 
                    $category = 'nda';
                    if (strpos($slug, 'cds') !== false || strpos($slug, 'afcat') !== false || strpos($slug, 'capf') !== false) {
                        $category = 'graduate';
                    } elseif (strpos($slug, 'ssb') !== false || strpos($slug, 'rimc') !== false) {
                        $category = 'ssb';
                    }

                    $img = 'assets/images/classroom-batch-study.jpg';
                    if (strpos($slug, 'ssb') !== false) $img = 'assets/images/ssb-gto-ground.jpg';
                    if (strpos($slug, 'girls') !== false) $img = 'assets/images/nda-success-cadets.jpg';
                    if (strpos($slug, 'target') !== false) $img = 'assets/images/hero-cadets.jpg';
                    if (strpos($slug, 'afcat') !== false) $img = 'assets/images/smart-class-lecture.jpg';
                ?>
                <div class="course-card" data-category="<?php echo $category; ?>">
                    <div class="course-card-banner">
                        <img src="<?php echo $img; ?>" alt="<?php echo htmlspecialchars($c['title']); ?>">
                        <span class="course-card-badge"><?php echo htmlspecialchars($c['badge']); ?></span>
                    </div>
                    <div class="course-card-body">
                        <span class="course-target-tag"><?php echo htmlspecialchars($c['target']); ?></span>
                        <h3 class="course-card-title"><?php echo htmlspecialchars($c['title']); ?></h3>
                        <p class="course-card-desc"><?php echo htmlspecialchars($c['description']); ?></p>

                        <div style="background-color: var(--bg-slate); padding: 0.75rem 1rem; border-radius: var(--radius-sm); margin-bottom: 1rem; font-size: 0.85rem;">
                            <strong>Eligibility:</strong> <?php echo htmlspecialchars($c['eligibility']); ?><br>
                            <strong>Duration:</strong> <?php echo htmlspecialchars($c['duration']); ?>
                        </div>

                        <div class="course-features-summary">
                            <?php foreach (array_slice($c['features'], 0, 3) as $f): ?>
                            <div class="course-feature-line">
                                <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor"><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
                                <span><?php echo htmlspecialchars($f); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="course-card-footer">
                            <a href="course-detail.php?course=<?php echo $slug; ?>" class="btn btn-outline-navy btn-sm">Full Details</a>
                            <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="<?php echo htmlspecialchars($c['title']); ?>">
                                Apply / Enquire
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Comprehensive Course Comparison Table -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Comparison</span>
                <h2>Course Comparison & Eligibility Matrix</h2>
                <div class="gold-divider"></div>
                <p>Quick reference guide to evaluate courses against your current academic standing.</p>
            </div>

            <div style="overflow-x: auto; background: #FFFFFF; border-radius: var(--radius-lg); box-shadow: var(--shadow-md); border: 1px solid var(--border-light);">
                <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.925rem;">
                    <thead>
                        <tr style="background-color: var(--primary-navy); color: #FFFFFF; border-bottom: 3px solid var(--accent-gold);">
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Course Program</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Target Entry</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Eligibility</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Duration</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Hostel Facility</th>
                            <th style="padding: 1.25rem 1.5rem; font-family: var(--font-heading);">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA Foundation 10th</td>
                            <td style="padding: 1.1rem 1.5rem;">NDA (Army, Navy, Air Force)</td>
                            <td style="padding: 1.1rem 1.5rem;">Passed Class 10th</td>
                            <td style="padding: 1.1rem 1.5rem;">2 Years (Integrated)</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Included (Optional)</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Foundation 10th">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background-color: var(--bg-slate);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA (Girls) Special Wing</td>
                            <td style="padding: 1.1rem 1.5rem;">NDA Cadets (Female)</td>
                            <td style="padding: 1.1rem 1.5rem;">10th / 12th Pass or Appearing</td>
                            <td style="padding: 1.1rem 1.5rem;">1 Year / 2 Years</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-saffron">Dedicated Girls Wing</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Girls Special Wing">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">NDA Target 12th / Dropper</td>
                            <td style="padding: 1.1rem 1.5rem;">Upcoming UPSC NDA Exam</td>
                            <td style="padding: 1.1rem 1.5rem;">12th Appearing or Passed</td>
                            <td style="padding: 1.1rem 1.5rem;">6 Months / 1 Year</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="NDA Target 12th">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light); background-color: var(--bg-slate);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">CDS Training</td>
                            <td style="padding: 1.1rem 1.5rem;">IMA, OTA, AFA, INA</td>
                            <td style="padding: 1.1rem 1.5rem;">Graduates / Final Year</td>
                            <td style="padding: 1.1rem 1.5rem;">6 Months / 1 Year</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="CDS Training">Enquire</button>
                            </td>
                        </tr>
                        <tr style="border-bottom: 1px solid var(--border-light);">
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">AFCAT Exam Coaching</td>
                            <td style="padding: 1.1rem 1.5rem;">Indian Air Force (Commissioned)</td>
                            <td style="padding: 1.1rem 1.5rem;">Graduates (Min 60%)</td>
                            <td style="padding: 1.1rem 1.5rem;">3 to 6 Months</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-navy">Available</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="AFCAT Coaching">Enquire</button>
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 1.1rem 1.5rem; font-weight: 700; color: var(--primary-navy);">SSB 14-Day Practical Camp</td>
                            <td style="padding: 1.1rem 1.5rem;">SSB / AFSB / NSB Interview</td>
                            <td style="padding: 1.1rem 1.5rem;">Written Qualified or Direct Entry</td>
                            <td style="padding: 1.1rem 1.5rem;">14 Days (Intensive)</td>
                            <td style="padding: 1.1rem 1.5rem;"><span class="badge-gold">Full Boarding Included</span></td>
                            <td style="padding: 1.1rem 1.5rem;">
                                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="SSB 14-Day Camp">Enquire</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- Admission & Counseling Assistance -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 780px;">
            <span class="badge-gold">Admission Desk</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Confused Which Course is Best for You?</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Speak directly with our senior admission mentors for age eligibility verification, syllabus evaluation, and scholarship guidance.
            </p>
            <div style="display: flex; justify-content: center; gap: 1.25rem; flex-wrap: wrap;">
                <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Counseling Assistance">
                    Request Free Counseling Call
                </button>
                <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" class="btn btn-outline-white btn-lg">
                    Call: <?php echo CONTACT_PHONE_1; ?>
                </a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
