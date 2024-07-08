-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2024 a las 14:41:03
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joesgames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_juego` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `fabricante` varchar(30) NOT NULL,
  `plataforma` varchar(20) NOT NULL,
  `anio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `juegos`
--

INSERT INTO `juegos` (`id_juego`, `nombre`, `tipo`, `fabricante`, `plataforma`, `anio`) VALUES
(1, 'Minecraft', 'Arcade', 'Mojand Studios', 'PC', 2011),
(2, 'Grand Theft Auto', 'Accion', 'Rockstar Games', 'PC', 2013),
(3, 'Super Mario Bros', 'Arcade', 'Nintendo', 'Nintendo', 1985),
(4, 'Tetris', 'Arcade', 'EA Mobile', 'Mobile', 2006),
(5, 'WI Sports', 'Deportes', 'Nintendo', 'Nintendo', 2006),
(6, 'Pacman', 'Arcade', 'Namco', 'Nintendo', 1980),
(8, 'Call of Duty', 'Accion', 'Infinity ward', 'PlayStation', 2019),
(9, 'The Walking Dead', 'Accion', 'Telltale Games', 'PC', 2012),
(10, 'Pokemon', 'Arcade', 'Game Freak', 'PlayStation', 1999),
(11, 'Diablo III', 'Accion', 'Blizzard ', 'PC', 2012),
(12, 'Duck Hunt', 'Accion', 'Nintendo', 'Nintendo', 1984),
(13, 'Borderlands 2', 'Accion', 'Gearbox Software', 'PlayStation', 2012),
(14, 'Truco', 'De Mesa', 'Blyts', 'Mobile', 2018),
(15, 'Sudoku', 'De Mesa', 'Soodex Labs', 'Mobile', 2005);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_juego`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
