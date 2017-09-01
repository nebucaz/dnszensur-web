-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 01. Sep 2017 um 09:52
-- Server-Version: 5.5.55-0+deb8u1
-- PHP-Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dnszensur`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `exampledb`
--

CREATE TABLE `exampledb` (
  `domain` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_update_swisscom` date NOT NULL,
  `last_update_upc` date NOT NULL,
  `zensur_status_swisscom` int(11) NOT NULL,
  `zensur_status_upc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `exampledb`
--

INSERT INTO `exampledb` (`domain`, `last_update_swisscom`, `last_update_upc`, `zensur_status_swisscom`, `zensur_status_upc`) VALUES
('not-censored1.com', '2017-09-01', '2017-09-01', 0, 0),
('not-censored2.com', '2017-09-01', '2017-09-01', 0, 0),
('phishing-example1.com', '2017-09-01', '2017-09-01', 1, 1),
('phishing-example2.com', '2017-09-01', '2017-09-01', 1, 1),
('cp-example1.com', '2017-09-01', '2017-09-01', 2, 2),
('cp-example2.com', '2017-09-01', '2017-09-01', 2, 2),
('legal-example1.com', '2017-09-01', '2017-09-01', 3, 3),
('legal-example2.com', '2017-09-01', '2017-09-01', 3, 3),
('unknown-censored1.com', '2017-09-01', '2017-09-01', 4, 4),
('unknown-censored2.com', '2017-09-01', '2017-09-01', 4, 4);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `exampledb`
--
ALTER TABLE `exampledb`
  ADD UNIQUE KEY `domain` (`domain`(255));
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
