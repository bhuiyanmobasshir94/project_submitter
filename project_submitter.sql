-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 10:16 PM
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
-- Database: `project_submitter`
--

-- --------------------------------------------------------

--
-- Table structure for table `courseassigned`
--

CREATE TABLE `courseassigned` (
  `Ccode` varchar(60) NOT NULL,
  `Maxmember` int(5) NOT NULL,
  `Date` varchar(25) NOT NULL,
  `Time` varchar(25) NOT NULL,
  `Tid` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseassigned`
--

INSERT INTO `courseassigned` (`Ccode`, `Maxmember`, `Date`, `Time`, `Tid`) VALUES
('PHY 1101 [D]', 3, '23/8/2017', '11:00 PM', '1234-1234-2'),
('MAT 1102 [C]', 3, '23/8/17', '10:58 PM', '1234-1234-2'),
('CSC 1102 [A]', 2, '19/8/2017', '08:96', '1234-1234-2'),
('ENG 1101[A]', 2, '19/8/2017', '07:58 PM', '1234-1234-2'),
('CSC 1204 [A]', 3, '23/8/2017', '10:58 PM', '1234-1234-2'),
('MAT 1102 [C]', 3, '23/8/2017', '10:58 PM', '1478-1478-2'),
('HCI [A]', 3, '23/8/2017', '11:00 PM', '1234-1234-2'),
('WEB [A]', 2, '19/8/2017', '11:00 AM', '1478-1478-2'),
('DBMS [A]', 3, '23/8/2017', '07:58 PM', '1478-1478-2'),
('HCI [A]', 2, '23/8/17', '11:00 PM', '1478-1478-2'),
('CSC 1204 [A]', 0, '23/8/2017', '07:58 PM', '1478-1478-2'),
('PHY 1101 [D]', 0, '19/8/2017', '10:58 PM', '1478-1478-2'),
('abc', 0, '23/8/2017', '03:47 AM', '1478-1478-2'),
('123', 0, '', '', '1478-1478-2'),
('CSC 1204 [A]', 0, '', '', '1478-1478-2'),
('HCI [A]', 4, '23/8/2017', '07:58 PM', '1005-1050-2'),
('ATP[A]', 4, '19/8/2017', '07:58 PM', '1005-1050-2');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `Title` varchar(255) NOT NULL,
  `Coursecode` varchar(255) NOT NULL,
  `Member` int(10) NOT NULL,
  `Proposalcomments` varchar(255) NOT NULL,
  `Prototypecomments` varchar(255) NOT NULL,
  `Submissioncomments` varchar(255) NOT NULL,
  `Marks` int(5) NOT NULL,
  `ID` varchar(25) NOT NULL,
  `IDs` varchar(255) NOT NULL,
  `Tags` text NOT NULL,
  `Ideas` text NOT NULL,
  `Prototypelink` varchar(255) NOT NULL,
  `Codelink` varchar(255) NOT NULL,
  `Prototypedate` varchar(25) NOT NULL,
  `Proposaldate` varchar(25) NOT NULL,
  `Submissiondate` varchar(25) NOT NULL,
  `Tid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`Title`, `Coursecode`, `Member`, `Proposalcomments`, `Prototypecomments`, `Submissioncomments`, `Marks`, `ID`, `IDs`, `Tags`, `Ideas`, `Prototypelink`, `Codelink`, `Prototypedate`, `Proposaldate`, `Submissiondate`, `Tid`) VALUES
('mmklkjnjnj', 'MAT 1102 [C]', 0, '', '', '', 0, '14-26655-2', 'mnnmnmn', 'kjkljl', 'knjknjk', '', '', '', '', '', ''),
('Torque', 'PHY 1101 [D]', 0, '', '', '', 0, '14-27067-2', '14-26659-2,14-26655-2, 14-27067-2', '', '', '', '', '', '', '', ''),
('Mota ', 'PHY 1101 [D]', 0, '', '', '', 0, '14-26655-2', '14-26659-2,14-26655-2, 14-27067-2', 'asdasdasdasd', 'jasdhjasdjhasd', '', '', '', '', '', ''),
('New Project', 'PHY 1101 [D]', 0, '', '', '', 0, '14-26659-2', '14-26659-2,14-26655-2', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` varchar(20) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `Projects` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Uname`, `Password`, `Cpassword`, `Projects`) VALUES
('14-26659-2', 'Shagor , Mobasshir Bhuiyan', '12345678', '12345678', ''),
('14-26655-2', 'Sumon, Amite Kumar baral', '12345678', '12345678', ''),
('14-26253-1', 'Das', '12345678', '12345678', ''),
('14-27067-2', 'Goswami, Saikat', '12345678', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` varchar(25) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Cpassword` varchar(255) NOT NULL,
  `Assignedprojects` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Uname`, `Password`, `Cpassword`, `Assignedprojects`) VALUES
('1234-1234-2', 'Sumon, Amite Kumar', '12345678', '12345678', ''),
('1478-1478-2', 'Dr. Lucky ', '12345678', '12345678', ''),
('1005-1050-2', 'Dr. Lucky ', '12345678', '12345678', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
