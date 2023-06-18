-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2023 at 09:16 AM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pytuiis_prod`
--

-- --------------------------------------------------------

--
-- Table structure for table `ptudbtab_nominalroll`
--

CREATE TABLE `ptudbtab_nominalroll` (
  `StudentId` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `StudentName` varchar(75) CHARACTER SET latin1 DEFAULT NULL,
  `Department` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Programme` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `Specialization` varchar(60) CHARACTER SET latin1 DEFAULT NULL,
  `Section` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `Batch` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL,
  `Regulation` varchar(255) DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL,
  `FeeDefaulter` varchar(255) DEFAULT NULL,
  `FeeDefaultYear` varchar(255) DEFAULT NULL,
  `Prevented` varchar(255) DEFAULT NULL,
  `PreventedSession` varchar(255) DEFAULT NULL,
  `TempBreak` varchar(255) DEFAULT NULL,
  `TempBreakRemarks` varchar(255) DEFAULT NULL,
  `TempBreakSession` varchar(255) DEFAULT NULL,
  `RegistrationDefault` varchar(255) DEFAULT NULL,
  `RegistrationDefaultSession` varchar(255) DEFAULT NULL,
  `Debarred` varchar(255) DEFAULT NULL,
  `DebarredSession` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AVG_ROW_LENGTH=133 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ptudbtab_nominalroll`
--

INSERT INTO `ptudbtab_nominalroll` (`StudentId`, `StudentName`, `Department`, `Programme`, `Specialization`, `Section`, `Batch`, `Semester`, `Regulation`, `Remarks`, `FeeDefaulter`, `FeeDefaultYear`, `Prevented`, `PreventedSession`, `TempBreak`, `TempBreakRemarks`, `TempBreakSession`, `RegistrationDefault`, `RegistrationDefaultSession`, `Debarred`, `DebarredSession`) VALUES
('19CS1118', 'VENKATESH PRASAD', 'Computer Science and Engineering', 'Bachelor of Technology', 'Computer Science and Engineering', 'B', '2019', '8', '2018', NULL, 'Paid', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ptudbtab_nominalroll`
--
ALTER TABLE `ptudbtab_nominalroll`
  ADD UNIQUE KEY `UK_NominalRoll_StudentId` (`StudentId`(10)),
  ADD KEY `IDX_NominalRoll_Section` (`Section`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
