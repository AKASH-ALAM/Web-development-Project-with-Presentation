-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2017 at 02:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `birth_date` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL,
  `annual_basic_pay` float NOT NULL,
  `monthly_pay` float NOT NULL,
  `tax` float NOT NULL,
  `tax_amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `name`, `gender`, `birth_date`, `address`, `city`, `province`, `postal_code`, `email`, `website`, `join_date`, `annual_basic_pay`, `monthly_pay`, `tax`, `tax_amount`) VALUES
(101, 'Arshdeep Singh', 'male', '1994-09-22', '100 graydon hall drive', 'North york', 'ON', 'm3A3A9', 'boparai.arsh3@gmail.com', 'www.facebook.com', '2017-10-26', 200000, 11833.3, 29, 21500),
(102, 'Nancy Sharma', 'female', '1994-04-04', 'parkway forest', 'North york', 'ON', 'm3A3A9', 'nancy@gmail.com', 'www.facebook.com', '2017-10-26', 300000, 16750, 33, 33250),
(105, 'Gurminder Singh', 'male', '1994-09-23', '100 graydon hall', 'Brampton', 'ON', 'm3A3A1', 'guri@gmail.co', 'www.snapchat.com', '2017-10-10', 100000, 6166.67, 26, 10500),
(106, 'varinder', 'Male', '22/09/1994', 'brampton park', 'Toronto', 'ON', 'm3a3a4', 'varinder@gmail.com', 'www.snap.cpm', '22/11/2017', 444000, 24790, 33, 49210),
(109, 'Tajinder', 'Male', '1995/09/22', '100 grsdon', 'Missisauga', 'ON', 'm34r5t', 'taji@GMAIL.COM', 'jot.com', '2017/09/24', 299999, 16749.9, 33, 33249.9),
(123, 'Sakshi', 'Please select your Gender', '1994-10-09', 'Montreal junguu', 'montreal', 'QC', 'Q2a3e4', 'sakshi@gmail.co.ca', 'sakshi.fb.co.ca', '2017-10-31', 300000, 16750, 33, 33250),
(124, 'Jagdish', 'Female', '1994/09/08', 'ertyuop buyttt', 'brampton', 'ON', 'm7g65f', 'arsh5@gmail.com', 'arsh5#@gail.com', '1994/09/8', 4000000, 223333, 33, 443333),
(167, 'Jogiyaa', 'Male', '1997-06-17', 'Montrl junguu', 'montreal', 'QC', 'Q2a3e4', 'sak@gmail.com', 'www.facebook.com', '2017-10-20', 89000, 5830, 20.5, 8836.67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
