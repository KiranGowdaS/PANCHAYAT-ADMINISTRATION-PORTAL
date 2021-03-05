-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2017 at 12:05 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `panchayat_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminwork`
--

CREATE TABLE `adminwork` (
  `work` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminwork`
--

INSERT INTO `adminwork` (`work`) VALUES
('Health Care'),
('Street Light Problem'),
('Education System'),
('Water and Sanitation'),
('Roads and Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(10) DEFAULT NULL,
  `telephone` int(10) DEFAULT NULL,
  `martial_status` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`fullname`, `emailid`, `gender`, `telephone`, `martial_status`, `company`) VALUES
('Amogh', 'amogh@gmail.com', 'male', 996497636, 'Single', 'student'),
('Anik Biswas', 'anik@gmail.com', 'male', 35252525, 'Single', 'Student'),
('Rahul', 'rahul@gmail.com', 'male', 2147483647, 'Single', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `moneyhaving` varchar(10) DEFAULT NULL,
  `moneyrequired` varchar(10) DEFAULT NULL,
  `labourersinvolved` varchar(10) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `fullname` varchar(100) DEFAULT NULL,
  `memberissue` varchar(100) NOT NULL DEFAULT '',
  `moneygiven` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`moneyhaving`, `moneyrequired`, `labourersinvolved`, `emailid`, `fullname`, `memberissue`, `moneygiven`) VALUES
('200000', '1700000', '10', 'anik@gmail.com', 'Anik', 'Health Care', '2000'),
('300000', '500000', '100', 'ashish@gmail.com', 'Ashish', 'Street Light Problem', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `ssn` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `ph_no` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `voterid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`ssn`, `fullname`, `age`, `address`, `emailid`, `ph_no`, `password`, `type`, `voterid`) VALUES
(13, 'Anik', '45', 'Brindaban Garden', 'anik@gmail.com', 2424214, 'anik', 'citizen', 'dfdersf'),
(14, 'Amogh', '44', 'Gokak ', 'amogh@gmail.com', 86787878, 'amogh', 'citizen', 'adafaggg'),
(15, 'Rahul', '47', 'Tambaram,Chennai', 'rahul@gmail.com', 473463536, 'rahul', 'citizen', 'scvfsgg'),
(16, 'Ankit', '22', 'Hussain Sagar block,Hyderabad', 'ankit@gmail.com', 242422554, 'ankit', 'citizen', 'svsvsgsgg'),
(17, 'Akash', '22', '4th Block,Chamrajnagar', 'akash@gmail.com', 25523236, 'akash', 'citizen', 'gsgsgsge'),
(18, 'Ashish', '44', 'rr nagar', 'ashish@gmail.com', 79897786, 'ashish', 'citizen', 'nfssigisg'),
(19, 'vishal', '45', 'bangalore', 'vishal@gmail.com', 979778878, 'vishal', 'citizen', 'vjsigjsigj'),
(20, 'Sohan', '24', 'gundlupete', 'sohan@gmail.com', 987876789, 'sohan', 'citizen', 'faifaifhafh'),
(21, 'Rohan', '24', 'Belgaum', 'rohan@gmail.com', 2147483647, 'rohan', 'citizen', 'sigsihgigh'),
(22, 'uday ct', '65', 'blore', 'uday@gamil.com', 2147483647, 'uday', 'citizen', '133'),
(23, 'uday ct', '75', 'mysore', 'uday@gmail.com', 2147483647, 'udaya', 'citizen', '5432'),
(24, 'basu', '35', 'mysore', 'basu@gmail.com', 2147483647, 'basu', 'citizen', '659355');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE `dummy` (
  `dissueno` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `telephoneno` int(10) DEFAULT NULL,
  `issue` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `progress` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`dissueno`, `fullname`, `emailid`, `telephoneno`, `issue`, `comments`, `progress`) VALUES
(15, 'Anik', 'anik@gmail.com', 24124145, 'Health Care', 'Not Having a Hospital', ''),
(16, 'Rahul', 'rahul@gmail.com', 43525244, 'Education System', 'College need to open.', ''),
(17, 'Ankit', 'ankit@gmail.com', 3634636, 'Water and Sanitation', 'The Water is not passing properly.', ''),
(19, 'Ashish', 'ashish@gmail.com', 3363636, 'Street Light Problem', 'Street light is not working.', ''),
(20, 'uday ct', 'uday@gamil.com', 2147483647, 'Education System', 'education', ''),
(21, 'basu', 'basu@gmail.com', 2147483647, 'Education System', 'school', 'under progress');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `daystodowork` varchar(10) DEFAULT NULL,
  `satisfiedwork` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fullname`, `emailid`, `daystodowork`, `satisfiedwork`) VALUES
('Akash', 'akash@gmail.com', '10', 'Yes i do satisfy with your work');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `issueno` int(10) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `telephoneno` int(10) DEFAULT NULL,
  `issue` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `progress` varchar(20) DEFAULT NULL,
  `issueover` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issueno`, `fullname`, `company`, `emailid`, `telephoneno`, `issue`, `comments`, `progress`, `issueover`) VALUES
