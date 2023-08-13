-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-08-2023 a las 04:12:56
-- Versión del servidor: 8.0.33
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smiteimyt`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id_articulo` int NOT NULL,
  `titulo_articulo` varchar(120) NOT NULL,
  `autores` text NOT NULL,
  `dir_adscripción` varchar(80) NOT NULL,
  `inst_adscripción` varchar(80) NOT NULL,
  `resumen` text NOT NULL,
  `palabras_clave` varchar(200) NOT NULL,
  `archivo` varchar(120) NOT NULL,
  `tipo_trabajo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id_articulo`, `titulo_articulo`, `autores`, `dir_adscripción`, `inst_adscripción`, `resumen`, `palabras_clave`, `archivo`, `tipo_trabajo`) VALUES
(1, 'prueba1', 'Miguel Romero', 'Dirección 1', 'Institución 2', 'aaaaaaaaaaaaaaa', 'aaaa bbbb cccc', 'Ejercicios JS.txt', 'presentacion'),
(2, 'prueba2', 'Miguel Romero', 'Dirección 2', 'Institución 4', 'aaaaaaaaa', 'aaaa bbbb cccc', 'reporte de actividades segundo parcial.pdf', 'presentacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `no_registro` int NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `apellidos` varchar(60) NOT NULL,
  `numero_tel` varchar(10) NOT NULL,
  `email` varchar(80) NOT NULL,
  `no_transferencia` int NOT NULL,
  `fecha_transferencia` date NOT NULL,
  `archivo` text NOT NULL,
  `tipo_inscripcion` varchar(50) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`no_registro`, `nombre`, `apellidos`, `numero_tel`, `email`, `no_transferencia`, `fecha_transferencia`, `archivo`, `tipo_inscripcion`, `descripcion`) VALUES
(1, 'Miguel', 'Romero Tapia', '5580571391', 'romero.tapia.m.angel@gmail.com', 123456789, '2023-06-26', 'ejemplo.js', 'estudiante', 'aaaaaaa'),
(3, 'Maria', 'Rivera Olivas', '5534527819', 'maria123@gmail.com', 987654321, '2023-06-06', 'carta de ingresos.docx', 'profesor', 'bbbbbbbbbbb'),
(4, 'Jose Raul', 'Contreras Alvarado', '5678980113', 'joseR@gmail.com', 987654321, '2023-06-25', 'text-area.txt', 'socioI', 'ggggggggggg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL,
  `tipo_usuario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'miguel_554', '30f4c5751826c931e1f40b28b43146b845d2b230', 'estudiante'),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin'),
(3, 'prueba', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'profesor'),
(4, 'MariaRO619', '304cafca9ac0dae70ce17a913a565ad15d18da46', 'estudiante');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`no_registro`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id_articulo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `no_registro` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
