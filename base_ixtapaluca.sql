-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-02-2022 a las 17:48:08
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_ixtapaluca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` bigint(10) UNSIGNED NOT NULL,
  `USUARIO` varchar(60) NOT NULL,
  `CONTRASENA` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_20`
--

CREATE TABLE `year_20` (
  `id_20` bigint(20) UNSIGNED NOT NULL,
  `ECO_20` varchar(50) NOT NULL,
  `NUC_20` varchar(60) NOT NULL,
  `FECHA_20` varchar(50) NOT NULL,
  `HECHO_20` varchar(60) NOT NULL,
  `VICTIMA_U_OFENDIDO_20` varchar(100) NOT NULL,
  `IMPUTADO_20` varchar(100) NOT NULL,
  `LUGAR_20` varchar(100) NOT NULL,
  `CARPETAS_REMITIDAS_20` varchar(60) NOT NULL,
  `MP_20` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_21`
--

CREATE TABLE `year_21` (
  `id_21` bigint(20) NOT NULL,
  `ECO_21` varchar(50) NOT NULL,
  `NUC_21` varchar(60) NOT NULL,
  `FECHA_21` varchar(50) NOT NULL,
  `HECHO_21` varchar(60) NOT NULL,
  `VICTIMA_U_OFENDIDO_21` varchar(100) NOT NULL,
  `IMPUTADO_21` varchar(100) NOT NULL,
  `LUGAR_21` varchar(100) NOT NULL,
  `CARPETAS_REMITIDAS_21` varchar(50) NOT NULL,
  `MP_21` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_22`
--

CREATE TABLE `year_22` (
  `id_22` bigint(20) NOT NULL,
  `ECO_22` varchar(50) NOT NULL,
  `NUC_22` varchar(60) NOT NULL,
  `FECHA_22` varchar(50) NOT NULL,
  `HECHO_22` varchar(60) NOT NULL,
  `VICTIMA_U_OFENDIDO_22` varchar(100) NOT NULL,
  `IMPUTADO_22` varchar(100) NOT NULL,
  `LUGAR_22` varchar(100) NOT NULL,
  `CARPETAS_REMITIDAS_22` varchar(60) NOT NULL,
  `MP_22` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `year_23`
--

CREATE TABLE `year_23` (
  `id_23` bigint(20) UNSIGNED NOT NULL,
  `ECO_23` varchar(50) NOT NULL,
  `NUC_23` varchar(60) NOT NULL,
  `FECHA_23` varchar(50) NOT NULL,
  `HECHO_23` varchar(60) NOT NULL,
  `VICTIMA_U_OFENDIDO_23` varchar(100) NOT NULL,
  `IMPUTADO_23` varchar(100) NOT NULL,
  `LUGAR_23` varchar(100) NOT NULL,
  `CARPETAS_REMITIDAS_23` varchar(60) NOT NULL,
  `MP_23` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `year_20`
--
ALTER TABLE `year_20`
  ADD PRIMARY KEY (`id_20`);

--
-- Indices de la tabla `year_21`
--
ALTER TABLE `year_21`
  ADD PRIMARY KEY (`id_21`);

--
-- Indices de la tabla `year_22`
--
ALTER TABLE `year_22`
  ADD PRIMARY KEY (`id_22`);

--
-- Indices de la tabla `year_23`
--
ALTER TABLE `year_23`
  ADD PRIMARY KEY (`id_23`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` bigint(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `year_20`
--
ALTER TABLE `year_20`
  MODIFY `id_20` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `year_21`
--
ALTER TABLE `year_21`
  MODIFY `id_21` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `year_22`
--
ALTER TABLE `year_22`
  MODIFY `id_22` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `year_23`
--
ALTER TABLE `year_23`
  MODIFY `id_23` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
