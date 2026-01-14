-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-01-2026 a las 14:47:47
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `javier`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id_carrito` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL DEFAULT 1,
  `fecha_agregado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id_carrito`, `id_usuario`, `id_producto`, `cantidad`, `fecha_agregado`) VALUES
(1, 1, 1, 1, '2024-03-15'),
(2, 1, 6, 2, '2024-03-15'),
(3, 2, 2, 1, '2024-03-16'),
(4, 4, 5, 3, '2024-03-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `imagen_categoria` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`, `descripcion`, `imagen_categoria`) VALUES
(1, 'Sofás', 'Sofás y sillones para sala', 'https://ejemplo.com/sofas.jpg'),
(2, 'Mesas', 'Mesas de comedor y centro', 'https://ejemplo.com/mesas.jpg'),
(3, 'Camas', 'Camas y somiers', 'https://ejemplo.com/camas.jpg'),
(4, 'Armarios', 'Armarios y guardarropas', 'https://ejemplo.com/armarios.jpg'),
(5, 'Iluminación', 'Lámparas y elementos de luz', 'https://ejemplo.com/lamparas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id_direccion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `calle` varchar(255) NOT NULL,
  `numero` varchar(10) NOT NULL,
  `piso` varchar(10) DEFAULT NULL,
  `puerta` varchar(10) DEFAULT NULL,
  `codigo_postal` varchar(10) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `provincia` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `fecha_creacion` varchar(30) DEFAULT NULL,
  `fecha_modificacion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id_direccion`, `id_usuario`, `calle`, `numero`, `piso`, `puerta`, `codigo_postal`, `ciudad`, `provincia`, `pais`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 1, 'Calle Principal', '123', '3', 'B', '28001', 'Madrid', 'Madrid', 'España', '2024-01-15', '2024-01-15'),
