-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 25, 2023 at 01:25 AM
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
-- Database: `Prometeudb`
--

-- --------------------------------------------------------

--
-- Table structure for table `Artigos`
--

CREATE TABLE `Artigos` (
  `idArtigos` int(11) NOT NULL,
  `Titulo` varchar(255) NOT NULL,
  `Localizacao` varchar(500) NOT NULL,
  `Descricao` mediumtext DEFAULT NULL,
  `Thumbnail` varchar(500) DEFAULT NULL,
  `Publicacao` date NOT NULL,
  `Assunto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Cards`
--

CREATE TABLE `Cards` (
  `idCards` int(10) UNSIGNED NOT NULL,
  `NomeFilosofo` varchar(255) NOT NULL,
  `Cardpath` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Artigos`
--
ALTER TABLE `Artigos`
  ADD PRIMARY KEY (`idArtigos`),
  ADD UNIQUE KEY `idArtigos` (`idArtigos`);

--
-- Indexes for table `Cards`
--
ALTER TABLE `Cards`
  ADD PRIMARY KEY (`idCards`),
  ADD UNIQUE KEY `idCards` (`idCards`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Artigos`
--
ALTER TABLE `Artigos`
  MODIFY `idArtigos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Cards`
--
ALTER TABLE `Cards`
  MODIFY `idCards` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
