-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-05-2024 a las 01:44:05
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
-- Base de datos: `knight's dragonfire`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades_hostiles`
--

CREATE TABLE `entidades_hostiles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `experiencia` int(11) NOT NULL,
  `oro` int(11) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `ubicacion` int(11) NOT NULL,
  `daño` int(11) NOT NULL,
  `Terreno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entidades_neutrales`
--

CREATE TABLE `entidades_neutrales` (
  `id` int(11) NOT NULL,
  `nombre` mediumtext NOT NULL,
  `experiencia` int(11) NOT NULL,
  `oro` int(11) NOT NULL,
  `descripcion` varchar(10000) NOT NULL,
  `daño` int(11) DEFAULT NULL,
  `terreno` int(11) DEFAULT NULL,
  `ubicacion` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(1000) NOT NULL,
  `equipamiento` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terrenos`
--

CREATE TABLE `terrenos` (
  `id_terreno` int(11) NOT NULL,
  `Nombres` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `terrenos`
--

INSERT INTO `terrenos` (`id_terreno`, `Nombres`) VALUES
(2, 'Templo'),
(5, 'Infierno'),
(7, 'Bosque encantado'),
(9, 'Ártico'),
(13, 'Desierto'),
(29, 'Catacumbas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(250) DEFAULT NULL,
  `Apellido` varchar(250) DEFAULT NULL,
  `Nombre_usuario` varchar(250) DEFAULT NULL,
  `Correo_electronico` varchar(250) DEFAULT NULL,
  `Contraseña` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `entidades_hostiles`
--
ALTER TABLE `entidades_hostiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_terreno_aparecenn` (`Terreno`);

--
-- Indices de la tabla `entidades_neutrales`
--
ALTER TABLE `entidades_neutrales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_terreno_aparecen` (`terreno`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `terrenos`
--
ALTER TABLE `terrenos`
  ADD PRIMARY KEY (`id_terreno`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `entidades_hostiles`
--
ALTER TABLE `entidades_hostiles`
  ADD CONSTRAINT `id_terreno_aparecenn` FOREIGN KEY (`Terreno`) REFERENCES `terrenos` (`id_terreno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `entidades_neutrales`
--
ALTER TABLE `entidades_neutrales`
  ADD CONSTRAINT `id_terreno_aparecen` FOREIGN KEY (`terreno`) REFERENCES `terrenos` (`id_terreno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
