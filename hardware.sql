-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2019 at 08:07 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hardware`
--

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_marca`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'NVIDIA', 'NVIDIA Corporation es una empresa multinacional especializada en el desarrollo de unidades de procesamiento gráfico y tecnologías de circuitos integrados para estaciones de trabajo, ordenadores personales y dispositivos móviles.', 'img/nvidia.png'),
(2, 'AMD', 'Advanced Micro Devices, Inc. es una compañía estadounidense de semiconductores establecida en Sunnyvale, California, que desarrolla procesadores de cómputo y productos tecnológicos relacionados para el mercado de consumo.', 'img/amd.png');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `id_marca` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio`, `id_marca`, `imagen`) VALUES
(1, 'GTX 1080', 'ROG Strix GeForce® GTX 1080 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU III Technology with Patented Wing-Blade Fans for 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. Aura RGB Lighting enables a gaming system personalization and VR-friendly HDMI ports let gamers easily enjoy immersive virtual reality experiences. ROG Strix GeForce® GTX 1080 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '35.000', 1, 'img/1080.png'),
(2, 'GTX 1070', 'ROG Strix GeForce® GTX 1070 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU III Technology with Patented Wing-Blade Fans for 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. Aura RGB Lighting enables a gaming system personalization and VR-friendly HDMI ports let gamers easily enjoy immersive virtual reality experiences. ROG Strix GeForce® GTX 1070 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '25.000', 1, 'img/1070.png'),
(3, 'GTX 1060', 'ROG Strix GeForce® GTX 1060 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU III Technology with Patented Wing-Blade Fans for 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. Aura RGB Lighting enables a gaming system personalization and VR-friendly HDMI ports let gamers easily enjoy immersive virtual reality experiences. ROG Strix GeForce® GTX 1060 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '15.000', 1, 'img/1060.png'),
(4, 'RX 580', 'ROG Strix RX 580 gaming graphics cards are packed with exclusive ASUS technologies, including all-new MaxContact Technology that is 2X more contact with GPU for improved thermal transfer, and Patented Wing-Blade IP5X-Certified Fans for maximum airflow and longer fan lifespan. While ASUS FanConnect II features 4-pin, hybrid-controlled headers connected to system fans for optimal system cooling. ASUS Aura Sync RGB LED synchronization enables a gaming system personalization and VR-friendly HDMI ports let gamers easily enjoy immersive virtual reality experiences. ROG Strix Radeon RX 580 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '20.000', 2, 'img/580.png'),
(5, 'RX 570', 'ROG Strix RX 570 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU II Technology with Patented Wing-Blade Fans for up to 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. Aura RGB Lighting enables a gaming system personalization. ROG Strix RX 570 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '15.000', 2, 'img/570.png'),
(6, 'RX 560', 'ROG Strix RX 560 gaming graphics cards are packed with exclusive ASUS technologies, including DirectCU II Technology with Patented Wing-Blade Fans for up to 30% cooler and 3X quieter performance, and Industry-only Auto-Extreme Technology for premium quality and the best reliability. Aura RGB Lighting enables a gaming system personalization. ROG Strix RX 560 also has GPU Tweak II with XSplit Gamecaster that provides intuitive performance tweaking and instant gameplay streaming.', '10.000', 2, 'img/560.png');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass` char(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `pass`) VALUES
(1, 'admin', '$2y$10$XSTd8EtXu5SeLqTrar5u3..hqxqz2bXipAK1EulyxAc26jHkuAZwy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indexes for table `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
