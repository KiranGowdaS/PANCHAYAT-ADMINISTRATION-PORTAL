-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 28, 2015 at 03:45 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `panchayat_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminwork`
--

CREATE TABLE IF NOT EXISTS `adminwork` (
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

CREATE TABLE IF NOT EXISTS `biodata` (
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(10) DEFAULT NULL,
  `telephone` int(10) DEFAULT NULL,
  `martial_status` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`fullname`, `emailid`, `gender`, `telephone`, `martial_status`, `company`) VALUES
('Anik Biswas', 'anik@gmail.com', 'male', 35252525, 'Single', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `moneyhaving` varchar(10) DEFAULT NULL,
  `moneyrequired` varchar(10) DEFAULT NULL,
  `labourersinvolved` varchar(10) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `fullname` varchar(100) DEFAULT NULL,
  `memberissue` varchar(100) NOT NULL DEFAULT '',
  `moneygiven` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`,`memberissue`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`moneyhaving`, `moneyrequired`, `labourersinvolved`, `emailid`, `fullname`, `memberissue`, `moneygiven`) VALUES
('200000', '1700000', '10', 'anik@gmail.com', 'Anik', 'Health Care', '2000000');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE IF NOT EXISTS `citizen` (
  `ssn` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `address` varchar(1000) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `ph_no` int(10) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `voterid` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ssn`,`emailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

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
(21, 'Rohan', '24', 'Belgaum', 'rohan@gmail.com', 2147483647, 'rohan', 'citizen', 'sigsihgigh');

-- --------------------------------------------------------

--
-- Table structure for table `dummy`
--

CREATE TABLE IF NOT EXISTS `dummy` (
  `dissueno` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `telephoneno` int(10) DEFAULT NULL,
  `issue` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `progress` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`dissueno`,`emailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `dummy`
--

INSERT INTO `dummy` (`dissueno`, `fullname`, `emailid`, `telephoneno`, `issue`, `comments`, `progress`) VALUES
(15, 'Anik', 'anik@gmail.com', 24124145, 'Health Care', 'Not Having a Hospital', ''),
(16, 'Rahul', 'rahul@gmail.com', 43525244, 'Education System', 'College need to open.', ''),
(17, 'Ankit', 'ankit@gmail.com', 3634636, 'Water and Sanitation', 'The Water is not passing properly.', ''),
(19, 'Ashish', 'ashish@gmail.com', 3363636, 'Street Light Problem', 'Street light is not working.', '');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fullname` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL DEFAULT '',
  `daystodowork` varchar(10) DEFAULT NULL,
  `satisfiedwork` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`)
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

CREATE TABLE IF NOT EXISTS `issues` (
  `issueno` int(10) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(100) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `telephoneno` int(10) DEFAULT NULL,
  `issue` varchar(100) DEFAULT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `progress` varchar(20) DEFAULT NULL,
  `issueover` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`issueno`,`emailid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`issueno`, `fullname`, `company`, `emailid`, `telephoneno`, `issue`, `comments`, `progress`, `issueover`) VALUES
(1, 'Anik', 'Student', 'anik@gmail.com', 24124145, 'Health Care', 'Not Having a Hospital', '', NULL),
(2, 'Rahul', 'Student', 'rahul@gmail.com', 43525244, 'Education System', 'College need to open.', '', NULL),
(3, 'Ankit', 'Student', 'ankit@gmail.com', 3634636, 'Water and Sanitation', 'The Water is not passing properly.', '', NULL),
(5, 'Ashish', 'Student', 'ashish@gmail.com', 3363636, 'Street Light Problem', 'Street light is not working.', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `fullname` varchar(100) DEFAULT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user',
  `password` varchar(100) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  PRIMARY KEY (`emailid`,`type`)
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
('Rahul', 'citizen', 'rahul', 'rahul@gmail.com'),
('Rahul', 'memberofficial', 'rahul', 'rahul@gmail.com'),
('Rohan', 'citizen', 'rohan', 'rohan@gmail.com'),
('Sohan', 'citizen', 'sohan', 'sohan@gmail.com'),
('vishal', 'citizen', 'vishal', 'vishal@gmail.com'),
('vishal', 'memberofficial', 'vishal', 'vishal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `fullname` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `ph_no` varchar(10) DEFAULT NULL,
  `emailid` varchar(100) NOT NULL,
  `age` varchar(4) DEFAULT NULL,
  `task` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`emailid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fullname`, `address`, `ph_no`, `emailid`, `age`, `task`) VALUES
('Amogh', 'Gokak ', '86787878', 'amogh@gmail.com', '44', 'Education System'),
('Anik', 'Brindaban Garden', '2424214', 'anik@gmail.com', '45', 'Health Care'),
('Ashish', 'rr nagar', '79897786', 'ashish@gmail.com', '44', 'Street Light Problem'),
('Rahul', 'Tambaram,Chennai', '473463536', 'rahul@gmail.com', '47', 'Water and Sanitation'),
('vishal', 'bangalore', '979778878', 'vishal@gmail.com', '45', 'Roads and Transportation');

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
