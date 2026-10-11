<?php
/**
 * Archive Template - Dehradun Defence College
 * 
 * @package Dehradun_Defence_College
 */

get_header();
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container" style="text-align: center;">
            <h1 style="color: #FFFFFF; margin: 0;"><?php the_archive_title(); ?></h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem; margin-top: 0.5rem;">
                <?php the_archive_description(); ?>
            </p>
        </div>
    </section>

    <div class="section-padding bg-slate">
        <div class="container">
            <div class="courses-grid">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                    <article class="course-card">
                        <div class="course-card-banner">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail('ddc-course-thumb'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/classroom-batch-study.jpg'); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="course-card-body">
                            <h3 class="course-card-title"><a href="<?php the_permalink(); ?>" style="color: var(--primary-navy);"><?php the_title(); ?></a></h3>
                            <p class="course-card-desc"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                            <div class="course-card-footer">
                                <a href="<?php the_permalink(); ?>" class="btn btn-outline-navy btn-sm">Read More</a>
                            </div>
                        </div>
                    </article>
                <?php
                    endwhile;
                    the_posts_pagination();
                else :
                    echo '<p>No content found in this archive.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
