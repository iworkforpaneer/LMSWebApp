-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 08:54 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lmswebapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogindata`
--

CREATE TABLE `adminlogindata` (
  `aid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogindata`
--

INSERT INTO `adminlogindata` (`aid`, `email`, `password`, `time`) VALUES
(1, 'tahir.malik296@gmail.com', 'admin123@', '2020-09-09 04:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `bookdata`
--

CREATE TABLE `bookdata` (
  `id` int(11) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `booktitle` varchar(100) NOT NULL,
  `bookauthname` varchar(200) NOT NULL,
  `bookcost` varchar(100) NOT NULL,
  `bookquantity` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookdata`
--

INSERT INTO `bookdata` (`id`, `bookid`, `booktitle`, `bookauthname`, `bookcost`, `bookquantity`, `time`) VALUES
(1, 'ABC123@', 'The 5AM Club', 'Robin Sharma', '500', 13, '2020-10-17 06:32:06'),
(3, 'GHI123@', 'The Kite Runner', 'Malibua Hingis', '500', 20, '2020-09-24 03:12:30'),
(4, 'JKL123@', 'The Red and the Black', 'Stendhal', '250', 10, '2020-09-24 03:12:41'),
(5, 'MNO123@', 'Madame Bovary', 'Gustave Flaubert', '350', 40, '2020-09-24 03:12:54'),
(14, 'XYZ', 'Narnia', 'Gilbert Robin', '500', 10, '2020-09-30 08:23:48'),
(15, 'DDL123@', 'Jumanji', 'Rebecca More', '300', 30, '2020-10-01 14:31:55'),
(18, 'TAHIR123@', 'racing car', 'fiza', '500', 10, '2020-10-17 06:32:43');

-- --------------------------------------------------------

--
-- Table structure for table `contacttable`
--

