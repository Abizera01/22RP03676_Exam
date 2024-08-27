-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 06:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nextech_portal_22rp03676`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(60) NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(15) NOT NULL DEFAULT current_timestamp(),
  `position` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `address` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `email`, `phone`, `position`, `address`) VALUES
(1, 'Christine', 'leebae0n@gmail.com', '0789654321', 'IT Tec', 'Kigali'),
(2, 'Abizera Christine', 'AbizeraJujuMutima@gmail.com', '0792345672', 'Mech Technician', 'Rulindo'),
(3, 'Uwera Olive', 'AbizeraJujuMutima@gmail.com', '0789654321', 'IT Tec', 'Rulindo'),
(4, 'Niyodusenga seven', 'leebae0n@gmail.com', '0792345672', 'IT Tec', 'Kigali'),
(6, 'Uwera Olive', 'AbizeraJujuMutima@gmail.com', '0792345672', 'RE Tech', 'Rwamagana'),
(7, 'Abizera Christine', 'leebae0n@gmail.com', '0789654321', 'RE Tech', 'Rubavu'),
(8, 'Niyonshuti Aime', 'uwabazimanasandrine@gmail.com', '0789654321', 'ETT', 'Rubavu'),
(10, 'Mpano yvan', 'mpano123@gmail.com', '0789654321', 'ETT Mech', 'Muhanga');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Abizera', '123'),
(2, 'Christine', '123'),
(3, 'Admin', '$2y$10$Y/YVxNaAzFujEW2u/rQh.ezPEG7X9iU7qaD819JmxKl5yIcYTnZrS'),
(7, 'uwase', '$2y$10$1gTHbgEzCbBqchG789YSKeyxIvn6q2RWQHXXVR8gRU0PzmLesq876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
