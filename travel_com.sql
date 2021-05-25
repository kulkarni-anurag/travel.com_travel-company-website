-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 25, 2021 at 08:42 AM
-- Server version: 5.6.38
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `m_id` int(11) NOT NULL,
  `m_con` varchar(10) NOT NULL,
  `m_idp` varchar(20) NOT NULL,
  `ttype` int(2) NOT NULL,
  `tid` int(2) NOT NULL,
  `s_id` int(2) NOT NULL,
  `nop` int(2) NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL DEFAULT 'UNPAID'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `m_id`, `m_con`, `m_idp`, `ttype`, `tid`, `s_id`, `nop`, `bdate`, `status`) VALUES
(6, 1, '9922942231', 'MH1220190002626', 2, 10, 6, 2, '2021-01-11 13:06:18', 'UNPAID'),
(7, 7, '9371810069', 'MH122020007878', 1, 5, 6, 2, '2021-01-11 15:26:05', 'UNPAID'),
(4, 4, '2147483647', 'MH1220060002424', 1, 4, 6, 4, '2021-01-11 12:29:20', 'PAID'),
(5, 4, '7888009438', 'MH1220060002424', 1, 6, 6, 3, '2021-01-11 12:32:52', 'UNPAID'),
(10, 1, '9988776655', 'MH1520190023', 1, 2, 4, 1, '2021-01-12 05:30:40', 'UNPAID'),
(11, 1, '9988776655', 'MH20JG20002356437', 1, 8, 4, 1, '2021-01-12 05:33:03', 'UNPAID'),
(12, 1, '9423398459', 'MH1220190002424', 1, 1, 4, 1, '2021-01-12 10:13:28', 'PAID');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'UNSOLVED'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cid`, `name`, `email`, `subject`, `message`, `date`, `status`) VALUES
(1, 'Anurag Kulkarni', 'anuragkulkarni@vit.edu', 'Feedback', 'Hello World!', '2021-01-11 17:23:37', 'UNSOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `custom`
--

CREATE TABLE `custom` (
  `eid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `enquiry` varchar(200) NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL DEFAULT 'UNRESOLVED'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `custom`
--

INSERT INTO `custom` (`eid`, `name`, `email`, `enquiry`, `edate`, `status`) VALUES
(1, 'Virat', 'virat@gmail.com', 'HEllo World!', '2021-01-11 17:09:16', 'UNRESOLVED');

-- --------------------------------------------------------

--
-- Table structure for table `dpeople`
--

CREATE TABLE `dpeople` (
  `bid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `dpeople`
--

INSERT INTO `dpeople` (`bid`, `name`, `gender`, `age`) VALUES
(0, 'Virat', 'male', 31),
(2, 'Rohit', 'male', 35),
(3, 'anushka', 'male', 35),
(3, 'Virat', 'male', 31),
(4, 'Vrushali Kulkarni', 'female', 41),
(4, 'Archit Kulkarni', 'male', 13),
(4, 'Sachin Kulkarni', 'male', 45),
(4, 'Anurag Kulkarni', 'male', 19),
(5, 'Sheetal Kulkarni', 'female', 37),
(5, 'Mayoor Kulkarni', 'male', 41),
(5, 'Sahana Kulkarni', 'female', 10),
(7, 'Sachin Kulkarni', 'male', 45),
(7, 'Vrushali Kulkarni', 'female', 41),
(8, 'Anurag Kulkarni', 'male', 19),
(9, 'Anurag Kulkarni', 'male', 19),
(10, 'Anurag Kulkarni', 'male', 19),
(11, 'Virat', 'male', 32),
(12, 'Anurag Kulkarni', 'male', 19);

-- --------------------------------------------------------

--
-- Table structure for table `ipeople`
--

CREATE TABLE `ipeople` (
  `bid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(3) NOT NULL,
  `passport` varchar(15) NOT NULL,
  `visa` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ipeople`
--

INSERT INTO `ipeople` (`bid`, `name`, `gender`, `age`, `passport`, `visa`) VALUES
(6, 'Vishnoo Kulkarni', 'male', 75, 'P67H874GFD', 'y'),
(6, 'Varsha Kulkarni', 'male', 70, 'K25KJ32AE14', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fname`, `email`, `password`) VALUES
(1, 'Anurag Kulkarni', 'kanurag@gmail.com', '$2y$12$TnSB8pVneo4PYxDpvo/DEOfWuIG61E7wu8vgSP9sD4SURfpThqk.6'),
(2, 'Archit Kulkarni', 'karchit@yahoo.com', '$2y$12$6mi4x4PqfSZ6MUQOARf5x.au2jSOTvcxVtpMXkt2PRitXuwvc0dw.'),
(3, 'Vrushali Kulkarni', 'kvrushali@outlook.com', '$2y$12$KaWWvluYjicEoRLuVfKos.ZkE4bNRKIH7t0IM7Yd644hGZEBhUWfC'),
(4, 'Sachin Kulkarni', 'ksachin@gmail.com', '$2y$12$sZFo7NHNAdi93TiTl.uxdez8IWq4yPq.GM/1aqo6My.81.s0SiLkC'),
(5, 'Vrushali Kulkarni', 'vrushali1976@gmail.com', '$2y$12$BxySufFEaP/CoM7NfnuYUeDQjw0irQhG3q9EznzqKbNsWsdnsQ9Ia');

