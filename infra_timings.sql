-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2020 at 08:08 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `infra_timings`
--

CREATE TABLE `infra_timings` (
  `id` int(11) NOT NULL,
  `infra_id` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `monday_from` varchar(255) NOT NULL,
  `monday_to` varchar(255) NOT NULL,
  `tuesday_from` varchar(255) NOT NULL,
  `tuesday_to` varchar(255) NOT NULL,
  `wednesday_from` varchar(255) NOT NULL,
  `wednesday_to` varchar(255) NOT NULL,
  `thursday_from` varchar(255) NOT NULL,
  `thursday_to` varchar(255) NOT NULL,
  `friday_from` varchar(255) NOT NULL,
  `friday_to` varchar(255) NOT NULL,
  `saturday_from` varchar(255) NOT NULL,
  `saturday_to` varchar(255) NOT NULL,
  `sunday_from` varchar(255) NOT NULL,
  `sunday_to` varchar(255) NOT NULL,
  `sport_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infra_timings`
--
ALTER TABLE `infra_timings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infra_timings`
--
ALTER TABLE `infra_timings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
