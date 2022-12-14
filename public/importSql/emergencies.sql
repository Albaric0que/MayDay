-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2022 a las 20:17:44
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `databasemayday`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emergencies`
--

CREATE TABLE `emergencies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `classification` varchar(255) NOT NULL,
  `dateTime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `emergencies`
--

INSERT INTO `emergencies` (`id`, `name`, `issue`, `classification`, `dateTime`) VALUES
(1, 'Eustaquio López Rodríguez', 'Se le han caído las llaves de coche a la alcantarilla.', 'Derivar al seguro.', '2022-11-30'),
(2, 'Witicia Andersen', 'Tiene al perro atrapado y sólo en el ascensor.', 'Derivado a los técnicos de ascensor de su comunidad', '2022-11-30'),
(3, 'Manolo Rus Maldonado', 'Se ha chocado contra una farola mirando un palomo que caminaba cerca.', 'Derivado a atención primaria para evaluación física y psicológica.', '2022-11-30'),
(5, 'Hermenegildo Gorgonzola', 'Se le ha caído un coco en la cabeza trepando por una palmera.', 'Derivado a Urgencias y salud mental.', '2022-12-07'),
(6, 'Veronika Dumbledore', 'No puede dejar de pensar en código.', 'Derivar a un bar con cerveza fresquita.', '2022-12-09'),
(12, 'José Miguel Jalapeño', 'Se queda helado con los proyectos', 'Derivar a personal shopper', '2022-12-13');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `emergencies`
--
ALTER TABLE `emergencies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `emergencies`
--
ALTER TABLE `emergencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
