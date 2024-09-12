-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2024 at 11:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `journey_snaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pNumber` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(12) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userName`, `email`, `pNumber`, `address`, `nic`, `password`) VALUES
('Chathura Udayanga', 'chathura@gmail.com', '0701788874', 'Kahanthota, Sri Lanka', '200015426214', '258258'),
('Imasha Randima', 'imasha@gmail.com', '0701785458', 'Athurugiriya, Sri Lanka', '200085445285', '369369'),
('Pramith Fernando', 'pramith@gmail.com', '0777032918', 'Panadura, Sri Lanka', '200025421584', '147147'),
('Vishwa Saranga', 'saranga@gmail.com', '0711075845', 'Malabe, Sri Lanka', '200104602541', '123123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
