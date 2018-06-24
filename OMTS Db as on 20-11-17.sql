-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2017 at 07:24 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `note`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE IF NOT EXISTS `1` (
  `qno` int(100) NOT NULL,
  `ans` varchar(1) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1`
--

INSERT INTO `1` (`qno`, `ans`) VALUES
(1, 'B'),
(2, 'C'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'A'),
(7, 'A'),
(8, 'B'),
(9, 'C'),
(10, 'C'),
(11, 'C'),
(12, 'B'),
(13, 'B'),
(14, 'C'),
(15, 'A'),
(16, 'B'),
(17, 'A'),
(18, 'D'),
(19, 'B'),
(20, 'A'),
(21, 'B'),
(22, 'B'),
(23, 'A'),
(24, 'C'),
(25, 'B'),
(26, 'B'),
(27, 'B'),
(28, 'C'),
(29, 'C'),
(30, 'C'),
(31, 'D'),
(32, 'B'),
(33, 'B'),
(34, 'A'),
(35, 'A'),
(36, 'B'),
(37, 'C'),
(38, 'C'),
(39, 'B'),
(40, 'B'),
(41, 'D'),
(42, 'B'),
(43, 'C'),
(44, 'D'),
(45, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `2`
--

CREATE TABLE IF NOT EXISTS `2` (
  `qno` int(100) NOT NULL AUTO_INCREMENT,
  `ans` varchar(1) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `2`
--

INSERT INTO `2` (`qno`, `ans`) VALUES
(1, 'B'),
(2, 'B'),
(3, 'D'),
(4, 'D'),
(5, 'A'),
(6, 'B'),
(7, 'D'),
(8, 'B'),
(9, 'C'),
(10, 'A'),
(11, 'A'),
(12, 'D'),
(13, 'C'),
(14, 'C'),
(15, 'A'),
(16, 'D'),
(17, 'B'),
(18, 'A'),
(19, 'C'),
(20, 'B'),
(21, 'D'),
(22, 'D'),
(23, 'A'),
(24, 'C'),
(25, 'A'),
(26, 'A'),
(27, 'C'),
(28, 'C'),
(29, 'A'),
(30, 'D'),
(31, 'B'),
(32, 'B'),
(33, 'A'),
(34, 'A'),
(35, 'C'),
(36, 'C'),
(37, 'C'),
(38, 'A'),
(39, 'A'),
(40, 'B'),
(41, 'B'),
(42, 'B'),
(43, 'C'),
(44, 'C'),
(45, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `3`
--

CREATE TABLE IF NOT EXISTS `3` (
  `qno` int(100) NOT NULL AUTO_INCREMENT,
  `ans` varchar(1) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `3`
--

INSERT INTO `3` (`qno`, `ans`) VALUES
(1, 'D'),
(2, 'C'),
(3, 'A'),
(4, 'C'),
(5, 'B'),
(6, 'B'),
(7, 'D'),
(8, 'A'),
(9, 'D'),
(10, 'A'),
(11, 'C'),
(12, 'A'),
(13, 'B'),
(14, 'C'),
(15, 'D'),
(16, 'C'),
(17, 'A'),
(18, 'D'),
(19, 'B'),
(20, 'C'),
(21, 'D'),
(22, 'A'),
(23, 'C'),
(24, 'C'),
(25, 'B'),
(26, 'B'),
(27, 'B'),
(28, 'D'),
(29, 'B'),
(30, 'A'),
(31, 'C'),
(32, 'A'),
(33, 'A'),
(34, 'B'),
(35, 'D'),
(36, 'D'),
(37, 'A'),
(38, 'D'),
(39, 'A'),
(40, 'B'),
(41, 'D'),
(42, 'B'),
(43, 'D'),
(44, 'C'),
(45, 'D'),
(46, 'C'),
(47, 'B'),
(48, 'C'),
(49, 'C'),
(50, 'D'),
(51, 'D'),
(52, 'D'),
(53, 'B'),
(54, 'D'),
(55, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `4`
--

CREATE TABLE IF NOT EXISTS `4` (
  `qno` int(100) NOT NULL AUTO_INCREMENT,
  `ans` varchar(1) NOT NULL,
  PRIMARY KEY (`qno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `4`
--

INSERT INTO `4` (`qno`, `ans`) VALUES
(1, 'C'),
(2, 'B'),
(3, 'D'),
(4, 'D'),
(5, 'C'),
(6, 'A'),
(7, 'B'),
(8, 'B'),
(9, 'A'),
(10, 'B'),
(11, 'A'),
(12, 'B'),
(13, 'C'),
(14, 'D'),
(15, 'D'),
(16, 'C'),
(17, 'B'),
(18, 'A'),
(19, 'A'),
(20, 'B'),
(21, 'A'),
(22, 'C'),
(23, 'B'),
(24, 'C'),
(25, 'A'),
(26, 'B'),
(27, 'C'),
(28, 'B'),
(29, 'B'),
(30, 'C'),
(31, 'B'),
(32, 'A'),
(33, 'D'),
(34, 'B'),
(35, 'B'),
(36, 'C'),
(37, 'A'),
(38, 'D'),
(39, 'C'),
(40, 'D'),
(41, 'C'),
(42, 'C'),
(43, 'D'),
(44, 'A'),
(45, 'B'),
(46, 'C'),
(47, 'A'),
(48, 'B'),
(49, 'A'),
(50, 'C'),
(51, 'C'),
(52, 'C'),
(53, 'C'),
(54, 'D'),
(55, 'B');

-- --------------------------------------------------------

--
-- Table structure for table `check`
--

CREATE TABLE IF NOT EXISTS `check` (
  `id` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `check`
--

INSERT INTO `check` (`id`, `status`) VALUES
('N130311', 'started'),
('N130214', 'started');

-- --------------------------------------------------------

--
-- Table structure for table `key`
--

CREATE TABLE IF NOT EXISTS `key` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `key`
--

INSERT INTO `key` (`id`, `title`) VALUES
(1, 'A'),
(2, 'A'),
(3, 'B'),
(4, 'B'),
(5, 'C'),
(6, 'C'),
(7, 'D'),
(8, 'D'),
(9, 'A'),
(10, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE IF NOT EXISTS `myguests` (
  `id` int(100) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `questions` varchar(30) NOT NULL,
  `questions_video` int(100) NOT NULL,
  `time` varchar(50) DEFAULT NULL,
  `folder` varchar(50) DEFAULT NULL,
  `video` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `myguests`
--

INSERT INTO `myguests` (`id`, `title`, `questions`, `questions_video`, `time`, `folder`, `video`) VALUES
(1, 'English', '10', 5, '10', '1', 'srinu.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `phpap105_admins`
--

CREATE TABLE IF NOT EXISTS `phpap105_admins` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `last_name` varchar(50) NOT NULL DEFAULT '',
  `first_name` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `status` enum('main admin','admin') NOT NULL DEFAULT 'main admin',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpap105_admins`
--

INSERT INTO `phpap105_admins` (`id`, `username`, `password`, `last_name`, `first_name`, `email`, `status`) VALUES
(1, 'admin', 'test', 'John', 'Smith', 'admin@domain.com', 'main admin');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirm` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `mailstatus` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `year`, `password`, `confirm`, `email`, `gender`, `mailstatus`) VALUES
('N130214', 'ranjith', 'E3', 'rs', 'rs', 'n130214@rguktn.ac.in', 'M', 'Y'),
('N130268', 'rakesh', 'E3', 'rr', 'rr', 'n130268@rguktn.ac.in', 'M', 'N'),
('N130269', 'prakasam', 'E3', 'prakasam', 'prakasam', 'n130269@rguktn.ac.in', 'M', 'N'),
('N130298', 'srinu', 'E3', 'srinu', 'srinu', 'n130298@rguktn.ac.in', 'M', 'Y'),
('N130303', 'ravi', 'E3', 'ravi', 'ravi', 'n130303@rguktn.ac.in', 'M', 'N'),
('N130311', 'ASIF BASHA', 'E3', '1234', '1234', 'asifbasha.mohammad98@gmail.com', 'M', 'Y'),
('N130316', 'subhakar', 'E3', 'subha', 'subha', 'n130316@rguktn.ac.in', 'M', 'Y'),
('N130318', 'Gopi', 'E3', 'gopi', 'gopi', 'n130318@rguktn.ac.in', 'M', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `idno` varchar(100) NOT NULL,
  `marks` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `adoupload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`idno`, `marks`, `content`, `adoupload`) VALUES
('N130311', '10', 'Yes, I agreeed...', 'Not Uploaded'),
('N130214', '7', 'hi ra gopi', 'Surviva - SenSongsMp3.Co.mp3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
