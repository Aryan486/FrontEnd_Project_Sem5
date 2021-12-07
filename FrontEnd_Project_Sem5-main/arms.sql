-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 07, 2021 at 06:59 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arms`
--

-- --------------------------------------------------------

--
-- Table structure for table `userDet`
--

CREATE TABLE `userDet` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userDet`
--

INSERT INTO `userDet` (`id`, `name`, `email`, `mobile`, `dob`, `password`) VALUES
(2, 'Sameer', 'viplav@thapar.edu', '1111111111', '2021-12-29', '47ee11ca134fc7c3a38660b0dc7fb829'),
(12, 'Viplav Sangrur', 'viplav@thapar.edu', '1111111111', '2021-12-21', '47ee11ca134fc7c3a38660b0dc7fb829'),
(123, 'Aryan', 'Aryan@thapar.edu', '1111111111', '2021-12-23', '47ee11ca134fc7c3a38660b0dc7fb829');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userDet`
--
ALTER TABLE `userDet`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
