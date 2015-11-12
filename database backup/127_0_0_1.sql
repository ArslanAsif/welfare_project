-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2015 at 09:55 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `welfare_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`uid`, `firstname`, `lastname`, `emailid`, `pass`) VALUES
(1, 'Arslan', 'Asif', 'arslan@gmail', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `e_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_title` varchar(100) NOT NULL,
  `e_type` varchar(50) NOT NULL,
  `e_desc` text,
  `e_date` datetime NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`e_id`, `e_title`, `e_type`, `e_desc`, `e_date`) VALUES
(1, 'Thanks giving', 'Donations', 'yoyoyoy', '0000-00-00 00:00:00'),
(2, 'Yay', 'Meow Billi', 'Meow meow main aik bongi billi hon jo sub ko tang krti hy!', '0000-00-00 00:00:00'),
(3, 'hello', 'meow', 'yoyoy', '0000-00-00 00:00:00'),
(4, 'meow', 'wao', 'lololo', '0000-00-00 00:00:00'),
(5, 'New Event', 'Dowery', 'yay yay yay', '0000-00-00 00:00:00'),
(6, 'yay', 'yo', 'yo yoy yo', '0000-00-00 00:00:00'),
(7, 'new', 'event', 'meow', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `g_img` varchar(100) NOT NULL,
  `e_id` int(11) NOT NULL,
  `cover` binary(1) DEFAULT '0',
  PRIMARY KEY (`g_img`,`e_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `msg_subj` varchar(100) DEFAULT NULL,
  `msg` varchar(300) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`uid`, `user_name`, `email`, `msg_subj`, `msg`) VALUES
(1, 'Arslan', 'arslan.asif007@gmail.com', 'abc', 'Meow meow'),
(2, 'Arslan', 'arslan.asif007@hotmail.com', 'abc', 'Meow meow');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
