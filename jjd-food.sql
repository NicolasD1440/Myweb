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
(2, 'Maria', 'Gomez', 'Administracion', 800000, 'pass1'),
(3, 'Carlos', 'Lopez', 'Administracion', 750000, 'pass2'),
(4, 'Laura', 'Rodriguez', 'Administracion', 850000, 'pass3'),
(5, 'Pedro', 'Martinez', 'Administracion', 900000, 'pass4'),
(6, 'Ana', 'Hernandez', 'Administracion', 700000, 'pass5'),
(7, 'Deivy', 'Tesla', 'Administracion', 10000000, 'Admin2'),
(8, 'Luisa', 'Garcia', 'Administracion', 600000, 'pass8'),
(9, 'Andres', 'Torres', 'Administracion', 850000, 'pass9'),
(10, 'Carolina', 'Sanchez', 'Administracion', 750000, 'pass10');
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
(1, 'Juan', 'Cespedes', 'Contabilidad', 900000, '123'),
(2, 'María', 'González', 'Contabilidad', 850000, 'abc'),
(3, 'Carlos', 'López', 'Contabilidad', 950000, 'qwerty'),
(4, 'Ana', 'Ramírez', 'Contabilidad', 800000, 'pass123'),
(5, 'Luis', 'Martínez', 'Contabilidad', 920000, 'admin'),
(6, 'Laura', 'Hernández', 'Contabilidad', 880000, 'password'),
(7, 'Pedro', 'Sánchez', 'Contabilidad', 890000, 'secure123'),
(8, 'Sofía', 'Torres', 'Contabilidad', 910000, '123456'),
(9, 'Diego', 'Pérez', 'Contabilidad', 870000, 'password123'),
(10, 'Valeria', 'García', 'Contabilidad', 930000, 'admin123'),
(11, 'Andrés', 'Luna', 'Contabilidad', 840000, 'pass1234'),
(12, 'Carolina', 'Vargas', 'Contabilidad', 950000, 'qwerty123'),
(13, 'Javier', 'Castro', 'Contabilidad', 920000, 'abc123'),
(14, 'Camila', 'Mendoza', 'Contabilidad', 860000, 'password1234'),
(15, 'Daniel', 'Rojas', 'Contabilidad', 900000, 'securepassword'),
(16, 'Fernanda', 'Ortega', 'Contabilidad', 890000, 'qwerty1234'),
(17, 'Ricardo', 'Jiménez', 'Contabilidad', 910000, 'adminadmin'),
(18, 'Isabella', 'Silva', 'Contabilidad', 880000, 'passwordqwerty'),
(19, 'Alejandro', 'Gómez', 'Contabilidad', 930000, '123456789'),
(20, 'Juliana', 'Navarro', 'Contabilidad', 830000, 'adminadmin123'),
(21, 'Mateo', 'Vega', 'Contabilidad', 960000, 'qwertyuiop'),
(22, 'Paula', 'Ramos', 'Contabilidad', 910000, 'passwordabc'),
(23, 'Gabriel', 'Ochoa', 'Contabilidad', 870000, 'admin123456'),
(24, 'Valentina', 'Lara', 'Contabilidad', 940000, 'qwertyuiop123'),
(25, 'Sebastián', 'Paz', 'Contabilidad', 900000, 'password123abc'),
(26, 'Mariana', 'Castañeda', 'Contabilidad', 880000, 'adminqwerty'),
(27, 'Felipe', 'Cortés', 'Contabilidad', 930000, 'password123456'),
(28, 'Daniela', 'Vidal', 'Contabilidad', 860000, 'qwertyuiop1234'),
(29, 'Hugo', 'Molina', 'Contabilidad', 920000, 'adminadminadmin'),
(30, 'Renata', 'Guzmán', 'Contabilidad', 890000, 'passwordabc123'),
(31, 'Leonardo', 'Santos', 'Contabilidad', 940000, 'qwertyuiop1234'),
(32, 'Catalina', 'Bustamante', 'Contabilidad', 900000, 'adminqwertyuiop'),
(33, 'Jorge', 'Cruz', 'Contabilidad', 910000, 'password123abc456'),
(34, 'Isabel', 'Peña', 'Contabilidad', 870000, 'qwertyuiop12345'),
(35, 'Andrea', 'Aguilar', 'Contabilidad', 920000, 'adminadmin123456'),
(36, 'Gustavo', 'Ríos', 'Contabilidad', 860000, 'passwordqwertyuiop'),
(37, 'Adriana', 'Soto', 'Contabilidad', 930000, 'qwertyuiop123456'),
(38, 'Mauricio', 'Velasco', 'Contabilidad', 880000, 'adminadminadminadmin'),
(39, 'Natalia', 'Pineda', 'Contabilidad', 940000, 'passwordabc123456'),
(40, 'Rafael', 'Pacheco', 'Contabilidad', 900000, 'qwertyuiop1234567'),
(41, 'Sara', 'Cruz', 'Contabilidad', 910000, 'adminqwertyuiop1234'),
(42, 'Raul', 'Rojas', 'Contabilidad', 870000, 'password123abc4567'),
(43, 'Diana', 'González', 'Contabilidad', 920000, 'qwertyuiop12345678'),
(44, 'Mario', 'Sánchez', 'Contabilidad', 860000, 'adminadmin1234567'),
(45, 'Paola', 'López', 'Contabilidad', 930000, 'passwordqwertyuiop123'),
(46, 'Federico', 'Gómez', 'Contabilidad', 880000, 'qwertyuiop123456789'),
(47, 'Lucía', 'Vargas', 'Contabilidad', 940000, 'adminadminadminadmin123'),
(48, 'Eduardo', 'Ortega', 'Contabilidad', 900000, 'passwordabc123456789'),
(49, 'Gabriela', 'Mendoza', 'Contabilidad', 910000, 'qwertyuiop1234567890'),
(50, 'Roberto', 'Hernández', 'Contabilidad', 870000, 'adminqwertyuiop1234567');
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
(1, 2022, 'Queja', 'La comida no esta tan buena :(', '', 0),
(1, 2000, 'Felicitaciones', 'La comida ta buena :D', '', 1),
(2, 2020, 'nose', 'hola', '', 1),
(3, 2022, 'Queja', 'La comida no esta tan buena :(', '', 0),
(4, 2001, 'Felicitaciones', 'El servicio es excelente!', '', 1),
(5, 2002, 'Felicitaciones', 'Me encanta este lugar!', '', 1),
(6, 2003, 'Queja', 'El servicio es lento y descuidado.', '', 0),
(7, 2004, 'Queja', 'La comida estaba fría y mal preparada.', '', 0),
(8, 2005, 'Felicitaciones', '¡Qué lugar tan increíble!', '', 1),
(9, 2006, 'Felicitaciones', 'No puedo creer lo delicioso que es todo.', '', 1),
(10, 2007, 'Queja', 'No recomendaría este lugar a nadie.', '', 0),
(11, 2008, 'Queja', 'Una experiencia muy decepcionante.', '', 0),
(12, 2009, 'Felicitaciones', 'Este restaurante es una joya.', '', 1),
(13, 2010, 'Felicitaciones', 'Hacen la mejor comida de la ciudad.', '', 1),
(14, 2011, 'Queja', 'No volveré a este restaurante.', '', 0),
(15, 2012, 'Queja', 'La comida dejó mucho que desear.', '', 0),
(16, 2013, 'Felicitaciones', 'Definitivamente lo recomendaría.', '', 1),
(17, 2014, 'Queja', 'Me arrepiento de haber venido aquí.', '', 0),
(18, 2015, 'Felicitaciones', 'La comida es increíble!', '', 1),
(19, 2016, 'Queja', 'No me gustó para nada la comida.', '', 0),
(20, 2017, 'Felicitaciones', 'La comida ta buena :D', '', 1),
(21, 2018, 'Felicitaciones', 'El servicio es excelente!', '', 1),
(22, 2019, 'Felicitaciones', 'Me encanta este lugar!', '', 1),
(23, 2021, 'Queja', 'El servicio es lento y descuidado.', '', 0),
(24, 2023, 'Queja', 'La comida estaba fría y mal preparada.', '', 0),
(25, 2024, 'Felicitaciones', '¡Qué lugar tan increíble!', '', 1),
(26, 2025, 'Felicitaciones', 'La comida es increíble aquí!', '', 1),
(27, 2026, 'Queja', 'El servicio fue muy lento.', '', 0),
(28, 2027, 'Felicitaciones', 'La comida es deliciosa :D', '', 1),
(29, 2028, 'Queja', 'La atención al cliente fue terrible.', '', 0),
(30, 2029, 'Felicitaciones', 'Este restaurante es mi favorito.', '', 1),
(31, 2030, 'Felicitaciones', 'El personal es amable y atento.', '', 1),
(32, 2031, 'Queja', 'La comida llegó fría y tardó demasiado.', '', 0),
(33, 2032, 'Queja', 'No volveré a este lugar.', '', 0),
(34, 2033, 'Felicitaciones', 'La comida es insuperable.', '', 1),
(35, 2034, 'Felicitaciones', 'Este restaurante siempre cumple.', '', 1),
(36, 2035, 'Queja', 'No recomiendo este restaurante.', '', 0),
(37, 2036, 'Queja', 'La comida estaba mal sazonada.', '', 0),
(38, 2037, 'Felicitaciones', 'El chef merece un premio.', '', 1),
(39, 2038, 'Felicitaciones', 'El servicio es de primera clase.', '', 1),
(40, 2039, 'Queja', 'Una experiencia decepcionante.', '', 0),
(41, 2040, 'Queja', 'La comida no cumplió las expectativas.', '', 0),
(42, 2041, 'Felicitaciones', '¡Este lugar es genial!', '', 1),
(43, 2042, 'Felicitaciones', 'Volveré una y otra vez.', '', 1),
(44, 2043, 'Queja', 'No sé por qué la gente elogia este lugar.', '', 0),
(45, 2044, 'Queja', 'La comida no valió la pena.', '', 0),
(46, 2045, 'Felicitaciones', 'La comida es espectacular.', '', 1),
(47, 2046, 'Queja', 'El restaurante estaba sucio.', '', 0),
(48, 2047, 'Felicitaciones', 'La comida ta buena :D', '', 1),
(49, 2048, 'Queja', 'El servicio fue desastroso.', '', 0),
(50, 2049, 'Felicitaciones', 'El personal es amigable y profesional.', '', 1),
(51, 2050, 'Felicitaciones', 'La comida es excelente.', '', 1),
(52, 2051, 'Felicitaciones', 'El ambiente es maravilloso.', '', 1),
(53, 2052, 'Queja', 'La comida estaba fría y mal preparada.', '', 0),
(54, 2053, 'Felicitaciones', 'El servicio es de calidad.', '', 1),
(55, 2054, 'Queja', 'No volveré a este restaurante.', '', 0),
(56, 2055, 'Felicitaciones', 'La comida es deliciosa.', '', 1),
(57, 2056, 'Felicitaciones', 'El personal es amable.', '', 1),
(58, 2057, 'Queja', 'La atención fue pésima.', '', 0),
(59, 2058, 'Queja', 'La comida no cumplió mis expectativas.', '', 0),
(60, 2059, 'Felicitaciones', 'Este lugar es un tesoro.', '', 1),
(61, 2060, 'Felicitaciones', 'El servicio es rápido y eficiente.', '', 1),
(62, 2061, 'Queja', 'La comida no estaba fresca.', '', 0),
(63, 2062, 'Felicitaciones', 'La comida es una delicia.', '', 1),
(64, 2063, 'Felicitaciones', 'El chef es un genio.', '', 1),
(65, 2064, 'Queja', 'La comida no merece la fama.', '', 0),
(66, 2065, 'Queja', 'El personal es descortés.', '', 0),
(67, 2066, 'Felicitaciones', 'La comida ta buena :D', '', 1),
(68, 2067, 'Felicitaciones', 'El ambiente es acogedor.', '', 1),
(69, 2068, 'Queja', 'La comida llegó tarde y fría.', '', 0),
(70, 2069, 'Felicitaciones', 'Este restaurante es un tesoro escondido.', '', 1),
(71, 2070, 'Felicitaciones', 'El servicio es impecable.', '', 1),
(72, 2071, 'Queja', 'La comida no estuvo a la altura.', '', 0),
(73, 2072, 'Felicitaciones', 'La comida es exquisita.', '', 1),
(74, 2073, 'Felicitaciones', 'El personal es atento y profesional.', '', 1),
(75, 2074, 'Queja', 'No recomendaría este lugar.', '', 0);

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
INSERT INTO `pedido` (`id`, `Precio`, `Fecha`, `tipo`, `direccion`, `det_fecha`) VALUES
(1, 15000, '2021-01-01', 'domicilio', 'Calle 72 # 95-17', '2021-01-01'),
(2, 25000, '2021-01-02', 'plazoleta', 'Avenida 34 # 45-12', '2021-01-02'),
(3, 35000, '2021-01-03', 'domicilio', 'Carrera 50 # 67-89', '2021-01-03'),
(4, 45000, '2021-01-04', 'plazoleta', 'Calle 80 # 19-23', '2021-01-04'),
(5, 55000, '2021-01-05', 'domicilio', 'Avenida 23 # 56-78', '2021-01-05'),
(6, 65000, '2021-01-06', 'plazoleta', 'Carrera 12 # 34-56', '2021-01-06'),
(7, 75000, '2021-01-07', 'domicilio', 'Calle 45 # 67-89', '2021-01-07'),
(8, 35000, '2021-01-08', 'plazoleta', 'Avenida 56 # 78-90', '2021-01-08'),
(9, 45000, '2021-01-09', 'domicilio', 'Carrera 78 # 90-12', '2021-01-09'),
(10, 55000, '2021-01-10', 'plazoleta', 'Calle 34 # 56-78', '2021-01-10'),
(11, 65000, '2021-01-11', 'domicilio', 'Avenida 67 # 89-01', '2021-01-11'),
(12, 75000, '2021-01-12', 'plazoleta', 'Carrera 23 # 45-67', '2021-01-12'),
(13, 15000, '2021-01-13', 'domicilio', 'Calle 56 # 78-90', '2021-01-13'),
(14, 25000, '2021-01-14', 'plazoleta', 'Avenida 78 # 90-12', '2021-01-14'),
(15, 35000, '2021-01-15', 'domicilio', 'Carrera 34 # 56-78', '2021-01-15'),
(16, 45000, '2021-01-16', 'plazoleta', 'Calle 67 # 89-01', '2021-01-16'),
(17, 55000, '2021-01-17', 'domicilio', 'Avenida 12 # 34-56', '2021-01-17'),
(18, 65000, '2021-01-18', 'plazoleta', 'Carrera 45 # 67-89', '2021-01-18'),
(19, 75000, '2021-01-19', 'domicilio', 'Calle 78 # 90-12', '2021-01-19'),
(20, 35000, '2021-01-20', 'plazoleta', 'Avenida 34 # 56-78', '2021-01-20'),
(21, 45000, '2021-01-21', 'domicilio', 'Carrera 56 # 78-90', '2021-01-21'),
(22, 55000, '2021-01-22', 'plazoleta', 'Calle 67 # 89-01', '2021-01-22'),
(23, 65000, '2021-01-23', 'domicilio', 'Avenida 23 # 45-67', '2021-01-23'),
(24, 75000, '2021-01-24', 'plazoleta', 'Carrera 12 # 34-56', '2021-01-24'),
(25, 15000, '2021-01-25', 'domicilio', 'Calle 45 # 56-78', '2021-01-25'),
(26, 25000, '2021-01-26', 'plazoleta', 'Avenida 56 # 78-90', '2021-01-26'),
(27, 35000, '2021-01-27', 'domicilio', 'Carrera 78 # 90-12', '2021-01-27'),
(28, 45000, '2021-01-28', 'plazoleta', 'Calle 34 # 45-67', '2021-01-28'),
(29, 55000, '2021-01-29', 'domicilio', 'Avenida 67 # 89-01', '2021-01-29'),
(30, 65000, '2021-01-30', 'plazoleta', 'Carrera 23 # 56-78', '2021-01-30'),
(31, 75000, '2021-01-31', 'domicilio', 'Calle 56 # 78-90', '2021-01-31'),
(32, 15000, '2021-02-01', 'plazoleta', 'Avenida 78 # 90-12', '2021-02-01'),
(33, 25000, '2021-02-02', 'domicilio', 'Carrera 34 # 56-78', '2021-02-02'),
(34, 35000, '2021-02-03', 'plazoleta', 'Calle 67 # 89-01', '2021-02-03'),
(35, 45000, '2021-02-04', 'domicilio', 'Avenida 12 # 34-56', '2021-02-04'),
(36, 55000, '2021-02-05', 'plazoleta', 'Carrera 45 # 67-89', '2021-02-05'),
(37, 65000, '2021-02-06', 'domicilio', 'Calle 78 # 90-12', '2021-02-06'),
(38, 75000, '2021-02-07', 'plazoleta', 'Avenida 34 # 56-78', '2021-02-07'),
(39, 15000, '2021-02-08', 'domicilio', 'Carrera 56 # 78-90', '2021-02-08'),
(40, 25000, '2021-02-09', 'plazoleta', 'Calle 67 # 89-01', '2021-02-09'),
(41, 35000, '2021-02-10', 'domicilio', 'Avenida 23 # 45-67', '2021-02-10'),
(42, 45000, '2021-02-11', 'plazoleta', 'Carrera 12 # 34-56', '2021-02-11'),
(43, 55000, '2021-02-12', 'domicilio', 'Calle 45 # 56-78', '2021-02-12'),
(44, 65000, '2021-02-13', 'plazoleta', 'Avenida 56 # 78-90', '2021-02-13'),
(45, 75000, '2021-02-14', 'domicilio', 'Carrera 78 # 90-12', '2021-02-14'),
(46, 15000, '2021-02-15', 'plazoleta', 'Calle 34 # 45-67', '2021-02-15'),
(47, 25000, '2021-02-16', 'domicilio', 'Avenida 67 # 89-01', '2021-02-16'),
(48, 35000, '2021-02-17', 'plazoleta', 'Carrera 23 # 56-78', '2021-02-17'),
(49, 45000, '2021-02-18', 'domicilio', 'Calle 56 # 78-90', '2021-02-18'),
(50, 55000, '2021-02-19', 'plazoleta', 'Avenida 78 # 90-12', '2021-02-19');
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
('Ensalada Mixta', 'Descuento', 'Envio Gratis', 'Ensalada de pepino, tomate cherry, uvas pasas, y carne de cerdo y pollo, con salsa agridulce', 31000, 'producto6.jpg'),
  ('Burrito Especial 2', 'Descuento', 'Envio Gratis', 'Burrito con carnes mixtas, pollo, cerdo y maiz tierno, salsas al gusto', 20000, 'producto7.jpg'),
