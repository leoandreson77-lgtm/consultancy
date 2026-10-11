<?php
/**
 * Template Name: Gallery Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Visual Tour</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Campus & Training Gallery</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 720px; margin: 0 auto;">
                A glimpse into the daily life, military discipline, classroom rigour, and obstacle training of our cadets.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container">
            <div class="section-header">
                <span class="badge-navy">Cadet Life</span>
                <h2>Glimpses of Dehradun Defence College</h2>
                <div class="gold-divider"></div>
            </div>

            <div class="gallery-grid">
                <?php
                $gallery_items = [
                    ['src' => $theme_uri . '/assets/images/classroom-batch-study.jpg', 'title' => 'Interactive Classroom Batch — Daily Newspaper Reading & Current Affairs Analysis'],
                    ['src' => $theme_uri . '/assets/images/smart-class-lecture.jpg', 'title' => 'Smart Interactive Digital Display — Audio-Visual Defence Classes'],
                    ['src' => $theme_uri . '/assets/images/cadet-lecturette-1.jpg', 'title' => 'Cadet Public Speaking & Individual Lecturette Practice at the Dais'],
                    ['src' => $theme_uri . '/assets/images/cadet-lecturette-2.jpg', 'title' => 'SSB Officer-Like Quality (OLQ) Presentation & Classroom Discussion'],
                    ['src' => $theme_uri . '/assets/images/chess-indoor-session.jpg', 'title' => 'Indoor Chess Strategy Session — Tactical Thinking & Decision-Making'],
                    ['src' => $theme_uri . '/assets/images/chess-closeup-focus.jpg', 'title' => 'Focused Strategic Chess Play — Analytical & Problem-Solving Skills'],
                    ['src' => $theme_uri . '/assets/images/kabaddi-outdoor-ground.jpg', 'title' => 'Outdoor Kabaddi Match — Physical Agility & Team Coordination in Maldevta'],
                    ['src' => $theme_uri . '/assets/images/defence-motivation-wall.jpg', 'title' => 'Defence Motivation Wall — "Nation First", "Courage Honor Commitment"'],
                    ['src' => $theme_uri . '/assets/images/smart-classroom-lecture-hall.jpg', 'title' => 'Full Batch Smart Classroom Lecture Hall — Interactive Digital Audio-Visual Pedagogy'],
                    ['src' => $theme_uri . '/assets/images/ssb-smart-panel-instruction.jpg', 'title' => 'SSB GTO Obstacle Course Strategy Session on Interactive Smart Panel with Defence Instructor'],
                    ['src' => $theme_uri . '/assets/images/smart-class-cadet-lecturette.jpg', 'title' => 'Cadet Public Speaking & Current Affairs Lecturette at the Smart Panel Dais'],
                    ['src' => $theme_uri . '/assets/images/faculty-classroom-mentorship.jpg', 'title' => 'Senior Defence Faculty Mentoring & Interactive Academic Guidance'],
                    ['src' => $theme_uri . '/assets/images/badminton-outdoor-court.jpg', 'title' => 'Outdoor Badminton & Sports Session — Physical Agility & Reflex Conditioning'],
                    ['src' => $theme_uri . '/assets/images/cadet-presentation-smart-board.jpg', 'title' => 'Cadet Presentation & Audio-Visual Defence Analysis Under Officer Mentorship'],
                    ['src' => $theme_uri . '/assets/images/hero-cadets.jpg', 'title' => 'Morning Parade Formations'],
                    ['src' => $theme_uri . '/assets/images/campus-hostel.jpg', 'title' => 'Residential Hostels & Campus'],
                    ['src' => $theme_uri . '/assets/images/ssb-gto-ground.jpg', 'title' => 'SSB GTO Obstacle Ground Training'],
                    ['src' => $theme_uri . '/assets/images/nda-success-cadets.jpg', 'title' => 'Recommendation Celebrations & Qualified Cadets'],
                    ['src' => $theme_uri . '/assets/images/director-zaheer.jpg', 'title' => 'Mr. Zaheer Ahmed — Director (Owner, Doon Public Sr. Sec. School)'],
                    ['src' => $theme_uri . '/assets/images/director-gaurav.jpg', 'title' => 'Mr. Gaurav Sharma — Director, DDC & Principal, Doon Public School'],
                    ['src' => $theme_uri . '/assets/images/director-mahendra.jpg', 'title' => 'Mr. Mahendra Kukreja — Founder & Director, Dehradun Defence College'],
                    ['src' => $theme_uri . '/assets/images/director-neha.jpg', 'title' => 'Ms. Neha Kukreja — Director & College Enrollment Specialist'],
                ];
                foreach ($gallery_items as $item):
                ?>
                <div class="gallery-item" data-src="<?php echo esc_url($item['src']); ?>" tabindex="0">
                    <img src="<?php echo esc_url($item['src']); ?>" alt="<?php echo esc_attr($item['title']); ?>" loading="lazy">
                    <div class="gallery-hover-overlay">
                        <h4 style="color: #FFFFFF; font-size: 1rem;"><?php echo esc_html($item['title']); ?></h4>
                        <span style="font-size: 0.75rem; color: var(--accent-gold);">Click to Enlarge</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Lightbox Modal -->
    <div class="lightbox-modal" id="galleryLightbox" role="dialog" aria-modal="true">
        <div class="lightbox-content-wrap">
            <button type="button" class="lightbox-close-btn" aria-label="Close Preview">&times;</button>
            <img src="" alt="Enlarged Campus View" id="lightboxImg">
        </div>
    </div>

<?php get_footer(); ?>
