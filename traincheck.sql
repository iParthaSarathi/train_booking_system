-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2020 at 10:15 PM
-- Server version: 5.7.29-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traincheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `userId` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `mNo` varchar(15) NOT NULL,
  `eMail` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `photo` int(255) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Age` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userId`, `password`, `fullName`, `mNo`, `eMail`, `zone`, `photo`, `gender`, `Age`) VALUES
(1, 'rishu123', '123456', 'Rishu Pandey', '9876543211', 'rishupandey@gmail.com', 'East', 0, 'Male', 21),
(2, 'rishu456', '123456', 'Rishu Pandey', '9876543210', 'rishupande@gmail.com', 'West', 0, 'Male', 22),
(3, 'partha111', '123456', 'Partha sarthi', '1020304050', 'ps132@gmail.com', 'North', 0, 'Male', 22),
(4, 'partha111', '123456', 'Partha sarthi', '1020304050', 'ps132@gmail.com', 'North', 0, 'Male', 22);

-- --------------------------------------------------------

--
-- Table structure for table `bugreport`
--

CREATE TABLE `bugreport` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg` varchar(255) NOT NULL,
  `pic1` varchar(255) NOT NULL,
  `pic2` varchar(255) NOT NULL,
  `pic3` varchar(255) NOT NULL,
  `pic4` varchar(255) NOT NULL,
  `curIp` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contacus`
--

CREATE TABLE `contacus` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `msg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `ip` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `important`
--

CREATE TABLE `important` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(5) NOT NULL,
  `trainNo` int(10) NOT NULL,
  `TrainName` varchar(255) NOT NULL,
  `operatingDay` varchar(255) NOT NULL,
  `ArrvialTime` varchar(255) NOT NULL,
  `DeparturetTime` varchar(255) NOT NULL,
  `trainStation` varchar(255) NOT NULL,
  `seatAvlForBooking` int(10) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cupon` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `trainNo`, `TrainName`, `operatingDay`, `ArrvialTime`, `DeparturetTime`, `trainStation`, `seatAvlForBooking`, `speed`, `quota`, `price`, `cupon`) VALUES
