-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2017 a las 23:08:17
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `techsolutions`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registerusers`
--

CREATE TABLE `registerusers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(8) NOT NULL,
  `telephone` bigint(20) NOT NULL,
  `cellphone` bigint(20) NOT NULL,
  `typeuser` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registerusers`
--

INSERT INTO `registerusers` (`id`, `name`, `lastname`, `email`, `password`, `telephone`, `cellphone`, `typeuser`, `region`, `country`, `status`) VALUES
(1, 'Nancy', 'Martínez Hernández', 'ghost_69@user.mx', 'Ghost69', 12345678, 1234567890, 'Experto', 'Mexico', 'Mexico', 'pendiente'),
(2, 'Moises', 'Lozano Bobadilla', 'mois_lob@user.mx', 'Moises68', 12345678, 1234567890, 'Novato', 'Mexico', 'Mexico', 'pendiente'),
(3, 'Administrador', 'Administrador', 'admin@tech.mx', 'Admin69', 12345678, 1234567890, 'Experto', 'Mexico', 'Alemania', 'activo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registerusers`
--
ALTER TABLE `registerusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registerusers`
--
ALTER TABLE `registerusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
