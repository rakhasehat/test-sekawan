-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2020 at 07:49 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes-sekawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `employee_name` varchar(255) NOT NULL,
  `employee_salary` int(11) NOT NULL,
  `employee_age` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `employee_name`, `employee_salary`, `employee_age`, `profile_image`) VALUES
(1, 'Tiger Nixon', 320800, 61, ''),
(2, 'Garrett Winters', 170750, 63, ''),
(3, 'Ashton Cox', 86000, 66, ''),
(4, 'Cedric Kelly', 433060, 22, ''),
(5, 'Airi Satou', 162700, 33, ''),
(6, 'Brielle Williamson', 372000, 61, ''),
(7, 'Herrod Chandler', 137500, 59, ''),
(8, 'Rhona Davidson', 327900, 55, ''),
(9, 'Colleen Hurst', 205500, 39, ''),
(10, 'Sonya Frost', 103600, 23, ''),
(11, 'Jena Gaines', 90560, 30, ''),
(12, 'Quinn Flynn', 342000, 22, ''),
(13, 'Tes', 20103, 23, ''),
(14, 'Tes', 230192, 23, ''),
(15, 'Teslagi', 23103, 23, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
