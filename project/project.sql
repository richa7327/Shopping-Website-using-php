-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2019 at 05:49 AM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `EMAIL` varchar(320) DEFAULT NULL,
  `w1` tinyint(1) DEFAULT NULL,
  `w2` tinyint(1) DEFAULT NULL,
  `w3` tinyint(1) DEFAULT NULL,
  `w4` tinyint(1) DEFAULT NULL,
  `w5` tinyint(1) DEFAULT NULL,
  `m1` tinyint(1) DEFAULT NULL,
  `m2` tinyint(1) DEFAULT NULL,
  `m3` tinyint(1) DEFAULT NULL,
  `m4` tinyint(1) DEFAULT NULL,
  `m5` tinyint(1) DEFAULT NULL,
  `k1` tinyint(1) DEFAULT NULL,
  `k2` tinyint(1) DEFAULT NULL,
  `k3` tinyint(1) DEFAULT NULL,
  `k4` tinyint(1) DEFAULT NULL,
  `k5` tinyint(1) DEFAULT NULL,
  `ms1` tinyint(1) DEFAULT NULL,
  `ms2` tinyint(1) DEFAULT NULL,
  `ms3` tinyint(1) DEFAULT NULL,
  `ms4` tinyint(1) DEFAULT NULL,
  `ms5` tinyint(1) DEFAULT NULL,
  `ws1` tinyint(1) DEFAULT NULL,
  `ws2` tinyint(1) DEFAULT NULL,
  `ws3` tinyint(1) DEFAULT NULL,
  `ws4` tinyint(1) DEFAULT NULL,
  `ws5` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`EMAIL`, `w1`, `w2`, `w3`, `w4`, `w5`, `m1`, `m2`, `m3`, `m4`, `m5`, `k1`, `k2`, `k3`, `k4`, `k5`, `ms1`, `ms2`, `ms3`, `ms4`, `ms5`, `ws1`, `ws2`, `ws3`, `ws4`, `ws5`) VALUES
('meenu@gmail.com', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('richa.7327@gmail.com', 1, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('mehul@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('aditi@gmail.com', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
('rgaur7706@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('s@gmail.com', 0, 0, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('jassa@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL),
('sahil@gmail.com', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('vinay@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('shikha@gmail.com', 1, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('aditi@yahoo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
('richa.7327@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `NAME` varchar(20) DEFAULT NULL,
  `PASSWORD` varchar(20) DEFAULT NULL,
  `ADDRESS` varchar(50) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `EMAILID` varchar(320) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NAME`, `PASSWORD`, `ADDRESS`, `GENDER`, `EMAILID`) VALUES
('meenu', 'meenu', '37 sak', 'F', 'meenu@gmail.com'),
('richa', 'richa', 'sak apt', 'F', 'richa.7327@gmail.com'),
('mehul', 'mehul', 'sak', 'M', 'mehul@gmail.com'),
('aditi', 'aditi', 'dwarka', 'F', 'aditi@gmail.com'),
('rajat', 'rajat', 'karol bagh', 'M', 'rgaur7706@gmail.com'),
('shivam', 'shivam', 'pas vih', 'M', 's@gmail.com'),
('jassa', 'jassa', 'dduc', 'M', 'jassa@gmail.com'),
('sahil', 'sahil', 'dwarka mor', 'M', 'sahil@gmail.com'),
('vinay', 'vinay', 'karol bagh', 'M', 'vinay@gmail.com'),
('shikha', 'shikha', 'asd', 'F', 'shikha@gmail.com'),
('aditiqwer', 'rsuaiia', 'agsj', 'F', 'aditi@yahoo.com'),
('richa', '12', '', 'F', 'richa.7327@gmail.com');
