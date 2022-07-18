-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2022 a las 04:48:42
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gamebets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bet`
--

CREATE TABLE `bet` (
  `id` int(10) NOT NULL,
  `redwins` int(15) NOT NULL DEFAULT 0,
  `bluewins` int(15) NOT NULL DEFAULT 0,
  `redname` varchar(40) NOT NULL,
  `bluename` varchar(40) NOT NULL,
  `available` tinyint(1) NOT NULL DEFAULT 1,
  `game` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bet`
--

INSERT INTO `bet` (`id`, `redwins`, `bluewins`, `redname`, `bluename`, `available`, `game`) VALUES
(1, 10, 10, 'red', 'blue', 1, 'LOL'),
(2, 0, 0, 'faze', 'tsm', 1, 'CS:GO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `userbets`
--

CREATE TABLE `userbets` (
  `userid` int(10) NOT NULL,
  `betid` int(10) NOT NULL,
  `supports` varchar(40) NOT NULL,
  `amount` int(10) NOT NULL,
  `won` int(15) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `coins` int(10) NOT NULL DEFAULT 50
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `coins`) VALUES
(1, 'Erick', 'erick@email.com', 'erick123', 50),
(2, 'Mary', 'mary@email.com', 'mary123', 50),
(3, 'Joe', 'joe@email.com', 'joe123', 50),
(4, 'dfb', 'dfb@email.com', 'dfb', 50);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bet`
--
ALTER TABLE `bet`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bet`
--
ALTER TABLE `bet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
