-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 21, 2018 at 01:27 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u806686084_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `details_id` int(20) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `sb_phone` varchar(15) DEFAULT NULL,
  `general_email` varchar(40) DEFAULT NULL,
  `cfo_name` varchar(30) DEFAULT NULL,
  `cfo_phone` varchar(100) DEFAULT NULL,
  `cfo_email` varchar(40) DEFAULT NULL,
  `annula_sales` varchar(20) DEFAULT NULL,
  `number_of_employees` varchar(50) DEFAULT NULL,
  `is_headquarter` varchar(10) DEFAULT NULL,
  `website` varchar(100) DEFAULT NULL,
  `size_dc_plan` varchar(40) DEFAULT NULL,
  `recent_news` varchar(50) DEFAULT NULL,
  `special_notes` varchar(100) DEFAULT NULL,
  `cfo_assistant` varchar(100) DEFAULT NULL,
  `linkedin` varchar(60) DEFAULT NULL,
  `hot_lead` tinyint(1) DEFAULT NULL,
  `state` varchar(5) DEFAULT NULL,
  `salesmen` varchar(255) DEFAULT NULL,
  `followup` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--


--
-- Table structure for table `logcall`
--

CREATE TABLE `logcall` (
  `logcall_id` int(11) NOT NULL,
  `details_id` int(11) NOT NULL,
  `date_called` varchar(30) DEFAULT NULL,
  `time_called` varchar(20) DEFAULT NULL,
  `what_happened` varchar(100) NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logcall`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `reminder_id` int(11) NOT NULL,
  `reminder` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`details_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `logcall`
--
ALTER TABLE `logcall`
  ADD PRIMARY KEY (`logcall_id`),
  ADD KEY `fk_details_id_logcall` (`details_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`reminder_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `details_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1129;

--
-- AUTO_INCREMENT for table `logcall`
--
ALTER TABLE `logcall`
  MODIFY `logcall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1620;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logcall`
--
ALTER TABLE `logcall`
  ADD CONSTRAINT `fk_details_id_logcall` FOREIGN KEY (`details_id`) REFERENCES `details` (`details_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
