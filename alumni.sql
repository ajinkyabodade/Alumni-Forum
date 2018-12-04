-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 10:25 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `chat` varchar(500) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `chat`, `name`) VALUES
(40, 'HI Anand', 'Ajinkya  Bodade'),
(41, 'Hi ajinkya', 'Anand Bhagat'),
(42, 'HI Anand', 'Ajinkya  Bodade'),
(43, 'bye anand', 'Ajinkya  Bodade'),
(44, 'bye', 'Anand Bhagat'),
(45, 'hi again', 'Ajinkya  Bodade'),
(46, 'hi', 'Anand Bhagat'),
(47, 'hi again', 'Ajinkya  Bodade'),
(48, 'hi', 'Anand Bhagat'),
(49, 'where are u', 'Anand Bhagat');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `no` int(11) NOT NULL,
  `Name1` varchar(50) NOT NULL,
  `EmailID` varchar(50) NOT NULL,
  `MobileNo` varchar(15) NOT NULL,
  `yearofpassing` varchar(5) NOT NULL,
  `company` varchar(100) NOT NULL,
  `dateofbirth` varchar(10) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `post` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`no`, `Name1`, `EmailID`, `MobileNo`, `yearofpassing`, `company`, `dateofbirth`, `Password`, `post`) VALUES
(3, 'Ajinkya  Bodade', 'bodadeajinkya@gmail.com', '9146709417', '2013', 'Google', '1997-11-19', 'ajinkyabo', ''),
(4, 'Anand Bhagat', 'anbhagat1997@gmail.com', '7875219661', '2014', 'Facebook', '1997-05-28', 'anandbh', ''),
(5, 'Ankit Jangid', 'jankit403@gmail.com', '8983333948', '2015', 'Yahoo', '1996-04-20', 'ankitja', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
