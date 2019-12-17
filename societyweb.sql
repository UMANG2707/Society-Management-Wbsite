-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 11:36 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `societyweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_payment_type`
--

CREATE TABLE `add_payment_type` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Pay_Id` varchar(255) NOT NULL,
  `Pay_For` enum('Maintenance','Events','Renovation','Extra Nedd') NOT NULL DEFAULT 'Maintenance',
  `Month_Year` varchar(255) NOT NULL,
  `Details` text NOT NULL,
  `Rupees` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_payment_type`
--

INSERT INTO `add_payment_type` (`Id`, `Society_Code`, `Pay_Id`, `Pay_For`, `Month_Year`, `Details`, `Rupees`) VALUES
(3, 330, '2019-06-Maintenance', 'Maintenance', '2019-06', 'ddd', 222),
(4, 330, '2019-06-Extra Need', '', '2019-06', 'ddedefrg 4 f 4g', 2344);

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Bill_Type` varchar(255) NOT NULL,
  `Bill` longblob NOT NULL,
  `Month_Year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`Id`, `Society_Code`, `Bill_Type`, `Bill`, `Month_Year`) VALUES
(1, 330, 'xasas', 0x323031322d323031332e706466, '7777-11');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(3) NOT NULL,
  `Building_No` int(255) NOT NULL,
  `No_Floors` int(255) NOT NULL,
  `No_Blocks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`Id`, `Society_Code`, `Building_No`, `No_Floors`, `No_Blocks`) VALUES
(13, 330, 0, 4, 3),
(14, 809, 0, 2, 2),
(15, 809, 1, 2, 2),
(16, 809, 2, 2, 2),
(17, 809, 3, 2, 2),
(18, 181, 0, 2, 2),
(19, 181, 1, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `Comment_Time` time NOT NULL,
  `Comment_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Id`, `Name`, `Comment`, `Comment_Time`, `Comment_Date`) VALUES
(1, 'Umang Unadakat', 'good website..... !!!\r\n', '10:36:00', '2019-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `committee_members`
--

CREATE TABLE `committee_members` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `User_Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Profile_Pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `User_Id` varchar(255) NOT NULL,
  `Comp_Sub` varchar(30) NOT NULL,
  `Complainer_Block_No` int(10) NOT NULL,
  `Complaint` varchar(255) NOT NULL,
  `Comp_Date` date NOT NULL,
  `Comp_Time` time(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`Id`, `Society_Code`, `User_Id`, `Comp_Sub`, `Complainer_Block_No`, `Complaint`, `Comp_Date`, `Comp_Time`) VALUES
(1, 330, '1-101', 'ascas', 101, 'cascsa', '2019-06-12', '03:05:00.00'),
(2, 330, '1-101', 'cwecwwwdxaz', 101, 'ewce', '2019-06-12', '03:26:00.00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_with_us`
--

CREATE TABLE `contact_with_us` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `E_mail` varchar(30) NOT NULL,
  `Number` bigint(255) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id` int(255) NOT NULL,
  `Event_Id` varchar(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Event_Name` varchar(255) NOT NULL,
  `Event_Year` year(4) NOT NULL,
  `Event_Date` date NOT NULL,
  `Ttl_Img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Id`, `Event_Id`, `Society_Code`, `Event_Name`, `Event_Year`, `Event_Date`, `Ttl_Img`) VALUES
(5, '2020-Diwali', 330, 'Diwali', 2020, '2019-05-29', 0x73686f7066726f6e742d322e6a7067),
(6, '2020-holi', 330, 'holi', 2020, '2019-05-11', 0x61706172746d656e74732d312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `User_Id` varchar(255) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Profile_Pic` longblob NOT NULL,
  `Contact_No` bigint(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Relation` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`Id`, `Society_Code`, `User_Id`, `Name`, `Profile_Pic`, `Contact_No`, `Birth_Date`, `Relation`) VALUES
