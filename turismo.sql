-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-08-2015 a las 23:16:49
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
CREATE DATABASE IF NOT EXISTS `turismo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `turismo`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `sp_EliminarCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_EliminarCliente`(
pcliente int(11)
)
BEGIN                         
    if  exists(select * from tcliente where idCliente= pcliente )then 

          begin          
                  DELETE  FROM tcliente where idCliente= pcliente ;
                  select 0 as Error, 'Registro eliminado' as Msg;
          END;
	end if; 
            
END$$

DROP PROCEDURE IF EXISTS `sp_Guardarcliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Guardarcliente`(
  
	nombre varchar(50) ,
	apellido varchar(50) ,
	pasaporte varchar(10) ,
	nacionalidad varchar(30),
	edad varchar(3) )
Begin
     
              if not exists(Select * from tcliente Where cpasaporte = pasaporte) then
                begin
                      Insert Into tcliente values(0,nombre,apellido,pasaporte,nacionalidad,edad);
                      select 0 as Error,'Insertado' as Msg;
                  end;
              else
                  select 1 as Error, 'Error: cliente ya Existe' as Msg;    
              end if;
End$$

DROP PROCEDURE IF EXISTS `sp_InsertarAgencia`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsertarAgencia`(
    
  nombre varchar(50) ,
  direccion varchar(50) ,
  telefono varchar(20) 
)
Begin

    
Insert Into tagencia values(0,nombre,direccion,telefono);
            
End$$

DROP PROCEDURE IF EXISTS `sp_InsertarCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_InsertarCliente`(
    
  nombre varchar(50) ,
  apellido varchar(50) ,
  pasaporte varchar(10) ,
  nacionalidad varchar(30),
  edad varchar(3) )
Begin

    
Insert Into TCliente values(0,nombre,apellido,pasaporte,nacionalidad,edad);
            
End$$

DROP PROCEDURE IF EXISTS `sp_ListarAgencia`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarAgencia`(pidagencia int)
begin
   if (pidagencia=0)then
     select * from tagencia;
   else
      Select * from tagencia Where idagencia=pidagencia; 
   end if;
end$$

DROP PROCEDURE IF EXISTS `sp_ListarCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarCliente`(pcliente int)
begin
   if (pCliente=0)then
     select * from tcliente;
   else
      Select * from tcliente Where idcliente=pcliente; 
   end if;
end$$

DROP PROCEDURE IF EXISTS `sp_ListarEmpleado`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ListarEmpleado`(pidempleado int)
begin
   if (pidempleado=0)then
     select * from templeado;
   else
      Select * from templeado Where idempleado=pidempleado; 
   end if;
end$$

DROP PROCEDURE IF EXISTS `sp_ModificarCliente`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_ModificarCliente`(
	pcliente int(11),
	nombre varchar(50) ,
	apellido varchar(50) ,
	pasaporte varchar(10) ,
	nacionalidad varchar(30),
	edad varchar(3) )
BEGIN
       if  exists(select * from tcliente where idcliente=pcliente)
       then     
             begin                  
                  UPDATE tcliente 
                  set cnombre=nombre,capellido=apellido,cpasaporte=pasaporte,cnacionalidad=nacionalidad,cedad=edad
                  where idcliente=pcliente;
                  select 0 as Error, 'Registro de Carga Modificado' as Msg;
             end;
       else
         select 1 as Error, 'Error: no existe la carga' as Msg;
     end if;      
UPDATE tcliente 
set cnombre=nombre, capellido=apellido, cpasaporte=pasaporte, cnacionalidad=nacionalidad, cedad=edad
where idcliente=pcliente;
select 0 as Error, 'Registro de Carga Modificado' as Msg;
             
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

DROP TABLE IF EXISTS `agencia`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id`, `nombre`, `ruc`, `ciudad`, `direccion`, `foto`, `telefono`, `email`, `password`, `estado`, `updated_at`, `created_at`) VALUES
(4, 'condor', '012345678901', 'Arequipa', 'Urb, Progreso ', '94ca9ca8f5698a09cd78e41a77d81791.png', '944823220', 'data@gmail.com', '$2y$10$LZXM6TsOixJYVmG4C8/wauOWVP9ZId6X2EsGcD01DeW9d3QkHOl2u', 1, '2015-06-18 21:21:43', '2015-06-17 19:37:26'),
(5, 'Travel', '123456789000', 'cusco', 'asdasdasda', 'foto.jpg', '12316546', 'asdasd@asdasd.com', '$2y$10$atWTVRatpLNkSfVVH9WLe.vTg69LNUfeWbd37vi155yJi3cS9ULhW', 1, '2015-08-06 20:54:53', '2015-08-06 20:54:53');

