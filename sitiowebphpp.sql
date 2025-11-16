-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:4306
-- Tiempo de generación: 16-11-2025 a las 18:53:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sitiowebphpp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'aguas.gandhi@gmail.com', '$2y$10$wd8PsNL61AEke9x7LUPvMeKUoK93tb74BQVl4HS5OjfpmVymfc3La'),
(2, 'brunopiero@gmail.com', '$2y$10$wMh7BfKCBIzjD3vE8Qau.uVgsIsiLaZ3QRgR9CUANPpXQl.FuscqW'),
(3, 'octavio@gmail.com', '$2y$10$xrGulIY1/nMSuYeyotf00uDCcVUpohgUuFzJTE53My4ANMw0cOQuu'),
(4, 'carlahn@gmail.com', '$2y$10$vpz5C73INgN4lPaYMKxliOOZaN6YHsXFJHI/G5WDe1m0oj7TfU9.C'),
(5, 'dianna@gmail.com', '$2y$10$iF8LCcC4XrfM2I2pb6rNn.di.bHznAaeIqTr/rfx49B7nqvCeHioS'),
(6, 'Paul12@gmail.com', '$2y$10$QxsP4FQ0Hls/lW0ulTvRUeFKkoPaO7iZ99bEyo8.QYdhs.tmmAy5G'),
(8, 'pedro123@gmail.com', '$2y$10$9EQDrxred1s1EiO7/Y6wIuS3LxgMZvf8t7VFDXfR/YBT7v1AF5FqG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
