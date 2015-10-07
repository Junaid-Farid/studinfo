-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2013 at 10:24 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

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
-- Table structure for table `autonumber`
--

CREATE TABLE IF NOT EXISTS `autonumber` (
  `auto_id` int(11) NOT NULL AUTO_INCREMENT,
  `autocode` varchar(20) NOT NULL,
  `autoname` varchar(20) NOT NULL,
  `appenchar` varchar(10) NOT NULL,
  `autostart` int(11) NOT NULL,
  `autoend` int(11) NOT NULL,
  `incval` int(11) NOT NULL,
  `datecreated` date NOT NULL,
  PRIMARY KEY (`auto_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `autonumber`
--

INSERT INTO `autonumber` (`auto_id`, `autocode`, `autoname`, `appenchar`, `autostart`, `autoend`, `incval`, `datecreated`) VALUES
(1, 'asset code', 'Asset Name', 'ASC', 1, 10000, 1, '2013-06-09'),
(13, 'sd', 'sd', 'sd', 12, 1234444, 2, '2013-09-26'),
(4, 'Sponsor', 'Sponsor', 'spons', 29, 10000000, 2, '2013-06-09'),
(5, 'pers', 'Personal', 'pers', 15, 10000, 1, '2013-06-09'),
(14, 'g', 'g', 'g', 0, 0, 0, '2013-06-10'),
(7, 'Prim', 'Primary', 'bapt', 114, 10000000, 1, '2013-06-09'),
(20, 'jokenauto', 'autonum', 'abc', 101, 1000000000, 2, '2013-08-01'),
(21, 'sddfdsf', 'sdfds', 'ddff', 101, 4343, 2, '2013-09-25');

-- --------------------------------------------------------

--
-- Table structure for table `contactemergency`
--

CREATE TABLE IF NOT EXISTS `contactemergency` (
  `s_id` int(11) NOT NULL,
  `s_emerg_name` varchar(255) NOT NULL,
  `s_emerg_relation` varchar(255) NOT NULL,
  `s_emerg_add` varchar(255) NOT NULL,
  `s_emerg_tel` int(11) NOT NULL,
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(5) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contactemergency`
--

INSERT INTO `contactemergency` (`s_id`, `s_emerg_name`, `s_emerg_relation`, `s_emerg_add`, `s_emerg_tel`, `key`, `yr`) VALUES
(0, '', '', '', 0, 2, 0),
(20004281, '', '', '', 0, 3, 0),
(2147483647, 'nk', 'rk', 'ai', 1, 4, 4),
(234234324, 'sdadd', 'asdsad', 'sdsd', 0, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `course_name` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `description`) VALUES
(1, 'BSIT', 'Bachelor of Science in Information Technology'),
(2, 'BSCS', 'Bachelor of Science in Computer Science'),
(3, 'BSED', 'Bachelor of Secondary Education'),
(4, 'BEED', 'Bachelor of Elementary Education'),
(5, 'Teacher ED', 'Bachelor of Elementary Education'),
(6, 'Office Add', 'Bachelor of Office Administration'),
(9, 'BSIS', 'Info system');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(30) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'Teacher Education'),
(2, 'Industrial Technology'),
(3, 'Business Administration');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`grades_id`, `s_id`, `subj_code`, `grades`, `sy`, `semester`, `yr`, `CA`, `LA`) VALUES
(26, 20002048, 5, 90, '', '20002048', 1, 30, 60),
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
(38, 20002048, 44, 0, '', 'Second', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `grades_subj`
--
-- in use(#1356 - View 'studinfosms.grades_subj' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `grades_subj`
--
-- in use (#1356 - View 'studinfosms.grades_subj' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `guardian`
--

CREATE TABLE IF NOT EXISTS `guardian` (
  `s_id` int(11) NOT NULL,
  `g_father` varchar(40) NOT NULL,
  `g_fbplace` varchar(255) NOT NULL,
  `g_fedu_level` varchar(30) NOT NULL,
  `g_foccupation` varchar(255) NOT NULL,
  `g_fliving` varchar(255) NOT NULL,
  `g_fdead` varchar(255) NOT NULL,
  `g_fage` varchar(255) NOT NULL,
  `g_fpwork` varchar(40) NOT NULL,
  `g_fadd` varchar(255) NOT NULL,
  `g_ftel` int(11) NOT NULL,
  `g_mother` varchar(11) NOT NULL,
  `g_mbplace` varchar(255) NOT NULL,
  `g_medu_level` varchar(30) NOT NULL,
  `g_moccupation` varchar(255) NOT NULL,
  `g_mliving` varchar(255) NOT NULL,
  `g_mdead` varchar(255) NOT NULL,
  `g_mage` varchar(255) NOT NULL,
  `g_mpwork` varchar(40) NOT NULL,
  `g_madd` varchar(255) NOT NULL,
  `g_mtel` int(11) NOT NULL,
  `key` int(11) NOT NULL AUTO_INCREMENT,
  `yr` int(5) NOT NULL,
  PRIMARY KEY (`key`),
  UNIQUE KEY `s_id` (`s_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `guardian`
--

INSERT INTO `guardian` (`s_id`, `g_father`, `g_fbplace`, `g_fedu_level`, `g_foccupation`, `g_fliving`, `g_fdead`, `g_fage`, `g_fpwork`, `g_fadd`, `g_ftel`, `g_mother`, `g_mbplace`, `g_medu_level`, `g_moccupation`, `g_mliving`, `g_mdead`, `g_mage`, `g_mpwork`, `g_madd`, `g_mtel`, `key`, `yr`) VALUES
(0, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, 2, 0),
(20004281, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', 0, 3, 0),
(2147483647, 'fs', 'ps', 'ls', 'os', 'yes', 'no', '45', 'ws', 'as', 11, 'ms', 'ps', 'ls', 'os', 'yes', 'no', '44', 'ws', 'as', 112, 4, 4),
(234234324, 'sdsdsd', 'sdsd', 'sdsd', 'sdsd', 'no', 'no', '23', 'sdsd', 'sdsd', 0, 'dsasd', 'sdsd', 'sd', 'sdsd', 'no', 'no', '23', 'sdsd', 'sdsd', 0, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE IF NOT EXISTS `instructor` (
  `instruc_id` int(25) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `email_add` varchar(255) DEFAULT NULL,
  UNIQUE KEY `instruc_id` (`instruc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instruc_id`, `name`, `address`, `sex`, `email_add`) VALUES
(1234, 'Janno Palacios', 'kabankalan city', 'Male', 'jannopalacios@yahoo.com'),
(1234557, 'Villanueva Joken', 'Kabanakalan City', 'Male', 'joken000189561@yahoo.com');

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
(1234, 2, 'Null', 'Null', 'added', 28),
(12321321, 1, '8:30-9:30am', 'mwf', 'added', 5),
(12321321, 2, '7:30-8:30am', 'mwf', 'added', 6),
(12321321, 3, '7:30-8:30am', 'mwf', 'added', 7);

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `ozekimessageout`
--

INSERT INTO `ozekimessageout` (`id`, `sender`, `receiver`, `senttime`, `receivedtime`, `operator`, `status`, `msgtype`, `msg`) VALUES
(1, '', '09108610978', '0000-00-00', '0000-00-00', '', 'send', 'SMS:TEXT', '  from: School registrar');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `primary` varchar(11) NOT NULL DEFAULT 'No',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `filename`, `type`, `size`, `caption`, `member_id`, `primary`) VALUES
(1, 'dsdsd', 'sdsd', 2, 'ssds', 2323, 'No'),
(2, '02.png', 'image/png', 160884, '', 21323, 'No'),
(3, 'Koala.jpg', 'image/jpeg', 780831, '', 20002048, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `schoolcal`
--

CREATE TABLE IF NOT EXISTS `schoolcal` (
  `cal_id` int(11) NOT NULL AUTO_INCREMENT,
  `cal_date` varchar(30) NOT NULL,
  `event` varchar(50) NOT NULL,
  `semester` varchar(30) NOT NULL,
  PRIMARY KEY (`cal_id`),
  UNIQUE KEY `cal_id` (`cal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `schoolcal`
--

INSERT INTO `schoolcal` (`cal_id`, `cal_date`, `event`, `semester`) VALUES
(1, '2013/01/13', 'Charter Day', 'First'),
(2, '2013/02/04', 'Nonoy Aquino Day', 'First'),
(3, '2013/02/06', 'Negros Day', 'First'),
(4, '2013/08/09', 'trial day', 'Second '),
(10, '2013/01/28', 'lagaw', 'First'),
(6, '2013/01/23', 'Kadicosca', 'First'),
(7, '2013/02/01', 'Birth day', 'Second ');

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
  `s_guardian` varchar(30) NOT NULL,
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=93 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_name`, `s_lname`, `s_mname`, `s_address`, `s_age`, `s_bday`, `s_bplace`, `sex`, `s_status`, `s_contact`, `s_guardian`, `course_id`, `s_guardian_add`, `s_guardian_contact`, `sy`, `semester`, `dept_id`, `key`, `yr`) VALUES
(20002048, 'Jannossss', 'Palacios', '', 'Dancalan Ilog', 24, '1990/01/25', 'dancalan ilog', 'Male', 'Single', '09203461477', 'Susana Palacios', 1, 'Dancalan Ilog', '1', '2013-2014', 'First', 0, 1, 3),
(20002318, 'Johann Sebastian D. Grande', NULL, NULL, 'Coloso Street , Brgy.6 , Negro', 21, '1991/12/03', 'Riyadh K.S.A Saudi Arabia', 'Male', 'Single', '09306300254', 'Nerilu D. Grande', 1, 'Coloso Street , Brgy. 6 , Negros Occiden', 'n/a', '2012-2013', 'First', 0, 2, 3),
(20001812, 'Airish Tabujara', NULL, NULL, 'Tuyom Cauayan Negros Occidenta', 18, '1994/09/21', 'Tuyom cauayan Neg. Occ.', 'Female', 'Single', '09462832781', 'Sergio Tabujara', 1, 'Tuyom Cauayan Negros Occidental', '09082825758', '2011-2012', 'First', 0, 4, 1),
(20002045, 'Nichol Jun Nogra', NULL, NULL, 'Vallega Street Himamaylan City', 20, '1992/10/31', 'Himamaylan City', 'Male', 'Single', '09475197753', 'Carmenia Nogra', 1, 'Vallega Street Himamaylan City', '09395994946', '2012-2013', 'First', 0, 5, 3),
(20001506, 'Cedrex Caguales', NULL, NULL, 'Burgos st. Brgy 9', 20, '2013/07/28', 'Bacolod City', 'Male', '---Select---', '09488555879', 'Cesar Caguales', 1, 'Burgos st. Brgy 9', '09289392808', '2013-2014', 'First', 0, 6, 3),
(234234324, 'sdsds', NULL, NULL, 'sdsd', 3, '2013/11/11', 'dsdsdsdd', 'Male', 'Single', 'sdf', '', 1, '', '', '2012-2013', 'Second ', 0, 91, 1),
(21323, 'sdsdsd', 'sdsd', NULL, 'sdsd', 23, '2013/11/03', 'sd', 'Male', 'Single', 'sdf', 'sdsd', 1, 'sdsdsd', 'sd', '2011-2012', 'First', 0, 92, 1),
(2005023, 'giemar adolfo', NULL, NULL, 'overflow', 20, '1993/02/18', 'kabankalan', 'Male', 'Single', '09469701100', 'mr. and mr. Adolfo', 1, 'overflow', '09469701100', '2013-2014', 'First', 0, 8, 3),
(20001533, 'Gerlie joy CastaÃ±os', NULL, NULL, 'Naga, Binicuil Kabankaln City', 18, '1994/10/09', 'Valladolid', 'Female', 'Single', '09187617385', 'Jose CastaÃ±os', 1, 'Valladolid, Negros Occidental', '09482579899', '2013-2014', 'First', 0, 9, 3),
(20001459, 'John Paul Arroz', NULL, NULL, 'Malabong Ilog Neg. Occ', 21, '1992/06/24', 'Malabong Ilog Neg. Occ', 'Female', '---Select---', '', '', 1, '', '', '2011-2012', 'First', 0, 10, 1),
(20002090, 'michael alejano', NULL, NULL, 'Ilog Neg. Occ.', 20, '1992/11/09', 'Dancalan', 'Male', 'Single', '09469696930', 'Merlinda alejano', 1, 'Ilog Neg. Occ.', '09097310333', '2013-2014', 'First', 0, 11, 3),
(20001442, 'Jeszel R. alvarez', NULL, NULL, 'Inayauan Cauayan Neg. Occ.', 23, '1990/01/31', 'Inayauan', 'Female', 'Single', '09076132794', 'Anecita R. Alvarez', 1, 'Inayauan Cauayan Neg. Occ.', '09053189682', '2013-2014', 'First', 0, 12, 3),
(20001856, 'Mary Angelie I. Sitjar', NULL, NULL, 'So. Enclaro Brgy. Vista Alegre', 19, '1994/07/17', 'Pasig City', 'Female', 'Single', '09106079852', 'Judith Sitjar', 1, 'So. Enclaro Brgy. Vista Alegre Ilog Neg.', '09993440842', '2013-2014', 'First', 0, 13, 3),
(20001497, 'Raffy Buendia', NULL, NULL, 'Brgy. Tapi, Kab. City', 20, '', 'Brgy. Tapi, Kab. City', 'Male', 'Single', '09483774901', 'Mr. and Mrs. Gloria Buendia', 1, 'Brgy. Tapi, Kab. City', '09124884846', '2013-2014', 'First', 0, 14, 3),
(20002567, 'Jimmelyn Espraguera', NULL, NULL, 'kcpa village brgy.1 kab city', 20, '1993/02/07', 'Tan-awan', 'Female', 'Single', '09491524928', 'Jenelie Espraguera', 1, 'kcpa village brgy.1 kab city', '09396247092', '2013-2014', 'First', 0, 15, 3),
(20001729, 'joean mar m genit', NULL, NULL, 'j.y perez highway .talubangi .', 21, '1992/07/27', 'kab.city', 'Male', 'Single', '09129811391', 'anna fe genit', 1, 'kabankalan', '09129811391', '2012-2013', 'First', 0, 16, 3),
(20001428, 'RR F. AGUS', NULL, NULL, 'BOCANA,ILOG,NEG.OCC', 22, '1991/03/06', 'BOCANA,ILOG,NEG.OCC', 'Male', 'Single', '09107171279', 'Antonio E. Agus', 1, 'PASAY CITY,MANILA', '', '2013-2014', 'First', 0, 17, 3),
(20002068, 'Krizia Alyssa Oliverio', NULL, NULL, 'Tabuk-Suba, Cauayan, Negros Oc', 20, '1992/12/14', 'Cauayan, Negros Occidental', 'Female', 'Single', '09463828704', 'Nancy M. Oliverio', 1, 'Tabuk-Suba, Cauayan, Negros Occidental', '09464706325', '2012-2013', 'First', 0, 18, 3),
(20002300, 'karrll', NULL, NULL, 'Georgina Homes', 18, '1995/03/09', 'Bacolod', 'Male', 'Single', '09106910428', 'Nolito G. Acha', 1, 'Georgina Homes', '09106910428', '2011-2012', 'First', 0, 19, 3),
(20002015, 'Francis Jake B. Semillano', NULL, NULL, '11, Coloso St. Kabankalan City', 19, '1993/09/05', 'Pasig City, Manila', 'Male', 'Single', '09093113963', 'Mary Faith Semillano', 1, '11, Coloso St. Kabankalan City, Negros O', '09993439299', '2013-2014', 'First', 0, 20, 3),
(20001540, 'Leomie', NULL, NULL, 'Cauayan', 18, '1994/08/15', 'Bacolod City', 'Female', 'Single', '09462819550', 'Mr & Mrs. Leonardo R. Celestia', 1, 'Isio, Cauayan, Neg. Occ.', '09068721805', '2013-2014', 'First', 0, 21, 3),
(20005079, 'Chrizelle Joy Briones', NULL, NULL, 'Brgy. Talubangi, Kab. City', 19, '1994/01/30', 'Kabankalan City', 'Female', 'Single', '09302858875', 'Erwin P. Briones', 1, 'Brgy. Talubangi, Kab. City', '09193333594', '2013-2014', 'First', 0, 22, 2),
(20001662, 'jasper gabat', NULL, NULL, 'tampalon neg occ', 21, '1992/04/04', 'tampalon neg occ', '', 'Single', 'o9294144003', 'teresita gabat', 1, 'tampalon city', '09999999991', '2013-2014', 'First', 0, 23, 3),
(20002565, 'Justine Ann Gomez', NULL, NULL, ' Kabankalan City', 20, '1993/09/18', 'Kabankalan City', 'Female', 'Single', '09498047657', 'Rosile Gomez', 1, ' Kabankalan City', '09213446427', '2013-2014', 'First', 0, 24, 3),
(20001448, 'Amy Rose', NULL, NULL, 'cagay brgy su-ay himamaylan ci', 18, '1994/12/18', 'cagay brgy su-ay himamaylan ci', 'Female', 'Single', '09307195534', 'Alma Antecristo', 1, 'cagay brgy su-ay himamaylan city', '09103814684', '2011-2012', 'First', 0, 25, 3),
(20001553, 'Dolan Cuevas', NULL, NULL, 'Brygy.4 Himamaylan City Negros', 21, '1991/10/18', 'Dingle Iloilo', 'Male', 'Single', '09099604961', 'Danilo Cuevas', 1, 'Brgy. 4 Himamaylan City Negros Occidenta', '09296282929', '2013-2014', 'First', 0, 26, 3),
(200002276, 'clefhord john S macumao', NULL, NULL, 'brgy talubangi kabankalan city', 21, '1991/11/18', 'brgy talubangi kabankalan city', 'Male', 'Single', '09127219465', 'Mr&ms jose maumao', 1, 'brgy talubangi kabankalan city', '09217219465', '2013-2014', 'First', 0, 27, 3),
(20003477, 'Valerie May Apostol', NULL, NULL, 'Washington St. Brgy 1,Ilog Neg', 19, '1994/05/15', 'Cauayan', 'Female', 'Single', '09077948676', 'Teodorico Apostol', 1, 'Washington St. Brgy 1,Ilog Neg. Occ.', '09122543617', '2013-2014', 'First', 0, 28, 3),
(20001610, 'Ma. Riffy D. Derecho', NULL, NULL, 'Dancalan,Ilog,Neg.Occ.', 20, '1993/11/27', 'Dancalan,Ilog,Neg.Occ.', 'Female', '---Select---', '09097685993', 'Mr.&Mrs.Rafael Derecho Sr.', 1, 'Dancalan,Ilog,Neg.Occ.', '09102908649', '2013-2014', 'First', 0, 29, 1),
(20091662, 'Jasper Gabat', NULL, NULL, 'tampalon', 21, '1992/04/04', 'tampalon', 'Male', 'Single', '09294144003', 'Teresita Gabat', 1, 'Tampalon', '09294144003', '2013-2014', 'First', 0, 30, 3),
(20002251, 'adrian', NULL, NULL, 'adela st.brgy1', 17, '1995/10/26', 'bacolod city', 'Male', 'Single', '09128214525', 'sofronia apawan', 1, 'adela st.brgy.1', '', '2011-2012', 'First', 0, 31, 2),
(20004188, 'Februel', NULL, NULL, 'Kabankalan City', 17, '2014/02/14', '', '', '---Select---', '', '', 1, '', '', '2011-2012', 'First', 0, 32, 1),
(20002428, 'Sajade V. Remolleno', NULL, NULL, 'Talisay City', 20, '1992/12/21', 'Silay City', 'Male', 'Single', '09107105862', 'Micheal Remolleno', 1, 'Brgy. 1 Block 5, Kabankalan City', '09193313382', '2013-2014', 'First', 0, 33, 2),
(20000408, 'Earl NiÃ‘o A. Montero', NULL, NULL, 'Sonedco', 17, '1995/01/22', 'Sonedco', 'Male', '---Select---', '', 'Reynaldo Montero', 1, 'sonedco', '09128975607', '2011-2012', 'First', 0, 34, 1),
(20004556, 'Junjie B. Villanueva', NULL, NULL, 'Brgy.Binicuil Kabankalan City ', 17, '1995/08/26', 'Brgy.Binicuil Kabankalan City ', 'Male', 'Single', '09124448433', 'Mary Jean B. Villanueva', 1, 'Brgy.Binicuil Kabankalan City Negros Occ', '09124448433', '2013-2014', 'First', 0, 35, 2),
(20004488, 'aikoaprildionillo', NULL, NULL, 'brgy.camugao(sonedco)', 20, '2013/07/31', 'sonedco', 'Female', 'Single', '09051728724', 'paolodionillo', 1, 'brgy.camugao(sonedco)', '09184398427', '2013-2014', 'First', 0, 36, 2),
(20004425, 'John Kenneth Pintuan', NULL, NULL, 'Coloso St. Brgy. 6', 17, '1996/05/14', 'Manila', 'Male', 'Single', '09305373831', 'Renelio Pintuan', 1, 'Coloso St. Brgy. 6', '', '2012-2013', 'First', 0, 37, 2),
(20004763, 'bryan drapite', NULL, NULL, 'brgy camugao kabankalan city ', 19, '1994/06/16', 'pasay city, manila', 'Male', 'Single', '09484700453', 'mila fe drapite', 1, 'brgy camugao', '09106061377', '2013-2014', 'First', 0, 38, 2),
(200004620, 'Maricel Zayco', NULL, NULL, 'Adela St.Kabankalan City ', 17, '1995/01/21', 'Kabankalan City', 'Female', 'Single', '09104373625', 'Lazette Zayco', 1, 'Adela St. Kabankalan City', '09103462156', '2011-2012', 'First', 0, 39, 1),
(20004511, 'Jude  D. Abelarde', NULL, NULL, 'Brgy.consuelo ilog,nec .occ.', 17, '1996/07/07', 'kabankalan city', 'Male', 'Single', '09097390989', 'nory abelarde', 1, 'brgy consuelo ilog', '09187629412', '2012-2013', 'First', 0, 40, 2),
(20004749, 'Jamaica Jairah Gealon', NULL, NULL, 'Brgy.2 Ilog,Neg. Occ.', 19, '1994/01/12', 'Ilog, Neg. Occ.', 'Female', 'Single', '09462819670', 'Mr.&Mrs. Gealon ', 1, 'Brgy.2 Ilog, Neg. Occ.', '09462819670', '2013-2014', 'First', 0, 41, 2),
(20004335, 'rea mae garcia', NULL, NULL, 'mabua, cauayan', 19, '1993/12/02', 'project 6 quizon city', 'Male', 'Single', '09125897086', 'reynaldo m. garcia sr.', 1, 'mabua, cauayan ', '09995771875', '2013-2014', 'First', 0, 42, 2),
(20001779, 'Joevel Herrera', NULL, NULL, 'Mohon brgy1 kab city Neg,Occ', 20, '1993/05/16', 'mohon kabankalan city', 'Male', 'Single', '09093789858', 'Dionisio herrera', 1, 'mohon brgy1 kab city Neg,Occ', '', '2013-2014', 'First', 0, 43, 2),
(20001058, 'evan lloyd', NULL, NULL, '12 rizal st.kabankalan city', 18, '1995/05/17', 'kabankalan city', 'Male', 'Single', '09391440773', 'Dr.milagros aurea sabidalas', 1, '12 rizal st. kabankalan city', '09228608492', '2013-2014', 'First', 0, 44, 2),
(20004084, 'Kevin Jake Gindap', NULL, NULL, 'Tiling Cauayan Neg. Occ.', 18, '1994/08/21', 'Tiling', 'Male', 'Single', '09487596100', 'Angeline Gindap', 1, 'Tiling Cauayan', '09215757892', '2013-2014', 'First', 0, 45, 2),
(20004472, 'Jaryl Welsh L. Cubian', NULL, NULL, 'Roa street, brgy8', 17, '1996/04/08', 'Kabankalan City', 'Male', 'Marriage', '09122546027', 'Jackson E. Cubian', 1, 'Roa street, brgy8', '09108588749', '2013-2014', 'First', 0, 46, 2),
(20004680, 'maria arnelyn mollenido', NULL, NULL, 'baranggay2 ilog negros occiden', 18, '1994/12/24', 'hinigaran', 'Female', 'Single', '09097868372', 'mrs arlen muyco', 1, 'baranggay 2 ilog negros occidental', '09097868372', '2013-2014', 'First', 0, 47, 2),
(20004175, 'marvin', NULL, NULL, 'doljo,brgy2 ilog neg.occ.', 18, '1994/09/24', 'Kabankalan City', 'Male', 'Single', '', 'Sherly G.Gonzales', 1, 'doljo,brgy2 ilog neg. occ.', '', '2013-2014', 'First', 0, 48, 2),
(20004514, 'Mary Dane Barrientos', NULL, NULL, 'Sitio Cantonog, Barangay Linao', 20, '1993/06/30', 'Bisalao,Bagbaguin.Valenzuela c', 'Female', 'Single', '09463594114', 'Delia Tabance', 1, 'Sitio Cantonog, Barangay Linao. Kabankal', '09998432254', '2013-2014', 'First', 0, 49, 2),
(20001036, 'Michael Ian C. Ruiz', NULL, NULL, 'Ruiz Subd. Talubangi Kab. City', 17, '', '', '', '---Select---', '', '', 1, '', '', '2011-2012', 'First', 0, 50, 1),
(20001054, 'lourdmaro', NULL, NULL, 'daan banua', 19, '1994/02/12', 'kab.', 'Male', 'Single', '09128689313', 'romeopdrigo', 1, 'daanbanua', '09128689313', '2013-2014', 'First', 0, 51, 2),
(20000661, 'oscar neil s ilao', NULL, NULL, 'brgy. 5 kabankalan city', 17, '1995/10/10', 'Gregoria', 'Male', 'Single', '09129613038', 'Nelly ilao', 1, 'brgy. 5 kabankalan city', '09129613038', '2011-2012', 'Second ', 0, 52, 2),
(40004210, 'lyn rose', NULL, NULL, 'ilog', 22, '1990/08/19', 'ilog negros occidental', 'Female', 'Single', '09482166050', 'marissa depra', 1, '', '', '2013-2014', 'First', 0, 53, 2),
(20004300, 'Ruselo P. Flores', NULL, NULL, 'Buenavista Himamaylan City', 21, '1992/05/23', 'Buenavista,Him. City', 'Male', 'Single', '09129552859', 'Rudy Flores', 1, 'Buenavista Him. City', '', '2013-2014', 'First', 0, 54, 2),
(20002642, 'Dennis Michael U. Berzuela', NULL, NULL, '#11 Colos st. Kab. city', 19, '', 'Taguig Metro Manila', 'Male', 'Single', '09264416916', 'Dennis Berzuela', 1, '#11 Coloso St. Kab. City', '09198552183', '2013-2014', 'First', 0, 55, 2),
(20001661, 'Jasper Gabat', NULL, NULL, 'tampalon', 21, '1992/04/04', 'tampalon', 'Male', 'Single', '09294144003', 'Teresita Gabat', 1, 'Tampalon', '09294144003', '2013-2014', 'First', 0, 56, 2),
(20004263, 'Shanlee Marie Bongaita', NULL, NULL, 'Sipalay City', 17, '1996/04/28', 'Sipalay City', '', '---Select---', '', '', 1, '', '', '2011-2012', 'First', 0, 57, 1),
(20004195, 'ritchelle gatoc', NULL, NULL, 'brgy. binicuil kabankalan city', 21, '1993/01/12', 'kabankalan city', 'Female', 'Single', '09122546087', 'Mr. & Mrs. Rudy F. Gatoc Sr.', 1, 'brgy. binicuil kabankalan city', '09227566399', '2013-2014', 'First', 0, 58, 2),
(20004087, 'Sherlyn F. Dolfo', NULL, NULL, 'Poblacion, Cauayan, Neg. Occ.', 18, '1995/03/27', 'Cauayan', 'Female', 'Single', '09102004434', 'Glorieta F. Dolfo', 1, 'Poblacion, Cauayan, Neg. Occ.', '09302026045', '2013-2014', 'First', 0, 59, 2),
(20004415, 'july ganza', NULL, NULL, 'hda.carmen,daan banua kab,city', 19, '1994/07/12', '', 'Male', 'Single', '09487443762', 'rhea rose ganza', 1, 'hda.carmen,daan banau,kab.city', '09469747268', '2012-2013', 'First', 0, 60, 2),
(20004281, 'lanie pescasiosa', NULL, NULL, 'brgy.mahalang,himamaylan city', 17, '1996/04/13', 'brgy.tampalon,kabankalan city', 'Female', 'Single', '09096383137', 'ronie pescasiosa', 1, 'brgy.mahalang,himamaylan city', '09212590597', '2012-2013', 'First', 0, 61, 1),
(20004727, 'Marjorie', NULL, NULL, 'Brgy.Camansi Kab.City', 18, '1995/06/09', 'Kabankalan City', 'Female', 'Single', '09071134416', 'Jude V. Semillano', 10, 'Brgy.Camansi Kab.City', '0930551952', '2013-2014', 'First', 0, 62, 2),
(20004128, 'Giv Hamsleigh B. Javellana', NULL, NULL, 'Brgy. Binicuil Kabankalan City', 17, '1996/04/12', 'Brgy. Binicuil Kabankalan City', 'Female', 'Single', '09487438667', 'Richie Badayos', 10, 'Brgy. Binicuil Kabankalan city', '09487438667', '2013-2014', 'First', 0, 63, 2),
(20004513, 'Joshua J. Labrador', NULL, NULL, 'coloso street kabankalan city', 20, '1993/07/01', 'kabankalan city', 'Male', 'Single', '09071162210', 'Rose mary j. labrador', 1, 'coloso street kabankalan city', '09128260956', '2013-2014', 'First', 0, 64, 2),
(20000383, 'VANESSA G. BAÃ‘EZ', NULL, NULL, 'AZCONA SUBD. KAB CITY., ', 18, '1995/02/18', 'KANKALAN CITY', 'Female', 'Single', '09291212757', 'JOSEPHINE G. BAÃ‘EZ', 10, 'AZCONNA SUBD. KAB CITY', '09291212757', '2013-2014', 'First', 0, 65, 2),
(20004166, 'Margie Rose Tondo', NULL, NULL, 'Repullo St. Kab. City', 17, '1995/10/26', 'Kabankalan City', 'Female', 'Single', '09124432417', 'Mr. Rufino Tondo', 10, 'Repullo St. Kab. City', '09478341181', '2012-2013', 'First', 0, 67, 2),
(20005043, 'Gergil Luz Argamaso', NULL, NULL, 'Flora, Hilamonan, Kabankalan C', 25, '1987/08/19', 'Himamaylan City', 'Female', 'Marriage', '09214044233', 'Angelo D. Argamaso', 10, 'Flora, Hilamonan, Kabankalan City', '09087769225', '2013-2014', 'First', 0, 68, 2),
(2001357, 'BERNADINE Y SIMBIT', NULL, NULL, 'LINAO KAB. CITY', 16, '1996/09/16', 'LINAO KAB. CITY', 'Female', 'Single', '', 'SHIELA GRACE DOCULARA', 1, 'LINAO KAB. CITY', '', '2013-2014', 'First', 0, 69, 2),
(20004613, 'Cheryl Tabasin', NULL, NULL, 'Hilamonan Kab.City', 19, '1993/10/05', 'KABANKALAN CITY', 'Female', 'Single', '09486427346', 'crispin tabasin', 10, 'hilamonan kab.city', '09216871253', '2013-2014', 'First', 0, 70, 2),
(20004385, 'MYLIN I. MONTILLA', NULL, NULL, 'ELIHAN CAUAYAN', 20, '1992/11/17', '', 'Female', 'Single', '09099604764', 'WELFRIDO MONTILLA', 1, 'ELIHAN CAUAYAN', '09282202199', '2013-2014', 'First', 0, 71, 1),
(20004258, 'charkien palmos', NULL, NULL, 'Tuyom ,cauayan ', 17, '1996/07/23', 'Tuyom', 'Female', 'Single', '09486415049', 'Mr. & Mrs. Charlie Palmos', 10, 'Tuyom, Cauayan', '09463891935', '2012-2013', 'First', 0, 72, 2),
(20004482, 'Kim Ruel N Lo-on', NULL, NULL, 'BRGY.6 Coloso St.Kab.City', 17, '1995/11/17', 'District Hospital Kab. City ', 'Male', 'Single', '09465676067', 'Elizabeth N. Lo-on', 10, 'BRGY.6 Coloso St. Kab. City', '09108610978', '2013-2014', 'First', 0, 73, 2),
(2147483647, 'james mesas', NULL, NULL, 'as', 211, '1992/03/12', 'bs', 'Male', '---Select---', '11', '', 10, '', '', '2013-2014', 'First', 0, 89, 4);

-- --------------------------------------------------------

--
-- Table structure for table `student_other_info`
--

CREATE TABLE IF NOT EXISTS `student_other_info` (
  `s_id` int(11) NOT NULL,
  `s_div_origin` varchar(90) DEFAULT NULL,
  `s_reg_origin` varchar(90) DEFAULT NULL,
  `s_nationality` varchar(40) NOT NULL,
  `s_handicapped` varchar(30) DEFAULT NULL,
  `s_repeater` varchar(30) NOT NULL,
  `s_nlanguage` varchar(90) DEFAULT NULL,
  `s_emailadd` varchar(11) NOT NULL,
  `s_residence` varchar(30) NOT NULL,
  `s_hobbies` varchar(255) NOT NULL,
  `s_talents` varchar(30) NOT NULL,
  `s_club_org` varchar(255) NOT NULL,
  `s_field_study` varchar(255) NOT NULL,
  `s_level_study` varchar(255) NOT NULL,
  `s_diploma` varchar(255) NOT NULL,
  `s_anti_yr_grad` varchar(40) NOT NULL,
  `s_working` varchar(30) DEFAULT NULL,
  `s_bro_sis` int(11) NOT NULL,
  `s_step_sis` int(11) NOT NULL,
  `s_step_bro` int(11) NOT NULL,
  `s_series` int(11) NOT NULL,
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

INSERT INTO `student_other_info` (`s_id`, `s_div_origin`, `s_reg_origin`, `s_nationality`, `s_handicapped`, `s_repeater`, `s_nlanguage`, `s_emailadd`, `s_residence`, `s_hobbies`, `s_talents`, `s_club_org`, `s_field_study`, `s_level_study`, `s_diploma`, `s_anti_yr_grad`, `s_working`, `s_bro_sis`, `s_step_sis`, `s_step_bro`, `s_series`, `s_AL_points`, `s_yr_obtained`, `s_place`, `key`, `yr`) VALUES
(0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', 2, 0),
(20004281, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', 3, 0),
(2147483647, 'ds', 'rs', 'ns', 'no', 'no', 'ls', 'es', 'rs', 'hs', 'ts', 'cs', 'fs', 'ls', 'ds', 'gs', 'no', 11, 11, 11, 11, 11, 21, 'ps', 4, 4),
(234234324, 'sddsdsd', 'sdsd', 'sdsdsd', 'no', 'no', 'sds', 'sdsd', 'sd', 'sdsd', 'sd', 'sdsdsd', 'sd', 'sd', 'sdsd', 'sd', 'no', 23, 3, 23, 23, 23, 0, 'sd', 6, 1);

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
-- Table structure for table `stud_course_grades`
--
-- in use(#1356 - View 'studinfosms.grades_subj' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `stud_course_grades`
--
-- in use (#1356 - View 'studinfosms.stud_course_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `stud_grades`
--
-- in use(#1356 - View 'studinfosms.stud_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `stud_grades`
--
-- in use (#1356 - View 'studinfosms.stud_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `stud_subj_course_grades`
--
-- in use(#1356 - View 'studinfosms.stud_subj_course_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `stud_subj_course_grades`
--
-- in use (#1054 - Unknown column 'studinfosms.grades.subj_id' in 'on clause')

-- --------------------------------------------------------

--
-- Table structure for table `stud_subj_grades`
--
-- in use(#1356 - View 'studinfosms.stud_subj_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

--
-- Dumping data for table `stud_subj_grades`
--
-- in use (#1356 - View 'studinfosms.stud_subj_grades' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subj_code` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `unit` int(11) NOT NULL,
  `yr` int(5) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `pre` varchar(30) NOT NULL,
  PRIMARY KEY (`subj_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subj_code`, `subject`, `description`, `unit`, `yr`, `semester`, `course_id`, `pre`) VALUES
(1, 'Filipino 1', 'Pagbasa at pagsulat', 3, 1, 'First', 1, 'None'),
(2, 'English 1 ', 'Study and thinking Skills', 3, 1, 'Second ', 2, 'None'),
(3, 'educ 101', 'Social Dimensions', 3, 1, 'Second ', 1, 'None'),
(5, 'Math1', 'Algebra', 3, 1, 'First', 4, 'None'),
(7, 'Math2', 'Calculus', 3, 1, 'First', 2, 'None'),
(8, 'Automata', 'Atomata description', 3, 1, 'First', 1, 'None'),
(9, 'english plus', 'Writing skills', 3, 1, 'First', 4, 'None'),
(10, 'Educ 01', 'Strategies of Teaching', 3, 1, 'First', 3, 'None'),
(11, 'Educ 02', 'Principles of teaching', 3, 1, 'First', 3, 'None'),
(34, 'sad', 'sad', 0, 1, 'First', 1, 'sdaasd'),
(13, 'ENGL11', 'Study and thinking Skills', 3, 1, 'First', 1, 'None'),
(14, 'ENGL 12', 'Writing in the Discipline', 3, 1, 'First', 1, 'ENGL11'),
(15, 'KB1', 'Fundamentals of Typewriting', 3, 1, 'First', 6, 'None'),
(16, 'KB2', 'Advance Typewrinting', 3, 1, 'Second ', 6, 'KB1'),
(17, 'COMP1', 'Computer 1', 3, 1, 'First', 1, 'None'),
(18, 'COMP2', 'Computer 2', 3, 1, 'Second ', 1, 'COMP1'),
(19, 'ComOrg', 'Computer Organization', 3, 1, 'First', 1, 'COMP1'),
(24, 'DBMS', 'Database Management System', 3, 2, 'Second ', 1, 'None'),
(25, 'DBMS II', 'Database Management System II', 3, 3, 'First', 1, 'DBMS'),
(26, 'TS5', 'Software Tools', 3, 3, 'First', 1, 'None'),
(27, 'OOP', 'Object Oriented Programming', 3, 2, 'First', 1, 'None'),
(39, 'Multi', 'Multimedia1', 3, 2, 'First', 1, ''),
(40, 'Multi 1', 'Multimedia 2', 3, 2, 'Second', 1, 'None'),
(45, 'SAD', 'System Analysis And Design', 3, 3, 'First', 1, 'None'),
(44, 'SoftEng', 'Software Engineering', 3, 3, 'Second', 1, 'SAD');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE IF NOT EXISTS `system_info` (
  `sys_id` int(11) NOT NULL AUTO_INCREMENT,
  `sysname` varchar(50) NOT NULL,
  `logoname` varchar(255) NOT NULL,
  `logotype` varchar(50) NOT NULL,
  `size` int(15) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` int(11) NOT NULL,
  PRIMARY KEY (`sys_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`sys_id`, `sysname`, `logoname`, `logotype`, `size`, `description`, `active`) VALUES
(2, 'Student Transcript Processing System', '487940_605114892866654_256031780_n.jpg', 'image/jpeg', 75454, 'asdasdasdasdasd', 0),
(3, 'KCC Grades and Student Information System', '403366_247819538629389_985850300_n.jpg', 'image/jpeg', 83045, 'Kcc Grade and and informationsyste description', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testsubj`
--

CREATE TABLE IF NOT EXISTS `testsubj` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subj` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `testsubj`
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=123456783 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `users_name`, `uname`, `u_pass`, `utype`) VALUES
(1234567, 'Joken Villanueva', 'joken', 'c92e8831ed99b9d66cb3fbf11e4d50f4074e1f8b', 'Teacher'),
(6, 'Joken Villanueva', 'admin', 'fa3bb893cc31e191988f3ce5e22dc23e6441fe03', 'Administrator'),
(21323, 'sdsdsd sdsd', 'aa', 'e0c9035898dd52fc65c41454cec9c4d2611bfb37', 'Student'),
(1234, 'Janno Palacios', 'janobe', '356a192b7913b04c54574d18c28d46e6395428ab', 'Teacher'),
(1234570, 'kghjg', 'g', '7323a5431d1c31072983a6a5bf23745b655ddf59', 'Administrator'),
(1234569, 'hello', 'hell', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'Administrator'),
(12345678, 'joken VILLANUEVA', 'joken', '4cc70a80780e7c3a17f1b6609c0df40825375a0f', 'Student'),
(123456781, 'HATCH VILLANUEVA', 'joken', '4cc70a80780e7c3a17f1b6609c0df40825375a0f', 'Student'),
(1234557, 'Villanueva Joken', 'joken', '03695bcb21799c550528a0f90ea7b8c39f577954', 'Teacher'),
(123456782, 'reg', 'reg', 'e06b95860a6082ae37ef08874f8eb5fade2549da', 'Registrar');

-- --------------------------------------------------------

--
-- Structure for view `stud_course`
--
DROP TABLE IF EXISTS `stud_course`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `stud_course` AS select `student`.`s_id` AS `s_id`,`student`.`s_name` AS `s_name`,`student`.`s_address` AS `s_address`,`student`.`s_age` AS `s_age`,`student`.`s_bday` AS `s_bday`,`student`.`s_bplace` AS `s_bplace`,`student`.`sex` AS `sex`,`student`.`s_status` AS `s_status`,`student`.`s_contact` AS `s_contact`,`student`.`s_guardian` AS `s_guardian`,`course`.`course_name` AS `course_name`,`student`.`s_guardian_add` AS `s_guardian_add`,`student`.`s_guardian_contact` AS `s_guardian_contact`,`student`.`sy` AS `sy`,`student`.`semester` AS `semester`,`student`.`key` AS `key`,`student`.`yr` AS `yr`,`course`.`course_id` AS `course_id` from (`student` left join `course` on((`student`.`course_id` = `course`.`course_id`)));
