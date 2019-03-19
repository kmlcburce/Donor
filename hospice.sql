-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 04:12 PM
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
-- Database: `hospice`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_table`
--

CREATE TABLE `donor_table` (
  `d_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `d_fname` varchar(128) NOT NULL,
  `d_lname` varchar(128) NOT NULL,
  `d_email` varchar(128) NOT NULL,
  `d_address` varchar(128) NOT NULL,
  `d_region` int(128) NOT NULL,
  `d_notes` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor_table`
--

INSERT INTO `donor_table` (`d_id`, `d_fname`, `d_lname`, `d_email`, `d_address`, `d_region`, `d_notes`) VALUES
(00000003, 'John', 'Dow', 'john@doe.com', '123 Blvd. ', 8, '25M'),
(00000004, 'Jane', 'Doe', 'jane@doe.com', '321 Blvd.', 4, '24F'),
(00000005, 'Ant', 'Thony', 'ant@thony.com', '456 Rd.', 7, '54M'),
(00000006, 'Bork', 'McBork', 'bork@bork.com', '654 Rd.', 8, '41D');

-- --------------------------------------------------------

--
-- Table structure for table `registration_table`
--

CREATE TABLE `registration_table` (
  `r_id` int(8) NOT NULL,
  `r_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `r_fname` varchar(128) NOT NULL,
  `r_lname` varchar(128) NOT NULL,
  `r_email` varchar(128) NOT NULL,
  `r_password` varchar(128) NOT NULL,
  `r_cpassword` varchar(128) NOT NULL,
  `r_agency` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource_table`
--

CREATE TABLE `resource_table` (
  `item_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `donor_id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `address` varchar(128) NOT NULL,
  `organ_type` varchar(128) NOT NULL,
  `blood_type` varchar(128) NOT NULL,
  `body_type` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource_table`
--

INSERT INTO `resource_table` (`item_id`, `donor_id`, `address`, `organ_type`, `blood_type`, `body_type`) VALUES
(00000006, 00000001, '123 Blvd.', 'Kidney', 'O+', 'Mesomorph'),
(00000007, 00000002, '321 Blvd.', 'Pancreas', 'AB+', 'Ectomorph'),
(00000008, 00000003, '456 Rd.', 'Lungs', 'A+', 'Mesomorph'),
(00000009, 00000004, '654 Rd.', 'Kidney', 'A+', 'Mesomorph');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `u_id` int(128) UNSIGNED ZEROFILL NOT NULL,
  `r_id` int(128) NOT NULL,
  `u_fname` varchar(128) NOT NULL,
  `u_lname` varchar(128) NOT NULL,
  `u_type` int(128) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_table`
--
ALTER TABLE `donor_table`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `registration_table`
--
ALTER TABLE `registration_table`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `resource_table`
--
ALTER TABLE `resource_table`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `fk_donor` (`donor_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `fk_r_id` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_table`
--
ALTER TABLE `donor_table`
  MODIFY `d_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration_table`
--
ALTER TABLE `registration_table`
  MODIFY `r_id` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resource_table`
--
ALTER TABLE `resource_table`
  MODIFY `item_id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `u_id` int(128) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
