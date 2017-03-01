-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2015 at 03:01 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_list`
--

CREATE TABLE IF NOT EXISTS `registration_list` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `contact` int(11) NOT NULL,
  `gender` text NOT NULL,
  `affiliation` text NOT NULL,
  `nationality` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `registration_list`
--

INSERT INTO `registration_list` (`ID`, `name`, `email`, `contact`, `gender`, `affiliation`, `nationality`, `time`) VALUES
(1, 'Bong Wen Han', 'freebong717@gmail.com', 176961045, 'male', 'CIMB', 'Malaysa', '2015-09-30 07:32:46'),
(2, 'Jason', 'jason22@gmail.com', 174857895, 'male', 'Maybank', 'Malasyia', '2015-09-30 07:34:54'),
(3, 'Micheall', 'micheall123@yahoo.com', 175845785, 'female', 'Public Bank', 'Malaysia', '2015-09-30 07:45:04'),
(4, 'jojo', 'jojo1234@hotmail.com', 1154587954, 'female', 'Public Bank', 'Malaysia', '2015-09-30 12:57:15'),
(5, 'David Beckham', 'beckham@mu.com', 9834567, 'male', 'University of Manchester', 'United Kingdom', '2015-10-01 00:59:29'),
(6, 'Michael Owen', 'owen@liv.co.uk', 458932345, 'male', 'University of Liverpool', 'United Kingdom', '2015-10-01 01:00:12'),
(7, 'Justin Bieber', 'justin@bieber.com', 498493288, 'female', 'University of Def Jam', 'United States of America', '2015-10-01 01:00:50');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
