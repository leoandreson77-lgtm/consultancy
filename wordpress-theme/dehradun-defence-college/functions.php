<?php
/**
 * Dehradun Defence College - Theme Functions & Definitions
 * 
 * @package Dehradun_Defence_College
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function ddc_theme_setup() {
    // Make theme available for translation
    load_theme_textdomain('dehradun-defence-college', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(800, 500, true);
    add_image_size('ddc-course-thumb', 600, 380, true);
    add_image_size('ddc-square', 400, 400, true);

    // Register Navigation Menus
    register_nav_menus([
        'primary-menu' => __('Primary Navigation Menu', 'dehradun-defence-college'),
        'footer-courses' => __('Footer Courses Menu', 'dehradun-defence-college'),
        'footer-links'   => __('Footer Useful Links', 'dehradun-defence-college')
    ]);

    // Switch default core markup to output valid HTML5
    add_theme_support('html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ]);

    // Custom Logo support
    add_theme_support('custom-logo', [
        'height'      => 80,
        'width'       => 280,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'ddc_theme_setup');

/**
 * Enqueue Styles and Scripts
 */
function ddc_enqueue_scripts() {
    // Google Fonts: Outfit and Inter
    wp_enqueue_style(
        'ddc-google-fonts',
        'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800;900&display=swap',
        [],
        null
    );

    // Main Theme Stylesheet
    wp_enqueue_style(
        'ddc-main-style',
        get_template_directory_uri() . '/assets/css/style.css',
        ['ddc-google-fonts'],
        '1.0.0'
    );

    // WordPress Root Theme Style
    wp_enqueue_style(
        'ddc-theme-style',
        get_stylesheet_uri(),
        ['ddc-main-style'],
        '1.0.0'
    );

    // Frontend Main JavaScript
    wp_enqueue_script(
        'ddc-main-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );

    // Localize Script for AJAX Form Handler
    wp_localize_script('ddc-main-script', 'ddc_vars', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('ddc_enquiry_nonce')
    ]);
}
add_action('wp_enqueue_scripts', 'ddc_enqueue_scripts');

/**
 * Register Custom Post Types: Courses, Testimonials, Achievers
 */
function ddc_register_custom_post_types() {
    // 1. Courses CPT
    register_post_type('ddc_course', [
        'labels' => [
            'name'               => __('Courses', 'dehradun-defence-college'),
            'singular_name'      => __('Course', 'dehradun-defence-college'),
            'add_new'            => __('Add New Course', 'dehradun-defence-college'),
            'add_new_item'       => __('Add New Defence Course', 'dehradun-defence-college'),
            'edit_item'          => __('Edit Course', 'dehradun-defence-college'),
            'all_items'          => __('All Defence Courses', 'dehradun-defence-college'),
        ],
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-welcome-learn-more',
        'rewrite'            => ['slug' => 'defence-courses'],
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'],
        'show_in_rest'       => true,
    ]);

    // Course Category Taxonomy
    register_taxonomy('ddc_course_category', ['ddc_course'], [
        'labels' => [
            'name'          => __('Course Categories', 'dehradun-defence-college'),
            'singular_name' => __('Course Category', 'dehradun-defence-college'),
        ],
        'hierarchical'      => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'course-category'],
    ]);

    // 2. Testimonials CPT
    register_post_type('ddc_testimonial', [
        'labels' => [
            'name'          => __('Testimonials', 'dehradun-defence-college'),
            'singular_name' => __('Testimonial', 'dehradun-defence-college'),
            'add_new_item'  => __('Add New Testimonial', 'dehradun-defence-college'),
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-testimonial',
        'supports'      => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest'  => true,
    ]);

    // 3. Results / Achievers CPT
    register_post_type('ddc_achiever', [
        'labels' => [
            'name'          => __('Hall of Fame / Achievers', 'dehradun-defence-college'),
            'singular_name' => __('Achiever', 'dehradun-defence-college'),
            'add_new_item'  => __('Add New Achiever', 'dehradun-defence-college'),
        ],
        'public'        => true,
        'menu_icon'     => 'dashicons-awards',
        'supports'      => ['title', 'editor', 'thumbnail', 'custom-fields'],
        'show_in_rest'  => true,
    ]);
}
add_action('init', 'ddc_register_custom_post_types');

/**
 * Customizer Settings for Contact Information & Leadership
 */
