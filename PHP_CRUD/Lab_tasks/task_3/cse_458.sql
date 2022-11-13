-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 10:38 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_458`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info`
--

CREATE TABLE `tbl_info` (
  `card_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `card_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `card_program` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `card_intake` int(3) NOT NULL,
  `card_blood` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `card_barcode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `card_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_info`
--

INSERT INTO `tbl_info` (`card_ID`, `card_name`, `card_program`, `card_intake`, `card_blood`, `card_barcode`, `card_date`) VALUES
('1001', 'Masud', 'CSE', 11, 'AB+', 'b8c37e33de', '0000-00-00'),
('1003', 'Abraham', 'CSE', 10, 'AB+', 'b8c35d37d8', '2021-06-14'),
('1007', 'Xion', 'EEE', 13, 'A-', 'b8c35d37d9', '2021-06-02'),
('1011', 'Cleopatra', 'CSE', 15, 'AB+', 'b8c35d3rd9', '2021-06-17'),
('2001', 'Masud', 'EEE', 25, 'A-', 'd0fb963ff9', '0000-00-00'),
('5024', 'Shemon', 'Textile', 19, 'B+', 'd62bcf67cf', '2021-03-15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `card_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `card_password` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `card_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`card_ID`, `card_password`, `card_status`) VALUES
('002', '5796', 0),
('1001', '6567', 0),
('1005', '6945', 0),
('1010', '3067', 0),
('2001', '3542', 0),
('5024', '7111', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_info`
--
ALTER TABLE `tbl_info`
  ADD PRIMARY KEY (`card_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`card_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
