-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:36 AM
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
-- Database: `admindashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `elbancud`
--

CREATE TABLE `elbancud` (
  `id` int(255) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `imageUrl` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `elbancud`
--

INSERT INTO `elbancud` (`id`, `caption`, `imageUrl`, `type`) VALUES
(1, 'First post heheh', 'IMG60744884735751.87856179aice.jpg', 'post'),
(2, '', 'IMG60745fc410b656.87553335pixxxxxxxx.jpg', 'myday'),
(3, '', 'IMG6074648eda2551.55098290169654774_209234380548879_8481249938350670570_n.jpg', 'myday'),
(4, '', 'IMG6074652c26cc49.55104401CHICKEN AFRITADA.jpg', 'myday'),
(5, '', 'IMG607465f5348de5.67536770Easy-Chicken-Adobo-3.jpg', 'myday'),
(6, '', 'IMG60746606101840.73821737garlic-butter-shrimp-recipe.jpg', 'myday'),
(7, '', 'IMG6074661a324a25.62884456142315393_773588946565411_4470702155399907063_n.jpg', 'myday'),
(8, '', 'IMG607466427547e6.71112238aice.jpg', 'myday'),
(9, 'Second Post', 'IMG6074823cd8e483.16885922kineme.jpg', 'post'),
(10, 'Gagi ka bulagtok sumuko ka na ', 'IMG60751304f01bb3.27384167bulagtok.JPG', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `iguserprofile`
--

CREATE TABLE `iguserprofile` (
  `id` int(255) NOT NULL,
  `firstName` text NOT NULL,
  `middleName` text NOT NULL,
  `lastName` text NOT NULL,
  `username` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `profilePicture` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iguserprofile`
--

INSERT INTO `iguserprofile` (`id`, `firstName`, `middleName`, `lastName`, `username`, `email`, `password`, `profilePicture`) VALUES
(19, 'emarson', 'lawas', 'bancud', 'elbancud', 'elbancud@gmail.com', 'emarsonPassword', 'IMG60745c60840a93.55802373eb2x2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `elbancud`
--
ALTER TABLE `elbancud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iguserprofile`
--
ALTER TABLE `iguserprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `elbancud`
--
ALTER TABLE `elbancud`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `iguserprofile`
--
ALTER TABLE `iguserprofile`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
