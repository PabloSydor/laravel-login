-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-01-2022 a las 20:59:14
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `logg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `login` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', '$2y$10$UeUoWCkrRvp4A.Rdm9VCIehsYtz8LWO1OKQ3oSkE0XK8/xMCwy0lm', NULL, '2022-01-20 16:40:02', '2022-01-20 16:40:02', ''),
(2, 'pablo', '$2y$10$gvIyEc3aT9zpFSTWcYVaGu90btvPMx4QIeHPBWMQR3BqRUe6/ykOe', NULL, '2022-01-20 16:59:08', '2022-01-20 16:59:08', ''),
(3, 'paloma', '$2y$10$YAwA4cWjE7pO76V6DBGFwusj5LymPomyuqNulkzmR2sc53hvQ0qm6', NULL, '2022-01-20 17:32:31', '2022-01-20 17:32:31', ''),
(4, 'hola', '$2y$10$l6maqRW4kTIKW6z8RR9B..z6hcO3S4mLLRmdronLbumW4C3xsTu1q', NULL, '2022-01-20 17:37:22', '2022-01-20 17:37:22', ''),
(5, 'pepe', '$2y$10$VKV77PXVkw0g.FmESF6oe.TySoe/H1vPbImBMyzPK6EfUuoZjcHbe', NULL, '2022-01-20 18:20:40', '2022-01-20 18:20:40', 'basic'),
(6, 'eladmin', '$2y$10$VsKxFsV4ezrR8R0x7DMit.nqUk/rjBwggPHvziwKqka7Jwm5vz17K', NULL, '2022-01-20 18:22:43', '2022-01-20 18:22:43', 'admin'),
(7, 'elbasic', '$2y$10$GQYIlCEAngX0tShgBgKuW..Wt6YcB23g94w.Pq38kOWRWJ6vvjvWe', NULL, '2022-01-20 18:22:43', '2022-01-20 18:22:43', 'basic'),
(8, 'juana', '$2y$10$O/Ej3Xsq4PD/5DLWcxapkeMoitP1nsStSSF.jPSqBzzDdUDjTkING', NULL, '2022-01-20 18:51:32', '2022-01-20 18:51:32', 'basic');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_login_unique` (`login`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
