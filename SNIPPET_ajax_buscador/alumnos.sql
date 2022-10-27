-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-03-2017 a las 07:42:27
-- Versión del servidor: 5.7.15-log
-- Versión de PHP: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `carrera` varchar(50) NOT NULL,
  `grupo` varchar(4) NOT NULL,
  `fecha_ingreso` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre`, `carrera`, `grupo`, `fecha_ingreso`) VALUES
(4, 'Sandoval Martinez Hugo', 'Ing. En Materiales', 'G200', '2017-03-01'),
(5, 'Sanchez Perez Armando', 'Ing. en Quimica', 'P300', '2017-03-01'),
(3, 'Sanchez Perez Armando', 'Ing. En Materiales', 'G200', '2017-03-02'),
(1, 'Fuentes Galvan Pedro', 'Ing. En TICs', 'B100', '2017-03-02'),
(2, 'Lorenzo Fernandez Gabriel', 'Ing. en Materiales', 'C100', '2017-03-03'),
(6, 'Angelina Ontiveros Lopez', 'Ing. en Informatica', 'C200', '2017-02-01'),
(7, 'Jesus Alejandro Martinez Rodriguez', 'Ing. En Quimica', 'C300', '2017-02-01'),
(8, 'Renata Cruz Trejo', 'Ing. en Materiales', 'A100', '2017-02-02'),
(9, 'Elizabeth Calderon Sandoval', 'Ing. en Materiales', 'B100', '2017-02-03');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=828400;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
