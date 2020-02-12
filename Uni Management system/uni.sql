-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 26, 2019 at 06:42 PM
-- Server version: 8.0.18
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

CREATE TABLE `advisor` (
  `s_ID` int(11) NOT NULL,
  `i_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`s_ID`, `i_ID`) VALUES
(174006, 101010),
(174019, 101010),
(174005, 111111),
(174012, 111111),
(174020, 111111),
(174000, 121212),
(174003, 121212),
(174010, 121212),
(174017, 121212),
(174018, 121212),
(174002, 131313),
(174004, 131313),
(174016, 131313),
(174021, 131313),
(174001, 141414),
(174011, 141414),
(174007, 151515),
(174013, 151515),
(174008, 191919),
(174009, 191919),
(174014, 191919),
(174015, 191919),
(174022, 202020);

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `ID` int(11) NOT NULL,
  `fname` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lname` varchar(40) NOT NULL,
  `faculty` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`ID`, `fname`, `lname`, `faculty`) VALUES
(74000, 'Oscar', 'Allen', 'Engineering'),
(74001, 'Kyle', 'Anderson', 'Law'),
(74002, 'Sophie', 'Bailey', 'Architecture'),
(74003, 'Tracy', 'Baker', 'Economics'),
(74004, 'Poppy', 'Booth', 'Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(20) NOT NULL,
  `title` varchar(45) NOT NULL,
  `dept_name` varchar(20) DEFAULT NULL,
  `credits` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `title`, `dept_name`, `credits`) VALUES
