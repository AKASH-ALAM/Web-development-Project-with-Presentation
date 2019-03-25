-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 08:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savoyonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `movie` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `quantity` int(250) NOT NULL,
  `paymentmethod` varchar(10) NOT NULL,
  `cardno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`movie`, `name`, `email`, `contactno`, `quantity`, `paymentmethod`, `cardno`) VALUES
('Avengers: Infinity War (2018)', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 1, 'paypal', '0011'),
('Dunkirk', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 1, 'paypal', '3366'),
('Insidious - The Last Key (2018', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 5, 'credit/deb', '7744'),
('Jumanji: Welcome to the Jungle', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 3, 'credit/deb', '5533'),
('Justice League', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 1, 'paypal', '6655'),
('Maze Runner The Death Cure (20', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 1, 'paypal', '4411'),
('Phantom Thread', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 3, 'paypal', '7733'),
('Star Wars: The Last Jedi', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 6, 'paypal', '3322'),
('Tomb Raider (2018)', 'Tharusha Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 1, 'credit/deb', '7733');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `suggestion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`firstname`, `lastname`, `email`, `contactno`, `suggestion`) VALUES
('Tharusha', 'Jayadeera', 'tharusha.pasindu@ymail.com', '0715414939', 'this is a very good hall.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
