-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2022 a las 05:46:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_juego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `apellido` varchar(40) NOT NULL,
  `clase` varchar(40) NOT NULL,
  `id_raza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `personaje`
--

INSERT INTO `personaje` (`id_personaje`, `nombre`, `apellido`, `clase`, `id_raza`) VALUES
(1, 'Muradin', 'Barbabronce', 'Guerrero', 1),
(2, 'Modimus', 'Anvilmar', 'Mago', 1),
(3, 'Thrall', 'Goel', 'Chamán', 2),
(4, 'Grom', 'Hellscream', 'Guerrero', 2),
(5, 'Arthas', 'Menethil', 'Paladin', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `raza`
--

CREATE TABLE `raza` (
  `id_raza` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `faccion` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `raza`
--

INSERT INTO `raza` (`id_raza`, `nombre`, `faccion`) VALUES
(1, 'Enano', 'Alianza'),
(2, 'Orco', 'Horda'),
(3, 'Muerto Viviente', 'Horda'),
(4, 'Humano', 'Alianza'),
(5, 'Troll', 'Horda'),
(6, 'Elfo', 'Alianza'),
(7, 'Tauren', 'Horda'),
(8, 'Drainer', 'Alianza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `passwork` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `passwork`) VALUES
(1, 'juanrago@gmail.com', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `FK_PERSONAJE_RAZA` (`id_raza`);

--
-- Indices de la tabla `raza`
--
ALTER TABLE `raza`
  ADD PRIMARY KEY (`id_raza`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personaje`
--
ALTER TABLE `personaje`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `raza`
--
ALTER TABLE `raza`
  MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `FK_PERSONAJE_RAZA` FOREIGN KEY (`id_raza`) REFERENCES `raza` (`id_raza`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
