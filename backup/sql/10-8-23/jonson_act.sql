-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 12:48 PM
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
  `registration_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(7, 'Captain', 'Iron Man', 'marvel@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-10-02 15:25:09'),
(8, 'Rozo', 'Boromoa', 'pirateh_hunteh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2023-10-03 10:39:29'),
(9, 'Another', 'One', 'djKHALEED@yahoo.ca', '81dc9bdb52d04dc20036dbd8313ed055', '2023-10-03 10:55:30'),
(10, 'Gol', 'Roger', 'king@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2023-10-08 00:43:57'),
(11, 'Monkey', 'Luffy', 'kingofPirates@gmail.com', '25d55ad283aa400af464c76d713c07ad', '2023-10-08 18:04:04'),
(12, 'aslkv', 'alsknskw', 'amo@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '2023-10-08 18:12:55'),
(13, 'Dain', 'Slief', 'guardian@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '2023-10-08 18:20:54'),
(14, 'Lumine', 'Heartheart', 'lumine@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '2023-10-08 18:33:39'),
(15, 'Aether', 'Lablab', 'aeether@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '2023-10-08 18:34:07'),
(16, 'tim', 'lee', 'dubdubdub@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '2023-10-08 18:45:44');

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
  MODIFY `user_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