CREATE TABLE `contacttable` (
  `cid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacttable`
--

INSERT INTO `contacttable` (`cid`, `name`, `email`, `subject`, `message`, `time`) VALUES
(19, 'Mukul Sharma ', 'mukulsharma@gmail.com', 'Regarding buying this web app', 'Hey! Mukul this side. Just saw your web app.\r\nCan I have your email?', '2020-09-30 15:29:25'),
(20, 'Harry Williamson', 'harrywilliam@yahoo.com', 'Website Designing', 'Have you designed the whole website?', '2020-10-08 15:40:15'),
(21, 'Yash Sharma', 'yashsharma@gmail.com', 'Web Designing', 'Cool website!', '2020-10-17 06:29:00');

-- --------------------------------------------------------

--
-- Table structure for table `finetable`
--

CREATE TABLE `finetable` (
  `ftid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentenrollno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fine` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finetable`
--

INSERT INTO `finetable` (`ftid`, `studentname`, `studentenrollno`, `email`, `fine`, `time`) VALUES
(1, 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', 1400, '2020-10-17 06:34:39'),
(2, 'Ram Sharma', 'A50105317005', 'ramsharma@gmail.com', 1800, '2020-10-15 05:49:11');

-- --------------------------------------------------------

--
-- Table structure for table `returnedbooks`
--

CREATE TABLE `returnedbooks` (
  `rbtid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentenrollno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `booktitle` varchar(100) NOT NULL,
  `issuedate` varchar(100) NOT NULL,
  `expirydate` varchar(100) NOT NULL,
  `returneddate` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `returnedbooks`
--

INSERT INTO `returnedbooks` (`rbtid`, `studentname`, `studentenrollno`, `email`, `bookid`, `booktitle`, `issuedate`, `expirydate`, `returneddate`, `time`) VALUES
(3, 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', 'ABC123@', 'The 5AM Club', '2020-09-29', '2020-10-13', '2020-09-30', '2020-09-30 07:32:17'),
(4, 'Khoob Ruh', 'A50105317004', 'Khoobruh@gmail.com', 'DEF123@', 'Remembering Patrick', '2020-09-30', '2020-10-14', '2020-09-30', '2020-09-30 07:32:28'),
(5, 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', 'GHI123@', 'The Kite Runner', '2020-09-30', '2020-10-14', '2020-09-30', '2020-09-30 07:46:00'),
(6, 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', 'GHI123@', 'The Kite Runner', '2020-09-17', '2020-09-29', '2020-10-01', '2020-10-01 10:16:38'),
(7, 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', 'XYZ123@', 'Narnia', '2020-09-16', '2020-09-27', '2020-10-01', '2020-10-01 13:20:45'),
(8, 'Ram Sharma', 'A50105317005', 'ramsharma@gmail.com', 'GHI123@', 'The Kite Runner', '2020-08-01', '2020-08-14', '2020-10-01', '2020-10-01 13:32:13'),
(9, 'Ram Sharma', 'A50105317005', 'ramsharma@gmail.com', 'MNO123@', 'Madame Bovary', '2020-09-01', '2020-09-14', '2020-10-01', '2020-10-01 14:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `studentlogindata`
--

CREATE TABLE `studentlogindata` (
  `sid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL,
  `studentenrollno` varchar(100) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogindata`
--

INSERT INTO `studentlogindata` (`sid`, `studentname`, `email`, `password`, `studentenrollno`, `timestamp`) VALUES
(1, 'Khoob Ruh', 'khoobruh@gmail.com', 'student123@', 'A50105317004', '2020-09-29 15:20:44'),
(3, 'Ram Sharma', 'ramsharma@gmail.com', 'student456@', 'A50105317005', '2020-09-30 11:12:56');

-- --------------------------------------------------------

--
-- Table structure for table `studentorders`
--

CREATE TABLE `studentorders` (
  `tid` int(11) NOT NULL,
  `bookid` varchar(100) NOT NULL,
  `booktitle` varchar(100) NOT NULL,
  `bookauthname` varchar(100) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `studentenrollno` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `issuedate` varchar(100) NOT NULL,
  `expirydate` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentorders`
--

INSERT INTO `studentorders` (`tid`, `bookid`, `booktitle`, `bookauthname`, `studentname`, `studentenrollno`, `email`, `issuedate`, `expirydate`, `time`) VALUES
(18, 'ABC123@', 'The 5AM Club', 'Robin Sharma', 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', '2020-09-30', '2020-10-14', '2020-09-30 06:57:26'),
(19, 'JKL123@', 'The Red and the Black', 'Stendhal', 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', '2020-09-30', '2020-09-25', '2020-10-01 10:53:05'),
(20, 'MNO123@', 'Madame Bovary', 'Gustave Flaubert', 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', '2020-09-30', '2020-10-14', '2020-09-30 06:57:34'),
(25, 'ABC123@', 'The 5AM Club', 'Robin Sharma', 'Ram Sharma', 'A50105317005', 'ramsharma@gmail.com', '2020-09-30', '2020-10-14', '2020-09-30 11:15:33'),
(26, 'JKL123@', 'The Red and the Black', 'Stendhal', 'Ram Sharma', 'A50105317005', 'ramsharma@gmail.com', '2020-09-01', '2020-09-10', '2020-10-01 14:05:44'),
(30, 'ABC123@', 'The 5AM Club', 'Robin Sharma', 'Khoob Ruh', 'A50105317004', 'khoobruh@gmail.com', '2020-10-09', '2020-10-23', '2020-10-09 11:36:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogindata`
--
ALTER TABLE `adminlogindata`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `bookdata`
--
ALTER TABLE `bookdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttable`
--
ALTER TABLE `contacttable`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `finetable`
--
ALTER TABLE `finetable`
  ADD PRIMARY KEY (`ftid`);

--
-- Indexes for table `returnedbooks`
--
ALTER TABLE `returnedbooks`
  ADD PRIMARY KEY (`rbtid`);

--
-- Indexes for table `studentlogindata`
--
ALTER TABLE `studentlogindata`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `studentorders`
--
ALTER TABLE `studentorders`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogindata`
--
ALTER TABLE `adminlogindata`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bookdata`
--
ALTER TABLE `bookdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `contacttable`
--
ALTER TABLE `contacttable`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `finetable`
--
ALTER TABLE `finetable`
  MODIFY `ftid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `returnedbooks`
--
ALTER TABLE `returnedbooks`
  MODIFY `rbtid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `studentlogindata`
--
ALTER TABLE `studentlogindata`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studentorders`
--
ALTER TABLE `studentorders`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
