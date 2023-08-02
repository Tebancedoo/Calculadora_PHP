-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2023 a las 17:50:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdmascotas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `documento_dueño` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_mascota` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_mascota` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento_mascota` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mascotas`
--

CREATE TABLE `tipo_mascotas` (
  `id_mascota` int(30) NOT NULL,
  `mascota` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `tipo_mascotas`
--

INSERT INTO `tipo_mascotas` (`id_mascota`, `mascota`) VALUES
(1, 'perro'),
(2, 'gato'),
(3, 'loro'),
(4, 'tortuga'),
(5, 'conejo'),
(6, 'raton');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombres_dueño` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos_dueño` text CHARACTER SET utf32 COLLATE utf32_spanish_ci NOT NULL,
  `documento_dueño` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `numero_celular` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  ADD PRIMARY KEY (`id_mascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  MODIFY `id_mascota` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
