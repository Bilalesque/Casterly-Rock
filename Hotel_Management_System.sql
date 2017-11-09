-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2017 at 09:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Hotel_Management_System`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(25) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `C_Card` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_company`
--

CREATE TABLE `customer_company` (
  `Cust_ID` int(11) NOT NULL,
  `Company` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE `dining` (
  `Res_ID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `no_of_ppl` int(11) NOT NULL,
  `B_Date` date NOT NULL,
  `E_Date` date NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Cust_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` varchar(5) NOT NULL,
  `Type` text NOT NULL,
  `Department` text NOT NULL,
  `Salary` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `H_Date` date NOT NULL,
  `CNIC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `B_Date` date NOT NULL,
  `E_Date` int(11) NOT NULL,
  `no_of_ppl` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Cust_ID` int(11) NOT NULL,
  `Room_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `Fac_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `facilitystatus`
--

CREATE TABLE `facilitystatus` (
  `P_ID` int(11) NOT NULL,
  `Fac_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Emp_ID` varchar(5) NOT NULL,
  `Department` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `P_ID` int(11) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `no_of_ppl` int(11) NOT NULL,
  `B_Date` date NOT NULL,
  `S_Date` date NOT NULL,
  `E_Date` date DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Cust_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Emp` varchar(5) NOT NULL,
  `Mgr` varchar(5) NOT NULL,
  `Pay_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `CNIC` varchar(15) NOT NULL,
  `NAME` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `Room_ID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `Capacity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roomstatus`
--

CREATE TABLE `roomstatus` (
  `P_ID` int(11) NOT NULL,
  `Room_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Ser_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `servicestatus`
--

CREATE TABLE `servicestatus` (
  `P_ID` int(11) NOT NULL,
  `Ser_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`);

--
-- Indexes for table `customer_company`
--
ALTER TABLE `customer_company`
  ADD PRIMARY KEY (`Cust_ID`,`Company`);

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`Res_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_ID`),
  ADD UNIQUE KEY `CNIC` (`CNIC`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`Event_ID`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`Fac_ID`);

--
-- Indexes for table `facilitystatus`
--
ALTER TABLE `facilitystatus`
  ADD PRIMARY KEY (`P_ID`,`Fac_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Emp_ID`,`Department`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`P_ID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Emp`,`Mgr`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`CNIC`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `roomstatus`
--
ALTER TABLE `roomstatus`
  ADD PRIMARY KEY (`P_ID`,`Room_ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Ser_ID`);

--
-- Indexes for table `servicestatus`
--
ALTER TABLE `servicestatus`
  ADD PRIMARY KEY (`P_ID`,`Ser_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
