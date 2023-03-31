-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 31 mrt 2023 om 09:39
-- Serverversie: 8.0.31
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets-herk`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `poundforpound`
--

DROP TABLE IF EXISTS `poundforpound`;
CREATE TABLE IF NOT EXISTS `poundforpound` (
  `Id` tinyint NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Ranking` smallint NOT NULL,
  `Length` varchar(100) NOT NULL,
  `Weight` varchar(20) NOT NULL,
  `Age` tinyint NOT NULL,
  `WinsByKnockout` tinyint NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `poundforpound`
--

INSERT INTO `poundforpound` (`Id`, `Name`, `Ranking`, `Length`, `Weight`, `Age`, `WinsByKnockout`) VALUES
(1, 'Jon Jones', 1, '1.93', '112', 35, 10),
(2, 'Alexander Volkanovski', 2, '1.68', '66', 34, 12),
(3, 'Islam Makhachev', 3, '1.78', '70', 31, 4),
(4, 'Leon Edwards', 4, '1.83', '77', 31, 7),
(5, 'Israel Adesanya', 5, '1.93', '84', 33, 15);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
