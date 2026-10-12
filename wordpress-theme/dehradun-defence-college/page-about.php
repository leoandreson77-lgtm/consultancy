<?php
/**
 * Template Name: About Us Page
 * 
 * @package Dehradun_Defence_College
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <span class="badge-gold">Institution Profile</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">About Dehradun Defence College</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.1rem; max-width: 680px; margin: 0 auto;">
                A Next-Generation Gurukul cultivating leadership, character, and academic mastery for the Indian Armed Forces.
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate" id="leadership">
        <div class="container">
            <div class="section-header">
                <span class="badge-gold">Visionary Guidance</span>
                <h2>Board of Directors & Institutional Leadership</h2>
                <div class="gold-divider"></div>
                <p>Guided by visionary educational leadership with deep roots in holistic student development and disciplined defence training in Dehradun.</p>
            </div>

            <!-- Board of Directors Grid -->
            <div class="directors-grid">
                <!-- Zaheer Ahmed -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); display: flex; flex-direction: column;" class="leader-card">
                    <div style="height: 340px; overflow: hidden; background: #0B1B3D;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-zaheer.jpg'); ?>" alt="Mr. Zaheer Ahmed" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                    </div>
                    <div style="padding: 1.75rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Mr. Zaheer Ahmed</h3>
                        <div style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">Director</div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin: 0 auto 1rem auto; display: inline-block; padding: 0.25rem 0.65rem;">Owner — Doon Public Sr. Sec. School</span>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Visionary educational founder establishing the foundation of academic discipline and holistic cadet development in Dehradun.
                        </p>
                    </div>
                </div>

                <!-- Gaurav Sharma -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); display: flex; flex-direction: column;" class="leader-card">
                    <div style="height: 340px; overflow: hidden; background: #0B1B3D;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-gaurav.jpg'); ?>" alt="Mr. Gaurav Sharma" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                    </div>
                    <div style="padding: 1.75rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Mr. Gaurav Sharma</h3>
                        <div style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">Director & Principal</div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin: 0 auto 1rem auto; display: inline-block; padding: 0.25rem 0.65rem;">Director — DDC & Principal — Doon Public School</span>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Leading strategic training, board exam integration, UPSC syllabus mentorship, and Officer-Like Qualities (OLQ) development.
                        </p>
                    </div>
                </div>

                <!-- Mahendra Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); display: flex; flex-direction: column;" class="leader-card">
                    <div style="height: 340px; overflow: hidden; background: #0B1B3D;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-mahendra.jpg'); ?>" alt="Mr. Mahendra Kukreja" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                    </div>
                    <div style="padding: 1.75rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Mr. Mahendra Kukreja</h3>
                        <div style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">Director</div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin: 0 auto 1rem auto; display: inline-block; padding: 0.25rem 0.65rem;">Founder & Director — Dehradun Defence College</span>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Visionary mentor guiding defence entrance pedagogy, cadet lifestyle conditioning, and sustained excellence in Armed Forces selections.
                        </p>
                    </div>
                </div>

                <!-- Neha Kukreja -->
                <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md); display: flex; flex-direction: column;" class="leader-card">
                    <div style="height: 340px; overflow: hidden; background: #0B1B3D;">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/director-neha.jpg'); ?>" alt="Ms. Neha Kukreja" style="width: 100%; height: 100%; object-fit: cover; object-position: top center;">
                    </div>
                    <div style="padding: 1.75rem 1.5rem; flex-grow: 1; display: flex; flex-direction: column; text-align: center;">
                        <h3 style="font-size: 1.25rem; color: var(--primary-navy); margin-bottom: 0.25rem;">Ms. Neha Kukreja</h3>
                        <div style="color: var(--accent-gold-hover); font-weight: 700; font-size: 0.9rem; margin-bottom: 0.35rem;">Director</div>
                        <span class="badge-navy" style="font-size: 0.75rem; margin: 0 auto 1rem auto; display: inline-block; padding: 0.25rem 0.65rem;">College Enrollment Specialist</span>
                        <p style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0;">
                            Guiding parents and aspirants through comprehensive course selection, counseling roadmaps, and seamless residential academy enrollment.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Joint Leadership Box -->
            <div class="leadership-pledge-card">
                <div class="about-grid" style="align-items: center;">
                    <div>
                        <span class="badge-saffron">Leadership Pledge</span>
                        <h2 class="pledge-title">"Where Excellence Meets Discipline: Turning Aspirations into Uniform Reality"</h2>
                        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.25rem;">
                            Under the joint patronage of <strong>Doon Public Senior Secondary School</strong> and <strong>Dehradun Defence College</strong>, we have built an ecosystem that eliminates the compromise between school board results and military commission goals.
                        </p>
                        <p style="color: var(--text-muted); line-height: 1.8; margin-bottom: 1.5rem;">
                            We shape individuals into officers through unwavering integrity, self-discipline, mental resilience, and officer-like qualities (OLQs) essential for the Indian Armed Forces.
                        </p>
                        <div class="pledge-cta-group">
                            <button type="button" class="btn btn-gold open-enquiry-modal" data-course="Director Counseling">
                                <span>Schedule Counseling</span>
                            </button>
                        </div>
                    </div>

                    <div style="background: #FFFFFF; border-radius: var(--radius-lg); overflow: hidden; border: 1px solid var(--border-light); box-shadow: var(--shadow-md);">
                        <div style="height: 240px; overflow: hidden; position: relative;">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/campus-building-main.jpg'); ?>" alt="Dehradun Defence College Campus Building and Cadets Flag Assembly" style="width: 100%; height: 100%; object-fit: cover;">
                            <span class="badge-gold" style="position: absolute; top: 12px; left: 12px; font-size: 0.75rem;">Maldevta Valley Campus</span>
                        </div>
                        <div style="padding: 1.5rem; text-align: center;">
                            <h4 style="color: var(--primary-navy); margin-bottom: 0.5rem; font-size: 1.15rem;">Institutional Synergy</h4>
                            <p style="color: var(--text-muted); font-size: 0.875rem; line-height: 1.6; margin-bottom: 1rem;">
                                Integrated Academic Schooling via <strong>Doon Public Senior Secondary School</strong> & Defence Academy Training at <strong>Dehradun Defence College</strong>.
                            </p>
                            <div style="border-top: 1px solid var(--border-light); padding-top: 0.75rem; font-size: 0.85rem; color: var(--primary-navy); font-weight: 700;">
                                100% In-House Separate Hostels • Dehradun
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
