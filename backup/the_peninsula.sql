-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 02:34 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `section` varchar(255) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `about_photo` varchar(255) DEFAULT NULL,
  `link/embed` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `section`, `description`, `about_photo`, `link/embed`) VALUES
(1, 'about_us_info', 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.<br><br>\r\n\r\n								It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself', 'about.jpg', NULL),
(2, 'management_info', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.<br><br>\r\n\r\nNulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,', 'management.jpg', NULL),
(3, 'developer_info', 'This website is developed by Sanjida Aziz Tonny, student of Ahsanullah University of science & Technology.<br><br>\r\n\r\nHTML, CSS, PHP, Bootstrap, JAVASCRIPT, mysql languages and also Bootstrap classes has been used here.<br><br>\r\nFor any query contact bellow.   ', 'developer.jpg', NULL),
(4, 'map_link', NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14940366.991247173!2d98.54157469974159!3d23.905551775976406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sthe%20peninsula%20hotels!5e0!3m2!1sen!2sbd!4v1633020922210!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
(5, 'youtube_link', NULL, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/0Wl706NCJ-M\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

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
(3, 'Sanjida Aziz Tonny', 'sunjidaaziz58@gmail.com', '23647568', 'Executive Twin', '2021-02-18', '2021-03-15', 1, 0, 1, '2021-09-26 22:37:06'),
(4, 'Abdullah', 'abdullah@gmail.com', '23647568', 'Super Deluxe', '2021-10-02', '2021-10-03', 1, 2, 1, '2021-10-02 21:41:05'),
(5, 'Vijay Salgaonkar', 'vijay@gmail.com', '12345678', 'Executive Twin', '2021-10-02', '2021-10-03', 2, 2, 1, '2021-10-02 22:14:47'),
(6, 'abcd ab', 'abcd@gmail.com', '3287528', 'Suite', '2021-10-09', '2021-10-11', 2, 0, 1, '2021-10-02 22:26:48');

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
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL COMMENT '1=deluxe\r\n21=pool\r\n22=meeting room\r\n23=food\r\n24=spa\r\n25=party hall\r\n>30 others\r\n2=super deluxe\r\n3=executive twine\r\n4=suite',
  `image_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `category_id`, `image_name`) VALUES
(2, 1, 'deluxe2.jpg'),
(3, 1, 'deluxe3.jpg'),
(4, 1, 'deluxe4.jpg'),
(5, 2, 'sd1.jpg'),
(6, 2, 'sd2.jpg'),
(7, 2, 'sd3.jpg'),
(8, 2, 'sd4.jpg'),
(9, 2, 'sd5.jpg'),
(10, 3, 'et1.jpg'),
(11, 3, 'et2.jpg'),
(12, 3, 'et3.jpg'),
(13, 3, 'et4.jpg'),
(14, 3, 'et5.jpg'),
(15, 4, 'suite1.jpg'),
(16, 4, 'suite2.jpg'),
(17, 4, 'suite3.jpg'),
(18, 4, 'suite4.jpg'),
(19, 21, 'pool4.jpg'),
(20, 21, 'pool2.jpg'),
(21, 21, 'pool3.jpg'),
(22, 22, 'meeting.jpg'),
(23, 22, 'meeting2.jpg'),
(24, 23, 'food2.jpg'),
(25, 23, 'dine.jpg'),
(26, 21, 'pool1.jpg'),
(27, 21, 'pool5.jpg'),
(28, 23, 'food1.jpg'),
(29, 23, 'food3.jpg'),
(30, 24, 'spa1.jpg'),
(31, 31, 'lobby.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `available` int(11) NOT NULL,
  `size` int(11) NOT NULL COMMENT 'in square feet',
  `rate` int(11) NOT NULL COMMENT 'per night',
  `room_photo` varchar(255) DEFAULT NULL,
  `room_details` varchar(555) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_type`, `available`, `size`, `rate`, `room_photo`, `room_details`) VALUES
(1, 'Deluxe', 50, 265, 9500, 'deluxe.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem'),
(2, 'Super Deluxe', 20, 350, 10500, 'super_deluxe.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem'),
(3, 'Executive Twin', 34, 375, 9000, 'executive_twin.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem'),
(4, 'Luxury Suite', 18, 870, 15000, 'suite.jpg', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_details` varchar(500) NOT NULL,
  `service_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`, `service_details`, `service_photo`) VALUES
(1, 'Rooms/Suites', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.', 'hotel.png'),
(2, 'Food Dine', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.', 'dish.png'),
(3, 'Swiming Pool', 'Li Europan lingues es membres del sam familie. Lor separat existentie es un myth. Por', 'swimming-pool.png'),
(4, 'Spa', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of', 'spa.png'),
(5, 'Meeting Room', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of', 'meeting-room.png');

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
  `user_photo` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `user_password`, `user_photo`, `activation_code`, `status`, `created_date`) VALUES
(1, 'Sanjida Aziz Tonny', 'sunjidaaziz58@gmail.com', '01639876543', '827ccb0eea8a706c4c34a16891f84e7b', NULL, NULL, 1, '2021-09-21 20:02:46'),
(4, 'abc de', 'abcde@gmail.com', '234', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, '2021-09-23 21:28:56'),
(5, 'Fahmida', 'fahmida@gmail.com', '3253267', '202cb962ac59075b964b07152d234b70', NULL, NULL, 1, '2021-09-23 21:43:36'),
(6, 'a b', 'a@gmail.com', '3253267', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, '2021-09-24 15:55:09'),
(9, 'Tonny', 'tonny@gmail.com', '2441139', '202cb962ac59075b964b07152d234b70', 'b54cc90d85f5e331bc2b3e5d188d8133.jpg', NULL, 1, '2021-09-24 16:15:55'),
(10, 'Aurnobb', 'aurnob@gmail.com', '01926880669', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, '2021-09-26 22:40:33'),
(11, 'karimm', 'karim@gmail.com', '123', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, 1, '2021-09-26 23:23:47'),
(12, 'proma', 'proma@gamil.com', '234554', '202cb962ac59075b964b07152d234b70', NULL, NULL, 1, '2021-09-27 03:04:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
