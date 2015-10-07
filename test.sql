-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 07, 2015 at 09:44 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE IF NOT EXISTS `timetable` (
  `name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `data` int(16) NOT NULL,
  `email` varchar(256) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`name`, `address`, `data`, `email`, `date`, `time`) VALUES
('junaid', 'chani goth', 10, 'junaid.ahmed.infome@gmail.com', '2015-08-04', '06:50:00'),
('M Attique', 'taunsa', 8, 'attiquetaunsvi1@gmail.com', '2015-08-04', '06:52:00'),
('Mailk', 'bwp', 2, 'shoaibhashmi94@gmail.com', '2015-08-05', '03:20:00');
