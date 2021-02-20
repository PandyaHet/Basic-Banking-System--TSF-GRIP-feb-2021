-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2021 at 06:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `mini_statement`
--

CREATE TABLE `mini_statement` (
  `sender` varchar(15) NOT NULL,
  `receiver` varchar(15) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Harshal', 'Ajay', 1000),
('Avinash', 'Het', 100),
('Avinash', 'Harshal', 100),
('Rushi', 'Het', 5000),
('Avinash', 'Het', 1000),
('Harshal', 'Avinash', 1000),
('Rushi', 'Avinash', 500),
('Het', 'Vaishali', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Het', 'het@gmail.com', 7600),
('Avinash', 'avinash@gmail.com', 6300),
('Harshal', 'harshal@yahoo.com', 8100),
('Ajay', 'ajay@yahoo.com', 2000),
('Vaishali', 'vaishali@gmail.com', 8500),
('Monika', 'monika123@gmail.com', 10000),
('Rushi', 'rushi12@gmail.com', 19500),
('Nishant', 'nishant@yahoo.com', 15000),
('Ravina', 'ravina@gmail.com', 1000),
('Sonali', 'sonali45@gmail.com', 1000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
