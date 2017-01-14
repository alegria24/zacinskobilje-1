-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 12:02 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zacinskobiljecompany`
--
CREATE DATABASE IF NOT EXISTS `zacinskobiljecompany` DEFAULT CHARACTER SET utf8 COLLATE utf8_slovenian_ci;
USE `zacinskobiljecompany`;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `idContact` int(11) NOT NULL,
  `contactName` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `contactMsg` varchar(500) COLLATE utf8_slovenian_ci NOT NULL,
  `contactMail` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `contactTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zacinskobilje`
--

CREATE TABLE `zacinskobilje` (
  `zbID` int(11) NOT NULL,
  `zbName` varchar(20) COLLATE utf8_slovenian_ci NOT NULL,
  `zbCuisine` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `zbFlavor` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `zbUse` varchar(100) COLLATE utf8_slovenian_ci NOT NULL,
  `zbPrice` decimal(4,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `zacinskobilje`
--

INSERT INTO `zacinskobilje` (`zbID`, `zbName`, `zbCuisine`, `zbFlavor`, `zbUse`, `zbPrice`) VALUES
(1, 'Allspice', 'Caribbean', 'Earthy, Sweet', 'Soups, Desserts, Breads', '6'),
(2, 'Allspice', 'Caribbean', 'Earthy, Sweet', 'Soups, Desserts, Breads', '6');

-- --------------------------------------------------------

--
-- Table structure for table `zbskladiste`
--

CREATE TABLE `zbskladiste` (
  `idZB` int(11) NOT NULL,
  `idStore` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zbstores`
--

CREATE TABLE `zbstores` (
  `idStore` int(11) NOT NULL,
  `storeAdress` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `storePhone` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `storeManager` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zbusers`
--

CREATE TABLE `zbusers` (
  `idUser` int(11) NOT NULL,
  `userType` varchar(10) COLLATE utf8_slovenian_ci NOT NULL,
  `userName` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `userMail` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `userUsername` varchar(50) COLLATE utf8_slovenian_ci NOT NULL,
  `userPass` varchar(50) COLLATE utf8_slovenian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`idContact`);

--
-- Indexes for table `zacinskobilje`
--
ALTER TABLE `zacinskobilje`
  ADD PRIMARY KEY (`zbID`);

--
-- Indexes for table `zbskladiste`
--
ALTER TABLE `zbskladiste`
  ADD KEY `idZB` (`idZB`,`idStore`),
  ADD KEY `idStore` (`idStore`);

--
-- Indexes for table `zbstores`
--
ALTER TABLE `zbstores`
  ADD PRIMARY KEY (`idStore`),
  ADD KEY `storeManager` (`storeManager`);

--
-- Indexes for table `zbusers`
--
ALTER TABLE `zbusers`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `idContact` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zacinskobilje`
--
ALTER TABLE `zacinskobilje`
  MODIFY `zbID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zbstores`
--
ALTER TABLE `zbstores`
  MODIFY `idStore` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `zbusers`
--
ALTER TABLE `zbusers`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `zbskladiste`
--
ALTER TABLE `zbskladiste`
  ADD CONSTRAINT `zbskladiste_ibfk_1` FOREIGN KEY (`idZB`) REFERENCES `zacinskobilje` (`zbID`),
  ADD CONSTRAINT `zbskladiste_ibfk_2` FOREIGN KEY (`idStore`) REFERENCES `zbstores` (`idStore`);

--
-- Constraints for table `zbstores`
--
ALTER TABLE `zbstores`
  ADD CONSTRAINT `zbstores_ibfk_1` FOREIGN KEY (`storeManager`) REFERENCES `zbusers` (`idUser`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
