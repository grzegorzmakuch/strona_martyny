-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Lut 2018, 13:26
-- Wersja serwera: 10.1.26-MariaDB
-- Wersja PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `baza_obrazy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci_zapytania`
--

CREATE TABLE `klienci_zapytania` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `miasto` varchar(255) NOT NULL,
  `telefon` int(11) NOT NULL,
  `zapytanie` varchar(255) NOT NULL,
  `dodano` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `obrazy`
--

CREATE TABLE `obrazy` (
  `id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `obrazy`
--

INSERT INTO `obrazy` (`id`, `path`) VALUES
(13, 'aaa'),
(15, 'bbb'),
(12, 'kolejne testowe'),
(16, 'kolejny 1'),
(17, 'kolejny 2'),
(7, 'testowe 1'),
(10, 'testowe 2'),
(11, 'testowe 3'),
(1, 'thumb-001.jpg'),
(2, 'thumb-002.jpg'),
(3, 'thumb-003.jpg'),
(4, 'thumb-004.jpg'),
(5, 'thumb-005.jpg'),
(14, 'zzz');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klienci_zapytania`
--
ALTER TABLE `klienci_zapytania`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `obrazy`
--
ALTER TABLE `obrazy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `path` (`path`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci_zapytania`
--
ALTER TABLE `klienci_zapytania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `obrazy`
--
ALTER TABLE `obrazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
