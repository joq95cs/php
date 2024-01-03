-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2021 a las 06:20:52
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos`
--

CREATE TABLE `fotos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fotos`
--

INSERT INTO `fotos` (`id`, `titulo`, `imagen`, `texto`) VALUES
(1, 'Laptop feliz', '1.jpg', 'Una lap feliz...'),
(2, 'Puente', '2.jpg', 'El puente...'),
(3, 'Lap blanca', '3.jpg', 'Lap blanca...'),
(4, 'La ciudad', '4.jpg', 'Bella ciudad...'),
(5, 'Camara', '5.jpg', 'La cámara profesional...'),
(6, 'Globo', '6.jpg', 'El globo...'),
(7, 'En la mesa', '7.jpg', 'Sobre la mesa...'),
(8, 'Muelle', '8.jpg', 'El muelle...'),
(9, 'Cosas', '9.jpg', 'Varias cosas...'),
(10, 'Nubes', '10.jpg', 'Las nubes...'),
(11, 'Bocinas', '11.jpg', 'Las bocinas...'),
(12, 'La playa', '12.jpg', 'La playa...'),
(13, 'Buceando', '13.jpg', 'En el mar...'),
(14, 'La montañas', '14.jpg', 'En la cima...'),
(15, 'La vista', '15.jpg', 'La bella vista...'),
(16, 'La planta', '16.jpg', 'La bella planta feliz...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
