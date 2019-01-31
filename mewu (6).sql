-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2019 at 06:21 PM
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
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_id`, `username`, `password`, `type`, `status`, `date_created`) VALUES
(1, 'admin', 'admin', 'admin', '', '2019-01-14 15:25:37'),
(2, 'm', 'm', 'maintenance', '', '2019-01-27 21:05:37'),
(3, 's', 's', 'student', '', '2019-01-27 22:28:37'),
(4, 'st', 'st', 'staff', '', '2019-01-27 22:28:37'),
(5, 'a', 'a', 'adviser', '', '2019-01-27 22:29:14');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dep_id` int(11) NOT NULL,
  `acroname` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'dawd', 'dad', 'fef', 'fsef', 'f', NULL, 'fsef', 'fsefs');

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
(3, 'da', 'daw');

-- --------------------------------------------------------

--
-- Table structure for table `job_req`
--

CREATE TABLE `job_req` (
  `job_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `item_no` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bldg_no` varchar(10) NOT NULL,
  `location` varchar(32) NOT NULL,
  `date_time_start` datetime NOT NULL,
  `date_time_fin` datetime NOT NULL,
  `person_attend` int(11) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `requested_by` int(11) NOT NULL,
  `approve_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Stand-in structure for view `note_by`
-- (See below for the actual view)
--
CREATE TABLE `note_by` (
`person_id` int(11)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`position` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `person_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `position` varchar(50) NOT NULL,
  `contact_no` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`person_id`, `fname`, `mname`, `lname`, `bday`, `position`, `contact_no`, `email`, `userid`) VALUES
(1, 'Christian', 'Hundinay', 'Cat-awan', '2019-01-08', 'admin', '0916', 'h=gmail', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reservation`
-- (See below for the actual view)
--
CREATE TABLE `reservation` (
`form_no` int(11)
,`department` varchar(32)
,`venue` int(11)
,`date_act` date
,`time_act` time
,`purpose` varchar(32)
,`title_event` varchar(32)
,`status` varchar(20)
,`contact_no` varchar(32)
,`rfname` varchar(50)
,`rmname` varchar(50)
,`rlname` varchar(50)
,`nfname` varchar(50)
,`nmname` varchar(50)
,`nlname` varchar(50)
,`cfname` varchar(50)
,`cmname` varchar(50)
,`clname` varchar(50)
,`date_request` timestamp
);

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
-- Stand-in structure for view `reserve_by`
-- (See below for the actual view)
--
CREATE TABLE `reserve_by` (
`person_id` int(11)
,`fname` varchar(50)
,`mname` varchar(50)
,`lname` varchar(50)
,`position` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `reserve_equip_need`
--

CREATE TABLE `reserve_equip_need` (
  `form_no` int(11) NOT NULL,
  `even_equip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_equip_need`
--

INSERT INTO `reserve_equip_need` (`form_no`, `even_equip_id`) VALUES
(1, 1),
(1, 1);

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
  `department` varchar(32) NOT NULL,
  `venue` int(11) NOT NULL,
  `date_act` date NOT NULL,
  `time_act` time NOT NULL,
  `purpose` varchar(32) NOT NULL,
  `title_event` varchar(32) NOT NULL,
  `status` varchar(20) NOT NULL,
  `contact_no` varchar(32) NOT NULL,
  `res_by` int(11) DEFAULT NULL,
  `confired_by` int(11) DEFAULT NULL,
  `date_request` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve_request`
--

INSERT INTO `reserve_request` (`form_no`, `department`, `venue`, `date_act`, `time_act`, `purpose`, `title_event`, `status`, `contact_no`, `res_by`, `confired_by`, `date_request`) VALUES
(1, 'CITC', 1, '2019-01-02', '08:00:00', 'secret', 'title', 'ok', '122', 1, 1, '2019-01-28 18:42:26'),
(2, 'CITC', 1, '2019-01-02', '08:00:00', 'secret', 'title', 'ok', '122', 1, 1, '2019-01-28 18:42:34'),
(3, 'dawd', 0, '0000-00-00', '00:00:00', 'daw', 'daw', '', '', NULL, NULL, '2019-01-28 22:37:10');

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
(1, 1);

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
(3, 'd', '12', 'daw');

-- --------------------------------------------------------

--
-- Structure for view `note_by`
--
DROP TABLE IF EXISTS `note_by`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `note_by`  AS  select `persons`.`person_id` AS `person_id`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname`,`persons`.`position` AS `position` from `persons` ;

-- --------------------------------------------------------

--
-- Structure for view `reservation`
--
DROP TABLE IF EXISTS `reservation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reservation`  AS  select `reserve_request`.`form_no` AS `form_no`,`reserve_request`.`department` AS `department`,`reserve_request`.`venue` AS `venue`,`reserve_request`.`date_act` AS `date_act`,`reserve_request`.`time_act` AS `time_act`,`reserve_request`.`purpose` AS `purpose`,`reserve_request`.`title_event` AS `title_event`,`reserve_request`.`status` AS `status`,`reserve_request`.`contact_no` AS `contact_no`,`reserve_by`.`fname` AS `rfname`,`reserve_by`.`mname` AS `rmname`,`reserve_by`.`lname` AS `rlname`,`note_by`.`fname` AS `nfname`,`note_by`.`mname` AS `nmname`,`note_by`.`lname` AS `nlname`,`persons`.`fname` AS `cfname`,`persons`.`mname` AS `cmname`,`persons`.`lname` AS `clname`,`reserve_request`.`date_request` AS `date_request` from (((`reserve_request` join `reserve_by` on((`reserve_request`.`res_by` = `reserve_by`.`person_id`))) join `note_by` on((`reserve_request`.`confired_by` = `note_by`.`person_id`))) join `persons` on((`reserve_request`.`confired_by` = `persons`.`person_id`))) ;

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
-- Structure for view `reserve_by`
--
DROP TABLE IF EXISTS `reserve_by`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reserve_by`  AS  select `persons`.`person_id` AS `person_id`,`persons`.`fname` AS `fname`,`persons`.`mname` AS `mname`,`persons`.`lname` AS `lname`,`persons`.`position` AS `position` from `persons` ;

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
  ADD PRIMARY KEY (`person_id`),
  ADD KEY `userid` (`userid`);

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dep_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `event_equip`
--
ALTER TABLE `event_equip`
  MODIFY `equip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `job_req`
--
ALTER TABLE `job_req`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `persons`
--
ALTER TABLE `persons`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `reserve_request`
--
ALTER TABLE `reserve_request`
  MODIFY `form_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_req`
--
ALTER TABLE `job_req`
  ADD CONSTRAINT `job_req_ibfk_1` FOREIGN KEY (`approve_by`) REFERENCES `persons` (`person_id`),
  ADD CONSTRAINT `job_req_ibfk_2` FOREIGN KEY (`person_attend`) REFERENCES `persons` (`person_id`),
  ADD CONSTRAINT `job_req_ibfk_3` FOREIGN KEY (`requested_by`) REFERENCES `persons` (`person_id`);

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
-- Constraints for table `persons`
--
ALTER TABLE `persons`
  ADD CONSTRAINT `persons_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `accounts` (`user_id`) ON UPDATE CASCADE;

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
