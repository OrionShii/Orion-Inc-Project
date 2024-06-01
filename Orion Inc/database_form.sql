-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 11:02 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_form`
--

-- --------------------------------------------------------

--
-- Table structure for table `databse_table`
--

CREATE TABLE `databse_table` (
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databse_table`
--

INSERT INTO `databse_table` (`First_name`, `Last_name`, `Email`, `Mobile`) VALUES
('okky', 'shii', 'yahaha@gmail.com', '08129994251'),
('okky', 'shii', 'yahaha@gmail.com', '08129994251'),
('Rizal', 'Lele', 'RizalKeturuan@gmail.com', '0884141251'),
('herhrhhhdhr', 'hhsrzhshsh', 'rzh@gmail.com', '6727427'),
('Ibkahhh', 'Nilaa', 'Yahuuuuuu@gmail.com', '93724724'),
('jananan', 'ywhwszhsrzhzhz', 'gfawgasegbb@gmail.com', '4515367'),
('Orion', 'yoooo', 'ataaa@gmail.com', '14415361'),
('Manrpooo', 'gbhertjrsjt35y35', 'bcscbsancab@gmail.com', '13666247'),
('okky', 'ataaa', 'agaga@gmail.com', '14215'),
('Okky', 'yahaha', 'okky@gmail.com', '153616');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
