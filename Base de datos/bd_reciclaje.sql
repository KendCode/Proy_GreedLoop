-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2024 a las 09:05:44
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
-- Base de datos: `bd_reciclaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `id_agencia` int(30) NOT NULL,
  `nombreAgencia` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `id_categoria` int(30) NOT NULL,
  `id_usuario` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id_agencia`, `nombreAgencia`, `descripcion`, `direccion`, `imagen`, `id_categoria`, `id_usuario`) VALUES
(1, 'EcoRecyclers', 'Recicladora dedicada solo a reciclar chatarra', 'Av. de las Estrellas 22, Distrito Cinemático', 'img_1', 1, 4),
(2, 'Reciclarte', 'Recicladora dedicada solo a reciclar plasticos', 'Paseo de la Naturaleza 14, Ecoparque', 'img_2', 2, 5),
(3, 'EcoTransforma', 'Recicladora dedicada solo a reciclar papeles', 'Calle Melodía 34, Barrio Musical', 'img_3', 3, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombreCat` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombreCat`, `descripcion`) VALUES
(1, 'Metales', 'Categoria solo a chatarra(cobre,aluminio,etc.)'),
(2, 'Plasticos', 'Categoria de solo plasticos (botellas, bañadores,etc.)'),
(3, 'Papeles', 'Categoria de solo papeles');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `id_perfil` int(30) NOT NULL,
  `tipo_usuario` varchar(100) NOT NULL,
  `telefono` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`id_perfil`, `tipo_usuario`, `telefono`) VALUES
(1, 'Administrativo', 5444666),
(2, 'usuarioAgente', 7852364),
(3, 'usuario', 8798774);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `nom_usuario` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(100) NOT NULL,
  `id_perfil` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `nom_usuario`, `email`, `password`, `id_perfil`) VALUES
(1, 'Kender', 'Mendoza', 'kend', 'kender@email.com', 123, 1),
(2, 'Daniel', 'Choque', 'dani12345', 'dani@email.com', 1234, 1),
(3, 'Ramiro', 'Patzi', 'ram123', 'ram@email.com', 12345, 1),
(4, 'Eduard', 'Quispe', 'eduard', 'eduar@email.com', 555555, 2),
(5, 'Jose', 'Torrez', 'jose2', 'jose@email.com', 66666, 2),
(6, 'Rob', 'Lupin', 'rob44', 'rob@email.com', 77777, 3),
(8, 'gg', 'ggg', 'g', 'g@email.com', 4444, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id_agencia`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
