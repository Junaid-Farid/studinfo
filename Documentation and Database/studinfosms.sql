-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 25, 2015 at 10:45 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studinfosms`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_box`
--

CREATE TABLE IF NOT EXISTS `chat_box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(60) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `chat_box`
--


-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `description`, `dept_id`) VALUES
(2, 'BSCS', 'Bachelor of Science in Computer Science', 0),
(3, 'Mcs', 'Master of Computer Science', 0),
(4, 'MSCS', 'MS in Computer Science', 0),
(5, 'Msc Physics', 'Master in Physics', 0),
(6, 'Msc Chemistry', 'Master in Chemistry', 0),
(9, 'BSTelecom', 'Bechelor of science in Telecom', 0),
(10, 'PGD', '<p>PGD offer in computer science department</p>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `day`
--

CREATE TABLE IF NOT EXISTS `day` (
  `day_id` int(10) NOT NULL AUTO_INCREMENT,
  `day_name` varchar(200) NOT NULL,
  PRIMARY KEY (`day_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `day`
--

INSERT INTO `day` (`day_id`, `day_name`) VALUES
(1, 'Monday'),
(2, 'Tuesday'),
(3, 'Wednesday'),
(4, 'Thursday'),
(5, 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(30) NOT NULL,
  `dept_description` varchar(256) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_description`) VALUES
(1, 'Department of CS and I.T', 'Department of Computer Science and Information Technology, Master in computer Science, PGD'),
(2, 'Department of Physics', 'Department of Physics (Atomic, thermodynamic etc)'),
(4, 'Department of Education', '<p>Health and Physical Education, Women Education etc</p>\r\n'),
(5, 'Department of Telecom', '<p>Department of Telecommunication, The World Of Telecommuniction</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(100) NOT NULL AUTO_INCREMENT,
  `file_title` varchar(200) NOT NULL,
  `file_name` varchar(70) NOT NULL,
  `file_type` varchar(30) NOT NULL,
  `file_size` bigint(20) NOT NULL,
  `file_description` text NOT NULL,
  `file_date` datetime NOT NULL,
  `file_by` varchar(200) NOT NULL,
  `file_for` varchar(200) NOT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_title`, `file_name`, `file_type`, `file_size`, `file_description`, `file_date`, `file_by`, `file_for`) VALUES
