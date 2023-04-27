-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 02:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resultgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `mysubjects`
--

CREATE TABLE `mysubjects` (
  `mySubjectId` int(100) NOT NULL,
  `StudentId` int(100) DEFAULT NULL,
  `Id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `Id` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `otherName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staffId` varchar(255) NOT NULL,
  `adminTypeId` int(20) NOT NULL,
  `isAssigned` int(10) NOT NULL,
  `isPasswordChanged` int(10) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `profile` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`Id`, `firstName`, `lastName`, `otherName`, `emailAddress`, `phoneNo`, `password`, `staffId`, `adminTypeId`, `isAssigned`, `isPasswordChanged`, `dateCreated`, `profile`) VALUES
(2, 'Liams', 'Moore', 'Admin', 'admin@mail.com', '888888', 'test', 'Admin', 1, 1, 0, '', 'profile.jpg'),
(6, 'Chadwick', 'Booseman', 'Staff', 'xampp@gmail.com', '9451465196', '1253208465b1efa876f982d8a9e73eef', '91437', 2, 1, 0, '2022-11-21', NULL),
(7, 'Wakanda', 'Forever', 'Staff', 'roneilbansas5222@gmail.com', '09661337494', '1253208465b1efa876f982d8a9e73eef', '76158', 2, 1, 0, '2022-11-24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbladmintype`
--

CREATE TABLE `tbladmintype` (
  `Id` int(20) NOT NULL,
  `adminTypeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmintype`
--

INSERT INTO `tbladmintype` (`Id`, `adminTypeName`) VALUES
(1, 'Admin'),
(2, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `tblassignedadmin`
--

CREATE TABLE `tblassignedadmin` (
  `id` int(11) NOT NULL,
  `dateAssigned` varchar(200) NOT NULL,
  `staffId` int(11) NOT NULL,
  `facultyId` int(11) NOT NULL,
  `departmentId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcgparesult`
--

CREATE TABLE `tblcgparesult` (
  `Id` int(11) NOT NULL,
  `matricNo` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `classOfDiploma` varchar(50) NOT NULL,
  `dateAdded` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `subjectId` int(100) NOT NULL,
  `subjectTitle` varchar(255) NOT NULL,
  `departmentId` int(255) NOT NULL,
  `dateAdded` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`subjectId`, `subjectTitle`, `departmentId`, `dateAdded`) VALUES
(58, 'english', 26, '2022-11-29'),
(59, 'math', 26, '2022-11-29'),
(60, 'science', 26, '2022-11-29'),
(61, 'pe', 26, '2022-11-29'),
(62, 'arpan', 27, '2022-12-09'),
(64, 'english', 27, '2022-11-29'),
(65, 'robotics', 27, '2022-11-29'),
(66, 'calculus', 28, '2022-11-30'),
(67, 'Algebra', 28, '2022-11-30'),
(68, 'Trigonometry', 28, '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `departmentId` int(100) NOT NULL,
  `departmentName` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `levelId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`departmentId`, `departmentName`, `dateCreated`, `levelId`) VALUES
(26, 'Duterte', '2022-11-28', 1),
(27, 'ragnarok', '2022-11-28', 2),
(28, 'Aquinos', '2022-12-09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblfaculty`
--

CREATE TABLE `tblfaculty` (
  `facultyId` int(20) NOT NULL,
  `facultyName` varchar(255) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `departmentId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfaculty`
--

INSERT INTO `tblfaculty` (`facultyId`, `facultyName`, `dateCreated`, `departmentId`) VALUES
(5, 'Room 1', '2022-11-09', NULL),
(6, 'Room 2', '2022-11-09', NULL),
(7, 'Room 3', '2022-11-09', NULL),
(8, 'Room 4', '2022-11-09', NULL),
(9, 'Room 5', '2022-11-09', NULL),
(11, 'Room 6', '2022-11-28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblfinalresult`
--

CREATE TABLE `tblfinalresult` (
  `Id` int(10) NOT NULL,
  `averageGrade` varchar(10) NOT NULL,
  `resultId` int(255) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `dateAdded` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllevel`
--

CREATE TABLE `tbllevel` (
  `levelId` int(20) NOT NULL,
  `levelName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbllevel`
--

INSERT INTO `tbllevel` (`levelId`, `levelName`) VALUES
(1, 'Grade 1'),
(2, 'Grade 2'),
(3, 'Grade 3'),
(4, 'Grade 4'),
(5, 'Grade 5'),
(6, 'Grade 6');

-- --------------------------------------------------------

--
-- Table structure for table `tblmyquiz`
--

CREATE TABLE `tblmyquiz` (
  `myquizId` int(100) NOT NULL,
  `StudentId` int(100) DEFAULT NULL,
  `subjectId` int(100) DEFAULT NULL,
  `departmentId` int(100) DEFAULT NULL,
  `quiz_id` int(100) DEFAULT NULL,
  `score` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblmyquiz`
--

INSERT INTO `tblmyquiz` (`myquizId`, `StudentId`, `subjectId`, `departmentId`, `quiz_id`, `score`) VALUES
(3, 99, 58, 26, 1, 20),
(4, 103, 59, 26, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `tblquiz`
--

CREATE TABLE `tblquiz` (
  `quiz_id` int(100) NOT NULL,
  `quizTitle` varchar(200) DEFAULT NULL,
  `quizLength` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblquiz`
--

INSERT INTO `tblquiz` (`quiz_id`, `quizTitle`, `quizLength`) VALUES
(1, 'Algebra', 25),
(2, 'Activity 2', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tblresult`
--

CREATE TABLE `tblresult` (
  `resultId` int(10) NOT NULL,
  `StudentId` int(100) NOT NULL,
  `subjectId` int(100) NOT NULL,
  `grade` varchar(50) NOT NULL DEFAULT 'No Grade',
  `dateAdded` varchar(50) NOT NULL,
  `departmentId` int(100) DEFAULT NULL,
  `gradingId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblresult`
--

INSERT INTO `tblresult` (`resultId`, `StudentId`, `subjectId`, `grade`, `dateAdded`, `departmentId`, `gradingId`) VALUES
(100, 99, 58, ' 89', '  2022-11-30', 26, 1),
(101, 99, 59, ' 99', '  2022-11-30', 26, 1),
(102, 99, 60, ' 85', '  2022-11-30', 26, 1),
(103, 99, 61, ' 99', '  2022-11-30', 26, 1),
(104, 99, 58, ' 82', '  2022-11-30', 26, 2),
(105, 99, 59, ' 81', '  2022-11-30', 26, 2),
(106, 99, 60, ' 84', '  2022-11-30', 26, 2),
(107, 99, 61, ' 83', '  2022-11-30', 26, 2),
(108, 99, 58, ' 85', '  2022-11-30', 26, 3),
(109, 99, 59, ' 85', '  2022-11-30', 26, 3),
(110, 99, 60, ' 86', '  2022-11-30', 26, 3),
(111, 99, 61, ' 78', '  2022-11-30', 26, 3),
(112, 99, 58, ' 86', '  2022-11-30', 26, 4),
(113, 99, 59, ' 85', '  2022-11-30', 26, 4),
(114, 99, 60, ' 87', '  2022-11-30', 26, 4),
(115, 99, 61, ' 83', '  2022-11-30', 26, 4),
(116, 100, 58, ' 86', '  2022-11-30', 26, 1),
(117, 100, 59, ' 86', '  2022-11-30', 26, 1),
(118, 100, 60, ' 81', '  2022-11-30', 26, 1),
(119, 100, 61, ' 82', '  2022-11-30', 26, 1),
(120, 103, 58, ' 89', '  2022-12-04', 26, 1),
(121, 103, 59, ' 88', '  2022-12-09', 26, 1),
(122, 103, 60, ' 85', '  2022-12-09', 26, 1),
(123, 103, 61, ' 93', '  2022-12-09', 26, 1),
(124, 102, 67, ' 96', '  2022-12-29', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblsemester`
--

CREATE TABLE `tblsemester` (
  `grading_Id` int(20) NOT NULL,
  `grading` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsemester`
--

INSERT INTO `tblsemester` (`grading_Id`, `grading`) VALUES
(1, '1st Grading'),
(2, '2nd Grading'),
(3, '3rd Grading'),
(4, '4th Grading');

-- --------------------------------------------------------

--
-- Table structure for table `tblsession`
--

CREATE TABLE `tblsession` (
  `sessionId` int(20) NOT NULL,
  `sessionName` varchar(30) NOT NULL,
  `isActive` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsession`
--

INSERT INTO `tblsession` (`sessionId`, `sessionName`, `isActive`) VALUES
(1, '2022/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblstaff`
--

CREATE TABLE `tblstaff` (
  `teacherId` int(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `phoneNo` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `staffId` varchar(255) NOT NULL,
  `departmentId` int(100) NOT NULL,
  `dateCreated` varchar(255) NOT NULL,
  `profile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstaff`
--

INSERT INTO `tblstaff` (`teacherId`, `firstName`, `lastName`, `emailAddress`, `phoneNo`, `password`, `staffId`, `departmentId`, `dateCreated`, `profile`) VALUES
(13, 'sam', 'last', 'elon@mail.com', '95878778', 'test', '46339', 26, '2022-11-28', NULL),
(14, 'john', 'cena', 'elon@mail.com', '9451465196', 'test', '20886', 27, '2022-11-29', NULL),
(15, 'aquino', 'agi', 'elon@mail.com', '45686549878', 'test', '53488', 28, '2022-11-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `StudentId` int(20) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `otherName` varchar(255) NOT NULL,
  `matricNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `schoolyear` varchar(200) NOT NULL,
  `contactNumber` varchar(100) DEFAULT NULL,
  `departmentId` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`StudentId`, `firstName`, `lastName`, `otherName`, `matricNo`, `password`, `schoolyear`, `contactNumber`, `departmentId`) VALUES
(99, 'test', 'testtest', 'tes', '223232', 'test', '2022-11-30', '0965887988', 26),
(100, 'rgb', 'rb', 'max', '1111', 'test', '2022-11-30', '0965887988', 26),
(102, 'janel', 'rose', 'jen', '21122', 'test', '2022-11-30', '0965887988', 28),
(103, 'first', 'last', 'nick', '10101', 'test', '2022-12-04', '0965887988', 26),
(104, 'sam', 'boy', 'samsam', '223236', 'test', '2023-04-22', '0965887988', 28);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mysubjects`
--
ALTER TABLE `mysubjects`
  ADD PRIMARY KEY (`mySubjectId`);

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tbladmintype`
--
ALTER TABLE `tbladmintype`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblassignedadmin`
--
ALTER TABLE `tblassignedadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcgparesult`
--
ALTER TABLE `tblcgparesult`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`subjectId`),
  ADD KEY `FK_tblcourse` (`departmentId`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`departmentId`),
  ADD KEY `FK_tbldepartment` (`levelId`);

--
-- Indexes for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  ADD PRIMARY KEY (`facultyId`),
  ADD KEY `FK_tblfaculty` (`departmentId`);

--
-- Indexes for table `tblfinalresult`
--
ALTER TABLE `tblfinalresult`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_tblfinalresult` (`resultId`);

--
-- Indexes for table `tbllevel`
--
ALTER TABLE `tbllevel`
  ADD PRIMARY KEY (`levelId`);

--
-- Indexes for table `tblmyquiz`
--
ALTER TABLE `tblmyquiz`
  ADD PRIMARY KEY (`myquizId`),
  ADD KEY `FK_tblmyquiz` (`quiz_id`),
  ADD KEY `FK_tblmyquiz_s` (`subjectId`),
  ADD KEY `FK_tblmyquiz_d` (`departmentId`),
  ADD KEY `FK_tblmyquiz_st` (`StudentId`);

--
-- Indexes for table `tblquiz`
--
ALTER TABLE `tblquiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD PRIMARY KEY (`resultId`),
  ADD KEY `FK_tblresult_subject` (`subjectId`),
  ADD KEY `FK_tblresult_department` (`departmentId`),
  ADD KEY `FK_tblresult_student` (`StudentId`),
  ADD KEY `FK_tblresult_grading` (`gradingId`);

--
-- Indexes for table `tblsemester`
--
ALTER TABLE `tblsemester`
  ADD PRIMARY KEY (`grading_Id`);

--
-- Indexes for table `tblsession`
--
ALTER TABLE `tblsession`
  ADD PRIMARY KEY (`sessionId`);

--
-- Indexes for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD PRIMARY KEY (`teacherId`),
  ADD KEY `FK_tblstaff` (`departmentId`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`StudentId`),
  ADD KEY `FK_tblstudent_department` (`departmentId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mysubjects`
--
ALTER TABLE `mysubjects`
  MODIFY `mySubjectId` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbladmintype`
--
ALTER TABLE `tbladmintype`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblassignedadmin`
--
ALTER TABLE `tblassignedadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcgparesult`
--
ALTER TABLE `tblcgparesult`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `subjectId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblfaculty`
--
ALTER TABLE `tblfaculty`
  MODIFY `facultyId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblfinalresult`
--
ALTER TABLE `tblfinalresult`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbllevel`
--
ALTER TABLE `tbllevel`
  MODIFY `levelId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblmyquiz`
--
ALTER TABLE `tblmyquiz`
  MODIFY `myquizId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblquiz`
--
ALTER TABLE `tblquiz`
  MODIFY `quiz_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblresult`
--
ALTER TABLE `tblresult`
  MODIFY `resultId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `tblsemester`
--
ALTER TABLE `tblsemester`
  MODIFY `grading_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblsession`
--
ALTER TABLE `tblsession`
  MODIFY `sessionId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstaff`
--
ALTER TABLE `tblstaff`
  MODIFY `teacherId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `StudentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD CONSTRAINT `FK_tblcourse` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD CONSTRAINT `FK_tbldepartment` FOREIGN KEY (`levelId`) REFERENCES `tbllevel` (`levelId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblfinalresult`
--
ALTER TABLE `tblfinalresult`
  ADD CONSTRAINT `FK_tblfinalresult` FOREIGN KEY (`resultId`) REFERENCES `tblresult` (`resultId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblmyquiz`
--
ALTER TABLE `tblmyquiz`
  ADD CONSTRAINT `FK_tblmyquiz` FOREIGN KEY (`quiz_id`) REFERENCES `tblquiz` (`quiz_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblmyquiz_d` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblmyquiz_s` FOREIGN KEY (`subjectId`) REFERENCES `tblcourse` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblmyquiz_st` FOREIGN KEY (`StudentId`) REFERENCES `tblstudent` (`StudentId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblresult`
--
ALTER TABLE `tblresult`
  ADD CONSTRAINT `FK_tblresult` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblresult_department` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblresult_grading` FOREIGN KEY (`gradingId`) REFERENCES `tblsemester` (`grading_Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblresult_student` FOREIGN KEY (`StudentId`) REFERENCES `tblstudent` (`StudentId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_tblresult_subject` FOREIGN KEY (`subjectId`) REFERENCES `tblcourse` (`subjectId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblstaff`
--
ALTER TABLE `tblstaff`
  ADD CONSTRAINT `FK_tblstaff` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD CONSTRAINT `FK_tblstudent_department` FOREIGN KEY (`departmentId`) REFERENCES `tbldepartment` (`departmentId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
