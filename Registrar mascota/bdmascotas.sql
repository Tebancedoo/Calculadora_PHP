-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2023 a las 23:32:19
-- Versión del servidor: 10.1.38-MariaDB
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`documento_dueño`, `nombre_mascota`, `tipo_mascota`, `documento_mascota`) VALUES
('000', 'roth', '4', '555'),
('111', 'Fifi', '5', '333221'),
('222', 'Lulu', '2', '789987'),
('333', 'Docky', '1', '999'),
('444', 'Thor', '3', '74440');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mascotas`
--

CREATE TABLE `tipo_mascotas` (
  `id_mascota` int(30) NOT NULL,
  `mascota` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombres_dueño`, `apellidos_dueño`, `documento_dueño`, `numero_celular`) VALUES
('Juan ', 'Gonzales', '000', '1234567890'),
('Carlos', 'Lopez', '111', '4567899877'),
('Mateo', 'Perez', '222', '9632585200'),
('Juan Carlos', 'Suarez', '333', '88855259822'),
('Pedro', 'Gonzales', '444', '8744563002');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_mascotas`
--

CREATE TABLE `usuarios_mascotas` (
  `id` int(10) NOT NULL,
  `documento_dueño` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `documento_mascota` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_mascotas`
--

INSERT INTO `usuarios_mascotas` (`id`, `documento_dueño`, `documento_mascota`) VALUES
(1, '000', '555'),
(2, '111', '333221'),
(3, '222', '789987'),
(4, '333', '999');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  ADD PRIMARY KEY (`id_mascota`);

--
-- Indices de la tabla `usuarios_mascotas`
--
ALTER TABLE `usuarios_mascotas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo_mascotas`
--
ALTER TABLE `tipo_mascotas`
  MODIFY `id_mascota` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios_mascotas`
--
ALTER TABLE `usuarios_mascotas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
