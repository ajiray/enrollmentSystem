-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 07:32 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE `adminuser` (
  `adminid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`adminid`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', ''),
(2, 'admin2', 'admin2', 'dean'),
(3, 'admin3', 'admin3', 'cashier'),
(4, 'admin4', 'admin4', 'registrar'),
(5, 'admin5', 'admin5', 'admission'),
(6, 'admin6', 'admin6', 'enrollementadviser'),
(7, 'admin7', 'admin7', 'dean'),
(8, 'admin8', 'admin8', 'cashier'),
(9, 'admin9', 'admin9', 'registrar'),
(10, 'admin10', 'admin10', 'admission'),
(11, 'admin11', 'admin11', 'admission'),
(12, 'admin12', 'admin12', 'enrollementadviser'),
(13, 'admin13', 'admin13', 'enrollementadviser'),
(14, 'admin14', 'admin14', 'dean'),
(15, 'a', 'a', 'cashier'),
(16, 'aji', 'aji', 'admin'),
(17, 'hocs', 'hocs', 'registrar'),
(18, 'chief', 'chief', 'registrar'),
(19, 'alexis', 'alexis', 'cashier');

-- --------------------------------------------------------

--
-- Table structure for table `applicationform`
--

CREATE TABLE `applicationform` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `fName` varchar(255) NOT NULL,
  `mName` varchar(255) NOT NULL,
  `lName` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `cNumber` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `prevSchool` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `schoolYear` varchar(255) NOT NULL,
  `emerName` varchar(255) NOT NULL,
  `emerRelationship` varchar(255) NOT NULL,
  `emerContact` varchar(255) NOT NULL,
  `birthday` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `civilstatus` varchar(30) NOT NULL,
  `image` text NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `applicationform`
--

INSERT INTO `applicationform` (`id`, `stud_id`, `fName`, `mName`, `lName`, `gender`, `cNumber`, `nationality`, `address`, `prevSchool`, `course`, `year`, `schoolYear`, `emerName`, `emerRelationship`, `emerContact`, `birthday`, `religion`, `civilstatus`, `image`, `type`) VALUES
(1, 2, 'try2', 'a', 'a', 'F', 'a', 'a', 'a', 'a', 'CS', '1st', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', ''),
(2, 1, 'try1', 'a', 'a', 'M', 'a', 'a', 'a', 'a', 'IT', '1st', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', 'Capture.PNG', ''),
(3, 4, 'try4', 'a', 'a', 'M', 'a', 'a', 'a', 'a', 'IT', '3rd', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', ''),
(4, 3, 'try3', 'a', 'a', 'F', 'a', 'a', 'a', 'a', 'IT', '1st', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', ''),
(5, 6, 'try8', 'a', 'a', 'M', 'a', 'a', 'a', 'a', 'CS', '1st', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', ''),
(6, 5, 'try7', 'a', 'a', 'M', 'a', 'a', 'a', 'a', 'CS', '2nd', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Married', '', ''),
(7, 7, 'ajiray', 'diego', 'de leon', 'M', '2', 'a', 'a', 'a', 'HRM', '2nd', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', ''),
(8, 9, 'Ray Iverson', 'Gallardo', 'Humol', 'M', '09156831148', 'Filipino', '437 Real St. Talon 1 Las Pinas City', 'UPHSD', 'IT', '1st', '2022-2023', 'Jay', 'Mother', 'emerContact', '2001-06-12', 'Catholic', 'Single', 'noprofil.jpg', ''),
(9, 8, 'Iver', 'Humol', 'Gallardo', 'M', '0912345343', 'Filipino', 'Muntinlupa City', 'UPHSD', 'IT', '1st', '2022-2023', 'Jay Humol', 'Mother', 'emerContact', '2001-06-12', 'Catholic', 'Single', 'noprofil.jpg', ''),
(10, 10, 'IversonGe', 'Verma', 'wewer', 'D', '09156831148', 'Filipino', '437 Real St. Talon 1 Las Pinas City', 'UPHSD', 'CS', '1st', '2022-2023', 'Joy Gallardo Humol', 'Mother', 'emerContact', '2001-06-12', 'Catholic', 'Single', 'image_2023-01-04_020500955.png', ''),
(11, 11, 'Iverson', 'Gallardo', 'Humol', 'M', '0976686877', 'Filipino', '21q34234', 'dfsdf', 'IT', '1st', '2022-2023', 'fdf', 'dfdf', 'emerContact', '2001-06-12', 'dfdf', '', 'ios.png', ''),
(12, 12, 'Ray Iverson', 'Gallardo', 'Humol', 'M', '123123213', 'Fil', '3434234 EDrdsfds', 'dsfsdfsd', 'IT', '2nd', '2022-2023', 'dsdfsdf', 'sdfsdf', 'sdfsdfsdf', '2001-06-12', 'dfsdf', 'Single', '', 'student'),
(13, 13, 'Ray Iverson', 'fdfgsdfgsgdf', 'sdfsdf', 'M', 'dfsdf', 'dfdfsdf', 'dfsdf', 'dsfsdf', 'IT', '1st', '2022-2023', 'sdfsdf', 'sdfsdf', 'sdfsdf', '2001-06-12', 'sdfsdf', 'Single', '', 'student'),
(14, 14, 'Ray Iverson', 'Gallardo', 'Humol', 'M', '09156831148', 'Filipino', '437 Real St. Talon 1 Las Pinas City', 'UPHSD', 'IT', '1st', '2022-2023', 'Joy Humol', 'Mother', '09451341928', '2001-06-12', 'Catholic', 'Single', 'About Us.png', 'student'),
(15, 15, 'Ray Iversdon', 'dfsdf', 'sdfsdf', 'M', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'IT', '3rd', '2022-2023', 'sfsdf', 'sdfsdf', 'sdfsdf', '2001-06-12', 'sdfsdf', 'Single', '', 'student'),
(16, 17, 'Rogin John', 'Sumait', 'De Venecia', 'M', '0912334567', 'Filipino', 'Apt. D1 Crispina Avenue, Pamplona 3', 'UPHSD', 'IT', '3rd', '2022-2023', 'Alexis Maqrqueses', 'Son', 'emerContact', '2001-04-03', 'Roman Catholic', 'Single', 'ACITIVITY HTML.jpg', 'student'),
(17, 18, 'AJIRAY DIEGO', 'DELA CRUZ', 'DE LEON', 'M', '09222222222', 'FIL', 'B', 'B', 'IT', '3rd', '2022-2023', 'AD', 'AD', '123123', '2001-06-12', 'C', 'Single', 'me.png', 'student'),
(18, 19, 'a', 'a', 'a', 'M', '2', 'a', 'a', 'a', 'IT', '1st', '2022-2023', 'a', 'a', 'a', '2001-06-12', 'a', 'Single', '', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `enrolledstudentonthesubject`
--

CREATE TABLE `enrolledstudentonthesubject` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `StudentName` int(11) NOT NULL,
  `subjectCode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gcash`
--

CREATE TABLE `gcash` (
  `id` int(11) NOT NULL,
  `gcash_name` varchar(50) NOT NULL,
  `gcash_amount` varchar(10) NOT NULL,
  `gcash_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcash`
--

INSERT INTO `gcash` (`id`, `gcash_name`, `gcash_amount`, `gcash_type`) VALUES
(2, 'Alexis Marqueses', '30000', 'enrollment'),
(3, 'Alexis Marqueses', '30000', 'enrollment'),
(4, 'Benedict Angelo M. Hocson', '50000', 'downpaymen'),
(5, 'Testing', '2222', 'downpaymen'),
(6, 'TESTING AGAIN', '20000', 'tuition'),
(7, 'Ajiray Diego', '200', 'enrollment'),
(8, 'keep it simpol', '1000', 'enrollment'),
(9, 'Lagot ka Verma', '1000', 'tuition'),
(10, 'sweldo', '2000', 'enrollment'),
(11, 'Ray Iverson', '2000', 'tuition'),
(12, 'Testing laman', '2002', 'enrollment'),
(13, 'alexis', '2000', 'enrollment'),
(14, '1111', '111', 'enrollment'),
(15, 'Steve Grant Rogers', '20000', 'enrollment'),
(16, 'Thor Odinson', '2000', 'enrollment'),
(17, 'iver22', '2000', 'enrollment'),
(18, 'Benedict M. Hocson', '2000', 'enrollment'),
(19, 'GGG', '2000', 'enrollment'),
(20, 'sadsad', '2', 'enrollment'),
(21, 's', '2', 'enrollment'),
(22, 's', '2', 'enrollment'),
(23, '3', '3', 'enrollment'),
(24, '3', '3', 'enrollment'),
(25, 'sdfdsf', '321321', 'enrollment'),
(26, 'Chief', '2000', 'enrollment'),
(27, 'Rogin De Venecia', '15000', 'enrollment');

-- --------------------------------------------------------

--
-- Table structure for table `paymentconfirmed`
--

CREATE TABLE `paymentconfirmed` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paymentconfirmed`
--

INSERT INTO `paymentconfirmed` (`id`, `stud_id`, `name`, `email`, `type`, `amount`, `status`) VALUES
(1, 0, 'Benedict Hocson', 'hocsonbenedict@yahoo.com', 'gcash', '2000', 'confirmed'),
(2, 0, 'Ajiray', 'diego@gmail.com', 'gcash', '2000', 'confirmed'),
(3, 0, 'Chief', 'Chief@gmail.com', 'gcash', '2000', 'confirmed'),
(4, 0, 'Rogings', 'rogin@gmail.com', 'gcash', '2000', 'confirmed'),
(9, 12, 'vermaiiii', 'dfsdf@gmail.com', 'gcash', '222', 'confirmed'),
(14, 17, 'Rogin De Venecia', 'roginjohndevenecia@gmail.com', 'gcash', '15000', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `payment_submitted`
--

CREATE TABLE `payment_submitted` (
  `id` int(11) NOT NULL,
  `image` blob NOT NULL,
  `paymentType` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_submitted`
--

INSERT INTO `payment_submitted` (`id`, `image`, `paymentType`, `created`) VALUES
(1, 0x494d472d36336236393634323839663065322e31343834313135382e6a706567, 'gcash', '2023-05-01 10:20:02'),
(2, 0x494d472d36336236393636623837616638342e34353732393134392e6a706567, 'visa', '2023-05-01 10:20:43'),
(3, 0x494d472d36336236613363393538316363322e39323737383237372e6a706567, 'gcash', '2023-05-01 11:17:45'),
(4, 0x494d472d36336236633037653530643533352e38373133343731372e706e67, 'visa', '2023-05-01 13:20:14'),
(5, 0x494d472d36336236633065356630663764342e35383030323230312e706e67, 'paypal', '2023-05-01 13:21:57');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `name`) VALUES
(1, 'BSIT 1st Year'),
(2, 'BSIT 2nd Year'),
(3, 'BSIT 3rd Year'),
(4, 'BSIT 4th Year'),
(5, 'BSCS 1st Year'),
(6, 'BSCS 2nd Year'),
(7, 'BSCS 3rd Year'),
(8, 'BSCS 4th Year'),
(9, 'BSHM 1st Year'),
(10, 'BSHM 2nd Year'),
(11, 'BSHM 3rd Year'),
(12, 'BSHM 4th Year'),
(13, 'BSTM 1st Year'),
(14, 'BSTM 2nd Year'),
(15, 'BSTM 3rd Year'),
(16, 'BSTM 4th Year');

-- --------------------------------------------------------

--
-- Table structure for table `subjectlist`
--

CREATE TABLE `subjectlist` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `SubjectTitle` varchar(150) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `LecLabUnits` varchar(20) NOT NULL,
  `TotalUnits` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectlist`
--

INSERT INTO `subjectlist` (`id`, `stud_id`, `SubjectTitle`, `SubjectCode`, `LecLabUnits`, `TotalUnits`) VALUES
(58, 0, '3', '', '', ''),
(59, 0, '2', '', '', ''),
(91, 2, 'Discrete Mathematics Monday 8:00AM-10:00AM', 'BSIT 3108', '3.0/0.0', '3.0'),
(92, 2, 'Database System 2 - Lec Tuesday 8:00AM-10:00AM', 'BSIT 3109', '2.0/0.0', '2.0'),
(93, 2, 'English for the Profession Monday 3:00PM-5:00PM', 'BSIT 3109', '2.0/0.0', '2.0'),
(94, 2, 'System Integration and Architecture - Lab Wednesday 10:00AM-12:00AM', 'BSIT 3110L', '0.0/3.0', '3.0'),
(144, 10, 'Advanced Game Design - Lec TH 12:00PM-2:00PM', 'BSIT 3111', '2.0/0.0', '2.0'),
(145, 10, 'Advanced Game Design - Lab TH 2:00PM-4:00PM', 'BSIT 3111L', '0.0/3.0', '3.0'),
(146, 10, 'Computer Graphics Programming - Lec F 12:00PM-2:00PM', 'BSIT 3112', '2.0/0.0', '2.0'),
(147, 10, 'Computer Graphics Programming - Lab F 12:00PM-2:00PM', 'BSIT 3112L', '0.0/3.0', '3.0'),
(148, 10, 'English for the Profession F 3:00PM-5:00PM', 'ENG 1001', '3.0/0.0', '3.0'),
(150, 14, 'Database System 2 - Lec T 10:00AM-12:00PM', 'BSIT 3109', '2.0/0.0', '2.0'),
(151, 14, 'Database System 2 - Lab T 2:00PM-4:00PM', 'BSIT 3109L', '0.0/3.0', '2.0'),
(152, 14, 'System Integration and Architecture - Lec W 8:00AM-10:00AM', 'BSIT 3110', '2.0/0.0', '2.0'),
(153, 14, 'System Integration and Architecture - Lab W 2:00PM-4:00PM', 'BSIT 3110L', '0.0/3.0', '3.0'),
(154, 14, 'Advanced Game Design - Lec TH 12:00PM-2:00PM', 'BSIT 3111', '2.0/0.0', '2.0'),
(155, 14, 'Advanced Game Design - Lab TH 2:00PM-4:00PM', 'BSIT 3111L', '0.0/3.0', '3.0'),
(156, 14, 'Computer Graphics Programming - Lec F 10:00AM-12:00PM', 'BSIT 3112', '2.0/0.0', '2.0'),
(161, 15, 'Database System 2 - Lab T 2:00PM-4:00PM', 'BSIT 3109L', '0.0/3.0', '2.0'),
(162, 15, 'Advanced Game Design - Lec TH 12:00PM-2:00PM', 'BSIT 3111', '2.0/0.0', '2.0'),
(163, 15, 'Advanced Game Design - Lab TH 2:00PM-4:00PM', 'BSIT 3111L', '0.0/3.0', '3.0'),
(164, 15, 'Computer Graphics Programming - Lab F 2:00PM-4:00PM', 'BSIT 3112L', '0.0/3.0', '3.0'),
(165, 15, 'Database System 2 - Lab T 10:00AM-12:00PM', 'BSIT 3109L', '0.0/3.0', '2.0'),
(166, 15, 'Discrete Mathematics M 12:00PM-2:00PM', 'BSIT 3108', '3.0/0.0', '3.0'),
(169, 15, 'English for the Profession F 3:00PM-5:00PM', 'ENG 1001', '3.0/0.0', '3.0'),
(170, 15, 'The Perpetualite: A Filipino Christian Leader F 6:00PM-7:00PM', 'FCL 3106', '2.0/0.0', '2.0'),
(171, 14, 'Discrete Mathematics M 12:00PM-2:00PM', 'BSIT 3108', '3.0/0.0', '3.0'),
(172, 14, 'Database System 2 - Lec T 12:00PM-2:00PM', 'BSIT 3109', '2.0/0.0', '2.0'),
(173, 1, 'Introduction to Computing - Lec BSIT M 12:00PM-2:00PM', 'BSIT 1101', '2.0/0.0', '2.0'),
(174, 1, 'Introduction to Computing - Lab BSIT T 12:00PM-2:00PM', 'BSIT 1101L', '0.0/3.0', '3.0'),
(175, 1, 'Fundamentals of Programming - Lab BSIT TH 12:00PM-2:00PM', 'BSIT 1102L', '0.0/3.0', '3.0'),
(176, 1, 'Information Assurance and Security F 12:00PM-2:00PM', 'BSIT 1111', '3.0/0.0', '3.0'),
(177, 1, 'Science, Technology, and Society 1 M 6:00PM-8:00PM', 'STS1 8000', '3.0/0.0', '3.0'),
(178, 1, 'Entrepreneurial Mind 1 T 6:00PM-8:00PM', 'EM1 2000', '3.0/0.0', '3.0'),
(179, 1, 'National Service Training Program 1 BSIT SAT 11:00AM-2:00PM', 'NSTP1 1101', '3.0/0.0', '3.0'),
(180, 1, 'National Service Training Program 1 BSIT SAT 11:00AM-2:00PM', 'NSTP1 1101', '3.0/0.0', '3.0'),
(181, 1, 'Physical Activities Toward Health and Fitness 1 BSIT W 6:00PM-8:00PM', 'PE1 1100', '2.0/0.0', '2.0'),
(182, 17, 'Discrete Mathematics M 10:00AM-12:00PM', 'BSIT 3108', '3.0/0.0', '3.0'),
(183, 17, 'Database System 2 - Lec T 12:00PM-2:00PM', 'BSIT 3109', '2.0/0.0', '2.0'),
(184, 17, 'Database System 2 - Lab T 10:00AM-12:00PM', 'BSIT 3109L', '0.0/3.0', '2.0'),
(185, 17, 'System Integration and Architecture - Lec W 12:00PM-2:00PM', 'BSIT 3110', '2.0/0.0', '2.0'),
(186, 17, 'System Integration and Architecture - Lab W 10:00AM-12:00PM', 'BSIT 3110L', '0.0/3.0', '3.0'),
(187, 17, 'Advanced Game Design - Lec TH 12:00PM-2:00PM', 'BSIT 3111', '2.0/0.0', '2.0'),
(188, 17, 'Advanced Game Design - Lab TH 2:00PM-4:00PM', 'BSIT 3111L', '0.0/3.0', '3.0'),
(189, 17, 'Computer Graphics Programming - Lec F 12:00PM-2:00PM', 'BSIT 3112', '2.0/0.0', '2.0'),
(190, 17, 'Computer Graphics Programming - Lab F 2:00PM-4:00PM', 'BSIT 3112L', '0.0/3.0', '3.0'),
(192, 18, 'Discrete Mathematics M 12:00PM-2:00PM', 'BSIT 3108', '3.0/0.0', '3.0'),
(193, 18, 'Database System 2 - Lec T 12:00PM-2:00PM', 'BSIT 3109', '2.0/0.0', '2.0'),
(194, 18, 'Database System 2 - Lab T 2:00PM-4:00PM', 'BSIT 3109L', '0.0/3.0', '2.0'),
(195, 19, 'Introduction to Computing - Lec BSIT M 10:00AM-12:00AM', 'BSIT 1101', '2.0/0.0', '2.0');

-- --------------------------------------------------------

--
-- Table structure for table `subjectprice`
--

CREATE TABLE `subjectprice` (
  `id` int(11) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `SubjectAmount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectprice`
--

INSERT INTO `subjectprice` (`id`, `SubjectCode`, `SubjectAmount`) VALUES
(1, 'BSIT 3108', 3000),
(2, 'BSIT 3109', 3000),
(3, 'BSIT 3109L', 3000),
(4, 'BSIT 3110', 3000),
(5, 'BSIT 3110L', 3000),
(6, 'BSIT 3111', 3000),
(7, 'BSIT 3111L', 3000),
(8, 'BSIT 3112', 3000),
(9, 'BSIT 3112L', 3000),
(10, 'ENG 1001', 3000),
(11, 'FCL 3106', 3000),
(12, 'BSIT 1101', 3000),
(13, 'BSIT 1101L', 3000),
(14, 'BSIT 1102', 3000),
(15, 'BSIT 1102L', 3000),
(16, 'BSIT 1111', 3000),
(17, 'STS1 8000', 3000),
(18, 'EM1 2000', 3000),
(19, 'NSTP1 1101', 3000),
(20, 'PE1 1100', 3000),
(21, 'BSCS 1101', 3000),
(22, 'BSCS 1101L', 3000),
(23, 'BSCS 1111', 3000),
(24, 'BSCS 1102', 3000),
(25, 'BSCS 1102L', 3000),
(26, 'FCL2 1101', 3000),
(27, 'STS2 8000', 3000),
(28, 'EM2 2000', 3000),
(29, 'NSTP2 1101', 3000),
(30, 'PE2 1100', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `SubjectTitle` varchar(100) NOT NULL,
  `SubjectCode` varchar(50) NOT NULL,
  `LecLabUnits` varchar(10) NOT NULL,
  `TotalUnits` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sub_id`, `SubjectTitle`, `SubjectCode`, `LecLabUnits`, `TotalUnits`) VALUES
(1, 1, 'Introduction to Computing - Lec BSIT', 'BSIT 1101', '2.0/0.0', '2.0'),
(2, 1, 'Introduction to Computing - Lab BSIT', 'BSIT 1101L', '0.0/3.0', '3.0'),
(3, 1, 'Fundamentals of Programming - Lec BSIT', 'BSIT 1102', '2.0/0.0', '2.0'),
(4, 1, 'Fundamentals of Programming - Lab BSIT', 'BSIT 1102L', '0.0/3.0', '3.0'),
(5, 1, 'Information Assurance and Security', 'BSIT 1111', '3.0/0.0', '3.0'),
(8, 1, 'Science, Technology, and Society 1', 'STS1 8000', '3.0/0.0', '3.0'),
(9, 1, 'Entrepreneurial Mind 1', 'EM1 2000', '3.0/0.0', '3.0'),
(10, 1, 'National Service Training Program 1 BSIT', 'NSTP1 1101', '3.0/0.0', '3.0'),
(11, 1, 'Physical Activities Toward Health and Fitness 1 BSIT', 'PE1 1100', '2.0/0.0', '2.0'),
(12, 5, 'Discrete Structure 1', 'BSCS 1101', '3.0/0.0', '3.0'),
(13, 5, 'Introduction to Computing - Lec BSCS', 'BSCS 1111', '2.0/0.0', '2.0'),
(14, 5, 'Introduction to Computing - Lab BSCS', 'BSCS 1101L', '0.0/3.0', '3.0'),
(15, 5, 'Fundamentals of Programming - Lec BSCS', 'BSCS 1102', '2.0/0.0', '2.0'),
(16, 5, 'Fundamentals of Programming - Lab BSCS', 'BSCS 1102L', '0.0/3.0', '3.0'),
(17, 5, 'The Perpetualite: Identity and Dignity', 'FCL2 1101', '2.0/0.0', '2.0'),
(19, 5, 'Science, Technology, and Society2', 'STS2 8000', '3.0/0.0', '3.0'),
(20, 5, 'Entrepreneurial Mind 2', 'EM2 2000', '3.0/0.0', '3.0'),
(21, 5, 'National Service Training Program 1 BSCS', 'NSTP2 1101', '3.0/0.0', '3.0'),
(22, 5, 'Physical Activities Toward Health and Fitness 1 BSCS', 'PE2 1100', '2.0/0.0', '2.0'),
(23, 9, 'Organization and Management', 'BME 1000', '3.0/0.0', '3.0'),
(24, 9, 'Risk Management as Applied to Safety, Security and Sanitation', 'BSHM 1101', '3.0/0.0', '3.0'),
(25, 9, 'Macro Perspective of Tourism and Hospitality', 'BSHM 1102', '3.0/0.0', '3.0'),
(26, 9, 'The Perpetualite: Identity and Dignity', 'FCL 1101', '2.0/0.0', '2.0'),
(28, 9, 'Science, Technology, and Society3', 'STS3 8000', '3.0/0.0', '3.0'),
(29, 9, 'Entrepreneurial Mind 3', 'EM3 2000', '3.0/0.0', '3.0'),
(30, 9, 'National Service Training Program 1 BSHM', 'NSTP3 1101', '3.0/0.0', '3.0'),
(31, 9, 'Physical Activities Toward Health and Fitness 1 BSHM', 'PE3 1100', '2.0/0.0', '2.0'),
(32, 13, 'Organization and Management', 'BME 1000', '3.0/0.0', '3.0'),
(33, 13, 'Philippine Tourism, Geography and Culture', 'BSTM 1101', '3.0/0.0', '3.0'),
(34, 13, 'Macro Perspective of Tourism and Hospitality', 'BSTM 1102', '3.0/0.0', '3.0'),
(35, 13, 'The Perpetualite: Identity and Dignity', 'FCL 1101', '2.0/0.0', '2.0'),
(37, 13, 'Science, Technology, and Society4', 'STS4 8000', '3.0/0.0', '3.0'),
(38, 13, 'Entrepreneurial Mind 4', 'EM4 2000', '3.0/0.0', '3.0'),
(39, 13, 'National Service Training Program 1 BSTM', 'NSTP4 1101', '3.0/0.0', '3.0'),
(40, 13, 'Physical Activities Toward Health and Fitness 1 BSTM', 'PE4 1100', '2.0/0.0', '2.0'),
(41, 6, 'Application Development and Emerging Technologies', 'BSCS 2103', '2.0/0.0', '2.0'),
(42, 6, 'Data Structures - Lec', 'BSCSIT 2103', '2.0/0.0', '2.0'),
(43, 6, 'Data Structures - Lab', 'BSCSIT 2103L', '0.0/3.0', '3.0'),
(44, 6, 'Networking and Communication 1 - Lec', 'BSCSIT 2104', '2.0/0.0', '2.0'),
(45, 6, 'Networking and Communication 1 - Lab', 'BSCSIT 2104L', '0.0/3.0', '3.0'),
(46, 6, 'Social and Professional Issues', 'BSCSIT 2105', '3.0/0.0', '3.0'),
(47, 6, 'The Perpetualite: Called to Perfection', 'FCL 2103', '2.0/0.0', '2.0'),
(48, 6, 'Arts Appreciation', 'GEC 3000', '3.0/0.0', '3.0'),
(49, 6, 'Readings in Philippine History', 'GEC 7000', '3.0/0.0', '3.0'),
(50, 6, 'World Literature', 'HUM 3000', '3.0/0.0', '3.0'),
(51, 6, 'Physical Activities Toward Health and Fitness 3', 'HUM 3000', '2.0/0.0', '2.0'),
(52, 6, 'The Life and Works of Rizal', 'RZL 1000', '3.0/0.0', '3.0'),
(53, 10, 'Fundamentals of Accounting/Business Management', 'BME 3000', '3.0/0.0', '3.0'),
(54, 10, 'Bread and Pastry - Lec', 'BSHM 2107', '1.0/0.0', '1.0'),
(55, 10, 'Bread and Pastry - Lab', 'BSHM 2107L', '0.0/6.0', '6.0'),
(56, 10, 'Bar and Beverage Management - Lec', 'BSHM 2108', '2.0/0.0', '2.0'),
(57, 10, 'The Perpetualite: Called to Perfection', 'FCL 2103', '2.0/0.0', '2.0'),
(58, 10, 'Arts Appreciation', 'GEC 3000', '3.0/0.0', '3.0'),
(59, 10, 'Readings in Philippine History', 'GEC 7000', '3.0/0.0', '3.0'),
(60, 10, 'World Literature', 'HUM 3000', '3.0/0.0', '3.0'),
(61, 10, 'Physical Activities Toward Health and Fitness 3', 'PE 3300', '2.0/0.0', '2.0'),
(62, 10, 'The Life and Works of Rizal', 'RZL 1000', '3.0/0.0', '3.0'),
(63, 2, 'Data Structures - Lec', 'BSCSIT 2103', '2.0/0.0', '2.0'),
(64, 2, 'Data Structures - Lab', 'BSCSIT 2103L', '0.0/3.0', '0.0'),
(65, 2, 'Networking and Communication 1 - Lec', 'BSCSIT 2104', '2.0/0.0', '2.0'),
(66, 2, 'Networking and Communication 1 - Lab', 'BSCSIT 2104L', '0.0/3.0', '3.0'),
(67, 2, 'Social and Professional Issues', 'BSCSIT 2105', '3.0/0.0', '3.0'),
(68, 2, 'Graphics and Visual Computing - Lec', 'BSIT 2104', '2.0/0.0', '2.0'),
(69, 2, 'Graphics and Visual Computing - Lab', 'BSIT 2104L', '0.0/3.0', '3.0'),
(70, 2, 'The Perpetualite: Called to Perfection', 'FCL 2103', '2.0/0.0', '2.0'),
(71, 2, 'Arts Appreciation', 'GEC 3000', '3.0/0.0', '3.0'),
(72, 2, 'Readings in Philippine History', 'GEC 7000', '3.0/0.0', '3.0'),
(73, 2, 'World Literature', 'HUM 3000', '3.0/0.0', '3.0'),
(74, 2, 'Physical Activities Toward Health and Fitness 3', 'PE 3300', '2.0/0.0', '2.0'),
(75, 2, 'The Life and Works of Rizal', 'RZL 1000', '3.0/0.0', '3.0'),
(76, 14, 'Tour and Travel Management - Lec', 'BSTM 2106', '2.0/0.0', '2.0'),
(77, 14, 'Tour and Travel Management - Lab', 'BSTM 2106L', '0.0/3.0', '3.0'),
(78, 14, 'Applied Business Tools and Technologies in Tourism - Lec', 'BSTM 2107', '2.0/0.0', '2.0'),
(79, 14, 'Applied Business Tools and Technologies in Tourism - Lab', 'BSTM 2107L', '0.0/3.0', '3.0'),
(80, 14, 'Sustainable Tourism', 'BSTM 2108', '3.0/0.0', '3.0'),
(81, 14, 'The Perpetualite: Called to Perfection', 'FCL 2103', '2.0/0.0', '2.0'),
(82, 14, 'Arts Appreciation', 'GEC 3000', '3.0/0.0', '3.0'),
(83, 14, 'Readings in Philippine History', 'GEC 7000', '3.0/0.0', '3.0'),
(84, 14, 'World Literature', 'HUM 3000', '3.0/0.0', '3.0'),
(85, 14, 'Physical Activities Toward Health and Fitness 3', 'PE 3300', '2.0/0.0', '2.0'),
(86, 14, 'The Life and Works of Rizal', 'RZL 1000', '3.0/0.0', '3.0'),
(87, 7, 'Automata Theory and Formal Languages', 'BSCS 3108', '3.0/0.0', '3.0'),
(88, 7, 'Computer Organization with Assembly Language - Lec', 'BSCS 3109', '2.0/0.0', '2.0'),
(89, 7, 'Computer Organization with Assembly Language - Lab', 'BSCS 3109L', '0.0/3.0', '3.0'),
(90, 7, 'Information Assurance and Security - Lec', 'BSCS 3110', '2.0/0.0', '2.0'),
(91, 7, 'Information Assurance and Security - Lab', 'BSCS 3110L', '0.0/3.0', '3.0'),
(92, 7, 'Data Mining - Lec', 'BSCSIT 3108', '2.0/0.0', '2.0'),
(93, 7, 'Data Mining - Lab', 'BSCSIT 3108L', '0.0/3.0', '3.0'),
(94, 7, 'Artificial Intelligence', 'BSCSIT 3109', '3.0/0.0', '3.0'),
(97, 11, 'Business Marketing', 'BME 2000', '3.0/0.0', '3.0'),
(98, 11, 'Gastronomy (Food and Culture) - Lec', 'BSHM 3113', '2.0/0.0', '2.0'),
(99, 11, 'Gastronomy (Food and Culture) - Lab', 'BSHM 3113L', '0.0/3.0', '3.0'),
(100, 11, 'Supply Chain Management in the Hospitality Industry', 'BSHM 3114', '3.0/0.0', '3.0'),
(101, 11, 'Fundamentals of Research (Intro to Hospitality Research)', 'BSHM 3115', '3.0/0.0', '3.0'),
(102, 11, 'Entrepreneurship in Tourism and Hospitality', 'BSHM 3116', '3.0/0.0', '3.0'),
(103, 11, 'Foreign Language 1', 'BSHM 3117', '3.0/0.0', '3.0'),
(106, 3, 'Discrete Mathematics', 'BSIT 3108', '3.0/0.0', '3.0'),
(107, 3, 'Database System 2 - Lec', 'BSIT 3109', '2.0/0.0', '2.0'),
(108, 3, 'Database System 2 - Lab', 'BSIT 3109L', '0.0/3.0', '2.0'),
(109, 3, 'System Integration and Architecture - Lec', 'BSIT 3110', '2.0/0.0', '2.0'),
(110, 3, 'System Integration and Architecture - Lab', 'BSIT 3110L', '0.0/3.0', '3.0'),
(111, 3, 'Advanced Game Design - Lec', 'BSIT 3111', '2.0/0.0', '2.0'),
(112, 3, 'Advanced Game Design - Lab', 'BSIT 3111L', '0.0/3.0', '3.0'),
(113, 3, 'Computer Graphics Programming - Lec', 'BSIT 3112', '2.0/0.0', '2.0'),
(114, 3, 'Computer Graphics Programming - Lab', 'BSIT 3112L', '0.0/3.0', '3.0'),
(115, 3, 'English for the Profession', 'ENG 1001', '3.0/0.0', '3.0'),
(116, 3, 'The Perpetualite: A Filipino Christian Leader', 'FCL 3106', '2.0/0.0', '2.0'),
(117, 15, 'Applied Economics', 'BME 4000', '3.0/0.0', '3.0'),
(118, 15, 'Operations Management', 'BME 5000', '3.0/0.0', '3.0'),
(119, 15, 'Fundamentals of Research (Introduction to Tourism Research)', 'BSTM 3114', '3.0/0.0', '3.0'),
(120, 15, 'Transportation Management', 'BSTM 3115', '3.0/0.0', '3.0'),
(121, 15, 'Heritage Tourism', 'BSTM 3116', '3.0/0.0', '3.0'),
(122, 15, 'Philippine Gastronomical Tourism - Lec', 'BSTM 3117', '2.0/0.0', '2.0'),
(123, 15, 'Philippine Gastronomical Tourism - Lab', 'BSTM 3117L', '0.0/3.0', '3.0'),
(126, 15, 'Foreign Language 1', 'HTM 3113', '3.0/0.0', '3.0'),
(127, 8, 'Thesis 2', 'BSCS 4115', '3.0/0.0', '3.0'),
(128, 8, 'Data Warehousing - Lec', 'BSCS 4116', '2.0/0.0', '2.0'),
(129, 8, 'Data Warehousing - Lab', 'BSCS 4116L', '0.0/3.0', '3.0'),
(130, 8, 'System Fundamentals - Lec', 'BSCSIT 4112', '2.0/0.0', '2.0'),
(131, 8, 'System Fundamentals - Lab', 'BSCSIT 4112L', '0.0/3.0', '3.0'),
(132, 8, 'The Perpetualite: A Character and Nation Builder', 'FCL 4107', '2.0/0.0', '2.0'),
(133, 12, 'Operations Management', 'BME 5000', '3.0/0.0', '3.0'),
(134, 12, 'Strategic Management and Total Quality Management', 'BME 7000', '3.0/0.0', '3.0'),
(135, 12, 'Legal Aspects in Tourism and Hospitality', 'BSHM 4123', '3.0/0.0', '3.0'),
(136, 12, 'Professional Development and Applied Ethics', 'BSHM 4124', '3.0/0.0', '3.0'),
(137, 12, 'Multicultural Diversity in the Workplace for the Tourism Professional', 'BSHM 4125', '3.0/0.0', '3.0'),
(138, 12, 'Introduction to Meetings, Incentives, Conference and Events Management - Lec', 'BSHM 4126', '2.0/0.0', '2.0'),
(139, 12, 'Introduction to Meetings, Incentives, Conference and Events Management - Lab', 'BSHM 4126L', '0.0/3.0', '3.0'),
(140, 12, 'The Perpetualite: A Character and Nation Builder', 'FCL 4107', '2.0/0.0', '2.0'),
(141, 4, 'Capstone Project 1', 'BSIT 4117', '3.0/0.0', '3.0'),
(142, 4, 'Practicum', 'BSIT 4118', '6.0/0.0', '6.0'),
(143, 4, 'System Fundamentals - Lec', 'BSIT 4119', '2.0/0.0', '2.0'),
(144, 4, 'System Fundamentals - Lab', 'BSIT 4119L', '0.0/3.0', '3.0'),
(145, 4, 'The Perpetualite: A Character and Nation Builder', 'FCL 4107', '2.0/0.0', '2.0'),
(146, 16, 'Legal Aspects of Tourism and Hospitality', 'BSTM 4123', '3.0/0.0', '3.0'),
(147, 16, 'Professional Development and Applied Ethics', 'BSTM 4124', '3.0/0.0', '3.0'),
(148, 16, 'Introduction to Meetings, Incentives, Conference and Events Management - Lec', 'BSTM 4125', '2.0/0.0', '2.0'),
(149, 16, 'Introduction to Meetings, Incentives, Conference and Events Management - Lab', 'BSTM 4125L', '0.0/3.0', '3.0'),
(150, 16, 'Recreation and Wellness Tourism', 'BSTM 4126', '3.0/0.0', '3.0'),
(151, 16, 'The Perpetualite: A Character and Nation Builder', 'FCL 4107', '2.0/0.0', '2.0');

-- --------------------------------------------------------

--
-- Table structure for table `subjectschedules`
--

CREATE TABLE `subjectschedules` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `SubjectCode` varchar(150) NOT NULL,
  `Schedule` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjectschedules`
--

INSERT INTO `subjectschedules` (`id`, `sub_id`, `SubjectCode`, `Schedule`) VALUES
(1, 3, 'BSIT 3108', 'M 8:00AM-10:00AM'),
(2, 3, 'BSIT 3108', 'M 10:00AM-12:00PM'),
(3, 3, 'BSIT 3108', 'M 12:00PM-2:00PM'),
(4, 3, 'BSIT 3109', 'T 8:00AM-10:00AM'),
(5, 3, 'BSIT 3109', 'T 10:00AM-12:00PM'),
(6, 3, 'BSIT 3109', 'T 12:00PM-2:00PM'),
(7, 3, 'BSIT 3109L', 'T 10:00AM-12:00PM'),
(8, 3, 'BSIT 3109L', 'T 12:00PM-2:00PM'),
(9, 3, 'BSIT 3109L', 'T 2:00PM-4:00PM'),
(10, 3, 'BSIT 3110', 'W 8:00AM-10:00AM'),
(11, 3, 'BSIT 3110', 'W 10:00AM-12:00PM'),
(12, 3, 'BSIT 3110', 'W 12:00PM-2:00PM'),
(13, 3, 'BSIT 3110L', 'W 10:00AM-12:00PM'),
(14, 3, 'BSIT 3110L', 'W 12:00PM-2:00PM'),
(15, 3, 'BSIT 3110L', 'W 2:00PM-4:00PM'),
(16, 3, 'BSIT 3111', 'TH 8:00AM-10:00AM'),
(17, 3, 'BSIT 3111', 'TH 10:00AM-12:00PM'),
(18, 3, 'BSIT 3111', 'TH 12:00PM-2:00PM'),
(19, 3, 'BSIT 3111L', 'TH 10:00AM-12:00PM'),
(20, 3, 'BSIT 3111L', 'TH 12:00PM-2:00PM'),
(21, 3, 'BSIT 3111L', 'TH 2:00PM-4:00PM'),
(22, 3, 'BSIT 3112', 'F 8:00AM-10:00AM'),
(23, 3, 'BSIT 3112', 'F 10:00AM-12:00PM'),
(24, 3, 'BSIT 3112', 'F 12:00PM-2:00PM'),
(25, 3, 'BSIT 3112L', 'F 10:00AM-12:00PM'),
(26, 3, 'BSIT 3112L', 'F 12:00PM-2:00PM'),
(27, 3, 'BSIT 3112L', 'F 2:00PM-4:00PM'),
(28, 3, 'ENG 1001', 'M 3:00PM-5:00PM'),
(29, 3, 'ENG 1001', 'T 3:00PM-5:00PM'),
(30, 3, 'ENG 1001', 'F 3:00PM-5:00PM'),
(31, 3, 'FCL 3106', 'W 6:00PM-7:00PM'),
(32, 3, 'FCL 3106', 'TH 6:00PM-7:00PM'),
(33, 3, 'FCL 3106', 'F 6:00PM-7:00PM'),
(34, 1, 'BSIT 1101', 'M 8:00AM-10:00AM'),
(35, 1, 'BSIT 1101', 'M 10:00AM-12:00AM'),
(36, 1, 'BSIT 1101', 'M 12:00PM-2:00PM'),
(37, 1, 'BSIT 1101L', 'T 10:00AM-12:00AM'),
(38, 1, 'BSIT 1101L', 'T 12:00PM-2:00PM'),
(39, 1, 'BSIT 1101L', 'T 2:00PM-4:00PM'),
(40, 1, 'BSIT 1102', 'W 8:00AM-10:00AM'),
(41, 1, 'BSIT 1102', 'W 10:00AM-12:00PM'),
(42, 1, 'BSIT 1102', 'W 12:00PM-2:00PM'),
(43, 1, 'BSIT 1102L', 'TH 10:00AM-12:00PM'),
(44, 1, 'BSIT 1102L', 'TH 12:00PM-2:00PM'),
(45, 1, 'BSIT 1102L', 'TH 2:00PM-4:00PM'),
(46, 1, 'BSIT 1111', 'F 8:00AM-10:00AM'),
(47, 1, 'BSIT 1111', 'F 10:00AM-12:00AM'),
(48, 1, 'BSIT 1111', 'F 12:00PM-2:00PM'),
(49, 1, 'STS1 8000', 'M 2:00PM-4:00PM'),
(50, 1, 'STS1 8000', 'M 4:00PM-6:00PM'),
(51, 1, 'STS1 8000', 'M 6:00PM-8:00PM'),
(52, 1, 'EM1 2000', 'T 2:00PM-4:00PM'),
(53, 1, 'EM1 2000', 'T 4:00PM-6:00PM'),
(54, 1, 'EM1 2000', 'T 6:00PM-8:00PM'),
(55, 1, 'NSTP1 1101', 'SAT 8:00AM-11:00AM'),
(56, 1, 'NSTP1 1101', 'SAT 11:00AM-2:00PM'),
(57, 1, 'NSTP1 1101', 'SAT 2:00PM-5:00PM'),
(58, 1, 'PE1 1100', 'W 2:00PM-4:00PM'),
(59, 1, 'PE1 1100', 'W 4:00PM-6:00PM'),
(60, 1, 'PE1 1100', 'W 6:00PM-8:00PM'),
(61, 5, 'BSCS 1101', 'M 8:00AM-10:00AM'),
(62, 5, 'BSCS 1101', 'M 10:00AM-12:00PM'),
(63, 5, 'BSCS 1101', 'M 12:00PM-2:00PM'),
(64, 5, 'BSCS 1111', 'T 8:00AM-10:00AM'),
(65, 5, 'BSCS 1111', 'T 10:00AM-12:00PM'),
(66, 5, 'BSCS 1111', 'T 12:00PM-2:00PM'),
(67, 5, 'BSCS 1101L', 'T 10:00AM-12:00PM'),
(68, 5, 'BSCS 1101L', 'T 12:00PM-2:00PM'),
(69, 5, 'BSCS 1101L', 'T 2:00PM-4:00PM'),
(70, 5, 'BSCS 1102', 'W 8:00AM-10:00AM'),
(71, 5, 'BSCS 1102', 'W 10:00AM-12:00PM'),
(72, 5, 'BSCS 1102', 'W 12:00PM-2:00PM'),
(73, 5, 'BSCS 1102L', 'W 10:00AM-12:00PM'),
(74, 5, 'BSCS 1102L', 'W 12:00PM-2:00PM'),
(75, 5, 'BSCS 1102L', 'W 2:00PM-4:00PM'),
(76, 5, 'FCL2 1101', 'TH 8:00AM-10:00AM'),
(77, 5, 'FCL2 1101', 'TH 10:00AM-12:00PM'),
(78, 5, 'FCL2 1101', 'TH 12:00PM-2:00PM'),
(79, 5, 'STS2 8000', 'TH 2:00PM-4:00PM'),
(80, 5, 'STS2 8000', 'TH 4:00PM-6:00PM'),
(81, 5, 'STS2 8000', 'TH 6:00PM-8:00PM'),
(82, 5, 'EM2 2000', 'F 8:00AM-10:00AM'),
(83, 5, 'EM2 2000', 'F 10:00AM-12:00AM'),
(84, 5, 'EM2 2000', 'F 12:00PM-2:00PM'),
(85, 5, 'NSTP2 1101', 'SAT 8:00AM-11:00AM'),
(86, 5, 'NSTP2 1101', 'SAT 11:00AM-2:00PM'),
(87, 5, 'NSTP2 1101', 'SAT 2:00PM-5:00PM'),
(88, 5, 'PE2 1100', 'M 2:00PM-4:00PM'),
(89, 5, 'PE2 1100', 'M 4:00PM-6:00PM'),
(90, 5, 'PE2 1100', 'M 6:00PM-8:00PM');

-- --------------------------------------------------------

--
-- Table structure for table `temp_images`
--

CREATE TABLE `temp_images` (
  `id` int(11) NOT NULL,
  `stud_id` int(11) NOT NULL,
  `images` longblob NOT NULL,
  `DocumentName` varchar(50) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_images`
--

INSERT INTO `temp_images` (`id`, `stud_id`, `images`, `DocumentName`, `created`) VALUES
(140, 11, 0x494d472d36333937343363653638633832392e36323633313038302e6a7067, 'Form 138', '2022-12-12 16:07:58'),
(153, 14, 0x494d472d36336237313339626566313931322e38333032323836382e706e67, 'Form 138', '2023-05-01 19:14:51'),
(155, 8, 0x494d472d36336237316636313839653833352e31303035353932372e6a7067, 'Birth Certificate', '2023-05-01 20:05:05'),
(156, 8, 0x494d472d36336237316636343365663761302e35363438323733302e706e67, 'Form 138', '2023-05-01 20:05:08'),
(160, 17, 0x494d472d36336237613464393565326436302e35323836363838322e706e67, 'Good Moral', '2023-06-01 05:34:33'),
(161, 17, 0x494d472d36336237613464396430653231382e30353831333330382e706e67, 'Good Moral', '2023-06-01 05:34:33'),
(162, 17, 0x494d472d36336237613738633563333730382e35383038373835312e6a7067, 'Birth Certificate', '2023-06-01 05:46:04');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `stud_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`stud_id`, `email`, `password_hash`, `type`) VALUES
(1, 'try1@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(2, 'try2@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(3, 'try3@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(4, 'try4@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(5, 'try7@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(6, 'try8@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(7, 'ajiray@gmail.com', 'c100b0bd7ee8f6aa99c5225c7365ca9c', ''),
(8, 'vermai123@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', ''),
(9, 'Vermai1234@gmail.com', '8ab7565c52abbc5ccb01902d0a942357', ''),
(10, 'vermai12@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', ''),
(11, 'test@gmail.com', 'de88e3e4ab202d87754078cbb2df6063', ''),
(12, 'vermai1@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', ''),
(13, 'iver@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', 'student'),
(14, 'vermai12345@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', 'student'),
(15, 'try123@gmail.com', 'c791cf71274e34ea3a40dbeb8bfe8e11', 'student'),
(16, 'Sample1@yahoo.com', 'edcc21dc21a00842a4c3509b844ddeb3', 'student'),
(17, 'joserizal@yahoo.com', '4bdec768f727fb72f1445f6bccbbdaba', 'student'),
(18, 'try@gmail.com', 'cd508ceed31e237a1f124c16594eec78', 'student'),
(19, 'qwe@gmail.com', 'bd4f881f9422e07ed3ee9da1284e4ef3', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `applicationform`
--
ALTER TABLE `applicationform`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appuserconn` (`stud_id`);

--
-- Indexes for table `enrolledstudentonthesubject`
--
ALTER TABLE `enrolledstudentonthesubject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gcash`
--
ALTER TABLE `gcash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paymentconfirmed`
--
ALTER TABLE `paymentconfirmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_submitted`
--
ALTER TABLE `payment_submitted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectlist`
--
ALTER TABLE `subjectlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectprice`
--
ALTER TABLE `subjectprice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectschedules`
--
ALTER TABLE `subjectschedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_images`
--
ALTER TABLE `temp_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `connecttouser` (`stud_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`stud_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `applicationform`
--
ALTER TABLE `applicationform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `enrolledstudentonthesubject`
--
ALTER TABLE `enrolledstudentonthesubject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gcash`
--
ALTER TABLE `gcash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `paymentconfirmed`
--
ALTER TABLE `paymentconfirmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment_submitted`
--
ALTER TABLE `payment_submitted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `subjectlist`
--
ALTER TABLE `subjectlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `subjectprice`
--
ALTER TABLE `subjectprice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `subjectschedules`
--
ALTER TABLE `subjectschedules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `temp_images`
--
ALTER TABLE `temp_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applicationform`
--
ALTER TABLE `applicationform`
  ADD CONSTRAINT `appuserconn` FOREIGN KEY (`stud_id`) REFERENCES `user` (`stud_id`);

--
-- Constraints for table `temp_images`
--
ALTER TABLE `temp_images`
  ADD CONSTRAINT `connecttouser` FOREIGN KEY (`stud_id`) REFERENCES `user` (`stud_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
