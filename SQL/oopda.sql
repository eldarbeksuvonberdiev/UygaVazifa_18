-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 04, 2024 at 07:25 AM
-- Server version: 8.0.39
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oopda`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `count` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `count`) VALUES
(1, 'telefon', 150000, 30),
(2, 'televizor', 100000, 100),
(7, 'Samsung', 23132165, 116),
(8, 'Samsung', 150000, 123),
(9, 'Samsung S24 Plus', 16000000, 200),
(10, 'Malibu ', 151000000, 10);

-- --------------------------------------------------------

--
-- Table structure for table `talabalar`
--

CREATE TABLE `talabalar` (
  `id` int NOT NULL,
  `fio` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `tel` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `manzil` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `info` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `talabalar`
--

INSERT INTO `talabalar` (`id`, `fio`, `tel`, `manzil`, `img`, `info`) VALUES
(8, 'abdurahmon', '9788965465', 'qeofmepo', 'images/2024-10-03_06-50-29.jpg', ''),
(15, 'Murod', '998941547891', 'Toshkent shaxri', 'images/2024-10-03_06-54-18.jpg', ''),
(18, 'Nargiza', '9788965465', 'Toshkent shaxri', 'images/24-10-04_07-14-39.', 'Nima gap nima nima gap '),
(19, 'Boltavoy', '9788965465', 'Toshkent shaxri', 'images/24-10-04_06-30-19.jpg', ' Shunchaki test'),
(23, 'Zulayho', '9788965465', 'Hech qayer', 'images/24-10-04_05-45-50.jpg', 'Shunchaki test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `talabalar`
--
ALTER TABLE `talabalar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `talabalar`
--
ALTER TABLE `talabalar`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
