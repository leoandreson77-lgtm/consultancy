<?php
/**
 * Configuration File - Dehradun Defence College
 * 
 * Central configuration for site identity, contact information,
 * office hours, SMTP credentials, and security parameters.
 */

// Prevent direct script execution if accessed in an unexpected manner
if (!defined('DDC_ROOT')) {
    define('DDC_ROOT', __DIR__);
}

// Load .env variables if .env file exists
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2) + [NULL, NULL];
        if ($name && $value !== NULL) {
            putenv(trim($name) . '=' . trim($value));
        }
    }
}

// Helper to get environment variable with fallback
function ddc_env($key, $default = '') {
    $val = getenv($key);
    return ($val !== false && $val !== '') ? $val : $default;
}

// -------------------------------------------------------------
// Site Identity & Branding
// -------------------------------------------------------------
define('SITE_NAME', 'Dehradun Defence College');
define('SITE_TAGLINE', 'Best NDA, CDS, AFCAT & SSB Coaching in Dehradun');
define('SITE_MOTTO', 'Gurukul of Next Generation');
define('SITE_SLOGAN', 'Nurturing Humanity and Transmuting Values');
define('SITE_LOGO', 'assets/images/logo.png');
define('SITE_FAVICON', 'assets/images/favicon.png');
define('SITE_URL', ddc_env('SITE_URL', 'http://localhost/consultancy'));

// Director & Leadership Team
define('DIRECTOR_NAME', 'Mr. Zaheer Ahmed, Mr. Gaurav Sharma & Mr. Mahendra Kukreja');
define('DIRECTOR_ROLE', 'Board of Directors');

$DDC_LEADERSHIP = [
    'zaheer_ahmed' => [
        'name'  => 'Mr. Zaheer Ahmed',
        'role'  => 'Director',
        'badge' => 'Owner — Doon Public Senior Secondary School',
        'image' => 'assets/images/director-zaheer.jpg',
        'bio'   => 'Visionary educational founder and owner of Doon Public Senior Secondary School, establishing the foundation of academic discipline and holistic cadet development in Dehradun.'
    ],
    'gaurav_sharma' => [
        'name'  => 'Mr. Gaurav Sharma',
        'role'  => 'Director & Principal',
        'badge' => 'Director — DDC & Principal — Doon Public Sr. Sec. School',
        'image' => 'assets/images/director-gaurav.jpg',
        'bio'   => 'Director of Dehradun Defence College and Principal of Doon Public Senior Secondary School, leading integrated board schooling, UPSC defence curriculum, and SSB officer grooming.'
    ],
    'mahendra_kukreja' => [
        'name'  => 'Mr. Mahendra Kukreja',
        'role'  => 'Director',
        'badge' => 'Founder & Director — Dehradun Defence College',
        'image' => 'assets/images/director-mahendra.jpg',
        'bio'   => 'Visionary mentor with extensive experience in defence coaching pedagogy, guiding cadets to build unshakeable character, discipline, and Officer-Like Qualities.'
    ],
    'neha_kukreja' => [
        'name'  => 'Ms. Neha Kukreja',
        'role'  => 'Director',
        'badge' => 'College Enrollment Specialist',
        'image' => 'assets/images/director-neha.jpg',
        'bio'   => 'Directing admissions, parent counseling, and student batch allocations with personalized guidance for residential hostel and academic batches.'
    ]
];

// -------------------------------------------------------------
// Contact Details (Centralized & Verified from Reference)
// -------------------------------------------------------------
define('CONTACT_PHONE_1', '+91 9719104024');
define('CONTACT_PHONE_1_RAW', '+919719104024');
define('CONTACT_PHONE_2', '+91 8650666609');
define('CONTACT_PHONE_2_RAW', '+918650666609');
define('CONTACT_PHONE_3', '+91 7895510755');
define('CONTACT_PHONE_3_RAW', '+917895510755');

define('CONTACT_EMAIL', 'dehradundefencecollege@gmail.com');
define('CONTACT_ADDRESS', 'Maldevta Road, Near Laal Pull (Red Bridge), Lwarkha, Dehradun, Uttarakhand - 248008');
define('OFFICE_HOURS', 'Monday - Sunday: 8:00 AM - 6:00 PM');

// Social & Messaging Links
define('WHATSAPP_NUMBER', '919719104024');
define('WHATSAPP_LINK', 'https://wa.me/919719104024?text=' . urlencode('Hello Dehradun Defence College, I am interested in admission for NDA/Defence exam coaching. Please share course and batch details.'));
define('WHATSAPP_GROUP_LINK', 'https://whatsapp.com/channel/0029Va7Vlq9GJP8JqjCFIY0H');
define('FACEBOOK_LINK', 'https://www.facebook.com/people/Dehradun-Defence-College/100088052876273/');
define('INSTAGRAM_LINK', 'https://www.instagram.com/dehradundefencecollege/');
define('YOUTUBE_LINK', 'https://www.youtube.com/@dehradundefencecollege');

