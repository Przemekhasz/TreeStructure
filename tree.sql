-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Paź 2021, 15:34
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
(1, 0, 'Języki programowania', NULL, '2021-09-24 07:53:55'),
(195, 1, 'Frontend', '2021-09-30 12:41:40', '2021-09-30 12:41:40'),
(200, 1, 'Backend', '2021-09-30 12:42:20', '2021-09-30 12:42:20'),
(204, 200, 'Java', '2021-09-30 12:42:57', '2021-10-01 11:34:30'),
(206, 200, 'C#', '2021-09-30 12:43:18', '2021-09-30 12:43:18'),
(207, 206, '.NET', '2021-09-30 12:43:26', '2021-09-30 12:43:26'),
(209, 200, 'PHP', '2021-10-01 09:49:23', '2021-10-01 09:49:23'),
(210, 209, 'Laravel', '2021-10-01 09:49:32', '2021-10-01 09:49:32'),
(213, 195, 'JavaScript', '2021-10-01 11:33:48', '2021-10-01 11:33:48'),
(214, 213, 'React', '2021-10-01 11:33:56', '2021-10-01 11:33:56'),
(215, 213, 'Vue', '2021-10-01 11:34:03', '2021-10-01 11:34:09'),
(216, 213, 'Angular', '2021-10-01 11:34:24', '2021-10-01 11:34:24'),
(217, 204, 'Spring Boot', '2021-10-01 11:34:40', '2021-10-01 11:34:40');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
