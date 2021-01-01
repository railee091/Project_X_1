-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 02:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

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
(5, 'test', 'test', 'e@e.com', 'test', '2021-12-31', '123123123', '$2y$10$RGWWbww.qZsH5zPPZ0tK1.aBD9/n9MvwhwGOT.dwpljYqSErGgRcm', 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
