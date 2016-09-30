-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2016 at 09:34 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrow_lean`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `image`) VALUES
(1, 'harsh@gmail.com', 'aeromaster', 'uploads/2016-01-14_07.28.26.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bid_demand`
--

CREATE TABLE `bid_demand` (
  `id` int(10) NOT NULL,
  `borrow_id` int(10) NOT NULL,
  `lend_id` int(10) NOT NULL,
  `bid_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_demand`
--

INSERT INTO `bid_demand` (`id`, `borrow_id`, `lend_id`, `bid_price`) VALUES
(3, 44, 45, '19.00'),
(4, 34, 34, '17.00');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_detail`
--

CREATE TABLE `borrow_detail` (
  `b_w_id` int(10) NOT NULL,
  `borrower_name` varchar(100) NOT NULL,
  `borrower_id` int(100) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `account_no` int(100) NOT NULL,
  `bor_demand` int(100) NOT NULL,
  `add_time` varchar(100) NOT NULL,
  `add_purpose` varchar(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `other_income` int(100) NOT NULL,
  `rent_house` int(100) NOT NULL,
  `transport` varchar(5) NOT NULL,
  `food_e` varchar(10) NOT NULL,
  `bank_account` varchar(20) NOT NULL,
  `bank_statement_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_detail`
--

INSERT INTO `borrow_detail` (`b_w_id`, `borrower_name`, `borrower_id`, `pan_no`, `account_no`, `bor_demand`, `add_time`, `add_purpose`, `salary`, `other_income`, `rent_house`, `transport`, `food_e`, `bank_account`, `bank_statement_pdf`) VALUES
(1, 'aero jain', 56, 'ABCDE1234A', 120000, 2, '12', '10000', 10000, 100000, 0, 'two', '10000', '10000', ''),
(2, 'wwwww aaaaa', 57, 'ABCDE1234A', 22323, 1, '27', '10000', 10000, 10000, 0, 'two', '10000', '1000', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_user`
--

CREATE TABLE `borrow_user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_father_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_address` text NOT NULL,
  `user_dob` varchar(50) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `avt_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_user`
--

INSERT INTO `borrow_user` (`id`, `user_name`, `user_father_name`, `user_email`, `user_pass`, `user_address`, `user_dob`, `phn`, `user_type`, `image`, `avt_date`) VALUES
(34, 'dwd kumar', 's kaum', 'aeromaste1r@gmail.com', 'aero', 'wdjfw;emf', '1994-01-22', '8505907284', '1', 'uploads/2016-01-14_07.28.26.jpg', '2016-08-11 11:39:02'),
(41, 'ewe wecre', 'revre', 'r32rc3@gmail.com', 'aero', 'rcweil r', '0034-02-14', '8505954945', '1', 'uploads/2016-01-14_07.28.26.jpg', '2016-08-12 15:56:23'),
(42, 'ewe wecre', 'revre', 'r32rc3nj@gmail.com', 'aero', 'rcweil rdcww', '0034-02-14', '8505954945', '1', '', '2016-08-12 15:58:17'),
(43, 'dewfgr egkrekg', 'fewkfke', 'fefe@gmail.com', 'aero', 'wqfklweg', '2016-08-04', '8505907284', '1', 'uploads/2016-01-14_07.28.26.jpg', '2016-08-12 16:02:18'),
(44, 'dewfgr egkrekg', 'fewkfke', 'fefe1@gmail.com', 'aero', 'wqfklweg', '2016-08-04', '8505907284', '1', 'uploads/2016-01-14_07.28.26.jpg', '2016-08-12 16:03:26'),
(45, 'wegfer ewfre', 'erfe', 'fewfe@gmail.com', 'aero', 'qrkjet', '2222-02-22', '8505907284', '2', '../uploads/sweet baby doll.jpg', '2016-08-12 16:06:37'),
(47, 'Girisha Garg', 'MUKESH GARG', 'GIRISHA1@INDIAOPPORTUNITY.IN', 'aero', 'Gurgaon', '1985-03-18', '9717414243', '1', '../uploads/2016-01-14_07.28.26.jpga', '2016-08-12 16:21:55'),
(48, 'harsh jain', 'dwhdfl', 'fehfe@gmail.com', 'aero', 'fhjwerngr', '0342-02-02', '8505907284', '1', '../uploads/2016-01-14_07.28.26.jpg', '2016-08-12 16:27:48'),
(49, 'aero123 jain', 'sfg', 'axdwd@gmail.com', 'aero', 'xejwdw', '1999-03-23', '8505907284', '1', '', '2016-08-12 16:28:28'),
(50, 'wqflin fhef', 'df', 'ewqe@gmail.com', 'aero', 'eliene', '1999-03-02', '8505907284', '1', '', '2016-08-12 16:29:07'),
(51, 'ewe werfe', 'dw', 'ario@gmail.com', 'aero', 'erfewj', '2016-08-25', '8505907284', '1', '', '2016-08-12 16:31:28'),
(52, 'awd efrwe', 'fewf', 'dd@gmail.com', 'aero', 'wrwecrew', '2014-02-13', '8505907284', '1', '', '2016-08-12 16:53:03'),
(53, 'harsh jain wdowedwe', 'gunku', 'ariharsh19941@gmail.com', 'aero', 'wedpw', '2016-08-10', '3434034343', '1', '../uploads/IMG-20150214-WA0002.jpg', '2016-08-12 17:11:10'),
(54, 'arihardshwqwxqwqwqw sdwed', 'wew', 'ariharsh199412@gmail.com', 'aeromaster', 'adkwdw', '2016-02-03', '8509272323', '1', '../uploads/IMG-20150214-WA0002.jpg', '2016-09-08 15:10:38'),
(55, 'wxew ewqe', 'Sanjay Kumar Jain', 'arcr@gmail.com', 'aero', 'ewew', '1994-02-03', '8505907284', '1', '../uploads/IMG-20150214-WA0002.jpg', '2016-09-13 10:45:10'),
(56, 'aero jain', 'sanjaykumar jain', 'ARIHARS@gmail.com', 'aeromaster', 'xhwbew', '1994-02-01', '8505907284', '1', '', '2016-09-13 12:39:36'),
(67, 'harsh jain', 'wedw', 'ariharsh19941@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'ewqcre', 'da57c6dfef8e50b9335f790d8590bb2a', '8505907284', '', '', ''),
(77, 'harsh jain', 'sanjay', 'ariharsh199412@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', 'ckswdg', '8e61c5a9c241aa88873450259e476121', '8505907284', '', '', ''),
(82, 'harsh jain', 'dqkefe', 'ariharsh199411@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'fwerfgr', '05/10/2016', '8505907284', '', '', ''),
(83, 'hharsh jain', 'aero', 'aeromaster@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'fewf', '05/10/2016', '8505907284', '', '', ''),
(84, 'harsh jain', 'dowd', 'aeromaster1234@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'dwefew', '14/09/2016', '8505907284', '2', '', '2016-09-29 06:24:38'),
(85, 'adfded fvwr', 'fwre', 'aeromaste122@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'ffedfe', '27/09/2016', '8505907284', '2', '', '2016-09-29 07:29:37'),
(86, 'fdfg ewtgre', 'aero', 'ariars@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'fewfe', '28/09/2016', '8505907284', '2', '', '2016-09-29 07:37:57'),
(87, 'harsh jai', 'awre', 'aero@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'gergr', '28/09/2016', '8505907284', '2', '', '2016-09-29 07:38:32'),
(88, 'harsh jain', 'aero', 'ariharsh19994@gmail.com', '9575f05d5454113cd5f349e0e1da503c', 'cqwr', '27/09/2016', '8505907284', '2', '', '2016-09-29 07:39:42');

-- --------------------------------------------------------

--
-- Table structure for table `educatation_detail`
--

CREATE TABLE `educatation_detail` (
  `id` int(100) NOT NULL,
  `borr_id` int(100) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `start_year` varchar(50) NOT NULL,
  `end_year` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `start_year_c` varchar(50) NOT NULL,
  `end_year_c` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educatation_detail`
--

INSERT INTO `educatation_detail` (`id`, `borr_id`, `school_name`, `start_year`, `end_year`, `college_name`, `start_year_c`, `end_year_c`, `degree`) VALUES
(6, 14, 'agra public school ', '2011', '2012', 'ajay kumar garg engineering college ', '2012', '2016', 'B-tech'),
(7, 15, 'agraero', '2011', '2012', 'ajay', '2012', '2016', 'btech'),
(8, 34, 'wdrrct', '2011', '2012', 'ldjew;re', '2012', '2016', 'b-tech'),
(9, 56, 'Akja', '2011', '2012', 'akgec', '2012', '2016', 'B-tech');

-- --------------------------------------------------------

--
-- Table structure for table `educatation_detail_lean`
--

CREATE TABLE `educatation_detail_lean` (
  `id` int(100) NOT NULL,
  `lean_id` int(100) NOT NULL,
  `school_name` varchar(20) NOT NULL,
  `year_start` varchar(20) NOT NULL,
  `year_end` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `start_date_c` varchar(20) NOT NULL,
  `end_date_c` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educatation_detail_lean`
--

INSERT INTO `educatation_detail_lean` (`id`, `lean_id`, `school_name`, `year_start`, `year_end`, `college_name`, `start_date_c`, `end_date_c`, `degree`) VALUES
(13, 45, 'agra public ', '2010', '2012', 'akg', '2012', '2016', 'Bsc');

-- --------------------------------------------------------

--
-- Table structure for table `employ_detail`
--

CREATE TABLE `employ_detail` (
  `id` int(100) NOT NULL,
  `borr_id` int(50) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `joined_d` varchar(100) NOT NULL,
  `left_d` varchar(100) NOT NULL,
  `c_salary` int(100) NOT NULL,
  `self_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ_detail`
--

INSERT INTO `employ_detail` (`id`, `borr_id`, `c_name`, `pos`, `joined_d`, `left_d`, `c_salary`, `self_e`) VALUES
(5, 14, 'indian opporunity ', 'web developer', '2016', '2016', 100000, '10000'),
(6, 15, 'indian ooprn', 'web developer', '2016', '', 100000, '10000'),
(7, 34, 'ercetr', 'web developer', '2011', '2012', 10000, '1009'),
(8, 56, 'india oop', 'web developer', '09/YYYY', '12/05/2016', 20000, '');

-- --------------------------------------------------------

--
-- Table structure for table `employ_detail_lean`
--

CREATE TABLE `employ_detail_lean` (
  `id` int(100) NOT NULL,
  `leans_id` int(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `joined_date` varchar(50) NOT NULL,
  `left_date` varchar(50) NOT NULL,
  `current_salary` int(50) NOT NULL,
  `self_employ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ_detail_lean`
--

INSERT INTO `employ_detail_lean` (`id`, `leans_id`, `cname`, `position`, `joined_date`, `left_date`, `current_salary`, `self_employ`) VALUES
(1, 15, 'india', 'web', '2012', '2013', 10000, 'no'),
(5, 45, 'fefgr', 'develope', '2012', '2016', 20000, '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lean_user`
--

CREATE TABLE `lean_user` (
  `lean_id` int(10) NOT NULL,
  `lean_name` varchar(50) NOT NULL,
  `lean_email` varchar(50) NOT NULL,
  `lean_address` text NOT NULL,
  `lean_phn` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lean_user`
--

INSERT INTO `lean_user` (`lean_id`, `lean_name`, `lean_email`, `lean_address`, `lean_phn`, `profile`) VALUES
(1, 'harsh jain', 'ariharsh1994@gmail.com', 'laxmi nagar j-extn ', '8505907284', '');

-- --------------------------------------------------------

--
-- Table structure for table `lend_detail`
--

CREATE TABLE `lend_detail` (
  `lend_d_id` int(10) NOT NULL,
  `lend_user` varchar(100) NOT NULL,
  `lend_id` int(10) NOT NULL,
  `lend_pan` varchar(100) NOT NULL,
  `lend_account` int(100) NOT NULL,
  `lend_wallet` int(100) NOT NULL,
  `home_ownership` varchar(50) NOT NULL,
  `salary` int(100) NOT NULL,
  `other_income` int(50) NOT NULL,
  `rent_on_house` int(50) NOT NULL,
  `vehl` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `primary_account` varchar(50) NOT NULL,
  `file_pdf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend_detail`
--

INSERT INTO `lend_detail` (`lend_d_id`, `lend_user`, `lend_id`, `lend_pan`, `lend_account`, `lend_wallet`, `home_ownership`, `salary`, `other_income`, `rent_on_house`, `vehl`, `food`, `primary_account`, `file_pdf`) VALUES
(2, 'harsh', 14, '12890455', 234455678, 100000, '', 0, 0, 0, '', '', '', ''),
(15, 'harsh123', 15, '', 2147483647, 100000, 'Rented', 10000, 10000, 10000, 'two', '10000', '1000000000', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `msg_to` varchar(100) NOT NULL,
  `msg_from` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `user_id`, `msg_to`, `msg_from`) VALUES
(2, 34, 'your account have been verified!!', 'admin'),
(3, 45, 'your account have been verified!!', 'admin'),
(4, 43, 'your account have been verified!!', 'admin'),
(5, 41, 'your account have been verified!!', 'admin'),
(6, 53, 'your account have been verified!!', 'admin'),
(7, 42, 'your account have been verified!!', 'admin'),
(8, 48, 'your account have been verified!!', 'admin'),
(9, 47, 'your account have been verified!!', 'admin'),
(10, 49, 'your account have been verified!!', 'admin'),
(11, 49, 'your account have been verified!!', 'admin'),
(12, 49, 'your account have been verified!!', 'admin'),
(13, 52, 'your account have been verified!!', 'admin'),
(14, 52, 'your account have been verified!!', 'admin'),
(15, 48, 'your account have been verified!!', 'admin'),
(16, 48, 'your account have been verified!!', 'admin'),
(17, 49, 'your account have been verified!!', 'admin'),
(18, 48, 'your account have been verified!!', 'admin'),
(19, 50, 'your account have been verified!!', 'admin'),
(20, 48, 'your account have been verified!!', 'admin'),
(21, 48, 'your account have been verified!!', 'admin'),
(22, 48, 'your account have been verified!!', 'admin'),
(23, 56, 'your account have been verified!!', 'admin'),
(24, 55, 'your account have been verified!!', 'admin'),
(25, 50, 'your account have been verified!!', 'admin'),
(26, 53, 'your account have been verified!!', 'admin'),
(27, 54, 'your account have been verified!!', 'admin'),
(28, 54, 'your account have been verified!!', 'admin'),
(29, 55, 'your account have been verified!!', 'admin'),
(30, 34, 'your account have been verified!!', 'admin'),
(31, 48, 'your account have been verified!!', 'admin'),
(32, 49, 'your account have been verified!!', 'admin'),
(33, 55, 'your account have been verified!!', 'admin'),
(34, 48, 'your account have been verified!!', 'admin'),
(35, 34, 'your account have been verified!!', 'admin'),
(36, 34, 'your account have been verified!!', 'admin'),
(37, 34, 'your account have been verified!!', 'admin'),
(38, 34, 'your account have been verified!!', 'admin'),
(39, 34, 'your account have been verified!!', 'admin'),
(40, 34, 'your account have been verified!!', 'admin'),
(41, 34, 'your account have been verified!!', 'admin'),
(42, 34, 'your account have been verified!!', 'admin'),
(43, 34, 'your account have been verified!!', 'admin'),
(44, 34, 'your account have been verified!!', 'admin'),
(45, 34, 'your account have been verified!!', 'admin'),
(46, 34, 'your account have been verified!!', 'admin'),
(47, 34, 'your account have been verified!!', 'admin'),
(48, 34, 'your account have been verified!!', 'admin'),
(49, 34, 'your account have been verified!!', 'admin'),
(50, 34, 'your account have been verified!!', 'admin'),
(51, 57, 'your account have been verified!!', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `active_request` int(10) NOT NULL DEFAULT '0',
  `borrow_amount` int(100) NOT NULL,
  `detail_user` varchar(100) NOT NULL,
  `rating` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `acvt_date` varchar(50) NOT NULL,
  `add_time` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `user_name`, `active_request`, `borrow_amount`, `detail_user`, `rating`, `type`, `acvt_date`, `add_time`) VALUES
(106, 45, 'wegfer ewfre', 1, 0, 'qrkjet', 4, 'lend', '2016-08-26 18:13:26', 0),
(107, 43, 'dewfgr egkrekg', 1, 0, 'wqfklweg', 0, 'borr', '2016-08-26 22:25:30', 0),
(108, 41, 'harsh jain', 1, 0, 'rcweil r', 0, 'borr', '2016-08-27 10:43:39', 0),
(110, 42, 'ewe wecre', 1, 0, 'rcweil rdcww', 0, 'borr', '2016-08-30 15:07:48', 0),
(111, 56, 'aero jain', 1, 0, 'xhwbew', 0, 'borr', '2016-09-13 12:44:38', 0),
(129, 57, 'wwwww aaaaa', 1, 0, 'dnke', 0, 'borr', '2016-09-13 16:05:34', 0);

-- --------------------------------------------------------

--
-- Table structure for table `request_borr_to_lean`
--

CREATE TABLE `request_borr_to_lean` (
  `id` int(10) NOT NULL,
  `borr_id` int(10) NOT NULL,
  `lean_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_borr_to_lean`
--

INSERT INTO `request_borr_to_lean` (`id`, `borr_id`, `lean_id`) VALUES
(4, 34, 45);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_demand`
--
ALTER TABLE `bid_demand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD PRIMARY KEY (`b_w_id`);

--
-- Indexes for table `borrow_user`
--
ALTER TABLE `borrow_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educatation_detail`
--
ALTER TABLE `educatation_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educatation_detail_lean`
--
ALTER TABLE `educatation_detail_lean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employ_detail`
--
ALTER TABLE `employ_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employ_detail_lean`
--
ALTER TABLE `employ_detail_lean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lean_user`
--
ALTER TABLE `lean_user`
  ADD PRIMARY KEY (`lean_id`);

--
-- Indexes for table `lend_detail`
--
ALTER TABLE `lend_detail`
  ADD PRIMARY KEY (`lend_d_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_borr_to_lean`
--
ALTER TABLE `request_borr_to_lean`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bid_demand`
--
ALTER TABLE `bid_demand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  MODIFY `b_w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `borrow_user`
--
ALTER TABLE `borrow_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `educatation_detail`
--
ALTER TABLE `educatation_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `educatation_detail_lean`
--
ALTER TABLE `educatation_detail_lean`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `employ_detail`
--
ALTER TABLE `employ_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employ_detail_lean`
--
ALTER TABLE `employ_detail_lean`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lean_user`
--
ALTER TABLE `lean_user`
  MODIFY `lean_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lend_detail`
--
ALTER TABLE `lend_detail`
  MODIFY `lend_d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `request_borr_to_lean`
--
ALTER TABLE `request_borr_to_lean`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
