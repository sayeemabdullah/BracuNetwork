-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 07:57 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bracunetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(250) NOT NULL,
  `admin_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'admin', 'admin'),
(2, 'sayeem', 'sayeem');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation`
--

CREATE TABLE `blood_donation` (
  `blood_id` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `last_donation` date NOT NULL,
  `bloodtype_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blood_donation`
--

INSERT INTO `blood_donation` (`blood_id`, `blood_group`, `last_donation`, `bloodtype_id`) VALUES
('11101001', ' A-', '1996-12-29', '2'),
('11101002', ' B+', '2018-02-09', '3'),
('11101003', ' A+', '2001-12-01', '1'),
('11101004', ' B-', '2112-04-23', '4'),
('11101005', ' AB+', '2018-12-11', '5'),
('11101006', ' B+', '2018-12-25', '3'),
('11101007', ' AB-', '2018-11-07', '6'),
('11101008', ' O+', '2018-12-01', '7'),
('17101001', ' O-', '2018-12-05', '8');

-- --------------------------------------------------------

--
-- Table structure for table `club_joins`
--

CREATE TABLE `club_joins` (
  `student_ID` varchar(255) NOT NULL,
  `club_id` varchar(255) NOT NULL,
  `club_dept` varchar(255) NOT NULL,
  `club_designation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_joins`
--

INSERT INTO `club_joins` (`student_ID`, `club_id`, `club_dept`, `club_designation`) VALUES
('11101001', ' 2', '', 'President'),
('11101002', ' 2', 'Creative', 'Senior Executive '),
('11101003', ' 3', '', 'President'),
('11101004', ' 1', 'Event', 'Director'),
('11101005', ' 4', 'Publishing', 'Senior Executive '),
('11101006', ' 4', '', 'President'),
('11101007', ' 1', '', 'President'),
('11101008', ' 3', 'Event', 'Executive '),
('17101001', ' 3', 'Creative', 'General Member');

-- --------------------------------------------------------

--
-- Table structure for table `coursecode`
--

CREATE TABLE `coursecode` (
  `course_id` varchar(255) NOT NULL,
  `section_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursecode`
--

INSERT INTO `coursecode` (`course_id`, `section_num`) VALUES
('CHE101', 1),
('CHE101', 2),
('CSE370', 1),
('CSE370', 2),
('CSE370', 3),
('ENG101', 1),
('PHY111', 1),
('PHY112', 1),
('PHY112', 2),
('PSY101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_in` varchar(255) NOT NULL,
  `Faculty_name` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `section_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_in`, `Faculty_name`, `course_id`, `section_num`) VALUES
('WW', 'Walter White', 'CHE101', 1),
('WW', 'Walter White', 'CHE101', 2),
('JA', 'Julian Assange', 'CSE370', 1),
('ES', 'Edward Snowden', 'CSE370', 2),
('SC', 'Subrahmanyan Chandrasekhar', 'PHY111', 1),
('SH', 'Stephen Hawking', 'PHY112', 1),
('MA', 'Misir Ali', 'PSY101', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ridesharing`
--

CREATE TABLE `ridesharing` (
  `student_ID` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `Saturday` time NOT NULL,
  `Sunday` time NOT NULL,
  `Monday` time NOT NULL,
  `Tuesday` time NOT NULL,
  `Wednesday` time NOT NULL,
  `Thursday` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ridesharing`
--

INSERT INTO `ridesharing` (`student_ID`, `location`, `Saturday`, `Sunday`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`) VALUES
('11101001', ' Mirpur', '02:00:00', '02:00:00', '00:00:00', '02:00:00', '00:00:00', '02:00:00'),
('11101002', ' Dhanmondi', '00:00:00', '00:00:00', '12:30:00', '00:00:00', '12:30:00', '00:00:00'),
('11101006', ' Dhanmondi', '03:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '03:30:00'),
('11101007', ' Uttara', '00:00:00', '14:30:00', '00:00:00', '14:30:00', '00:00:00', '15:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `skill_search`
--

CREATE TABLE `skill_search` (
  `student_ID` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_search`
--

INSERT INTO `skill_search` (`student_ID`, `skill`) VALUES
('11101001', ' C++'),
('11101002', ' PHOTOSHOP'),
('11101003', ' PHP , CSS , JAVA'),
('11101004', ' JAVA'),
('11101006', ' PYTHON'),
('11101007', ' JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_ID` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_ID`, `Name`, `department`, `gender`, `phone_number`, `email_id`) VALUES
('11101001', 'Bomkesh Bokshi', 'CSE', 'Male', '+8801905081116', 'bbokshi@gmail.com'),
('11101002', 'Feluda', 'MNS', 'Male', '+880150508161', 'feluda@gmail.com'),
('11101003', 'Bela Bose', 'ARC', 'Female', '2441139', 'Bela.Hello@gmail.com'),
('11101004', 'Gora', 'CSE', 'Male', '01555222168', 'gora@robi.com'),
('11101005', 'Lalmohan Ganguly', 'ENG', 'Male', '017232658886', 'lalmohon@feluda.com'),
('11101006', 'Shankar Roy Chaudhary', 'EEE', 'Male', '01323362229', 'src@bhibu.com'),
('11101007', 'Himu', 'ARC', 'Male', '+880172122234', 'mohapurush@yahoo.com'),
('11101008', 'Rupa', 'BBA', 'Female', '7894561223', 'rupa@opekha.com'),
('11101009', 'Bimala', 'PHA', 'Female', '+8801705081455', 'bimala@robi.com'),
('17101001', 'Mala', 'ARC', 'Female', '01155221244', 'mala@hotmail.com'),
('17101002', 'Kakababu', 'MNS', 'Male', '0115522123', 'kbabu@gmail.com'),
('17101003', 'Apu', 'CSE', 'Male', '0115522177', 'apu@gmail.com'),
('17101004', 'Durga', 'CSE', 'Female', '01512575989', 'durga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `taken_course`
--

CREATE TABLE `taken_course` (
  `student_ID` varchar(255) NOT NULL,
  `course_code1` varchar(255) NOT NULL,
  `section_num1` varchar(255) NOT NULL,
  `course_code2` varchar(255) NOT NULL,
  `section_num2` varchar(255) NOT NULL,
  `course_code3` varchar(255) NOT NULL,
  `section_num3` varchar(255) NOT NULL,
  `course_code4` varchar(255) NOT NULL,
  `section_num4` varchar(255) NOT NULL,
  `course_code5` varchar(255) NOT NULL,
  `section_num5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taken_course`
--

INSERT INTO `taken_course` (`student_ID`, `course_code1`, `section_num1`, `course_code2`, `section_num2`, `course_code3`, `section_num3`, `course_code4`, `section_num4`, `course_code5`, `section_num5`) VALUES
('11101001', ' CSE320', ' 1', ' CSE370', ' 2', ' PHY111', ' 5', ' ECO101', ' 2', ' ', ' '),
('11101002', ' CSE320', ' 1', ' CSE370', ' 4', ' PHY112', ' 6', ' HST103', ' 2', ' ', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD PRIMARY KEY (`blood_id`),
  ADD KEY `blood_id` (`blood_id`);

--
-- Indexes for table `club_joins`
--
ALTER TABLE `club_joins`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `club_id` (`club_id`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `coursecode`
--
ALTER TABLE `coursecode`
  ADD PRIMARY KEY (`course_id`,`section_num`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `section_num` (`section_num`),
  ADD KEY `section_num_2` (`section_num`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`course_id`,`section_num`),
  ADD KEY `faculty_in` (`faculty_in`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `section_numb` (`section_num`);

--
-- Indexes for table `ridesharing`
--
ALTER TABLE `ridesharing`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `skill_search`
--
ALTER TABLE `skill_search`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `student_ID` (`student_ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_ID`),
  ADD KEY `student_ID` (`student_ID`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `taken_course`
--
ALTER TABLE `taken_course`
  ADD PRIMARY KEY (`student_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blood_donation`
--
ALTER TABLE `blood_donation`
  ADD CONSTRAINT `blood_donation_ibfk_1` FOREIGN KEY (`blood_id`) REFERENCES `student` (`student_ID`);

--
-- Constraints for table `club_joins`
--
ALTER TABLE `club_joins`
  ADD CONSTRAINT `club_joins_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `coursecode` (`course_id`),
  ADD CONSTRAINT `faculty_ibfk_2` FOREIGN KEY (`section_num`) REFERENCES `coursecode` (`section_num`);

--
-- Constraints for table `ridesharing`
--
ALTER TABLE `ridesharing`
  ADD CONSTRAINT `ridesharing_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`);

--
-- Constraints for table `skill_search`
--
ALTER TABLE `skill_search`
  ADD CONSTRAINT `skill_search_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`);

--
-- Constraints for table `taken_course`
--
ALTER TABLE `taken_course`
  ADD CONSTRAINT `taken_course_ibfk_1` FOREIGN KEY (`student_ID`) REFERENCES `student` (`student_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
