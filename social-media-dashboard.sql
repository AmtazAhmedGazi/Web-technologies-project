-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2025 at 07:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social-media-dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '123', 'alamin@aiub.edu'),
(2, 'abc', '321', 'xyz@aiub.edu'),
(3, 'xyz', '123', 'abc@aiub.edu'),
(4, 'xyz', '123', 'abc@aiub.edu'),
(5, 'AIUB', 'AIUB', 'aiub@aiub.edu'),
(6, 'AIUB', 'AIUB', 'aiub@aiub.edu'),
(7, 'AIUB', 'AIUB', 'aiub@aiub.edu'),
(8, 'XYZ', '123', 'xyz@gmail.com'),
(9, 'amtaz', '12345678Aa', 'amtazahmed10@gmail.com'),
(13, 'gazi', '12345678Aa', 'amtazahmed@gmail.com'),
(14, 'ahmed', '12345678Aa', 'amtazahmedgazi@gmail.com'),
(17, 'amtazahmed', '123456Aa', 'amtazahmed3@gmail.com'),
(18, 'amtazahmeda', '123456Aa', 'amtazahmed4@gmail.com'),
(19, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
