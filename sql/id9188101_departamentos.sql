-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-05-2019 a las 10:56:57
-- Versión del servidor: 10.3.14-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id9188101_departamentos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `acronimo` varchar(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL DEFAULT '--',
  `imagen` varchar(255) NOT NULL DEFAULT 'etsit.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `acronimo`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'DIT', 'Departamento de Ingeniería de Sistemas Telemáticos', 'El departamento de Ingeniería de Sistemas Telemáticos desempeña tareas de docencia e investigación en redes y servicios telemáticos.', 'dit.jpg'),
(2, 'SSR', 'Departamento de Señales, Sistemas y Radiotelecomunicación', 'El departamento SSR fue creado en 1987 y trabaja en las áreas de radio, tratamiento de la señal y comunicaciones.', 'ssr.jpg'),
(3, 'DIE', 'Departamento de Ingeniería Electrónica', 'El departamento DIE agrupa profesores e investigadores en microelectrónica, tecnologías de habla y electrónica de alta velocidad', 'die.jpg'),
(4, 'MAT', 'Departamento de Matemáticas aplicadas a las Tecnologías de la Información', 'Departamento de docencia e investigación de matemáticas de la ETSIT.', 'etsit.jpg'),
(5, 'FIS', 'Departamento de Física aplicada a las Tecnologías de la Información', 'Departamento de física de la ETSIT.', 'etsit.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Equipos`
--

CREATE TABLE `Equipos` (
  `TeamName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `League` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Escudo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Players` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `League`
--

CREATE TABLE `League` (
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Start` date NOT NULL DEFAULT current_timestamp() COMMENT 'La fecha es en formato aaaa-mm-dd',
  `End` date NOT NULL DEFAULT current_timestamp() COMMENT 'La fecha es en formato aaaa-mm-dd',
  `Place` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Player`
--

CREATE TABLE `Player` (
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Number` int(11) NOT NULL,
  `PlayerId` int(11) NOT NULL,
  `TeamName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuarios`
--

CREATE TABLE `Usuarios` (
  `Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TeamName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD PRIMARY KEY (`TeamName`);

--
-- Indices de la tabla `League`
--
ALTER TABLE `League`
  ADD PRIMARY KEY (`Name`);

--
-- Indices de la tabla `Player`
--
ALTER TABLE `Player`
  ADD PRIMARY KEY (`PlayerId`);

--
-- Indices de la tabla `Usuarios`
--
ALTER TABLE `Usuarios`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `UNIQUEEMAIL` (`Email`),
  ADD UNIQUE KEY `UNIQUETEAMNAME` (`TeamName`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `Player`
--
ALTER TABLE `Player`
  MODIFY `PlayerId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Equipos`
--
ALTER TABLE `Equipos`
  ADD CONSTRAINT `Equipos_ibfk_1` FOREIGN KEY (`TeamName`) REFERENCES `Usuarios` (`TeamName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
