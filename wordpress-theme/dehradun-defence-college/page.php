<?php
/**
 * Standard Page Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <h1 style="color: #FFFFFF; margin: 0;"><?php the_title(); ?></h1>
        </div>
    </section>

    <div class="section-padding bg-slate">
        <div class="container container-narrow">
            <main id="primary" class="site-main" style="background: #FFFFFF; padding: 3rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); line-height: 1.8;">
                <?php
                while (have_posts()) : the_post();
                    the_content();
                endwhile;
                ?>
            </main>
        </div>
    </div>

<?php get_footer(); ?>