(1, 330, '1-101', 'Umang Unadakat', 0x7369676e2e6a7067, 12, '0000-00-00', 'cc4t');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `Id` int(255) NOT NULL,
  `Event_Id` varchar(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Event_Images` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`Id`, `Event_Id`, `Society_Code`, `Event_Images`) VALUES
(33, '2020-Diwali', 330, 0x666f726569676e2d322e6a7067),
(34, '2020-Diwali', 330, 0x736964652d62616e6e65722d73616c652e706e67),
(35, '2020-Diwali', 330, 0x736964656261722d62616e6e65722e6a7067),
(36, '2020-holi', 330, 0x61706172746d656e74732d322e6a7067),
(37, '2020-holi', 330, 0x61706172746d656e74732d332e6a7067),
(38, '2020-holi', 330, 0x626573742d6170617274616d656e74732d62616e6e65722e6a7067),
(39, '2020-holi', 330, 0x666f726569676e2d312e6a7067),
(40, '2020-holi', 330, 0x666f726569676e2d322e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `impcontacts`
--

CREATE TABLE `impcontacts` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Contact_No` bigint(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `impcontacts`
--

INSERT INTO `impcontacts` (`Id`, `Society_Code`, `Type`, `Name`, `Contact_No`, `Address`) VALUES
(1, 330, 'vdsvsvs', 'vewvewvg', 34343434, 'eevfd'),
(2, 330, 'as', 'q', 1213113, 'MAIN BAJAR,\r\nGARBI CHOWK,\r\nSHAPUR');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `User_Id` int(255) NOT NULL,
  `Msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Notice_Type` varchar(255) DEFAULT NULL,
  `Details` varchar(255) NOT NULL,
  `Extra_Info` varchar(255) NOT NULL,
  `Notice_Time` time NOT NULL,
  `Notice_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`Id`, `Society_Code`, `Notice_Type`, `Details`, `Extra_Info`, `Notice_Time`, `Notice_Date`) VALUES
(1, 330, '', 'nsdv olehsn vwehoivnewjo vwevniewd vwenvlor ', 'iodwdhvnwieo vwebdvolewl', '08:15:00', '2019-06-10'),
(2, 330, '', 'wrhw3rh', 'erh3e5he', '08:35:00', '2019-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `older_user_data`
--

CREATE TABLE `older_user_data` (
  `Id` int(20) NOT NULL,
  `User_Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Id` int(11) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Pay_Id` varchar(255) NOT NULL,
  `User_Id` varchar(255) NOT NULL,
  `Month_Year` varchar(255) NOT NULL,
  `Payment_Time` time(6) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Payment_Status` enum('1','0','','') NOT NULL DEFAULT '0',
  `Rupees` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Id`, `Society_Code`, `Pay_Id`, `User_Id`, `Month_Year`, `Payment_Time`, `Payment_Date`, `Name`, `Payment_Status`, `Rupees`) VALUES
(49, 330, '2019-06-Maintenance', '1-101', '2019-06', '06:37:00.000000', '2019-06-24', 'unadakat', '1', 222),
(50, 330, '2019-06-Maintenance', '1-102', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(51, 330, '2019-06-Maintenance', '1-103', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(52, 330, '2019-06-Maintenance', '1-201', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(53, 330, '2019-06-Maintenance', '1-202', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(54, 330, '2019-06-Maintenance', '1-203', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(55, 330, '2019-06-Maintenance', '1-301', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(56, 330, '2019-06-Maintenance', '1-302', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(57, 330, '2019-06-Maintenance', '1-303', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(58, 330, '2019-06-Maintenance', '1-401', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(59, 330, '2019-06-Maintenance', '1-402', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(60, 330, '2019-06-Maintenance', '1-403', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 222),
(61, 330, '2019-06-Extra Need', '1-101', '2019-06', '06:37:00.000000', '2019-06-24', 'unadakat', '1', 2344),
(62, 330, '2019-06-Extra Need', '1-102', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(63, 330, '2019-06-Extra Need', '1-103', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(64, 330, '2019-06-Extra Need', '1-201', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(65, 330, '2019-06-Extra Need', '1-202', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(66, 330, '2019-06-Extra Need', '1-203', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(67, 330, '2019-06-Extra Need', '1-301', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(68, 330, '2019-06-Extra Need', '1-302', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(69, 330, '2019-06-Extra Need', '1-303', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(70, 330, '2019-06-Extra Need', '1-401', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(71, 330, '2019-06-Extra Need', '1-402', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344),
(72, 330, '2019-06-Extra Need', '1-403', '2019-06', '06:39:00.000000', '2019-06-24', 'Unadakat', '1', 2344);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `Id` int(255) NOT NULL,
  `User_Id` bigint(255) NOT NULL,
  `First_Name` varchar(30) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `No_Family_Members` int(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `Profile_Pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Society_Name` varchar(30) NOT NULL,
  `Society_Pic` longblob NOT NULL,
  `Address_1` varchar(30) NOT NULL,
  `Address_2` varchar(30) NOT NULL,
  `City` varchar(20) NOT NULL,
  `No_Buildings` int(255) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Admin_Name` varchar(30) NOT NULL,
  `Admin_Bdate` date NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Id`, `Society_Code`, `Society_Name`, `Society_Pic`, `Address_1`, `Address_2`, `City`, `No_Buildings`, `Contact`, `Admin_Name`, `Admin_Bdate`, `Password`) VALUES
(11, 330, 'uuuuuuu', '', 'junagadh', 'rajkot', 'evwvwe', 12, 1231231231, '1231231231', '0000-00-00', 'qweasd'),
(12, 809, 'q', '', 'MAIN BAJAR,', 'GARBI CHOWK,', 'SHAPUR', 4, 222, '2edeq', '0000-00-00', '123123123'),
(13, 181, 'xsz', '', 'xscz', 'cscsc', 'zcscsc', 2, 1212121212, 'fewcw', '0000-00-00', 'qweasd');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `Rule_Type` text NOT NULL,
  `Society_Rule` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`Id`, `Society_Code`, `Rule_Type`, `Society_Rule`) VALUES
(1, 330, 'fff', 'ffff'),
(2, 330, 'Playground', 'ddsv df'),
(3, 330, 'Playground', 'ddsv df'),
(4, 330, 'dsbfeb', 'nytmy6my'),
(5, 330, 'ht5rh5r', 'h5tnjg5yjnyj'),
(6, 330, 'ww', 'w2s32');

-- --------------------------------------------------------

--
-- Table structure for table `staff_members`
--

CREATE TABLE `staff_members` (
  `Id` int(255) NOT NULL,
  `Society_Code` int(255) NOT NULL,
  `User_Id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Work` varchar(255) NOT NULL,
  `Contact_No` bigint(20) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Salary` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff_members`
--

INSERT INTO `staff_members` (`Id`, `Society_Code`, `User_Id`, `Name`, `Work`, `Contact_No`, `Address`, `Password`, `Birth_Date`, `Salary`) VALUES
(15, 330, '330-asd', 'Umang', 'asdCHGC', 1231231231, 'Main Bazar,\r\nGarbi Chowk,\r\nSHAPUR SORATH.', '', '0000-00-00', 0),
(16, 330, '330-xax', 'xaX', 'xaxaxaxaX', 121312131313, 'sweewe', '', '0000-00-00', 0),
(17, 330, '330-xax', 'xaX', 'xaxaxaxaX', 121312131313, 'sweewe', '', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(255) NOT NULL,
  `User_Id` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Society_Code` int(3) NOT NULL,
  `Block_No` int(255) NOT NULL,
  `Building_No` int(255) NOT NULL,
  `Floor_No` int(255) NOT NULL,
  `Family_Members` int(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Membership` enum('Society Member','Committee Member') NOT NULL DEFAULT 'Society Member',
  `Status` enum('Rent','Permanent','','') NOT NULL DEFAULT 'Permanent',
  `Contact_No` bigint(255) NOT NULL,
  `Profile_Pic` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `User_Id`, `First_Name`, `Last_Name`, `Society_Code`, `Block_No`, `Building_No`, `Floor_No`, `Family_Members`, `Password`, `Membership`, `Status`, `Contact_No`, `Profile_Pic`) VALUES
(145, '1-101', 'hardik', 'unadakat', 330, 101, 1, 1, 4, '', '', '', 1231231234, 0x30),
(146, '1-102', 'Umang', 'Unadakat', 330, 102, 1, 1, 0, '', 'Society Member', '', 0, 0x30),
(147, '1-103', 'Umang', 'Unadakat', 330, 103, 1, 1, 0, '', 'Committee Member', '', 0, 0x30),
(148, '1-201', 'Umang', 'Unadakat', 330, 201, 1, 2, 0, '', '', '', 0, 0x30),
(149, '1-202', 'Umang', 'Unadakat', 330, 202, 1, 2, 0, '', '', '', 0, 0x30),
(150, '1-203', 'Umang', 'Unadakat', 330, 203, 1, 2, 0, '', '', '', 0, 0x30),
(151, '1-301', 'Umang', 'Unadakat', 330, 301, 1, 3, 0, '', 'Committee Member', '', 0, 0x30),
(152, '1-302', 'Umang', 'Unadakat', 330, 302, 1, 3, 0, '', '', '', 0, 0x30),
(153, '1-303', 'Umang', 'Unadakat', 330, 303, 1, 3, 0, '', '', '', 0, 0x30),
(154, '1-401', 'Umang', 'Unadakat', 330, 401, 1, 4, 0, '', '', '', 0, 0x30),
(155, '1-402', 'Umang', 'Unadakat', 330, 402, 1, 4, 0, '', '', '', 0, 0x30),
(156, '1-403', 'Umang', 'Unadakat', 330, 403, 1, 4, 0, '', '', '', 0, 0x30),
(157, '1-101', '', '', 809, 101, 1, 1, 0, '', 'Society Member', '', 0, ''),
(158, '1-102', '', '', 809, 102, 1, 1, 0, '', 'Society Member', '', 0, ''),
(159, '1-201', '', '', 809, 201, 1, 2, 0, '', 'Society Member', '', 0, ''),
(160, '1-202', '', '', 809, 202, 1, 2, 0, '', 'Society Member', '', 0, ''),
(161, '2-101', '', '', 809, 101, 2, 1, 0, '', 'Society Member', '', 0, ''),
(162, '2-102', '', '', 809, 102, 2, 1, 0, '', 'Society Member', '', 0, ''),
(163, '2-201', '', '', 809, 201, 2, 2, 0, '', 'Society Member', '', 0, ''),
(164, '2-202', '', '', 809, 202, 2, 2, 0, '', 'Society Member', '', 0, ''),
(165, '3-101', '', '', 809, 101, 3, 1, 0, '', 'Society Member', '', 0, ''),
(166, '3-102', '', '', 809, 102, 3, 1, 0, '', 'Society Member', '', 0, ''),
(167, '3-201', '', '', 809, 201, 3, 2, 0, '', 'Society Member', '', 0, ''),
(168, '3-202', '', '', 809, 202, 3, 2, 0, '', 'Society Member', '', 0, ''),
(169, '4-101', '', '', 809, 101, 4, 1, 0, '', 'Society Member', '', 0, ''),
(170, '4-102', '', '', 809, 102, 4, 1, 0, '', 'Society Member', '', 0, ''),
(171, '4-201', '', '', 809, 201, 4, 2, 0, '', 'Society Member', '', 0, ''),
(172, '4-202', '', '', 809, 202, 4, 2, 0, '', 'Society Member', '', 0, ''),
(173, '1-101', '', '', 181, 101, 1, 1, 0, '', 'Society Member', '', 0, ''),
(174, '1-102', '', '', 181, 102, 1, 1, 0, '', 'Society Member', '', 0, ''),
(175, '1-201', '', '', 181, 201, 1, 2, 0, '', 'Society Member', '', 0, ''),
(176, '1-202', '', '', 181, 202, 1, 2, 0, '', 'Society Member', '', 0, ''),
(177, '2-101', '', '', 181, 101, 2, 1, 0, '', 'Society Member', '', 0, ''),
(178, '2-102', '', '', 181, 102, 2, 1, 0, '', 'Society Member', '', 0, ''),
(179, '2-201', '', '', 181, 201, 2, 2, 0, '', 'Society Member', '', 0, ''),
(180, '2-202', '', '', 181, 202, 2, 2, 0, '', 'Society Member', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_payment_type`
--
ALTER TABLE `add_payment_type`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `committee_members`
--
ALTER TABLE `committee_members`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact_with_us`
--
ALTER TABLE `contact_with_us`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `impcontacts`
--
ALTER TABLE `impcontacts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `older_user_data`
--
ALTER TABLE `older_user_data`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff_members`
--
ALTER TABLE `staff_members`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_payment_type`
--
ALTER TABLE `add_payment_type`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `committee_members`
--
ALTER TABLE `committee_members`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaints`
--
ALTER TABLE `complaints`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_with_us`
--
ALTER TABLE `contact_with_us`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `impcontacts`
--
ALTER TABLE `impcontacts`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `older_user_data`
--
ALTER TABLE `older_user_data`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff_members`
--
ALTER TABLE `staff_members`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
