<?php
/**
 * Defence Blog & Educational Articles - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Defence Blog & Exam Guides | Dehradun Defence College';
$page_desc = 'Read authoritative guides on NDA preparation, SSB interview strategies, Officer-Like Qualities (OLQs), syllabus breakdowns, and career paths in the Indian Armed Forces.';
$current_page = 'blog';

include __DIR__ . '/includes/header.php';

$articles = [
    [
        'id'        => 'how-to-clear-nda-first-attempt',
        'title'     => 'How to Clear the NDA Exam on Your First Attempt: Complete Roadmap',
        'category'  => 'NDA Strategy',
        'date'      => 'October 2026',
        'author'    => 'Academic Wing',
        'image'     => 'assets/images/classroom-training.jpg',
        'read_time' => '7 min read',
        'excerpt'   => 'A step-by-step master plan for 10th and 12th students covering mathematics speed techniques, NCERT mastery, GAT English preparation, and daily revision routines.'
    ],
    [
        'id'        => '15-officer-like-qualities-ssb',
        'title'     => '15 Officer-Like Qualities (OLQs) Tested in SSB & How to Build Them',
        'category'  => 'SSB Preparation',
        'date'      => 'October 2026',
        'author'    => 'Col. Senior Assessor (Retd.)',
        'image'     => 'assets/images/ssb-gto-ground.jpg',
        'read_time' => '9 min read',
        'excerpt'   => 'Understanding Effective Intelligence, Social Adaptability, Organizing Ability, Initiative, and Courage — and how daily campus life cultivates these qualities naturally.'
    ],
    [
        'id'        => 'nda-eligibility-criteria-2026',
        'title'     => 'NDA Exam 2026 Eligibility Criteria: Age Limits, Education & Standards',
        'category'  => 'UPSC Notifications',
        'date'      => 'October 2026',
        'author'    => 'Admissions Desk',
        'image'     => 'assets/images/hero-cadets.jpg',
        'read_time' => '6 min read',
        'excerpt'   => 'Comprehensive breakdown of UPSC notification guidelines for male and female aspirants, nationality criteria, vision standards, and PCM requirements for Air Force & Navy.'
    ],
    [
        'id'        => 'cds-vs-afcat-comparison',
        'title'     => 'CDS vs AFCAT: Exam Pattern, Difficulty, Syllabus & Commission Types',
        'category'  => 'Graduate Entries',
        'date'      => 'September 2026',
        'author'    => 'Defence Research Cell',
        'image'     => 'assets/images/campus-hostel.jpg',
        'read_time' => '8 min read',
        'excerpt'   => 'A detailed side-by-side comparison for college graduates deciding between Combined Defence Services (IMA/OTA/AFA) and Air Force Common Admission Test.'
    ],
    [
        'id'        => 'why-dehradun-defence-capital',
        'title'     => 'Why Dehradun is the True Defence Education Capital of India',
        'category'  => 'Campus Insights',
        'date'      => 'September 2026',
        'author'    => 'Mr. Mahendra Kukreja',
        'image'     => 'assets/images/nda-success-cadets.jpg',
        'read_time' => '5 min read',
        'excerpt'   => 'From the Indian Military Academy (IMA) to the foothills of Maldevta, discover why Dehradun produces the highest concentration of military officers in the country.'
    ]
];
?>

    <!-- Page Header Banner -->
    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Knowledge & Guidance</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Defence Insights & Educational Articles</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                In-depth articles, examination tips, syllabus breakdowns, and SSB strategies authored by our experienced defence mentors.
            </p>
        </div>
    </section>

    <!-- Blog Grid Section -->
    <section class="section-padding bg-slate">
        <div class="container">
            <div class="courses-grid" style="grid-template-columns: repeat(auto-fill, minmax(360px, 1fr));">
                <?php foreach ($articles as $art): ?>
                <article class="course-card">
                    <div class="course-card-banner">
                        <img src="<?php echo $art['image']; ?>" alt="<?php echo htmlspecialchars($art['title']); ?>">
                        <span class="course-card-badge"><?php echo htmlspecialchars($art['category']); ?></span>
                    </div>
                    <div class="course-card-body">
                        <div style="display: flex; justify-content: space-between; font-size: 0.8rem; color: var(--text-muted); margin-bottom: 0.5rem;">
                            <span><?php echo htmlspecialchars($art['date']); ?></span>
                            <span><?php echo htmlspecialchars($art['read_time']); ?></span>
                        </div>
                        <h3 class="course-card-title" style="font-size: 1.3rem;">
                            <a href="blog-single.php?post=<?php echo $art['id']; ?>" style="color: var(--primary-navy);">
                                <?php echo htmlspecialchars($art['title']); ?>
                            </a>
                        </h3>
                        <p class="course-card-desc"><?php echo htmlspecialchars($art['excerpt']); ?></p>

                        <div style="border-top: 1px solid var(--border-light); padding-top: 1rem; margin-top: auto; display: flex; justify-content: space-between; align-items: center;">
                            <span style="font-size: 0.825rem; font-weight: 600; color: var(--text-muted);">
                                By: <?php echo htmlspecialchars($art['author']); ?>
                            </span>
                            <a href="blog-single.php?post=<?php echo $art['id']; ?>" class="btn btn-primary btn-sm">
                                Read Article →
                            </a>
                        </div>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Admission CTA Banner -->
    <section class="section-padding bg-navy" style="text-align: center;">
        <div class="container" style="max-width: 760px;">
            <span class="badge-gold">Get Mentored</span>
            <h2 style="color: #FFFFFF; margin: 1rem 0;">Need Personalized Guidance for Your Defence Exam?</h2>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.15rem; margin-bottom: 2rem;">
                Connect with our academic faculty in Dehradun for a free diagnostic test and customized study timetable.
            </p>
            <button type="button" class="btn btn-gold btn-lg open-enquiry-modal" data-course="Study Timetable Counseling">
                Request Free Study Plan
            </button>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
