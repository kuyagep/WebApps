-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 05:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webapps_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(100) NOT NULL,
  `token_expire` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `verified` tinyint(4) NOT NULL DEFAULT 0,
  `deleted` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`, `gender`, `dob`, `photo`, `token`, `token_expire`, `created_at`, `verified`, `deleted`) VALUES
(5, 'Geperson Mamalias', 'gepersonm12345@gmail.com', '$2y$10$pu5wa7h1987..eblSrCUL.Yf9KegDKrTyHzhkzQrU/sP2gbU4lhHe', '', '', '', '', '44e6bc0407b0d', '2023-03-02 07:17:55', '2023-03-02 03:41:45', 0, 1),
(6, 'test', 'test@gmail.com', '$2y$10$BNAF5etxnt.Sp2fZLMRYJeHHLACkpNMVdwk6Z4pT.UXoiOFasS.YO', '', '', '', '', '', '2023-03-02 07:30:24', '2023-03-02 07:30:24', 0, 1),
(7, 'test1', 'test1@gmail.com', '$2y$10$o1BG/gThpgu.ijSsCbxX.uEk/4OtrQF4sAGPGsBQvCERgvIi70ZuO', '', '', '', '', '', '2023-03-02 07:31:28', '2023-03-02 07:31:28', 0, 1),
(9, 'Patrick Peresores', 'patrickjohn.peresores@deped.gov.ph', '$2y$10$kmrQ.ipk4WKtEukay9QGouYvKrGwdwSNHU/UJVAp6sA4zILqmSxI6', '', '', '', '', '4b708861e0d8b', '2023-03-03 06:16:51', '2023-03-03 06:05:29', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
