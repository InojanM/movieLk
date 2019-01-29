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
-- Table structure for table `playing_movies`
--

CREATE TABLE `playing_movies` (
  `id` int(10) NOT NULL,
  `movie_id` int(10) NOT NULL,
  `theater_id` int(10) NOT NULL,
  `show_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `playing_movies`
--

INSERT INTO `playing_movies` (`id`, `movie_id`, `theater_id`, `show_time`) VALUES
(3, 1, 2, '2019-01-22 05:00:00'),
(4, 2, 1, '2019-01-22 12:30:00'),
(5, 6, 3, '2019-01-23 04:30:00'),
(11, 1, 4, '0000-00-00 00:00:00'),
(12, 6, 1, '0000-00-00 00:00:00'),
(13, 7, 2, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `playing_movies`
--
ALTER TABLE `playing_movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `playing_movies`
--
ALTER TABLE `playing_movies`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
