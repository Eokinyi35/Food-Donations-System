-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2018 at 02:11 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is11`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `aid_institution`
--

CREATE TABLE `aid_institution` (
  `Name` varchar(20) NOT NULL,
  `password` varchar(150) NOT NULL,
  `location` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `institution_id` int(10) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aid_institution`
--

INSERT INTO `aid_institution` (`Name`, `password`, `location`, `email`, `institution_id`, `username`) VALUES
('RedCross', 'qwerty', '', 'info@recross.co.ke', 2, 'RedCross'),
('World Food Organizat', 'd8578edf8458ce06fbc5bb76a58c5ca4', '14th riverside', 'info@wfo.org', 5, 'WFO');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `dispatch_id` int(10) NOT NULL,
  `donation_id` int(20) NOT NULL,
  `dispatchcenterId` int(20) NOT NULL,
  `dispatch_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `donation_quantity` varchar(30) NOT NULL,
  `institution_id` int(20) NOT NULL,
  `donation_location` varchar(50) NOT NULL,
  `FoodType` varchar(30) NOT NULL,
  `donation_Description` varchar(500) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `expiry_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`dispatch_id`, `donation_id`, `dispatchcenterId`, `dispatch_time`, `donation_quantity`, `institution_id`, `donation_location`, `FoodType`, `donation_Description`, `donor_email`, `expiry_date`) VALUES