--
-- Disparadores `agencia`
--
DROP TRIGGER IF EXISTS `agregar_usuario_agencia`;
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

DROP TABLE IF EXISTS `cargo`;
CREATE TABLE IF NOT EXISTS `cargo` (
`id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `privilegios` varchar(50) NOT NULL,
  `descripcion` text,
  `estado` int(2) DEFAULT '1',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `nombre`, `privilegios`, `descripcion`, `estado`, `updated_at`, `created_at`) VALUES
(1, 'Administrador', 'General', 'Facultad de Crear y Deshacer usuarios', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'ASD', 'ASDASD', 'ASDASD', 1, '2015-08-06 16:54:00', '2015-08-06 16:54:00'),
(3, 'Tesorera', 'Costos', 'personal autorizado', 1, '2015-08-06 17:05:08', '2015-08-06 17:05:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pagos`
--

DROP TABLE IF EXISTS `detalle_pagos`;
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

DROP TABLE IF EXISTS `dia`;
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

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modalidad_pago`
--

DROP TABLE IF EXISTS `modalidad_pago`;
CREATE TABLE IF NOT EXISTS `modalidad_pago` (
  `id` varchar(30) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `monto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `pagos` (
`id` int(11) NOT NULL,
  `nro_serie` varchar(3) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `total_pago` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

DROP TABLE IF EXISTS `personal`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1004 ;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`, `apellidos`, `dni`, `direccion`, `foto`, `telefono`, `email`, `password`, `estado`, `cargo_id`, `updated_at`, `created_at`) VALUES
(1002, 'NameAdmin', 'ApellidoAdmin', '12345678', 'UNSAAC', '5c88408183fd9e2e118fdd4edcb9a3d5.gif', '123456', 'admin@gmail.com', '$2y$10$fY.z..RdDITDo5/0LcLqNuE9Ij1GuncP1IyJwNMdKSfQFmCSd0s/u', 1, 1, '2015-06-02 17:40:22', '0000-00-00 00:00:00'),
(1003, 'wilbert', 'melendez', '46454646', 'av junin nro 44', 'foto.jpg', '5646541', 'a@gmail.com', '$2y$10$NnkJBv59E2fOaG.pJpKZOOGRn591RaLhFT6M3SvAcVuS0IejoS3qm', 0, 1, '2015-07-15 19:36:01', '2015-07-15 16:18:36');

--
-- Disparadores `personal`
--
DROP TRIGGER IF EXISTS `agregar_usuario_personal`;
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

DROP TABLE IF EXISTS `servicio`;
CREATE TABLE IF NOT EXISTS `servicio` (
`idServicio` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(30) DEFAULT NULL,
  `foto` varchar(100) DEFAULT 'foto.jpg'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`idServicio`, `nombre`, `descripcion`, `foto`) VALUES
(1, 'Hoteleria', NULL, 'foto.jpg'),
(2, 'Transporte', NULL, 'foto.jpg'),
(3, 'Restaurant', NULL, 'foto.jpg'),
(4, 'tickets', NULL, 'foto.jpg'),
(5, 'Guia', NULL, 'foto.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tagencia`
--

DROP TABLE IF EXISTS `tagencia`;
CREATE TABLE IF NOT EXISTS `tagencia` (
`idagencia` int(11) NOT NULL,
  `anombre` varchar(50) DEFAULT NULL,
  `adireccion` varchar(50) DEFAULT NULL,
  `atelefono` varchar(20) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `tagencia`
--

INSERT INTO `tagencia` (`idagencia`, `anombre`, `adireccion`, `atelefono`) VALUES
(1, 'conde travel E.I.R.L.', 'calle plateros ', '351139'),
(2, 'cola mono E.I.R.L.', 'av. selva alegre', '884411');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcliente`
--

DROP TABLE IF EXISTS `tcliente`;
CREATE TABLE IF NOT EXISTS `tcliente` (
`idcliente` int(11) NOT NULL,
  `cnombre` varchar(50) NOT NULL,
  `capellido` varchar(50) NOT NULL,
  `cpasaporte` varchar(10) NOT NULL,
  `cnacionalidad` varchar(30) NOT NULL,
  `cedad` varchar(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `tcliente`
--

INSERT INTO `tcliente` (`idcliente`, `cnombre`, `capellido`, `cpasaporte`, `cnacionalidad`, `cedad`) VALUES
(1, 'eva', 'soliz monsan', '12365478', 'alemana', '25'),
(2, 'samuel', 'robles arenas ', '98745632', 'sueca', '23'),
(3, 'yuli', 'salome tipo', '46549847', 'chueca', '23'),
(4, 'Adriana', 'Mendoza Loizar', '46259836', 'Italiana', '23'),
(5, 'leonil', 'chipana  huamani', '44562681', 'peru', '23'),
(6, 'elmer', 'conde mescco', '44668122', 'peru', '25'),
(7, 'vladimir', 'florez tinta', '46219404', 'peru', '23'),
(8, 'raul', 'hancock dias', '208778862', 'inglaterra', '28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcobro`
--

DROP TABLE IF EXISTS `tcobro`;
CREATE TABLE IF NOT EXISTS `tcobro` (
`idcobro` int(11) NOT NULL,
  `idreserva` int(11) NOT NULL,
  `idempleado` int(11) NOT NULL,
  `acuenta` decimal(10,3) DEFAULT NULL,
  `saldo` decimal(10,3) DEFAULT NULL,
  `cfecha` varchar(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tcobro`
--

INSERT INTO `tcobro` (`idcobro`, `idreserva`, `idempleado`, `acuenta`, `saldo`, `cfecha`) VALUES
(1, 4, 1, '100.000', '600.000', '29/11/2012'),
(2, 9, 1, '800.000', '400.000', '02/12/2012'),
(3, 9, 1, '400.000', '0.000', '02/12/2012');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdetalletour`
--

DROP TABLE IF EXISTS `tdetalletour`;
CREATE TABLE IF NOT EXISTS `tdetalletour` (
`iddetalle` int(11) NOT NULL,
  `idreserva` int(11) NOT NULL,
  `idtour` int(11) NOT NULL,
  `idguia` int(11) NOT NULL,
  `idagencia` int(11) NOT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `precio` decimal(10,3) DEFAULT NULL,
  `A` varchar(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `tdetalletour`
--

INSERT INTO `tdetalletour` (`iddetalle`, `idreserva`, `idtour`, `idguia`, `idagencia`, `tipo`, `precio`, `A`) VALUES
(1, 4, 3, 1, 2, 'ENDOSAR', '4897.000', '1'),
(2, 5, 2, 1, 2, 'ENDOSAR', '182.000', '1'),
(3, 5, 3, 2, 2, 'ENDOSAR', '182.000', '0'),
(4, 5, 1, 1, 1, 'Ninguno', '0.000', '0'),
(5, 6, 2, 3, 2, 'ENDOSAR', '18080.000', '1'),
(6, 6, 3, 3, 1, 'Ninguno', '0.000', '1'),
(7, 7, 1, 1, 2, 'ENDOSAR', '180.000', '1'),
(8, 9, 4, 2, 2, 'ENDOSAR', '140.000', '1'),
(9, 9, 3, 1, 1, 'Ninguno', '0.000', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `templeado`
--

DROP TABLE IF EXISTS `templeado`;
CREATE TABLE IF NOT EXISTS `templeado` (
`idempleado` int(11) NOT NULL,
  `enombre` varchar(50) DEFAULT NULL,
  `eapellido` varchar(50) DEFAULT NULL,
  `eruc` varchar(10) DEFAULT NULL,
  `edireccion` varchar(50) DEFAULT NULL,
  `etelefono` varchar(20) DEFAULT NULL,
  `ecargo` varchar(50) DEFAULT NULL,
  `epassword` varchar(50) DEFAULT NULL,
  `etipo` varchar(50) DEFAULT NULL,
  `eestado` varchar(2) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `templeado`
--

INSERT INTO `templeado` (`idempleado`, `enombre`, `eapellido`, `eruc`, `edireccion`, `etelefono`, `ecargo`, `epassword`, `etipo`, `eestado`) VALUES
(1, 'EVER', 'CONDE DEL CONDE', '36985210', 'AV. HUASCARAN', '78546', 'administrador', '63ca1d023c39c1d90774ae472782f81c', 'CONTRATADO', '1'),
(2, 'AMELIA', 'FOL', '14587', 'AV. SOL', '352145', 'secretaria', 'caaaa1e70d01d4767607f7f39c9e9f93', 'CONTRATADO', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tguia`
--

DROP TABLE IF EXISTS `tguia`;
CREATE TABLE IF NOT EXISTS `tguia` (
`idguia` int(11) NOT NULL,
  `gnombre` varchar(50) DEFAULT NULL,
  `gapellido` varchar(50) DEFAULT NULL,
  `gsexo` varchar(2) DEFAULT NULL,
  `gtelefono` varchar(20) DEFAULT NULL,
  `gdescripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tguia`
--

INSERT INTO `tguia` (`idguia`, `gnombre`, `gapellido`, `gsexo`, `gtelefono`, `gdescripcion`) VALUES
(1, 'MANUELITO', 'CON LA MANO', 'M', '351136', 'INGLES, FRANSES'),
(2, 'FIORELA', 'TIGRESA ORIENTE', 'F', '6325456', 'INGLES, ITALIANO'),
(3, 'fernando', 'cutra mochi', 'M', '14587965', 'ingles, portugues, quechua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thotel`
--

DROP TABLE IF EXISTS `thotel`;
CREATE TABLE IF NOT EXISTS `thotel` (
`idhotel` int(11) NOT NULL,
  `hnombre` varchar(50) DEFAULT NULL,
  `hdireccion` varchar(50) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  `htelefono` varchar(20) DEFAULT NULL,
  `hdescripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `thotel`
--

INSERT INTO `thotel` (`idhotel`, `hnombre`, `hdireccion`, `categoria`, `htelefono`, `hdescripcion`) VALUES
(1, 'las camitas ok', 'AV. EN TU CASA', 'DOS ESTRELLAS', '623548', 'REGULAR'),
(2, 'sauce blue', 'av. rosales', 'estrellada', '362514', 'mano menos TV, Telefono Internet'),
(3, 'casa de la guinga', 'san blas', 'hoatal', '3659874', 'buena');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treserva`
--

DROP TABLE IF EXISTS `treserva`;
CREATE TABLE IF NOT EXISTS `treserva` (
`idreserva` int(11) NOT NULL,
  `idhotel` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `bfecha` varchar(20) DEFAULT NULL,
  `bguia` varchar(10) DEFAULT NULL,
  `btrasporte` varchar(10) DEFAULT NULL,
  `balimento` varchar(10) DEFAULT NULL,
  `btipocliente` varchar(10) DEFAULT NULL,
  `bfecha_inicio` varchar(20) DEFAULT NULL,
  `bfecha_fin` varchar(20) DEFAULT NULL,
  `btipobagon` varchar(50) DEFAULT NULL,
  `bmachupicchu` varchar(50) DEFAULT NULL,
  `bhorasalida` varchar(20) DEFAULT NULL,
  `bhorallegada` varchar(20) DEFAULT NULL,
  `bopcional` text,
  `bobservacion` text
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `treserva`
--

INSERT INTO `treserva` (`idreserva`, `idhotel`, `idcliente`, `bfecha`, `bguia`, `btrasporte`, `balimento`, `btipocliente`, `bfecha_inicio`, `bfecha_fin`, `btipobagon`, `bmachupicchu`, `bhorasalida`, `bhorallegada`, `bopcional`, `bobservacion`) VALUES
(1, 1, 7, '24/11/2012', 'si', 'si', '', 'Estudiante', '24/11/2012', '25/11/2012', 'Ninguno', 'Ninguno', 'Ninguno', 'Ninguno', 'Machupicchu  ', ''),
(2, 2, 7, '29/11/2012', 'si', 'si', '', 'Adulto', '29/11/2012', '30/11/2012', 'AUTOVAGON', ' MACHUPICCHU, HUAYNAPICCHU 1 GRUPO', ' 5:10 am', ' 21:30 pm', 'Machupicchu  ', ''),
(3, 1, 7, '29/11/2012', 'si', 'si', 'si', 'Adulto', '29/11/2012', '30/11/2012', 'VISTADONE', ' MACHUPICCHU, HUAYNAPICCHU 1 GRUPO', ' 6:10 am', ' 16:22 pm', '  ', ''),
(4, 1, 7, '29/11/2012', 'si', 'si', 'si', 'Adulto', '30/11/2012', '30/11/2012', 'VISTADONE', ' MACHUPICCHU, HUAYNAPICCHU 1 GRUPO', ' 5:10 am', ' 14:55 pm', 'Machupicchu  ', ''),
(5, 1, 7, '01/12/2012', 'si', 'si', 'si', 'Adulto', '01/12/2012', '02/12/2012', 'EXPEDITION', ' MACHUPICCHU', ' 5:10 am', ' 5:35 am', 'Machupicchu  ', ''),
(6, 1, 6, '01/12/2012', 'si', 'si', 'si', 'Adulto', '01/12/2012', '02/12/2012', 'EXPEDITION', ' MACHUPICCHU, HUAYNAPICCHU 2 GRUPO', ' 5:10 am', ' 14:55 pm', 'Machupicchu  ', ''),
(7, 2, 7, '02/12/2012', 'si', 'si', 'si', 'Adulto', '02/12/2012', '03/12/2012', 'ANDEAN EXPLORE', ' MACHUPICCHU, MUSEO', ' 5:10 am', ' 21:30 pm', 'Machupicchu  ', ''),
(8, 3, 8, '02/12/2012', 'si', 'si', 'si', 'Estudiante', '02/12/2012', '05/12/2012', 'Ninguno', ' MACHUPICCHU, HUAYNAPICCHU 2 GRUPO', 'Ninguno', ' 21:30 pm', 'Machupicchu  ', ''),
(9, 3, 8, '02/12/2012', 'si', 'si', 'si', 'Estudiante', '02/12/2012', '05/12/2012', 'Ninguno', ' MACHUPICCHU, HUAYNAPICCHU 2 GRUPO', 'Ninguno', ' 21:30 pm', 'Machupicchu  ', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ttour`
--

DROP TABLE IF EXISTS `ttour`;
CREATE TABLE IF NOT EXISTS `ttour` (
`idtour` int(11) NOT NULL,
  `tnombre` varchar(100) DEFAULT NULL,
  `costoreferencial` decimal(10,3) DEFAULT NULL,
  `tdescripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `ttour`
--

INSERT INTO `ttour` (`idtour`, `tnombre`, `costoreferencial`, `tdescripcion`) VALUES
(1, 'MACHUPICCHU LARES', '300.000', 'muy interesante'),
(2, 'city tours', '500.000', 'visita a la ciudad del cusco'),
(3, 'CHOQUEKIRAO', '600.000', 'visita a todo los lugares del cusco'),
(4, 'INKA JUNGLE', '800.000', 'caminata por el camino inca');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

DROP TABLE IF EXISTS `turno`;
CREATE TABLE IF NOT EXISTS `turno` (
`id` int(11) NOT NULL,
  `nombre` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `tipoUsuario`, `nroId`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '$2y$10$fY.z..RdDITDo5/0LcLqNuE9Ij1GuncP1IyJwNMdKSfQFmCSd0s/u', 'Personal', 1002, 1, 'OKEzNP1ons5e99iEsbf3TiXvE4U3BnccQq6zX3vUReWOvkngmWXKCXCcRuhk', '2015-05-15 10:30:33', '2015-08-05 22:27:10'),
(2, 'data@gmail.com', '$2y$10$LZXM6TsOixJYVmG4C8/wauOWVP9ZId6X2EsGcD01DeW9d3QkHOl2u', 'Agencia', 4, 1, '0HHI24jVQtyLdDkmLsB3K292Nd8cWltWs0p2QCdNqSNKDnAec9V0beZhkdJH', '2015-06-17 14:37:26', '2015-08-05 23:07:44'),
(3, 'asdasd@asdasd.com', '$2y$10$atWTVRatpLNkSfVVH9WLe.vTg69LNUfeWbd37vi155yJi3cS9ULhW', 'Agencia', 5, 1, NULL, '2015-08-06 15:54:53', '0000-00-00 00:00:00');

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
 ADD PRIMARY KEY (`id`), ADD KEY `id_alumno` (`id_cliente`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
 ADD PRIMARY KEY (`id`), ADD KEY `cargo_id` (`cargo_id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
 ADD PRIMARY KEY (`idServicio`), ADD UNIQUE KEY `idServicio` (`idServicio`);

--
-- Indices de la tabla `tagencia`
--
ALTER TABLE `tagencia`
 ADD PRIMARY KEY (`idagencia`);

--
-- Indices de la tabla `tcliente`
--
ALTER TABLE `tcliente`
 ADD PRIMARY KEY (`idcliente`);

--
-- Indices de la tabla `tcobro`
--
ALTER TABLE `tcobro`
 ADD PRIMARY KEY (`idcobro`), ADD KEY `idreserva` (`idreserva`), ADD KEY `idempleado` (`idempleado`);

--
-- Indices de la tabla `tdetalletour`
--
ALTER TABLE `tdetalletour`
 ADD PRIMARY KEY (`iddetalle`), ADD KEY `idreserva` (`idreserva`), ADD KEY `idtour` (`idtour`), ADD KEY `idguia` (`idguia`), ADD KEY `idagencia` (`idagencia`);

--
-- Indices de la tabla `templeado`
--
ALTER TABLE `templeado`
 ADD PRIMARY KEY (`idempleado`);

--
-- Indices de la tabla `tguia`
--
ALTER TABLE `tguia`
 ADD PRIMARY KEY (`idguia`);

--
-- Indices de la tabla `thotel`
--
ALTER TABLE `thotel`
 ADD PRIMARY KEY (`idhotel`);

--
-- Indices de la tabla `treserva`
--
ALTER TABLE `treserva`
 ADD PRIMARY KEY (`idreserva`), ADD KEY `idhotel` (`idhotel`), ADD KEY `idcliente` (`idcliente`);

--
-- Indices de la tabla `ttour`
--
ALTER TABLE `ttour`
 ADD PRIMARY KEY (`idtour`);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1004;
--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
MODIFY `idServicio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tagencia`
--
ALTER TABLE `tagencia`
MODIFY `idagencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tcliente`
--
ALTER TABLE `tcliente`
MODIFY `idcliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `tcobro`
--
ALTER TABLE `tcobro`
MODIFY `idcobro` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tdetalletour`
--
ALTER TABLE `tdetalletour`
MODIFY `iddetalle` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `templeado`
--
ALTER TABLE `templeado`
MODIFY `idempleado` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tguia`
--
ALTER TABLE `tguia`
MODIFY `idguia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `thotel`
--
ALTER TABLE `thotel`
MODIFY `idhotel` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `treserva`
--
ALTER TABLE `treserva`
MODIFY `idreserva` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `ttour`
--
ALTER TABLE `ttour`
MODIFY `idtour` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_pagos`
--
ALTER TABLE `detalle_pagos`
ADD CONSTRAINT `detalle_pagos_ibfk_1` FOREIGN KEY (`id_modalidad`) REFERENCES `modalidad_pago` (`id`);

--
-- Filtros para la tabla `personal`
--
ALTER TABLE `personal`
ADD CONSTRAINT `personal_ibfk_1` FOREIGN KEY (`cargo_id`) REFERENCES `cargo` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
