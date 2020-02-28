-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2019 a las 08:19:30
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica_medica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `Cod_Cita` int(11) NOT NULL,
  `Hora` varchar(10) NOT NULL,
  `Momento` varchar(3) NOT NULL,
  `Fecha` varchar(10) NOT NULL,
  `Doctor` varchar(20) NOT NULL,
  `Sintoma` varchar(200) NOT NULL,
  `Especialidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`Cod_Cita`, `Hora`, `Momento`, `Fecha`, `Doctor`, `Sintoma`, `Especialidad`) VALUES
(1, 'Tarde', '', '2019-08-01', '', '', ''),
(2, 'Tarde', '', '2019-08-01', 'Dr.Luis ArtaviaSin', '', 'Medicina General'),
(3, '16:10', 'Tar', '2019-08-03', 'Dr.Luis ArtaviaSin', 'Dolor de nuca', 'Pediatria'),
(4, '16:10', 'Tar', '2019-08-03', 'Dr.Luis ArtaviaSin', 'Dolor de nuca', 'Pediatria'),
(7, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(8, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(9, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(10, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(11, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(12, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(13, '04:40', 'PM', '2019-08-11', 'Dr.Carlos Ortiz', 'Diarrea', 'Medicina General'),
(14, '09:34', 'AM', '2019-08-08', 'Dr.Carlos Ortiz', 'Sueno', 'Medicina General');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistema`
--

CREATE TABLE `sistema` (
  `Cod_Cita` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Cedula` varchar(20) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Contra` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sistema`
--

INSERT INTO `sistema` (`Cod_Cita`, `Nombre`, `Apellidos`, `Cedula`, `Telefono`, `Correo`, `Contra`) VALUES
(2, 'Carlitos', 'Sanchez', '63462537', '69752423', 'hgdygqyd@hotmail.com', ''),
(3, 'Luis Fernando', 'Olivares Medina', '695482148', '74698246', 'luiOM@gmail.com', 'soyluis'),
(5, 'Omar', 'Diaz Orozco', '1215451', '91478524', 'Diaz@gmail.com', 'Omar'),
(6, 'Andres', 'Vargas Cisar', '16854827', '874515', 'andres@gmail.com', 'andrew');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`Cod_Cita`);

--
-- Indices de la tabla `sistema`
--
ALTER TABLE `sistema`
  ADD PRIMARY KEY (`Cod_Cita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `Cod_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `sistema`
--
ALTER TABLE `sistema`
  MODIFY `Cod_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
