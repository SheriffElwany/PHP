-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 10:44 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_password`) VALUES
(1, 'tifa', '011');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `phone` varchar(13) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `counrty` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `chek_in` date DEFAULT NULL,
  `check_out` date DEFAULT NULL,
  `adult` int(5) DEFAULT NULL,
  `child` int(5) DEFAULT NULL,
  `requirment` varchar(255) DEFAULT NULL,
  `deposite` varchar(255) DEFAULT NULL,
  `totall_cost` int(10) DEFAULT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `rooms_amount` int(12) DEFAULT NULL,
  `full_days` int(55) DEFAULT NULL,
  `kk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `first_name`, `last_name`, `phone`, `email`, `counrty`, `city`, `area`, `street`, `chek_in`, `check_out`, `adult`, `child`, `requirment`, `deposite`, `totall_cost`, `payment_method`, `rooms_amount`, `full_days`, `kk`) VALUES
(1, '55', '5', '2147483647', '55', '5', '5', '5', '5 ', '2018-09-04', '2018-09-24', 2, 9, '5', '148.5', 19800, '5', 15, 20, NULL),
(2, '', '', '', '', '', '', '', ' ', '2018-09-12', '2018-09-18', 2, 8, '', '544.5', 21780, '', 55, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `view` varchar(255) NOT NULL,
  `capacity` int(20) NOT NULL,
  `price` int(15) NOT NULL,
  `image` varchar(255) NOT NULL,
  `room_numbers` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `description`, `view`, `capacity`, `price`, `image`, `room_numbers`) VALUES
(10, '66', '6', '6', 6, 66, 'image.jpeg', 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
