-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 مارس 2019 الساعة 23:19
-- إصدار الخادم: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ejas`
--

-- --------------------------------------------------------

--
-- بنية الجدول `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(9) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'IT'),
(2, 'Computer science'),
(3, 'Engineering'),
(4, 'Math'),
(5, 'Healthcare'),
(6, 'Social Services'),
(7, 'Media'),
(8, 'Finance');

-- --------------------------------------------------------

--
-- بنية الجدول `certifications`
--

CREATE TABLE `certifications` (
  `certification_id` int(11) NOT NULL,
  `certification_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `certifications`
--

INSERT INTO `certifications` (`certification_id`, `certification_name`) VALUES
(1, '(Human Resources Certifications (PHR'),
(2, '(Human Resources Certifications(SPHR '),
(3, '(Human Resources Certifications(SHRM'),
(4, ' (Project Management Certifications (PMP'),
(5, '(Sales Certifications (Challenger Sales'),
(6, '(Sales Certifications ( Spin Selling'),
(7, '(Sales Certifications ( Sandler Training'),
(8, 'Help Desk/Desktop Analyst +Certifications (A'),
(9, 'Help Desk/Desktop Analyst Certifications (Network+'),
(10, 'Network Certifications(CCNA)'),
(11, 'Network Certifications(CCNP)'),
(12, 'Network Certifications(CCIE)'),
(13, 'Salesforce'),
(14, 'Hubspot’s Inbound Certification'),
(15, 'Google Certifications (Publisher)'),
(16, 'Google Certifications (Analytics)'),
(17, 'Google Certifications (AdWords)'),
(18, 'CIPM'),
(19, 'CFA'),
(20, 'CBV'),
(21, 'CMT'),
(22, 'CAIA'),
(23, 'ChMC'),
(24, 'CGMA'),
(25, 'CAPA'),
(26, 'CAPP'),
(27, 'CPA'),
(28, 'CFP'),
(29, 'CFC'),
(30, 'CCUFC');

-- --------------------------------------------------------

--
-- بنية الجدول `experience`
--

CREATE TABLE `experience` (
  `experience_id` int(11) NOT NULL,
  `experience_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `experience`
--

INSERT INTO `experience` (`experience_id`, `experience_title`) VALUES
(1, 'Event/Meeting Planner'),
(2, 'Purchasing Manager'),
(3, 'Event/Meeting Planner'),
(4, 'Purchasing Manager'),
(5, 'Receptionist'),
(6, 'Secretary / Administrative Assistant'),
(7, 'Market Research Analyst'),
(8, 'Advertising Managers and Promotions Managers'),
(9, 'Advertising Sales Agent'),
(10, 'Editor'),
(11, 'Graphic Designer'),
(12, 'Interpreter and Translator'),
(13, 'Public Relations Specialist'),
(14, 'Social Media Manager'),
(15, 'Writer and Editor'),
(16, 'Purchasing Manager'),
(17, 'Architect'),
(18, 'Brick Mason'),
(19, 'Construction Laborer'),
(20, 'Electrician'),
(21, 'Environmental Engineer'),
(22, 'Glazier'),
(23, 'Janitor'),
(24, 'Mechanical Engineer'),
(25, 'Plumber'),
(26, 'Fashion Designer'),
(27, 'Interior Designer'),
(28, 'Photographer'),
(29, 'Chemist'),
(30, 'Curator'),
(31, 'Guidance Counselor'),
(32, 'Hydrologist'),
(33, 'Librarian'),
(34, 'Special Education Teacher'),
(35, 'Teacher'),
(36, 'Teacher Assistant'),
(37, 'Accountant'),
(38, 'Actuary'),
(39, 'Bank Teller'),
(40, 'Bookkeeping, Accounting, and Auditing Clerks'),
(41, 'Budget Analyst'),
(42, 'Claims Adjuster, Appraiser, Examiner, and Investigator'),
(43, 'Financial Advisor'),
(44, 'Insurance Underwriter'),
(45, 'Loan Officer'),
(46, 'Bartender'),
(47, 'Chef'),
(48, 'Waiter/Waitress'),
(49, 'Biomedical Engineer'),
(50, 'Cardiovascular Technologist'),
(51, 'Dental Hygienist'),
(52, 'Dentist'),
(53, 'Diagnostic Medical Sonographer'),
(54, 'Dietitian/Nutritionist'),
(55, 'Doctor'),
(56, 'EMTs and Paramedics'),
(57, 'Epidemiologist'),
(58, 'Health Educator'),
(59, 'Home Health Aide'),
(60, 'Licensed Practical Nurse'),
(61, 'Medical Assistant'),
(62, 'Medical Laboratory Technician'),
(63, 'Nursing Assistant'),
(64, 'Occupational Therapist'),
(65, 'Pharmacist'),
(66, 'Pharmacy Technician'),
(67, 'Physician Assistant'),
(68, 'Physical Therapist'),
(69, 'Physical Therapy Assistant'),
(70, 'Registered Nurse'),
(71, 'Pharmacist'),
(72, 'Pharmacy Technician'),
(73, 'Compensation and Benefits Manager'),
(74, 'Consultant'),
(75, 'Human Resources Manager'),
(76, 'Computer Programmer'),
(77, 'Computer Systems Analyst'),
(78, 'Database Administrator'),
(79, 'Software Developer'),
(80, 'Web Developer'),
(81, 'Correctional Officer'),
(82, 'Court Reporter'),
(83, 'Firefighter'),
(84, 'Fundraiser'),
(85, 'Judge'),
(86, 'Lawyer'),
(87, 'Paralegal and Legal Assistant'),
(88, 'Police Officer'),
(89, 'Postal Service Worker'),
(90, 'Security Guard'),
(91, 'Social Worker'),
(92, 'Animal Groomer'),
(93, 'Auto Mechanic'),
(94, 'Fitness Trainer'),
(95, 'Funeral Director'),
(96, 'Hairdressers, Hairstylists, and Cosmetologists'),
(97, 'Manicurist'),
(98, 'Marriage and Family Therapist'),
(99, 'Veterinarian'),
(100, 'Cashier'),
(101, 'Customer Service Representative'),
(102, 'Retail Salesperson'),
(103, 'Retail Supervisor'),
(104, 'Aircraft Mechanic'),
(105, 'Airline Pilot'),
(106, 'Airport Security Screener'),
(107, 'Flight Attendant');

-- --------------------------------------------------------

--
-- بنية الجدول `fieldofstudy`
--

CREATE TABLE `fieldofstudy` (
  `field_id` int(3) NOT NULL,
  `field_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `fieldofstudy`
--

INSERT INTO `fieldofstudy` (`field_id`, `field_name`) VALUES
(1, 'Accounting'),
(2, 'Actuarial Science'),
(3, 'Advertising'),
(4, 'Agriculture'),
(5, 'Agricultural and Biological Engineering'),
(6, 'Agricultural Business Management'),
(7, 'Agriculture Economics'),
(8, 'Animal Bioscience'),
(9, 'Animal Sciences'),
(10, 'Anthropology'),
(11, 'Applied Mathematics'),
(12, 'Archaeology'),
(13, 'Architectural Engineering'),
(14, 'Architecture'),
(15, 'Art History'),
(16, 'Studio Art'),
(17, 'Art Education'),
(18, 'Biobehavioral Health'),
(19, 'Biochemistry'),
(20, 'Bioengineering'),
(21, 'Biology'),
(22, 'Biophysics'),
(23, 'Advertising'),
(24, 'Agriculture'),
(25, 'Agricultural and Biological Engineering'),
(26, 'Agricultural Business Management'),
(27, 'Agriculture Economics'),
(28, 'Animal Bioscience'),
(29, 'Animal Sciences'),
(30, 'Anthropology'),
(31, 'Applied Mathematics'),
(32, 'Archaeology'),
(33, 'Architectural Engineering'),
(34, 'Architecture'),
(35, 'Art History'),
(36, 'Studio Art'),
(37, 'Art Education'),
(38, 'Biobehavioral Health'),
(39, 'Biochemistry'),
(40, 'Bioengineering'),
(41, 'Biology'),
(42, 'Biophysics'),
(43, 'Biotechnologyy'),
(44, 'Business Administration and Management'),
(45, 'Business Logistics'),
(46, 'Chemical Engineering'),
(47, 'Chemistry'),
(48, 'Children'),
(49, 'Civil Engineering'),
(50, 'Computer Engineering'),
(51, 'Computer Science'),
(52, 'Crime, Law, and Justice'),
(53, 'Dance'),
(54, 'Earth Sciences'),
(55, 'Economics'),
(56, 'Electrical Engineering'),
(57, 'Elementary and Kindergarten Education'),
(58, 'Engineering Science'),
(59, 'English'),
(60, 'Environmental Systems Engineering'),
(61, 'Environmental Sciences'),
(62, 'Environmental Resource Management'),
(63, 'Film and Video'),
(64, 'Finance'),
(65, 'Food Science'),
(66, 'Forest Science'),
(67, 'General Science'),
(68, 'Geography'),
(69, 'Geosciences'),
(70, 'Graphic Design and Photography'),
(71, 'Health and Physical Education'),
(72, 'Health Policy and Administration'),
(73, 'History'),
(74, 'Horticulture'),
(75, 'Hotel, Restaurant, and Institutional Management'),
(76, 'Human Development and Family Studies'),
(77, 'Individual and Family Studies'),
(78, 'Industrial Engineering'),
(79, 'Information Sciences and Technology'),
(80, 'Journalism'),
(81, 'Kinesiology');

-- --------------------------------------------------------

--
-- بنية الجدول `job_posts`
--

CREATE TABLE `job_posts` (
  `job_post_id` int(3) NOT NULL,
  `job_post_time_id` int(3) NOT NULL,
  `job_post_category_id` int(3) NOT NULL,
  `job_post_org_id` int(3) NOT NULL,
  `job_post_title` varchar(255) NOT NULL,
  `job_post_location` varchar(255) NOT NULL,
  `job_post_description` text NOT NULL,
  `job_post_requirement` text NOT NULL,
  `job_post_date` date NOT NULL,
  `job_post_tags` varchar(255) NOT NULL,
  `job_post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `job_posts`
--

INSERT INTO `job_posts` (`job_post_id`, `job_post_time_id`, `job_post_category_id`, `job_post_org_id`, `job_post_title`, `job_post_location`, `job_post_description`, `job_post_requirement`, `job_post_date`, `job_post_tags`, `job_post_status`) VALUES
(1, 1, 1, 1, 'acapella singer', 'chicago', 'a singer with a beautiful voice wanted on the 7th of march ', 'beautiful voice, good apperance', '2019-02-28', 'singing,art,acapella', 'draft'),
(2, 2, 2, 2, 'a front end programmer', 'united states,NYC', 'enjfednfekmfl;ka', 'doifnjcnwklmdlwkmkjd', '2019-02-20', 'dncjsndjsn', 'draft'),
(3, 0, 0, 0, 'programmer', 'london', 'loigbnmkjhgft', 'ioygyhnouhio', '2019-02-20', 'cs', 'draft'),
(4, 1, 2, 3, 'programmer', 'london', 'loigbnmkjhgft', 'ioygyhnouhio', '2019-02-20', 'cs', 'draft');

-- --------------------------------------------------------

--
-- بنية الجدول `job_times`
--

CREATE TABLE `job_times` (
  `job_time_id` int(3) NOT NULL,
  `job_time_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `job_times`
--

INSERT INTO `job_times` (`job_time_id`, `job_time_title`) VALUES
(1, 'full time'),
(2, 'part time'),
(3, 'freelance'),
(4, 'internship'),
(5, 'temporary'),
(6, 'remotly');

-- --------------------------------------------------------

--
-- بنية الجدول `languages`
--

CREATE TABLE `languages` (
  `language_id` int(3) NOT NULL,
  `language_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `languages`
--

INSERT INTO `languages` (`language_id`, `language_name`) VALUES
(1, 'Afrikaans'),
(2, 'Albanian'),
(3, 'Amharic'),
(4, 'Arabic'),
(5, 'Aramaic'),
(6, 'Armenian'),
(7, 'Assamese'),
(8, 'Aymara'),
(9, 'Azerbaijani'),
(10, 'Balochi'),
(11, 'Bamanankan'),
(12, 'Bashkort (Bashkir)'),
(13, 'Basque'),
(14, 'Belarusan'),
(15, 'Bengali'),
(16, 'Bhojpuri'),
(17, 'Bislama'),
(18, 'Bosnian'),
(19, 'Brahui'),
(20, 'Bulgarian'),
(21, 'Burmese'),
(22, 'Cantonese'),
(23, 'Catalan'),
(24, 'Cebuano'),
(25, 'Chechen'),
(26, 'Cherokee'),
(27, 'Croatian'),
(28, 'Czech'),
(29, 'Dakota'),
(30, 'Danish'),
(31, 'Dari'),
(32, 'Dholuo'),
(33, 'Dutch'),
(34, 'English'),
(35, 'Esperanto'),
(36, 'Estonian'),
(37, 'Éwé'),
(38, 'Finnish'),
(39, 'French'),
(40, 'Georgian');

-- --------------------------------------------------------

--
-- بنية الجدول `organization-register`
--

CREATE TABLE `organization-register` (
  `org_id` int(11) NOT NULL,
  `org_name` varchar(255) NOT NULL,
  `org_email` varchar(255) NOT NULL,
  `org_password` text NOT NULL,
  `validation code` text NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `organization-register`
--

INSERT INTO `organization-register` (`org_id`, `org_name`, `org_email`, `org_password`, `validation code`, `active`, `address`, `postal_code`) VALUES
(1, 'facebook', 'rahaf59677@gmail.com', '59677r', '', 0, '', 1234);

-- --------------------------------------------------------

--
-- بنية الجدول `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(3) NOT NULL,
  `skill_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `skills`
--

INSERT INTO `skills` (`skill_id`, `skill_name`) VALUES
(1, 'Data Analysis'),
(2, 'Copywriting'),
(3, 'Foreign Languages'),
(4, 'Accounting'),
(5, 'Computer Languages'),
(6, 'Mathematics'),
(7, 'Graphic Design'),
(8, 'Planning / Event Planning'),
(9, 'SEO / SEM Marketing'),
(10, 'Bookkeeping'),
(11, 'Communication'),
(12, 'Ability to Work Under Pressure'),
(13, 'Decision Making'),
(14, 'Time Management'),
(15, 'Self-motivation'),
(16, 'Conflict Resolution'),
(17, 'Leadership'),
(18, 'Adaptability'),
(19, 'Teamwork'),
(20, 'Creativity'),
(21, 'writing'),
(22, 'translating'),
(23, 'singing'),
(24, 'dancing'),
(25, 'acting'),
(26, 'Patience with others'),
(27, 'Active listening skills'),
(28, 'Flexibility'),
(29, 'Good judgment'),
(30, 'Genuine interest in others. ..');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`certification_id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `fieldofstudy`
--
ALTER TABLE `fieldofstudy`
  ADD PRIMARY KEY (`field_id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`job_post_id`);

--
-- Indexes for table `job_times`
--
ALTER TABLE `job_times`
  ADD PRIMARY KEY (`job_time_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `organization-register`
--
ALTER TABLE `organization-register`
  ADD PRIMARY KEY (`org_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `certification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `fieldofstudy`
--
ALTER TABLE `fieldofstudy`
  MODIFY `field_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `job_post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_times`
--
ALTER TABLE `job_times`
  MODIFY `job_time_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `organization-register`
--
ALTER TABLE `organization-register`
  MODIFY `org_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
