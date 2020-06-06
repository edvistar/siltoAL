-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2020 a las 20:39:01
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `relaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centro`
--

CREATE TABLE `centro` (
  `id_centro` int(11) NOT NULL COMMENT 'Id de centro',
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre  de centro',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email centro',
  `telefono` bigint(20) NOT NULL COMMENT 'Numero cel centro',
  `whatsapp` tinyint(1) DEFAULT NULL COMMENT 'Whatsapp de centro',
  `departamento` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Departamento de centro',
  `ciudad` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Ciudad de centro',
  `lugar` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Lugar de centro o bodega',
  `identificacion` bigint(20) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre`, `email`, `telefono`, `whatsapp`, `departamento`, `ciudad`, `lugar`, `identificacion`, `id_producto`) VALUES
(90, 'manizalez', 'manizalezgmail.com', 987654, 1, 'caldas', 'manizalez', 'bodega principal', 1070007809, 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL COMMENT 'Identificación de producto ',
  `nombre` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre del producto',
  `costo` int(11) NOT NULL COMMENT 'Valor por kilo de producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `costo`) VALUES
(2, 'carlosss', 25000),
(6, 'carlos', 4500),
(78, 'Manzana', 567);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL COMMENT 'Identificación de ruta',
  `fecha_ruta` date NOT NULL COMMENT 'Fecha de ruta',
  `hora_salida` date NOT NULL COMMENT 'hora de salida de vehículo de centro',
  `hora_llegada` date NOT NULL COMMENT 'hora de llegada de vehículo a centro',
  `descripcion` varchar(255) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripción de la ruta',
  `tipo_ruta` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de ruta solocitada.',
  `precinto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de presinto del tipo de ruta solicitada.',
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificación de usuario',
  `placa` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Numero de placa de vehiculo.',
  `id_centro` int(11) NOT NULL COMMENT 'Id de centro dirigido la ruta.',
  `id_producto` int(11) NOT NULL COMMENT 'id de producto',
  `id_solicitud` int(11) NOT NULL COMMENT 'id de solicitud'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL COMMENT 'Id de la solicitud para la ruta.',
  `solicitud` datetime NOT NULL COMMENT 'Fecha de la solicitudde ruta.',
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Descripcion de la ruta solicitada.',
  `id_centro` int(11) NOT NULL,
  `identificacion` bigint(20) NOT NULL COMMENT 'Nombre del encargado de centro.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `identificacion` bigint(20) NOT NULL COMMENT 'Identificacion de user',
  `nombre` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de user',
  `apellido` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido  de user',
  `email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email de user',
  `telefono` int(20) NOT NULL COMMENT 'Numero de celular',
  `whatsapp` tinyint(1) NOT NULL COMMENT 'Whatsapp',
  `cargo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Rol de user',
  `estado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del User',
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de ingreso user',
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `nombre`, `apellido`, `email`, `telefono`, `whatsapp`, `cargo`, `estado`, `fecha_ingreso`, `foto`, `pass`) VALUES
(10783, 'carlos', 'castro clavijoas', 'victorha@gmail.com', 111, 0, 'conductor', 'activo', '2020-06-06 10:13:33', '', '1234567º'),
(1070007809, 'alexa', 'castro', 'la@gmail.com', 87654321, 1, 'administrador', 'activo', '2020-05-31 17:29:37', '', '123456789'),
(77878787887, 'Alejandro', 'castro', 'colombia@gmail.com', 2147483647, 0, 'conductor', 'activo', '2020-06-06 10:39:11', '', '12345679');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placa` varchar(5) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Placa de vehiculo',
  `capacidad` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Capacidad de cargue vehiculo',
  `seguro` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Seguro de vehiculo',
  `tecnomecanica` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tecnomecanica vehiculo',
  `tipo_vehiculo` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Tipo de vehiculo de carga.',
  `costo_flete` int(11) NOT NULL COMMENT 'Costo de plete por carga',
  `gps` tinyint(4) NOT NULL COMMENT 'GPS de vehiculo',
  `estado` varchar(11) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estao de vehiculo en la empresa propiedad o contratista.',
  `identificacion` bigint(20) NOT NULL COMMENT 'Nombre de conductor.',
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha del registro'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placa`, `capacidad`, `seguro`, `tecnomecanica`, `tipo_vehiculo`, `costo_flete`, `gps`, `estado`, `identificacion`, `fecha_registro`) VALUES
('678ty', '15 tonelads', 'hgfdsa', '2020-06-05', 'contratista', 4545555, 0, 'furgon', 1070007809, '2020-06-13 05:00:00'),
('ghy56', '15 tonelads', 'hgfdsa', '2020-06-27', 'contratista', 4545555, 0, 'furgon', 10783, '2020-06-26 05:00:00'),
('yui32', '7', 'hgfdsa', '2020-06-25', 'contratista', 4545555, 0, 'furgon', 77878787887, '2020-06-25 05:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centro`
--
ALTER TABLE `centro`
  ADD PRIMARY KEY (`id_centro`),
  ADD UNIQUE KEY `id_producto` (`id_producto`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`),
  ADD UNIQUE KEY `placa` (`placa`),
  ADD UNIQUE KEY `id_centro` (`id_centro`),
  ADD UNIQUE KEY `id_solicitud` (`id_solicitud`),
  ADD UNIQUE KEY `id_producto` (`id_producto`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD UNIQUE KEY `id_centro` (`id_centro`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`identificacion`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placa`),
  ADD UNIQUE KEY `identificacion` (`identificacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la solicitud para la ruta.';

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `centro`
--
ALTER TABLE `centro`
  ADD CONSTRAINT `centro_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuario` (`identificacion`),
  ADD CONSTRAINT `centro_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`);

--
-- Filtros para la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD CONSTRAINT `rutas_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_centro`) REFERENCES `centro` (`id_centro`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`identificacion`) REFERENCES `usuario` (`identificacion`);

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`identificacion`) REFERENCES `usuario` (`identificacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
