-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2020 at 03:51 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `docbookdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `AppointmentID` int(15) NOT NULL,
  `PatientFname` varchar(40) NOT NULL,
  `PatientLname` varchar(40) NOT NULL,
  `ATime` varchar(50) DEFAULT NULL,
  `AConditions` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `ChatID` int(11) NOT NULL,
  `ChatEmailAddress` varchar(500) NOT NULL,
  `ChatMessage` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

- --------------------------------------------------------

--
-- Table structure for table `chathistory`
--

CREATE TABLE `chathistory` (
  `ChatID` char(9) NOT NULL,
  `CHStartTime` time DEFAULT NULL,
  `CHEndTime` time DEFAULT NULL,
  `CHDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `DoctorID` int(9) NOT NULL,
  `DFName` varchar(50) DEFAULT NULL,
  `DLName` varchar(50) DEFAULT NULL,
  `DAge` int(2) NOT NULL,
  `DGender` varchar(20) NOT NULL,
  `DLocation` varchar(60) NOT NULL,
  `DPNumber` char(20) DEFAULT NULL,
  `DEmail` varchar(40) DEFAULT NULL,
  `DPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `DrugsID` char(7) NOT NULL,
  `DrugDescription` varchar(150) DEFAULT NULL,
  `DrugDose` varchar(100) DEFAULT NULL,
  `DrugMethod` varchar(150) DEFAULT NULL,
  `DrugName` varchar(50) DEFAULT NULL,
  `DrugPrice` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drugs`
--

-------------------------------------------------------

--
-- Table structure for table `onlineconsultation`
--

CREATE TABLE `onlineconsultation` (
  `OConsID` char(9) NOT NULL,
  `OCDate` date DEFAULT NULL,
  `OCLocatio` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `PatientID` int(10) NOT NULL,
  `PFName` varchar(30) NOT NULL,
  `PLName` varchar(30) NOT NULL,
  `PAge` int(2) NOT NULL,
  `PGender` varchar(20) NOT NULL,
  `PLocation` varchar(50) NOT NULL,
  `PPhone` varchar(20) NOT NULL,
  `PEmail` varchar(40) NOT NULL,
  `PPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Table structure for table `prescribeddrug`
--

CREATE TABLE `prescribeddrug` (
  `PDAmount` decimal(2,0) DEFAULT NULL,
  `PDStarDate` date DEFAULT NULL,
  `PDEndDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `SubscriptionID` int(14) NOT NULL,
  `SDName` varchar(56) NOT NULL,
  `SPatName` varchar(50) NOT NULL,
  `SFile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `urgentcase`
--

CREATE TABLE `urgentcase` (
  `UrgentCaseID` char(8) NOT NULL,
  `UCDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ufname` varchar(50) NOT NULL,
  `ulname` varchar(50) NOT NULL,
  `uAge` int(3) NOT NULL,
  `uEmail` varchar(15) NOT NULL,
  `uPNumber` int(11) NOT NULL,
  `uPassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`AppointmentID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`ChatID`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`DoctorID`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`DrugsID`);

--
-- Indexes for table `onlineconsultation`
--
ALTER TABLE `onlineconsultation`
  ADD PRIMARY KEY (`OConsID`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`PatientID`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`SubscriptionID`);

--
-- Indexes for table `urgentcase`
--
ALTER TABLE `urgentcase`
  ADD PRIMARY KEY (`UrgentCaseID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ufname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `AppointmentID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `ChatID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `DoctorID` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `PatientID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `SubscriptionID` int(14) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
