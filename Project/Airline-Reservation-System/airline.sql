-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 03:20 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE IF NOT EXISTS `flights` (
  `f_no` varchar(20) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `f_src` varchar(20) NOT NULL,
  `f_dest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flights`
--

INSERT INTO `flights` (`f_no`, `f_name`, `f_src`, `f_dest`) VALUES
('JA501', 'Jet Airways', 'Mumbai', 'Sydney'),
('EM909', 'Fly Emirates', 'Chennai', 'Singapore'),
('AI504', 'Air India', 'Ahmedabad', 'London'),
('AI873', 'Air India', 'London', 'Mumbai'),
('EM547', 'Emirates', 'Abu Dhabi', 'Goa'),
('BR432', 'British Airways', 'New york', 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `P_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `mno` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `f_no` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`P_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`P_id`, `Fname`, `Lname`, `age`, `mno`, `email`, `password`, `f_no`) VALUES
(1, 'aaa', 'aaa', 12, '1212121212', '1@1.cc', '123123123', NULL),
(2, 'a', 'a', 19, '1111111111', '1@1.cc', '111111111', NULL),
(3, 'Royce', 'Remedios', 10, '1111111111', 'Royce@gmail.com', '123123123', NULL),
(4, 'Rahul', 'Dravid', 40, '9090909090', 'rahul@gmail.com', '123123123', 'EM547'),
(5, 'aw', 'aws', 90, '1111111111', '12@2.cc', '123123123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `t_no` int(30) NOT NULL,
  `p_id` int(30) NOT NULL,
  `t_fare` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`t_no`, `p_id`, `t_fare`) VALUES
(19116, 1, 30000),
(12934, 2, 45000),
(19115, 3, 50000),
(12876, 4, 300000),
(19001, 5, 300000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
