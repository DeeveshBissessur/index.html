-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 06:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymshark1`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_Id` int(6) NOT NULL,
  `Product_Name` text NOT NULL,
  `Product_Details` text NOT NULL,
  `Price` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_Id`, `Product_Name`, `Product_Details`, `Price`) VALUES
(100, 'Whey Protein Powder', 'High quality whey, suitable for muscle growth and development. Can come In vanilla or chocolate flavor.', '2000.0'),
(129, 'Gloves', 'Professional gym gloves. Prevents friction and slippery hands that can lead to injuries.', '800.00'),
(10013, 'Hoodie', 'Sleeveless hoodie that can be worn when working out. Option with full sleeve also available.', '400'),
(210301, 'Duffle Bag', 'High capacity duffle bag, ideal to carry on all your required equipments.', '800.00'),
(10883, 'Water Bottle', 'Water bottle, high capacity ideal.', '500');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
