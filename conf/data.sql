-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 13, 2015 at 08:28 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `pid` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  `state` varchar(10) NOT NULL,
  `Creator` varchar(100) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`pid`, `name`, `url`, `state`, `Creator`) VALUES
(1, 'anu', 'anu.lpm.com', '2', 'anumon'),
(2, 'som', 'som.lpm.com', '1', 'soman'),
(3, 'anu', 'anu.lpm.com', '2', 'asdf'),
(4, 'anu', 'anu.lpm.com', '2', 'asdf'),
(5, 'anu', 'anu.lpm.com', '2', 'asdf'),
(6, 'anu', 'anu.lpm.com', '2', 'sdaf'),
(7, 'anu', 'anu.lpm.com', '2', 'sdaf'),
(8, 'anvar', 'anvar.lpm.com', '1', 'sadiq'),
(9, 'asdf', 'asdf.lpm.com', '2', 'sadf'),
(10, 'soam', 'soam.lpm.com', '1', 'asdf');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