-- --------------------------------------------------------

--
-- Table structure for table `source`
--

CREATE TABLE `source` (
  `sid` int(11) NOT NULL,
  `station` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `source`
--

INSERT INTO `source` (`sid`, `station`) VALUES
(1, 'Delhi'),
(2, 'Mumbai'),
(3, 'Bengaluru'),
(4, 'Chennai'),
(5, 'Kolkata'),
(6, 'Pune');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `s_id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`s_id`, `email`) VALUES
(1, 'kanurag@gmail.com'),
(2, 'karchit@yahoo.com'),
(3, 'sachin@baumuller.in'),
(4, 'kvrushali@outlook.com'),
(5, 'virat@yahoo.com'),
(6, 'ksachin@gmail.com'),
(7, 'vrushali1976@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tours`
--

CREATE TABLE `tours` (
  `t_id` int(11) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `description` varchar(250) NOT NULL,
  `type` int(5) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `price` int(11) NOT NULL,
  `max_cap` int(2) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tours`
--

INSERT INTO `tours` (`t_id`, `destination`, `description`, `type`, `start_date`, `end_date`, `price`, `max_cap`, `image`) VALUES
(1, 'Mumbai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-30 03:30:00', '2021-02-03 04:30:00', 10000, 20, 'images/mumbai.jpeg'),
(2, 'Delhi', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-25 03:30:00', '2021-01-30 04:30:00', 20000, 30, 'images/delhi.jpg'),
(3, 'Agra', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-20 03:30:00', '2021-01-25 04:30:00', 10000, 25, 'images/agra.jpg'),
(4, 'Darjeeling', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-02-10 03:30:00', '2021-02-15 04:30:00', 25000, 35, 'images/Darjeeling.jpg'),
(5, 'Manasarovar', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-15 03:30:00', '2021-01-25 04:30:00', 100000, 5, 'images/manas.jpg'),
(6, 'Kashmir', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-20 03:30:00', '2021-01-31 04:30:00', 80000, 8, 'images/kashmir.jpeg'),
(7, 'Ooty', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-02-25 03:30:00', '2021-03-02 04:30:00', 20000, 10, 'images/ooty.jpeg'),
(8, 'Hyderabad', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididuntut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 1, '2021-01-14 03:30:00', '2021-01-24 04:30:00', 30000, 15, 'images/hyderabad.jpeg'),
(9, 'Dubai', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-02-20 03:30:00', '2021-02-25 04:30:00', 100000, 15, 'images/dubai.jpeg'),
(10, 'Switzerland', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-01-15 03:30:00', '2021-01-26 04:30:00', 125000, 20, 'images/swit.jpeg'),
(11, 'Malaysia', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-02-10 03:30:00', '2021-02-16 04:30:00', 115000, 10, 'images/malaysia.jpeg'),
(12, 'U.S.A', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-01-15 03:30:00', '2021-01-21 04:30:00', 225000, 20, 'images/usa.jpeg'),
(13, 'Sri Lanka', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-01-25 03:30:00', '2021-01-31 04:30:00', 75000, 25, 'images/sri.jpeg'),
(14, 'England', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-02-11 03:30:00', '2021-02-16 04:30:00', 80000, 30, 'images/england.jpeg'),
(15, 'Germany', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-02-15 03:30:00', '2021-02-20 04:30:00', 80000, 15, 'images/germany.jpeg'),
(16, 'France', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 2, '2021-03-01 03:30:00', '2021-03-05 04:30:00', 90000, 20, 'images/france.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tour_type`
--

CREATE TABLE `tour_type` (
  `tid` int(11) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tour_type`
--

INSERT INTO `tour_type` (`tid`, `type`) VALUES
(1, 'Domestic'),
(2, 'International');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `source`
--
ALTER TABLE `source`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `tour_type`
--
ALTER TABLE `tour_type`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `source`
--
ALTER TABLE `source`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tours`
--
ALTER TABLE `tours`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tour_type`
--
ALTER TABLE `tour_type`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
