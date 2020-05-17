-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2020 at 05:23 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pulilansystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `myref` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `age` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`id`, `fullname`, `gender`, `company_name`, `myref`, `department`, `dob`, `age`, `position`, `date_added`, `status`) VALUES
(1, 'ANTHONY', 'male', 'sample', '5ea68b4250e00', 'IT', '1997-08-11', '22', 'PROGRAMMER', '2020-04-27', 'fired'),
(2, 'CARLO SANTOS', 'male', 'sample', '5ea68b4250e00', 'IT', '1997-08-11', '22', 'FULLSTACK DEVELOPER', '2020-04-27', 'active'),
(3, 'ROSALIE VIRAY', 'female', 'EXAMPLE COMPANY', '5ea6c98a4a1d5', 'IT', '1994-01-02', '34', 'FULLSTACK DEVELOPER', '2020-04-27', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL,
  `myref` varchar(50) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `company_name`, `address`, `mobile_number`, `myref`, `account_type`, `user_type`, `status`, `date_created`) VALUES
(1, 'admin', 'admin', '', '', '', '', '', '', 'super_admin', '', '0000-00-00'),
(5, 'dole', 'dole', 'carlo', '', 'municipality of pulilan bulacan', '09090909090', '12345', 'department', 'dole', 'active', '2020-04-27'),
(10, 'sample', 'sample', 'sample', 'sample', 'tinejero pulilan bulacan', '09666666666', '5ea68b4250e00', 'company', 'company', 'active', '2020-04-27'),
(13, 'example', 'example', 'EXAMPLE', 'EXAMPLE COMPANY', 'PENABATAN PULILAN BULACAN', '09111111111', '5ea6c98a4a1d5', 'company', 'company', 'active', '2020-04-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