(90, 90, 1, '2018-10-23 17:34:30', '66', 19, 'Strathmore university', 'Dry', '66 sacs', 'eokinyi35@gmail.com', '0000-00-00'),
(91, 91, 2, '2018-10-23 18:28:56', '44', 19, 'Strathmore University', 'Processed', '44 packets of sausages', '', '0000-00-00'),
(92, 92, 2, '2018-10-23 18:37:20', '54', 19, 'Strathmore University', 'Perishable', '54 can of canned fish', 'eokinyi35@gmail.com', '0000-00-00'),
(93, 93, 1, '2018-10-23 18:52:17', '44', 19, 'Strath', 'Dry', '44 sacs', 'eokinyi35@gmail.com', '0000-00-00'),
(94, 94, 1, '2018-10-24 13:54:19', '33', 19, 'Strathmore University', 'Perishable', '33 cans of canned food', 'eokinyi35@gmail.com', '0000-00-00'),
(95, 95, 1, '2018-10-25 09:39:33', '23', 0, 'Strathmore University', 'Perishable', '23 bars of chocolate', 'eokinyi35@gmail.com', '0000-00-00'),
(96, 96, 2, '2018-11-06 12:55:10', '23', 0, 'Strathmore University', 'Perishable', '23 bars of chocolate', 'eokinyi35@gmail.com', '0000-00-00'),
(97, 97, 1, '2018-10-24 14:25:14', '44', 0, 'strathmore University', 'Dry', '', 'eokinyi35@gmail.com', '0000-00-00'),
(98, 98, 2, '2018-10-24 14:57:05', '23', 19, 'Madaraka', 'Processed', 'jjj', 'eokinyi35@gmail.com', '0000-00-00'),
(99, 99, 1, '2018-10-25 09:54:40', '23', 0, 'Madaraka', 'Processed', 'jjj', 'eokinyi35@gmail.com', '0000-00-00'),
(100, 100, 2, '2018-10-25 09:54:55', '23', 0, 'Tulia Court, Block 100A', 'Dry', '23 bags of maize', 'eokinyi35@gmail.com', '0000-00-00'),
(101, 101, 2, '2018-10-29 18:07:41', '33', 0, 'Strathmore University', 'Dry', '33 sacs of maize', 'eokinyi35@gmail.com', '0000-00-00'),
(103, 103, 1, '2018-11-06 12:57:06', '33', 0, 'Strathmore University', 'Perishable', '33 cans of canned maize', 'eokinyi35@gmail.com', '2018-12-23'),
(111, 111, 1, '2018-11-06 21:25:40', '55', 0, 'Tulia Court Block 100A', 'Processed', '55 cans of canned beans', 'eokinyi35@gmail.com', '2019-01-10'),
(112, 112, 1, '2018-11-07 11:43:20', '44', 19, 'Strathmore University', 'Processed', '44 bars of chocolate', 'eokinyi35@gmail.com', '2019-01-18');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch_center`
--

CREATE TABLE `dispatch_center` (
  `organizationname` varchar(20) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `location` varchar(30) NOT NULL,
  `dispatchcenterId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispatch_center`
--

INSERT INTO `dispatch_center` (`organizationname`, `phoneno`, `email`, `location`, `dispatchcenterId`) VALUES
('Kwetu Home ', 709656444, 'kwetu@gmail.com', 'Madaraka', 1),
('Street Feed', 799888222, 'streetfeed@gmail.com', '14th riverside', 2);

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `user_id` int(20) NOT NULL,
  `donor_email` varchar(100) NOT NULL,
  `image` varchar(225) NOT NULL DEFAULT 'default.jpg',
  `donation_id` int(10) NOT NULL,
  `donation_description` varchar(30) NOT NULL,
  `donation_location` varchar(30) NOT NULL,
  `donation_quantity` int(10) NOT NULL,
  `donation_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `FoodType` varchar(20) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `institution_id` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `expiry_date` date NOT NULL,
  `donor_phone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`user_id`, `donor_email`, `image`, `donation_id`, `donation_description`, `donation_location`, `donation_quantity`, `donation_time`, `FoodType`, `campaign_id`, `lat`, `lng`, `institution_id`, `status`, `expiry_date`, `donor_phone`) VALUES
(16, '', 'li2.jpg', 62, 'Test Ekenebt', '', 5000, '2018-10-18 14:37:55.000000', 'Dry Food', 3, -1.310192, 36.813145, 0, 1, '0000-00-00', 0),
(16, '', 'li2.jpg', 63, 'Test Ekenebt', '', 5000, '2018-10-18 14:38:31.000000', 'Dry Food', 3, -1.310192, 36.813145, 0, 1, '0000-00-00', 0),
(16, '', 'li2.jpg', 64, '44 sacs', '', 44, '2018-10-18 14:43:46.000000', 'Dry Food', 3, -1.310173, 36.813099, 0, 1, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 90, '66 sacs', 'Strathmore university', 66, '2018-10-23 14:25:11.000000', 'Dry', 3, -1.307280, 36.819443, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 91, '44 packets of sausages', 'Strathmore University', 44, '2018-10-23 15:25:55.000000', 'Processed', 3, -1.309945, 36.813137, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 92, '54 can of canned fish', 'Strathmore University', 54, '2018-10-23 15:36:42.000000', 'Perishable', 3, -1.309948, 36.813137, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 93, '44 sacs', 'Strath', 44, '2018-10-23 15:50:50.000000', 'Dry', 3, -1.310049, 36.813129, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 94, '33 cans of canned food', 'Strathmore University', 33, '2018-10-23 16:40:17.000000', 'Perishable', 3, -1.310188, 36.813156, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 95, '23 bars of chocolate', 'Strathmore University', 23, '2018-10-24 10:51:20.000000', 'Perishable', 3, -1.310153, 36.813141, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 96, '23 bars of chocolate', 'Strathmore University', 23, '2018-10-24 10:51:20.000000', 'Perishable', 3, -1.310153, 36.813141, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 97, '', 'strathmore University', 44, '2018-10-24 11:23:46.000000', 'Dry', 3, -1.309346, 36.812454, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 98, 'jjj', 'Madaraka', 23, '2018-10-24 11:55:45.000000', 'Processed', 6, -1.310192, 36.813148, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 99, 'jjj', 'Madaraka', 23, '2018-10-24 11:55:48.000000', 'Processed', 6, -1.310192, 36.813148, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 100, '23 bags of maize', 'Tulia Court, Block 100A', 23, '2018-10-24 21:44:20.000000', 'Dry', 3, -1.308770, 36.813480, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 101, '33 sacs of maize', 'Strathmore University', 33, '2018-10-29 15:05:19.000000', 'Dry', 3, -1.310010, 36.813152, 0, 0, '0000-00-00', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 103, '33 cans of canned maize', 'Strathmore University', 33, '2018-11-06 09:40:44.000000', 'Perishable', 3, -1.310021, 36.813168, 0, 0, '2018-12-23', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 108, '55 bars of chocolate', 'Strathmore University', 55, '2018-11-06 15:51:52.000000', 'Perishable', 3, -1.310233, 36.813137, 0, 1, '2019-01-16', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 109, '55 bars of chocolate', 'Strathmore University', 55, '2018-11-06 15:51:52.000000', 'Perishable', 3, -1.310233, 36.813137, 0, 1, '2019-01-16', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 110, '33 sacs of maize', 'Strathmore University', 33, '2018-11-06 15:57:26.000000', 'Dry', 3, -1.310233, 36.813137, 0, 1, '2019-02-28', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 111, '55 cans of canned beans', 'Tulia Court Block 100A', 55, '2018-11-06 18:24:10.000000', 'Processed', 5, -1.309232, 36.813187, 0, 0, '2019-01-10', 0),
(19, 'eokinyi35@gmail.com', 'li2.jpg', 112, '44 bars of chocolate', 'Strathmore University', 44, '2018-11-07 07:58:00.000000', 'Processed', 6, -1.309961, 36.813164, 0, 0, '2019-01-18', 706192543);

-- --------------------------------------------------------

--
-- Table structure for table `donationscampaigns`
--

CREATE TABLE `donationscampaigns` (
  `campaign_name` varchar(30) NOT NULL,
  `campaign_description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `campaign_id` int(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `institution_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donationscampaigns`
--

INSERT INTO `donationscampaigns` (`campaign_name`, `campaign_description`, `image`, `campaign_id`, `Name`, `institution_id`) VALUES
('Put a smile', '', 'Ab_food_06.jpg', 3, '', 0),
('Put a smile 2', '', 'Ab_food_06.jpg', 5, '', 0),
('Show your love ', '', 'li2.jpg', 6, 'WFO', 0),
('Cadbury', 'put a smile', 'Ab_food_06.jpg', 12, 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `household`
--

CREATE TABLE `household` (
  `user_id` int(20) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `password` varchar(150) NOT NULL,
  `location` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `household`
--

INSERT INTO `household` (`user_id`, `FName`, `LName`, `username`, `email`, `phoneNo`, `password`, `location`) VALUES
(6, 'Manu', 'Okinyi', 'mokinyi', 'musyoki@gmail.com', 778889999, 'd8578edf8458ce06fbc5', '14th riverside'),
(8, 'Manu', 'Okinyi', 'okinyi', 'musyoki@gmail.com', 704122112, 'd8578edf8458ce06fbc5', '14th riverside'),
(12, 'Diana', 'Me', 'modi', 'musyoki@gmail.com', 1234567890, 'd8578edf8458ce06fbc5', '14th riverside'),
(16, 'Emmanuel', 'Okinyi', 'Eokinyi35', 'okinyiemmanuel@yahoo', 776222333, 'd8578edf8458ce06fbc5bb76a58c5ca4', 'Madaraka'),
(19, 'Emmanuel', 'Okinyi', 'Eodera', 'eokinyi35@gmail.com', 706192543, '912ec803b2ce49e4a541068d495ab570', 'Madaraka'),
(23, 'mimi', 'mimi', 'mimi', 'mim@ghj.com', 706192543, 'dde6ecd6406700aa000b213c843a3091', '6126');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aid_institution`
--
ALTER TABLE `aid_institution`
  ADD PRIMARY KEY (`institution_id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`dispatch_id`),
  ADD UNIQUE KEY `donation_id` (`donation_id`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `dispatchcenterId` (`dispatchcenterId`) USING BTREE;

--
-- Indexes for table `dispatch_center`
--
ALTER TABLE `dispatch_center`
  ADD PRIMARY KEY (`dispatchcenterId`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`donation_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `campaign_id` (`campaign_id`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `donationscampaigns`
--
ALTER TABLE `donationscampaigns`
  ADD PRIMARY KEY (`campaign_id`),
  ADD KEY `Name` (`Name`),
  ADD KEY `institution_id` (`institution_id`);

--
-- Indexes for table `household`
--
ALTER TABLE `household`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aid_institution`
--
ALTER TABLE `aid_institution`
  MODIFY `institution_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `dispatch_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `dispatch_center`
--
ALTER TABLE `dispatch_center`
  MODIFY `dispatchcenterId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `donation_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `donationscampaigns`
--
ALTER TABLE `donationscampaigns`
  MODIFY `campaign_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `household`
--
ALTER TABLE `household`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD CONSTRAINT `dispatchcenterId` FOREIGN KEY (`dispatchcenterId`) REFERENCES `dispatch_center` (`dispatchcenterId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `donation_id` FOREIGN KEY (`donation_id`) REFERENCES `donations` (`donation_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `campaign_id` FOREIGN KEY (`campaign_id`) REFERENCES `donationscampaigns` (`campaign_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `household` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