// Google Maps Embed URL
define('GOOGLE_MAPS_EMBED_URL', 'https://maps.google.com/maps?q=Dehradun%20Defence%20College%20Maldevta%20-%20NDA%20Coaching%20in%20Dehradun&t=m&z=14&output=embed&iwloc=near');

// -------------------------------------------------------------
// Key Academy Statistics
// -------------------------------------------------------------
$DDC_STATS = [
    'years_of_excellence' => '5+',
    'expert_faculties'    => '18+',
    'defence_courses'     => '8+',
    'trained_cadets'      => '970+',
    'officer_qualifiers'  => '68+',
    'nda_entry_recent'    => '25+' // 25+ joined NDA 2021-2024
];

// -------------------------------------------------------------
// Available Courses List
// -------------------------------------------------------------
$DDC_COURSES = [
    'nda-foundation-10' => [
        'title'       => 'NDA Foundation After 10th',
        'badge'       => 'Most Popular • 2 Years',
        'target'      => '10th Passed / Appearing Students',
        'duration'    => '2 Years (Class 11 + 12 + NDA Coaching)',
        'description' => 'Comprehensive 2-year integrated schooling and NDA preparation balancing academic board exams with intensive defence training and SSB grooming.',
        'eligibility' => 'Passed Class 10th with minimum 60% marks',
        'features'    => ['Integrated CBSE/State Board Schooling', 'Daily NDA Syllabus Lectures & Maths Tricks', 'Morning PT & Physical Fitness Drill', 'Ex-SSB Officer Mentoring & GTO Practice', 'In-Campus Hostel & Balanced Nutritious Food']
    ],
    'nda-girls-10' => [
        'title'       => 'NDA (Girls) After 10th',
        'badge'       => 'Special Wing • Dedicated Hostel',
        'target'      => 'Female Defence Aspirants (10th/12th)',
        'duration'    => '2 Years Integrated / 1 Year Target',
        'description' => 'Specialized batches for female aspirants preparing to join the National Defence Academy with dedicated residential facilities and women mentors.',
        'eligibility' => 'Girls passed Class 10th/12th aspiring for NDA entry',
        'features'    => ['Secure Dedicated Girls Hostel Wing', 'Personalized Physical Fitness Conditioning', 'Targeted UPSC NDA Written Exam Prep', 'Women Officer Mentorship & SSB Guidance', 'Confidence & Public Speaking Development']
    ],
    'nda-target-12' => [
        'title'       => 'NDA Target / Dropper Batch (After 12th)',
        'badge'       => 'Fast Track • Intensive',
        'target'      => '12th Passed / Appearing Candidates',
        'duration'    => '6 Months / 1 Year Intensive Batch',
        'description' => 'Rigorous exam-focused program covering UPSC Mathematics, General Ability Test (GAT), and English with weekly full-length mock tests.',
        'eligibility' => '12th Appearing or Passed (PCM preferred for Air Force/Navy)',
        'features'    => ['Comprehensive UPSC Syllabus Coverage', 'Mathematics Speed Techniques & Shortcuts', 'Current Affairs & Defence GK Modules', 'Daily 6-Hour Academic Schedule + Evening Doubt Classes', 'Complete SSB Interview Dossier Training']
    ],
    'cds-training' => [
        'title'       => 'CDS Training (IMA, OTA, AFA, INA)',
        'badge'       => 'Graduate Entry',
        'target'      => 'Graduates / Final Year Degree Students',
        'duration'    => '6 Months / 1 Year',
        'description' => 'Complete preparation for Combined Defence Services Examination for permanent and short service commissions across Army, Navy, and Air Force.',
        'eligibility' => 'Graduation in any discipline (B.Tech for Naval & Air Force Academy)',
        'features'    => ['Advanced Elementary Mathematics Coaching', 'Intensive English & Comprehensive General Knowledge', 'Special OTA Paper Strategy (General Knowledge + English)', 'Mock Tests Designed on Latest UPSC Pattern', 'Rigorous 14-Day SSB Orientation & Interview Prep']
    ],
    'afcat-coaching' => [
        'title'       => 'AFCAT Coaching (Flying & Ground Duty)',
        'badge'       => 'Air Force Entry',
        'target'      => 'Graduates Aiming for Indian Air Force',
        'duration'    => '3 to 6 Months Special Batches',
        'description' => 'Specialized curriculum targeting AFCAT Numerical Ability, Verbal Ability, Reasoning & Military Aptitude, and General Awareness.',
        'eligibility' => 'Graduate with minimum 60% marks and 10+2 with Maths & Physics',
        'features'    => ['Complete Spatial & Military Aptitude Training', 'Computer-Based Mock Test Series (CBTS)', 'Speed Maths & Reasoning Shortcut Techniques', 'Daily Aviation & Defence Current Affairs', 'AFSB Preparation (Air Force Selection Board)']
    ],
    'ssb-interview' => [
        'title'       => 'SSB Interview Comprehensive Training',
        'badge'       => '14-Day Practical Camp',
        'target'      => 'Candidates with SSB / AFSB / NSB Calls',
        'duration'    => '14 Days / 21 Days Live Ground Camp',
        'description' => 'Complete outdoor GTO ground obstacle course, psychology dossier evaluation (TAT, WAT, SRT, SDT), and one-on-one personal interview mocks by retired defence assessors.',
        'eligibility' => 'All NDA, CDS, AFCAT, TGC, NCC, and Direct Entry Call letter holders',
        'features'    => ['Live GTO Ground Obstacle Course on Campus', 'Individual Psychology Test Evaluation & Feedback', 'Personal Mock Interviews with Ex-Interviewing Officers', 'Group Discussions (GD) & Lecturette Practice Daily', 'Officer Like Qualities (OLQ) Inculcation Program']
    ],
    'rimc-sainik' => [
        'title'       => 'RIMC & Sainik School Coaching',
        'badge'       => 'School Entry (Class 6 & 9)',
        'target'      => 'Young Cadets for Military Schools',
        'duration'    => '1 Year Foundation Batch',
        'description' => 'Early military grooming and entrance preparation for admission to Rashtriya Indian Military College (RIMC) and All India Sainik Schools.',
        'eligibility' => 'Boys & Girls studying in Class 5th, 7th, or 8th',
        'features'    => ['Foundational Mathematics & Reasoning', 'English Grammar, Composition & General Science', 'Disciplined Gurukul Living & Daily Physical Fitness', 'Regular Chapter Tests & Previous Year Papers Solving', 'Interview Preparation for Final Selection']
    ],
    'capf-ota' => [
        'title'       => 'CAPF (AC) & OTA Special Wing',
        'badge'       => 'Paramilitary & Army',
        'target'      => 'Candidates targeting BSF, CRPF, CISF, ITBP & OTA',
        'duration'    => '6 Months to 1 Year',
        'description' => 'Specialized coaching for Central Armed Police Forces (Assistant Commandant) and Officers Training Academy Chennai short service commissions.',
        'eligibility' => 'Graduate candidates within prescribed age brackets',
        'features'    => ['Paper 1 (General Studies) & Paper 2 (Essay & Comprehension)', 'Answer Writing Practice for Descriptive Paper', 'Physical Efficiency Test (PET) Training', 'Personality Test / Interview Mock Sessions', 'Regular Doubt Removal & Mentor Sessions']
    ]
];

