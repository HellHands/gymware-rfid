-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2015 at 05:17 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gymms`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_user`
--

CREATE TABLE IF NOT EXISTS `auth_user` (
  `id` int(11) NOT NULL,
  `login_id` varchar(20) NOT NULL,
  `pass_key` varchar(30) NOT NULL,
  `security` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_user`
--

INSERT INTO `auth_user` (`id`, `login_id`, `pass_key`, `security`, `level`, `sex`, `name`) VALUES
(1, 'admin123', '123123', 'admin_gtg', 5, 'male', 'Mr.Admin');

-- --------------------------------------------------------

--
-- Table structure for table `mem_types`
--

CREATE TABLE IF NOT EXISTS `mem_types` (
  `id` int(11) NOT NULL,
  `mem_type_id` varchar(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `days` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mem_types`
--

INSERT INTO `mem_types` (`id`, `mem_type_id`, `name`, `days`, `rate`, `details`) VALUES
(1, 'PXTELFNR', 'Monthly_Men_NEW', 30, 1000, 'All Machines Without Cardio ,New Registration+Fees'),
(2, 'HVYWDMXC', 'Monthly_Men_Full', 30, 1600, 'All Machines With Cardio ,New Registration+Fees'),
(3, 'ZOTUSMYD', 'Monthly_Men_Regular', 30, 800, 'All Machines Without Cardio ,Existing Member'),
(4, 'BEFDOUHV', 'Monthly_Men_Full_Regular', 30, 1500, 'All Machines With Cardio , Existing Member'),
(5, 'QYEHWPSV', 'Quaterly_Men_Regular', 90, 2200, 'All Machines Without Cardio  For 3 Months'),
(6, 'GCABPZMH', 'Quaterly_Men_Full', 90, 4000, 'All Machines With Cardio  For 3 Months'),
(7, 'HRVDUZBM', 'Half_Yearly_Men_Regular', 181, 4000, 'All Machines Without Cardio  For 6 Months'),
(8, 'LYBWHPZE', 'Half_Yearly_Men_Full', 181, 7500, 'All Machines With Cardio  For 6 Months'),
(9, 'GAHMKCYI', 'Yearly_Men_Regular', 365, 7500, 'All Machines Without Cardio  For 12 Months'),
(10, 'KTULDPWJ', 'Yearly_Men_Full', 365, 14000, 'All Machines With Cardio  For 12 Months'),
(11, 'ZUIWXYDR', 'Women_New_REG', 30, 1100, 'All Machines  For 30 Days ,New Registration'),
(12, 'CLEBRHFK', 'Women_Monthly_Regular', 30, 1000, 'All Machines  For 30 Days ,Existing Member'),
(13, 'YKAONRTB', 'Women_Quaterly_Regular', 90, 2800, 'All Machines  For 3 Months'),
(14, 'KCVNYQLE', 'Women_Half_Year', 181, 5000, 'All Machines  For 6 Months'),
(15, 'ELJKHFDN', 'Women_Yearly', 365, 9500, 'All Machines  For 12 Months'),
(16, 'ZDJLFBMW', 'Women_2months', 61, 1900, 'all machines for two months only');

-- --------------------------------------------------------

--
-- Table structure for table `subsciption`
--

CREATE TABLE IF NOT EXISTS `subsciption` (
  `id` int(7) NOT NULL,
  `mem_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `sub_type` varchar(100) NOT NULL,
  `paid_date` date NOT NULL,
  `expiry` date NOT NULL,
  `total` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `invoice` varchar(30) NOT NULL,
  `sub_type_name` text NOT NULL,
  `bal` int(11) NOT NULL,
  `exp_time` bigint(20) NOT NULL,
  `renewal` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subsciption`
--

INSERT INTO `subsciption` (`id`, `mem_id`, `name`, `sub_type`, `paid_date`, `expiry`, `total`, `paid`, `invoice`, `sub_type_name`, `bal`, `exp_time`, `renewal`) VALUES
(1, 1441732811, 'Dk', 'HVYWDMXC', '1993-01-06', '1993-02-05', 1600, 1500, '41732885ab8', 'Monthly_Men_Full', 100, 728866800, 'yes'),
(2, 1441733243, 'azam', 'BEFDOUHV', '2015-09-08', '2015-10-08', 1500, 1400, '41733296m6v', 'Monthly_Men_Full_Regular', 100, 1444255200, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE IF NOT EXISTS `time_table` (
  `id` int(11) NOT NULL,
  `mem_id` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE IF NOT EXISTS `user_data` (
  `id` int(7) NOT NULL,
  `wait` varchar(10) NOT NULL,
  `newid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pic_add` text NOT NULL,
  `height` float NOT NULL,
  `weight` int(11) NOT NULL,
  `joining` date NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `proof` text NOT NULL,
  `other_proof` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `wait`, `newid`, `name`, `address`, `contact`, `email`, `pic_add`, `height`, `weight`, `joining`, `age`, `sex`, `proof`, `other_proof`) VALUES
(1, 'no', 1441732811, 'Dk', 'karachi', 687689669, 'danishdk878@gmail.com', '../images/1441732811.jpg', 553, 70, '1993-01-06', 22, 'Male', 'PAN Card', ' '),
(2, 'no', 1441733243, 'azam', 'karachi', 89768966, 'danishdk878@gmail.com', '../images/1441733243.jpg', 53, 70, '2015-09-08', 33, 'Male', 'Voter Card', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_user`
--
ALTER TABLE `auth_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mem_types`
--
ALTER TABLE `mem_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subsciption`
--
ALTER TABLE `subsciption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_user`
--
ALTER TABLE `auth_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `mem_types`
--
ALTER TABLE `mem_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `subsciption`
--
ALTER TABLE `subsciption`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
