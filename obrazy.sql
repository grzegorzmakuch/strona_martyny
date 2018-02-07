-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Lut 2018, 15:48
-- Wersja serwera: 5.7.19-log
-- Wersja PHP: 7.1.9

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
(1, '01.jpg'),
(2, '02.jpg'),
(3, '03.jpg'),
(4, '04.jpg'),
(13, 'aaa'),
(15, 'bbb'),
(12, 'kolejne testowe'),
(7, 'testowe 1'),
(10, 'testowe 2'),
(11, 'testowe 3'),
(14, 'zzz');

--
-- Indeksy dla zrzutów tabel
--

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
-- AUTO_INCREMENT dla tabeli `obrazy`
--
ALTER TABLE `obrazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