function ddc_customize_register($wp_customize) {
    // Add Contact Section
    $wp_customize->add_section('ddc_contact_section', [
        'title'    => __('Academy Contact Information', 'dehradun-defence-college'),
        'priority' => 30,
    ]);

    // Primary Phone Number
    $wp_customize->add_setting('ddc_phone_1', [
        'default'           => '+91 9719104024',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_phone_1', [
        'label'    => __('Primary Contact Phone', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // Secondary Phone Number
    $wp_customize->add_setting('ddc_phone_2', [
        'default'           => '+91 8650666609',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_phone_2', [
        'label'    => __('Secondary Contact Phone', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // WhatsApp Number
    $wp_customize->add_setting('ddc_whatsapp', [
        'default'           => '919719104024',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_whatsapp', [
        'label'    => __('WhatsApp Number (with Country Code)', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);

    // Official Email
    $wp_customize->add_setting('ddc_email', [
        'default'           => 'dehradundefencecollege@gmail.com',
        'sanitize_callback' => 'sanitize_email',
    ]);
    $wp_customize->add_control('ddc_email', [
        'label'    => __('Official Admission Email', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'email',
    ]);

    // Campus Physical Address
    $wp_customize->add_setting('ddc_address', [
        'default'           => 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008',
        'sanitize_callback' => 'sanitize_textarea_field',
    ]);
    $wp_customize->add_control('ddc_address', [
        'label'    => __('Campus Physical Address', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'textarea',
    ]);

    // Office Hours
    $wp_customize->add_setting('ddc_office_hours', [
        'default'           => 'Monday - Sunday: 8:00 AM - 6:00 PM',
        'sanitize_callback' => 'sanitize_text_field',
    ]);
    $wp_customize->add_control('ddc_office_hours', [
        'label'    => __('Admissions Office Hours', 'dehradun-defence-college'),
        'section'  => 'ddc_contact_section',
        'type'     => 'text',
    ]);
}
add_action('customize_register', 'ddc_customize_register');

/**
 * WordPress AJAX Handler for Admission Enquiry Form
 */
function ddc_ajax_submit_enquiry_handler() {
    // Verify request
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        wp_send_json_error(['message' => 'Invalid request method.'], 405);
    }

    // Anti-Spam Check: Honeypot
    if (!empty($_POST['website_url_check'])) {
        wp_send_json_error(['message' => 'Spam submission rejected.'], 400);
    }

    // Input sanitization
    $full_name       = sanitize_text_field($_POST['full_name'] ?? '');
    $email           = sanitize_email($_POST['email'] ?? '');
    $mobile          = sanitize_text_field($_POST['mobile_number'] ?? '');
    $course_interest = sanitize_text_field($_POST['course_interest'] ?? '');
    $education_level = sanitize_text_field($_POST['education_level'] ?? 'Not Specified');
    $preferred_contact = sanitize_text_field($_POST['preferred_contact'] ?? 'Call');
    $message         = sanitize_textarea_field($_POST['message'] ?? '');

    $errors = [];

    // Validation
    if (strlen($full_name) < 3) {
        $errors['full_name'] = 'Full Name must be at least 3 characters.';
    }
    if (!is_email($email)) {
        $errors['email'] = 'Valid email address required.';
    }

    $clean_mobile = preg_replace('/[^\d]/', '', $mobile);
    if (!preg_match('/^[6-9]\d{9}$/', substr($clean_mobile, -10))) {
        $errors['mobile_number'] = 'Please provide a valid 10-digit Indian mobile number.';
    }

    if (empty($course_interest) || $course_interest === 'Select Course') {
        $errors['course_interest'] = 'Please select a course.';
    }

    if (!empty($errors)) {
        wp_send_json_error([
            'message' => 'Please correct the highlighted form errors.',
            'errors'  => $errors
        ], 422);
    }

    // Recipient Email
    $admin_email = get_theme_mod('ddc_email', 'dehradundefencecollege@gmail.com');
    $subject = "New Admission Enquiry: {$full_name} ({$course_interest})";

    $body = "New admission inquiry received via website:\n\n";
    $body .= "Name: {$full_name}\n";
    $body .= "Phone: {$mobile}\n";
    $body .= "Email: {$email}\n";
    $body .= "Course: {$course_interest}\n";
    $body .= "Education: {$education_level}\n";
    $body .= "Preferred Contact: {$preferred_contact}\n";
    $body .= "Message: {$message}\n\n";
    $body .= "Submitted on: " . current_time('d M Y, h:i A') . "\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $full_name . ' <' . $email . '>'
    ];

    $sent = wp_mail($admin_email, $subject, $body, $headers);

    wp_send_json_success([
        'message' => "Thank you, {$full_name}! Your admission enquiry for {$course_interest} has been received. Our counselor will contact you shortly."
    ]);
}
add_action('wp_ajax_ddc_submit_enquiry', 'ddc_ajax_submit_enquiry_handler');
add_action('wp_ajax_nopriv_ddc_submit_enquiry', 'ddc_ajax_submit_enquiry_handler');
