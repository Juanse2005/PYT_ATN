-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2023 a las 05:51:11
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_atn`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre_cat` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre_cat`) VALUES
(1, 'Moda masculina\r\n'),
(2, 'Moda femenina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(20) NOT NULL,
  `codigo_prod` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_prod` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_prod` text COLLATE utf8_spanish_ci NOT NULL,
  `stock_prod` int(20) NOT NULL,
  `precio_prod` decimal(10,0) NOT NULL,
  `descuento_prod` int(2) NOT NULL,
  `estado_prod` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `imagen_prod` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `id_proveedor` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `codigo_prod`, `nombre_prod`, `descripcion_prod`, `stock_prod`, `precio_prod`, `descuento_prod`, `estado_prod`, `imagen_prod`, `id_proveedor`, `id_categoria`) VALUES
(1, '1111', 'Camisa de mesclilla con botones', 'Camisa de mesclilla con botones manga larga color azul claro, excelente calidad nacional.', 5, '150000', 0, '1', 'camisa.png', 1, 1),
(2, '1112', 'Camiseta con bordado comic', 'Camiseta con bordado comic oversize, manga corta excelente calidad, importada', 4, '70000', 0, '1', 'camisa.png', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_prove` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `direccion_prove` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_prove` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `email_prove` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre_prove`, `direccion_prove`, `telefono_prove`, `email_prove`) VALUES
(1, 'TalentCol', 'DG 100C SUR #6A 04', '3114411528', 'Talentcol01@gmail.com'),
(2, 'AngelsVutton', 'DG90 #3A 21', '3134121522', 'Angels_vutton@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `descripcion`) VALUES
(1, 'admin'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `p_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `s_nombre` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `p_apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `s_apellido` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `contraseña` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `p_nombre`, `s_nombre`, `p_apellido`, `s_apellido`, `email`, `contraseña`, `id_rol`) VALUES
(15, '123', '123', '123', '123', 'juannino907@gmail.com', '$2y$10$8S.WwRjeYByHK43bG8.ZFOkCjwHJfU3OFyKaB0fTkzlGqVhhT5Zsm', 2),
(16, '123', '123', '123', '123', 'juannino907@gmail.com', '$2y$10$8S.WwRjeYByHK43bG8.ZFOkCjwHJfU3OFyKaB0fTkzlGqVhhT5Zsm', 1),
(17, 'nicol', 'valentina', 'ekisde', 'ff', 'juanma@gmail.com', '$2y$10$x6qIRhK4ZGpGIYLdAYJ29uhKrKIlZvCl3mCRHpleW1TlZMkv.LpiW', 2),
(18, '1', '1', '1', '1', '1@1', '$2y$10$7N1EfapGIab5MKDSCm4r8uDlglKpq7VZM5uERTe/fvUXO58sL42Ju', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedores` (`id_proveedor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