// -------------------------------------------------------------
// Email & SMTP Configuration
// -------------------------------------------------------------
define('SMTP_ENABLED', ddc_env('SMTP_ENABLED', 'false') === 'true');
define('SMTP_HOST', ddc_env('SMTP_HOST', 'smtp.gmail.com'));
define('SMTP_PORT', (int)ddc_env('SMTP_PORT', 587));
define('SMTP_SECURE', ddc_env('SMTP_SECURE', 'tls')); // 'tls' or 'ssl'
define('SMTP_USERNAME', ddc_env('SMTP_USERNAME', ''));
define('SMTP_PASSWORD', ddc_env('SMTP_PASSWORD', ''));
define('SMTP_FROM_EMAIL', ddc_env('SMTP_FROM_EMAIL', 'dehradundefencecollege@gmail.com'));
define('SMTP_FROM_NAME', ddc_env('SMTP_FROM_NAME', 'Dehradun Defence College Admissions'));
define('ADMIN_ENQUIRY_EMAIL', ddc_env('ADMIN_ENQUIRY_EMAIL', 'dehradundefencecollege@gmail.com'));

// Security & Anti-Spam Tokens
define('CSRF_SECRET', ddc_env('CSRF_SECRET', 'ddc_dehradun_secure_token_secret_key_2026'));
define('ENABLE_LEADS_LOGGING', true);
define('LEADS_LOG_FILE', __DIR__ . '/storage/leads.json');
