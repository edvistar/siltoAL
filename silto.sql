-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2020 a las 02:34:03
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTARCIUDADES` (IN `IDDEPARTAMENTO` INT)  SELECT * FROM CIUDADES WHERE idDEPA=IDDEPARTAMENTO$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTARDEPARTAMENTOS` ()  SELECT * FROM departamentos$$

DELIMITER ;

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
  `nombreUsuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `idCiud` int(5) NOT NULL DEFAULT 0,
  `ciudad` varchar(50) NOT NULL,
  `idDepa` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`idCiud`, `ciudad`, `idDepa`) VALUES
(1, 'Leticia', '1'),
(2, 'Medellín', '2'),
(3, 'Arauca', '3'),
(4, 'Barranquilla', '4'),
(5, 'Cartagena', '5'),
(6, 'Tunja', '6'),
(7, 'Manizales', '7'),
(8, 'Florencia', '8'),
(9, 'Yopal', '9'),
(10, 'Popayán', '10'),
(11, 'Valledupar', '11'),
(12, 'Quibdó', '12'),
(13, 'Montería', '13'),
(14, 'Bogotá', '14'),
(15, 'Puerto Inírida', '15'),
(16, 'San José del Guaviare', '16'),
(17, 'Neiva', '17'),
(18, 'Riohacha', '18'),
(19, 'Santa Marta', '19'),
(20, 'Villavicencio', '20'),
(21, 'Pasto', '21'),
(22, 'Cúcuta', '22'),
(23, 'Mocoa', '23'),
(24, 'Armenia', '24'),
(25, 'Pereira', '25'),
(32, 'Puerto Carreño', '32'),
(31, 'Mitú', '31'),
(30, 'Cali', '30'),
(29, 'Ibagué', '29'),
(28, 'Sincelejo', '28'),
(27, 'Bucaramanga', '27'),
(26, 'San Andrés', '26'),
(33, 'chia', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `idDepa` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`idDepa`, `departamento`) VALUES
(1, 'Amazonas'),
(2, 'Antioquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolívar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanaré'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

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
  `nombreUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Nombre de user',
  `apellidoUsuario` varchar(25) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Apellido  de user',
  `emailUsuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Email de user',
  `telefonoUsuario` int(20) NOT NULL COMMENT 'Numero de celular',
  `whatsappUsuario` tinyint(1) NOT NULL COMMENT 'Whatsapp',
  `cargo` varchar(15) COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Rol de user',
  `estado` text COLLATE utf8_spanish2_ci NOT NULL COMMENT 'Estado del User',
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'Fecha de ingreso user',
  `foto` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL COMMENT 'password'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`identificacion`, `nombreUsuario`, `apellidoUsuario`, `emailUsuario`, `telefonoUsuario`, `whatsappUsuario`, `cargo`, `estado`, `fecha_ingreso`, `foto`, `pass`) VALUES
(16838095, 'eduardo', 'sando', 'victorhoyoscolombia@gmail.com', 2147483647, 1, 'administrador', 'activo', '2020-06-08 18:30:20', 'public/img/contact/20200312_083547.jpg', 'a490da78e8784686af31bf0f2dab83c6');

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
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`idCiud`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`idDepa`);

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
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la solicitud para la ruta.';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
