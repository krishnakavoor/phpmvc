-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Aug 28, 2016 at 04:04 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `detention`
--

-- --------------------------------------------------------

--
-- Table structure for table `detentions`
--

CREATE TABLE `detentions` (
  `detentions_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `detention_type_id` int(11) NOT NULL,
  `offence_id` int(11) NOT NULL,
  `offence_type_id` int(11) NOT NULL,
  `total_time` int(11) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detentions`
--

INSERT INTO `detentions` (`detentions_id`, `student_id`, `teacher_id`, `date`, `detention_type_id`, `offence_id`, `offence_type_id`, `total_time`, `is_active`) VALUES
(1, 2, 1, 461714400, 2, 1, 2, 66, 1),
(2, 2, 2, 461714400, 2, 2, 2, 132, 1),
(3, 3, 1, 461714400, 2, 1, 2, 66, 1),
(4, 4, 2, 461714400, 2, 1, 2, 66, 1),
(5, 5, 2, 461714400, 2, 1, 2, 66, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detention_type`
--

CREATE TABLE `detention_type` (
  `detention_type_id` int(11) NOT NULL,
  `detention_type_name` varchar(100) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detention_type`
--

INSERT INTO `detention_type` (`detention_type_id`, `detention_type_name`, `is_active`) VALUES
(1, 'consecutive', 1),
(2, 'concurrent', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offence_type`
--

CREATE TABLE `offence_type` (
  `offence_type_id` int(11) NOT NULL,
  `offence_type_name` varchar(100) NOT NULL,
  `offence_time_value` float NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offence_type`
--

INSERT INTO `offence_type` (`offence_type_id`, `offence_type_name`, `offence_time_value`, `is_active`) VALUES
(1, 'Good', 1, 1),
(2, 'Bad', 1.1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `offense`
--

CREATE TABLE `offense` (
  `offense_id` int(11) NOT NULL,
  `offense_name` varchar(100) NOT NULL,
  `time` int(11) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offense`
--

INSERT INTO `offense` (`offense_id`, `offense_name`, `time`, `is_active`) VALUES
(1, 'Homework Not Done', 60, 1),
(2, 'Stealing', 120, 1),
(3, 'Fighting', 30, 1),
(4, 'Untidyness', 60, 1),
(5, 'Lying', 90, 1),
(6, 'SchoolPropertyDamage', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parent_id` int(11) NOT NULL,
  `parent_name` varchar(100) NOT NULL,
  `parent_phone` varchar(100) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`parent_id`, `parent_name`, `parent_phone`, `is_active`) VALUES
(1, 'Johnny Parent', '+91996437413', 1),
(2, 'Wilson Parent', '+91996437413', 1),
(3, 'Dave Parent', '+91996437413', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `student_name`, `parent_id`, `is_active`) VALUES
(1, 'Johnny', 1, 1),
(2, 'Johnson', 1, 1),
(3, 'krishna', 1, 1),
(4, 'Guru', 1, 1),
(5, 'Wilson', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `is_active` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `teacher_name`, `is_active`) VALUES
(1, 'Mr Wilson', 1),
(2, 'Mr.Ganesh', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detentions`
--
ALTER TABLE `detentions`
  ADD PRIMARY KEY (`detentions_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `date` (`date`),
  ADD KEY `detention_type_id` (`detention_type_id`),
  ADD KEY `offence_id` (`offence_id`),
  ADD KEY `offence_type_id` (`offence_type_id`),
  ADD KEY `total_time` (`total_time`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `detention_type`
--
ALTER TABLE `detention_type`
  ADD PRIMARY KEY (`detention_type_id`),
  ADD KEY `detention_type_name` (`detention_type_name`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `offence_type`
--
ALTER TABLE `offence_type`
  ADD PRIMARY KEY (`offence_type_id`),
  ADD KEY `offence_type_name` (`offence_type_name`),
  ADD KEY `offence_time_value` (`offence_time_value`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `offense`
--
ALTER TABLE `offense`
  ADD PRIMARY KEY (`offense_id`),
  ADD KEY `offense_name` (`offense_name`),
  ADD KEY `time` (`time`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`parent_id`),
  ADD KEY `parent_name` (`parent_name`),
  ADD KEY `parent_phone` (`parent_phone`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `student_name` (`student_name`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `is_active` (`is_active`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `teacher_name` (`teacher_name`),
  ADD KEY `is_active` (`is_active`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detentions`
--
ALTER TABLE `detentions`
  MODIFY `detentions_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `detention_type`
--
ALTER TABLE `detention_type`
  MODIFY `detention_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offence_type`
--
ALTER TABLE `offence_type`
  MODIFY `offence_type_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `offense`
--
ALTER TABLE `offense`
  MODIFY `offense_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;