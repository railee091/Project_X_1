-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 06:01 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inflexion`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount_status`
--

CREATE TABLE `acount_status` (
  `id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `account_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `title` varchar(280) NOT NULL,
  `body` mediumtext NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `tutor_id` int(11) NOT NULL,
  `class_time` time NOT NULL,
  `class_date` date NOT NULL,
  `class_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mail_messages`
--

CREATE TABLE `mail_messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `title` varchar(280) NOT NULL,
  `body` mediumtext NOT NULL,
  `attachment` blob NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsfeed`
--

CREATE TABLE `newsfeed` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `body` mediumtext NOT NULL,
  `date` datetime NOT NULL,
  `archive_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_lastName` varchar(115) NOT NULL,
  `user_firstName` varchar(115) NOT NULL,
  `user_username` varchar(115) NOT NULL,
  `user_address` longtext NOT NULL,
  `user_bdate` date NOT NULL,
  `user_contact` varchar(115) NOT NULL,
  `user_password` varchar(115) NOT NULL,
  `user_type` varchar(115) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_lastName`, `user_firstName`, `user_username`, `user_address`, `user_bdate`, `user_contact`, `user_password`, `user_type`) VALUES
(1, 'Glenn Marlo', 'Dumaguing', 'a@a.com', 'Baguio', '2021-12-31', '123123123123', '$2y$10$uKey6qA9VbLOrWYLf/UScuZ0/Eg/6pLhKaK6CiphKnPHkkQ9jHKcG', 'Student'),
(2, 'test', 'test', 'b@b.com', 'test', '2021-12-31', '123123', '$2y$10$DPEvKm18AMO.JnTq1D/bDO.svFamQKHhmSElUFYNDzbjlcmP6mw0q', 'Student'),
(3, 'test', 'test', 'c@c.com', 'test', '2021-12-31', '123123', '$2y$10$dQ6cymYue45gPSG9cwd0SOV55JWsUbhmGpSvAqO7q4lEH9y354VPK', 'Student'),
(4, 'test', 'test', 'd@d.com', 'test', '2021-12-31', '123123123', '$2y$10$063LkI1hKYVCD3WXAflyq.1eahHC3UZtL48U/3yu7tbU/fuqqVqoC', 'Student'),
(5, 'test', 'test', 'e@e.com', 'test', '2021-12-31', '123123123', '$2y$10$RGWWbww.qZsH5zPPZ0tK1.aBD9/n9MvwhwGOT.dwpljYqSErGgRcm', 'Student'),
(7, 'test', 'test', 'test@email.com', 'test', '1991-09-09', '09186877777', '$2y$10$sGpj/9ntZHBwnJs09rYoE.FvCleM9A.Saodag1cJAzwOWneoD7fgW', 'Student'),
(8, 'test', 'test', 'test2@email.com', 'test', '1991-09-09', '09186877777', '$2y$10$nQrXwt5177FIhhTNt39oreRwpvEFznQS8kvo81NDrv8YXCULrFUJ2', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `users_credit`
--

CREATE TABLE `users_credit` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(280) NOT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_notifications`
--

CREATE TABLE `users_notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `details` varchar(280) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `user_id` int(11) NOT NULL,
  `about` mediumtext DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  `languages` varchar(280) DEFAULT NULL,
  `banner_quote` varchar(280) DEFAULT NULL,
  `banner_tags` varchar(30) DEFAULT NULL,
  `music` mediumtext DEFAULT NULL,
  `movies` mediumtext DEFAULT NULL,
  `hobbies` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount_status`
--
ALTER TABLE `acount_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_messages`
--
ALTER TABLE `mail_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsfeed`
--
ALTER TABLE `newsfeed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_credit`
--
ALTER TABLE `users_credit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_notifications`
--
ALTER TABLE `users_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount_status`
--
ALTER TABLE `acount_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_messages`
--
ALTER TABLE `mail_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsfeed`
--
ALTER TABLE `newsfeed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_credit`
--
ALTER TABLE `users_credit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_notifications`
--
ALTER TABLE `users_notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
