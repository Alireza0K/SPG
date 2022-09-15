-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2022 at 11:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `SPG_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_ip`
--

CREATE TABLE `user_ip` (
  `User` varchar(123) NOT NULL,
  `Password` varchar(145) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ip`
--

INSERT INTO `user_ip` (`User`, `Password`) VALUES
('192.132.12.51', 'biQ34D!\r\n'),
('192.132.12.51', 'biQ34D!\r\n'),
('123.12.34.72', '7dp054mv1aqz'),
('127.0.0.1', ']01*43(12&{9'),
('127.0.0.1', 'z(4!5-x+j}%d'),
('127.0.0.1', 'l}<u=96)%8'),
('127.0.0.1', 'dla%e97r*='),
('127.0.0.1', '(wx)ne_&52t*1h$r'),
('127.0.0.1', 'p$r}%dk5u>-8n74');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
