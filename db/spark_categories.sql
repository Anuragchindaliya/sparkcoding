-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2021 at 09:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spark`
--

-- --------------------------------------------------------

--
-- Table structure for table `spark_categories`
--

CREATE TABLE `spark_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spark_categories`
--

INSERT INTO `spark_categories` (`id`, `category`, `timestamp`) VALUES
(1, 'OOPs (C/C++)', '2021-11-24 07:39:03'),
(2, 'Web Developement', '2021-11-24 07:39:03'),
(3, 'App Developement', '2021-11-24 07:39:42'),
(4, 'Cloud Computing', '2021-11-24 07:39:42'),
(5, 'Graphic Designing', '2021-11-24 07:40:19'),
(6, 'Artificial Intelligence', '2021-11-24 07:40:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `spark_categories`
--
ALTER TABLE `spark_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `spark_categories`
--
ALTER TABLE `spark_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
