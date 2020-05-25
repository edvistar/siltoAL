-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
<<<<<<< HEAD
<<<<<<< HEAD
-- Tiempo de generación: 24-05-2020 a las 19:30:58
=======
-- Tiempo de generación: 24-05-2020 a las 19:23:55
>>>>>>> f2bb0a861ebeb1d0c0c079f9bf6a531b2b72667d
=======
-- Tiempo de generación: 25-05-2020 a las 22:50:58
>>>>>>> wapv
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `silto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id_centro` int(11) NOT NULL COMMENT 'Id de centro',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre  de centro',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email centro',
  `telefono` bigint(20) NOT NULL COMMENT 'Numero cel centro',
  `whatsapp` tinyint(1) DEFAULT NULL COMMENT 'Whatsapp de centro',
  `departamento` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departamento de centro',
  `ciudad` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de centro',
  `encargado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Encargado de centro.',
  `lugar` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Lugar de centro o bodega'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre`, `email`, `telefono`, `whatsapp`, `departamento`, `ciudad`, `encargado`, `lugar`) VALUES
(7899, 'OcatiCotas', 'OcatiCota@gmail.com', 3138252764, 0, 'Medellin', 'bogota', 'Jhonatan Lopez lopez', 'chia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL COMMENT 'Identificación de producto ',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del producto',
  `peso` decimal(11,0) NOT NULL COMMENT 'Peso de cada producto',
  `costo` int(11) NOT NULL COMMENT 'Valor por kilo de producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `peso`, `costo`) VALUES
(23, 'aguacate', '40', 10000),
(1324, 'Piña colada', '40', 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL COMMENT 'Identificación de ruta',
  `destino` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre donde llega la ruta',
  `fecha_ruta` date NOT NULL COMMENT 'Fecha de ruta',
  `hora_salida` date NOT NULL COMMENT 'hora de salida de vehículo de centro',
  `hora_llegada` date NOT NULL COMMENT 'hora de llegada de vehículo a centro',
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción de la ruta',
  `tipo_ruta` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de ruta solocitada.',
  `precinto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de presinto del tipo de ruta solicitada.',
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificación de usuario',
  `placa` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de placa de vehiculo.',
  `id_centro` int(11) NOT NULL COMMENT 'Id de centro dirigido la ruta.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `destino`, `fecha_ruta`, `hora_salida`, `hora_llegada`, `descripcion`, `tipo_ruta`, `precinto`, `identificacion`, `placa`, `id_centro`) VALUES
(3434, 'Cota', '2020-05-11', '2020-05-05', '2020-05-19', 'Variedad', '2323', '54567', 16838095, 'a3423', 3422),
(345678, 'La vega', '2020-05-19', '2020-05-20', '2020-05-21', 'Viaje commpleto', 'Nacional', '5555', 16838095, 'AD3435', 34545);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL COMMENT 'Id de la solicitud para la ruta.',
  `solicitud` date NOT NULL COMMENT 'Fecha de la solicitudde ruta.',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripcion de la ruta solicitada.',
  `cantidad_kilos` decimal(10,0) NOT NULL COMMENT 'Cantidad de kilos solicitados para  la ruta'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `solicitud`, `descripcion`, `cantidad_kilos`) VALUES
(1234, '2020-05-25', 'Viaje commpleto', '800');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificacion de user',
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de user',
  `apellido` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido  de user',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email de user',
  `telefono` int(20) NOT NULL COMMENT 'Numero de celular',
  `whatsapp` tinyint(1) NOT NULL COMMENT 'Whatsapp',
  `cargo` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Rol de user',
  `estado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del User',
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de ingreso user',
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `nombre`, `apellido`, `email`, `telefono`, `whatsapp`, `cargo`, `estado`, `fecha_ingreso`, `foto`, `pass`) VALUES
(16838095, 'eduardo', 'sando', 'victorhoyoscolombia@gmail.com', 2147483647, 1, 'supervisor', 'activo', '2020-05-25 00:00:00', '../../img/upload/fotodigital.png', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placa` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Placa de vehiculo',
  `capacidad` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Capacidad de cargue vehiculo',
  `seguro` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Seguro de vehiculo',
  `tecnomecanica` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tecnomecanica vehiculo',
  `tipo_vehiculo` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de vehiculo de carga.',
  `conductor` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de conductor de vehiculo.',
  `costo_flete` int(11) NOT NULL COMMENT 'Costo de plete por carga',
  `gps` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'GPS de vehiculo',
  `estado` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estao de vehiculo en la empresa propiedad o contratista.',
  `fecha_registro` varchar(11) CHARACTER SET ucs2 COLLATE ucs2_spanish2_ci NOT NULL COMMENT 'Fecha del registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placa`, `capacidad`, `seguro`, `tecnomecanica`, `tipo_vehiculo`, `conductor`, `costo_flete`, `gps`, `estado`, `fecha_registro`) VALUES
('AD3435', '10', 'Resguard', '2020-05-19', 'Furgon', 'Victor', 200000, 'si', 'Bueno', '2020-05-29'),
('AD34356', '10', 'Omega 3', '2020-05-21', 'Furgon', 'Eduardo', 200000, 'si', 'Bueno', '2020-05-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
