<?php
/**
 * 404 Error Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding bg-slate" style="min-height: 65vh; display: flex; align-items: center;">
        <div class="container" style="text-align: center; max-width: 680px;">
            <div style="font-family: var(--font-heading); font-size: 7rem; font-weight: 900; color: var(--primary-navy); line-height: 1; margin-bottom: 0.5rem; letter-spacing: -0.04em;">
                4<span style="color: var(--accent-gold);">0</span>4
            </div>
            
            <span class="badge-saffron">Coordinates Not Found</span>
            <h1 style="font-size: 2.25rem; margin: 1rem 0;">Target Location Unavailable</h1>
            <p style="color: var(--text-muted); font-size: 1.1rem; line-height: 1.7; margin-bottom: 2rem;">
                The page or file you are searching for might have been repositioned or retired. Report back to base camp or navigate using the command links below.
            </p>

            <div style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap;">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-lg">
                    <span>Return to Homepage</span>
                </a>
                <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="btn btn-gold btn-lg">
                    <span>Explore Defence Courses</span>
                </a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
