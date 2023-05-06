-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 09:01 PM
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
(69, 'MTB', 30, '2023-04-30'),
(70, 'ENGLISH', 30, '2023-04-30'),
(71, 'FILIPINO', 30, '2023-04-30'),
(72, 'MATH', 30, '2023-04-30'),
(73, 'SCIENCE', 30, '2023-04-30'),
(74, 'ESP', 30, '2023-04-30'),
(75, 'ARALING PANLIPUNAN', 30, '2023-04-30'),
(76, 'MAPEH', 30, '2023-04-30'),
(77, 'MTB', 31, '2023-04-30'),
(78, 'ENGLISH', 31, '2023-04-30'),
(79, 'FILIPINO', 31, '2023-04-30'),
(80, 'MATH', 31, '2023-04-30'),
(81, 'SCIENCE', 31, '2023-04-30'),
(82, 'ESP', 31, '2023-04-30'),
(83, 'ARALING PANLIPUNAN', 31, '2023-04-30'),
(84, 'MAPEH', 31, '2023-04-30'),
(85, 'MTB', 38, '2023-04-30'),
(86, 'ENGLISH', 38, '2023-04-30'),
(87, 'FILIPINO', 38, '2023-04-30'),
(88, 'MATH', 38, '2023-04-30'),
(89, 'SCIENCE', 38, '2023-04-30'),
(90, 'ESP', 38, '2023-04-30'),
(91, 'ARALING PANLIPUNAN', 38, '2023-04-30'),
(92, 'MAPEH', 38, '2023-04-30'),
(93, 'MTB', 32, '2023-04-30'),
(94, 'ENGLISH', 32, '2023-04-30'),
(95, 'FILIPINO', 32, '2023-04-30'),
(96, 'MATH', 32, '2023-04-30'),
(97, 'SCIENCE', 32, '2023-04-30'),
(98, 'ESP', 32, '2023-04-30'),
(99, 'ARALING PANLIPUNAN', 32, '2023-04-30'),
(100, 'MAPEH', 32, '2023-04-30'),
(101, 'MTB', 33, '2023-04-30'),
(102, 'ENGLISH', 33, '2023-04-30'),
(103, 'FILIPINO', 33, '2023-04-30'),
(104, 'MATH', 33, '2023-04-30'),
(105, 'SCIENCE', 33, '2023-04-30'),
(106, 'ESP', 33, '2023-04-30'),
(107, 'ARALING PANLIPUNAN', 33, '2023-04-30'),
(108, 'MAPEH', 33, '2023-04-30'),
(109, 'MTB', 34, '2023-04-30'),
(110, 'ENGLISH', 34, '2023-04-30'),
(111, 'FILIPINO', 34, '2023-04-30'),
(112, 'MATH', 34, '2023-04-30'),
(113, 'SCIENCE', 34, '2023-04-30'),
(114, 'ESP', 34, '2023-04-30'),
(115, 'ARALING PANLIPUNAN', 34, '2023-04-30'),
(116, 'MAPEH', 34, '2023-04-30'),
(117, 'MTB', 35, '2023-04-30'),
(118, 'ENGLISH', 35, '2023-04-30'),
(119, 'FILIPINO', 35, '2023-04-30'),
(120, 'MATH', 35, '2023-04-30'),
(121, 'SCIENCE', 35, '2023-04-30'),
(122, 'ESP', 35, '2023-04-30'),
(123, 'ARALING PANLIPUNAN', 35, '2023-04-30'),
(124, 'MAPEH', 35, '2023-04-30'),
(125, 'EPP', 29, '2023-04-30'),
(126, 'ENGLISH', 29, '2023-04-30'),
(127, 'FILIPINO', 29, '2023-04-30'),
(128, 'MATH', 29, '2023-04-30'),
(129, 'SCIENCE', 29, '2023-04-30'),
(130, 'ESP', 29, '2023-04-30'),
(131, 'ARALING PANLIPUNAN', 29, '2023-04-30'),
(132, 'MAPEH', 29, '2023-04-30'),
(133, 'EPP', 36, '2023-04-30'),
(134, 'ENGLISH', 36, '2023-04-30'),
(135, 'FILIPINO', 36, '2023-04-30'),
(136, 'MATH', 36, '2023-04-30'),
(137, 'SCIENCE', 36, '2023-04-30'),
(138, 'ESP', 36, '2023-04-30'),
(139, 'ARALING PANLIPUNAN', 36, '2023-04-30'),
(140, 'MAPEH', 36, '2023-04-30'),
(141, 'EPP', 37, '2023-04-30'),
(142, 'ENGLISH', 37, '2023-04-30'),
(143, 'FILIPINO', 37, '2023-04-30'),
(144, 'MATH', 37, '2023-04-30'),
(145, 'SCIENCE', 37, '2023-04-30'),
(146, 'ESP', 37, '2023-04-30'),
(147, 'ARALING PANLIPUNAN', 37, '2023-04-30'),
(148, 'MAPEH', 37, '2023-04-30'),
(149, 'EPP', 39, '2023-04-30'),
(150, 'ENGLISH', 39, '2023-04-30'),
(151, 'FILIPINO', 39, '2023-04-30'),
(152, 'MATH', 39, '2023-04-30'),
(153, 'SCIENCE', 39, '2023-04-30'),
(154, 'ESP', 39, '2023-04-30'),
(155, 'ARALING PANLIPUNAN', 39, '2023-04-30'),
(156, 'MAPEH', 39, '2023-04-30'),
(157, 'EPP', 40, '2023-04-30'),
(158, 'ENGLISH', 40, '2023-04-30'),
(159, 'FILIPINO', 40, '2023-04-30'),
(160, 'MATH', 40, '2023-04-30'),
(161, 'SCIENCE', 40, '2023-04-30'),
(162, 'ESP', 40, '2023-04-30'),
(163, 'ARALING PANLIPUNAN', 40, '2023-04-30'),
(164, 'MAPEH', 40, '2023-04-30');

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
(29, 'Vanda', '2023-04-29', 5),
(30, 'Rose', '2023-04-29', 1),
(31, 'Daisy', '2023-04-29', 1),
(32, 'Rosal', '2023-04-29', 2),
(33, 'Camia', '2023-04-29', 2),
(34, 'Tulip', '2023-04-29', 3),
(35, 'Santan', '2023-04-29', 3),
(36, 'Sunflower', '2023-04-29', 4),
(37, 'Jasmine', '2023-04-29', 4),
(38, 'Cathleya', '2023-04-30', 1),
(39, 'Orchid', '2023-04-30', 6),
(40, 'Lily', '2023-04-30', 5);

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
(125, 115, 69, ' 96', '  2023-05-06', 30, 1),
(126, 115, 70, ' 86', '  2023-05-06', 30, 1),
(127, 115, 71, ' 85', '  2023-05-06', 30, 1),
(128, 115, 72, ' 87', '  2023-05-06', 30, 1),
(129, 115, 73, ' 88', '  2023-05-06', 30, 1),
(130, 115, 74, ' 88', '  2023-05-06', 30, 1),
(131, 115, 75, ' 99', '  2023-05-06', 30, 1),
(132, 115, 76, ' 87', '  2023-05-06', 30, 1),
(133, 115, 69, ' 85', '  2023-05-06', 30, 2),
(134, 115, 70, ' 99', '  2023-05-06', 30, 2),
(135, 115, 71, ' 87', '  2023-05-06', 30, 2),
(136, 115, 72, ' 88', '  2023-05-06', 30, 2),
(137, 115, 73, ' 83', '  2023-05-06', 30, 2),
(138, 115, 74, ' 87', '  2023-05-06', 30, 2),
(139, 115, 75, ' 81', '  2023-05-06', 30, 2),
(140, 115, 76, ' 88', '  2023-05-06', 30, 2);

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
(16, 'Vicel ', 'Mamalaran', '', '', 'staff', '78156', 30, '2023-04-30', NULL),
(17, 'Raquels', 'Arsenal', 'Raquels@gmail.com', '9451465186', 'staff', '15881', 33, '2023-04-30', NULL),
(18, 'Gilna', 'Gella', '', '', 'staff', '16869', 32, '2023-04-30', NULL),
(19, 'Mercy', 'Miral', '', '', 'staff', '81074', 33, '2023-04-30', NULL),
(20, 'Josefina', 'Antitico', '', '', 'staff', '63198', 34, '2023-04-30', NULL),
(22, 'Susana', 'Melitante', '', '', 'staff', '88721', 35, '2023-04-30', NULL),
(23, 'Genelyn', 'Araneta', '', '', 'staff', '67274', 36, '2023-04-30', NULL),
(24, 'Leizl', 'Villarmino', '', '', 'staff', '76192', 37, '2023-04-30', NULL),
(25, 'Vebe', 'Relatado', '', '', 'staff', '96307', 40, '2023-04-30', NULL),
(26, 'Danelee', 'Majorenos', '', '', 'staff', '82968', 29, '2023-04-30', NULL),
(27, 'Aldrin', 'Barimbao', '', '', 'staff', '67598', 38, '2023-04-30', NULL),
(28, 'Imelda', 'Racines', '', '', 'staff', '41719', 39, '2023-04-30', NULL);

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
(115, 'daniel', 'alacador', 'dan', '2023-1234', 'test', '2023-04-30', '09558798778', 30),
(116, 'Arjay', 'Benting', '', '2023-1235', 'test', '2023-04-30', '', 30),
(117, 'Prince', 'Kean', '', '2023-1236', 'test', '2023-04-30', '', 30),
(118, 'Eugine', 'Canete', '', '2023-1237', 'test', '2023-04-30', '', 30),
(119, 'Jun Kayl', 'Colipano', '', '2023-1238', 'test', '2023-04-30', '', 30),
(120, 'Christian', 'Canol', '', '2023-1239', 'test', '2023-04-30', '', 33),
(121, 'Xian', 'Gella', '', '2023-1211', 'test', '2023-04-30', '', 33),
(122, 'Reynante', 'Gumisis', '', '2023-1212', 'test', '2023-04-30', '', 33),
(123, 'Wilmart Joy', 'Hetizo', '', '2023-1213', 'test', '2023-04-30', '', 33),
(124, 'Juan', 'Lumontod', '', '2023-1214', 'test', '2023-04-30', '', 33),
(126, 'JB Annyaz', 'Abellana', '', '2023-1215', 'test', '2023-04-30', '', 32),
(127, 'Euanz', 'Briones', '', '2023-1216', 'test', '2023-04-30', '', 32),
(128, 'John Macken', 'Buagas', '', '2023-1217', 'test', '2023-04-30', '', 32),
(129, 'Allan James', 'Eguin', '', '2023-1218', 'test', '2023-04-30', '', 32),
(130, 'Anthony', 'Ombrete', '', '2023-1219', 'test', '2023-04-30', '', 32),
(131, 'Wilfred', 'Capablanca', '', '2023-1220', 'test', '2023-04-30', '', 34),
(132, 'Aaron', 'Copino', '', '2023-1221', 'test', '2023-04-30', '', 34),
(133, 'Kuchi', 'Cutamora', '', '2023-1222', 'test', '2023-04-30', '', 34),
(134, 'Lorenzo', 'Dela Torre', '', '2023-1223', 'test', '2023-04-30', '', 34),
(135, 'Arvine', 'Echavez', '', '2023-1224', 'test', '2023-04-30', '', 34),
(136, 'Chris Jay', 'Briones', '', '2023-1225', 'test', '2023-04-30', '', 35),
(137, 'Renaldo', 'Gaviola', '', '2023-1226', 'test', '2023-04-30', '', 35),
(138, 'Erwin', 'Gonzales', '', '2023-1227', 'test', '2023-04-30', '', 35),
(139, 'Christophre', 'lemosnero', '', '2023-1228', 'test', '2023-04-30', '', 35),
(140, 'Meljun', 'Lumontod', '', '2023-1229', 'test', '2023-04-30', '', 35),
(141, 'Jernalyn', 'Ralaba', '', '2023-1230', 'test', '2023-04-30', '', 36),
(142, 'Johnprone', 'Cabunilos', '', '2023-1231', 'test', '2023-04-30', '', 36),
(143, 'nelcon', 'Capablanca', '', '2023-1232', 'test', '2023-04-30', '', 36),
(144, 'Reynan', 'Caspas', '', '2023-1233', 'test', '2023-04-30', '', 36),
(145, 'Keen Red', 'Derecho', '', '2023-1234', 'test', '2023-04-30', '', 36),
(146, 'Jhonryl', 'Briones', '', '2023-1235', 'test', '2023-04-30', '', 37),
(147, 'Mark Jde', 'Capablanca', '', '2023-1236', 'test', '2023-04-30', '', 37),
(148, 'Rosan', 'Kasas', '', '2023-1237', 'test', '2023-04-30', '', 37),
(149, 'Felmor Jr', 'Dumagdag', '', '2023-1238', 'test', '2023-04-30', '', 37),
(150, 'Jhon Rafael', 'Eniego', '', '2023-1239', 'test', '2023-04-30', '', 37),
(151, 'Natah Reh J', 'Cardeso', '', '2023-1240', 'test', '2023-04-30', '', 29),
(152, 'Jerosh Jem', 'Degoro', '', '2023-1241', 'test', '2023-04-30', '', 29),
(153, 'Louei', 'Donde', '', '2023-1242', 'test', '2023-04-30', '', 29),
(154, 'Destua', 'Roger', '', '2023-1243', 'test', '2023-04-30', '', 29),
(155, 'Justine', 'Eniego', '', '2023-1244', 'test', '2023-04-30', '', 29),
(156, 'Jhon Rayver', 'Abanigan', '', '2023-1245', 'test', '2023-04-30', '', 40),
(157, 'Bryan', 'Briones', '', '2023-1246', 'test', '2023-04-30', '', 40),
(158, 'Jhon Rian', 'Gansad', '', '2023-1247', 'test', '2023-04-30', '', 40),
(159, 'Thay Angelo', 'Hinoguin', '', '2023-1248', 'test', '2023-04-30', '', 40),
(160, 'Jhon Steve', 'Raypa', '', '2023-1249', 'test', '2023-04-30', '', 40),
(161, 'Junrey', 'Anable', '', '2023-1250', 'test', '2023-04-30', '', 39),
(162, 'Fernando Jr', 'Artiaga', '', '2023-1251', 'test', '2023-04-30', '', 39),
(163, 'Calissah', 'Harry', '', '2023-1252', 'test', '2023-04-30', '', 39),
(164, 'Ervin', 'Casas', '', '2023-1253', 'test', '2023-04-30', '', 39),
(165, 'Joren', 'Lorien', '', '2023-1254', 'test', '2023-04-30', '', 39);

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
  MODIFY `subjectId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `departmentId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

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
  MODIFY `resultId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

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
  MODIFY `teacherId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `StudentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

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
