-- ====================================================================
-- Dehradun Defence College - Admission Leads & Inquiries Database Schema
-- Compatible with MySQL 5.7+ / MariaDB 10.3+ (Standard cPanel Hosting)
-- ====================================================================

CREATE TABLE IF NOT EXISTS `ddc_admission_leads` (
  `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `full_name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `mobile_number` VARCHAR(20) NOT NULL,
  `course_interest` VARCHAR(100) NOT NULL,
  `education_level` VARCHAR(100) DEFAULT NULL,
  `preferred_contact` VARCHAR(30) DEFAULT 'Call',
  `message` TEXT DEFAULT NULL,
  `ip_address` VARCHAR(45) DEFAULT NULL,
  `user_agent` VARCHAR(255) DEFAULT NULL,
  `status` ENUM('new', 'contacted', 'interview_scheduled', 'admitted', 'closed') DEFAULT 'new',
  `notes` TEXT DEFAULT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  INDEX `idx_course` (`course_interest`),
  INDEX `idx_mobile` (`mobile_number`),
  INDEX `idx_created` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sample Seed Inquiry for Verification
INSERT INTO `ddc_admission_leads` 
(`full_name`, `email`, `mobile_number`, `course_interest`, `education_level`, `preferred_contact`, `message`, `status`) 
VALUES 
('Rohit Chauhan', 'rohit.chauhan.sample@gmail.com', '9876543210', 'NDA Foundation After 10th', '10th Passed', 'Call', 'Interested in residential hostel batch for NDA 2026.', 'new');
