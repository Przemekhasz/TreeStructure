-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Wrz 2021, 10:01
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `trees`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tree`
--

CREATE TABLE `tree` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `tree`
--

INSERT INTO `tree` (`id`, `parent_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 0, 'zero', NULL, NULL),
(2, 1, 'jeden1', NULL, '2021-09-20 05:43:51'),
(3, 2, 'dwa', NULL, NULL),
(4, 0, 'trzy', NULL, NULL),
(5, 1, 'cztery', NULL, NULL),
(6, 2, 'pięć', NULL, NULL),
(7, 0, 'sześć', NULL, NULL),
(8, 1, 'siedem', NULL, NULL),
(9, 2, 'osiem', NULL, NULL),
(10, 0, 'dziewięć', NULL, NULL),
(12, 1, 'Test', '2021-09-20 05:40:01', '2021-09-20 05:40:01'),
(13, 3, 'PHP', '2021-09-20 05:40:22', '2021-09-20 05:40:22'),
(14, 1, 'nowa nazwa', '2021-09-20 05:53:22', '2021-09-20 05:53:22');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `tree`
--
ALTER TABLE `tree`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
