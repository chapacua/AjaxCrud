-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2017 a las 20:52:58
-- Versión del servidor: 5.6.35
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `AjaxCrud`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE IF NOT EXISTS `registro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id`, `nombre`, `apellido`, `email`, `estado`, `fecha`) VALUES
(106, 'asd', 'asd', 'alejok.024@gmail.com', 1, '2017-12-15 00:00:00'),
(107, 'xcv', 'cv', 'asdq@asd.com', 2, '2017-12-15 00:00:00'),
(108, 'asd', 'asd', 'alejok.024@gmail.com', 1, '2017-12-15 00:00:00'),
(109, 'asd', 'asd', 'alejok.024@gmail.com', 1, '2017-12-15 00:00:00'),
(110, 'a', 'asd', 'alejok.024@gmail.com', 1, '2017-12-15 00:00:00'),
(111, 'aasd', 'asd', 'alejok.024@gmail.com', 2, '2017-12-15 00:00:00'),
(112, 'aasd', 'asd', 'alejok.024@gmail.com', 2, '2017-12-15 00:00:00'),
(113, 'aasd', 'asd', 'alejok.024@gmail.com', 2, '2017-12-15 00:00:00'),
(114, 'aasd', 'asd', 'alejok.024@gmail.com', 1, '2017-12-15 00:00:00'),
(115, 'asd', 'asd', 'alejok.024@gmail.com', 2, '2017-12-15 00:00:00'),
(116, 'a', 'asd', 'asdq@asd.com', 2, '2017-12-15 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=117;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
