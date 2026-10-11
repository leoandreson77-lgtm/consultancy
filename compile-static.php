<?php
/**
 * Static HTML Generator for Vercel Deployment
 * Compiles dynamic PHP templates into static UTF-8 HTML files
 */
$_SERVER['HTTP_HOST'] = 'localhost';
$_SERVER['REQUEST_URI'] = '/';
$_SERVER['SCRIPT_NAME'] = '/index.php';

$pages = [
    'index.php'              => 'index.html',
    'about.php'              => 'about.html',
    'courses.php'            => 'courses.html',
    'course-detail.php'      => 'course-detail.html',
    'faculty-facilities.php' => 'faculty-facilities.html',
    'gallery.php'            => 'gallery.html',
    'results.php'            => 'results.html',
    'blog.php'               => 'blog.html',
    'blog-single.php'        => 'blog-single.html',
    'contact.php'            => 'contact.html',
    'privacy-policy.php'     => 'privacy-policy.html',
    'terms.php'              => 'terms.html',
    '404.php'                => '404.html'
];

$dir = __DIR__;

foreach ($pages as $phpFile => $htmlFile) {
    $cmd = '"C:\\xampp\\php\\php.exe" "' . $dir . DIRECTORY_SEPARATOR . $phpFile . '"';
    $output = shell_exec($cmd);
    if ($output !== null && strlen($output) > 100) {
        file_put_contents($dir . DIRECTORY_SEPARATOR . $htmlFile, $output);
        echo "Compiled {$phpFile} -> {$htmlFile} (" . strlen($output) . " bytes)\n";
    } else {
        echo "WARNING: Failed or empty output for {$phpFile}\n";
    }
}
