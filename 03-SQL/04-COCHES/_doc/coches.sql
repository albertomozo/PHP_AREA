-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 09-02-2020 a las 09:23:38
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8


SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `coches`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--


CREATE TABLE IF NOT EXISTS `marcas` (
  `id_marca` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `pais` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `logo` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `pais`, `logo`) VALUES
(1, 'Alfa Romeo', 'Italia', 'alfa_romeo.png'),
(2, 'Audi', 'Alemanía', 'audi.png'),
(3, 'Aston Martin', 'Reino Unido', 'aston_martin.png'),
(4, 'BMW', 'Alemanía', 'bmw.png'),
(5, 'Citroen', 'Francia', 'citroen.png'),
(6, 'Ford', 'USA', 'ford.png'),
(7, 'Mazda', 'Japón', 'mazda.png'),
(8, 'Opel', 'Alemania', 'opel.png'),
(9, 'Seat', 'España', 'seat.jpg'),
(10, 'Skoda', 'República Checa', 'skoda.jpg'),
(11, 'Mercedes', 'Alemanía', 'mercedes.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE IF NOT EXISTS `modelos` (
  `id_modelo` int(3) unsigned NOT NULL AUTO_INCREMENT,
  `id_marca` int(2) NOT NULL,
  `nombre` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `foto` varchar(250) COLLATE utf8_spanish2_ci NOT NULL,
  `precio` int(10) NOT NULL,
  PRIMARY KEY (`id_modelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=21 ;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id_modelo`, `id_marca`, `nombre`, `foto`, `precio`) VALUES
(1, 1, 'Mito', 'mito.jpg', 16900),
(2, 1, 'Giulietta', 'giulietta.jpg', 24200),
(3, 2, 'Audi A1', 'audi-a1.jpg', 21600),
(4, 2, 'Audi A3', 'audi-a3.jpg', 31400),
(5, 3, 'Rapide', 'aston_martin_rapide.jpg', 79000),
(6, 3, 'Vantage', 'aston_martin_vantage.jpg', 131000),
(7, 4, 'Serie 1', 'bmw_1.jpg', 23900),
(8, 4, 'Serie 2', 'bmw_2.jpg', 32000),
(9, 5, 'C1', 'citroen-c1.jpg', 10200),
(10, 5, 'C3', 'citroen_c3.jpg', 10800),
(11, 6, 'C-Max', 'ford_cmax.jpg', 18900),
(12, 6, 'Kuga', 'ford-kuga.jpg', 25600),
(13, 7, 'Mazda 2', 'mazda_2.jpg', 13200),
(14, 7, 'Mazda 5', 'mazda_5.jpg', 24000),
(15, 8, 'Astra', 'opel_astra.jpg', 20900),
(16, 8, 'Mokka', 'opel_mokka.jpg', 22500),
(17, 9, 'Ibiza', 'seat-ibiza.jpg', 12700),
(18, 9, 'Altea', 'seat-altea.jpg', 21700),
(19, 10, 'Octavia', 'skoda-octavia.jpg', 19800),
(20, 10, 'Yeti', 'skoda-yeti.jpg', 20700);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
