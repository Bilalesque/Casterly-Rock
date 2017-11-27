-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2017 at 08:19 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casterlyrock`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(25) NOT NULL,
  `discount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `discount`) VALUES
('PSO', 5);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_ID` int(11) NOT NULL,
  `CNIC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_ID`, `CNIC`) VALUES
(9, '1235'),
(10, '1235'),
(11, '1235');

-- --------------------------------------------------------

--
-- Table structure for table `customer_company`
--

CREATE TABLE `customer_company` (
  `Cust_ID` int(11) NOT NULL,
  `Company` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_company`
--

INSERT INTO `customer_company` (`Cust_ID`, `Company`) VALUES
(10, 'PSO'),
(11, 'PSO');

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

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`Res_ID`, `Type`, `no_of_ppl`, `B_Date`, `E_Date`, `Name`, `Price`, `Cust_ID`) VALUES
(1, 'Buffet', 54, '2017-11-23', '2017-11-20', 'NoName', 1085, 11);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_ID` int(5) NOT NULL,
  `Department` varchar(25) NOT NULL,
  `Salary` int(11) NOT NULL,
  `DOB` date NOT NULL,
  `H_Date` date NOT NULL,
  `CNIC` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_ID`, `Department`, `Salary`, `DOB`, `H_Date`, `CNIC`) VALUES
(1, 'EVENTS', 1234, '2017-11-06', '2017-11-26', '11111-1111111-1'),
(3, 'EVENTS', 1234, '2017-11-06', '2017-11-26', '22222-2222222-2'),
(4, 'GASTRONOMY', 456, '2017-11-07', '2017-11-26', '12212-1111111-1'),
(5, 'GASTRONOMY', 3456, '2017-11-06', '2017-11-26', '44444-4444444-4'),
(6, 'ROOM RESERVATIONS', 12345, '2017-11-07', '2017-11-26', '88888-8888888-8');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_ID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL,
  `B_Date` date DEFAULT NULL,
  `E_Date` date DEFAULT NULL,
  `Capacity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Cust_ID` int(11) DEFAULT NULL,
  `Hall_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_ID`, `Type`, `B_Date`, `E_Date`, `Capacity`, `Price`, `Cust_ID`, `Hall_ID`) VALUES
(1, 'Matrimony', '2017-11-23', '2017-11-30', 200, 800, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `Fac_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`Fac_ID`, `Name`, `Cost`) VALUES
(1, 'Swimming', 20),
(2, 'Fitness Center', 45),
(3, 'Indoor Sports', 35),
(4, 'Spa', 25);

-- --------------------------------------------------------

--
-- Table structure for table `facilitystatus`
--

CREATE TABLE `facilitystatus` (
  `P_ID` int(11) NOT NULL,
  `Fac_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilitystatus`
--

INSERT INTO `facilitystatus` (`P_ID`, `Fac_ID`) VALUES
(8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Emp_ID` int(5) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Emp_ID`, `Department`, `Username`, `password`) VALUES
(1, 'EVENTS', 'event', 'evemt'),
(4, 'GASTRONOMY', 'gastronomy', 'gastronomy');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `P_ID` int(11) NOT NULL,
  `no_of_ppl` int(11) NOT NULL,
  `B_Date` date NOT NULL,
  `S_Date` date NOT NULL,
  `E_Date` date DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Cust_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`P_ID`, `no_of_ppl`, `B_Date`, `S_Date`, `E_Date`, `Price`, `Cust_ID`) VALUES
(7, 4, '2017-11-23', '2017-11-23', '2017-11-30', 505, 9),
(8, 4, '2017-11-23', '2017-11-23', '2017-11-30', 705, 9);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Emp` int(5) NOT NULL,
  `Mgr` int(5) NOT NULL,
  `Pay_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `CNIC` varchar(15) NOT NULL,
  `FNAME` varchar(25) NOT NULL,
  `LNAME` varchar(25) NOT NULL,
  `Address` varchar(25) NOT NULL,
  `PhoneNumber` varchar(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `CreditCardNo` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`CNIC`, `FNAME`, `LNAME`, `Address`, `PhoneNumber`, `Email`, `CreditCardNo`) VALUES
('11111-1111111-1', 'ahmed ', 'bilal', 'bjasjb', '1234', 'a@gmail.com', NULL),
('1221', 'ba', '1235', 'abcdefg', '1324', 'bi@gmail.com', '4567'),
('12212-1111111-1', 'qwe ', 'qwe', 'qwe', '1234', 'a@gmail.com', NULL),
('123', 'as ', 'd', 'werasdf', '6456', 'asdf@asdf.dfg', '13533'),
('1234', 'muhamamd ', 'ahmed', 'GOthIXmail', '123456', 'a@gmail.com', '11111'),
('1235', 'ab', 'ba', 'abcdefg', '1324', 'bi@gmail.com', '4567'),
('22222-2222222-2', 'asdfg ', 'bilal', 'qwe', '123', 'a@gmail.com', NULL),
('34', 'b ', 's', 'a', '43', 'a@gmail.com', '121'),
('44444-4444444-4', 'bnm ', 'bnm', 'bnm', '123', 'a@gmail.com', NULL),
('4564632', 'asd ', 'asd', 'asd', '546132', 'add@asdf.cm', '98762130'),
('88888-8888888-8', 'b ', 'b', 'asdfg', '1234', 'a@gmail.com', NULL),
('ab', 'ba', '1235', 'abcdefg', '1324', 'bi@gmail.com', '4567'),
('asad', 'ahmed ', 'bilal', '1234', '1234', 'a@gmail.com', '121212');

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

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`Room_ID`, `Type`, `Capacity`, `Cost`) VALUES
(1, 'Hall', 400, 800),
(2, 'Hall', 800, 500),
(3, 'Hall', 1300, 650),
(4, 'Suite', 6, 75),
(5, 'Suite', 5, 70),
(6, 'Normal', 123, 321);

-- --------------------------------------------------------

--
-- Table structure for table `roomstatus`
--

CREATE TABLE `roomstatus` (
  `P_ID` int(11) NOT NULL,
  `Room_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomstatus`
--

INSERT INTO `roomstatus` (`P_ID`, `Room_ID`) VALUES
(7, 5),
(8, 4);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `Ser_ID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`Ser_ID`, `Name`, `Cost`) VALUES
(1, 'Valet Service', 25),
(2, 'Room Cleaning', 40),
(3, 'Food Service', 15);

