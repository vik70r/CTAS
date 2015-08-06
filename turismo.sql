-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2015 a las 00:16:40
-- Versión del servidor: 5.6.20
-- Versión de PHP: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `turismo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE IF NOT EXISTS `agencia` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `ruc` varchar(12) NOT NULL,
  `ciudad` varchar(150) NOT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'foto.jpg',
  `telefono` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `estado` int(2) DEFAULT '1',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id`, `nombre`, `ruc`, `ciudad`, `direccion`, `foto`, `telefono`, `email`, `password`, `estado`, `updated_at`, `created_at`) VALUES
(4, 'condor', '012345678901', 'Arequipa', 'Urb, Progreso ', '94ca9ca8f5698a09cd78e41a77d81791.png', '944823220', 'data@gmail.com', '$2y$10$LZXM6TsOixJYVmG4C8/wauOWVP9ZId6X2EsGcD01DeW9d3QkHOl2u', 1, '2015-06-18 21:21:43', '2015-06-17 19:37:26');

--
-- Disparadores `agencia`
--
DELIMITER //
CREATE TRIGGER `agregar_usuario_agencia` AFTER INSERT ON `agencia`
 FOR EACH ROW INSERT INTO users(email,password,tipoUsuario,nroId,estado,created_at)
values (NEW.email,NEW.password,'Agencia',NEW.id,NEW.estado,NOW())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE IF NOT EXISTS `cargo` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `privilegios` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(2) DEFAULT '1',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `privilegios`, `descripcion`, `estado`, `updated_at`, `created_at`) VALUES
(1, 'Administrador', 'General', 'Facultad de Crear y Deshacer usuarios', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `tipodocumento` varchar(50) NOT NULL,
  `documento` varchar(8) NOT NULL,
  `email` varchar(120) NOT NULL,
  `telefono` varchar(120) NOT NULL,
  `ciudad` varchar(120) NOT NULL,
  `pais` varchar(150) NOT NULL,
  `foto` varchar(100) DEFAULT 'foto.jpg',
  `estado` int(2) DEFAULT '1',
  `udated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `tipodocumento`, `documento`, `email`, `telefono`, `ciudad`, `pais`, `foto`, `estado`, `udated_at`, `created_at`) VALUES
(3, 'walter', 'medina', 'DNI', '12345600', 'walter@gmail.com', '00123456', 'Arequipa', 'Peru', 'foto.jpg', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');


--
-- Estructura de tabla para la tabla `detalle_pagos`
--

CREATE TABLE IF NOT EXISTS `detalle_pagos` (
`id` int(11) NOT NULL,
  `pagos_id` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `id_modalidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dia`
--

CREATE TABLE IF NOT EXISTS `dia` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `dia`
--

INSERT INTO `dia` (`id`, `nombre`) VALUES
(1, 'Intiraymi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE IF NOT EXISTS `grupo` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad_pago`
--

CREATE TABLE IF NOT EXISTS `modalidad_pago` (
  `id` varchar(30) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `monto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE IF NOT EXISTS `pagos` (
`id` int(11) NOT NULL,
  `nro_serie` varchar(3) DEFAULT NULL,
  `id_alumno` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total_pago` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `dni` varchar(8) NOT NULL,
  `direccion` varchar(120) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'foto.jpg',
  `telefono` varchar(120) DEFAULT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `estado` int(2) DEFAULT '1',
  `cargo_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1003 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellidos`, `dni`, `direccion`, `foto`, `telefono`, `email`, `password`, `estado`, `cargo_id`, `updated_at`, `created_at`) VALUES
(1002, 'NameAdmin', 'ApellidoAdmin', '12345678', 'UNSAAC', '5c88408183fd9e2e118fdd4edcb9a3d5.gif', '123456', 'admin@gmail.com', '$2y$10$fY.z..RdDITDo5/0LcLqNuE9Ij1GuncP1IyJwNMdKSfQFmCSd0s/u', 1, 1, '2015-06-02 17:40:22', '0000-00-00 00:00:00');

--
-- Disparadores `personal`
--
DELIMITER //
CREATE TRIGGER `agregar_usuario_personal` AFTER INSERT ON `personal`
 FOR EACH ROW INSERT INTO users(email,password,tipoUsuario,nroId,estado,created_at)
values (NEW.email,NEW.password,'Personal',NEW.id,NEW.estado,NOW())
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE IF NOT EXISTS `servicio` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `nombre`) VALUES
(1, 'Hoteleria'),
(2, 'Transporte'),
(3, 'Restaurant'),
(4, 'tickets'),
(5, 'Guia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE IF NOT EXISTS `turno` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `tipoUsuario` varchar(120) NOT NULL,
  `nroId` int(11) NOT NULL,
  `estado` int(2) DEFAULT '1',
  `remember_token` varchar(60) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `tipoUsuario`, `nroId`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$fY.z..RdDITDo5/0LcLqNuE9Ij1GuncP1IyJwNMdKSfQFmCSd0s/u', 'Personal', 1002, 1, 'RzbPClaUOl27SytqO600WtZf4aRI78X78FMfCpkGo0jGQUYntReYQQ2s6zeW', '2015-05-15 10:30:33', '2015-06-18 22:06:46'),
(2, 'data@gmail.com', '$2y$10$LZXM6TsOixJYVmG4C8/wauOWVP9ZId6X2EsGcD01DeW9d3QkHOl2u', 'Agencia', 4, 1, 'TvPuXum8bB8ev7yWZ2fn8qtF186Ifljc5lCM5pW1E2WmYFhVmXZ6bfjflwR9', '2015-06-17 14:37:26', '2015-06-18 22:11:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientea`
--
ALTER TABLE `clientea`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_pagos`
--
ALTER TABLE `detalle_pagos`
 ADD PRIMARY KEY (`id`), ADD KEY `id_modalidad` (`id_modalidad`), ADD KEY `pagos_id` (`pagos_id`);

--
-- Indices de la tabla `dia`
--
ALTER TABLE `dia`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modalidad_pago`
--
ALTER TABLE `modalidad_pago`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
 ADD PRIMARY KEY (`id`), ADD KEY `id_alumno` (`id_alumno`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`), ADD KEY `cargo_id` (`cargo_id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
 ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `clientea`
--
ALTER TABLE `clientea`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `detalle_pagos`
--
ALTER TABLE `detalle_pagos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `dia`
--
ALTER TABLE `dia`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `grupo`
--
ALTER TABLE `grupo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1003;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pagos`
--
ALTER TABLE `detalle_pagos`
ADD CONSTRAINT `detalle_pagos_ibfk_1` FOREIGN KEY (`id_modalidad`) REFERENCES `modalidad_pago` (`id`),
ADD CONSTRAINT `detalle_pagos_ibfk_2` FOREIGN KEY (`pagos_id`) REFERENCES `pagos` (`id`);

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
ADD CONSTRAINT `pagos_ibfk_1` FOREIGN KEY (`id_alumno`) REFERENCES `cliente` (`id`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