(2, 2, 'Avenida Central', '456', '1', 'A', '08002', 'Barcelona', 'Barcelona', 'España', '2024-02-20', '2024-02-20'),
(3, 3, 'Paseo del Prado', '789', '', '', '41001', 'Sevilla', 'Sevilla', 'España', '2023-12-01', '2023-12-01'),
(4, 4, 'Calle Real', '321', '2', 'C', '46001', 'Valencia', 'Valencia', 'España', '2024-03-10', '2024-03-10'),
(5, 5, 'Plaza Mayor', '654', '4', 'D', '29001', 'Málaga', 'Málaga', 'España', '2024-01-25', '2024-01-25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_pedido`
--

CREATE TABLE `estados_pedido` (
  `id_estado_pedido` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_pedido`
--

INSERT INTO `estados_pedido` (`id_estado_pedido`, `nombre`, `descripcion`) VALUES
(1, 'Pendiente', 'Pedido creado, pendiente de confirmación'),
(2, 'En Progreso', 'Pedido confirmado y en preparación'),
(3, 'Completado', 'Pedido entregado'),
(4, 'Cancelado', 'Pedido cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados_producto`
--

CREATE TABLE `estados_producto` (
  `id_estado` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estados_producto`
--

INSERT INTO `estados_producto` (`id_estado`, `nombre`, `descripcion`) VALUES
(1, 'Disponible', 'Producto disponible para comprar'),
(2, 'Agotado', 'Producto sin stock'),
(3, 'Descontinuado', 'Producto ya no disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `items_pedido`
--

CREATE TABLE `items_pedido` (
  `id_item_pedido` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `items_pedido`
--

INSERT INTO `items_pedido` (`id_item_pedido`, `id_pedido`, `id_producto`, `cantidad`, `precio_unitario`) VALUES
(1, 1, 1, 1, 899.99),
(2, 1, 6, 1, 599.99),
(3, 2, 2, 1, 699.98),
(4, 3, 5, 1, 199.99),
(5, 4, 7, 1, 299.99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_direccion` int(11) NOT NULL,
  `id_estado_pedido` int(11) NOT NULL,
  `fecha_pedido` varchar(30) DEFAULT NULL,
  `total` decimal(10,2) NOT NULL,
  `notas` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_usuario`, `id_direccion`, `id_estado_pedido`, `fecha_pedido`, `total`, `notas`) VALUES
(1, 1, 1, 3, '2024-01-20', 1499.98, 'Entregado sin problemas'),
(2, 2, 2, 2, '2024-02-15', 699.98, 'En ruta hacia el cliente'),
(3, 5, 5, 3, '2024-03-01', 199.99, 'Cliente muy satisfecho'),
(4, 1, 1, 2, '2024-03-10', 299.99, 'Pedido confirmado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `ancho` decimal(5,2) DEFAULT NULL,
  `alto` decimal(5,2) DEFAULT NULL,
  `profundidad` decimal(5,2) DEFAULT NULL,
  `imagen_principal` varchar(255) DEFAULT NULL,
  `imagenes_adicionales` varchar(255) DEFAULT NULL,
  `fecha_creacion` varchar(30) DEFAULT NULL,
  `fecha_modificacion` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `descripcion`, `precio`, `id_categoria`, `id_estado`, `id_tipo`, `stock`, `ancho`, `alto`, `profundidad`, `imagen_principal`, `imagenes_adicionales`, `fecha_creacion`, `fecha_modificacion`) VALUES
(1, 'Sofá Gris Moderno', 'Sofá de 3 plazas en color gris con estructura de metal', 899.99, 1, 1, 1, 5, 220.00, 85.00, 95.00, 'https://ejemplo.com/sofa1.jpg', 'https://ejemplo.com/sofa1_2.jpg', '2024-01-10', '2024-01-10'),
(2, 'Mesa Madera Roble', 'Mesa de comedor de madera roble natural', 599.99, 2, 1, 1, 8, 180.00, 75.00, 100.00, 'https://ejemplo.com/mesa1.jpg', 'https://ejemplo.com/mesa1_2.jpg', '2024-01-12', '2024-01-12'),
(3, 'Cama Matrimonio', 'Cama matrimonio con cabecero acolchado', 1299.99, 3, 1, 1, 3, 160.00, 100.00, 210.00, 'https://ejemplo.com/cama1.jpg', 'https://ejemplo.com/cama1_2.jpg', '2024-01-14', '2024-01-14'),
(4, 'Armario Puertas Correderas', 'Armario de 3 metros con puertas correderas', 749.99, 4, 1, 1, 2, 300.00, 220.00, 60.00, 'https://ejemplo.com/armario1.jpg', NULL, '2024-01-16', '2024-01-16'),
(5, 'Lámpara Pie Moderna', 'Lámpara de pie con base metalizada', 199.99, 5, 1, 1, 12, 50.00, 170.00, 50.00, 'https://ejemplo.com/lampara1.jpg', NULL, '2024-01-18', '2024-01-18'),
(6, 'Sofá Beige Usado', 'Sofá de 2 plazas en buen estado, poco uso', 299.99, 1, 1, 2, 1, 150.00, 80.00, 85.00, 'https://ejemplo.com/sofa_usado1.jpg', NULL, '2024-02-01', '2024-02-01'),
(7, 'Mesa Plegable Madera', 'Mesa auxiliar plegable de madera clara', 89.99, 2, 1, 2, 3, 80.00, 75.00, 60.00, 'https://ejemplo.com/mesa_usado1.jpg', NULL, '2024-02-05', '2024-02-05'),
(8, 'Cama Individual Madera', 'Cama individual de madera con colchón incluido', 199.99, 3, 1, 2, 2, 100.00, 90.00, 190.00, 'https://ejemplo.com/cama_usado1.jpg', NULL, '2024-02-10', '2024-02-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `nombre`, `descripcion`) VALUES
(1, 'Cliente', 'Usuario cliente de la plataforma'),
(2, 'Admin', 'Administrador de la plataforma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_producto`
--

CREATE TABLE `tipos_producto` (
  `id_tipo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tipos_producto`
--

INSERT INTO `tipos_producto` (`id_tipo`, `nombre`, `descripcion`) VALUES
(1, 'Nuevo', 'Producto nuevo de catálogo'),
(2, 'Segunda Mano', 'Producto de segunda mano');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contraseña` varchar(255) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `foto_perfil` varchar(255) DEFAULT NULL,
  `id_rol` int(11) NOT NULL,
  `fecha_registro` varchar(30) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `email`, `contraseña`, `telefono`, `foto_perfil`, `id_rol`, `fecha_registro`, `activo`) VALUES
(1, 'Juan', 'García', 'juan.garcia@email.com', 'password123', '666123456', 'https://ejemplo.com/foto1.jpg', 1, '2024-01-15', 1),
(2, 'María', 'López', 'maria.lopez@email.com', 'password123', '666234567', 'https://ejemplo.com/foto2.jpg', 1, '2024-02-20', 1),
(3, 'Carlos', 'Rodríguez', 'carlos.admin@email.com', 'password123', '666345678', 'https://ejemplo.com/foto3.jpg', 2, '2023-12-01', 1),
(4, 'Laura', 'Martínez', 'laura.martinez@email.com', 'password123', '666456789', 'https://ejemplo.com/foto4.jpg', 1, '2024-03-10', 1),
(5, 'Diego', 'Fernández', 'diego.fernandez@email.com', 'password123', '666567890', 'https://ejemplo.com/foto5.jpg', 1, '2024-01-25', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id_carrito`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `idx_carrito_usuario` (`id_usuario`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id_direccion`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`),
  ADD KEY `idx_direccion_usuario` (`id_usuario`);

--
-- Indices de la tabla `estados_pedido`
--
ALTER TABLE `estados_pedido`
  ADD PRIMARY KEY (`id_estado_pedido`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `estados_producto`
--
ALTER TABLE `estados_producto`
  ADD PRIMARY KEY (`id_estado`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `items_pedido`
--
ALTER TABLE `items_pedido`
  ADD PRIMARY KEY (`id_item_pedido`),
  ADD KEY `id_pedido` (`id_pedido`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_direccion` (`id_direccion`),
  ADD KEY `idx_pedido_estado` (`id_estado_pedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `idx_producto_categoria` (`id_categoria`),
  ADD KEY `idx_producto_estado` (`id_estado`),
  ADD KEY `idx_producto_tipo` (`id_tipo`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `tipos_producto`
--
ALTER TABLE `tipos_producto`
  ADD PRIMARY KEY (`id_tipo`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_usuario_email` (`email`),
  ADD KEY `idx_usuario_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id_carrito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id_direccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estados_pedido`
--
ALTER TABLE `estados_pedido`
  MODIFY `id_estado_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estados_producto`
--
ALTER TABLE `estados_producto`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `items_pedido`
--
ALTER TABLE `items_pedido`
  MODIFY `id_item_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipos_producto`
--
ALTER TABLE `tipos_producto`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `carrito_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `carrito_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON DELETE CASCADE;

--
-- Filtros para la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD CONSTRAINT `direcciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE;

--
-- Filtros para la tabla `items_pedido`
--
ALTER TABLE `items_pedido`
  ADD CONSTRAINT `items_pedido_ibfk_1` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`) ON DELETE CASCADE,
  ADD CONSTRAINT `items_pedido_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `pedidos_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direcciones` (`id_direccion`),
  ADD CONSTRAINT `pedidos_ibfk_3` FOREIGN KEY (`id_estado_pedido`) REFERENCES `estados_pedido` (`id_estado_pedido`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estados_producto` (`id_estado`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_tipo`) REFERENCES `tipos_producto` (`id_tipo`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
