-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2020 a las 01:21:59
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datab_pw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudades`
--

CREATE TABLE `ciudades` (
  `id_ciudades` int(11) NOT NULL,
  `ciudades` varchar(60) NOT NULL,
  `id_provincias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudades`
--

INSERT INTO `ciudades` (`id_ciudades`, `ciudades`, `id_provincias`) VALUES
(1, 'Azua de Compostela', 1),
(2, 'Barreras', 1),
(3, 'Barro Arriba', 1),
(4, 'Neiba', 2),
(5, 'Galvan', 2),
(6, 'Villa Jaragua', 2),
(7, 'Santa Cruz de Barahona', 3),
(8, 'Cabral', 3),
(9, 'El Peñón', 3),
(10, 'Concepción La Vega', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresas` int(11) NOT NULL,
  `id_ciudades` int(11) NOT NULL,
  `empresas` varchar(350) NOT NULL,
  `email_emp` varchar(255) NOT NULL,
  `contraseña_emp` varchar(255) NOT NULL,
  `rnc_emp` varchar(20) NOT NULL,
  `ncf_emp` varchar(20) NOT NULL,
  `representante_emp` varchar(125) NOT NULL,
  `tel_representante_emp` varchar(20) NOT NULL,
  `direccion_emp` text NOT NULL,
  `telefono_emp` varchar(20) NOT NULL,
  `descripcion_emp` text NOT NULL,
  `rolusuario_emp` varchar(20) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado_emp` varchar(15) NOT NULL,
  `fecha_actual_emp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresas`, `id_ciudades`, `empresas`, `email_emp`, `contraseña_emp`, `rnc_emp`, `ncf_emp`, `representante_emp`, `tel_representante_emp`, `direccion_emp`, `telefono_emp`, `descripcion_emp`, `rolusuario_emp`, `imagen`, `estado_emp`, `fecha_actual_emp`) VALUES
(1, 10, 'motorace', 'motorace@hotmail.com', '1234', '147258369', 'B0100000005', 'carlos', '82914758', 'calle 1, km.01', '8095732514', 'nos dediacamos a la venta de motos.', 'empresa', 'empresa.jpg', 'A', '2020-04-14'),
(2, 8, 'juanmotors', 'juanmotors@hotmail.com', '123', '369258147', 'c020000008', 'juan', '8296874512', 'calle 4, km.05', '8095736987', 'a ventas de passolas.', 'empresa', 'empresa2.jpg', 'A', '2020-04-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marcas` int(11) NOT NULL,
  `marcas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marcas`, `marcas`) VALUES
(1, 'Honda'),
(2, 'Yamaha'),
(3, 'Tauro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mercancias`
--

CREATE TABLE `mercancias` (
  `id_mercancias` int(11) NOT NULL,
  `id_modelos` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `año` year(4) NOT NULL,
  `condicion` varchar(15) NOT NULL,
  `color` varchar(20) NOT NULL,
  `combustible` varchar(30) NOT NULL,
  `transmision` varchar(15) NOT NULL,
  `cc` varchar(15) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_actual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mercancias`
--

INSERT INTO `mercancias` (`id_mercancias`, `id_modelos`, `tipo`, `año`, `condicion`, `color`, `combustible`, `transmision`, `cc`, `precio`, `descripcion`, `imagen`, `estado`, `fecha_actual`) VALUES
(1, 1, 'Passola', 1997, 'Usado', 'Blanco', 'Gasolina', 'Automática', '110', '74000', 'Es muy confortable', 'Honda.jpg', 'A', '2020-04-13'),
(2, 2, 'Passola', 1994, 'Usado', 'Negro', 'Gasolina', 'Automática', '50', '40000', 'Muy Util', 'Yamaha.jpg', 'A', '2020-04-13'),
(3, 3, 'Motor', 2016, 'Nuevo', 'Blanco', 'Gasolina', 'Mecánica', '200', '71000', 'Buen motor', 'Tauro.jpg', 'A', '2020-04-13'),
(4, 4, 'Motor', 1994, 'Usado', 'Azul', 'Gasolina', 'Mecánica', '90', '69000', 'Excelente motor para trabajo', 'Super cub.jpg', 'I', '2020-04-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id_modelos` int(11) NOT NULL,
  `modelos` varchar(50) NOT NULL,
  `id_marcas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id_modelos`, `modelos`, `id_marcas`) VALUES
(1, 'Dio', 1),
(2, 'Jog-c', 2),
(3, 'R5', 3),
(4, 'Super Cub', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `id_provincias` int(11) NOT NULL,
  `provincias` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`id_provincias`, `provincias`) VALUES
(1, 'Azua'),
(2, 'Bahoruco'),
(3, 'Barahona'),
(4, 'La Vega');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `id_ciudades` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `nombre` varchar(125) NOT NULL,
  `apellido` varchar(125) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `descripcion` text NOT NULL,
  `direccion` text NOT NULL,
  `rolusuario` varchar(20) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `fecha_actual` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `id_ciudades`, `email`, `contraseña`, `nombre`, `apellido`, `telefono`, `descripcion`, `direccion`, `rolusuario`, `imagen`, `estado`, `fecha_actual`) VALUES
(1, 10, 'admin@hotmail.com', '1234', 'admin', 'admin perez', '8095731234', 'administrar', 'calle admin', 'admin', 'marc.jpg', 'A', '2020-04-14'),
(2, 6, 'usuario@hotmailcom', '1234', 'usuario', 'usuario perez', '8095731234', 'usuario010101', 'calle usuario', 'usuario', 'avatar.jpg', 'A', '2020-04-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD PRIMARY KEY (`id_ciudades`),
  ADD KEY `id_provincias` (`id_provincias`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresas`),
  ADD KEY `id_ciudades` (`id_ciudades`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marcas`);

--
-- Indices de la tabla `mercancias`
--
ALTER TABLE `mercancias`
  ADD PRIMARY KEY (`id_mercancias`),
  ADD KEY `id_modelos` (`id_modelos`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id_modelos`),
  ADD KEY `id_marcas` (`id_marcas`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`id_provincias`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `id_ciudades` (`id_ciudades`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudades`
--
ALTER TABLE `ciudades`
  MODIFY `id_ciudades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marcas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `mercancias`
--
ALTER TABLE `mercancias`
  MODIFY `id_mercancias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id_modelos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `id_provincias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ciudades`
--
ALTER TABLE `ciudades`
  ADD CONSTRAINT `ciudades_ibfk_1` FOREIGN KEY (`id_provincias`) REFERENCES `provincias` (`id_provincias`);

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`id_ciudades`) REFERENCES `ciudades` (`id_ciudades`);

--
-- Filtros para la tabla `mercancias`
--
ALTER TABLE `mercancias`
  ADD CONSTRAINT `mercancias_ibfk_1` FOREIGN KEY (`id_modelos`) REFERENCES `modelos` (`id_modelos`);

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_ibfk_1` FOREIGN KEY (`id_marcas`) REFERENCES `marcas` (`id_marcas`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`id_ciudades`) REFERENCES `ciudades` (`id_ciudades`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
