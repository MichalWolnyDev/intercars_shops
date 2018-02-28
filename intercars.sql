-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 02 Lut 2018, 21:56
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `intercars`
--
CREATE DATABASE IF NOT EXISTS intercars;
-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sklepy`
--
CREATE TABLE `sklepy` (
  `id` int(11) NOT NULL,
  `miasto` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci DEFAULT NULL,
  `adres` varchar(30) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Godz_otwarcia` time NOT NULL,
  `Godz_zamkniecia` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `sklepy`
--

INSERT INTO `sklepy` (`id`, `miasto`, `adres`, `Godz_otwarcia`, `Godz_zamkniecia`) VALUES
(1, 'Poznań', 'Świętego Wincentego 7', '08:00:00', '18:00:00'),
(2, 'Poznań', 'Druskienicka 8/10', '06:00:00', '20:00:00'),
(3, 'Poznań', 'Przełęcz 25', '10:00:00', '22:00:00'),
(4, 'Poznań', 'Milczańska 48A', '12:00:00', '23:00:00'),
(5, 'Poznań', 'Magazynowa 7', '08:00:00', '14:00:00'),
(6, 'Poznań', 'Cieszkowskiego 90', '09:00:00', '15:00:00'),
(7, 'Poznań', 'Ks.Piotra Wawrzyniaka 2,', '07:00:00', '16:00:00'),
(8, 'Wrocław', 'Wrocławska 49', '08:00:00', '14:00:00'),
(9, 'Wrocław', 'Graniczna 8c', '07:00:00', '23:00:00'),
(10, 'Wrocław', 'aleja Armii Krajowej 61', '09:00:00', '16:00:00'),
(11, 'Wrocław', 'Bystrzycka 13', '10:00:00', '21:00:00'),
(12, 'Wrocław', 'Starobrzeska 4A', '08:00:00', '20:00:00'),
(13, 'Kraków', 'Żmujdzka 49', '08:00:00', '21:30:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `sklepy`
--
ALTER TABLE `sklepy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `sklepy`
--
ALTER TABLE `sklepy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
