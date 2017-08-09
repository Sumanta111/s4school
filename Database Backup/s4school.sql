-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2016 at 05:07 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `s4school`
--

-- --------------------------------------------------------

--
-- Table structure for table `git`
--

CREATE TABLE IF NOT EXISTS `git` (
  `F_name` varchar(10) DEFAULT NULL,
  `L_name` varchar(10) DEFAULT NULL,
  `Ph_no` int(11) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `M_body` tinytext,
  `git_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`git_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `git`
--

INSERT INTO `git` (`F_name`, `L_name`, `Ph_no`, `Email`, `M_body`, `git_id`) VALUES
('Sulagna', 'Sengupta', 2147483647, 'suggu@gmail.com', 'hi...i am very happy.....', 4),
('Sumanta', 'Banerjee', 2147483647, 'sumantak14@gmail.com', 'hi...i am really happy', 3),
('Jayanta', 'Banerjee', 2147483647, 'j@gmail.com', 'hiiii.....................', 5);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `Name` varchar(25) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `U_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`U_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`Name`, `DOB`, `Email`, `Password`, `U_id`) VALUES
('Sumanta Banerjee', '1995-10-13', 'sumantak14@gmail.com', 's4school', 1),
('Sulagna Sengupta', '1995-09-15', 'suggu@gmail.com', 'suggu', 2),
('Subhadip Banerjee', '1995-03-16', 'subho@gmail.com', 'subho', 3),
('Sushrik Chandra', '1995-01-11', 'sushrik@gmail.com', 'sushrik', 4),
('Jayanta Banerjee', '2016-08-19', 'j@gmail.com', 'jayanta', 5);
