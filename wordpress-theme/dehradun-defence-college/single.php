<?php
/**
 * Single Post Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container container-narrow">
            <span class="badge-gold">Defence Articles</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 1rem 0; font-size: 2.35rem;"><?php the_title(); ?></h1>
            <div style="color: rgba(255,255,255,0.8); font-size: 0.875rem;">
                <span>Published on <?php echo get_the_date(); ?></span> • 
                <span>By <?php the_author(); ?></span>
            </div>
        </div>
    </section>

    <div class="section-padding bg-slate">
        <div class="container" style="display: grid; grid-template-columns: 2fr 1fr; gap: 3.5rem; align-items: start;">
            <main id="primary" class="site-main" style="background: #FFFFFF; padding: 3rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); line-height: 1.85; font-size: 1.05rem;">
                <?php
                while (have_posts()) : the_post();
                    if (has_post_thumbnail()) {
                        echo '<div style="margin-bottom: 2rem; border-radius: var(--radius-md); overflow: hidden;">';
                        the_post_thumbnail('large', ['style' => 'width: 100%; height: auto;']);
                        echo '</div>';
                    }
                    the_content();
                endwhile;
                ?>
            </main>

            <!-- Sidebar -->
            <aside>
                <div style="background: #FFFFFF; padding: 2rem; border-radius: var(--radius-lg); border: 2px solid var(--accent-gold); box-shadow: var(--shadow-md);">
                    <span class="badge-gold">Admissions Desk</span>
                    <h3 style="font-size: 1.35rem; margin: 0.5rem 0;">Request Admission Guidance</h3>
                    <p style="font-size: 0.875rem; color: var(--text-muted); margin-bottom: 1.25rem;">
                        Connect directly with our senior mentors in Dehradun.
                    </p>
                    <button type="button" class="btn btn-gold open-enquiry-modal" style="width: 100%;" data-course="Blog Inquiry">
                        <span>Enquire Now</span>
                    </button>
                </div>
            </aside>
        </div>
    </div>

<?php get_footer(); ?>
