-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2023 at 09:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `email`, `psword`, `registration_date`) VALUES
(1, 'John Lyrick', 'Jonson', 'graisney@gmail.com', 'mypassword', '2023-09-18 13:30:00'),
(2, 'Bruce Krent', 'Grayson', 'brucekent28@yahoo.com', 'yourpassword', '2023-09-14 07:36:27'),
(3, 'Peteah', 'Pahkah', 'britishpeterparker@gmail.com', 'bottawatta', '2023-09-18 04:20:19'),
(4, 'Tony Tan', 'Caktiong', 'bida_ang_saya100@gmail.com', 'jabee23', '2023-09-17 03:21:10'),
(5, 'Hill', 'Bates', 'impostor_gates@gmail.com', 'sheesh', '2023-10-02 03:13:16'),
(6, 'Feed', 'Widow', 'roomba20@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-10-02 15:17:46'),
(7, 'Captain', 'Iron Man', 'marvel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-10-02 15:25:09');

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
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