('ADT112', 'Introduction to Law', 'Law', 0),
('ARCH110', 'Introduction to Architecture', 'Architecture', 2),
('ARCH206', 'Statics 2', 'Architecture', 3),
('ARCH215', 'History of Art and Architecture 2', 'Architecture', 4),
('BUSN102', 'Introduction to Business', 'Business', 0),
('BUSN205', 'Principles of Management', 'Business', 2),
('COMP117', 'Computer Foundations', 'Computer Engineering', 4),
('COMP124', 'Computer Programming', 'Software Engineering', 4),
('COMP337', 'Database Management', 'Software Engineering', 4),
('COMP339', 'System Programming', 'Computer Engineering', 4),
('COMP526', 'Image Processing', 'Computer Engineering', 3),
('CT102', 'Computer applicationsin construction', 'Civil Engineering', 3),
('SENG335', 'Software Design and Architecture', 'Software Engineering', 4),
('TOUR102', 'Introduction to Tourism', 'Tourism', 1),
('TOUR339', 'System Management', 'Tourism', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `dept_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`dept_name`) VALUES
('Architecture'),
('Banking and Finance'),
('Business'),
('Civil Engineering'),
('Computer Engineering'),
('Electrical & Electronics Engineering'),
('International Relation'),
('Law'),
('Software Engineering'),
('Tourism');

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `ID` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `dept_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`ID`, `fname`, `lname`, `dept_name`) VALUES
(101010, 'Robert', 'Miller', 'Law'),
(111111, 'Denis', 'Brown', 'Tourism'),
(121212, 'Michael', 'Johnson', 'Software Engineering'),
(131313, 'Bob', 'Taylor', 'Computer Engineering'),
(141414, 'Sveta', 'Smith', 'Architecture'),
(151515, 'Anna', 'Williams', 'Civil Engineering'),
(161616, 'Valeria', 'Jones', 'Architecture'),
(171717, 'Kristina', 'Davis', 'Software Engineering'),
(181818, 'Ayana', 'Wilson', 'Software Engineering'),
(191919, 'Nikita', 'Anderson', 'Business'),
(202020, 'Kirill', 'Poligach', 'Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_name` varchar(20) NOT NULL,
  `password` varchar(42) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ID` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `password`, `ID`, `email`, `status`) VALUES
('fac074000', '40d30bf28a20ddd9f445c30d8bd3bc7b', 74000, '074000@gmail.com', 'f'),
('fac074001', '98c804341905eacea45d0a35cf8fe8d9', 74001, '074001@gmail.com', 'f'),
('fac074002', '8d6f828e93e4394977f863bda0bcfa19', 74002, '074002@gmail.com', 'f'),
('fac074003', 'f3699e22afb38fd2913f6dca00a6e1f1', 74003, '074003@gmail.com', 'f'),
('fac074004', '3fc10f5e107f341639e5a7fe69aa5f0e', 74004, '074004@gmail.com', 'f'),
('ins101010', '6d071901727aec1ba6d8e2497ef5b709', 101010, '101010@gmail.com', 'i'),
('ins111111', '96e79218965eb72c92a549dd5a330112', 111111, '111111@gmail.com', 'i'),
('ins121212', '93279e3308bdbbeed946fc965017f67a', 121212, '121212@gmail.com', 'i'),
('ins131313', 'e04755387e5b5968ec213e41f70c1d46', 131313, '131313@gmail.com', 'i'),
('ins141414', '6dd9aa0b0606270d0875acb21546bedb', 141414, '141414@gmail.com', 'i'),
('ins151515', '858915f1d2d425959fd4da867ba6b599', 151515, '151515@gmail.com', 'i'),
('ins161616', '71946d6f6c5fd7e031f49b5191910e8b', 161616, '161616@gmail.com', 'i'),
('ins171717', 'a44e22ff6cf7ca4ccbf0f6a3c7705f4d', 171717, '171717@gmail.com', 'i'),
('ins181818', 'defa50a7babc2b727c44fe4e03905bf4', 181818, '181818@gmail.com', 'i'),
('ins191919', '470793e036b9db245ac460dc89b15913', 191919, '191919@gmail.com', 'i'),
('std174000', '2f8756e518a1d6ffb737d29dcded2096', 174000, '174000@gmail.com', 's'),
('std174001', '34212fdaeda2cd0e2aa5da2e8e64c7c6', 174001, '174001@gmail.com', 's'),
('std174002', 'ce8c989497b737f5f2c19a0b06df982f', 174002, '174002@gmail.com', 's'),
('std174003', '58111a04fe161cd92c9d3aec8c16cfa1', 174003, '174003@gmail.com', 's'),
('std174004', '63cdd914634e726b5ff5d090088ac20c', 174004, '174004@gmail.com', 's'),
('std174005', 'b9df2a1be954bdb0ba58ff50bf96847a', 174005, '174005@gmail.com', 's'),
('std174006', '01760fa9bb65e36e77dd1e87d935508d', 174006, '174006@gmail.com', 's'),
('std174007', 'c11259ea3464b1d98936e60830c549d6', 174007, '174007@gmail.com', 's'),
('std174008', 'd00aa87632034824fb07e98017500399', 174008, '174008@gmail.com', 's'),
('std174009', 'bd413ffa58c40fe470bb1b04608967a6', 174009, '174009@gmail.com', 's'),
('std174010', '4fae1e3bd17a25c82c56650bb562675e', 174010, '174010@gmail.com', 's'),
('std174011', 'b01ae3dd7e38e3879ad95021273c60e5', 174011, '174011@gmail.com', 's'),
('std174012', 'e1c9205abc1802f64586511ef0383699', 174012, '174012@gmail.com', 's'),
('std174013', '37685966e0369d2fe4da555420c2e929', 174013, '174013@gmail.com', 's'),
('std174014', '58117f024e0ac0fc8953db5d5f64b136', 174014, '174014@gmail.com', 's'),
('std174015', 'd7465f38b9df56dd2a7366933e2ccd69', 174015, '174015@gmail.com', 's'),
('std174016', 'ff8c8737a869bfbb33483f1e9ec5cf53', 174016, '174016@gmail.com', 's'),
('std174017', 'f06e68923492b7c1ebd07b4db964c94a', 174017, '174017@gmail.com', 's'),
('std174018', '18bc432e3f80cbd3e1181046db1bf329', 174018, '174018@gmail.com', 's'),
('std174019', 'f4a19309fc523c1d5e6b849e7630d845', 174019, '174019@gmail.com', 's'),
('std174020', '5f179980d663003405c63e94849925b1', 174020, '174020@gmail.com', 's'),
('std174021', '6e6b7144e99b4adaad79a875889fd4d4', 174021, '174021@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `dept_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `dept_name`) VALUES
(174000, 'Lily', 'Baker', 'Software Engineering'),
(174001, 'Alina', 'Hall', 'Architecture'),
(174002, 'Danil', 'Jones', 'Computer Engineering'),
(174003, 'Zhasmin', 'Brown', 'Software Engineering'),
(174004, 'George', 'Ward', 'Computer Engineering'),
(174005, 'James', 'Sanchez', 'Tourism'),
(174006, 'John', 'Bennett', 'Law'),
(174007, 'David', 'Wood', 'Civil Engineering'),
(174008, 'Mary', 'Barnes', 'Business'),
(174009, 'Linda', 'Ross', 'Business'),
(174010, 'Susan', 'Henderson', 'Software Engineering'),
(174011, 'Margaret', 'Perry', 'Architecture'),
(174012, 'Barbara', 'Scott', 'Tourism'),
(174013, 'Jake', 'Moore', 'Civil Engineering'),
(174014, 'Jacob', 'Jackson', 'Business'),
(174015, 'Alexander', 'White', 'Business'),
(174016, 'Thomas', 'Harris', 'Computer Engineering'),
(174017, 'Victoria', 'Martin', 'Software Engineering'),
(174018, 'Mia', 'Howard', 'Software Engineering'),
(174019, 'Emma', 'Cooper', 'Law'),
(174020, 'Isabella', 'Murphy', 'Tourism'),
(174021, 'Harry', 'Rivera', 'Computer Engineering'),
(174022, 'Anfisa', 'Chehova', 'Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `ID` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`ID`, `course_id`) VALUES
(174000, 'COMP124'),
(174001, 'ARCH215'),
(174002, 'COMP117'),
(174003, 'SENG335'),
(174004, 'COMP117'),
(174005, 'TOUR102'),
(174006, 'ADT112'),
(174007, 'CT102'),
(174008, 'BUSN102'),
(174009, 'BUSN205'),
(174010, 'COMP124'),
(174011, 'ARCH206'),
(174012, 'TOUR102'),
(174013, 'CT102'),
(174014, 'BUSN102'),
(174015, 'BUSN205'),
(174016, 'COMP526'),
(174017, 'SENG335'),
(174018, 'SENG335'),
(174019, 'ADT112'),
(174020, 'TOUR102'),
(174021, 'COMP117'),
(174000, 'BUSN102'),
(174022, 'TOUR339');

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` int(11) NOT NULL,
  `course_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ID`, `course_id`) VALUES
(131313, 'COMP117'),
(141414, 'ARCH110'),
(121212, 'COMP124'),
(171717, 'SENG335'),
(151515, 'CT102'),
(131313, 'COMP526'),
(181818, 'COMP337'),
(141414, 'ARCH206'),
(191919, 'BUSN102'),
(101010, 'ADT112'),
(111111, 'TOUR102'),
(161616, 'ARCH215'),
(202020, 'ARCH110');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD PRIMARY KEY (`s_ID`),
  ADD KEY `s_ID` (`s_ID`),
  ADD KEY `i_ID` (`i_ID`);

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`dept_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`),
  ADD KEY `ID` (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_name` (`dept_name`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD KEY `ID` (`ID`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD KEY `ID` (`ID`),
  ADD KEY `course_id` (`course_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advisor`
--
ALTER TABLE `advisor`
  ADD CONSTRAINT `advisor_ibfk_1` FOREIGN KEY (`i_ID`) REFERENCES `instructor` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `advisor_ibfk_2` FOREIGN KEY (`s_ID`) REFERENCES `student` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `faculty` (`dept_name`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `instructor`
--
ALTER TABLE `instructor`
  ADD CONSTRAINT `instructor_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `faculty` (`dept_name`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`dept_name`) REFERENCES `faculty` (`dept_name`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `takes_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `student` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `takes_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `teaches`
--
ALTER TABLE `teaches`
  ADD CONSTRAINT `teaches_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `instructor` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `teaches_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
