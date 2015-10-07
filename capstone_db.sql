-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2015 at 02:13 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `physical_report`
--

CREATE TABLE IF NOT EXISTS `physical_report` (
  `physical_id` int(11) NOT NULL,
  `mfo` int(11) NOT NULL,
  `month_year` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `performance_indicator` varchar(255) NOT NULL,
  `annual_target` int(11) NOT NULL,
  `target_this_month` int(11) NOT NULL,
  `target_to_date` int(11) NOT NULL,
  `accom_this_month` int(11) NOT NULL,
  `accom_to_date` int(11) NOT NULL,
  `percent_atm` varchar(255) NOT NULL,
  `percent_atd` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physical_report`
--

INSERT INTO `physical_report` (`physical_id`, `mfo`, `month_year`, `project`, `performance_indicator`, `annual_target`, `target_this_month`, `target_to_date`, `accom_this_month`, `accom_to_date`, `percent_atm`, `percent_atd`) VALUES
(1, 2, 'June/2015', 'FMS Timber', 'Seedlings Production number', 1240200, 320065, 960200, 45000, 959000, '5%', '77%'),
(2, 2, 'June/2015', 'FMS Fuelwood', 'Seedlings Production number', 295000, 98333, 295000, 14000, 295000, '5%', '100%'),
(3, 2, 'June/2015', 'FMS Cacao', 'Seedlings Produced number', 350000, 116667, 350000, 19600, 350000, '5%', '100%'),
(4, 2, 'June/2015', 'FMS Bamboo', 'Seedlings Produced number', 50000, 16667, 50000, 4000, 50000, '8%', '100%'),
(17, 2, 'June/2015', 'Urban Forestry', 'Seedlings Produced Number', 203000, 67667, 203000, 7400, 203000, '3%', '100%'),
(29, 1, 'June/2015', 'Preparation/Evaluation & Submission of Monthly and Annual Reports', 'annual & monthly reports prep./ submitted to RO (no.)', 12, 1, 6, 1, 6, '17%', '50%'),
(30, 1, 'June/2015', 'Establishing Partnership and Collaboration with Stakeholders (MFPS, PO, CSO, NGO, NCI, etc.)', 'group created/strengthened(no.)', 4, 4, 4, 4, 4, '100%', '100%'),
(31, 1, 'June/2015', 'Support to Environmental Events', 'environmental events supported (no.)', 4, 0, 0, 2, 6, '0%', '150%'),
(32, 3, 'June/2015', 'Review, Assessment and monitoring of compliance to existing agreements, permits', 'tenurial instrument holders monitored (no.)', 4, 1, 2, 1, 2, '50%', '50%'),
(33, 3, 'June/2015', 'CSC Assessment ', 'CSC assessed with cathegorical recommendation (no.)', 27, 3, 11, 3, 11, '27%', '41%'),
(34, 3, 'June/2015', 'Management of Foreshore Areas', 'permits/lease processed & endorsed to LMB', 11, 1, 5, 2, 4, '40%', '36%'),
(35, 3, 'June/2015', 'Valuation and Re-appraisal of Foreshore Lease', 'foreshore leases/permits valuated/appraised/re-appraised (no)', 83, 10, 38, 2, 8, '5%', '9%');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `usertype` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `first_name`, `middle_name`, `last_name`, `email`, `phone`, `usertype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ace', 'israel', 'cotejo', 'acecutejo@gmail.com', '09229302098', 0),
(3, 'acepaulo', 'acepaulo', 'ace paulo', 'israel', 'cotejo', 'acelast@gmail.com', '09229302098', 2),
(4, 'coc', 'coc', 'clash', 'of', 'clans', 'coc@gmail.com', '09221234567', 2),
(5, 'username', 'password', 'first name', 'middle', 'last name', 'email@gmail.com', '0922123456', 1),
(6, 'kobe24', 'kobe24', 'kobe', 'bean', 'bryant', 'kobe24@gmail.com', '09221234567', 2),
(7, 'james24', 'b4cc344d25a2efe540adbf2678e2304c', 'james', 'love', 'reid', 'asdasd@gmail.com', '23093023', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `physical_report`
--
ALTER TABLE `physical_report`
  ADD PRIMARY KEY (`physical_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `physical_report`
--
ALTER TABLE `physical_report`
  MODIFY `physical_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