(1, 'Anik', 'Student', 'anik@gmail.com', 24124145, 'Health Care', 'Not Having a Hospital', '', NULL),
(2, 'Rahul', 'Student', 'rahul@gmail.com', 43525244, 'Education System', 'College need to open.', '', NULL),
(3, 'Ankit', 'Student', 'ankit@gmail.com', 3634636, 'Water and Sanitation', 'The Water is not passing properly.', '', NULL),
(5, 'Ashish', 'Student', 'ashish@gmail.com', 3363636, 'Street Light Problem', 'Street light is not working.', '', NULL),
(6, 'Rahul', 'student', 'rahul@gmail.com', 2147483647, 'Health Care', 'hello', '', NULL),
(7, 'Amogh', 'student', 'amogh@gmail.com', 2147483647, 'Street Light Problem', 'jhfjfj', '', NULL),
(8, 'uday ct', 'student', 'uday@gamil.com', 2147483647, 'Education System', 'education', '', NULL),
(9, 'basu', 'student', 'basu@gmail.com', 2147483647, 'Education System', 'school', 'under progress', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `fullname` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `password` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fullname`, `type`, `password`, `emailid`) VALUES
('admin', 'admin', 'admin', 'admin'),
('Akash', 'citizen', 'akash', 'akash@gmail.com'),
('Amogh', 'citizen', 'amogh', 'amogh@gmail.com'),
('Amogh', 'memberofficial', 'amogh', 'amogh@gmail.com'),
('Anik', 'citizen', 'anik', 'anik@gmail.com'),
('Anik', 'memberofficial', 'anik', 'anik@gmail.com'),
('Ankit', 'citizen', 'ankit', 'ankit@gmail.com'),
('Ashish', 'citizen', 'ashish', 'ashish@gmail.com'),
('Ashish', 'memberofficial', 'ashish', 'ashish@gmail.com'),
('basu', 'citizen', 'basu', 'basu@gmail.com'),
('basu', 'memberofficial', 'basu', 'basu@gmail.com'),
('Rahul', 'citizen', 'rahul', 'rahul@gmail.com'),
('Rahul', 'memberofficial', 'rahul', 'rahul@gmail.com'),
('Rohan', 'citizen', 'rohan', 'rohan@gmail.com'),
('Sohan', 'citizen', 'sohan', 'sohan@gmail.com'),
('uday ct', 'citizen', 'uday', 'uday@gamil.com'),
('uday ct', 'memberofficial', 'uday ct', 'uday@gamil.com'),
('uday ct', 'citizen', 'udaya', 'uday@gmail.com'),
('uday ct', 'memberofficial', 'uday ct', 'uday@gmail.com'),
('vishal', 'citizen', 'vishal', 'vishal@gmail.com'),
('vishal', 'memberofficial', 'vishal', 'vishal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `ph_no` varchar(10) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `age` varchar(4) DEFAULT NULL,
  `task` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fullname`, `address`, `ph_no`, `emailid`, `age`, `task`) VALUES
('Amogh', 'Gokak ', '86787878', 'amogh@gmail.com', '44', 'Education System'),
('Anik', 'Brindaban Garden', '2424214', 'anik@gmail.com', '45', 'Health Care'),
('Ashish', 'rr nagar', '79897786', 'ashish@gmail.com', '44', 'Street Light Problem'),
('basu', 'mysore', '9964976366', 'basu@gmail.com', '35', 'Education System'),
('Rahul', 'Tambaram,Chennai', '473463536', 'rahul@gmail.com', '47', 'Water and Sanitation'),
('uday ct', 'blore', '9964976363', 'uday@gamil.com', '65', 'Street Light Problem'),
('uday ct', 'mysore', '9964976363', 'uday@gmail.com', '75', 'Education System'),
('vishal', 'bangalore', '979778878', 'vishal@gmail.com', '45', 'Roads and Transportation');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`emailid`,`memberissue`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`ssn`,`emailid`);

--
-- Indexes for table `dummy`
--
ALTER TABLE `dummy`
  ADD PRIMARY KEY (`dissueno`,`emailid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`issueno`,`emailid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`emailid`,`type`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`emailid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `ssn` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `dummy`
--
ALTER TABLE `dummy`
  MODIFY `dissueno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `issueno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `fk_member_email` FOREIGN KEY (`emailid`) REFERENCES `login` (`emailid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
