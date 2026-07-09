-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2026 at 03:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excursie_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `activiteiten`
--

CREATE TABLE `activiteiten` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `locatie` varchar(255) DEFAULT NULL,
  `datum` date DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bezienswaardigheden`
--

CREATE TABLE `bezienswaardigheden` (
  `id` int(11) NOT NULL,
  `titel` varchar(100) NOT NULL,
  `beschrijving` text NOT NULL,
  `adres` varchar(255) DEFAULT NULL,
  `categorie` varchar(100) DEFAULT NULL,
  `afbeelding` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(50) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `aangemaakt_op` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activiteiten`
--
ALTER TABLE `activiteiten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `bezienswaardigheden`
--
ALTER TABLE `bezienswaardigheden`
  ADD PRIMARY KEY (`id`),
  ADD KEY `created_by` (`created_by`);

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gebruikersnaam` (`gebruikersnaam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activiteiten`
--
ALTER TABLE `activiteiten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bezienswaardigheden`
--
ALTER TABLE `bezienswaardigheden`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activiteiten`
--
ALTER TABLE `activiteiten`
  ADD CONSTRAINT `activiteiten_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `gebruikers` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `bezienswaardigheden`
--
ALTER TABLE `bezienswaardigheden`
  ADD CONSTRAINT `bezienswaardigheden_ibfk_1` FOREIGN KEY (`created_by`) REFERENCES `gebruikers` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
