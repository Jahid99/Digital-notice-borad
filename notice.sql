-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 06:49 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notice`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'adminsays', '$2y$10$T5K7oxeXgFAvg/Zl498Hte1IVT60ievTbxD8IEBvGDWQcYaZKtcT2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sliders`
--

CREATE TABLE IF NOT EXISTS `tbl_sliders` (
  `id` int(16) NOT NULL,
  `image` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sliders`
--

INSERT INTO `tbl_sliders` (`id`, `image`, `name`, `date`) VALUES
(14, '1541605782_thump.jpg', 'Addmission-info-in-M.Sc-Engg.(14-9-18)', '2018-11-07 15:49:46'),
(15, '1541605836_thump.jpg', 'Addmission-in-MS(19-9-18)', '2018-11-07 15:50:39'),
(16, '1541605862_thump.jpg', 'Book-return-(11-9-18)', '2018-11-07 15:51:06'),
(17, '1541605946_thump.jpg', 'Bus-Scdule(1-9-18)', '2018-11-07 15:52:30'),
(18, '1541606155_thump.jpg', 'Comette-Metting-in-Conferance-Room(8-8-18)', '2018-11-07 15:55:59'),
(19, '1541606177_thump.jpg', 'Convocation-16-9-2018', '2018-11-07 15:56:20'),
(20, '1541606195_thump.jpg', 'Course-Registation(27-6-18)', '2018-11-07 15:56:39'),
(21, '1541606222_thump.jpg', 'CZM-Scholar-ship(1-7-18)', '2018-11-07 15:57:06'),
(22, '1541606303_thump.jpg', 'Fee-for-Transkript(24-7-18)', '2018-11-07 15:58:26'),
(23, '1541606338_thump.jpg', 'Final-Exam-Routine-for--Session2013-2014(27-8-18)', '2018-11-07 15:59:01'),
(24, '1541606363_thump.jpg', 'Football-Championship-(10-7-18)', '2018-11-07 15:59:26'),
(25, '1541606389_thump.jpg', 'Karam-Compition(24-9-18)', '2018-11-07 15:59:53'),
(26, '1541606417_thump.jpg', 'Library-card(4-9-18)', '2018-11-07 16:00:20'),
(27, '1541606438_thump.jpg', 'Result-Scholar-ship-for--Session2013-2014(10-7-18)', '2018-11-07 16:00:41'),
(28, '1541606459_thump.jpg', 'Scholar-ship-for--Session2013-2014(12-9-18)', '2018-11-07 16:01:02'),
(29, '1541606478_thump.jpg', 'Special-for--Session2012-2013(12-9-18)', '2018-11-07 16:01:22'),
(30, '1541606505_thump.jpg', 'Special-Term-Exam-for--Session2012-2013(29-8-18)', '2018-11-07 16:01:48'),
(31, '1541606532_thump.jpg', 'Submission-of-final-reportr--Session2012-2013(16-9-18)', '2018-11-07 16:02:15'),
(32, '1541606559_thump.jpg', 'Submission-of-final-reportr--Session2012-2013(26-9-18)', '2018-11-07 16:02:42'),
(33, '1541606581_thump.jpg', 'Thesses-Project-Submission-of-final-reportr--Session2012-2013(30-8-18)', '2018-11-07 16:03:04'),
(34, '1541606604_thump.jpg', 'Year-3-Term-1-Result-Sheet-Session-2014-2015(18-7-18)', '2018-11-07 16:03:28'),
(35, '1541606631_thump.jpg', 'Year-3-Term-2-cource-vaiva(18-7-18)', '2018-11-07 16:03:54'),
(36, '1541606655_thump.jpg', 'Year-3-Term-2-Result-Sheet-Session-2014-2015(18-7-18)', '2018-11-07 16:04:18'),
(37, '1541606675_thump.jpg', 'Year-4-Term-2-Theses-project-presentation(1-7-18)', '2018-11-07 16:04:38'),
(38, '1541655324_thump.jpg', 'Addmission-info-in-M.Sc-Engg.(14-9-18)', '2018-11-08 05:35:28'),
(39, '1541655343_thump.jpg', 'Addmission-in-MS(19-9-18)', '2018-11-08 05:35:47'),
(40, '1541655364_thump.jpg', 'Book-return-(11-9-18)', '2018-11-08 05:36:07'),
(41, '1541655382_thump.jpg', 'Comette-Metting-in-Conferance-Room(8-8-18)', '2018-11-08 05:36:25'),
(42, '1541655400_thump.jpg', 'Convocation-16-9-2018', '2018-11-08 05:36:44'),
(43, '1541655436_thump.jpg', 'Course-Registation(27-6-18)', '2018-11-08 05:37:19'),
(44, '1541655453_thump.jpg', 'CZM-Scholar-ship(1-7-18)', '2018-11-08 05:37:37'),
(45, '1541655482_thump.jpg', 'Fee-for-Transkript(24-7-18)', '2018-11-08 05:38:05'),
(46, '1541655503_thump.jpg', 'Final-Exam-Routine-for--Session2013-2014(27-8-18)', '2018-11-08 05:38:27'),
(47, '1541655557_thump.jpg', 'Football-Championship-(10-7-18)', '2018-11-08 05:39:20'),
(48, '1541655583_thump.jpg', 'Karam-Compition(24-9-18)', '2018-11-08 05:39:47'),
(49, '1541655606_thump.jpg', 'Library-card(4-9-18)', '2018-11-08 05:40:09'),
(50, '1541655630_thump.jpg', 'Result-Scholar-ship-for--Session2013-2014(10-7-18)', '2018-11-08 05:40:33'),
(51, '1541655651_thump.jpg', 'Scholar-ship-for--Session2013-2014(12-9-18)', '2018-11-08 05:40:54'),
(52, '1541655675_thump.jpg', 'Special-for--Session2012-2013(12-9-18)', '2018-11-08 05:41:18'),
(53, '1541655704_thump.jpg', 'Special-Term-Exam-for--Session2012-2013(29-8-18)', '2018-11-08 05:41:48'),
(54, '1541655726_thump.jpg', 'Submission-of-final-reportr--Session2012-2013(16-9-18)', '2018-11-08 05:42:10'),
(55, '1541655746_thump.jpg', 'Submission-of-final-reportr--Session2012-2013(26-9-18)', '2018-11-08 05:42:29'),
(56, '1541655765_thump.jpg', 'Thesses-Project-Submission-of-final-reportr--Session2012-2013(30-8-18)', '2018-11-08 05:42:48'),
(57, '1541655787_thump.jpg', 'Year-3-Term-1-Result-Sheet-Session-2014-2015(18-7-18)', '2018-11-08 05:43:10'),
(58, '1541655840_thump.jpg', 'Year-4-Term-2-Theses-project-presentation(1-7-18)', '2018-11-08 05:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `name` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL,
  `institution` varchar(256) NOT NULL,
  `roll` varchar(256) DEFAULT NULL,
  `session` varchar(256) DEFAULT NULL,
  `year` int(16) DEFAULT NULL,
  `term` int(16) DEFAULT NULL,
  `faculty` varchar(256) NOT NULL,
  `hall` varchar(256) DEFAULT NULL,
  `who_am_i` varchar(256) DEFAULT NULL,
  `mobile_no` varchar(16) DEFAULT NULL,
  `id` int(16) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`name`, `department`, `institution`, `roll`, `session`, `year`, `term`, `faculty`, `hall`, `who_am_i`, `mobile_no`, `id`, `email`, `password`) VALUES
('OK Name', 'sdfsaf', 'dfsadf', '', '', 0, 0, 'sdfasf', '', 'teacher', '', 5, 'johir@appshint.com', '$2y$10$nQD2DiQpTpE/hvGcSsxqTOG3TZi07Haa7dlBcTxMGJ3.Hgp6vn496'),
('Selim Ahemmed', 'ICE', 'NSTU', 'ASH1411068M', '2013-2014', 4, 2, 'Engineering', 'ASH', 'student', '01716057136', 6, 'selimshohon@gmail.com', '$2y$10$VgBK7Rv4suSmOzazcafTgu6XAvZClI41fZ2jzNdTKMGKrFAjls6b.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_sliders`
--
ALTER TABLE `tbl_sliders`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
