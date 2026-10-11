<?php
/**
 * Custom 404 Error Page - Dehradun Defence College
 */
http_response_code(404);
require_once __DIR__ . '/config.php';

$page_title = '404 - Page Not Found | Dehradun Defence College';
$page_desc = 'The requested coordinates could not be located. Return to Dehradun Defence College homepage or explore our defence courses.';
$current_page = '404';

include __DIR__ . '/includes/header.php';
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
                <a href="index.php" class="btn btn-primary btn-lg">
                    <span>Return to Homepage</span>
                </a>
                <a href="courses.php" class="btn btn-gold btn-lg">
                    <span>Explore Defence Courses</span>
                </a>
            </div>

            <div style="margin-top: 3rem; border-top: 1px solid var(--border-light); padding-top: 1.5rem; font-size: 0.9rem; color: var(--text-muted);">
                Need immediate admission help? Call our duty officer at <a href="tel:<?php echo CONTACT_PHONE_1_RAW; ?>" style="color: var(--primary-navy); font-weight: 700;"><?php echo CONTACT_PHONE_1; ?></a>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
