/*
Navicat MySQL Data Transfer

Source Server         : LocalDev
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : pgreg

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2015-12-04 17:07:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for countries
-- ----------------------------
DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_name` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=169 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of countries
-- ----------------------------
INSERT INTO `countries` VALUES ('1', 'Andorra');
INSERT INTO `countries` VALUES ('2', 'United Arab Emirate');
INSERT INTO `countries` VALUES ('3', 'Afghanistan');
INSERT INTO `countries` VALUES ('4', 'Antigua - Barbuda');
INSERT INTO `countries` VALUES ('5', 'Anguilla');
INSERT INTO `countries` VALUES ('6', 'Albania');
INSERT INTO `countries` VALUES ('7', 'Armenia');
INSERT INTO `countries` VALUES ('8', 'Argentina');
INSERT INTO `countries` VALUES ('9', 'Australia');
INSERT INTO `countries` VALUES ('10', 'Aruba');
INSERT INTO `countries` VALUES ('11', 'Azerbaijan');
INSERT INTO `countries` VALUES ('12', 'Bosnia');
INSERT INTO `countries` VALUES ('13', 'Barbados');
INSERT INTO `countries` VALUES ('14', 'Bangladesh');
INSERT INTO `countries` VALUES ('15', 'Belgium');
INSERT INTO `countries` VALUES ('16', 'Burkina Faso');
INSERT INTO `countries` VALUES ('17', 'Bulgaria');
INSERT INTO `countries` VALUES ('18', 'Bahrain');
INSERT INTO `countries` VALUES ('19', 'Burundi');
INSERT INTO `countries` VALUES ('20', 'Benin');
INSERT INTO `countries` VALUES ('21', 'Bermuda');
INSERT INTO `countries` VALUES ('22', 'Brunei');
INSERT INTO `countries` VALUES ('23', 'Bolivia');
INSERT INTO `countries` VALUES ('24', 'Brazil');
INSERT INTO `countries` VALUES ('25', 'Bahamas');
INSERT INTO `countries` VALUES ('26', 'Bhutan');
INSERT INTO `countries` VALUES ('27', 'Botswana');
INSERT INTO `countries` VALUES ('28', 'Belarus');
INSERT INTO `countries` VALUES ('29', 'Belize');
INSERT INTO `countries` VALUES ('30', 'Canada');
INSERT INTO `countries` VALUES ('31', 'Curacao');
INSERT INTO `countries` VALUES ('32', 'Central Africa Republic');
INSERT INTO `countries` VALUES ('33', 'Congo');
INSERT INTO `countries` VALUES ('34', 'Switzerland');
INSERT INTO `countries` VALUES ('35', 'Christmas Island');
INSERT INTO `countries` VALUES ('36', 'Cook Islands');
INSERT INTO `countries` VALUES ('37', 'Chile');
INSERT INTO `countries` VALUES ('38', 'Cameroon');
INSERT INTO `countries` VALUES ('39', 'China');
INSERT INTO `countries` VALUES ('40', 'Colombia');
INSERT INTO `countries` VALUES ('41', 'Costa Rica');
INSERT INTO `countries` VALUES ('42', 'Cote D\'Ivoire');
INSERT INTO `countries` VALUES ('43', 'Cuba');
INSERT INTO `countries` VALUES ('44', 'Cape Verde');
INSERT INTO `countries` VALUES ('45', 'Cyprus');
INSERT INTO `countries` VALUES ('46', 'Czech Republic');
INSERT INTO `countries` VALUES ('47', 'Germany');
INSERT INTO `countries` VALUES ('48', 'Djibouti');
INSERT INTO `countries` VALUES ('49', 'Denmark');
INSERT INTO `countries` VALUES ('50', 'Dominica');
INSERT INTO `countries` VALUES ('51', 'Dominican Republic');
INSERT INTO `countries` VALUES ('52', 'Algeria');
INSERT INTO `countries` VALUES ('53', 'Ecuador');
INSERT INTO `countries` VALUES ('54', 'Estonia');
INSERT INTO `countries` VALUES ('55', 'Egypt');
INSERT INTO `countries` VALUES ('56', 'Eritrea');
INSERT INTO `countries` VALUES ('57', 'Spain');
INSERT INTO `countries` VALUES ('58', 'Ethiopia');
INSERT INTO `countries` VALUES ('59', 'Finland');
INSERT INTO `countries` VALUES ('60', 'Fiji');
INSERT INTO `countries` VALUES ('61', 'Faroe Islands');
INSERT INTO `countries` VALUES ('62', 'France');
INSERT INTO `countries` VALUES ('63', 'Great Britain');
INSERT INTO `countries` VALUES ('64', 'Grenada');
INSERT INTO `countries` VALUES ('65', 'Georgia');
INSERT INTO `countries` VALUES ('66', 'Ghana');
INSERT INTO `countries` VALUES ('67', 'Greenland');
INSERT INTO `countries` VALUES ('68', 'Guinea');
INSERT INTO `countries` VALUES ('69', 'Guadaloupe');
INSERT INTO `countries` VALUES ('70', 'Equatorial Guinea');
INSERT INTO `countries` VALUES ('71', 'Greece');
INSERT INTO `countries` VALUES ('72', 'Guatemala');
INSERT INTO `countries` VALUES ('73', 'Guam');
INSERT INTO `countries` VALUES ('74', 'Guyana');
INSERT INTO `countries` VALUES ('75', 'Hong Kong');
INSERT INTO `countries` VALUES ('76', 'Honduras');
INSERT INTO `countries` VALUES ('77', 'Croatia');
INSERT INTO `countries` VALUES ('78', 'Haiti');
INSERT INTO `countries` VALUES ('79', 'Hungary');
INSERT INTO `countries` VALUES ('80', 'Iran');
INSERT INTO `countries` VALUES ('81', 'Indonesia');
INSERT INTO `countries` VALUES ('82', 'Israel');
INSERT INTO `countries` VALUES ('83', 'India');
INSERT INTO `countries` VALUES ('84', 'Iraq');
INSERT INTO `countries` VALUES ('85', 'Ireland');
INSERT INTO `countries` VALUES ('86', 'Iceland');
INSERT INTO `countries` VALUES ('87', 'Italy');
INSERT INTO `countries` VALUES ('88', 'Jamaica');
INSERT INTO `countries` VALUES ('89', 'Jordan');
INSERT INTO `countries` VALUES ('90', 'Japan');
INSERT INTO `countries` VALUES ('91', 'Kenya');
INSERT INTO `countries` VALUES ('92', 'Kyrgyzstan');
INSERT INTO `countries` VALUES ('93', 'Cambodia');
INSERT INTO `countries` VALUES ('94', 'Kiribati');
INSERT INTO `countries` VALUES ('95', 'Korea');
INSERT INTO `countries` VALUES ('96', 'Kuwait');
INSERT INTO `countries` VALUES ('97', 'Kazakhstan');
INSERT INTO `countries` VALUES ('98', 'Laos');
INSERT INTO `countries` VALUES ('99', 'Lebanon');
INSERT INTO `countries` VALUES ('100', 'St Lucia');
INSERT INTO `countries` VALUES ('101', 'Liechtenstein');
INSERT INTO `countries` VALUES ('102', 'Liberia');
INSERT INTO `countries` VALUES ('103', 'Luxembourg');
INSERT INTO `countries` VALUES ('104', 'Latvia');
INSERT INTO `countries` VALUES ('105', 'Lybia');
INSERT INTO `countries` VALUES ('106', 'Morocco');
INSERT INTO `countries` VALUES ('107', 'Moldova');
INSERT INTO `countries` VALUES ('108', 'Macedonia');
INSERT INTO `countries` VALUES ('109', 'Mali');
INSERT INTO `countries` VALUES ('110', 'Myanmar');
INSERT INTO `countries` VALUES ('111', 'Mongolia');
INSERT INTO `countries` VALUES ('112', 'Malta');
INSERT INTO `countries` VALUES ('113', 'Mexico');
INSERT INTO `countries` VALUES ('114', 'Malaysia');
INSERT INTO `countries` VALUES ('115', 'Mozambique');
INSERT INTO `countries` VALUES ('116', 'Namibia');
INSERT INTO `countries` VALUES ('117', 'Niger');
INSERT INTO `countries` VALUES ('118', 'Nigeria');
INSERT INTO `countries` VALUES ('119', 'Nicaragua');
INSERT INTO `countries` VALUES ('120', 'Netherlands');
INSERT INTO `countries` VALUES ('121', 'Norway');
INSERT INTO `countries` VALUES ('122', 'Nepal');
INSERT INTO `countries` VALUES ('123', 'Nauru');
INSERT INTO `countries` VALUES ('124', 'New Zealand');
INSERT INTO `countries` VALUES ('125', 'Oman');
INSERT INTO `countries` VALUES ('126', 'Panama');
INSERT INTO `countries` VALUES ('127', 'Peru');
INSERT INTO `countries` VALUES ('128', 'Philippines');
INSERT INTO `countries` VALUES ('129', 'Pakistan');
INSERT INTO `countries` VALUES ('130', 'Poland');
INSERT INTO `countries` VALUES ('131', 'Puerto Rico');
INSERT INTO `countries` VALUES ('132', 'Portugal');
INSERT INTO `countries` VALUES ('133', 'Paraguay');
INSERT INTO `countries` VALUES ('134', 'Qatar');
INSERT INTO `countries` VALUES ('135', 'Romania');
INSERT INTO `countries` VALUES ('136', 'Russia');
INSERT INTO `countries` VALUES ('137', 'Rwanda');
INSERT INTO `countries` VALUES ('138', 'Saudi Arabia');
INSERT INTO `countries` VALUES ('139', 'Sudan');
INSERT INTO `countries` VALUES ('140', 'Sweden');
INSERT INTO `countries` VALUES ('141', 'Singapore');
INSERT INTO `countries` VALUES ('142', 'Slovenia');
INSERT INTO `countries` VALUES ('143', 'Slovakia');
INSERT INTO `countries` VALUES ('144', 'San Marino');
INSERT INTO `countries` VALUES ('145', 'Senegal');
INSERT INTO `countries` VALUES ('146', 'Somalia');
INSERT INTO `countries` VALUES ('147', 'Suriname');
INSERT INTO `countries` VALUES ('148', 'Serbia - Montenegro');
INSERT INTO `countries` VALUES ('149', 'El Salvador');
INSERT INTO `countries` VALUES ('150', 'Syria');
INSERT INTO `countries` VALUES ('151', 'Chad');
INSERT INTO `countries` VALUES ('152', 'Togo');
INSERT INTO `countries` VALUES ('153', 'Thailand');
INSERT INTO `countries` VALUES ('154', 'Tokelau');
INSERT INTO `countries` VALUES ('155', 'Tunisia');
INSERT INTO `countries` VALUES ('156', 'Tonga');
INSERT INTO `countries` VALUES ('157', 'Turkey');
INSERT INTO `countries` VALUES ('158', 'Tridinidad Tobago');
INSERT INTO `countries` VALUES ('159', 'Taiwan');
INSERT INTO `countries` VALUES ('160', 'Ukraine');
INSERT INTO `countries` VALUES ('161', 'United Kingdom');
INSERT INTO `countries` VALUES ('162', 'United States');
INSERT INTO `countries` VALUES ('163', 'Uruguay');
INSERT INTO `countries` VALUES ('164', 'Vatican');
INSERT INTO `countries` VALUES ('165', 'Venezuela');
INSERT INTO `countries` VALUES ('166', 'Vietnam');
INSERT INTO `countries` VALUES ('167', 'South Africa');
INSERT INTO `countries` VALUES ('168', 'Zimbawe');

-- ----------------------------
-- Table structure for courses
-- ----------------------------
DROP TABLE IF EXISTS `courses`;
CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `course_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of courses
-- ----------------------------
INSERT INTO `courses` VALUES ('1', 'PGD Management');
INSERT INTO `courses` VALUES ('2', 'PGD Accounting');
INSERT INTO `courses` VALUES ('3', 'PGD Banking & Finance');
INSERT INTO `courses` VALUES ('4', 'PGD Marketing');
INSERT INTO `courses` VALUES ('5', 'PGD Business Administration');
INSERT INTO `courses` VALUES ('6', 'M.Sc Accounting');
INSERT INTO `courses` VALUES ('7', 'M.Sc Public Sector Accounting');
INSERT INTO `courses` VALUES ('8', 'M.Sc Human Resource Management');
INSERT INTO `courses` VALUES ('9', 'M.Sc Entrepreneurship');
INSERT INTO `courses` VALUES ('10', 'M.Sc Business Administration');
INSERT INTO `courses` VALUES ('11', 'M.Sc Economics');
INSERT INTO `courses` VALUES ('12', 'MBA Accounting & Finance');
INSERT INTO `courses` VALUES ('13', 'MBA Marketing');
INSERT INTO `courses` VALUES ('14', 'MBA Management');
INSERT INTO `courses` VALUES ('15', 'MBA Human Resource Management');
INSERT INTO `courses` VALUES ('16', 'M.Sc Peace & Conflict Studies');
INSERT INTO `courses` VALUES ('17', 'MPA');
INSERT INTO `courses` VALUES ('18', 'M.Sc Biotechnology');
INSERT INTO `courses` VALUES ('19', 'M.Sc Biochemistry');
INSERT INTO `courses` VALUES ('20', 'M.Sc Information Technology');

-- ----------------------------
-- Table structure for exam_types
-- ----------------------------
DROP TABLE IF EXISTS `exam_types`;
CREATE TABLE `exam_types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `exam_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of exam_types
-- ----------------------------
INSERT INTO `exam_types` VALUES ('1', 'WAEC');
INSERT INTO `exam_types` VALUES ('2', 'NECO');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2015_11_09_194127_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_194513_create_personal_details_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_194738_create_next_of_kin_details_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_194858_create_olevel_results_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_194922_create_qualifications_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_194951_create_programmes_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_195008_create_pins_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_195021_create_admin_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_195034_create_roles_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203150_create_olevel_exams_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203214_create_countries_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203228_create_states_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203245_create_lgas_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203551_create_exam_types_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_203946_create_olevel_subjects_table', '1');
INSERT INTO `migrations` VALUES ('2015_11_09_205716_create_courses_table', '1');

-- ----------------------------
-- Table structure for next_of_kin_details
-- ----------------------------
DROP TABLE IF EXISTS `next_of_kin_details`;
CREATE TABLE `next_of_kin_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `relationship_id` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of next_of_kin_details
-- ----------------------------
INSERT INTO `next_of_kin_details` VALUES ('1', '1', 'John', 'Bennet', '', '08059443154', '5', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas');

-- ----------------------------
-- Table structure for olevel_exams
-- ----------------------------
DROP TABLE IF EXISTS `olevel_exams`;
CREATE TABLE `olevel_exams` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of olevel_exams
-- ----------------------------
INSERT INTO `olevel_exams` VALUES ('1', '1', '23', '3');
INSERT INTO `olevel_exams` VALUES ('3', '1', '16', '7');

-- ----------------------------
-- Table structure for olevel_results
-- ----------------------------
DROP TABLE IF EXISTS `olevel_results`;
CREATE TABLE `olevel_results` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ssce_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `number_of_sitting` int(11) NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam_type_id` int(11) NOT NULL,
  `exam_year` int(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of olevel_results
-- ----------------------------
INSERT INTO `olevel_results` VALUES ('1', '1', '1', '1', 'Some Primary School', '1', '2016', '2015-11-24 22:32:58', '2015-11-29 23:07:25');

-- ----------------------------
-- Table structure for olevel_subjects
-- ----------------------------
DROP TABLE IF EXISTS `olevel_subjects`;
CREATE TABLE `olevel_subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of olevel_subjects
-- ----------------------------
INSERT INTO `olevel_subjects` VALUES ('1', 'Agricultural Science');
INSERT INTO `olevel_subjects` VALUES ('2', 'Animal Husbandry');
INSERT INTO `olevel_subjects` VALUES ('3', 'Applied Electricity');
INSERT INTO `olevel_subjects` VALUES ('4', 'Auto Electrical Work');
INSERT INTO `olevel_subjects` VALUES ('5', 'Auto Mechanical Work');
INSERT INTO `olevel_subjects` VALUES ('6', 'Auto Mechanics');
INSERT INTO `olevel_subjects` VALUES ('7', 'Biology');
INSERT INTO `olevel_subjects` VALUES ('8', 'Book Keeping');
INSERT INTO `olevel_subjects` VALUES ('9', 'Building Construction');
INSERT INTO `olevel_subjects` VALUES ('10', 'Business Management');
INSERT INTO `olevel_subjects` VALUES ('11', 'Catering Craft Practice');
INSERT INTO `olevel_subjects` VALUES ('12', 'Chemistry');
INSERT INTO `olevel_subjects` VALUES ('13', 'Christian Religious Studies');
INSERT INTO `olevel_subjects` VALUES ('14', 'Civic Education');
INSERT INTO `olevel_subjects` VALUES ('15', 'Commerce');
INSERT INTO `olevel_subjects` VALUES ('16', 'Computer Studies');
INSERT INTO `olevel_subjects` VALUES ('17', 'Cosmetology');
INSERT INTO `olevel_subjects` VALUES ('18', 'Data Processing');
INSERT INTO `olevel_subjects` VALUES ('19', 'Dyeing & Bleaching');
INSERT INTO `olevel_subjects` VALUES ('20', 'Economics');
INSERT INTO `olevel_subjects` VALUES ('21', 'Electrical Installation & Maintenance Work');
INSERT INTO `olevel_subjects` VALUES ('22', 'Electronics');
INSERT INTO `olevel_subjects` VALUES ('23', 'English Language');
INSERT INTO `olevel_subjects` VALUES ('24', 'Financial Accounts');
INSERT INTO `olevel_subjects` VALUES ('25', 'Fisheries');
INSERT INTO `olevel_subjects` VALUES ('26', 'Foods & Nutrition');
INSERT INTO `olevel_subjects` VALUES ('27', 'French');
INSERT INTO `olevel_subjects` VALUES ('28', 'Further Mathematics');
INSERT INTO `olevel_subjects` VALUES ('29', 'Garment Making');
INSERT INTO `olevel_subjects` VALUES ('30', 'General Agriculture');
INSERT INTO `olevel_subjects` VALUES ('31', 'Mathematics');
INSERT INTO `olevel_subjects` VALUES ('32', 'Geography');
INSERT INTO `olevel_subjects` VALUES ('33', 'Government');
INSERT INTO `olevel_subjects` VALUES ('34', 'GSM Phones Maintenance & Repairs');
INSERT INTO `olevel_subjects` VALUES ('35', 'Hausa');
INSERT INTO `olevel_subjects` VALUES ('36', 'Health Education');
INSERT INTO `olevel_subjects` VALUES ('37', 'History');
INSERT INTO `olevel_subjects` VALUES ('38', 'Home Management');
INSERT INTO `olevel_subjects` VALUES ('39', 'Igbo');
INSERT INTO `olevel_subjects` VALUES ('40', 'Insurance');
INSERT INTO `olevel_subjects` VALUES ('41', 'Integrated Science');
INSERT INTO `olevel_subjects` VALUES ('42', 'Islamic Religious Studies');
INSERT INTO `olevel_subjects` VALUES ('43', 'Literature in English');
INSERT INTO `olevel_subjects` VALUES ('44', 'Marketing');
INSERT INTO `olevel_subjects` VALUES ('45', 'Metalwork');
INSERT INTO `olevel_subjects` VALUES ('46', 'Music');
INSERT INTO `olevel_subjects` VALUES ('47', 'Office Practice');
INSERT INTO `olevel_subjects` VALUES ('48', 'Painting & Decorating');
INSERT INTO `olevel_subjects` VALUES ('49', 'Photography');
INSERT INTO `olevel_subjects` VALUES ('50', 'Physical Education');
INSERT INTO `olevel_subjects` VALUES ('51', 'Physics');
INSERT INTO `olevel_subjects` VALUES ('52', 'Principles of Cost Accounting');
INSERT INTO `olevel_subjects` VALUES ('53', 'Printing Craft Practice');
INSERT INTO `olevel_subjects` VALUES ('54', 'Social Studies');
INSERT INTO `olevel_subjects` VALUES ('55', 'Store Management');
INSERT INTO `olevel_subjects` VALUES ('56', 'Technical Drawing');
INSERT INTO `olevel_subjects` VALUES ('57', 'Textiles');
INSERT INTO `olevel_subjects` VALUES ('58', 'Tourism');
INSERT INTO `olevel_subjects` VALUES ('59', 'Visual Art');
INSERT INTO `olevel_subjects` VALUES ('60', 'West African Traditional Religion');
INSERT INTO `olevel_subjects` VALUES ('61', 'Woodwork');
INSERT INTO `olevel_subjects` VALUES ('62', 'Yoruba');
INSERT INTO `olevel_subjects` VALUES ('63', 'Arabic');

-- ----------------------------
-- Table structure for personal_details
-- ----------------------------
DROP TABLE IF EXISTS `personal_details`;
CREATE TABLE `personal_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ms_id` int(11) NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `lga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_town` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact_address` text COLLATE utf8_unicode_ci NOT NULL,
  `contact_country_id` int(11) NOT NULL,
  `contact_state_id` int(11) NOT NULL,
  `contact_lga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `town_city` text COLLATE utf8_unicode_ci NOT NULL,
  `passport_photo_path` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of personal_details
-- ----------------------------
INSERT INTO `personal_details` VALUES ('1', '1', 'Mfawa', 'Alfred', 'Onen', '2000-02-12', 'Waka Biu', '1', '1', '08059443154', '118', '9', 'Yakurr', 'Ugep', 'muffycompoqm@gmail.com', 'Somewhere in Cross River', '118', '9', 'Yakurr', 'Somewhere', '/uploads/passports/muffy_1.jpg', '2015-11-19 15:17:26', '2015-12-01 10:07:15');

-- ----------------------------
-- Table structure for pins
-- ----------------------------
DROP TABLE IF EXISTS `pins`;
CREATE TABLE `pins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pincode` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of pins
-- ----------------------------
INSERT INTO `pins` VALUES ('1', 'muffy', '1111', '1');
INSERT INTO `pins` VALUES ('2', null, '2222', '0');
INSERT INTO `pins` VALUES ('3', null, '3333', '0');
INSERT INTO `pins` VALUES ('4', null, '4444', '0');

-- ----------------------------
-- Table structure for programmes
-- ----------------------------
DROP TABLE IF EXISTS `programmes`;
CREATE TABLE `programmes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `programme_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `programme_of_study` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mode_of_study` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of programmes
-- ----------------------------
INSERT INTO `programmes` VALUES ('1', '1', '2', '20', '1');

-- ----------------------------
-- Table structure for qualifications
-- ----------------------------
DROP TABLE IF EXISTS `qualifications`;
CREATE TABLE `qualifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qualification_date` int(4) NOT NULL,
  `grade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of qualifications
-- ----------------------------
INSERT INTO `qualifications` VALUES ('3', '1', 'B.Eng', 'Electrical & Electronics Engineering', 'University Of Maiduguri', '2001', 'Second Class Upper', '2015-11-30 00:25:19', '2015-11-30 00:25:19');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Student');
INSERT INTO `roles` VALUES ('2', 'Administrator');

-- ----------------------------
-- Table structure for states
-- ----------------------------
DROP TABLE IF EXISTS `states`;
CREATE TABLE `states` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `state_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of states
-- ----------------------------
INSERT INTO `states` VALUES ('1', 'Abia');
INSERT INTO `states` VALUES ('2', 'Adamawa');
INSERT INTO `states` VALUES ('3', 'Akwa-Ibom');
INSERT INTO `states` VALUES ('4', 'Anambra');
INSERT INTO `states` VALUES ('5', 'Bauchi');
INSERT INTO `states` VALUES ('6', 'Bayelsa');
INSERT INTO `states` VALUES ('7', 'Benue');
INSERT INTO `states` VALUES ('8', 'Borno');
INSERT INTO `states` VALUES ('9', 'Cross River');
INSERT INTO `states` VALUES ('10', 'Delta');
INSERT INTO `states` VALUES ('11', 'Ebonyi');
INSERT INTO `states` VALUES ('12', 'Edo');
INSERT INTO `states` VALUES ('13', 'Ekiti');
INSERT INTO `states` VALUES ('14', 'Enugu');
INSERT INTO `states` VALUES ('15', 'Gombe');
INSERT INTO `states` VALUES ('16', 'Imo');
INSERT INTO `states` VALUES ('17', 'Jigawa');
INSERT INTO `states` VALUES ('18', 'Kaduna');
INSERT INTO `states` VALUES ('19', 'Kano');
INSERT INTO `states` VALUES ('20', 'Katsina');
INSERT INTO `states` VALUES ('21', 'Kebbi');
INSERT INTO `states` VALUES ('22', 'Kogi');
INSERT INTO `states` VALUES ('23', 'Kwara');
INSERT INTO `states` VALUES ('24', 'Lagos');
INSERT INTO `states` VALUES ('25', 'Nasarawa');
INSERT INTO `states` VALUES ('26', 'Niger');
INSERT INTO `states` VALUES ('27', 'Ogun');
INSERT INTO `states` VALUES ('28', 'Ondo');
INSERT INTO `states` VALUES ('29', 'Osun');
INSERT INTO `states` VALUES ('30', 'Oyo');
INSERT INTO `states` VALUES ('31', 'Plateau');
INSERT INTO `states` VALUES ('32', 'Rivers');
INSERT INTO `states` VALUES ('33', 'Sokoto');
INSERT INTO `states` VALUES ('34', 'Taraba');
INSERT INTO `states` VALUES ('35', 'Yobe');
INSERT INTO `states` VALUES ('36', 'Zamfara');
INSERT INTO `states` VALUES ('37', 'FCT');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `password_reset_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'muffy', '$2y$10$JITOkp6cmWsj7BIlPHbGX.IH6zLT6.hvvzMn7SpclsF1wjnwYuR76', 'Mfawa', 'Onen', 'wfxVdKwNnNvnziNdmcD77dXTv9yKGOc3RwKgiPYMMYtgCjR15P5kN2L4gFgT', '1', 'w7gMweJEJrOWkha409TI', '2015-11-19 15:17:26', '2015-12-04 15:45:30');
