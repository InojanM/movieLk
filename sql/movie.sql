-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 03:27 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie.lk`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(6) NOT NULL,
  `movie_name` varchar(20) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `img_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `movie_name`, `lang`, `release_date`, `img_url`) VALUES
(1, 'Sarkar', 'tamil', '2018-12-12', 'Sarkar.jpg'),
(2, 'Petta', 'Tamil', '2019-01-23', 'petta.jpg'),
(3, 'Viswasam', 'Tamil', '2019-02-08', 'visuwasam.jpg'),
(4, 'Hindi Movie', 'Hindi', '2019-01-10', 'hindi.jpg'),
(5, 'Aquaman', 'English', '2019-01-30', 'aqua_man.jpg'),
(6, 'Simpa', 'Tamil', '2019-01-25', 'simpa.jpg'),
(7, '100% Kadhal', 'Tamil', '2019-02-14', 'kathal.jpg'),
(12, 'new movie', 'Tamil', '2019-02-05', 'simpa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
