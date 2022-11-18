-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2022 a las 21:08:42
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
-- Base de datos: `crud-debbie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(2) NOT NULL,
  `empleado_cliente` varchar(20) NOT NULL,
  `sueldo_bruto` int(10) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `telefono_de_contacto` int(10) NOT NULL,
  `empresa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `empleado_cliente`, `sueldo_bruto`, `categoria`, `telefono_de_contacto`, `empresa`) VALUES
(2, 'Debbie ', 21, 'Cliente', 0, '', 91120647, 'Disla'),
(18, 'Eliam', 23, 'Empleado', 200, 'coordinador', 0, 'Adilow'),
(20, 'Jake', 25, 'Cliente', 0, '', 939126489, 'C&ds'),
(21, 'Ethan', 31, 'Empleado', 3500, 'coordinador', 0, 'Hygt'),
(22, 'Benjamin', 21, 'Cliente', 0, '', 916457892, 'ALMWE'),
(23, 'Madeline', 28, 'Empleado', 3200, 'Jefa administrativa', 0, 'JERM'),
(24, 'Luna', 26, 'Cliente', 0, '', 912356789, 'LOWILA'),
(25, 'Jennifer ', 29, 'Empleado', 600, 'coordinador', 0, 'PYTHONLAB');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
