-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:56 AM
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
-- Database: `jonson_act`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` mediumint(6) UNSIGNED NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `psword` char(40) NOT NULL,
  `registration_date` datetime DEFAULT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `psword`, `registration_date`, `user_level`) VALUES
(1, 'John Lyrick', 'Jonson', 'lyrickjonson@gmail.com', '1bbd886460827015e5d605ed44252251', '2023-10-10 08:46:07', 1),
(2, 'Violet', 'Evergarden', 'watashi_nande@gmail.com', '1bbd886460827015e5d605ed44252251', '2023-10-10 09:37:22', 0),
(3, 'Gol', 'Roger', 'king@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '2023-10-10 10:38:06', 0),
(4, 'Himeko', 'Murata', 'chapter10@gmail.com', '1bbd886460827015e5d605ed44252251', '2023-10-15 09:24:32', 0),
(5, 'Dub', 'Hai', 'midd@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2023-10-15 12:03:52', 0),
(6, 'Troy', 'Cooker', 'chef@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '2023-10-15 14:52:58', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
