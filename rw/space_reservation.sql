-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 09:01 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `space_reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `complain` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `email`, `complain`) VALUES
(2, 'weasdf', 'asfe@gmail.com', 'daaaedae');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `card_number` varchar(20) NOT NULL,
  `exp_month` tinyint NOT NULL,
  `expire_date` year NOT NULL,
  `cvv` varchar(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `username`, `email`, `address`, `city`, `state`, `card_number`, `exp_month`, `expire_date`, `cvv`, `created_at`) VALUES
(2, 'sahan', 'sahan@gmail.com', 'sahan123', 'kurunegala', 'Kurunegala', '1234567890', 5, '2026', '345', '2024-10-05 02:44:07'),
(3, 'hellow', 'hellow@gmail.com', 'hello123', 'kurunegala', 'kandy', '1234567890', 3, '2024', '345', '2024-10-05 04:00:41'),
(4, 'hhh', 'hhh@gmail.com', 'hhhh', 'kurunegala', 'colombo', '1234567890', 2, '2025', '234', '2024-10-05 04:02:09'),
(5, 'sahan', 'asfe@gmail.com', 'sahan123', 'kurunegala', 'Kurunegala', '1234567890', 3, '2024', '345', '2024-10-05 04:06:13'),
(6, 'sahaneee', 'asfe@gmail.com', 'sahan123', 'kurunegala', 'Kurunegala', '1234567890', 3, '2024', '345', '2024-10-05 04:06:16'),
(7, 'aaaaaaaaa', 'aaaaa@gmail.com', 'aaaaaaaa', 'aaaaaaaa', 'Colombo', '77777', 10, '2026', '9999', '2024-10-05 04:50:03');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int NOT NULL,
  `reservationId` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `vehicleType` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `time` time NOT NULL,
  `duration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `reservationId`, `name`, `email`, `phone`, `vehicleType`, `date`, `time`, `duration`) VALUES
(1, 2, 'weasdf', 'asfe@gmail.com', '0704320', 'e', '2024-10-24 00:00:00', '07:36:00', 2),
(2, 1, 'wer', 'sahan@gmail.com', '0733542222', 'toyota', '2024-10-26 00:00:00', '08:40:00', 7),
(3, 1, 'weasdf', 'asfe@gmail.com', '0774746333', 'e', '2024-10-28 00:00:00', '09:53:00', 2),
(6, 4, 'bbbb', 'cccc@gmail.com', '5455545555', 'ggydydkkk', '2024-10-15 00:00:00', '12:51:00', -6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `nic` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `phone_num` varchar(15) DEFAULT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `email`, `password`, `lastname`, `nic`, `dob`, `phone_num`, `company_name`, `created_at`) VALUES
(7, 'dilusha', 'dilusha@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2024-10-05 15:40:25'),
(8, 'helow', 'helow@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2024-10-05 16:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
