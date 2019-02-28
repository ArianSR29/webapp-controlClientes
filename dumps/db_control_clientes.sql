-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 28-02-2019 a las 02:09:01
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_control_clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_clientes`
--

DROP TABLE IF EXISTS `tbl_clientes`;
CREATE TABLE `tbl_clientes` (
  `rpu` varchar(12) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(50) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `colonia` varchar(45) DEFAULT NULL,
  `cp` varchar(45) DEFAULT NULL,
  `telefono` varchar(25) DEFAULT NULL,
  `cuenta` varchar(45) DEFAULT NULL,
  `tarifa` varchar(45) DEFAULT NULL,
  `fecha_alta` varchar(45) DEFAULT NULL,
  `hilos` varchar(45) DEFAULT NULL,
  `sts-servicio` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `rfc` varchar(45) DEFAULT NULL,
  `rainting` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_clientes`
--

INSERT INTO `tbl_clientes` (`rpu`, `nombre`, `apellidos`, `direccion`, `colonia`, `cp`, `telefono`, `cuenta`, `tarifa`, `fecha_alta`, `hilos`, `sts-servicio`, `email`, `rfc`, `rainting`) VALUES
('111111111111', 'Prueba', 'Prueba', 'Prueba', 'Prueba', 'Prueba', '5560072127', 'gh-34g', '78', '2013-02-28', '3', 'fhf', 'prueba@prueba.com', 'dfghjkl', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_llamadas`
--

DROP TABLE IF EXISTS `tbl_llamadas`;
CREATE TABLE `tbl_llamadas` (
  `id_llamada` int(11) NOT NULL,
  `solucion` longtext,
  `importe` double(12,3) DEFAULT NULL,
  `fk_rpu` varchar(12) NOT NULL,
  `fk_rpe` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_llamadas`
--

INSERT INTO `tbl_llamadas` (`id_llamada`, `solucion`, `importe`, `fk_rpu`, `fk_rpe`) VALUES
(1, 'hjkl', 3200.000, '111111111111', '123456789098'),
(2, 'gcfhjkl', 3300.000, '111111111111', '123456789097');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
CREATE TABLE `tbl_usuarios` (
  `rpe` varchar(12) NOT NULL,
  `nombre` varchar(25) DEFAULT NULL,
  `apellidos` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `estado` int(1) DEFAULT NULL,
  `rol` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`rpe`, `nombre`, `apellidos`, `email`, `telefono`, `username`, `password`, `estado`, `rol`) VALUES
('1231', 'asasas', 'looooool', 'looooool@looool', '5', 'lololololo', 'da5fcb6c28d91fa10d80ac559e7e0cb8', 1, 1),
('123456789097', 'Aritza Anahi', 'Salazar Rivera', 'aritza.anahi.salazar@gmail.com', '5560072127', 'AritzaSR', 'da5fcb6c28d91fa10d80ac559e7e0cb8', 1, 2),
('123456789098', 'Rodrigo', 'Arenas González', 'arenasgonzalezrodrigo@gmail.com', '5560072127', 'RodrigoAn5', 'da5fcb6c28d91fa10d80ac559e7e0cb8', 1, 1),
('guardarUsuar', 'guardarUsuario', 'guardarUsuario', 'guardarUsuario@guardarUsuario', 'guardarUsuario', '123456789098', 'da5fcb6c28d91fa10d80ac559e7e0cb8', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_clientes`
--
ALTER TABLE `tbl_clientes`
  ADD PRIMARY KEY (`rpu`);

--
-- Indices de la tabla `tbl_llamadas`
--
ALTER TABLE `tbl_llamadas`
  ADD PRIMARY KEY (`id_llamada`),
  ADD KEY `fk_rpe` (`fk_rpe`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`rpe`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_llamadas`
--
ALTER TABLE `tbl_llamadas`
  MODIFY `id_llamada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_llamadas`
--
ALTER TABLE `tbl_llamadas`
  ADD CONSTRAINT `fk_rpe` FOREIGN KEY (`fk_rpe`) REFERENCES `tbl_usuarios` (`rpe`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
