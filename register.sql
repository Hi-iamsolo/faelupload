-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.epizy.com
-- Generation Time: May 11, 2022 at 08:22 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31366105_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(111) NOT NULL,
  `Name` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL,
  `card` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `email`, `password`, `card`) VALUES
(1, 'Nitin-G', 'nitin', 'papa', 981265),
(3, 'Kritya', 'joker', 'cat123', 163828),
(7, 'Shankarshan Thapa', 'shankarshan', 'Donkey00', 129746),
(9, 'Sandesh Khadka', 'sandesh', 'pig12345', 173528),
(10, 'Nishant Shrestha', 'nishan', 'goat12345', 120938),
(11, 'Ishan Roka', 'ishan', 'roka', 163852),
(12, 'Avash Maharjan', 'aavash', 'buffalo123', 182446),
(13, 'Mahek Maharjan', 'mahek', 'gorilla123', 188200),
(14, 'Priyam Shrestha', 'priyam', 'zebra123', 440077),
(15, 'Rahul Nakarmi', 'rahul', 'honey123', 990077),
(16, 'Rikin Tuladhar', 'rikin', 'fish123', 117722),
(17, 'Dipson Shrestha', 'dipson', 'geda123', 552200),
(18, 'Rohan Shahi', 'rohan', 'boka123', 336611),
(19, 'Jitendra Khatri', 'jitendra', 'kira123', 550230),
(20, 'Sanyukta Shrestha', 'sanyukta', 'chicken123', 825432);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
