-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-10-2024 a las 07:47:24
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdcarlos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catastro`
--

CREATE TABLE `catastro` (
  `codigo` varchar(50) NOT NULL,
  `zona` varchar(75) DEFAULT NULL,
  `xini` varchar(15) DEFAULT NULL,
  `yini` varchar(15) DEFAULT NULL,
  `xfin` varchar(15) DEFAULT NULL,
  `yfin` varchar(15) DEFAULT NULL,
  `superficie` int(11) DEFAULT NULL,
  `distrito` varchar(70) DEFAULT NULL,
  `ci` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catastro`
--

INSERT INTO `catastro` (`codigo`, `zona`, `xini`, `yini`, `xfin`, `yfin`, `superficie`, `distrito`, `ci`) VALUES
('1003', 'Zona Este', '323.45', '878.90', '434.60', '989.01', 700, 'Distrito 3', 3),
('1004', 'Zona Oeste', '423.45', '978.90', '534.56', '1089.01', 800, 'Distrito 4', 4),
('1005', 'Zona Central', '523.45', '1078.90', '634.56', '1189.01', 900, 'Distrito 5', 5),
('2020', 'Sagrado Corazón', '125.6', '130.5', '125.89', '125.40', 480, 'Distrito 10', 6),
('2025', 'El Tejar', '125.63', '125.87', '200.65', '125.35', 400, 'Distrito 2', 8),
('3030', 'El Tejar', '150.73', '450.52', '125.50', '125.60', 130, 'Distrito 2', 7),
('3070', 'San Francisco', '200.25', '300.60', '350.50', '205.50', 600, 'Distrito 18', 55);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `distritos`
--

CREATE TABLE `distritos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `macrodistrito_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `distritos`
--

INSERT INTO `distritos` (`id`, `nombre`, `macrodistrito_id`) VALUES
(1, 'Distrito 1', 1),
(2, 'Distrito 2', 1),
(3, 'Distrito 3', 7),
(4, 'Distrito 4', 7),
(5, 'Distrito 5', 7),
(6, 'Distrito 6', 7),
(7, 'Distrito 7', 8),
(8, 'Distrito 8', 8),
(9, 'Distrito 9', 8),
(10, 'Distrito 10', 8),
(11, 'Distrito 11', 6),
(12, 'Distrito 12', 6),
(13, 'Distrito 13', 6),
(14, 'Distrito 14', 9),
(15, 'Distrito 15', 9),
(16, 'Distrito 16', 9),
(17, 'Distrito 17', 9),
(18, 'Distrito 18', 2),
(19, 'Distrito 19', 2),
(20, 'Distrito 20', 3),
(21, 'Distrito 21', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `macrodistritos`
--

CREATE TABLE `macrodistritos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `macrodistritos`
--

INSERT INTO `macrodistritos` (`id`, `nombre`) VALUES
(1, 'Centro'),
(2, 'Sur'),
(3, 'Mallasa'),
(4, 'Hampaturi'),
(5, 'Zongo'),
(6, 'Periférica'),
(7, 'Cotahuma'),
(8, 'Max Paredes'),
(9, 'San Antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre`, `paterno`) VALUES
(3, 'Carlos', 'González'),
(4, 'Ana', 'Terrazas'),
(5, 'Luis', 'Ramírez'),
(6, 'Rodrigo', 'Mendoza'),
(7, 'Esteban', 'Quito'),
(8, 'Rosario', 'Valle'),
(55, 'carlos', 'Quiroz');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` int(11) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `contrasenia` varchar(20) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `contrasenia`, `rol`) VALUES
(1, 'charlie', '123123', 1),
(2, 'charlie', '123123', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `distrito_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id`, `nombre`, `distrito_id`) VALUES
(1, 'Centro', 1),
(2, 'San Francisco', 1),
(3, 'San Pedro', 1),
(4, 'Villa Fátima', 1),
(5, 'El Tejar', 2),
(6, 'Villa San Antonio', 2),
(7, 'Los Pinos', 2),
(8, 'Miraflores', 2),
(9, 'San Sebastián', 3),
(10, 'El Salvador', 3),
(11, 'San Juan', 3),
(12, 'Bajo Llojeta', 3),
(13, 'Llojeta', 4),
(14, 'Achumani', 4),
(15, 'Villa Fatima', 4),
(16, 'Bella Vista', 4),
(17, 'Calacoto', 5),
(18, 'La Florida', 5),
(19, 'Aranjuez', 5),
(20, 'Ciudad Satélite', 5),
(21, 'Chasquipampa', 6),
(22, 'Santa Rosa', 6),
(23, 'Irpavi', 6),
(24, 'La Cumbre', 6),
(25, 'San Miguel', 7),
(26, 'La Asunción', 7),
(27, 'La Paz', 7),
(28, 'Santiago', 7),
(29, 'Villa El Carmen', 8),
(30, 'Villa Armonía', 8),
(31, 'Pura Pura', 8),
(32, 'Villa Copacabana', 9),
(33, 'Villa Pabón', 9),
(34, 'El Alto', 9),
(35, 'Santiago', 10),
(36, 'Santa Teresa', 10),
(37, 'Sagrado Corazón', 10),
(38, 'Ciudad Satélite', 11),
(39, 'Ayopaya', 11),
(40, 'Villa de la Cruz', 11),
(41, 'Achocalla', 12),
(42, 'El Alto', 12),
(43, '12 de Octubre', 13),
(44, 'Villa Victoria', 13),
(45, 'Alpacoma', 13),
(46, 'Huayllani', 14),
(47, 'Villa San Antonio', 14),
(48, 'Villa del Carmen', 14),
(49, 'Alto Irpavi', 15),
(50, 'San Miguel', 15),
(51, 'Villa San Antonio', 15),
(52, 'Villa Dolores', 16),
(53, 'Villa Inés', 16),
(54, 'La Floresta', 16),
(55, 'San José', 17),
(56, 'Villa Tiquipaya', 17),
(57, 'Villa de la Merced', 17),
(58, 'San Francisco', 18),
(59, 'Pura Pura', 18),
(60, 'Achumani', 18),
(61, 'Achumani', 19),
(62, 'Villa Fátima', 19),
(63, 'El Valle', 19),
(64, 'La Paz', 20),
(65, 'San Pedro', 20),
(66, 'La Estrella', 20),
(67, 'La Asunción', 21),
(68, 'Ciudad del Niño', 21),
(69, 'Cota Cota', 21);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catastro`
--
ALTER TABLE `catastro`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `macrodistrito_id` (`macrodistrito_id`);

--
-- Indices de la tabla `macrodistritos`
--
ALTER TABLE `macrodistritos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `distrito_id` (`distrito_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `distritos`
--
ALTER TABLE `distritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `macrodistritos`
--
ALTER TABLE `macrodistritos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `catastro`
--
ALTER TABLE `catastro`
  ADD CONSTRAINT `catastro_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `persona` (`ci`);

--
-- Filtros para la tabla `distritos`
--
ALTER TABLE `distritos`
  ADD CONSTRAINT `distritos_ibfk_1` FOREIGN KEY (`macrodistrito_id`) REFERENCES `macrodistritos` (`id`);

--
-- Filtros para la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD CONSTRAINT `zonas_ibfk_1` FOREIGN KEY (`distrito_id`) REFERENCES `distritos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
