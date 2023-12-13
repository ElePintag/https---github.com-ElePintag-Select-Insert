-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2023 a las 06:39:34
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sexto1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencias`
--

CREATE TABLE `agencias` (
  `AgenciasId` int(11) NOT NULL,
  `Nombre_Agencia` varchar(100) NOT NULL,
  `Codigo_Agencia` varchar(20) NOT NULL,
  `Codigo_SRI` varchar(20) NOT NULL,
  `Codigosesp` varchar(20) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Telefono` varchar(17) NOT NULL,
  `Direccion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agencias`
--

INSERT INTO `agencias` (`AgenciasId`, `Nombre_Agencia`, `Codigo_Agencia`, `Codigo_SRI`, `Codigosesp`, `Correo`, `Telefono`, `Direccion`) VALUES
(1, 'Matriz', '1', '14879', '792 ', 'atambato@acciontungurahua.fin.ec', '033920030', 'Montalvo 07-94 y Av. 12 de Noviembre'),
(2, 'Latacunga', '2', '14878', '11748', 'atlatacungai@acciontungurahua.fin.ec', '033920030', '5 Junio entre Eloy Alfaro y Marco Aurelio'),
(3, 'Machachi', '3', '50858', '11747', 'atmachachi@acciontungurahua.fin.ec', '033920030', 'Av. Amazonas 2-17 y Gonzales Suarez'),
(4, 'Calderon', '4', '57894', '57894', 'atsangolqui@acciontungurahua.fin.ec', '033920030', 'Av. 9 de Agosto y Caran');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE `pais` (
  `PaisId` int(11) NOT NULL,
  `Nombre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`PaisId`, `Nombre`) VALUES
(0, 'ECUADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ProductoId` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Precio_Compra` decimal(8,2) NOT NULL,
  `Precio_Venta` decimal(8,2) NOT NULL,
  `Iva` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `Unidad_Media` text NOT NULL,
  `Imagen` text NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ProductoId`, `Nombre`, `Precio_Compra`, `Precio_Venta`, `Iva`, `cantidad`, `Unidad_Media`, `Imagen`, `Fecha`) VALUES
(1, 'Oso de peluche', 55.00, 40.00, 8, 1, 'Unidad', '../../Public/assets/images/products/1.com', '0000-00-00'),
(2, 'pruebas', 45.00, 15.00, 0, 5, 'Litros', '../../Public/assets/images/products/2.com', '2023-12-11'),
(3, 'prueba2', 45.00, 15.00, 12, 3, 'Kilos', '../../Public/assets/images/products/3.jpg', '2023-12-11'),
(4, 'SAN LORENZO', 55.00, 15.00, 14, 5, 'Libras', '../../Public/assets/images/products/4.com', '2023-12-11'),
(5, 'Oso de peluche', 55.00, 40.00, 0, 3, 'Litros', '../../Public/assets/images/products/5.png', '2023-12-11'),
(6, 'Bolivia', 55.00, 40.00, 0, 3, 'Kilos', '../../Public/assets/images/products/6.jpg', '2023-12-11'),
(7, 'Oso de peluche', 55.00, 40.00, 8, 5, 'Kilos', '../../Public/assets/images/products/7.jpg', '2023-12-11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincias`
--

CREATE TABLE `provincias` (
  `ProvinciasId` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `PaisesId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `provincias`
--

INSERT INTO `provincias` (`ProvinciasId`, `Nombre`, `PaisesId`) VALUES
(0, 'ESMERALDAS', 0),
(0, 'ESMERALDAS', 0),
(0, 'SAN LORENZO', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UsuarioId` int(11) NOT NULL,
  `Cedula` varchar(17) NOT NULL,
  `Nombres` varchar(100) NOT NULL,
  `Apellidos` varchar(100) NOT NULL,
  `Telefono` varchar(17) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Contrasenia` text NOT NULL,
  `Rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`UsuarioId`, `Cedula`, `Nombres`, `Apellidos`, `Telefono`, `Correo`, `Contrasenia`, `Rol`) VALUES
(1, '1805210299', 'Pintag ', 'Llanganate', '098 975 5778', 'prueba@gmail.com', '123', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencias`
--
ALTER TABLE `agencias`
  ADD PRIMARY KEY (`AgenciasId`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ProductoId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UsuarioId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencias`
--
ALTER TABLE `agencias`
  MODIFY `AgenciasId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ProductoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UsuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
