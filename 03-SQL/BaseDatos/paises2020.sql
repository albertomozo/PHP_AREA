-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 17-03-2020 a las 12:03:04
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `paisesdelmundo`
--
CREATE DATABASE `paisesdelmundo` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `paisesdelmundo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `continente`
--

CREATE TABLE IF NOT EXISTS `continente` (
  `continente_id` int(1) unsigned NOT NULL AUTO_INCREMENT,
  `continente_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`continente_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `continente`
--

INSERT INTO `continente` (`continente_id`, `continente_nombre`) VALUES
(1, 'América'),
(2, 'África'),
(3, 'Asia'),
(4, 'Europa'),
(5, 'Oceanía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pais`
--

CREATE TABLE IF NOT EXISTS `pais` (
  `pais_id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `pais_nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `pais_capital` varchar(255) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `pais_poblacion` int(10) NOT NULL,
  `pais_bandera` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `continente` int(1) NOT NULL,
  PRIMARY KEY (`pais_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci AUTO_INCREMENT=51 ;

--
-- Volcado de datos para la tabla `pais`
--

INSERT INTO `pais` (`pais_id`, `pais_nombre`, `pais_capital`, `pais_poblacion`, `pais_bandera`, `continente`) VALUES
(1, 'Canadá', 'Ottawa', 35749600, 'canada.png', 1),
(2, 'USA', 'Washington DC', 316017000, 'usa.png', 1),
(3, 'Mexico', 'Mexico DF', 119530753, 'mexico.png', 1),
(4, 'Honduras', 'Tegucigalpa', 8725000, 'honduras.png', 1),
(5, 'Panama', 'Panama', 4001033, 'panama.png', 1),
(6, 'Cuba', 'La Habana', 11242628, 'cuba.png', 1),
(7, 'Argentina', 'Buenos Aires', 43131966, 'argentina.png', 1),
(8, 'Brasil', 'Brasilia', 204450649, 'brasil.png', 1),
(9, 'Venezuela', 'Caracas', 31028337, 'venezuela.png', 1),
(10, 'Chile', 'Santiago de Chile', 18191884, 'chile.png', 1),
(11, 'Angola', 'Luanda', 24300000, 'angola.png', 2),
(12, 'Burundi', 'Buyunbura', 8988091, 'burundi.png', 2),
(13, 'Camerún', 'Younde', 22534532, 'camerun.png', 2),
(14, 'Egipto', 'El Cairo', 90017855, 'egipto.png', 2),
(15, 'Ghana', 'Accra', 24223431, 'ghana.png', 2),
(16, 'Kenia', 'Nairobi', 44350000, 'kenia.png', 2),
(17, 'Mozambique', 'Maputo', 21284701, 'mozambique.png', 1),
(18, 'Namibia', NULL, 2030692, 'namibia.png', 2),
(19, 'República del Congo', 'Brazzaville', 4366266, 'congo.png', 2),
(20, 'Zambia', 'Lusaka', 2030692, 'zambia.png', 2),
(21, 'Afganistán', 'Kabul', 31108077, 'afganistan.png', 3),
(22, 'Birmania', NULL, 54000000, 'birmania.png', 3),
(23, 'Catar', 'Doha', 2045239, 'catar.png', 3),
(24, 'Corea del Sur', 'Seul', 49540000, 'coreadelsur.png', 3),
(25, 'India', 'Nueva Delhi', 1210193422, 'india.png', 3),
(26, 'Japón', 'Tokio', 126659683, 'japon.png', 3),
(27, 'Mongolia', 'Ulan Bator', 2966294, 'mongolia.png', 3),
(28, 'China', 'Pekin', 1369811000, 'china.png', 3),
(29, 'Vietnam', 'Hanoí', 91519289, 'vietnam.png', 3),
(30, 'Irak', 'Bagdad', 31129225, 'irak.png', 3),
(31, 'Alemania', 'Berlin', 81292400, 'alemania.png', 4),
(32, 'Bulgaria', 'Sofia', 7384000, 'bulgaria.png', 4),
(33, 'Chipre', 'Nicosia', 1116564, 'chipre.png', 4),
(34, 'Dinamarca', 'Copenhage', 5627235, 'dinamarca.png', 4),
(35, 'Eslovenia', 'Ljubljana', 2046120, 'eslovenia.png', 4),
(36, 'Francia', 'Paris', 66952000, 'francia.png', 4),
(37, 'Portugal', 'Lisboa', 10562178, 'portugal.png', 4),
(38, 'Noruega', 'Oslo', 5214890, 'noruega.png', 4),
(39, 'Suiza', 'Berna', 8140000, 'suiza.png', 4),
(40, 'Rusia', 'Moscú', 146020031, 'rusia.png', 4),
(41, 'Australia', 'Camberra', 23613193, 'australia.png', 5),
(42, 'Nueva Zelana', 'Wellington', 4511590, 'zelanda.png', 5),
(43, 'Fiyi', 'Suva', 837271, 'fiji.png', 5),
(44, 'República de Kiribati', 'Tarawa Sur', 103000, 'kiribati.png', 5),
(45, 'Vanuatu', 'Port Vila', 266937, 'vanuatu.png', 5),
(46, 'Samoa', 'Apia', 193483, 'samoa.png', 5),
(47, 'Tonga', 'Nukualofa', 103036, 'tonga.png', 5),
(48, 'Tuvalu', 'Funafuti', 11810, 'tuvalu.png', 5),
(49, 'Palaos', NULL, 21286, 'palaos.png', 5),
(50, 'Islas Marshall', 'Majuro', 70983, 'marshall.png', 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
