-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 05:04 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `functions`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_values`
--

CREATE TABLE `data_values` (
  `id` int(11) NOT NULL,
  `value` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_values`
--

INSERT INTO `data_values` (`id`, `value`) VALUES
(1, 10.50),
(2, 20.30),
(3, 15.70),
(4, 18.20),
(5, 12.80),
(6, 22.10);

-- --------------------------------------------------------

--
-- Table structure for table `sample_dates`
--

CREATE TABLE `sample_dates` (
  `id` int(11) NOT NULL,
  `event_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample_dates`
--

INSERT INTO `sample_dates` (`id`, `event_date`) VALUES
(1, '2023-01-15'),
(2, '2023-03-25'),
(3, '2023-05-10'),
(4, '2023-07-08'),
(5, '2023-09-18'),
(6, '2023-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `sample_strings`
--

CREATE TABLE `sample_strings` (
  `id` int(11) NOT NULL,
  `text_value` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sample_strings`
--

INSERT INTO `sample_strings` (`id`, `text_value`) VALUES
(1, 'Hello,'),
(2, 'This is a sample string.'),
(3, '   Some text with spaces.   '),
(4, 'Here we go!'),
(5, 'ANOTHER STRING'),
(6, '   Trim leading and trailing spaces   ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_values`
--
ALTER TABLE `data_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_dates`
--
ALTER TABLE `sample_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_strings`
--
ALTER TABLE `sample_strings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_values`
--
ALTER TABLE `data_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sample_dates`
--
ALTER TABLE `sample_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sample_strings`
--
ALTER TABLE `sample_strings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