(7, 'CVssss', '87616-Junaid_AhmedCV.pdf', 'application/pdf', 110357, '<p>sadfasdfdsfaf</p>\r\n', '2015-08-18 22:57:15', 'Meee', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE IF NOT EXISTS `grades` (
  `grades_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_id` int(11) NOT NULL,
  `subj_code` int(11) NOT NULL,
  `grades` int(11) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `semester` varchar(11) NOT NULL,
  `yr` int(5) NOT NULL,
  `CA` float DEFAULT NULL,
  `LA` float DEFAULT NULL,
  PRIMARY KEY (`grades_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grades_id`, `s_id`, `subj_code`, `grades`, `sy`, `semester`, `yr`, `CA`, `LA`) VALUES
(26, 2224, 5, 90, '', '8th', 1, 30, 60),
(23, 20002048, 1, 89, '', '20002048', 1, 29, 60),
(25, 20002048, 3, 77, '', '20002048', 1, 27, 50),
(27, 234234324, 1, 0, '', 'First', 1, NULL, NULL),
(28, 234234324, 2, 0, '', 'First', 1, NULL, NULL),
(29, 234234324, 3, 0, '', 'First', 1, NULL, NULL),
(30, 20002048, 3, 0, '', 'First', 1, NULL, NULL),
(31, 20002048, 7, 82, '', 'First', 1, 26, 56),
(32, 0, 39, 0, '', 'First', 2, NULL, NULL),
(34, 0, 39, 0, '', 'First', 2, NULL, NULL),
(35, 20002048, 39, 84, '', 'First', 2, 26, 58),
(36, 20002048, 40, 0, '', 'Second', 2, NULL, NULL),
(37, 20002048, 45, 0, '', 'Second', 3, NULL, NULL),
(38, 20002048, 44, 0, '', 'Second', 3, NULL, NULL),
(39, 1546, 0, 0, '2012-2016', 'Second ', 2, NULL, NULL),
(40, 1546, 47, 43, '2012-2016', 'Second ', 2, NULL, NULL),
(41, 1546, 48, 76, '2012-2016', 'Second ', 2, NULL, NULL),
(42, 1546, 3333, 78, '2012-2016', 'Second ', 2, NULL, NULL),
(43, 1546, 3334, 98, '2012-2016', 'Second ', 2, NULL, NULL),
(44, 2221, 0, 67, '2011-2015', 'Eighth ', 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `instruct_primary` int(11) NOT NULL AUTO_INCREMENT,
  `instruc_id` int(25) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `email_add` varchar(255) DEFAULT NULL,
  `instruct_contact` varchar(20) NOT NULL,
  `instruct_password` varchar(30) NOT NULL,
  `dept_id` int(11) NOT NULL,
  PRIMARY KEY (`instruct_primary`),
  UNIQUE KEY `instruc_id` (`instruc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instruct_primary`, `instruc_id`, `name`, `address`, `sex`, `email_add`, `instruct_contact`, `instruct_password`, `dept_id`) VALUES
(11, 123, 'Mujtaba Husnain', '<p>Pakistan</p>\r\n', 'Male', 'husnain@gmail.com', '03467403120', 'pakistan', 1),
(12, 12, 'Muhammad Ateeq', '<p>Pakistan Punjab</p>\r\n', 'Male', 'ateeq@gmail.com', '03318962607', 'pakistan', 1),
(9, 1233, 'Muhammad Imran', '<p>Pakistan</p>\r\n', 'Male', 'imran@gmail.com', '03027386756', 'khann', 1),
(8, 1245, 'Nadeem', '<p>Taunsa Sharif</p>\r\n', 'Male', 'nadeem@gmail.com', '03467403120', 'khann', 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor_sub`
--

CREATE TABLE IF NOT EXISTS `instructor_sub` (
  `instruc_id` int(11) DEFAULT NULL,
  `subj_code` int(11) DEFAULT NULL,
  `time` text,
  `day` text,
  `status` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `instructor_sub`
--

INSERT INTO `instructor_sub` (`instruc_id`, `subj_code`, `time`, `day`, `status`, `id`) VALUES
(1234, 304, '11:30', 'Thursday', 'added', 28),
(12321321, 1, '8:30-9:30am', 'Satureday', 'added', 5),
(12321321, 2, '7:30-8:30am', 'Monday', 'added', 6),
(12321321, 3, '7:30-8:30am', 'Tuesday', 'added', 7);

-- --------------------------------------------------------

--
-- Table structure for table `ozekimessagein`
--

CREATE TABLE IF NOT EXISTS `ozekimessagein` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `senttime` date NOT NULL,
  `receivedtime` date NOT NULL,
  `operator` varchar(30) NOT NULL,
  `msgtype` varchar(30) NOT NULL,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `ozekimessagein`
--


-- --------------------------------------------------------

--
-- Table structure for table `ozekimessageout`
--

CREATE TABLE IF NOT EXISTS `ozekimessageout` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(30) NOT NULL,
  `receiver` varchar(30) NOT NULL,
  `senttime` date NOT NULL,
  `receivedtime` date NOT NULL,
  `operator` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `msgtype` varchar(30) NOT NULL,
  `msg` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ozekimessageout`
--

INSERT INTO `ozekimessageout` (`id`, `sender`, `receiver`, `senttime`, `receivedtime`, `operator`, `status`, `msgtype`, `msg`) VALUES
(1, '', '09108610978', '0000-00-00', '0000-00-00', '', 'send', 'SMS:TEXT', '  from: School registrar'),
(2, '', '03467403120;							', '0000-00-00', '0000-00-00', '', 'send', 'SMS:TEXT', '2015/07/09 :: Great	\r\n								From :: SSG\r\n							'),
(3, '', '03318962610;03467403120;031374', '0000-00-00', '0000-00-00', '', 'send', 'SMS:TEXT', '2015/08/13 :: Pakistan Day	\r\n								From :: SSG\r\n'),
(4, '', '03318962610;03467403120;031374', '0000-00-00', '0000-00-00', '', 'send', 'SMS:TEXT', '2015/08/13 :: Pakistan Day	\r\n								From :: SSG\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` varchar(200) NOT NULL,
  `room_desc` varchar(200) NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_name`, `room_desc`) VALUES
(3, 'DCS 103', 'Linux Labss\r\n'),
(4, 'DCS 104', 'Unix Lab'),
(5, '27', '<p>Windows Lab</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE IF NOT EXISTS `schedule` (
  `schedule_id` int(10) NOT NULL AUTO_INCREMENT,
  `room_id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `instruct_id` int(10) NOT NULL,
  `time_s` text NOT NULL,
  `time_e` text NOT NULL,
  `day_id` int(10) NOT NULL,
  `semester_id` int(10) NOT NULL,
  `session_id` int(10) NOT NULL,
  `dept_id` int(10) NOT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `room_id`, `course_id`, `subject_id`, `instruct_id`, `time_s`, `time_e`, `day_id`, `semester_id`, `session_id`, `dept_id`) VALUES
(1, 3, 1, 1, 1, '8:00 AM', '6:00 AM', 1, 1, 2, 1),
(2, 3, 1, 1, 1, '8:00 AM', '6:00 AM', 1, 1, 2, 1),
(3, 3, 1, 1, 1, '8:00 AM', '6:00 AM', 1, 1, 2, 1),
(4, 3, 1, 1, 1, '8:00 AM', '6:00 AM', 1, 1, 2, 1),
(5, 4, 5, 47, 4, '5:00 AM', '6:00 AM', 4, 4, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `schoolcal`
--

CREATE TABLE IF NOT EXISTS `schoolcal` (
  `cal_id` int(11) NOT NULL AUTO_INCREMENT,
  `cal_date` varchar(30) NOT NULL,
  `event` varchar(256) NOT NULL,
  `event_description` text NOT NULL,
  `semester` varchar(30) NOT NULL,
  `cal_dept_id` int(11) NOT NULL,
  `cal_course_id` int(11) NOT NULL,
  PRIMARY KEY (`cal_id`),
  UNIQUE KEY `cal_id` (`cal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `schoolcal`
--

INSERT INTO `schoolcal` (`cal_id`, `cal_date`, `event`, `event_description`, `semester`, `cal_dept_id`, `cal_course_id`) VALUES
(2, '2015/09/15', 'Earth Day', '', 'First', 0, 0),
(3, '2015/08/30', 'University Gala', '', 'First', 0, 0),
(12, '2015/08/21', 'Sports Gala', '', 'Seventh ', 0, 0),
(13, '2015/08/14', 'Pakistan Independence day...', '', 'Third ', 2, 3),
(14, '2015/08/18', 'New Openning cermony', '', 'Seventh ', 4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(30) NOT NULL AUTO_INCREMENT,
  `semester` varchar(200) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `semester`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Third'),
(4, 'Fourth'),
(5, 'Fifth'),
(6, 'Sixth'),
(7, 'Seventh'),
(8, 'Eighth');

-- --------------------------------------------------------

--
-- Table structure for table `std_session`
--

CREATE TABLE IF NOT EXISTS `std_session` (
  `std_sessioin_id` int(11) NOT NULL AUTO_INCREMENT,
  `std_session_start` date NOT NULL,
  `std_session_end` date NOT NULL,
  `session_id` int(11) NOT NULL,
  PRIMARY KEY (`std_sessioin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `std_session`
--

INSERT INTO `std_session` (`std_sessioin_id`, `std_session_start`, `std_session_end`, `session_id`) VALUES
(2, '2016-02-05', '2020-08-07', 33333),
(3, '2015-09-07', '2019-09-07', 215);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_lname` varchar(255) DEFAULT NULL,
  `s_mname` varchar(30) DEFAULT NULL,
  `s_address` varchar(30) NOT NULL,
  `s_age` int(11) NOT NULL,
  `s_bday` varchar(30) NOT NULL,
  `s_bplace` varchar(30) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `s_status` varchar(30) NOT NULL,
  `s_contact` varchar(30) NOT NULL,
  `s_email` varchar(40) NOT NULL,
  `s_password` varchar(15) NOT NULL,
  `s_guardian` varchar(30) NOT NULL,
  `s_g_email` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `s_guardian_add` varchar(40) NOT NULL,
  `s_guardian_contact` varchar(30) NOT NULL,
  `sy` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(5) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3478 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_lname`, `s_mname`, `s_address`, `s_age`, `s_bday`, `s_bplace`, `sex`, `s_status`, `s_contact`, `s_email`, `s_password`, `s_guardian`, `s_g_email`, `course_id`, `s_guardian_add`, `s_guardian_contact`, `sy`, `semester`, `dept_id`, `key`, `yr`) VALUES
(1546, 'Muhammad Imran', NULL, NULL, 'Hero', 22, '1993/01/04', 'hero', 'Male', 'Single', '03318962610', 'junaid.ahmed.infome@gmail.com', '', 'Ramzan', 'junaid.ahmed.infome@gmail.com', 5, 'Taunsa', '03027386755', '2012-2016', 'Second ', 0, 106, 2),
(1767, 'Junaid khan', NULL, NULL, 'Taunsa', 22, '1994/01/04', 'Liaqatpur', 'Male', 'Single', '03467403120', 'junaid.ahmed.infome@gmail.com', '', 'Ramzan', '', 6, 'Taunsa', '03437114050', '2011-2015', 'Eighth ', 0, 107, 2),
(2224, 'Musagar', NULL, NULL, 'Liaqatpur', 22, '1993/01/04', 'Liaqatpur', 'Male', 'Single', '03137403120', 'attiquetaunsvi1@gmail.com', '', 'Joya', '', 1, 'Liaqatpur', '03377386755', '2011-2015', 'Eighth ', 0, 105, 4),
(2223, 'Yousaf', NULL, NULL, 'Feroza', 22, '1993/02/04', 'Feroza', 'Male', 'Single', '03237403120', 'attique_taunsvi@ymail.com', '', 'Bhati', '', 1, 'Feroza', '03237386755', '2011-2015', 'Eighth ', 0, 104, 4),
(2222, 'Aneela', NULL, NULL, 'Basti Buzdar', 19, '1995/01/09', 'Basti Buzdar', 'Male', 'Single', '03467403120', 'ik0983300@gmail.com', '', 'Khalid', '', 1, 'Basti Buzdar', '03318962607', '2012-2016', 'Second ', 0, 103, 1),
(1129, 'Hina', NULL, NULL, 'Sahiwal', 20, '1994/01/04', 'Sahiwal', 'Male', 'Single', '03027386756', 'attique@gmail.com', '', 'Khan', '', 1, 'Sahiwal', '03237114053', '2011-2015', 'Eighth ', 0, 101, 4),
(2221, 'Sana', NULL, NULL, 'Liaqatpur', 21, '1994/01/04', 'Liaqatpur', 'Male', 'Single', '03348962607', 'attiquetaunsvi@gmail.com', '', 'Hafeez', '', 1, 'Liaqatpur', '03047386755', '2011-2015', 'Eighth ', 0, 102, 4),
(1128, 'Rashid', NULL, NULL, 'Feroza', 22, '1993/01/02', 'Feroza', 'Male', 'Single', '03318962609', 'muhammadattique3120@gmail.com', '', 'Jam', '', 1, 'Feroza', '03227114050', '2011-2015', 'Eighth ', 0, 100, 4),
(1127, 'Faisal', NULL, NULL, 'Koro', 23, '1992/01/04', 'Koro', 'Male', 'Single', '03427403120', 'muhammadattique2607@gmail.com', '', 'Haq', '', 2, 'Koro', '03037386755', '2013-2017', 'Fourth ', 0, 99, 2),
(1126, 'Zia', NULL, NULL, 'Tuman Buzdar', 22, '1992/01/09', 'Tuman Buzdar', 'Male', 'Single', '03457403120', 'attiquetaunsvi1@gmail.com', '', 'Thingani', '', 2, 'Tuman Buzdar', '03217114053', '2012-2016', 'Sixth ', 0, 98, 3),
(1125, 'Imran', NULL, NULL, 'Hairo', 21, '1994/01/04', 'Hairo', 'Male', 'Single', '03318962608', 'junaid.ahemd.infome@gmail.com', '', 'Ramzan', '', 2, 'Hairo', '03437114051', '2012-2016', 'Sixth ', 0, 97, 3),
(1124, 'Aqib', NULL, NULL, 'Taunsa', 20, '1995/01/04', 'Taunsa', '', 'Single', '03318962607', 'jawaid@gmail.com', '', 'Jawaid', '', 1, 'Taunsa', '03467403120', '2014-2018', 'First', 0, 96, 1),
(1123, 'Junaid', NULL, NULL, 'Chani goth', 22, '1993/01/05', 'Chani goth', 'Male', 'Single', '03027386755', 'ramzan@gmail.com', '', 'Ghulam Farid', '', 1, 'Chani goth', '03027386755', '2011-2015', 'Eighth ', 0, 95, 4),
(1122, 'Atiq', NULL, NULL, 'Taunsa Sharif', 22, '1993/01/04', 'Mangrotha', 'Male', 'Single', '03467403120', 'pakistan@gmail.com', '', 'Ramzan', '', 1, 'Taunsa', '03437114050', '2011-2015', 'Eighth ', 0, 94, 4),
(22267, 'Muhammad Imran', NULL, NULL, 'Taunsa', 22, '2015/08/03', 'Feroza', 'Male', 'Single', '03467403120', 'attiquetaunsve@gmail.com', 'khann', 'Ramzan', 'junaid.ahmed.infome@gmail.com', 1, 'Hairo', '03027386755', '2011-2015', 'First', 0, 108, 1),
(22290, 'Muhammad Imran', NULL, NULL, 'Taunsa', 22, '1993/01/04', 'Feroza', 'Male', 'Marriage', '03467403120', 'attiquetaunsvi@gmail.com', 'khann', 'Ramzan', 'attiquetaunsvi1@gmail.com', 1, 'Tuman Buzdar', '03437114050', '2011-2015', 'First', 0, 109, 1),
(123424, 'Junaid', NULL, NULL, 'Liaqatpur', 21, '1993/01/04', 'Liaqatpur', 'Male', 'Marriage', '03467403120', 'junaid.ahmed.infome@gmail.com', 'khann', 'Ramzan', 'attiquetaunsvsdi@gmail.com', 5, 'Hairo', '03437114050', '2011-2015', 'Eighth ', 0, 110, 4),
(35355, 'Junaiad', 'Ahmad', 'Junaid', 'chani goth', 22, '1993/04/05', 'chani goth', 'Male', 'Single', '03333454354', 'waqar@gmail.com', 'sakjfhs', 'jsafh', 'hbh', 23232, 'sfjfksfk', '00302430', 'xknfvjd', '8th', 2223, 343, 1),
(353585, 'Junaiad', 'Ahmad', 'Junaid', 'chani goth', 22, '1993/04/05', 'chani goth', 'Male', 'Single', '03333454354', 'zia@gmail.com', 'sakjfhs', 'jsafh', 'hbh', 23232, 'sfjfksfk', '00302430', 'xknfvjd', '8th', 2223, 3476, 1),
(0, 'Muhammad Attique', NULL, NULL, '<p>Janubi Punjab Pakistan</p>\r', 22, '1993/08/26', 'Taunsa Sharif', 'Male', 'Single', '03318962611', 'muhammadattique260@gmail.com', '', 'M.Ramzan', 'ramzan@gmail.com', 9, '<p>Pakistan</p>\r\n', '03437114050', '', 'Fourth ', 0, 3477, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_other_info`
--

CREATE TABLE IF NOT EXISTS `student_other_info` (
  `s_id` int(11) NOT NULL,
  `s_nationality` varchar(40) NOT NULL,
  `s_repeater` varchar(30) NOT NULL,
  `s_residence` varchar(30) NOT NULL,
  `s_field_study` varchar(255) NOT NULL,
  `s_level_study` varchar(255) NOT NULL,
  `s_AL_points` int(11) NOT NULL,
  `s_yr_obtained` int(255) NOT NULL,
  `s_place` varchar(255) NOT NULL,
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(5) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_other_info`
--

INSERT INTO `student_other_info` (`s_id`, `s_nationality`, `s_repeater`, `s_residence`, `s_field_study`, `s_level_study`, `s_AL_points`, `s_yr_obtained`, `s_place`, `key`, `yr`) VALUES
(0, '', '', '', '', '', 0, 0, '', 2, 0),
(20004281, '', '', '', '', '', 0, 0, '', 3, 0),
(2147483647, 'ns', 'no', 'rs', 'fs', 'ls', 11, 21, 'ps', 4, 4),
(234234324, 'sdsdsd', 'no', 'sd', 'sd', 'sd', 23, 0, 'sd', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_school_attend`
--

CREATE TABLE IF NOT EXISTS `student_school_attend` (
  `s_id` int(11) NOT NULL,
  `s_primary` varchar(255) DEFAULT NULL,
  `s_secondary` varchar(255) DEFAULT NULL,
  `s_high` varchar(255) DEFAULT NULL,
  `s_university` varchar(255) DEFAULT NULL,
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(5) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `student_school_attend`
--

INSERT INTO `student_school_attend` (`s_id`, `s_primary`, `s_secondary`, `s_high`, `s_university`, `key`, `yr`) VALUES
(0, '', '', '', '', 2, 0),
(20004281, '', '', '', '', 3, 0),
(2147483647, 'ps', 'ss', 'hs', 'us', 4, 4),
(234234324, 'sdsd', 'sd', 'sd', 'sd', 6, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `stud_course`
--
CREATE TABLE IF NOT EXISTS `stud_course` (
`s_id` int(11)
,`s_name` varchar(40)
,`s_address` varchar(30)
,`s_age` int(11)
,`s_bday` varchar(30)
,`s_bplace` varchar(30)
,`sex` varchar(30)
,`s_status` varchar(30)
,`s_contact` varchar(30)
,`s_guardian` varchar(30)
,`course_name` varchar(30)
,`s_guardian_add` varchar(40)
,`s_guardian_contact` varchar(30)
,`sy` varchar(20)
,`semester` varchar(20)
,`key` int(11)
,`yr` int(5)
,`course_id` int(11)
);
-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subj_id` int(11) NOT NULL AUTO_INCREMENT,
  `subj_code` int(11) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `unit` int(11) NOT NULL,
  `yr` int(5) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `pre` varchar(30) NOT NULL,
  PRIMARY KEY (`subj_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subj_id`, `subj_code`, `subject`, `description`, `unit`, `yr`, `semester`, `course_id`, `pre`) VALUES
(1, 0, 'Data Communication', 'Data Communication', 3, 1, 'First', 1, 'None'),
(2, 0, 'Communication Skills', 'Communication Skills', 3, 1, 'Second ', 2, 'None'),
(3, 0, 'Programming', 'C++ Programming', 3, 1, 'Second ', 1, 'None'),
(5, 0, 'Algebra', 'Mathematics ', 3, 1, 'First', 4, 'None'),
(7, 0, 'Calculus', 'Mathematics ', 3, 1, 'First', 2, 'None'),
(8, 0, 'Automata', 'Atomata description', 3, 1, 'First', 1, 'None'),
(10, 0, 'Educ 01', 'Strategies of Teaching', 3, 1, 'First', 3, 'None'),
(11, 0, 'Educ 02', 'Principles of teaching', 3, 1, 'First', 3, 'None'),
(17, 0, 'COMP1', 'Computer 1', 3, 1, 'First', 1, 'None'),
(18, 0, 'COMP2', 'Computer 2', 3, 1, 'Second ', 1, 'COMP1'),
(19, 0, 'ComOrg', 'Computer Organization', 3, 1, 'First', 1, 'COMP1'),
(24, 0, 'DBMS', 'Database Management System', 3, 2, 'Second ', 1, 'None'),
(25, 0, 'DBMS II', 'Database Management System II', 3, 3, 'First', 1, 'DBMS'),
(27, 0, 'OOP', 'Object Oriented Programming', 3, 2, 'First', 1, 'None'),
(39, 0, 'Multi', 'Multimedia1', 3, 2, 'First', 1, ''),
(45, 0, 'SAD', 'System Analysis And Design', 3, 3, 'First', 1, 'None'),
(44, 0, 'SoftEng', 'Software Engineering', 3, 3, 'Second', 1, 'SAD'),
(46, 0, '3212', 'Physical Physics', 3, 2, 'Second ', 5, 'Automata'),
(47, 3333, 'Dynamic Physics', 'Dynamic Physics for the Ph', 3, 2, 'Second ', 5, 'COMP2'),
(48, 3334, 'Quantum mechanics', 'treating atomic and subatomic ', 4, 2, 'Second ', 5, 'DBMS II'),
(49, 0, 'Computer Science', 'Computer Science for fist year', 0, 1, 'First', 2, 'Educ 02'),
(50, 0, 'Computition', 'Theory', 0, 1, 'Second ', 4, 'None'),
(51, 986867579, 'Pjhjhfg', 'jkgjk', 0, 1, 'First', 2, 'None');

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE IF NOT EXISTS `time` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `time`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_name` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `u_pass` varchar(60) NOT NULL,
  `utype` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123456785 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `users_name`, `uname`, `u_pass`, `utype`) VALUES
(1234567, 'Muhammad Attique', 'attique', 'c92e8831ed99b9d66cb3fbf11e4d50f4074e1f8b', 'Teacher'),
(6, 'Attique khan', 'admin', 'fa3bb893cc31e191988f3ce5e22dc23e6441fe03', 'Administrator'),
(123456783, 'Muhammad Attique', 'atiq', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Administrator'),
(123456784, 'Junaid', 'junaid', '8cb2237d0679ca88db6464eac60da96345513964', 'Teacher');

-- --------------------------------------------------------

--
-- Structure for view `stud_course`
--
DROP TABLE IF EXISTS `stud_course`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stud_course` AS select `student`.`s_id` AS `s_id`,`student`.`s_name` AS `s_name`,`student`.`s_address` AS `s_address`,`student`.`s_age` AS `s_age`,`student`.`s_bday` AS `s_bday`,`student`.`s_bplace` AS `s_bplace`,`student`.`sex` AS `sex`,`student`.`s_status` AS `s_status`,`student`.`s_contact` AS `s_contact`,`student`.`s_guardian` AS `s_guardian`,`course`.`course_name` AS `course_name`,`student`.`s_guardian_add` AS `s_guardian_add`,`student`.`s_guardian_contact` AS `s_guardian_contact`,`student`.`sy` AS `sy`,`student`.`semester` AS `semester`,`student`.`key` AS `key`,`student`.`yr` AS `yr`,`course`.`course_id` AS `course_id` from (`student` left join `course` on((`student`.`course_id` = `course`.`course_id`)));