(5, 111112, 'Sealdah - Kishanjung Express', 'Saturday', '07:30', '01:01', 'Sealdah, Bandal, Bardman, RamPur, Chapra, Lucknow', 72, '78', 'S.C., ledish', '7', 0),
(6, 111113, 'Sealdah - Haridwar Express', 'Saturday', '07:30', '01:01', 'Sealdah, Bandal, Bardman, RamPur, Chapra, Lucknow, Haridwar', 0, '90', 'S.C., ledish', '8', 0),
(7, 111114, 'Sealdah -Azamghar Express', 'Saturday', '07:30', '01:01', 'Sealdah, Bandal, Bardman, RamPur, Chapra, Azamghar', 0, '68', 'S.C., ledish', '6', 0),
(8, 111115, 'Sealdah - Kucknow Express', 'Saturday', '07:30', '01:01', 'Sealdah, Bandal, Bardman, RamPur, Chapra, Lucknow', 0, '120', 'S.C., ledish', '18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trainBookingNormal`
--

CREATE TABLE `trainBookingNormal` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `trainId` int(11) NOT NULL,
  `dateOfTravel` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fromStation` varchar(255) NOT NULL,
  `toSation` varchar(255) NOT NULL,
  `rac` int(11) NOT NULL,
  `food` varchar(20) NOT NULL,
  `seatCondition` varchar(255) NOT NULL,
  `timeOfBooking` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passsengerName` varchar(255) NOT NULL,
  `passsengerage` varchar(255) NOT NULL,
  `passsengerIdValType` varchar(255) NOT NULL,
  `passsengerIdValNumber` varchar(255) NOT NULL,
  `passsengercontact` varchar(255) NOT NULL,
  `passMale` int(11) NOT NULL,
  `female` int(11) NOT NULL,
  `seniorCity` int(11) NOT NULL,
  `childPass` int(11) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trainBookingNormal`
--

INSERT INTO `trainBookingNormal` (`id`, `userId`, `trainId`, `dateOfTravel`, `quota`, `price`, `fromStation`, `toSation`, `rac`, `food`, `seatCondition`, `timeOfBooking`, `passsengerName`, `passsengerage`, `passsengerIdValType`, `passsengerIdValNumber`, `passsengercontact`, `passMale`, `female`, `seniorCity`, `childPass`, `confirm`) VALUES
(11, 3, 111111, '22/5/2019', '', 0, 'Howrah', 'Hajipur Jn', 0, 'No', '1st Ac', '2019-05-10 07:19:11', 'Kajal Aggarwal', '31', 'Voter', 'FAC53535', '9992321321', 0, 0, 0, 0, 1),
(12, 3, 111111, '', '', 39, 'Howrah', 'Chhapra Jn', 0, 'No', '1st Ac', '2019-05-10 07:19:33', 'Kajal Aggarwal', '', 'Voter', 'FAC53535', '9992321321', 1, 2, 0, 0, 0),
(13, 3, 111111, '15/5/2019', '', 39, 'Jasidih Jn', 'Howrah', 0, 'No', '1st Ac', '2019-05-10 07:20:35', 'Kajal Aggarwal', '31', 'Voter', 'FAC53535', '9992321321', 0, 3, 0, 0, 1),
(14, 5, 111114, '15/5/2019', '', 36, 'Sealdah', 'Bardman', 0, 'No', '1st Ac', '2019-05-10 12:11:34', 'Shroddha Kapur', '29', 'Voter', '234KJKJK', '9876543200', 2, 4, 0, 0, 1),
(15, 5, 111114, '', '', 54, 'Sealdah', 'Bardman', 0, 'No', '1st Ac', '2019-05-10 12:16:50', 'Shroddha Kapur', '29', 'Voter', '234KJKJK', '9876543200', 2, 2, 3, 2, 0),
(16, 6, 111112, '', '', 63, 'Sealdah', 'Chapra', 0, 'No', '1st Ac', '2019-05-10 13:25:32', 'Rishu Pandey', '343', 'Voter', 'xfvfxbcc', '9993333332', 4, 3, 0, 2, 1),
(17, 7, 111114, '17/5/2019', '', 48, 'Bandal', 'RamPur', 0, 'No', '1st Ac', '2019-05-10 16:25:54', 'Ambalika Gosh', '22', 'Voter', 'RTE1234', '9007846840', 2, 1, 2, 3, 1),
(18, 8, 111114, '24/5/2019', '', 120, 'Sealdah', 'Azamghar', 0, 'Yes', '1st Ac', '2019-05-10 20:50:55', 'groot Groot', '77', 'Voter', 'grootgroot', '8772321321', 5, 5, 5, 5, 0),
(19, 8, 111114, '', '', 30, 'Bardman', 'Sealdah', 0, 'Yes', '1st Ac', '2019-05-10 20:51:43', 'groot Groot', '88', 'Voter', 'grootgroot', '8772321321', 3, 2, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trainbookingtatkal`
--

CREATE TABLE `trainbookingtatkal` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `trainId` int(11) NOT NULL,
  `dateOfTravel` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fromStation` varchar(255) NOT NULL,
  `toSation` varchar(255) NOT NULL,
  `rac` int(11) NOT NULL,
  `food` varchar(20) NOT NULL,
  `pet` int(11) NOT NULL,
  `seatPosition` varchar(255) NOT NULL,
  `seatCondition` varchar(255) NOT NULL,
  `timeOfBooking` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passsengerName` varchar(255) NOT NULL,
  `passsengerage` varchar(255) NOT NULL,
  `passsengerIdValType` varchar(255) NOT NULL,
  `passsengerIdValNumber` varchar(255) NOT NULL,
  `passsengercontact` varchar(255) NOT NULL,
  `passsengeraddr` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainBookingtrash`
--

CREATE TABLE `trainBookingtrash` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `trainId` int(11) NOT NULL,
  `dateOfTravel` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `fromStation` varchar(255) NOT NULL,
  `toSation` varchar(255) NOT NULL,
  `rac` int(11) NOT NULL,
  `food` varchar(20) NOT NULL,
  `pet` int(11) NOT NULL,
  `seatPosition` varchar(255) NOT NULL,
  `seatCondition` varchar(255) NOT NULL,
  `timeOfBooking` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `passsengerName` varchar(255) NOT NULL,
  `passsengerage` varchar(255) NOT NULL,
  `passsengerIdValType` varchar(255) NOT NULL,
  `passsengerIdValNumber` varchar(255) NOT NULL,
  `passsengercontact` varchar(255) NOT NULL,
  `passsengeraddr` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trainList`
--

CREATE TABLE `trainList` (
  `id` int(11) NOT NULL,
  `tNo` varchar(255) NOT NULL,
  `tName` varchar(255) NOT NULL,
  `traindestFrom` varchar(255) NOT NULL,
  `traindestTo` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `leavetime` varchar(10) NOT NULL,
  `destTime` varchar(10) NOT NULL,
  `seatAvlForBooking` int(10) NOT NULL,
  `CurrentAvlTkt` int(10) NOT NULL,
  `trainAvalDate` varchar(255) NOT NULL,
  `quota` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cupon` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `birthDate` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL DEFAULT 'INDIA',
  `phone` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `securityQuestion` varchar(255) NOT NULL,
  `SecQusAns` varchar(255) NOT NULL,
  `marriedStatus` varchar(255) NOT NULL,
  `loginDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userIp` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `fomcompleate` int(11) DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'user.png',
  `idcardType` varchar(255) NOT NULL,
  `idCardNum` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL DEFAULT 'Enter Work',
  `bio` varchar(255) NOT NULL DEFAULT 'Add A Bio',
  `paymentCardType` varchar(255) NOT NULL DEFAULT 'Add a Card',
  `paymentCardNumber` varchar(20) NOT NULL DEFAULT '0000 0000 0000 0000',
  `exp` varchar(255) NOT NULL DEFAULT 'mm/yy',
  `wallet` int(11) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lastname`, `birthDate`, `address`, `city`, `state`, `country`, `phone`, `userName`, `email`, `password`, `securityQuestion`, `SecQusAns`, `marriedStatus`, `loginDate`, `userIp`, `gender`, `fomcompleate`, `photo`, `idcardType`, `idCardNum`, `work`, `bio`, `paymentCardType`, `paymentCardNumber`, `exp`, `wallet`) VALUES
(3, 'Kajal', 'Aggarwal', '1985-06-18', 'Mumbai', 'Mumbai', 'Maharashtra', 'INDIA', '9992321321', 'kajal', 'kajal@gmail.com', 'Kajal123@', 'Favorite food', 'qweqweqwewq', 'wqeqwewee', '2019-05-04 18:32:25', '127.0.0.1', 'Female', 1, '156e20ad9933e50092bad6fd14d5ddb7.png', 'Voter', 'FAC53535', 'actor', 'Add A Bio', 'Visa', '4657445345344', '11/19', 61),
(4, 'groot', 'Groot', '1994-03-10', 'Galaxy', 'Groot', 'Not earth', 'INDIA', '7321321555', 'groot', 'groot@gmail.com', 'Aa1234@@', 'Favorite food', 'groot', 'Single', '2019-05-08 17:16:34', '127.0.0.1', 'Male', 1, 'a3c25798cd2fbb68cee8193be86bfad7.jpg', 'Voter', 'sdgfsdgfsdfgsdf', 'Enter Work', 'I am groot', 'Visa', 'Single', '11/22', 100),
(5, 'Shroddha', 'Kapur', '1998-04-05', 'Delhi', 'Delhi', 'Delhi', 'INDIA', '9876543200', 'shroddha', 'shroddha@gmail.com', 'Shroddha123@', 'Favorite food', 'mango', 'Singel', '2019-05-10 11:58:14', '127.0.0.1', 'Female', 1, 'c293487812eef545df064efafe201e8f.jpeg', 'Voter', '234KJKJK', 'Enter Work', 'Add A Bio', 'Visa', 'Singel', '11/22', 164);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bugreport`
--
ALTER TABLE `bugreport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacus`
--
ALTER TABLE `contacus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `important`
--
ALTER TABLE `important`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainBookingNormal`
--
ALTER TABLE `trainBookingNormal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trainList`
--
ALTER TABLE `trainList`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacus`
--
ALTER TABLE `contacus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `important`
--
ALTER TABLE `important`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trainBookingNormal`
--
ALTER TABLE `trainBookingNormal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `trainList`
--
ALTER TABLE `trainList`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
