-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2022 at 10:25 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentsinfo`
--

CREATE TABLE `studentsinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentsinfo`
--

INSERT INTO `studentsinfo` (`id`, `name`, `email`, `address`, `phone`) VALUES
(21, 'Rohan', 'Rohan123@gmail.com', 'kavre', 2147483647),
(22, 'Harka', 'Harke@gmail.com', 'sangachok', 2147483647),
(26, 'Ranjan Poudel', 'Ranjan2055@gmail.com', 'kavre', 2147483647),
(27, 'Prakash shrestha', 'Prakash2015@gmail.com', 'kavre', 2147483647),
(28, 'Sagar Parajuli', 'Sagar2016@gmail.com', 'Banepa', 987654321),
(31, 'Kaylan Sharma', 'Kaylan2018@gmail.com', 'kathmandu', 2147483647),
(32, 'Suraj', 'Suraj2015@gmail.com', 'Dang', 2147483647),
(33, 'Anuj', 'anuj2018@gmail.com', 'dhang', 980623457),
(34, 'Ashutosh Shah', 'Ashu2015@gmail.com', 'Janakpur', 986723425),
(35, 'Krishana Shah', 'krishana2019@gmail.com', 'kavre', 986856432),
(38, 'Ram K', 'ram2019@gmail.com', 'Darampur', 98765432),
(39, 'Swikar', 'Swikar2018@gmail.com', 'New Baneshower', 98765432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentsinfo`
--
ALTER TABLE `studentsinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentsinfo`
--
ALTER TABLE `studentsinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
