-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-11-2022 a las 00:05:20
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jjd-food`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administracion`
--

CREATE TABLE `administracion` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Dependencia` varchar(35) NOT NULL,
  `Salario` int(11) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administracion`
--

INSERT INTO `administracion` (`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES
(1, 'Juan', 'Robles', 'Administracion', 900000, '1234'),
(4, 'Deivy', 'Tesla', 'Administracion', 10000000, 'Admin2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contabilidad`
--

CREATE TABLE `contabilidad` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Dependencia` varchar(35) NOT NULL,
  `Salario` int(11) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contabilidad`
--

INSERT INTO `contabilidad` (`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES
(1, 'Juan ', 'Cespedes', 'Contabilidad', 900000, '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dependencias`
--

CREATE TABLE `dependencias` (
  `id` int(11) NOT NULL,
  `Dependecia` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dependencias`
--

INSERT INTO `dependencias` (`id`, `Dependecia`) VALUES
(1, 'Administracion'),
(3, 'Contabilidad'),
(2, 'Recursos humanos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dias`
--

CREATE TABLE `dias` (
  `id` int(11) NOT NULL,
  `Dia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dias`
--

INSERT INTO `dias` (`id`, `Dia`) VALUES
(7, 'domingo'),
(4, 'jueves'),
(1, 'lunes'),
(2, 'martes'),
(3, 'miercoles'),
(6, 'sabado'),
(5, 'viernes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `id_mensaje` int(11) NOT NULL,
  `Asunto` varchar(45) NOT NULL,
  `mensaje` varchar(100) NOT NULL,
  `fecha` varchar(200) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `id_mensaje`, `Asunto`, `mensaje`, `fecha`, `estado`) VALUES
(1, 2000, 'Felicitaciones', 'La comida ta buena :D', '', 1),
(1, 2020, 'nose', 'hola', '', 1),
(1, 2022, 'Queja', 'La comida no esta tan buena :(', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Fecha` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `direccion` varchar(35) NOT NULL,
  `det_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `Precio`, `Fecha`, `tipo`, `direccion`, `det_fecha`) VALUES
(1, 15000, 'lunes', 'Plazoleta', 'Centro Comercial', '2022-11-14'),
(1, 1000, 'martes', 'Domicilio', 'Calle 71', '2022-11-07'),
(1, 65000, 'miercoles', 'Plazoleta', 'Centro Comercial', '2022-11-08'),
(1, 22000, 'jueves', 'Domicilio', 'Soacha', '2022-11-10'),
(1, 40000, 'viernes', 'Plazoleta', 'Centro Comercial', '2022-11-11'),
(1, 15000, 'sabado', 'Plazoleta', 'Centro Comercial', '2022-11-12'),
(1, 10000, 'domingo', 'Domicilio', 'ciudad verdad y que le importa', '2022-11-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `Titulo` varchar(200) NOT NULL,
  `Oferta` varchar(200) NOT NULL,
  `Envio` varchar(200) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` bigint(25) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`Titulo`, `Oferta`, `Envio`, `descripcion`, `precio`, `imagen`) VALUES
('Burrito Especial', 'Descuento', 'Envio Gratis', 'Burrito con carnes mixtas, res, pollo, cerdo y maiz tierno, salsas al gusto', 20000, 'producto1.jpg'),
('Dona x6 ', 'Descuento', 'Envio Gratis', 'Postre tipo dona con aderezo de chispitas', 20000, 'producto4.jpg'),
('Hamburguesa de la casa', 'Combo', 'Envio Gratis', 'Hamburguesa de doble piso con carne de pollo y res, pepinillos, tomate, lechuga, queso mozarella, salsas BBQ, tomate, piña adicional salsa de la casa, acompañamiento de papas a la francesa y gaseosa pepsi', 35000, 'producto5.jpg'),
('Pancakes', '2x1', 'Envio Gratis', 'Pancakes con miel de abejas, chips de chocolate y fresas', 15000, 'producto2.jpg'),
('Salmon', '2x1', 'Envio Gratis', 'Salmon cocinado a las finas hierbas, con sumo de limón y acompañamiento de verduras frescas ', 30000, 'producto3.jpg'),
('Ensalada Mixta', 'Descuento', 'Envio Gratis', 'Ensalada de pepino, tomate cherry, uvas pasas, y carne de cerdo y pollo, con salsa agridulce', 31000, 'producto6.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_humanos`
--

CREATE TABLE `recursos_humanos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `Apellido` varchar(35) NOT NULL,
  `Dependencia` varchar(35) NOT NULL,
  `Salario` int(11) NOT NULL,
  `Contraseña` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `recursos_humanos`
--

INSERT INTO `recursos_humanos` (`id`, `Nombre`, `Apellido`, `Dependencia`, `Salario`, `Contraseña`) VALUES
(6, 'Nicolas', 'Perez', 'Recursos humanos', 900000, '123'),
(7, 'Juan', 'Robles', 'Recursos humanos', 50, 'Cont2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuesta`
--

CREATE TABLE `respuesta` (
  `id_mensaje` int(11) NOT NULL,
  `Asunto` varchar(25) NOT NULL,
  `Mensaje` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `respuesta`
--

INSERT INTO `respuesta` (`id_mensaje`, `Asunto`, `Mensaje`) VALUES
(2020, 'Respuesta', 'hola'),
(2000, 'Respuesta', 'hola');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(35) NOT NULL,
  `nombre_usu` varchar(25) NOT NULL,
  `apellido_usu` varchar(25) NOT NULL,
  `edad` int(11) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `contraseña` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `nombre_usu`, `apellido_usu`, `edad`, `correo`, `Telefono`, `contraseña`) VALUES
(1, 'Nicolas Castiblanco', 'Nicolas ', 'Castiblanco', 19, 'nicolas@gmail.com', 84683813, 'user1'),
(2, 'Jane Smith', 'janesmith', 'Smith', 30, 'janesmith@example.com', 9876543210, 'password2'),
(3, 'Michael Johnson', 'michaeljohnson', 'Johnson', 35, 'michaeljohnson@example.com', 5678901234, 'password3'),
(4, 'Emily Davis', 'emilydavis', 'Davis', 28, 'emilydavis@example.com', 4567890123, 'password4'),
(5, 'David Brown', 'davidbrown', 'Brown', 32, 'davidbrown@example.com', 7890123456, 'password5'),
(6, 'Sarah Wilson', 'sarahwilson', 'Wilson', 27, 'sarahwilson@example.com', 2345678901, 'password6'),
(7, 'Matthew Taylor', 'matthewtaylor', 'Taylor', 31, 'matthewtaylor@example.com', 9012345678, 'password7'),
(8, 'Olivia Anderson', 'oliviaanderson', 'Anderson', 29, 'oliviaanderson@example.com', 3456789012, 'password8'),
(9, 'Daniel Martinez', 'danielmartinez', 'Martinez', 33, 'danielmartinez@example.com', 6789012345, 'password9'),
(10, 'Sophia Thomas', 'sophiathomas', 'Thomas', 26, 'sophiathomas@example.com', 1234567890, 'password10'),
(11, 'Jacob Garcia', 'jacobgarcia', 'Garcia', 31, 'jacobgarcia@example.com', 9876543210, 'password11'),
(12, 'Isabella Rodriguez', 'isabellarodriguez', 'Rodriguez', 34, 'isabellarodriguez@example.com', 5678901234, 'password12'),
(13, 'William Wilson', 'williamwilson', 'Wilson', 27, 'williamwilson@example.com', 4567890123, 'password13'),
(14, 'Mia Martinez', 'miamartinez', 'Martinez', 30, 'miamartinez@example.com', 7890123456, 'password14'),
(15, 'Ethan Thompson', 'ethanthompson', 'Thompson', 25, 'ethanthompson@example.com', 2345678901, 'password15'),
(16, 'Ava Harris', 'avaharris', 'Harris', 28, 'avaharris@example.com', 9012345678, 'password16'),
(17, 'James Lewis', 'jameslewis', 'Lewis', 32, 'jameslewis@example.com', 3456789012, 'password17'),
(18, 'Charlotte Walker', 'charlottewalker', 'Walker', 29, 'charlottewalker@example.com', 6789012345, 'password18'),
(19, 'Benjamin Green', 'benjamingreen', 'Green', 33, 'benjamingreen@example.com', 1234567890, 'password19'),
(20, 'Amelia Hall', 'ameliahall', 'Hall', 26, 'ameliahall@example.com', 9876543210, 'password20'),
(21, 'Alexander Young', 'alexanderyoung', 'Young', 31, 'alexanderyoung@example.com', 5678901234, 'password21'),
(22, 'Harper King', 'harperking', 'King', 34, 'harperking@example.com', 4567890123, 'password22'),
(23, 'Daniel Lopez', 'daniellopez', 'Lopez', 27, 'daniellopez@example.com', 7890123456, 'password23'),
(24, 'Sophia Scott', 'sophiascott', 'Scott', 30, 'sophiascott@example.com', 2345678901, 'password24'),
(25, 'Mason Murphy', 'masonmurphy', 'Murphy', 25, 'masonmurphy@example.com', 9012345678, 'password25');
(26, 'Liam Turner', 'liamturner', 'Turner', 28, 'liamturner@example.com', 3456789012, 'password26'),
(27, 'Emma Adams', 'emmaadams', 'Adams', 31, 'emmaadams@example.com', 6789012345, 'password27'),
(28, 'Noah Campbell', 'noahcampbell', 'Campbell', 26, 'noahcampbell@example.com', 1234567890, 'password28'),
(29, 'Olivia Hill', 'oliviahill', 'Hill', 29, 'oliviahill@example.com', 9876543210, 'password29'),
(30, 'William Mitchell', 'williammitchell', 'Mitchell', 33, 'williammitchell@example.com', 5678901234, 'password30'),
(31, 'Ava Roberts', 'avaroberts', 'Roberts', 27, 'avaroberts@example.com', 4567890123, 'password31'),
(32, 'James Carter', 'jamescarter', 'Carter', 30, 'jamescarter@example.com', 7890123456, 'password32'),
(33, 'Isabella Phillips', 'isabellaphillips', 'Phillips', 25, 'isabellaphillips@example.com', 2345678901, 'password33'),
(34, 'Benjamin Evans', 'benjaminevans', 'Evans', 28, 'benjaminevans@example.com', 9012345678, 'password34'),
(35, 'Sophia Parker', 'sophiaparker', 'Parker', 31, 'sophiaparker@example.com', 3456789012, 'password35'),
(36, 'Mason Edwards', 'masonedwards', 'Edwards', 26, 'masonedwards@example.com', 6789012345, 'password36'),
(37, 'Charlotte Collins', 'charlottecollins', 'Collins', 29, 'charlottecollins@example.com', 1234567890, 'password37'),
(38, 'Joseph Stewart', 'josephstewart', 'Stewart', 33, 'josephstewart@example.com', 9876543210, 'password38'),
(39, 'Amelia Sanchez', 'ameliasanchez', 'Sanchez', 27, 'ameliasanchez@example.com', 5678901234, 'password39'),
(40, 'Henry Morris', 'henrymorris', 'Morris', 30, 'henrymorris@example.com', 4567890123, 'password40'),
(41, 'Harper Rogers', 'harperrogers', 'Rogers', 25, 'harperrogers@example.com', 7890123456, 'password41'),
(42, 'Michael Reed', 'michaelreed', 'Reed', 28, 'michaelreed@example.com', 2345678901, 'password42'),
(43, 'Evelyn Cook', 'evelyncook', 'Cook', 31, 'evelyncook@example.com', 9012345678, 'password43'),
(44, 'Logan Griffin', 'logangriffin', 'Griffin', 26, 'logangriffin@example.com', 3456789012, 'password44'),
(45, 'Avery Diaz', 'averydiaz', 'Diaz', 29, 'averydiaz@example.com', 6789012345, 'password45'),
(46, 'Abigail Hayes', 'abigailhayes', 'Hayes', 33, 'abigailhayes@example.com', 1234567890, 'password46'),
(47, 'Daniel Rivera', 'danielrivera', 'Rivera', 27, 'danielrivera@example.com', 9876543210, 'password47'),
(48, 'Emily Ward', 'emilyward', 'Ward', 30, 'emilyward@example.com', 5678901234, 'password48'),
(49, 'Matthew Cox', 'matthewcox', 'Cox', 25, 'matthewcox@example.com', 4567890123, 'password49'),
(50, 'Sofia Howard', 'sofiahoward', 'Howard', 28, 'sofiahoward@example.com', 7890123456, 'password50');
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dependencia` (`Dependencia`);

--
-- Indices de la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dependencia` (`Dependencia`);

--
-- Indices de la tabla `dependencias`
--
ALTER TABLE `dependencias`
  ADD PRIMARY KEY (`Dependecia`);

--
-- Indices de la tabla `dias`
--
ALTER TABLE `dias`
  ADD PRIMARY KEY (`Dia`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD KEY `id` (`id`),
  ADD KEY `Fecha` (`Fecha`);

--
-- Indices de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Dependencia` (`Dependencia`);

--
-- Indices de la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD KEY `id-mensaje` (`id_mensaje`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administracion`
--
ALTER TABLE `administracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administracion`
--
ALTER TABLE `administracion`
  ADD CONSTRAINT `administracion_ibfk_1` FOREIGN KEY (`Dependencia`) REFERENCES `dependencias` (`Dependecia`);

--
-- Filtros para la tabla `contabilidad`
--
ALTER TABLE `contabilidad`
  ADD CONSTRAINT `contabilidad_ibfk_1` FOREIGN KEY (`Dependencia`) REFERENCES `dependencias` (`Dependecia`);

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `mensajes_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`id`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `recursos_humanos`
--
ALTER TABLE `recursos_humanos`
  ADD CONSTRAINT `recursos_humanos_ibfk_1` FOREIGN KEY (`Dependencia`) REFERENCES `dependencias` (`Dependecia`);

--
-- Filtros para la tabla `respuesta`
--
ALTER TABLE `respuesta`
  ADD CONSTRAINT `respuesta_ibfk_2` FOREIGN KEY (`id_mensaje`) REFERENCES `mensajes` (`id_mensaje`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
