-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 09:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `the_peninsula`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `no_of_adult` int(11) NOT NULL,
  `no_of_child` int(11) NOT NULL,
  `booking_status` int(11) NOT NULL DEFAULT 1 COMMENT '1=pending, 2=confirmed,\r\n3=claimed\r\n4=canceled',
  `booking_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `email`, `phone`, `room_type`, `checkin`, `checkout`, `no_of_adult`, `no_of_child`, `booking_status`, `booking_date`) VALUES
(2, 'Tonny', 'tonny@gmail.com', '12435346', 'Deluxe', '2021-09-30', '2021-10-02', 1, 0, 1, '2021-09-26 00:00:00'),
(3, 'Sanjida Aziz Tonny', 'sunjidaaziz58@gmail.com', '23647568', 'Executive Twin', '2021-02-18', '2021-03-15', 1, 0, 1, '2021-09-26 22:37:06');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `serial_no` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `contact_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`serial_no`, `name`, `email`, `phone`, `message`, `contact_date`) VALUES
(2, 'Tonny', 'tonny@gmail.com', '29557283', 'My first msg', '2021-09-24 17:14:44'),
(3, 'Sanjida Aziz', 'sanjidaaziz@gmail.com', '23455455555555555555', 'hello world', '2021-09-24 17:15:50'),
(4, 'Fahmida', 'fahmida@gmail.com', '123456', 'License verification needed. Contact immediately.', '2021-09-24 17:41:59'),
(5, 'Baker', 'baker@gmail.com', '3253267', 'Hawa me urta jaye mera lal dupatta mal mal ki\r\no ji o ji', '2021-09-26 21:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `available` int(11) NOT NULL,
  `size` int(11) NOT NULL COMMENT 'in square feet',
  `rate` int(11) NOT NULL COMMENT 'per night'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `available`, `size`, `rate`) VALUES
(1, 'Deluxe', 50, 265, 9500),
(2, 'Super Deluxe', 20, 350, 10500),
(3, 'Executive Twin', 34, 375, 9000),
(4, 'Luxury Suite', 18, 870, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_phone` varchar(25) NOT NULL,
  `user_password` text NOT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `activation_code`, `status`, `created_date`) VALUES
(1, 'Sanjida Aziz Tonny', 'sunjidaaziz58@gmail.com', '01639876543', '827ccb0eea8a706c4c34a16891f84e7b', NULL, 1, '2021-09-21 20:02:46'),
(4, 'abc de', 'abcde@gmail.com', '234', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 1, '2021-09-23 21:28:56'),
(5, 'Fahmida', 'fahmida@gmail.com', '3253267', '202cb962ac59075b964b07152d234b70', NULL, 1, '2021-09-23 21:43:36'),
(6, 'a b', 'a@gmail.com', '3253267', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 1, '2021-09-24 15:55:09'),
(9, 'Tonny', 'tonny@gmail.com', '123', '202cb962ac59075b964b07152d234b70', NULL, 1, '2021-09-24 16:15:55'),
(10, 'Aurnobb', 'aurnob@gmail.com', '01926880669', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 1, '2021-09-26 22:40:33'),
(11, 'karimm', 'karim@gmail.com', '123', 'd41d8cd98f00b204e9800998ecf8427e', NULL, 1, '2021-09-26 23:23:47'),
(12, 'proma', 'proma@gamil.com', '234554', '202cb962ac59075b964b07152d234b70', NULL, 1, '2021-09-27 03:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