('Dona x12', 'Descuento', 'Envio Gratis', 'Postre tipo dona con aderezo de chispitas y glaseado de vainilla', 20000, 'producto8.jpg'),
('Hamburguesa de Pollo', 'Combo', 'Envio Gratis', 'Hamburguesa de pollo con tomate, lechuga, queso cheddar, salsa BBQ, acompañamiento de papas a la francesa y gaseosa coca cola', 30000, 'producto9.jpg'),
('Waffles', '2x1', 'Envio Gratis', 'Waffles con jarabe de maple, frutas frescas y crema batida', 15000, 'producto10.jpg'),
('Sushi Variado', '2x1', 'Envio Gratis', 'Sushi de salmón, atún, camarón y vegetales, acompañado de salsa de soja y jengibre encurtido', 35000, 'producto11.jpg'),
('Ensalada César', 'Descuento', 'Envio Gratis', 'Ensalada de lechuga romana, pollo a la parrilla, croutones, queso parmesano y aderezo césar', 28000, 'producto12.jpg'),
('Pizza Margarita', 'Descuento', 'Envio Gratis', 'Pizza con salsa de tomate, queso mozzarella y albahaca fresca', 25000, 'producto13.jpg'),
('Tacos de Camarón', '2x1', 'Envio Gratis', 'Tacos de camarón al ajillo con guacamole, salsa chipotle y tortillas de maíz', 32000, 'producto14.jpg'),
('Ceviche de Pescado', 'Descuento', 'Envio Gratis', 'Ceviche de pescado fresco con cebolla morada, cilantro, jugo de limón y ají', 27000, 'producto15.jpg'),
('Pasta Alfredo', 'Descuento', 'Envio Gratis', 'Pasta con salsa alfredo cremosa, pollo a la parrilla y queso parmesano rallado', 29000, 'producto16.jpg'),
('Sopa de Tomate', 'Combo', 'Envio Gratis', 'Sopa de tomate casera con albahaca fresca y crujientes croutones', 18000, 'producto17.jpg'),
('Pollo a la Parrilla', '2x1', 'Envio Gratis', 'Pechuga de pollo a la parrilla acompañada de arroz, frijoles y ensalada mixta', 26000, 'producto18.jpg'),
('Tarta de Manzana', 'Descuento', 'Envio Gratis', 'Tarta de manzana casera con canela y helado de vainilla', 22000, 'producto19.jpg'),
('Sushi Vegano', 'Descuento', 'Envio Gratis', 'Sushi de vegetales frescos como pepino, aguacate, zanahoria y pimiento, acompañado de salsa de soja baja en sodio', 32000, 'producto20.jpg'),
('Sopa de Lentejas', '2x1', 'Envio Gratis', 'Sopa de lentejas con verduras frescas y especias aromáticas', 19000, 'producto21.jpg'),
('Wrap de Pollo', 'Descuento', 'Envio Gratis', 'Wrap de pollo a la parrilla con lechuga, tomate, queso cheddar y aderezo ranch', 23000, 'producto22.jpg'),
('Ceviche Mixto', 'Descuento', 'Envio Gratis', 'Ceviche de pescado y mariscos con cebolla morada, cilantro, jugo de limón y ají', 32000, 'producto23.jpg'),
('Lasagna de Carne', 'Combo', 'Envio Gratis', 'Lasagna de carne molida con salsa de tomate, queso mozzarella y parmesano', 35000, 'producto24.jpg'),
('Tacos de Pollo', '2x1', 'Envio Gratis', 'Tacos de pollo al pastor con cebolla, cilantro, piña y tortillas de maíz', 28000, 'producto25.jpg'),
('Ensalada Caprese', 'Descuento', 'Envio Gratis', 'Ensalada de tomate, mozzarella fresca, albahaca y aderezo balsámico', 25000, 'producto26.jpg'),
('Sushi de Salmón', '2x1', 'Envio Gratis', 'Sushi de salmón fresco con aguacate, pepino y salsa de anguila', 33000, 'producto27.jpg'),
('Sopa de Champiñones', 'Descuento', 'Envio Gratis', 'Sopa de champiñones con crema, cebolla caramelizada y crujientes croutones', 20000, 'producto28.jpg'),
('Pechuga de Pavo', 'Descuento', 'Envio Gratis', 'Pechuga de pavo a la plancha con puré de papas y vegetales al vapor', 27000, 'producto29.jpg'),
('Maki de Atún', '2x1', 'Envio Gratis', 'Maki de atún fresco con aguacate y pepino, acompañado de salsa de soja y wasabi', 32000, 'producto30.jpg');

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
(1, 'Maria', 'Gomez', 'Recursos humanos', 800000, 'pass1'),
(2, 'Carlos', 'Lopez', 'Recursos humanos', 750000, 'pass2'),
(3, 'Laura', 'Rodriguez', 'Recursos humanos', 850000, 'pass3'),
(4, 'Pedro', 'Martinez', 'Recursos humanos', 900000, 'pass4'),
(5, 'Ana', 'Hernandez', 'Recursos humanos', 700000, 'pass5'),
(6, 'Nicolas', 'Perez', 'Recursos humanos', 900000, '123'),
(7, 'Juan', 'Robles', 'Recursos humanos', 50, 'Cont2'),
(8, 'Luisa', 'Garcia', 'Recursos humanos', 600000, 'pass8'),
(9, 'Andres', 'Torres', 'Recursos humanos', 850000, 'pass9'),
(10, 'Carolina', 'Sanchez', 'Recursos humanos', 750000, 'pass10'),
(11, 'Diego', 'Ramirez', 'Recursos humanos', 900000, 'pass11'),
(12, 'Sofia', 'Luna', 'Recursos humanos', 700000, 'pass12'),
(13, 'Felipe', 'Ortiz', 'Recursos humanos', 800000, 'pass13'),
(14, 'Camila', 'Castro', 'Recursos humanos', 750000, 'pass14'),
(15, 'Javier', 'Vargas', 'Recursos humanos', 900000, 'pass15'),
(16, 'Daniela', 'Soto', 'Recursos humanos', 850000, 'pass16'),
(17, 'Hector', 'Mendoza', 'Recursos humanos', 700000, 'pass17'),
(18, 'Valentina', 'Paredes', 'Recursos humanos', 800000, 'pass18'),
(19, 'Ricardo', 'Silva', 'Recursos humanos', 750000, 'pass19'),
(20, 'Marcela', 'Gutierrez', 'Recursos humanos', 900000, 'pass20'),
(21, 'Andrea', 'Fernandez', 'Recursos humanos', 700000, 'pass21'),
(22, 'Juanita', 'Rojas', 'Recursos humanos', 800000, 'pass22'),
(23, 'Miguel', 'Herrera', 'Recursos humanos', 750000, 'pass23'),
(24, 'Carla', 'Morales', 'Recursos humanos', 900000, 'pass24'),
(25, 'Fernando', 'Gomez', 'Recursos humanos', 850000, 'pass25');

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
(2000, 'Respuesta', '¡Hola! Gracias por tu mensaje. Estamos encantados de que te guste la comida :D'),
(2020, 'Respuesta', '¡Hola! ¿En qué podemos ayudarte hoy?'),
(2001, 'Respuesta', '¡Hola! Nos alegra que hayas disfrutado del servicio.'),
(2002, 'Respuesta', '¡Hola! Agradecemos tu entusiasmo por nuestro restaurante.'),
(2005, 'Respuesta', '¡Hola! Lamentamos que hayas tenido una experiencia insatisfactoria con el servicio.'),
(2006, 'Respuesta', '¡Hola! Sentimos mucho que la comida no haya estado a la altura de tus expectativas.'),
(2009, 'Respuesta', '¡Hola! Estamos emocionados de que hayas tenido una experiencia positiva.'),
(2010, 'Respuesta', '¡Hola! Apreciamos tus comentarios sobre nuestro servicio.'),
(2013, 'Respuesta', '¡Hola! Lamentamos que no hayas tenido una experiencia satisfactoria. ¿Puedes proporcionarnos más detalles?'),
(2015, 'Respuesta', '¡Hola! Agradecemos tu opinión, aunque sea negativa. ¿Qué podemos hacer para mejorar?'),
(2017, 'Respuesta', '¡Hola! Nos enorgullece ser considerados los mejores en la ciudad.'),
(2018, 'Respuesta', '¡Hola! Lamentamos escuchar que no volverías a nuestro restaurante. ¿Qué podemos hacer para cambiar tu opinión?'),
(2019, 'Respuesta', '¡Hola! Sentimos que la comida no haya cumplido tus expectativas. ¿En qué podemos mejorar?'),
(2024, 'Respuesta', '¡Hola! Apreciamos tus comentarios, aunque sean críticos.'),
(2025, 'Respuesta', '¡Hola! Lamentamos que tu experiencia haya sido decepcionante. ¿Puedes proporcionarnos más detalles?'),
(2027, 'Respuesta', '¡Hola! Sentimos que te hayas arrepentido de venir. ¿Hay algo específico que te haya molestado?'),
(2029, 'Respuesta', '¡Hola! Agradecemos tus comentarios sobre la comida.'),
(2030, 'Respuesta', '¡Hola! Lamentamos que la comida no haya cumplido tus expectativas.'),
(2033, 'Respuesta', '¡Hola! Apreciamos tu opinión, aunque sea negativa. ¿Qué podemos hacer para mejorar?'),
(2034, 'Respuesta', '¡Hola! Nos alegra que te haya gustado la comida :D'),
(2037, 'Respuesta', '¡Hola! Sentimos mucho que hayas tenido una experiencia insatisfactoria con el servicio.'),
(2038, 'Respuesta', '¡Hola! Agradecemos tu entusiasmo por nuestro restaurante.'),
(2041, 'Respuesta', '¡Hola! Lamentamos que la comida no haya estado a la altura de tus expectativas.'),
(2042, 'Respuesta', '¡Hola! Estamos emocionados de que hayas tenido una experiencia positiva.'),
(2043, 'Respuesta', '¡Hola! Apreciamos tus comentarios sobre nuestro servicio.'),
(2045, 'Respuesta', '¡Hola! Gracias por tu mensaje. Estamos encantados de que te guste la comida :D'),
(2047, 'Respuesta', '¡Hola! ¿En qué podemos ayudarte hoy?'),
(2049, 'Respuesta', '¡Hola! Nos alegra que hayas disfrutado del servicio.'),
(2050, 'Respuesta', '¡Hola! Agradecemos tu entusiasmo por nuestro restaurante.'),
(2051, 'Respuesta', '¡Hola! Lamentamos que hayas tenido una experiencia insatisfactoria con el servicio.'),
(2053, 'Respuesta', '¡Hola! Sentimos mucho que la comida no haya estado a la altura de tus expectativas.'),
(2055, 'Respuesta', '¡Hola! Estamos emocionados de que hayas tenido una experiencia positiva.'),
(2056, 'Respuesta', '¡Hola! Apreciamos tus comentarios sobre nuestro servicio.'),
(2059, 'Respuesta', '¡Hola! Lamentamos que no hayas tenido una experiencia satisfactoria. ¿Puedes proporcionarnos más detalles?'),
(2060, 'Respuesta', '¡Hola! Agradecemos tu opinión, aunque sea negativa. ¿Qué podemos hacer para mejorar?'),
(2062, 'Respuesta', '¡Hola! Nos enorgullece ser considerados los mejores en la ciudad.'),
(2063, 'Respuesta', '¡Hola! Lamentamos escuchar que no volverías a nuestro restaurante. ¿Qué podemos hacer para cambiar tu opinión?'),
(2066, 'Respuesta', '¡Hola! Sentimos que la comida no haya cumplido tus expectativas. ¿En qué podemos mejorar?'),
(2067, 'Respuesta', '¡Hola! Apreciamos tus comentarios, aunque sean críticos.'),
(2069, 'Respuesta', '¡Hola! Lamentamos que tu experiencia haya sido decepcionante. ¿Puedes proporcionarnos más detalles?'),
(2070, 'Respuesta', '¡Hola! Sentimos que te hayas arrepentido de venir. ¿Hay algo específico que te haya molestado?'),
(2072, 'Respuesta', '¡Hola! Agradecemos tus comentarios sobre la comida.'),
(2073, 'Respuesta', '¡Hola! Lamentamos que la comida no haya cumplido tus expectativas.');

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
(25, 'Mason Murphy', 'masonmurphy', 'Murphy', 25, 'masonmurphy@example.com', 9012345678, 'password25'),
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
(50, 'Sofia Howard', 'sofiahoward', 'Howard', 28, 'sofiahoward@example.com', 7890123456, 'password50'),
(51, 'Juan Perez', 'Juan', 'Perez', 25, 'juan@gmail.com', 12345678, 'password1'),
(52, 'Maria Rodriguez', 'Maria', 'Rodriguez', 30, 'maria@gmail.com', 87654321, 'password2'),
(53, 'Carlos Gomez', 'Carlos', 'Gomez', 35, 'carlos@gmail.com', 98765432, 'password3'),
(54, 'Laura Fernandez', 'Laura', 'Fernandez', 28, 'laura@gmail.com', 23456789, 'password4'),
(55, 'Pedro Ramirez', 'Pedro', 'Ramirez', 22, 'pedro@gmail.com', 98765432, 'password5'),
(56, 'Ana Lopez', 'Ana', 'Lopez', 27, 'ana@gmail.com', 76543210, 'password6'),
(57, 'Luis Martinez', 'Luis', 'Martinez', 31, 'luis@gmail.com', 23456789, 'password7'),
(58, 'Sofia Herrera', 'Sofia', 'Herrera', 29, 'sofia@gmail.com', 65432109, 'password8'),
(59, 'Gabriel Torres', 'Gabriel', 'Torres', 24, 'gabriel@gmail.com', 10987654, 'password9'),
(60, 'Valeria Castro', 'Valeria', 'Castro', 26, 'valeria@gmail.com', 98765432, 'password10'),
(61, 'Diego Sanchez', 'Diego', 'Sanchez', 33, 'diego@gmail.com', 12345678, 'password11'),
(62, 'Carmen Gomez', 'Carmen', 'Gomez', 37, 'carmen@gmail.com', 87654321, 'password12'),
(63, 'Andres Vargas', 'Andres', 'Vargas', 40, 'andres@gmail.com', 98765432, 'password13'),
(64, 'Isabel Medina', 'Isabel', 'Medina', 32, 'isabel@gmail.com', 23456789, 'password14'),
(65, 'Felipe Rojas', 'Felipe', 'Rojas', 29, 'felipe@gmail.com', 98765432, 'password15'),
(66, 'Camila Rios', 'Camila', 'Rios', 23, 'camila@gmail.com', 76543210, 'password16'),
(67, 'Javier Paredes', 'Javier', 'Paredes', 30, 'javier@gmail.com', 23456789, 'password17'),
(68, 'Daniela Torres', 'Daniela', 'Torres', 27, 'daniela@gmail.com', 65432109, 'password18'),
(69, 'Hector Mendoza', 'Hector', 'Mendoza', 25, 'hector@gmail.com', 10987654, 'password19'),
(70, 'Carolina Silva', 'Carolina', 'Silva', 28, 'carolina@gmail.com', 98765432, 'password20'),
(71, 'Ricardo Ortega', 'Ricardo', 'Ortega', 35, 'ricardo@gmail.com', 12345678, 'password21'),
(72, 'Ana Maria Castro', 'Ana Maria', 'Castro', 39, 'anamaria@gmail.com', 87654321, 'password22'),
(73, 'Manuel Vargas', 'Manuel', 'Vargas', 42, 'manuel@gmail.com', 98765432, 'password23'),
(74, 'Marcela Morales', 'Marcela', 'Morales', 34, 'marcela@gmail.com', 23456789, 'password24'),
(75, 'Andrea Herrera', 'Andrea', 'Herrera', 31, 'andrea@gmail.com', 98765432, 'password25'),
(76, 'Juanita Sanchez', 'Juanita', 'Sanchez', 27, 'juanita@gmail.com', 76543210, 'password26'),
(77, 'Miguel Gomez', 'Miguel', 'Gomez', 33, 'miguel@gmail.com', 23456789, 'password27'),
(78, 'Carla Torres', 'Carla', 'Torres', 30, 'carla@gmail.com', 65432109, 'password28'),
(79, 'Fernando Rodriguez', 'Fernando', 'Rodriguez', 28, 'fernando@gmail.com', 10987654, 'password29'),
(80, 'Lorena Ramirez', 'Lorena', 'Ramirez', 25, 'lorena@gmail.com', 98765432, 'password30'),
(81, 'Sebastian Lopez', 'Sebastian', 'Lopez', 32, 'sebastian@gmail.com', 12345678, 'password31'),
(82, 'Juliana Martinez', 'Juliana', 'Martinez', 29, 'juliana@gmail.com', 87654321, 'password32'),
(83, 'Andres Castro', 'Andres', 'Castro', 35, 'andres@gmail.com', 98765432, 'password33'),
(84, 'Valentina Rios', 'Valentina', 'Rios', 23, 'valentina@gmail.com', 23456789, 'password34'),
(85, 'Felipe Paredes', 'Felipe', 'Paredes', 30, 'felipe@gmail.com', 98765432, 'password35'),
(86, 'Camila Torres', 'Camila', 'Torres', 27, 'camila@gmail.com', 76543210, 'password36'),
(87, 'Javier Mendoza', 'Javier', 'Mendoza', 25, 'javier@gmail.com', 23456789, 'password37'),
(88, 'Daniela Silva', 'Daniela', 'Silva', 28, 'daniela@gmail.com', 65432109, 'password38'),
(89, 'Hector Ortega', 'Hector', 'Ortega', 35, 'hector@gmail.com', 10987654, 'password39'),
(90, 'Carolina Castro', 'Carolina', 'Castro', 28, 'carolina@gmail.com', 98765432, 'password40'),
(91, 'Ricardo Vargas', 'Ricardo', 'Vargas', 35, 'ricardo@gmail.com', 12345678, 'password41'),
(92, 'Ana Maria Ortega', 'Ana Maria', 'Ortega', 39, 'anamaria@gmail.com', 87654321, 'password42'),
(93, 'Manuel Silva', 'Manuel', 'Silva', 42, 'manuel@gmail.com', 98765432, 'password43'),
(94, 'Marcela Vargas', 'Marcela', 'Vargas', 34, 'marcela@gmail.com', 23456789, 'password44'),
(95, 'Andrea Morales', 'Andrea', 'Morales', 31, 'andrea@gmail.com', 98765432, 'password45'),
(96, 'Juan Perez', 'Juan', 'Perez', 25, 'juan@gmail.com', 12345678, 'password46'),
(97, 'Maria Rodriguez', 'Maria', 'Rodriguez', 30, 'maria@gmail.com', 87654321, 'password47'),
(98, 'Carlos Gomez', 'Carlos', 'Gomez', 35, 'carlos@gmail.com', 98765432, 'password48'),
(99, 'Laura Fernandez', 'Laura', 'Fernandez', 28, 'laura@gmail.com', 23456789, 'password49'),
(100, 'Pedro Ramirez', 'Pedro', 'Ramirez', 22, 'pedro@gmail.com', 98765432, 'password50'),
(101, 'Ana Lopez', 'Ana', 'Lopez', 27, 'ana@gmail.com', 76543210, 'password51'),
(102, 'Luis Martinez', 'Luis', 'Martinez', 31, 'luis@gmail.com', 23456789, 'password52'),
(103, 'Sofia Herrera', 'Sofia', 'Herrera', 29, 'sofia@gmail.com', 65432109, 'password53'),
(104, 'Gabriel Torres', 'Gabriel', 'Torres', 24, 'gabriel@gmail.com', 10987654, 'password54'),
(105, 'Valeria Castro', 'Valeria', 'Castro', 26, 'valeria@gmail.com', 98765432, 'password55'),
(106, 'Diego Sanchez', 'Diego', 'Sanchez', 33, 'diego@gmail.com', 12345678, 'password56'),
(107, 'Carmen Gomez', 'Carmen', 'Gomez', 37, 'carmen@gmail.com', 87654321, 'password57'),
(108, 'Andres Vargas', 'Andres', 'Vargas', 40, 'andres@gmail.com', 98765432, 'password58'),
(109, 'Isabel Medina', 'Isabel', 'Medina', 32, 'isabel@gmail.com', 23456789, 'password59'),
(110, 'Felipe Rojas', 'Felipe', 'Rojas', 29, 'felipe@gmail.com', 98765432, 'password60'),
(111, 'Camila Rios', 'Camila', 'Rios', 23, 'camila@gmail.com', 76543210, 'password61'),
(112, 'Javier Paredes', 'Javier', 'Paredes', 30, 'javier@gmail.com', 23456789, 'password62'),
(113, 'Daniela Torres', 'Daniela', 'Torres', 27, 'daniela@gmail.com', 65432109, 'password63'),
(114, 'Hector Mendoza', 'Hector', 'Mendoza', 25, 'hector@gmail.com', 10987654, 'password64'),
(115, 'Carolina Silva', 'Carolina', 'Silva', 28, 'carolina@gmail.com', 98765432, 'password65'),
(116, 'Ricardo Ortega', 'Ricardo', 'Ortega', 35, 'ricardo@gmail.com', 12345678, 'password66'),
(117, 'Ana Maria Castro', 'Ana Maria', 'Castro', 39, 'anamaria@gmail.com', 87654321, 'password67'),
(118, 'Manuel Vargas', 'Manuel', 'Vargas', 42, 'manuel@gmail.com', 98765432, 'password68'),
(119, 'Marcela Morales', 'Marcela', 'Morales', 34, 'marcela@gmail.com', 23456789, 'password69'),
(120, 'Andrea Herrera', 'Andrea', 'Herrera', 31, 'andrea@gmail.com', 98765432, 'password70'),
(121, 'Juanita Sanchez', 'Juanita', 'Sanchez', 27, 'juanita@gmail.com', 76543210, 'password71'),
(122, 'Miguel Gomez', 'Miguel', 'Gomez', 33, 'miguel@gmail.com', 23456789, 'password72'),
(123, 'Carla Torres', 'Carla', 'Torres', 30, 'carla@gmail.com', 65432109, 'password73'),
(124, 'Fernando Rodriguez', 'Fernando', 'Rodriguez', 28, 'fernando@gmail.com', 10987654, 'password74'),
(125, 'Lorena Ramirez', 'Lorena', 'Ramirez', 25, 'lorena@gmail.com', 98765432, 'password75'),
(126, 'Emma Johnson', 'emmajohnson', 'Johnson', 35, 'emmajohnson@example.com', 3456789012, 'password126'),
(127, 'Noah Anderson', 'noahanderson', 'Anderson', 28, 'noahanderson@example.com', 6789012345, 'password127'),
(128, 'Olivia Martinez', 'oliviamartinez', 'Martinez', 32, 'oliviamartinez@example.com', 1234567890, 'password128'),
(129, 'Liam Taylor', 'liamtaylor', 'Taylor', 29, 'liamtaylor@example.com', 9876543210, 'password129'),
(130, 'Ava Thomas', 'avathomas', 'Thomas', 31, 'avathomas@example.com', 5678901234, 'password130'),
(131, 'Sophia Clark', 'sophiaclark', 'Clark', 26, 'sophiaclark@example.com', 4567890123, 'password131'),
(132, 'Jackson Rodriguez', 'jacksonrodriguez', 'Rodriguez', 30, 'jacksonrodriguez@example.com', 7890123456, 'password132'),
(133, 'Isabella Lewis', 'isabellalewis', 'Lewis', 27, 'isabellalewis@example.com', 2345678901, 'password133'),
(134, 'Lucas Lee', 'lucaslee', 'Lee', 33, 'lucaslee@example.com', 9012345678, 'password134'),
(135, 'Mia Walker', 'miawalker', 'Walker', 28, 'miawalker@example.com', 3456789012, 'password135'),
(136, 'Liam Hall', 'liamhall', 'Hall', 31, 'liamhall@example.com', 6789012345, 'password136'),
(137, 'Oliver Young', 'oliveryoung', 'Young', 25, 'oliveryoung@example.com', 1234567890, 'password137'),
(138, 'Sophia Hernandez', 'sophiahernandez', 'Hernandez', 29, 'sophiahernandez@example.com', 9876543210, 'password138'),
(139, 'Amelia King', 'ameliaking', 'King', 33, 'ameliaking@example.com', 5678901234, 'password139'),
(140, 'Benjamin Scott', 'benjaminscott', 'Scott', 27, 'benjaminscott@example.com', 4567890123, 'password140'),
(141, 'Charlotte Green', 'charlottegreen', 'Green', 30, 'charlottegreen@example.com', 7890123456, 'password141'),
(142, 'Henry Baker', 'henrybaker', 'Baker', 25, 'henrybaker@example.com', 2345678901, 'password142'),
(143, 'Emily Adams', 'emilyadams', 'Adams', 28, 'emilyadams@example.com', 9012345678, 'password143'),
(144, 'Oliver Wright', 'oliverwright', 'Wright', 31, 'oliverwright@example.com', 3456789012, 'password144'),
(145, 'Amelia Mitchell', 'ameliamitchell', 'Mitchell', 26, 'ameliamitchell@example.com', 6789012345, 'password145'),
(146, 'Daniel Turner', 'danielturner', 'Turner', 29, 'danielturner@example.com', 1234567890, 'password146'),
(147, 'Harper Phillips', 'harperphillips', 'Phillips', 33, 'harperphillips@example.com', 9876543210, 'password147'),
(148, 'Mason Campbell', 'masoncampbell', 'Campbell', 27, 'masoncampbell@example.com', 5678901234, 'password148'),
(149, 'Evelyn Collins', 'evelyncollins', 'Collins', 30, 'evelyncollins@example.com', 4567890123, 'password149'),
(150, 'Sebastian Stewart', 'sebastianstewart', 'Stewart', 25, 'sebastianstewart@example.com', 7890123456, 'password150');
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
