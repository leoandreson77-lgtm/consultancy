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

// Master SEO Keywords List
$DDC_SEO_KEYWORDS = [
    'Best NDA Coaching in Dehradun',
    'Top NDA Coaching Institute in India',
    'Dreamers Edu Hub Dehradun',
    'Doon Defence Dreamers',
    'Best Defence Academy in Dehradun',
    'NDA Coaching with Hostel and Mess Facilities',
    'NDA Coaching with Schooling in Dehradun',
    'NDA Foundation Course after 10th',
    'Pre-NDA Foundation Course (8th to 10th class)',
    'CDS Coaching in Dehradun',
    'CDS OTA Coaching Institute',
    'AFCAT Exam Preparation Coaching',
    'SSB Interview Coaching Dehradun',
    'Best GTO Ground for SSB Training',
    'RIMC and Sainik School Coaching Dehradun',
    'Military Nursing Service (MNS) Coaching',
    'NDA coaching near Sahastradhara Road Dehradun',
    'Top-rated defence academy near JK Tower Dehradun',
    'Best NDA written and SSB coaching in Uttarakhand'
];
define('SITE_KEYWORDS', implode(', ', $DDC_SEO_KEYWORDS));

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
        'title'           => 'NDA Foundation After 10th',
        'badge'           => 'Most Popular • 2 Years',
        'target'          => '10th Passed / Appearing Students',
        'duration'        => '2 Years (Class 11 + 12 + NDA Coaching)',
        'description'     => 'Comprehensive 2-year integrated schooling and NDA preparation balancing academic board exams with intensive defence training and SSB grooming.',
        'eligibility'     => 'Passed Class 10th with minimum 60% marks',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-foundation-timetable.pdf',
        'timetable_title' => 'NDA Foundation (Class 11-12) Timetable & Study Plan',
        'timetable_hours' => '2-3 hrs weekdays, 5-6 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercise & Fitness Drill'],
            ['time' => '5:00 - 6:30 PM', 'activity' => 'NDA Mathematics (New Concept & Problem Solving)'],
            ['time' => '7:30 - 8:15 PM', 'activity' => 'GAT: Science or Social Science (Alternate Days)'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Vocabulary, Grammar & Defence Current Affairs'],
            ['time' => 'Saturday',       'activity' => 'Topic-Wise Subject Tests & Weak-Area Work'],
            ['time' => 'Sunday',         'activity' => 'Full 2 to 3 Hour Sectional Paper & Deep Analysis']
        ],
        'features'        => ['Integrated CBSE/State Board Schooling', 'Daily NDA Syllabus Lectures & Maths Tricks', 'Morning PT & Physical Fitness Drill', 'Ex-SSB Officer Mentoring & GTO Practice', 'In-Campus Hostel & Balanced Nutritious Food']
    ],
    'nda-pre-foundation' => [
        'title'           => 'NDA Pre-Foundation (Class 9-10)',
        'badge'           => 'Early Bird • 2 Years',
        'target'          => 'Students in Class 8th or 9th',
        'duration'        => '2 Years (Class 9 + 10 Foundation)',
        'description'     => 'Build unshakable foundational mathematics, science concepts, physical fitness, and officer-like habits early before entering Senior Secondary.',
        'eligibility'     => 'Passed Class 8th or studying in Class 9th/10th',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-pre-foundation-timetable.pdf',
        'timetable_title' => 'NDA Pre-Foundation (Class 9-10) Timetable & Plan',
        'timetable_hours' => '1.5-2 hrs weekdays, 2-3 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercise & Body Conditioning'],
            ['time' => '5:00 - 5:45 PM', 'activity' => 'Maths Practice (NCERT Concepts + Vedic Speed Shortcuts)'],
            ['time' => '7:00 - 7:30 PM', 'activity' => 'Science Concept Reading & Visual Diagrams'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Newspaper Reading & 5 New Vocabulary Words'],
            ['time' => 'Saturday',       'activity' => 'Maths & Science Chapter Tests and Review'],
            ['time' => 'Sunday',         'activity' => 'General Knowledge, Sports, Personality & Hobby Work']
        ],
        'features'        => ['NCERT Class 9-10 Conceptual Mastery', 'Speed Calculations (Tables, Squares, Cubes)', 'Early Physical Conditioning (1.6 km Run, Push-ups)', 'Debate, Public Speaking & Personality Building', 'Residential Boarding & Disciplined Gurukul Routine']
    ],
    'nda-girls-10' => [
        'title'           => 'NDA (Girls) Special Wing',
        'badge'           => 'Special Wing • Dedicated Hostel',
        'target'          => 'Female Defence Aspirants (10th/12th)',
        'duration'        => '2 Years Integrated / 1 Year Target',
        'description'     => 'Specialized batches for female aspirants preparing to join the National Defence Academy with dedicated residential facilities and women mentors.',
        'eligibility'     => 'Girls passed Class 10th/12th aspiring for NDA entry',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-foundation-timetable.pdf',
        'timetable_title' => 'NDA Girls Wing Timetable & Academic Routine',
        'timetable_hours' => '2-3 hrs weekdays, 5-6 hrs weekends',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Physical Conditioning & Stamina Running'],
            ['time' => '5:00 - 6:30 PM', 'activity' => 'UPSC NDA Mathematics & Speed Problem Solving'],
            ['time' => '7:30 - 8:15 PM', 'activity' => 'General Ability Test (Physics, Chemistry & History)'],
            ['time' => '8:30 - 9:00 PM', 'activity' => 'English Communication, Vocabulary & Current Affairs'],
            ['time' => 'Saturday',       'activity' => 'Weekly Sectional Evaluation & Confidence Building'],
            ['time' => 'Sunday',         'activity' => 'Mock UPSC Test & Women Officer Interaction']
        ],
        'features'        => ['Secure Dedicated Girls Hostel Wing', 'Personalized Physical Fitness Conditioning', 'Targeted UPSC NDA Written Exam Prep', 'Women Officer Mentorship & SSB Guidance', 'Confidence & Public Speaking Development']
    ],
    'nda-target-12' => [
        'title'           => 'NDA Target / Dropper Batch (After 12th)',
        'badge'           => 'Fast Track • Intensive',
        'target'          => '12th Passed / Appearing Candidates',
        'duration'        => '6 Months / 1 Year Intensive Batch',
        'description'     => 'Rigorous exam-focused program covering UPSC Mathematics, General Ability Test (GAT), and English with weekly full-length mock tests.',
        'eligibility'     => '12th Appearing or Passed (PCM preferred for Air Force/Navy)',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-target-timetable.pdf',
        'timetable_title' => 'NDA After 12th (6 & 12 Month) Timetable & Study Plan',
        'timetable_hours' => '8-10 hrs Daily Intensive Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Running, Exercise & Obstacle Warmup'],
            ['time' => '7:30 - 10:30 AM', 'activity' => 'UPSC Mathematics (Core Concept + 60+ MCQs Practice)'],
            ['time' => '11:00 AM - 1:00 PM', 'activity' => 'GAT Science (Physics/Chemistry) & Social Science'],
            ['time' => '3:00 - 5:30 PM', 'activity' => 'Maths Advanced Practice, PYQs & Doubt Clearance'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'English Grammar, Comprehension & Spotting Errors'],
            ['time' => '8:00 - 9:30 PM', 'activity' => 'Daily Defence Current Affairs & Revision Notes'],
            ['time' => 'Saturday',       'activity' => 'Sectional Timed Tests & Weak-Area Drill'],
            ['time' => 'Sunday',         'activity' => 'Full 5-Hour UPSC Mock (Maths 2.5h + GAT 2.5h) & Analysis']
        ],
        'features'        => ['Comprehensive UPSC Syllabus Coverage', 'Mathematics Speed Techniques & Shortcuts', 'Current Affairs & Defence GK Modules', 'Daily 6-Hour Academic Schedule + Evening Doubt Classes', 'Complete SSB Interview Dossier Training']
    ],
    'cds-training' => [
        'title'           => 'CDS Training (IMA, OTA, AFA, INA)',
        'badge'           => 'Graduate Entry',
        'target'          => 'Graduates / Final Year Degree Students',
        'duration'        => '6 Months / 1 Year',
        'description'     => 'Complete preparation for Combined Defence Services Examination for permanent and short service commissions across Army, Navy, and Air Force.',
        'eligibility'     => 'Graduation in any discipline (B.Tech for Naval & Air Force Academy)',
        'timetable_pdf'   => 'assets/downloads/ddc-cds-syllabus-timetable.pdf',
        'timetable_title' => 'CDS Syllabus, Timetable & Study Plan (IMA/OTA/AFA)',
        'timetable_hours' => '5-6 hrs Daily Preparation Plan',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Running, Physical Conditioning & Stamina Drill'],
            ['time' => '7:00 - 8:30 AM', 'activity' => 'Elementary Mathematics (Arithmetic, Algebra, Geometry)'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'English: Grammar, Idioms, Vocab & Cloze Test'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'General Knowledge (History, Polity, Geo, Science)'],
            ['time' => '8:30 - 9:15 PM', 'activity' => 'National & International Defence Current Affairs'],
            ['time' => '9:15 - 9:45 PM', 'activity' => 'Revision, Error Notebook & Next Day Planning'],
            ['time' => 'Sunday',         'activity' => 'Full 3-Paper UPSC Mock Simulation (2 hrs each) & Review']
        ],
        'features'        => ['Advanced Elementary Mathematics Coaching', 'Intensive English & Comprehensive General Knowledge', 'Special OTA Paper Strategy (General Knowledge + English)', 'Mock Tests Designed on Latest UPSC Pattern', 'Rigorous 14-Day SSB Orientation & Interview Prep']
    ],
    'afcat-coaching' => [
        'title'           => 'AFCAT Coaching (Flying & Ground Duty)',
        'badge'           => 'Air Force Entry',
        'target'          => 'Graduates Aiming for Indian Air Force',
        'duration'        => '3 to 6 Months Special Batches',
        'description'     => 'Specialized curriculum targeting AFCAT Numerical Ability, Verbal Ability, Reasoning & Military Aptitude, and General Awareness.',
        'eligibility'     => 'Graduate with minimum 60% marks and 10+2 with Maths & Physics',
        'timetable_pdf'   => 'assets/downloads/ddc-afcat-syllabus-timetable.pdf',
        'timetable_title' => 'AFCAT Syllabus, Timetable & 3-6 Month Plan',
        'timetable_hours' => '5-6 hrs Daily Study Plan',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Running & AFSB Physical Fitness Drill (1.6 km in 7-8 min)'],
            ['time' => '7:00 - 8:00 AM', 'activity' => 'Numerical Ability: Speed Arithmetic & Shortcuts'],
            ['time' => '6:30 - 7:30 PM', 'activity' => 'Reasoning & Military Aptitude (Spatial & Non-Verbal)'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'English: Comprehension, Vocabulary & Sentence Ordering'],
            ['time' => '8:30 - 9:15 PM', 'activity' => 'General Awareness (Aviation, Defence, Sports, Static GK)'],
            ['time' => '9:15 - 9:45 PM', 'activity' => 'Daily Newspaper & Air Force Current Affairs'],
            ['time' => 'Sunday',         'activity' => 'Full 2-Hour Online Computer Mock + 2 hrs Performance Analysis']
        ],
        'features'        => ['Complete Spatial & Military Aptitude Training', 'Computer-Based Mock Test Series (CBTS)', 'Speed Maths & Reasoning Shortcut Techniques', 'Daily Aviation & Defence Current Affairs', 'AFSB Preparation (Air Force Selection Board)']
    ],
    'rimc-sainik' => [
        'title'           => 'RIMC & Sainik School Coaching',
        'badge'           => 'School Entry (Class 6 & 8)',
        'target'          => 'Young Cadets for Military Schools',
        'duration'        => '1 Year Foundation Batch',
        'description'     => 'Early military grooming and entrance preparation for admission to Rashtriya Indian Military College (RIMC) and All India Sainik Schools.',
        'eligibility'     => 'Boys & Girls studying in Class 5th, 6th, or 7th',
        'timetable_pdf'   => 'assets/downloads/ddc-rimc-entrance-timetable.pdf',
        'timetable_title' => 'RIMC Dehradun Entrance Exam Timetable & Plan',
        'timetable_hours' => '2-3 hrs After School Daily',
        'daily_routine'   => [
            ['time' => '6:00 - 6:45 AM', 'activity' => 'Morning Running, Exercises & Team Games'],
            ['time' => '4:30 - 5:30 PM', 'activity' => 'Mathematics: Class 6-7 Concepts + 20 Problem Solutions'],
            ['time' => '6:00 - 6:45 PM', 'activity' => 'English: Grammar, Composition, Essay & Letter Writing'],
            ['time' => '7:30 - 8:00 PM', 'activity' => 'General Knowledge: Child-Friendly Newspaper & GK Book'],
            ['time' => '8:00 - 8:15 PM', 'activity' => 'Mistake Notebook & Formula Revision'],
            ['time' => 'Saturday',       'activity' => 'Full Paper Timed Practice or Subject Sectional Test'],
            ['time' => 'Sunday',         'activity' => 'Viva-Voce Mock Interview, General Facts & Outdoor Hobby']
        ],
        'features'        => ['Foundational Mathematics & Reasoning', 'English Grammar, Composition & General Science', 'Disciplined Gurukul Living & Daily Physical Fitness', 'Regular Chapter Tests & Previous Year Papers Solving', 'Interview Preparation for Final Selection']
    ],
    'afmc-neet' => [
        'title'           => 'AFMC Pune (MBBS) with NEET UG',
        'badge'           => 'Medical Defence • Premier',
        'target'          => 'Medical Aspirants Aiming for Uniformed Service',
        'duration'        => '1 Year Repeater / 2 Years Integrated',
        'description'     => 'Integrated NEET UG medical preparation combined with AFMC ToELR (English & Logic), Psychological Assessment Test (PAT), and Medical Interview grooming.',
        'eligibility'     => 'Class 12th with Physics, Chemistry, Biology & English (min 60%)',
        'timetable_pdf'   => 'assets/downloads/ddc-afmc-neet-timetable.pdf',
        'timetable_title' => 'AFMC Pune (NEET UG) Timetable & Study Plan',
        'timetable_hours' => '8-10 hrs Daily Intensive Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Physical Exercise (Medical Fitness Standard)'],
            ['time' => '7:00 - 10:00 AM', 'activity' => 'NCERT Biology (Line-by-Line Botany & Zoology)'],
            ['time' => '10:30 AM - 1:00 PM', 'activity' => 'Physics: Theory Concepts & 45+ Numericals Solving'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Chemistry: Physical, Organic, Inorganic Rotation'],
            ['time' => '5:30 - 7:00 PM', 'activity' => 'High-Volume MCQ Practice from Day’s Chapters'],
            ['time' => '8:00 - 9:00 PM', 'activity' => 'ToELR (English Comprehension & Logical Reasoning) Practice'],
            ['time' => 'Sunday',         'activity' => 'Full 3h 20m NEET Pattern Mock + AFMC Interview Prep']
        ],
        'features'        => ['Complete NCERT Class 11-12 Line-by-Line Pedagogy', 'Dedicated ToELR Screening Preparation (80 Marks)', 'Psychological Assessment Test (PAT) Guidance', 'Military Doctor Mock Interviews & Medical Board Fitness', 'Residential Campus with Focus Study Halls']
    ],
    'mns-nursing' => [
        'title'           => 'MNS BSc Nursing (with NEET UG)',
        'badge'           => 'Military Nursing • Women Commission',
        'target'          => 'Female Candidates Aiming for Military Nursing Service',
        'duration'        => '1 Year Intensive / 2 Years Integrated',
        'description'     => 'Specialized preparation for female aspirants seeking commissioning as Lieutenants in the Military Nursing Service via NEET UG and AFMS ToGIGE screening.',
        'eligibility'     => 'Unmarried Female, Class 12 with PCB & English (min 50%)',
        'timetable_pdf'   => 'assets/downloads/ddc-mns-nursing-timetable.pdf',
        'timetable_title' => 'MNS BSc Nursing (NEET UG) Timetable & Plan',
        'timetable_hours' => '8-10 hrs Daily Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'Morning Fitness & Stamina Conditioning'],
            ['time' => '7:00 - 10:00 AM', 'activity' => 'NCERT Biology (360 Marks NEET Priority)'],
            ['time' => '10:30 AM - 1:00 PM', 'activity' => 'Physics Theory & Standard Numericals'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Chemistry (Organic Reactions & Inorganic Facts)'],
            ['time' => '5:30 - 7:00 PM', 'activity' => 'Daily Chapter MCQ Drills & Time-Management Work'],
            ['time' => '8:00 - 9:00 PM', 'activity' => 'ToGIGE Preparation (General Intelligence & English)'],
            ['time' => 'Sunday',         'activity' => 'Full NEET Mock Test & Military Nursing Interview Sessions']
        ],
        'features'        => ['Female Cadet Dedicated Hostel & Safe Campus', 'NEET UG Core PCB Exam Preparation', 'ToGIGE (General Intelligence & General English) Training', 'AFMS Medical Standards Conditioning', 'Commissioned MNS Officer Mock Interviews']
    ],
    'ssb-interview' => [
        'title'           => 'SSB Interview Comprehensive Training',
        'badge'           => '14-Day Practical Camp',
        'target'          => 'Candidates with SSB / AFSB / NSB Calls',
        'duration'        => '14 Days / 21 Days Live Ground Camp',
        'description'     => 'Complete outdoor GTO ground obstacle course, psychology dossier evaluation (TAT, WAT, SRT, SDT), and one-on-one personal interview mocks by retired defence assessors.',
        'eligibility'     => 'All NDA, CDS, AFCAT, TGC, NCC, and Direct Entry Call letter holders',
        'timetable_pdf'   => 'assets/downloads/ddc-nda-target-timetable.pdf',
        'timetable_title' => 'SSB 14-Day Practical Bootcamp Schedule',
        'timetable_hours' => 'Full-Day Immersive Military Routine',
        'daily_routine'   => [
            ['time' => '6:00 - 7:00 AM', 'activity' => 'Morning Physical Training & Obstacle Run'],
            ['time' => '9:00 AM - 1:00 PM', 'activity' => 'Outdoor GTO Ground: PGT, HGT, Snake Race & Individual Obstacles'],
            ['time' => '2:30 - 5:00 PM', 'activity' => 'Psychology Dossier: TAT, WAT, SRT, SDT Real-Time Tests'],
            ['time' => '5:30 - 7:30 PM', 'activity' => 'Group Discussion (GD), Lecturette & Personal Mock Interviews'],
            ['time' => '8:30 - 9:30 PM', 'activity' => 'Individual Assessment Feedback & OLQ Cultivation Guidance']
        ],
        'features'        => ['Live GTO Ground Obstacle Course on Campus', 'Individual Psychology Test Evaluation & Feedback', 'Personal Mock Interviews with Ex-Interviewing Officers', 'Group Discussions (GD) & Lecturette Practice Daily', 'Officer Like Qualities (OLQ) Inculcation Program']
    ],
    'capf-ota' => [
        'title'           => 'CAPF (AC) & OTA Special Wing',
        'badge'           => 'Paramilitary & Army',
        'target'          => 'Candidates targeting BSF, CRPF, CISF, ITBP & OTA',
        'duration'        => '6 Months to 1 Year',
        'description'     => 'Specialized coaching for Central Armed Police Forces (Assistant Commandant) and Officers Training Academy Chennai short service commissions.',
        'eligibility'     => 'Graduate candidates within prescribed age brackets',
        'timetable_pdf'   => 'assets/downloads/ddc-cds-syllabus-timetable.pdf',
        'timetable_title' => 'CAPF & OTA Daily Study & Fitness Schedule',
        'timetable_hours' => '6-8 hrs Daily Study & PET Routine',
        'daily_routine'   => [
            ['time' => '5:30 - 6:30 AM', 'activity' => 'PET Physical Efficiency Drill (Running, Long Jump, Shot Put)'],
            ['time' => '7:00 - 8:30 AM', 'activity' => 'Paper I: General Studies (Polity, History, Geo, Economics)'],
            ['time' => '6:00 - 7:00 PM', 'activity' => 'Paper II: Essay, Precise Writing, Argument & Report'],
            ['time' => '7:30 - 8:30 PM', 'activity' => 'National Security, Border Issues & Current Affairs'],
            ['time' => '8:30 - 9:30 PM', 'activity' => 'Descriptive Answer Writing Practice & Feedback']
        ],
        'features'        => ['Paper 1 (General Studies) & Paper 2 (Essay & Comprehension)', 'Answer Writing Practice for Descriptive Paper', 'Physical Efficiency Test (PET) Training', 'Personality Test / Interview Mock Sessions', 'Regular Doubt Removal & Mentor Sessions']
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
