-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 12:16 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mewu`
--

-- --------------------------------------------------------

--
-- Table structure for table `account2`
--

CREATE TABLE `account2` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `purchase` int(11) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `profit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account2`
--

INSERT INTO `account2` (`id`, `year`, `purchase`, `sale`, `profit`) VALUES
(1, 2013, 2000, 3000, 1000),
(2, 2014, 4500, 5000, 500),
(3, 2015, 3000, 4500, 1500),
(4, 2016, 2000, 3000, 1000),
(5, 2017, 2000, 4000, 2000),
(6, 2018, 2200, 3000, 800),
(7, 2019, 5000, 7000, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `type` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `sign` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `password`, `type`, `status`, `sign`, `date_created`) VALUES
(1, 'admin', 'admin', 'admin', '', NULL, '2019-01-14 15:25:37'),
(2, 'm', 'm', 'maintenance', '', NULL, '2019-01-27 21:05:37'),
(3, 's', 's', 'student', '', NULL, '2019-01-27 22:28:37'),
(4, 'st', 'st', 'staff', '', NULL, '2019-01-27 22:28:37'),
(5, 'a', 'a', 'adviser', '', NULL, '2019-01-27 22:29:14'),
(6, 'ma', 'ma', 'maintenance', 'active', NULL, '2019-02-02 09:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `calendar_events`
--

CREATE TABLE `calendar_events` (
  `ID` int(11) NOT NULL,
  `title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `calendar_events`
--

