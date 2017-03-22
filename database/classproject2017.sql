-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2017 at 12:54 PM
-- Server version: 10.0.21-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classproject2017`
--

-- --------------------------------------------------------

--
-- Table structure for table `allcourses`
--

CREATE TABLE `allcourses` (
  `courseid` int(11) NOT NULL,
  `coursecode` varchar(10) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `courseyear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allcourses`
--

INSERT INTO `allcourses` (`courseid`, `coursecode`, `coursename`, `courseyear`) VALUES
(1, 'CS121', 'COA', 2018);

-- --------------------------------------------------------

--
-- Table structure for table `allmajor`
--

CREATE TABLE `allmajor` (
  `majorid` int(11) NOT NULL,
  `majorname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allmajor`
--

INSERT INTO `allmajor` (`majorid`, `majorname`) VALUES
(1, 'Computer SCience');

-- --------------------------------------------------------

--
-- Table structure for table `allpermission`
--

CREATE TABLE `allpermission` (
  `perid` int(11) NOT NULL,
  `pername` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allpermission`
--

INSERT INTO `allpermission` (`perid`, `pername`) VALUES
(1, 'Pass2');

-- --------------------------------------------------------

--
-- Table structure for table `majorcourses`
--

CREATE TABLE `majorcourses` (
  `majorcourseid` int(11) NOT NULL,
  `major_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `majorcourses`
--

INSERT INTO `majorcourses` (`majorcourseid`, `major_id`, `course_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `useraccount`
--

CREATE TABLE `useraccount` (
  `userid` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `major_id` int(11) NOT NULL,
  `userstatus` enum('ACTIVE','INACTIVE','','') NOT NULL,
  `per_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccount`
--

INSERT INTO `useraccount` (`userid`, `username`, `pwd`, `fname`, `lname`, `email`, `gender`, `major_id`, `userstatus`, `per_id`) VALUES
(1, 'Xybron', '1234', 'Ronald', 'Nettey', 'ronaldnettey@yahoo.com', 'm', 1, 'ACTIVE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usercourses`
--

CREATE TABLE `usercourses` (
  `user_id` int(11) NOT NULL,
  `majorcourse_id` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usercourses`
--

INSERT INTO `usercourses` (`user_id`, `majorcourse_id`, `grade`) VALUES
(1, 1, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allcourses`
--
ALTER TABLE `allcourses`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `allmajor`
--
ALTER TABLE `allmajor`
  ADD PRIMARY KEY (`majorid`);

--
-- Indexes for table `allpermission`
--
ALTER TABLE `allpermission`
  ADD PRIMARY KEY (`perid`);

--
-- Indexes for table `majorcourses`
--
ALTER TABLE `majorcourses`
  ADD PRIMARY KEY (`majorcourseid`),
  ADD KEY `major_id` (`major_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `lname` (`lname`),
  ADD KEY `major_id` (`major_id`),
  ADD KEY `per_id` (`per_id`);

--
-- Indexes for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `majorcourse_id` (`majorcourse_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allcourses`
--
ALTER TABLE `allcourses`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `allmajor`
--
ALTER TABLE `allmajor`
  MODIFY `majorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `allpermission`
--
ALTER TABLE `allpermission`
  MODIFY `perid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `majorcourses`
--
ALTER TABLE `majorcourses`
  MODIFY `majorcourseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `useraccount`
--
ALTER TABLE `useraccount`
  MODIFY `userid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `majorcourses`
--
ALTER TABLE `majorcourses`
  ADD CONSTRAINT `majorcourses_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `allmajor` (`majorid`),
  ADD CONSTRAINT `majorcourses_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `allcourses` (`courseid`);

--
-- Constraints for table `useraccount`
--
ALTER TABLE `useraccount`
  ADD CONSTRAINT `useraccount_ibfk_1` FOREIGN KEY (`major_id`) REFERENCES `allmajor` (`majorid`),
  ADD CONSTRAINT `useraccount_ibfk_2` FOREIGN KEY (`per_id`) REFERENCES `allpermission` (`perid`);

--
-- Constraints for table `usercourses`
--
ALTER TABLE `usercourses`
  ADD CONSTRAINT `usercourses_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `useraccount` (`userid`),
  ADD CONSTRAINT `usercourses_ibfk_2` FOREIGN KEY (`majorcourse_id`) REFERENCES `majorcourses` (`majorcourseid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
