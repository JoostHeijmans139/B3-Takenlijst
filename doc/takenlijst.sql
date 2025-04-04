-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 04 apr 2025 om 16:58
-- Serverversie: 8.0.30
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `takenlijst`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login_data`
--

CREATE TABLE `login_data` (
  `id` int NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `login_data`
--

INSERT INTO `login_data` (`id`, `email`, `password`, `name`) VALUES
(1, 'jwfheijmans@gmail.com', '$2y$10$QTjq6fpP44yqiiz0fH56wey/BuPlYKlNCJ4UWoFWGgjbLnCUuUdEy', 'Kat'),
(9, 'p@p', '$2y$10$q5vDgRAXkZcZapEtjyM1ueY0/yk5MA2CDiGYJtmiDCL3Bm148Bole', 'p'),
(10, 'voorbeeld@email.com', '$2y$10$F4auSzSlKG1xU54sFzIrKe5otAw/0CDZxisL404LuSC3kXVXx5VBy', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `taken`
--

CREATE TABLE `taken` (
  `id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `status` varchar(255) DEFAULT 'to do',
  `department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `created_by` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `taken`
--

INSERT INTO `taken` (`id`, `title`, `status`, `department`, `deadline`, `created_by`) VALUES
(18, 'ffff', 'to do', 'fggdgdgf', '2025-04-05', 10),
(19, 'fgd', 'done', 'gfd', '2025-04-16', 10),
(21, 'dfghhgfhgf', 'doing', 'hfgdhfgh', '2025-04-19', 10),
(22, 'f', 'done', 'f', '2025-04-11', 10);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `login_data`
--
ALTER TABLE `login_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `taken`
--
ALTER TABLE `taken`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `login_data`
--
ALTER TABLE `login_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `taken`
--
ALTER TABLE `taken`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
