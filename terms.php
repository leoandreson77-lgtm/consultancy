<?php
/**
 * Terms and Conditions - Dehradun Defence College
 */
require_once __DIR__ . '/config.php';

$page_title = 'Terms & Conditions | Dehradun Defence College';
$page_desc = 'Terms of admission, campus code of conduct, hostel rules, and student guidelines at Dehradun Defence College in Dehradun.';
$current_page = 'terms';

include __DIR__ . '/includes/header.php';
?>

    <section class="section-padding-sm bg-navy" style="background-image: linear-gradient(135deg, #0B1B3D 0%, #162B56 100%);">
        <div class="container container-narrow" style="text-align: center;">
            <span class="badge-gold">Rules & Guidelines</span>
            <h1 style="color: #FFFFFF; margin: 0.75rem 0 0.5rem 0;">Terms & Conditions</h1>
            <p style="color: rgba(255,255,255,0.85); font-size: 1.05rem;">
                Official Admission Guidelines & Campus Discipline Standards
            </p>
        </div>
    </section>

    <section class="section-padding bg-slate">
        <div class="container container-narrow">
            <div style="background: #FFFFFF; padding: 3rem 2.5rem; border-radius: var(--radius-lg); border: 1px solid var(--border-light); box-shadow: var(--shadow-sm); line-height: 1.8; color: var(--text-main);">
                
                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin-bottom: 1rem;">1. Admission Acceptance & Eligibility</h2>
                <p>
                    Admission to all coaching programs (NDA Foundation, CDS, AFCAT, SSB, RIMC, and Sainik School) at Dehradun Defence College is subject to the candidate fulfilling the requisite educational qualifications and age criteria prescribed by the Union Public Service Commission (UPSC) and the Ministry of Defence. Submission of false academic credentials will result in immediate disqualification.
                </p>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">2. Code of Military Discipline</h2>
                <p>
                    Because Dehradun Defence College prepares cadets for the Indian Armed Forces, the highest standards of personal discipline, punctual attendance, uniform turnout, and mutual respect are non-negotiable.
                </p>
                <ul style="margin: 0.5rem 0 1.5rem 1.5rem; list-style-type: disc;">
                    <li><strong>Zero Tolerance for Ragging:</strong> Ragging in any shape or form within the campus or hostels is strictly prohibited by law and will lead to instant expulsion and police notification.</li>
                    <li><strong>Attendance:</strong> Mandatory participation in morning PT, parade drills, and classroom lectures is required. Unexcused absence will invite disciplinary review.</li>
                    <li><strong>Campus Decorum:</strong> Consumption of tobacco, alcohol, narcotics, or any banned substance is strictly forbidden anywhere on academy premises.</li>
                </ul>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">3. Residential Hostel & Mess Rules</h2>
                <p>
                    Cadets residing in the campus hostels must adhere strictly to the daily routine:
                </p>
                <ul style="margin: 0.5rem 0 1.5rem 1.5rem; list-style-type: disc;">
                    <li>Lights-out timing at 10:30 PM must be maintained.</li>
                    <li>Cadets may not leave campus premises without written permission from the Chief Warden and Director.</li>
                    <li>Meals are served exclusively during designated mess hours. Wastage of food is strictly discouraged.</li>
                </ul>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">4. Fees & Payments</h2>
                <p>
                    Course fees are established transparently prior to enrollment. All fee installment obligations must be settled according to the agreed schedule. For specific details on fee structure, installments, and refund policies, please refer to your signed admission prospectus.
                </p>

                <h2 style="font-size: 1.5rem; color: var(--primary-navy); margin: 2rem 0 1rem 0;">5. Jurisdiction</h2>
                <p>
                    All legal disputes or matters relating to admissions, examinations, and institutional policies shall be subject exclusively to the jurisdiction of the courts of Dehradun, Uttarakhand.
                </p>
            </div>
        </div>
    </section>

<?php include __DIR__ . '/includes/footer.php'; ?>
