-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2022 at 05:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mbasy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login_user`
--

CREATE TABLE `admin_login_user` (
  `user_id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login_user`
--

INSERT INTO `admin_login_user` (`user_id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`user_id`, `name`, `email`, `subject`, `description`, `date_time`) VALUES
(76, 'jaffar', 'muhammadjaffar00722@gmail.com', 'ilike it', 'ilike it', '2022-07-31 23:52:49'),
(77, 'rana jaffar', 'rana@gamil.com', 'i like this room', 'sir ilike this room we want this room  we want this room ', '2022-09-03 18:21:52'),
(78, 'Front end development', 'Example@gamil.com', 'math', 'il lkike iasdjfadsf', '2022-09-03 18:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `facilities_id` int(11) NOT NULL,
  `facilities_name` varchar(100) NOT NULL,
  `facilities_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`facilities_id`, `facilities_name`, `facilities_image`) VALUES
(60, 'shampoo', 'img/facilities/shampoo icon.png'),
(61, 'Hair Dryer', 'img/facilities/hair-dryer.png'),
(62, 'gym', 'img/facilities/dumbbell.png'),
(63, 'Washer', 'img/facilities/washer.png'),
(64, 'wifi', 'img/facilities/wifi.png'),
(65, 'internet', 'img/facilities/internet.png');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `price` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `default_image` varchar(200) NOT NULL,
  `slider_image1` varchar(200) NOT NULL,
  `slider_image2` varchar(200) NOT NULL,
  `slider_image3` varchar(200) NOT NULL,
  `guests` int(2) NOT NULL,
  `beds` int(2) NOT NULL,
  `bedrooms` int(2) NOT NULL,
  `bathrooms` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `title`, `address`, `price`, `description`, `default_image`, `slider_image1`, `slider_image2`, `slider_image3`, `guests`, `beds`, `bedrooms`, `bathrooms`) VALUES
(43, 'luxury room apartment 1', 'pakistan, lahore', '400rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/room1.jpg', 'img/slider/room2.jpg', 'img/slider/room3.jpg', 'img/slider/room4.jpg', 2, 2, 1, 1),
(44, 'luxury room apartment 2', 'pakistan, lahore, johar town, street 5b.', '5100rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/room14.jpg', 'img/slider/room1.jpg', 'img/slider/service_3.jpg', 'img/slider/room13.jpg', 5, 3, 2, 1),
(45, 'luxury room apartment 3', 'pakistan, lahore, New Shadbagh, street9b', '3500rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/room6.jpg', 'img/slider/room7.jpg', 'img/slider/slider-4.jpg', 'img/slider/slider-2.jpg', 3, 2, 1, 2),
(46, 'luxury room apartment 4', 'pakistan, lahore, shadbagh, street1b, office43', '600rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/service_1.jpg', 'img/slider/service_2.jpg', 'img/slider/service_3.jpg', 'img/slider/room13.jpg', 2, 1, 1, 1),
(47, 'luxury room apartment 5', 'pakistan, lahore, shadbagh, street8b, office663', '1400rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/room7.jpg', 'img/slider/room11.jpg', 'img/slider/room12.jpg', 'img/slider/room9.jpg', 2, 1, 1, 1),
(48, 'luxury room apartment 6', 'pakistan, lahore, shadbagh, street5b, office263', '5000rs', 'I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.I have put some examples below: I like the living room because it is usually quiet and I can just lie on the sofa and relax, read a book or listen to music. I like our living room because it is so airy and light. It feels very bright in the room.', 'img/default-room-image/service_1.jpg', 'img/slider/room14.jpg', 'img/slider/service_3.jpg', 'img/slider/room6.jpg', 5, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login_user`
--
ALTER TABLE `admin_login_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`facilities_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login_user`
--
ALTER TABLE `admin_login_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `facilities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
