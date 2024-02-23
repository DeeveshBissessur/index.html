-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2024 at 06:24 PM
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
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Staff_ID` int(6) NOT NULL,
  `Surname` varchar NOT NULL,
  `Name` varchar NOT NULL,
  `Description` varchar NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Staff_ID`, `Surname`, `Name`, `Description`) VALUES
(1220, 'Clark', 'Alexia', 'Alexia is an online female fitness coach who provides new daily workouts, nutrition support and direct one to one accountability if you need it. Her goal is for you to feel constantly challenged and stimulated by your workouts. Not just physically, but mentally too. She creates daily challenges to keep motivation high and to promote a sense of community within her “QUEENTEAM”. Membership to the group training programme is extremely affordable, and her social media is full of great ideas that can be incorporated to any at home training plan.\r\n'),
(10334, 'Sheehan', 'Lucas', 'London based Lucas believes everyone has the right to love their body. He takes an approach which is educated, experienced and honest about what’s actually important. No more confusion or chasing shiny objects. Lucas offers one to one and online coaching to help clients to get into the best shape of their lives, and - like his clients - he’s really motivated by that transformational before and after.\r\n'),
(54031, 'Oreb', 'Sebastian', 'Sebastian is one of Australia’s leading strength coaches, and works with some of the country’s  professional athletes and elite trainers. Sebastian practices what he preaches, having reached significant success as a powerlifter, he’s supported others in weightlifting, rugby, boxing, and a range of other contact supports. As he says on his website, he is “the go to guy to get strong”. Face to face coaching is currently unavailable, but Sebastian has the strength system online - a group coaching option, as well as one to one online training available.'),
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
