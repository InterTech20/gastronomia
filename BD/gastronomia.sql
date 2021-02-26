-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 31, 2020 at 05:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gastronomia`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_platos`
--

CREATE TABLE `info_platos` (
  `id` int(11) NOT NULL,
  `cabe1` varchar(50) NOT NULL,
  `cabe2` varchar(50) NOT NULL,
  `cabe3` varchar(50) NOT NULL,
  `p_nombre1` varchar(50) NOT NULL,
  `p_img1` varchar(50) NOT NULL,
  `p_des1` varchar(50) NOT NULL,
  `p_nombre2` varchar(50) NOT NULL,
  `p_img2` varchar(50) NOT NULL,
  `p_des2` varchar(50) NOT NULL,
  `p_nombre3` varchar(50) NOT NULL,
  `p_img3` varchar(50) NOT NULL,
  `p_des3` varchar(50) NOT NULL,
  `p_nombre4` varchar(50) NOT NULL,
  `p_img4` varchar(50) NOT NULL,
  `p_des4` varchar(50) NOT NULL,
  `p_nombre5` varchar(50) NOT NULL,
  `p_img5` varchar(50) NOT NULL,
  `p_des5` varchar(50) NOT NULL,
  `p_nombre6` varchar(50) NOT NULL,
  `p_img6` varchar(50) NOT NULL,
  `p_des6` varchar(50) NOT NULL,
  `restaurante` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `info_restaurante`
--

CREATE TABLE `info_restaurante` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `horario` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `email`, `contraseña`) VALUES
(1, 'juan', 'root@adminstrador.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_platos`
--
ALTER TABLE `info_platos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_des6` (`p_des6`);

--
-- Indexes for table `info_restaurante`
--
ALTER TABLE `info_restaurante`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_platos`
--
ALTER TABLE `info_platos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `info_restaurante`
--
ALTER TABLE `info_restaurante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_restaurante`
--
ALTER TABLE `info_restaurante`
  ADD CONSTRAINT `info_restaurante_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
