-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2023 a las 16:25:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdescala`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `idCarrito` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `talle` varchar(5) NOT NULL,
  `color` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriashombre`
--

CREATE TABLE `categoriashombre` (
  `idcategoriah` int(11) NOT NULL,
  `nombrecath` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoriashombre`
--

INSERT INTO `categoriashombre` (`idcategoriah`, `nombrecath`) VALUES
(1, 'Remeras'),
(2, 'Jeans'),
(3, 'Bermudas'),
(4, 'Abrigos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoriasmujer`
--

CREATE TABLE `categoriasmujer` (
  `idCategoriam` int(11) NOT NULL,
  `nombreCatM` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoriasmujer`
--

INSERT INTO `categoriasmujer` (`idCategoriam`, `nombreCatM`) VALUES
(1, 'RemerasM'),
(2, 'JeansM'),
(3, 'ShortsM'),
(4, 'AbrigosM'),
(7, 'TopsM');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleproducto`
--

CREATE TABLE `detalleproducto` (
  `idDetalleProducto` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `color` varchar(30) NOT NULL,
  `talle` varchar(10) NOT NULL,
  `cant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleproducto`
--

INSERT INTO `detalleproducto` (`idDetalleProducto`, `producto`, `color`, `talle`, `cant`) VALUES
(45, 'Short Engomado', '#000000', '44', 1),
(46, 'Short Engomado', '#000000', '46', 2),
(47, 'Remera Hola', '#c22424', 'S', 1),
(48, 'Remera Hola', '#c22424', 'M', 2),
(49, 'Remera Hola', '#1dcbd7', 'L', 1),
(50, 'Remera Chau', '#3c9b22', 'S', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalleventas`
--

CREATE TABLE `detalleventas` (
  `idDetalleVentas` int(11) NOT NULL,
  `idVenta` int(11) NOT NULL,
  `producto` varchar(30) NOT NULL,
  `talle` varchar(10) NOT NULL,
  `color` varchar(30) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` float NOT NULL,
  `subtotal` float NOT NULL,
  `usuario` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalleventas`
--

INSERT INTO `detalleventas` (`idDetalleVentas`, `idVenta`, `producto`, `talle`, `color`, `cantidad`, `precio`, `subtotal`, `usuario`) VALUES
(25, 17, 'Short Engomado', '44', '#000000', 1, 7990, 7990, 'Ju1234'),
(26, 17, 'Short Engomado', '46', '#000000', 2, 7990, 15980, 'Ju1234'),
(28, 18, 'Short Engomado', '44', '#000000', 1, 7990, 7990, 'Ju1234'),
(29, 18, 'Short Engomado', '46', '#000000', 2, 7990, 15980, 'Ju1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `idLocalidad` int(11) NOT NULL,
  `nombreLocalidad` varchar(20) DEFAULT NULL,
  `idProvincia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`idLocalidad`, `nombreLocalidad`, `idProvincia`) VALUES
(1, 'San Francisco', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prod`
--

CREATE TABLE `prod` (
  `codProd` int(11) NOT NULL,
  `nombreProd` varchar(30) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `precio` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `prod`
--

INSERT INTO `prod` (`codProd`, `nombreProd`, `categoria`, `descripcion`, `precio`) VALUES
(41, 'Remera Hola', 'RemerasM', 'Remera bordada ', 19990),
(45, 'Short Engomado', 'ShortsM', 'Hermoso', 7990),
(46, 'Remera Chau', 'RemerasM', 'Hermosa', 5000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `idProvincia` int(11) NOT NULL,
  `nombreProvincia` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`idProvincia`, `nombreProvincia`) VALUES
(1, 'Córdoba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `idRol` int(11) NOT NULL,
  `tipoRol` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`idRol`, `tipoRol`) VALUES
(1, 'Admin'),
(2, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `idSexo` int(2) NOT NULL,
  `nombreSexo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`idSexo`, `nombreSexo`) VALUES
(1, 'Hombre'),
(2, 'Mujer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `talles`
--

CREATE TABLE `talles` (
  `idTalle` int(11) NOT NULL,
  `talle` varchar(10) NOT NULL,
  `idTipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `talles`
--

INSERT INTO `talles` (`idTalle`, `talle`, `idTipo`) VALUES
(7, 'S', 1),
(8, 'M', 1),
(9, 'L', 1),
(10, 'XL', 1),
(11, 'XXL', 1),
(12, '3XL', 1),
(13, '4XL', 1),
(14, '5XL', 1),
(16, '36', 3),
(17, '38', 3),
(18, '40', 3),
(19, '42', 3),
(20, '44', 3),
(21, '46', 3),
(22, '48', 3),
(23, '50', 3),
(24, '52', 3),
(25, '54', 3),
(26, '56', 3),
(27, '39', 4),
(28, '40', 4),
(29, '41', 4),
(30, '42', 4),
(31, '43', 4),
(32, '44', 4),
(33, '45', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipostalles`
--

CREATE TABLE `tipostalles` (
  `idTipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipostalles`
--

INSERT INTO `tipostalles` (`idTipo`, `tipo`) VALUES
(1, 'S/M/L/XL/XXL/3XL/4XL/5XL'),
(3, '36/38/40/42/44/46/48/50/52/54/56'),
(4, '39/40/41/42/43/44/45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombreDeUsuario` varchar(20) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `correoElectronico` varchar(30) DEFAULT NULL,
  `dni` varchar(8) DEFAULT NULL,
  `domicilio` varchar(30) DEFAULT NULL,
  `idLocalidad` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `idRol` int(11) DEFAULT NULL,
  `contraseña` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombreDeUsuario`, `nombre`, `apellido`, `correoElectronico`, `dni`, `domicilio`, `idLocalidad`, `telefono`, `idRol`, `contraseña`) VALUES
(4, 'Ju1234', 'Ju', NULL, 'ju@gmail.com', NULL, NULL, NULL, NULL, 1, '123'),
(5, 'thiago124', 'Thiago', NULL, 'thiago@gmail.com', NULL, NULL, NULL, NULL, 2, '1234'),
(6, 'dana123', 'Dana', NULL, 'dana@gmail.com', NULL, NULL, NULL, NULL, 2, '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `total` float NOT NULL,
  `usuario` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `fecha`, `total`, `usuario`) VALUES
(17, '2023-03-07', 23970, 'Ju1234'),
(18, '2023-03-07', 23970, 'Ju1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`idCarrito`);

--
-- Indices de la tabla `categoriashombre`
--
ALTER TABLE `categoriashombre`
  ADD PRIMARY KEY (`idcategoriah`);

--
-- Indices de la tabla `categoriasmujer`
--
ALTER TABLE `categoriasmujer`
  ADD PRIMARY KEY (`idCategoriam`);

--
-- Indices de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  ADD PRIMARY KEY (`idDetalleProducto`);

--
-- Indices de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  ADD PRIMARY KEY (`idDetalleVentas`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`idLocalidad`),
  ADD KEY `FK_LocalidadesProvincias` (`idProvincia`);

--
-- Indices de la tabla `prod`
--
ALTER TABLE `prod`
  ADD PRIMARY KEY (`codProd`);

--
-- Indices de la tabla `provincias`
--
ALTER TABLE `provincias`
  ADD PRIMARY KEY (`idProvincia`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`idSexo`);

--
-- Indices de la tabla `talles`
--
ALTER TABLE `talles`
  ADD PRIMARY KEY (`idTalle`);

--
-- Indices de la tabla `tipostalles`
--
ALTER TABLE `tipostalles`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `nombreDeUsuario` (`nombreDeUsuario`),
  ADD KEY `FK_UsuariosLocalidad` (`idLocalidad`),
  ADD KEY `FK_UsuariosRoles` (`idRol`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `FK_VentasUsuario` (`usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `idCarrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `categoriashombre`
--
ALTER TABLE `categoriashombre`
  MODIFY `idcategoriah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `categoriasmujer`
--
ALTER TABLE `categoriasmujer`
  MODIFY `idCategoriam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `detalleproducto`
--
ALTER TABLE `detalleproducto`
  MODIFY `idDetalleProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `detalleventas`
--
ALTER TABLE `detalleventas`
  MODIFY `idDetalleVentas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `idLocalidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prod`
--
ALTER TABLE `prod`
  MODIFY `codProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `provincias`
--
ALTER TABLE `provincias`
  MODIFY `idProvincia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `idSexo` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `talles`
--
ALTER TABLE `talles`
  MODIFY `idTalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `tipostalles`
--
ALTER TABLE `tipostalles`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD CONSTRAINT `FK_LocalidadesProvincias` FOREIGN KEY (`idProvincia`) REFERENCES `provincias` (`idProvincia`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `talles`
--
ALTER TABLE `talles`
  ADD CONSTRAINT `talles_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipostalles` (`idTipo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `FK_UsuariosLocalidad` FOREIGN KEY (`idLocalidad`) REFERENCES `localidades` (`idLocalidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_UsuariosRoles` FOREIGN KEY (`idRol`) REFERENCES `roles` (`idRol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `FK_VentasUsuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`nombreDeUsuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
