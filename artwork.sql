-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2023 at 04:57 PM
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
-- Database: `artwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `artworks`
--

CREATE TABLE `artworks` (
  `art_id` int(11) NOT NULL,
  `art_title` varchar(100) NOT NULL,
  `art_price` int(100) NOT NULL,
  `discount` int(100) NOT NULL,
  `art_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artworks`
--

INSERT INTO `artworks` (`art_id`, `art_title`, `art_price`, `discount`, `art_image`) VALUES
(1, 'ART 1', 80, 10, 'Media/art1.jpg'),
(2, 'ART 2', 80, 10, 'Media/art2.png'),
(3, 'ART 3', 80, 10, 'Media/art3.jpg'),
(4, 'ART 4', 80, 10, 'Media/art4.jpeg'),
(5, 'ART 5', 80, 10, 'Media/art5.jpg'),
(6, 'ART 6', 80, 10, 'Media/art6.jpg'),
(7, 'ART 7', 80, 10, 'Media/art7.jpg'),
(8, 'ART 8', 80, 10, 'Media/art8.jpg'),
(9, 'ART 9', 80, 10, 'Media/art9.jpg'),
(10, 'ART 10', 80, 10, 'Media/art10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`art_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artworks`
--
ALTER TABLE `artworks`
  MODIFY `art_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
