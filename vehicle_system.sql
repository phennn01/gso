-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2026 at 02:27 AM
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
-- Database: `vehicle_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `trip_tickets`
--

CREATE TABLE `trip_tickets` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `destination` varchar(100) DEFAULT NULL,
  `date_departure` date DEFAULT NULL,
  `time_departure` time DEFAULT NULL,
  `time_arrival` time DEFAULT NULL,
  `passengers` int(11) DEFAULT NULL,
  `purpose` text DEFAULT NULL,
  `fuel_issued` float DEFAULT NULL,
  `fuel_purchased` float DEFAULT NULL,
  `fuel_balance` float DEFAULT NULL,
  `mileage_start` int(11) DEFAULT NULL,
  `mileage_end` int(11) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `remarks` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trip_tickets`
--

INSERT INTO `trip_tickets` (`id`, `fullname`, `department`, `destination`, `date_departure`, `time_departure`, `time_arrival`, `passengers`, `purpose`, `fuel_issued`, `fuel_purchased`, `fuel_balance`, `mileage_start`, `mileage_end`, `distance`, `remarks`, `created_at`) VALUES
(1, 'earl', '', '', '0000-00-00', '00:00:00', '00:00:00', 0, '', 0, 0, 0, 0, 0, 0, '', '2026-04-02 11:39:25'),
(2, 'ear', 's', 's', '1111-11-11', '11:11:00', '11:11:00', 11, '1\r\n1\r\n1\r\n', 1, 0, 0, 0, 0, 0, '', '2026-04-02 11:58:26'),
(3, 'ear', 'ict', 's', '1111-11-11', '14:02:00', '11:11:00', 11, 'scret', 1, 1, 0, 0, 0, 0, '', '2026-04-03 06:47:46'),
(4, 'jkhdjhsgd', 'dfefeferrerer', 'erfewre', '1111-02-22', '11:11:00', '11:11:00', 11, 'wkjhdewjiehd\r\n', 2121, 0, 0, 0, 0, 0, '', '2026-04-03 07:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` int(225) NOT NULL,
  `password` int(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(1341, 0, 87654321),
(2147483647, 0, 12345678);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trip_tickets`
--
ALTER TABLE `trip_tickets`
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
-- AUTO_INCREMENT for table `trip_tickets`
--
ALTER TABLE `trip_tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
