-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2026 at 10:00 PM
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
-- Database: `web_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `major` varchar(100) NOT NULL,
  `aboutme` varchar(500) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `github` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `name`, `major`, `aboutme`, `linkedin`, `github`) VALUES
(1, 'Monther', 'Software Engineering Student', 'I\'m a Full-Stack Web Developer focused on building web applications using React, Next.js, TypeScript, and Express.js . I enjoy backend development, system design, and learning how technologies work behind the scenes. \r\n', 'https://www.linkedin.com/in/monther-alshammari-2453b0342/', 'https://github.com/MontherALS');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `client_link` varchar(255) NOT NULL,
  `server_link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `client_link`, `server_link`) VALUES
(1, 'ShiftMS', 'A full-stack TypeScript app for managing employee shifts, enabling admins to organize teams and track schedules in real time\r\n\r\n', 'https://github.com/MontherALS/ShiftMS-Client', 'https://github.com/MontherALS/ShiftMS-Server'),
(2, 'MonoFeed', 'A full-stack short-form content platform inspired by TikTok and Instagram Reels, powered by Cloudflare R2.\r\n\r\n', 'https://github.com/MontherALS/MonoFeed-Client', 'https://github.com/MontherALS/MonoFeed-Server'),
(3, 'MythicaVault', 'A role-based JavaScript web application that serves as a simplified wiki for mythologies.\r\n\r\n', 'https://github.com/MontherALS/MythicaVaultClient', 'https://github.com/MontherALS/MythicaVaultServer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
