-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Nov 09, 2015 at 02:00 PM
-- Server version: 5.0.41
-- PHP Version: 5.2.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `coabdb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin_tbl`
-- 

CREATE TABLE `admin_tbl` (
  `id` int(11) NOT NULL auto_increment,
  `firstname` varchar(50) collate latin1_general_ci NOT NULL,
  `lastname` varchar(50) collate latin1_general_ci NOT NULL,
  `username` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(250) collate latin1_general_ci NOT NULL,
  `role` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `admin_tbl`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `admissions`
-- 

CREATE TABLE `admissions` (
  `id` int(11) NOT NULL auto_increment,
  `form_no` varchar(20) default NULL,
  `course_of_study` varchar(255) default NULL,
  `mode_of_study` varchar(255) default NULL,
  `batch` int(4) default NULL,
  `level` varchar(10) default NULL,
  `grp` varchar(20) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `admissions`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `admitted_tbl`
-- 

CREATE TABLE `admitted_tbl` (
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `fullname` varchar(50) collate latin1_general_ci NOT NULL,
  `state` varchar(30) collate latin1_general_ci NOT NULL,
  `LGA` varchar(30) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(100) collate latin1_general_ci NOT NULL,
  `choice1` varchar(100) collate latin1_general_ci NOT NULL,
  `address` varchar(240) collate latin1_general_ci NOT NULL,
  `regno` varchar(15) collate latin1_general_ci NOT NULL,
  `status` varchar(10) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `admitted_tbl`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `bs_aexamresult_tbl`
-- 

CREATE TABLE `bs_aexamresult_tbl` (
  `aid` int(11) NOT NULL auto_increment,
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `institution` varchar(200) collate latin1_general_ci NOT NULL,
  `course` varchar(100) collate latin1_general_ci NOT NULL,
  `examyear` varchar(5) collate latin1_general_ci NOT NULL,
  `grade` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `bs_aexamresult_tbl`
-- 

INSERT INTO `bs_aexamresult_tbl` VALUES (1, '0001', 'SDASD', 'AFASF', '2013', 'ASDSAD');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_employment_tbl`
-- 

CREATE TABLE `bs_employment_tbl` (
  `eid` int(11) NOT NULL auto_increment,
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `employer` varchar(100) collate latin1_general_ci NOT NULL,
  `postheld` varchar(20) collate latin1_general_ci NOT NULL,
  `yearemployed` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`eid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `bs_employment_tbl`
-- 

INSERT INTO `bs_employment_tbl` VALUES (1, '0001', 'SDFASFSA', 'ASFASFD', '2014');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_examresult_tbl`
-- 

CREATE TABLE `bs_examresult_tbl` (
  `oid` int(11) NOT NULL auto_increment,
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `examtype` varchar(10) collate latin1_general_ci NOT NULL,
  `subject` varchar(30) collate latin1_general_ci NOT NULL,
  `examyear` varchar(5) collate latin1_general_ci NOT NULL,
  `examlevel` varchar(10) collate latin1_general_ci NOT NULL,
  `grade` varchar(10) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`oid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `bs_examresult_tbl`
-- 

INSERT INTO `bs_examresult_tbl` VALUES (1, '0001', 'SSCE', 'Gen Metal Wrk', '2015', 'O Level', 'E8');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_formstbl`
-- 

CREATE TABLE `bs_formstbl` (
  `formno` varchar(20) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(50) collate latin1_general_ci NOT NULL,
  `choice1` varchar(40) collate latin1_general_ci NOT NULL,
  `choice2` varchar(40) collate latin1_general_ci NOT NULL,
  `choice3` varchar(40) collate latin1_general_ci NOT NULL,
  `fullname` varchar(60) collate latin1_general_ci NOT NULL,
  `birthdate` varchar(15) collate latin1_general_ci NOT NULL,
  `birthplace` varchar(30) collate latin1_general_ci NOT NULL,
  `hometown` varchar(20) collate latin1_general_ci NOT NULL,
  `LGA` varchar(20) collate latin1_general_ci NOT NULL,
  `state` varchar(20) collate latin1_general_ci NOT NULL,
  `nationality` varchar(20) collate latin1_general_ci NOT NULL,
  `maritalstatus` varchar(10) collate latin1_general_ci NOT NULL,
  `address` varchar(250) collate latin1_general_ci NOT NULL,
  `parentcontact` varchar(250) collate latin1_general_ci NOT NULL,
  `pbirthplace` varchar(20) collate latin1_general_ci NOT NULL,
  `plga` varchar(20) collate latin1_general_ci NOT NULL,
  `pstate` varchar(20) collate latin1_general_ci NOT NULL,
  `pincode` varchar(15) collate latin1_general_ci NOT NULL,
  `gender` varchar(10) collate latin1_general_ci NOT NULL,
  UNIQUE KEY `formno` (`formno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `bs_formstbl`
-- 

INSERT INTO `bs_formstbl` VALUES ('0001', 'Bauchi College of Agriculture', 'ND Forestry', 'ND Forestry', 'ND Forestry', 'Anne Hassan', '19-12-2000', 'deqEW', 'ASDA', 'DASD', 'Kaduna', 'Nigerian', 'Single', 'asADad', 'DFfsS', 'Dad', 'dAD', 'Yobe', '', 'Male');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_pintbl`
-- 

CREATE TABLE `bs_pintbl` (
  `pid` int(11) NOT NULL auto_increment,
  `formno` varchar(50) collate latin1_general_ci NOT NULL,
  `pincode` varchar(50) collate latin1_general_ci NOT NULL,
  `pintype` varchar(10) collate latin1_general_ci NOT NULL,
  `allocated` varchar(2) collate latin1_general_ci NOT NULL default '0',
  PRIMARY KEY  (`pid`),
  UNIQUE KEY `formno` (`formno`,`pincode`),
  KEY `allocated` (`allocated`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `bs_pintbl`
-- 

INSERT INTO `bs_pintbl` VALUES (1, '0001', '0001', '1', '1');
INSERT INTO `bs_pintbl` VALUES (2, '1111', '1111', '1', '0');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_schoolsattendedtbl`
-- 

CREATE TABLE `bs_schoolsattendedtbl` (
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `institution` varchar(200) collate latin1_general_ci NOT NULL,
  `yearfrom` varchar(5) collate latin1_general_ci NOT NULL,
  `yearto` varchar(5) collate latin1_general_ci NOT NULL,
  `sid` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `bs_schoolsattendedtbl`
-- 

INSERT INTO `bs_schoolsattendedtbl` VALUES ('0001', 'SFASD', '2012', '2015', 1);

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_school_tbl`
-- 

CREATE TABLE `bs_school_tbl` (
  `sch_id` int(11) NOT NULL auto_increment,
  `schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  `category` varchar(250) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`sch_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=22 ;

-- 
-- Dumping data for table `bs_school_tbl`
-- 

INSERT INTO `bs_school_tbl` VALUES (3, 'Department of Animal Health Technology', 'HND Animal Health Technology');
INSERT INTO `bs_school_tbl` VALUES (4, 'Department of Animal Health Technology', 'HND Animal Health Technology');
INSERT INTO `bs_school_tbl` VALUES (5, 'Department of Animal Health Technology', 'Certificate in Animal Health Technology');
INSERT INTO `bs_school_tbl` VALUES (6, 'Department of Animal Production Technology', 'HND Animal Production Technology');
INSERT INTO `bs_school_tbl` VALUES (7, 'Department of Animal Production Technology', 'ND Animal Health and Production Technology');
INSERT INTO `bs_school_tbl` VALUES (8, 'Department of Animal Production Technology', 'Certificate in Poultry Technology');
INSERT INTO `bs_school_tbl` VALUES (9, 'Department of Agricultural Extension and Management', 'HND Agricultural Extension and Management');
INSERT INTO `bs_school_tbl` VALUES (10, 'Department of Crop Production Technology', 'HND Crop Production Technology');
INSERT INTO `bs_school_tbl` VALUES (11, 'HND Crop Production Technology', 'ND Agricultural Technology');
INSERT INTO `bs_school_tbl` VALUES (12, 'HND Crop Production Technology', 'Certificate in Agricultural Technology');
INSERT INTO `bs_school_tbl` VALUES (13, 'Department of Fishery Technology', 'ND Fisheries Technology');
INSERT INTO `bs_school_tbl` VALUES (14, 'Department of Fishery Technology', 'Certificate in Fisheries Technology');
INSERT INTO `bs_school_tbl` VALUES (15, ' Department of Forestry Technology', 'ND Forestry Technology');
INSERT INTO `bs_school_tbl` VALUES (16, ' Department of Forestry Technology', 'Certificate in Forestry Technology');
INSERT INTO `bs_school_tbl` VALUES (17, 'Department of Horticulture and Landscape Technology', 'HND Horticulture and Landscape Technology');
INSERT INTO `bs_school_tbl` VALUES (18, 'Department of Horticulture and Landscape Technology', 'Certificate in Horticulture and Landscape Technology');
INSERT INTO `bs_school_tbl` VALUES (19, 'Department of Soil Science Technology', 'HND Soil Science and Technology');
INSERT INTO `bs_school_tbl` VALUES (20, 'Department of Soil Science Technology', 'Certificate in Soil and Water Conversation Technology');
INSERT INTO `bs_school_tbl` VALUES (21, 'Department of General Studies', 'Remedial Programme');

-- --------------------------------------------------------

-- 
-- Table structure for table `bs_userstbl`
-- 

CREATE TABLE `bs_userstbl` (
  `formno` varchar(10) collate latin1_general_ci NOT NULL,
  `Pincode` varchar(20) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  `telno` varchar(20) collate latin1_general_ci default NULL,
  `lastName` varchar(30) collate latin1_general_ci NOT NULL,
  `firstname` varchar(30) collate latin1_general_ci NOT NULL,
  `password` varchar(250) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  `is_complete` varchar(10) collate latin1_general_ci NOT NULL default '0',
  `is_active` int(4) NOT NULL default '1',
  `tellerno` varchar(30) collate latin1_general_ci NOT NULL,
  `bank` varchar(30) collate latin1_general_ci NOT NULL,
  `userbatch` int(4) default '0',
  `datecompleted` date NOT NULL,
  PRIMARY KEY  (`formno`),
  UNIQUE KEY `Pincode` (`Pincode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `bs_userstbl`
-- 

INSERT INTO `bs_userstbl` VALUES ('0001', '0001', 'anebjk@gmail.com', '132342135', 'Hassan', 'Anne', 'e10adc3949ba59abbe56e057f20f883e', '', '1', 6, '', 'ZENITH BANK', 1, '2015-11-04');

-- --------------------------------------------------------

-- 
-- Table structure for table `fees`
-- 

CREATE TABLE `fees` (
  `id` int(11) NOT NULL auto_increment,
  `registration_no` varchar(100) default NULL,
  `amount` float(20,0) default NULL,
  `teller_no` varchar(20) default NULL,
  `receipt_no` varchar(20) default NULL,
  `bank` varchar(255) default NULL,
  `date_of_payment` date default NULL,
  `appno` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `fees`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `ii_fees`
-- 

CREATE TABLE `ii_fees` (
  `id` int(11) NOT NULL auto_increment,
  `registration_no` varchar(100) default NULL,
  `amount` float(20,0) default NULL,
  `teller_no` varchar(20) default NULL,
  `receipt_no` varchar(20) default NULL,
  `bank` varchar(255) default NULL,
  `date_of_payment` date default NULL,
  `appno` varchar(200) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `ii_fees`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `registration_number_assignment`
-- 

CREATE TABLE `registration_number_assignment` (
  `id` int(11) NOT NULL auto_increment,
  `form_no` varchar(100) default NULL,
  `registration_no` varchar(100) default NULL,
  `date_of_issuance` date default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `registration_number_assignment`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `rg_acc_tbl`
-- 

CREATE TABLE `rg_acc_tbl` (
  `appno` varchar(10) collate latin1_general_ci NOT NULL,
  `regno` varchar(20) collate latin1_general_ci NOT NULL,
  `fullname` varchar(250) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  `department` varchar(100) collate latin1_general_ci NOT NULL,
  `choice1` varchar(250) collate latin1_general_ci NOT NULL,
  `tellerno` varchar(30) collate latin1_general_ci NOT NULL,
  `receiptno` varchar(30) collate latin1_general_ci NOT NULL,
  `amountpaid` double NOT NULL,
  `bank` varchar(20) collate latin1_general_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `rg_acc_tbl`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_biodata`
-- 

CREATE TABLE `tbl_biodata` (
  `id` int(11) NOT NULL auto_increment,
  `appno` varchar(30) NOT NULL,
  `registration_no` varchar(100) default NULL,
  `email` varchar(255) default NULL,
  `telno` varchar(20) default NULL,
  `firstname` varchar(255) default NULL,
  `lastname` varchar(255) default NULL,
  `date_of_birth` varchar(20) default NULL,
  `course_of_study` varchar(255) default NULL,
  `lga` varchar(255) default NULL,
  `state` varchar(255) default NULL,
  `nationality` varchar(255) default NULL,
  `marital_status` varchar(255) default NULL,
  `address` text,
  `mode_of_study` varchar(30) default NULL,
  `admission_batch` varchar(10) default NULL,
  `level` varchar(10) default NULL,
  `grp` varchar(20) default NULL,
  `schooltitle` varchar(255) default NULL,
  `acceptance_status` int(4) default NULL,
  `apptype` varchar(200) default NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `appno` (`appno`),
  UNIQUE KEY `appno_2` (`appno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `tbl_biodata`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_courses`
-- 

CREATE TABLE `tbl_courses` (
  `coursecode` varchar(10) collate latin1_general_ci NOT NULL,
  `coursetitle` varchar(30) collate latin1_general_ci NOT NULL,
  `creditunits` varchar(2) collate latin1_general_ci NOT NULL,
  `semester` varchar(15) collate latin1_general_ci NOT NULL,
  `lev` varchar(5) collate latin1_general_ci NOT NULL,
  `programme` varchar(250) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_courses`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_dept`
-- 

CREATE TABLE `tbl_dept` (
  `deptid_pk` varchar(10) collate latin1_general_ci NOT NULL,
  `schoolid_fk` varchar(10) collate latin1_general_ci NOT NULL,
  `dept` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`deptid_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_dept`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_personal`
-- 

CREATE TABLE `tbl_personal` (
  `RegNo` varchar(15) collate latin1_general_ci NOT NULL,
  `Fullname` varchar(30) collate latin1_general_ci NOT NULL,
  `BirthDate` varchar(15) collate latin1_general_ci NOT NULL,
  `Birthplace` varchar(20) collate latin1_general_ci default NULL,
  `Hometown` varchar(20) collate latin1_general_ci default NULL,
  `LGA` varchar(20) collate latin1_general_ci NOT NULL,
  `State` varchar(20) collate latin1_general_ci NOT NULL,
  `Address` varchar(230) collate latin1_general_ci NOT NULL,
  `Telno` varchar(15) collate latin1_general_ci NOT NULL,
  `Schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  `Department` varchar(100) collate latin1_general_ci NOT NULL,
  `Programme` varchar(250) collate latin1_general_ci NOT NULL,
  `Yearlevel` varchar(10) collate latin1_general_ci NOT NULL,
  `formno` varchar(30) collate latin1_general_ci NOT NULL,
  `Pincode` varchar(250) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_personal`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_programme`
-- 

CREATE TABLE `tbl_programme` (
  `programid_pk` varchar(10) collate latin1_general_ci NOT NULL,
  `deptid_fk` varchar(10) collate latin1_general_ci NOT NULL,
  `schoolid_fk` varchar(10) collate latin1_general_ci NOT NULL,
  `programme` varchar(250) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`programid_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_programme`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_registration`
-- 

CREATE TABLE `tbl_registration` (
  `admissionno` varchar(15) collate latin1_general_ci NOT NULL,
  `coursecode` varchar(10) collate latin1_general_ci NOT NULL,
  `coursetitle` varchar(250) collate latin1_general_ci NOT NULL,
  `creditunits` varchar(5) collate latin1_general_ci NOT NULL,
  `semester` varchar(15) collate latin1_general_ci NOT NULL,
  `lev` varchar(5) collate latin1_general_ci NOT NULL,
  `programme` varchar(250) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_registration`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_regpin`
-- 

CREATE TABLE `tbl_regpin` (
  `serial_no` varchar(200) collate latin1_general_ci NOT NULL,
  `reg_pin` varchar(200) collate latin1_general_ci NOT NULL,
  `reg_no` varchar(100) collate latin1_general_ci default NULL,
  `reg_start_date` date default NULL,
  `rg_stop_date` date default NULL,
  `rg_is_complete` int(11) default '0',
  `appno` varchar(200) collate latin1_general_ci default NULL,
  `allocated` varchar(2) collate latin1_general_ci default '0',
  UNIQUE KEY `Reg_Pin` (`reg_pin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_regpin`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_school`
-- 

CREATE TABLE `tbl_school` (
  `schooid_pk` varchar(10) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`schooid_pk`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_school`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_schoolcode`
-- 

CREATE TABLE `tbl_schoolcode` (
  `finalcode` varchar(10) collate latin1_general_ci NOT NULL,
  `schooltitle` varchar(250) collate latin1_general_ci NOT NULL,
  `department` varchar(250) collate latin1_general_ci NOT NULL,
  `programme` varchar(250) collate latin1_general_ci NOT NULL,
  `lastnumber` varchar(10) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_schoolcode`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_temp`
-- 

CREATE TABLE `tbl_temp` (
  `appno` varchar(10) collate latin1_general_ci NOT NULL,
  `fullname` varchar(50) collate latin1_general_ci NOT NULL,
  `state` varchar(30) collate latin1_general_ci NOT NULL,
  `lga` varchar(30) collate latin1_general_ci NOT NULL,
  `olevelresult` varchar(250) collate latin1_general_ci NOT NULL,
  `remark` varchar(50) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_temp`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `tbl_tempresult`
-- 

CREATE TABLE `tbl_tempresult` (
  `appno` varchar(20) collate latin1_general_ci NOT NULL,
  `rs_summary` varchar(250) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- 
-- Dumping data for table `tbl_tempresult`
-- 

