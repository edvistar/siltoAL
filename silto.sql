-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-06-2020 a las 00:03:12
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `SP_LISTARSECTORES` (IN `IDCIUDAD` INT)  SELECT * FROM sectores WHERE idCiud=IDCIUDAD$$

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
  `identificacion` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `centro`
--

INSERT INTO `centro` (`id_centro`, `nombre`, `email`, `telefono`, `whatsapp`, `departamento`, `ciudad`, `lugar`, `identificacion`) VALUES
(34545, 'OcatiCotas', 'lavaca@gmail.com', 3138252764, 0, '21', '21', 'Chia', 22656626);

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
(1, 'El Encanto', '1'),
(2, 'La Chorrera', '1'),
(3, 'La Pedrera', '1'),
(4, 'La Victoria', '1'),
(5, 'Leticia', '1'),
(6, 'Miriti-Paraná', '1'),
(7, 'Puerto Alegría', '1'),
(8, 'Puerto Arica', '1'),
(9, 'Puerto Nariño', '1'),
(10, 'Puerto Santander', '1'),
(11, 'Tarapacá', '1'),
(12, 'Medellin', '2'),
(13, 'Bello', '2'),
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
(26, 'San Andrés', '26');

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
  `peso` int(11) NOT NULL COMMENT 'peso de producto'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `peso`) VALUES
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

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `fecha_ruta`, `hora_salida`, `hora_llegada`, `descripcion`, `tipo_ruta`, `precinto`, `identificacion`, `placa`, `id_centro`, `id_producto`, `id_solicitud`) VALUES
(1, '2020-06-11', '0000-00-00', '0000-00-00', 'Carga especial', 'Nacional', '123456', 20199375, 'AD343', 34545, 78, 1),
(2, '2020-06-11', '0000-00-00', '0000-00-00', 'Carga especial', 'Local', '1234567', 1683809522, 'AD343', 34545, 78, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `idSect` int(5) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `idCiud` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sectores`
--

INSERT INTO `sectores` (`idSect`, `sector`, `idCiud`) VALUES
(1, 'chia', 1),
(2, 'Cerca de Piedra', 1);

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

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `solicitud`, `descripcion`, `id_centro`, `identificacion`) VALUES
(1, '2020-06-09 00:00:00', 'viaje completo', 34545, 22656626),
(2, '2020-06-11 20:37:13', 'Viaje commpleto', 0, 20199375),
(3, '2020-06-11 20:50:11', 'Viaje commpleto', 34545, 1683809522),
(4, '2020-06-11 23:15:17', 'Viaje commpleto', 34545, 22656626);

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
(20199375, 'Patricia lara', 'Lara Dimate', 'lida@gmail.com', 2147483647, 1, 'Seleccionar', 'activo', '2020-06-11 06:45:03', '', '8459d70c344917c311aeac9216969e3b'),
(22656626, 'Victor Eduardo', 'Hoyos Sandoval', 'victorhoyoscolombia@gmail.com', 2147483647, 1, 'coordinador', 'activo', '2020-06-09 21:46:40', 'public/img/contact/', 'fcea920f7412b5da7be0cf42b8c93759'),
(1683809522, 'luis', 'joder', 'luisjoder@gmail.com', 2123252764, 1, 'supervisor', 'activo', '2020-06-22 00:00:00', '', '1234567');

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
('AD343', '10', 'Omega', '2020-06-11', 'Furgon', 200000, 0, 'excelente', 1683809522, '2020-06-11 05:00:00');

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
  ADD PRIMARY KEY (`id_ruta`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`idSect`);

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

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `idDepa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificación de ruta', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id de la solicitud para la ruta.', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
