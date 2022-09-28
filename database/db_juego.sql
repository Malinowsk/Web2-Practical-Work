-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-09-2022 a las 17:41:32
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29


--
-- Base de datos: `db_juego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personaje`
--

CREATE TABLE `Personaje` (
  `id_personaje` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `clase` varchar(20) NOT NULL,
  `id_raza` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Personaje`
--

INSERT INTO `Personaje` (`id_personaje`, `nombre`, `apellido`, `clase`, `id_raza`) VALUES
(1, 'Zeus', 'Barbablanca', 'Guerrero', 1),
(10, 'Thrall', 'eol', 'Chaman', 2),
(11, 'Ilidan', 'Verpestinad', 'Mago', 1),
(12, 'Voljin', 'VB', 'Brujo', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Raza`
--

CREATE TABLE `Raza` (
  `id_raza` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `faccion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `Raza`
--

INSERT INTO `Raza` (`id_raza`, `nombre`, `faccion`) VALUES
(1, 'Enano', 'Alianza'),
(2, 'Orco', 'Horda'),
(3, 'Humano', 'Alianza'),
(4, 'Tauren', 'Horda'),
(5, 'Troll', 'Horda');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Personaje`
--
ALTER TABLE `Personaje`
  ADD PRIMARY KEY (`id_personaje`),
  ADD KEY `FK_Personaje_Raza` (`id_raza`);

--
-- Indices de la tabla `Raza`
--
ALTER TABLE `Raza`
  ADD PRIMARY KEY (`id_raza`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Personaje`
--
ALTER TABLE `Personaje`
  MODIFY `id_personaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `Raza`
--
ALTER TABLE `Raza`
  MODIFY `id_raza` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Personaje`
--
ALTER TABLE `Personaje`
  ADD CONSTRAINT `FK_Personaje_Raza` FOREIGN KEY (`id_raza`) REFERENCES `Raza` (`id_raza`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
