<?php
/**
 * Header Template - Dehradun Defence College Custom Theme
 * 
 * @package Dehradun_Defence_College
 */

$phone1   = get_theme_mod('ddc_phone_1', '+91 9719104024');
$email    = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
$whatsapp = get_theme_mod('ddc_whatsapp', '919719104024');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <!-- 1. Top Announcement Bar -->
    <div class="top-notice-bar">
        <div class="container top-notice-content">
            <div class="top-notice-left">
                <span class="top-notice-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    <span>Admissions Helpdesk:</span>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^\d\+]/', '', $phone1)); ?>"><?php echo esc_html($phone1); ?></a>
                </span>
                <span class="top-notice-item">
                    <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                </span>
            </div>

            <div class="top-marquee-wrap">
                <span class="top-marquee-tag">Admissions 2026</span>
                <marquee behavior="scroll" direction="left" scrollamount="5" style="color: rgba(255,255,255,0.9); font-size: 0.825rem;">
                    ★ Admissions Open for NDA Foundation, CDS, AFCAT & SSB 14-Day Practical Batches in Dehradun Campus! Limited Residential Seats. ★
                </marquee>
            </div>

            <div class="top-social-links">
                <a href="https://wa.me/<?php echo esc_attr($whatsapp); ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                </a>
                <a href="https://www.youtube.com/@dehradundefencecollege" target="_blank" rel="noopener" aria-label="YouTube">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                </a>
            </div>
        </div>
    </div>

    <!-- 2. Sticky Header Bar -->
    <header class="site-header" id="masthead">
        <div class="container header-container">
            <!-- Brand Logo -->
            <a href="<?php echo esc_url(home_url('/')); ?>" class="brand-logo" rel="home">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <div class="brand-crest">
                        <svg width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z" fill="rgba(212, 175, 55, 0.15)"/>
                            <path d="M12 6l2.5 5h5l-4 3.5 1.5 5.5-5-3.5-5 3.5 1.5-5.5-4-3.5h5L12 6z" fill="#D4AF37"/>
                        </svg>
                    </div>
                    <div class="brand-text">
                        <span class="brand-title"><?php bloginfo('name'); ?></span>
                        <span class="brand-subtitle"><?php bloginfo('description'); ?></span>
                    </div>
                <?php endif; ?>
            </a>

            <!-- Navigation Menu -->
            <nav class="nav-menu" id="primaryNav" aria-label="<?php esc_attr_e('Main Navigation', 'dehradun-defence-college'); ?>">
                <?php
                if (has_nav_menu('primary-menu')) {
                    wp_nav_menu([
                        'theme_location' => 'primary-menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'fallback_cb'    => false,
                    ]);
                } else {
                ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-link">Home</a>
                    <a href="<?php echo esc_url(home_url('/about/')); ?>" class="nav-link">About Us</a>
                    <a href="<?php echo esc_url(home_url('/defence-courses/')); ?>" class="nav-link">Courses</a>
                    <a href="<?php echo esc_url(home_url('/faculty-facilities/')); ?>" class="nav-link">Faculty & Campus</a>
                    <a href="<?php echo esc_url(home_url('/results/')); ?>" class="nav-link">Results</a>
                    <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="nav-link">Gallery</a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="nav-link">Contact</a>
                <?php } ?>
            </nav>

            <!-- Header Action CTAs -->
            <div class="header-cta-group">
                <button type="button" class="btn btn-gold btn-sm open-enquiry-modal" data-course="General Website Enquiry">
                    <span>Enquire Now</span>
                </button>

                <button type="button" class="mobile-nav-toggle" aria-label="Toggle Navigation Menu" aria-expanded="false">
                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>