-- --------------------------------------------------------

--
-- Table structure for table `servicestatus`
--

CREATE TABLE `servicestatus` (
  `P_ID` int(11) NOT NULL,
  `Ser_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicestatus`
--

INSERT INTO `servicestatus` (`P_ID`, `Ser_ID`) VALUES
(7, 3);

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
  ADD KEY `CNIC` (`CNIC`);

--
-- Indexes for table `customer_company`
--
ALTER TABLE `customer_company`
  ADD PRIMARY KEY (`Cust_ID`,`Company`),
  ADD KEY `Company` (`Company`);

--
-- Indexes for table `dining`
--
ALTER TABLE `dining`
  ADD PRIMARY KEY (`Res_ID`),
  ADD KEY `Cust_ID` (`Cust_ID`);

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
  ADD PRIMARY KEY (`Event_ID`),
  ADD KEY `Cust_ID` (`Cust_ID`),
  ADD KEY `Hall_ID` (`Hall_ID`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`Fac_ID`);

--
-- Indexes for table `facilitystatus`
--
ALTER TABLE `facilitystatus`
  ADD PRIMARY KEY (`P_ID`,`Fac_ID`),
  ADD KEY `Fac_ID` (`Fac_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Emp_ID`,`Department`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`P_ID`),
  ADD KEY `Cust_ID` (`Cust_ID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Emp`,`Mgr`),
  ADD KEY `Mgr` (`Mgr`);

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
  ADD PRIMARY KEY (`P_ID`,`Room_ID`),
  ADD KEY `Room_ID` (`Room_ID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`Ser_ID`);

--
-- Indexes for table `servicestatus`
--
ALTER TABLE `servicestatus`
  ADD PRIMARY KEY (`P_ID`,`Ser_ID`),
  ADD KEY `Ser_ID` (`Ser_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Cust_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dining`
--
ALTER TABLE `dining`
  MODIFY `Res_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Emp_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `Event_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `Fac_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `Room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `Ser_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`CNIC`) REFERENCES `person` (`CNIC`);

--
-- Constraints for table `customer_company`
--
ALTER TABLE `customer_company`
  ADD CONSTRAINT `customer_company_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`),
  ADD CONSTRAINT `customer_company_ibfk_2` FOREIGN KEY (`Company`) REFERENCES `company` (`name`);

--
-- Constraints for table `dining`
--
ALTER TABLE `dining`
  ADD CONSTRAINT `dining_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`);

--
-- Constraints for table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`),
  ADD CONSTRAINT `event_ibfk_2` FOREIGN KEY (`Hall_ID`) REFERENCES `room` (`Room_ID`);

--
-- Constraints for table `facilitystatus`
--
ALTER TABLE `facilitystatus`
  ADD CONSTRAINT `facilitystatus_ibfk_2` FOREIGN KEY (`Fac_ID`) REFERENCES `facility` (`Fac_ID`),
  ADD CONSTRAINT `facilitystatus_ibfk_3` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_ibfk_1` FOREIGN KEY (`Emp_ID`) REFERENCES `employee` (`Emp_ID`);

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`Cust_ID`) REFERENCES `customer` (`Cust_ID`);

--
-- Constraints for table `payroll`
--
ALTER TABLE `payroll`
  ADD CONSTRAINT `payroll_ibfk_1` FOREIGN KEY (`Emp`) REFERENCES `employee` (`Emp_ID`),
  ADD CONSTRAINT `payroll_ibfk_2` FOREIGN KEY (`Mgr`) REFERENCES `manager` (`Emp_ID`);

--
-- Constraints for table `roomstatus`
--
ALTER TABLE `roomstatus`
  ADD CONSTRAINT `roomstatus_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `room` (`Room_ID`),
  ADD CONSTRAINT `roomstatus_ibfk_3` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`);

--
-- Constraints for table `servicestatus`
--
ALTER TABLE `servicestatus`
  ADD CONSTRAINT `servicestatus_ibfk_2` FOREIGN KEY (`Ser_ID`) REFERENCES `service` (`Ser_ID`),
  ADD CONSTRAINT `servicestatus_ibfk_3` FOREIGN KEY (`P_ID`) REFERENCES `package` (`P_ID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
