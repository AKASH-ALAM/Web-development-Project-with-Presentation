-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 19, 2018 at 08:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `auser` varchar(50) NOT NULL,
  `apass` varchar(50) NOT NULL,
  `marquee1` text NOT NULL,
  `colgname` varchar(99) NOT NULL,
  `colgintro` text NOT NULL,
  `footerinfo` varchar(50) NOT NULL,
  `abouthead` varchar(50) NOT NULL,
  `aboutinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `auser`, `apass`, `marquee1`, `colgname`, `colgintro`, `footerinfo`, `abouthead`, `aboutinfo`) VALUES
(1, 'admin', 'caf1a3dfb505ffed0d024130f58c5cfa', 'SADIA Group Of Institutions', 'SADIA Group Of Institutions', 'a pioneer educational Institute of Northern India, has been striving to provide quality higher education since 2000. Approved by AICTE and UGC, ABC has a sprawling multi-discipline campus, world class facilities and competent faculty, with prime focus on research and quality education. Creating a benchmark in the field of education, ABC aims to create proficient technocrats and future leaders with emphasis on overall development of personality imbibing core human values among students.', '2019 SADIA Group Of Institutions.', 'About Us', 'Our College  is dedicated to preparing students with the knowledge, skills and training needed for meaningful employment. Through education, we create opportunities, change lives and impact futures.</font><br> <h3><b>Our values</b></h3> <font size=\"+1\">We are dedicated to preparing students for meaningful employment. We provide a quality education and learning environment. We embody integrity in everything we do. We believe in partnership with employers, students, graduates and our communities. We have pride in our students and are passionate about their success. We respect diversity and believe all people should have the opportunity to get an education and find meaningful employment. We believe in continuous improvement and exploring new ideas.</font><br> <h3><b>Who we are</b></h3> <font size=\"+1\">ABC is the parent organization for XYZ College.  Since its inception, ABC has been a leader in career-focused education, meeting workforce needs for in-demand employment fields. As occupational challenges and opportunities are recognized, ABC develops new programs in cooperation with industry leaders to meet the needs of our students and graduates and of employers, as well.'),
(2, 'sanjeev', '98d34c1758b15b5a359b69c2b08c5767', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `mob` bigint(50) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `gender`, `mob`, `address`) VALUES
(26, 'neeraj', '3b3b8360f70b78bb4f6239078e636626', 'neeraj@gmail.com', 'm', 8800670473, ''),
(28, 'nishant', 'caf1a3dfb505ffed0d024130f58c5cfa', 'nishant@nishant.com', 'm', 9451626198, ''),
(30, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@tets.com', 'm', 9458822647, ''),
(31, 'test3', '8ad8757baa8564dc136c1e07507f4a98', 'test2@gmail.com', 'm', 9898789, 'tst test '),
(32, 'test0', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', 'f', 987897987, 'asndhasvd'),
(33, 'test123', '202cb962ac59075b964b07152d234b70', 'test2@gmail.com', 'm', 123, ''),
(34, 'ravi', '63dd3e154ca6d948fc380fa576343ba6', 'ravi@gmail.com', 'm', 901555555, 'delhi'),
(35, 'sanjeev', '98d34c1758b15b5a359b69c2b08c5767', 'sanjeevtech2@gmail.com', 'm', 9015501897, '141 delhi\r\ndhakka'),
(36, 'abhi', 'd76f3d05cc9ac98f1f9160274a39fe33', 'abhi@gmail.com', 'm', 9015501899, 'ddd9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