INSERT INTO `calendar_events` (`ID`, `title`, `start`, `end`, `description`) VALUES
(1, 'TRY', '2019-02-08 00:00:00', '2019-02-02 00:00:00', ''),
(2, 'WAW', '2019-02-15 00:00:00', '2019-02-22 00:00:00', 'HAHAH'),
(3, '12', '2019-02-09 00:00:00', '2019-02-10 00:00:00', '212'),
(4, 'what the', '2019-02-08 00:00:00', '2019-02-09 00:00:00', ''),
(11, 'Joshua Brain Perater', '2019-02-08 00:00:00', '2019-02-08 00:00:00', 'sumbagay'),
(12, 'Joshua Brain Perater', '2019-02-05 00:00:00', '2019-02-06 00:00:00', '212'),
(13, 'Lazada', '2019-02-02 00:00:00', '2019-02-06 10:09:15', 'dawd'),
(14, '', '2019-02-22 12:21:00', '2019-02-28 00:00:00', ''),
(15, '', '2019-02-22 12:21:00', '2019-02-28 04:12:21', ''),
(16, '', '2019-02-01 14:04:48', '2019-02-01 14:04:48', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `confirmed_by`
-- (See below for the actual view)
--
CREATE TABLE `confirmed_by` (
`person_id` int(11)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`position` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `acroname` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dep_id`, `acroname`, `name`) VALUES
(1, 'CITC', 'COLLEGE');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equip_id` int(11) NOT NULL,
  `equip_name` varchar(32) NOT NULL,
  `brand` varchar(32) NOT NULL,
  `model` varchar(32) DEFAULT NULL,
  `serial_no` varchar(32) DEFAULT NULL,
  `office` varchar(32) DEFAULT NULL,
  `depart` varchar(32) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `year_acc` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equip_id`, `equip_name`, `brand`, `model`, `serial_no`, `office`, `depart`, `type`, `year_acc`) VALUES
(1, 'dawd', 'dad', 'fef', 'fsef', 'f', NULL, 'fsef', 'fsefs'),
(2, 'Joshua Brain Perater', 'daw', 'dadcdac', 'fafad', 'dawdad', 'dawd', 'daw', 'vfvava');

-- --------------------------------------------------------

--
-- Table structure for table `event_equip`
--

CREATE TABLE `event_equip` (
  `equip_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_equip`
--

INSERT INTO `event_equip` (`equip_id`, `name`, `type`) VALUES
(1, '12', 'daw'),
(2, 'da', 'daw'),
(3, 'da', 'daw'),
(4, 'masaya', 'Mechanical'),
(5, 'pangit', 'Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `job_req`
--

CREATE TABLE `job_req` (
  `job_id` int(11) NOT NULL,
  `item_no` int(11) DEFAULT NULL,
  `work_description` varchar(255) DEFAULT NULL,
  `bldg_no` varchar(10) NOT NULL,
  `location` varchar(32) NOT NULL,
  `date_time_start` datetime DEFAULT NULL,
  `date_time_fin` datetime DEFAULT NULL,
  `person_attend` int(11) DEFAULT NULL,
  `remark` varchar(50) DEFAULT NULL,
  `requested_by` int(11) DEFAULT NULL,
  `approve_by` int(11) DEFAULT NULL,
  `date_req` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_req`
--

INSERT INTO `job_req` (`job_id`, `item_no`, `work_description`, `bldg_no`, `location`, `date_time_start`, `date_time_fin`, `person_attend`, `remark`, `requested_by`, `approve_by`, `date_req`) VALUES
(1, 2, 'wala', '201', 'bisan asa', '2019-02-19 11:11:00', '2019-02-13 11:11:00', 2, 'decline', 1, 1, '2019-02-01 17:50:57'),
(3, NULL, NULL, '201', 'dadawd', '2019-02-13 00:00:00', '2019-02-13 00:00:00', NULL, 'approve', 1, NULL, '2019-02-03 06:12:10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `job_request_view`
-- (See below for the actual view)
--
CREATE TABLE `job_request_view` (
`job_id` int(11)
,`item_no` int(11)
,`work_description` varchar(255)
,`bldg_no` varchar(10)
,`location` varchar(32)
,`remark` varchar(50)
,`date_req` timestamp
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `job_schedule`
--

CREATE TABLE `job_schedule` (
  `job_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_rec`
--

CREATE TABLE `maintenance_rec` (
  `equip_id` int(11) NOT NULL,
  `date_req` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `parts_rep` varchar(32) DEFAULT NULL,
  `date_rep` int(11) NOT NULL,
  `time_rep` int(11) NOT NULL,
  `date_fin` int(11) NOT NULL,
  `remark` varchar(64) NOT NULL,
  `performed_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `bday` date DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(20) NOT NULL,
  `status` varchar(32) NOT NULL,
  `sign` int(11) DEFAULT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`person_id`, `fname`, `mname`, `lname`, `bday`, `position`, `contact_no`, `email`, `username`, `password`, `type`, `status`, `sign`, `date_created`) VALUES
(1, 'Christian', 'Hundinay', 'Cat-awan', '2019-01-08', 'admin', '0916', 'h=gmail', 'chan', 'chan', 'admin', 'active', 1, '2019-02-03 21:38:05'),
(2, 'joshua', 'Hundinay', 'Garbosa', '2019-02-04', 'admin', '122', 'cat-awan@gmail.com', 'joshua', 'joshua', 'admin', 'active', 1, '2019-02-03 21:38:05'),
(11, 'cristyfel', 'uayan', 'pagutayao', '2019-02-05', 'Admin', '00000000', NULL, 'tyfel', '1', 'student', 'active', 1, '2019-02-03 18:14:00'),
(12, 'Nikkie', 'Abrea', 'Eduria', '2019-02-04', 'Student', '00000000', NULL, 'student', '1', 'student', 'active', 1, '2019-02-03 18:42:00'),
(13, 'Nikkie', 'Abrea', 'Eduria', '2019-02-04', 'student', '32424', NULL, 'nikkie', '1', 'student', 'active', 1, '2019-02-04 19:43:00'),
(14, 'Nikkie', 'Abrea', 'Eduria', '2019-02-04', 'staff', '99999', NULL, 'staff', '1', 'staff', 'active', 1, '2019-02-04 20:54:00');

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_equip`
-- (See below for the actual view)
--
CREATE TABLE `reservation_equip` (
`form_no` int(11)
,`name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_ven`
-- (See below for the actual view)
--
CREATE TABLE `reservation_ven` (
`form_no` int(11)
,`bldg_no` varchar(16)
,`name` varchar(32)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation_view`
-- (See below for the actual view)
--
CREATE TABLE `reservation_view` (
`form_no` int(11)
,`no_participants` int(11)
,`acroname` varchar(20)
,`name` varchar(32)
,`date_act` datetime
,`purpose` varchar(32)
,`title_event` varchar(32)
,`status` varchar(20)
,`contact_no` varchar(32)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`date_request` timestamp
);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_equip_need`
--

CREATE TABLE `reserve_equip_need` (
  `form_no` int(11) NOT NULL,
  `even_equip_id` int(11) NOT NULL,
  `table_no` int(11) DEFAULT NULL,
  `chair_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_equip_need`
--

INSERT INTO `reserve_equip_need` (`form_no`, `even_equip_id`, `table_no`, `chair_no`) VALUES
(1, 1, NULL, NULL),
(1, 1, NULL, NULL),
(68, 1, 11, 11),
(69, 2, 11, 11),
(70, 4, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_event_venue`
--

CREATE TABLE `reserve_event_venue` (
  `form_no` int(11) NOT NULL,
  `venue` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reserve_request`
--

CREATE TABLE `reserve_request` (
  `form_no` int(11) NOT NULL,
  `no_participants` int(11) NOT NULL,
  `department` varchar(32) DEFAULT NULL,
  `venue` int(11) DEFAULT NULL,
  `date_act` datetime NOT NULL,
  `purpose` varchar(32) DEFAULT NULL,
  `title_event` varchar(32) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `contact_no` varchar(32) NOT NULL,
  `res_by` int(11) DEFAULT NULL,
  `confired_by` int(11) DEFAULT NULL,
  `date_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_request`
--

INSERT INTO `reserve_request` (`form_no`, `no_participants`, `department`, `venue`, `date_act`, `purpose`, `title_event`, `status`, `contact_no`, `res_by`, `confired_by`, `date_request`) VALUES
(1, 0, '1', 1, '2019-01-02 00:00:00', 'secret', 'title', 'pending', '122', 1, NULL, '2019-01-28 18:42:26'),
(2, 0, 'CITC', 1, '2019-01-02 00:00:00', 'secret', 'title', 'pending', '122', 1, 1, '2019-01-28 18:42:34'),
(3, 0, 'dawd', 0, '0000-00-00 00:00:00', 'daw', 'daw', 'decline', '', 1, 1, '2019-01-28 22:37:10'),
(10, 11, '', 0, '2019-02-22 11:11:00', '', '11', '', '11', 1, 1, '2019-02-03 16:00:00'),
(11, 11, '1', NULL, '2019-02-22 11:11:00', NULL, '11', NULL, 'dawd', NULL, NULL, '2019-02-03 16:00:00'),
(12, 11, '1', NULL, '2019-02-22 11:11:00', NULL, '11', NULL, 'dawd', NULL, NULL, '2019-02-03 16:00:00'),
(13, 11, '1', NULL, '2019-02-22 11:11:00', NULL, '11', NULL, 'dawd', NULL, NULL, '2019-02-03 16:00:00'),
(14, 111, '1', NULL, '2019-02-13 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(15, 111, '1', NULL, '2019-02-13 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(16, 111, '1', NULL, '2019-02-13 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(17, 111, '1', NULL, '2019-02-13 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(18, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(19, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(20, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(21, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(22, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(23, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(24, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(25, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(26, 11, '1', NULL, '2019-02-19 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-03 16:00:00'),
(27, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(28, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(29, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(30, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(31, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(32, 111, '1', NULL, '2019-02-06 14:22:00', NULL, '12', NULL, '12', NULL, NULL, '2019-02-04 16:00:00'),
(33, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(34, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(35, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(36, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(37, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(38, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(39, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(40, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(41, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(42, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(43, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(44, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(45, 111, '1', NULL, '2019-02-20 11:11:00', NULL, '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(46, 11, '1', NULL, '2019-02-21 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(47, 11, '1', NULL, '2019-02-21 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(48, 11, '1', NULL, '2019-02-21 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(49, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(50, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(51, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(52, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(53, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(54, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(55, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(56, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(57, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(58, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(59, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(60, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(61, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(62, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(63, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(64, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(65, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(66, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(67, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(68, 11, '1', NULL, '2019-02-06 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00'),
(69, 11, '1', NULL, '2019-02-15 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '111', NULL, NULL, '2019-02-04 16:00:00'),
(70, 11, '1', NULL, '2019-02-08 11:11:00', 'Lecture/Forum/Symposium', '11', NULL, '11', NULL, NULL, '2019-02-04 16:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `reserve_ven`
--

CREATE TABLE `reserve_ven` (
  `form_no` int(11) NOT NULL,
  `venue_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_ven`
--

INSERT INTO `reserve_ven` (`form_no`, `venue_id`) VALUES
(1, 1),
(1, 1),
(45, 2),
(45, 4),
(46, 2),
(46, 3),
(47, 2),
(47, 3),
(48, 1),
(49, 2),
(50, 2),
(51, 2),
(52, 2),
(53, 2),
(54, 2),
(55, 2),
(56, 2),
(57, 2),
(68, 2),
(69, 4),
(70, 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `users`
-- (See below for the actual view)
--
CREATE TABLE `users` (
`username` varchar(32)
,`password` varchar(32)
,`type` varchar(32)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`bday` date
,`position` varchar(50)
,`contact_no` varchar(50)
,`email` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(11) NOT NULL,
  `bldg_no` varchar(16) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `bldg_no`, `name`, `type`) VALUES
(1, '1', 'dawdczs', 'dawczs'),
(2, '1', 'dadadaw', 'dad'),
(3, 'd', '12', 'daw'),
(4, '100', 'masaya', 'audio room');

-- --------------------------------------------------------

--
-- Structure for view `confirmed_by`
--
DROP TABLE IF EXISTS `confirmed_by`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `confirmed_by`  AS  select `persons`.`person_id` AS `person_id`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname`,`persons`.`position` AS `position` from `persons` ;

-- --------------------------------------------------------

--
-- Structure for view `job_request_view`
--
DROP TABLE IF EXISTS `job_request_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `job_request_view`  AS  select `job_req`.`job_id` AS `job_id`,`job_req`.`item_no` AS `item_no`,`job_req`.`work_description` AS `work_description`,`job_req`.`bldg_no` AS `bldg_no`,`job_req`.`location` AS `location`,`job_req`.`remark` AS `remark`,`job_req`.`date_req` AS `date_req`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname` from (`job_req` join `persons` on((`job_req`.`requested_by` = `persons`.`person_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_equip`
--
DROP TABLE IF EXISTS `reservation_equip`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservation_equip`  AS  select `reserve_equip_need`.`form_no` AS `form_no`,`event_equip`.`name` AS `name` from (`reserve_equip_need` join `event_equip` on((`reserve_equip_need`.`even_equip_id` = `event_equip`.`equip_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_ven`
--
DROP TABLE IF EXISTS `reservation_ven`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservation_ven`  AS  select `reserve_ven`.`form_no` AS `form_no`,`venue`.`bldg_no` AS `bldg_no`,`venue`.`name` AS `name` from (`reserve_ven` join `venue` on((`reserve_ven`.`venue_id` = `venue`.`venue_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `reservation_view`
--
DROP TABLE IF EXISTS `reservation_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservation_view`  AS  select `reserve_request`.`form_no` AS `form_no`,`reserve_request`.`no_participants` AS `no_participants`,`department`.`acroname` AS `acroname`,`venue`.`name` AS `name`,`reserve_request`.`date_act` AS `date_act`,`reserve_request`.`purpose` AS `purpose`,`reserve_request`.`title_event` AS `title_event`,`reserve_request`.`status` AS `status`,`reserve_request`.`contact_no` AS `contact_no`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname`,`reserve_request`.`date_request` AS `date_request` from (((`reserve_request` join `department` on((`reserve_request`.`department` = `department`.`dep_id`))) join `venue` on((`reserve_request`.`venue` = `venue`.`venue_id`))) join `persons` on((`reserve_request`.`res_by` = `persons`.`person_id`))) ;

-- --------------------------------------------------------

--
-- Structure for view `users`
--
DROP TABLE IF EXISTS `users`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `users`  AS  select `accounts`.`username` AS `username`,`accounts`.`password` AS `password`,`accounts`.`type` AS `type`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname`,`persons`.`bday` AS `bday`,`persons`.`position` AS `position`,`persons`.`contact_no` AS `contact_no`,`persons`.`email` AS `email` from (`accounts` join `persons` on((`accounts`.`user_id` = `persons`.`person_id`))) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account2`
--
ALTER TABLE `account2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dep_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `event_equip`
--
ALTER TABLE `event_equip`
  ADD PRIMARY KEY (`equip_id`);

--
-- Indexes for table `job_req`
--
ALTER TABLE `job_req`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `person_attend` (`person_attend`),
  ADD KEY `remark` (`remark`),
  ADD KEY `requested_by` (`requested_by`),
  ADD KEY `approve_by` (`approve_by`);

--
-- Indexes for table `job_schedule`
--
ALTER TABLE `job_schedule`
  ADD KEY `job_id` (`job_id`),
  ADD KEY `person` (`person_id`);

--
-- Indexes for table `maintenance_rec`
--
ALTER TABLE `maintenance_rec`
  ADD KEY `equip_id` (`equip_id`),
  ADD KEY `performed_by` (`performed_by`);

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `reserve_equip_need`
--
ALTER TABLE `reserve_equip_need`
  ADD KEY `form_no` (`form_no`),
  ADD KEY `even_equip_id` (`even_equip_id`);

--
-- Indexes for table `reserve_request`
--
ALTER TABLE `reserve_request`
  ADD PRIMARY KEY (`form_no`),
  ADD KEY `res_by` (`res_by`),
  ADD KEY `confired_by` (`confired_by`);

--
-- Indexes for table `reserve_ven`
--
ALTER TABLE `reserve_ven`
  ADD KEY `form_no` (`form_no`),
  ADD KEY `venue_id` (`venue_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account2`
--
ALTER TABLE `account2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `calendar_events`
--
ALTER TABLE `calendar_events`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `event_equip`
--
ALTER TABLE `event_equip`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `job_req`
--
ALTER TABLE `job_req`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `reserve_request`
--
ALTER TABLE `reserve_request`
  MODIFY `form_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_req`
--
ALTER TABLE `job_req`
  ADD CONSTRAINT `job_req_ibfk_1` FOREIGN KEY (`approve_by`) REFERENCES `persons` (`person_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_req_ibfk_2` FOREIGN KEY (`person_attend`) REFERENCES `persons` (`person_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `job_req_ibfk_3` FOREIGN KEY (`requested_by`) REFERENCES `persons` (`person_id`) ON UPDATE CASCADE;

--
-- Constraints for table `job_schedule`
--
ALTER TABLE `job_schedule`
  ADD CONSTRAINT `job_schedule_ibfk_1` FOREIGN KEY (`job_id`) REFERENCES `job_req` (`job_id`),
  ADD CONSTRAINT `job_schedule_ibfk_2` FOREIGN KEY (`person_id`) REFERENCES `persons` (`person_id`);

--
-- Constraints for table `maintenance_rec`
--
ALTER TABLE `maintenance_rec`
  ADD CONSTRAINT `maintenance_rec_ibfk_1` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`equip_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `maintenance_rec_ibfk_2` FOREIGN KEY (`performed_by`) REFERENCES `persons` (`person_id`) ON UPDATE CASCADE;

--
-- Constraints for table `reserve_equip_need`
--
ALTER TABLE `reserve_equip_need`
  ADD CONSTRAINT `reserve_equip_need_ibfk_2` FOREIGN KEY (`form_no`) REFERENCES `reserve_request` (`form_no`),
  ADD CONSTRAINT `reserve_equip_need_ibfk_3` FOREIGN KEY (`even_equip_id`) REFERENCES `event_equip` (`equip_id`);

--
-- Constraints for table `reserve_request`
--
ALTER TABLE `reserve_request`
  ADD CONSTRAINT `reserve_request_ibfk_3` FOREIGN KEY (`confired_by`) REFERENCES `persons` (`person_id`),
  ADD CONSTRAINT `reserve_request_ibfk_5` FOREIGN KEY (`res_by`) REFERENCES `persons` (`person_id`);

--
-- Constraints for table `reserve_ven`
--
ALTER TABLE `reserve_ven`
  ADD CONSTRAINT `reserve_ven_ibfk_1` FOREIGN KEY (`form_no`) REFERENCES `reserve_request` (`form_no`),
  ADD CONSTRAINT `reserve_ven_ibfk_2` FOREIGN KEY (`venue_id`) REFERENCES `venue` (`venue_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
