-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2016 a las 18:15:48
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `shelter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animal`
--

CREATE TABLE IF NOT EXISTS `animal` (
  `chip_animal` varchar(20) NOT NULL,
  `nombre_animal` varchar(20) NOT NULL,
  `foto_animal` varchar(100) NOT NULL,
  `especie_animal` varchar(20) NOT NULL,
  `raza_animal` varchar(20) NOT NULL,
  `sexo_animal` varchar(20) NOT NULL,
  `fecha_nacimiento_animal` date NOT NULL,
  `color_animal` varchar(20) NOT NULL,
  `peso_animal` int(10) NOT NULL,
  `tamanio_animal` varchar(20) NOT NULL,
  `salud_animal` varchar(50) NOT NULL,
  `estado_animal` enum('refugio','acogido','adoptado','difunto') NOT NULL,
  `reservado_animal` tinyint(1) NOT NULL,
  `medicamentos_animal` varchar(100) NOT NULL,
  `notas_animal` text NOT NULL,
  `fecha_llegada_animal` date NOT NULL,
  `direccion_animal` varchar(50) NOT NULL,
  `multimedia_animal` varchar(100) NOT NULL,
  PRIMARY KEY (`chip_animal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `animal`
--

INSERT INTO `animal` (`chip_animal`, `nombre_animal`, `foto_animal`, `especie_animal`, `raza_animal`, `sexo_animal`, `fecha_nacimiento_animal`, `color_animal`, `peso_animal`, `tamanio_animal`, `salud_animal`, `estado_animal`, `reservado_animal`, `medicamentos_animal`, `notas_animal`, `fecha_llegada_animal`, `direccion_animal`, `multimedia_animal`) VALUES
('45ASEDG5674', 'Kodiak', 'content/animal/uploads/alano.jpg', 'Deerhound', 'Deerhound', 'Macho', '2017-01-29', 'Marron', 30, 'Grande', 'Buena', 'acogido', 0, 'Nada', 'Bueno y cariÃ±oso', '2016-01-25', 'C/ Camino de Ronda', 'Nada'),
('45SDYH56JURF', 'Darwin', 'content/animal/uploads/nnn.jpg', 'Alaskan malamute', 'Basenji', 'Macho', '2013-01-29', 'Marron', 20, 'PequeÃ±o', 'Buena', 'refugio', 1, 'Ninguno', 'Nada', '2014-10-29', 'C/ Camino de Ronda 30', 'Nada'),
('67DJJGHJ668', 'Cookie', 'content/animal/uploads/perro-con-correa.jpg', 'Pitbull', 'Pitbull', 'Macho', '2012-01-29', 'Marron', 36, 'Grande', 'Buena', 'acogido', 1, 'Ninguno', 'Nada', '2016-01-29', 'C/ Camino de Ronda 30', 'Nada'),
('98FASFH945G', 'Bicho', 'content/animal/uploads/img_como_alimentar_a_un_perro_cachorro_4645_orig.jpg', 'Chico', 'Salchicha', 'Macho', '2015-07-29', 'Marron', 10, 'PequeÃ±o', 'Buena', 'refugio', 0, 'Ninguno', 'Nada', '2016-01-29', 'C/ Camino de Ronda', 'Nada'),
('ADFG08H34MDG', 'Goliat', 'content/animal/uploads/3213055857_361d1d1190_o.jpg', 'Ã‰pagneul franÃ§ais', 'Galgo hÃºngaro', 'Macho', '2012-10-29', 'Negro', 19, 'PequeÃ±o', 'Buena', 'adoptado', 1, 'Nada', 'Nada', '2016-01-29', 'C/ Jacinto Benavente', 'Nada'),
('FA0S9F3JGAOS', 'Caiman', 'content/animal/uploads/img_como_banar_a_mi_perro_sin_agua_10283_orig.jpg', 'Entlebucher', 'Entlebucher', 'Macho', '2014-01-29', 'Marron', 30, 'Grande', 'Buena', 'refugio', 0, 'Ninguno', 'Nada', '2016-01-29', 'C/ Camino de Ronda 30', 'Nada'),
('SDFGSDFHDF', '...................', 'content/animal/uploads/ok.png', '....................', '....................', '..............', '0000-00-00', '....................', 0, '...............', '................', 'adoptado', 0, '............', '.....................', '0000-00-00', '..........................', '..................................');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `dni_user` varchar(9) NOT NULL,
  `nombre_user` varchar(30) NOT NULL,
  `apellido_user` varchar(40) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `telefono_user` int(20) NOT NULL,
  `direccion_user` varchar(50) NOT NULL,
  `tipo_user` enum('voluntario','casa','adoptante','padrino','socio') NOT NULL,
  `pass_user` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`dni_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni_user`, `nombre_user`, `apellido_user`, `email_user`, `telefono_user`, `direccion_user`, `tipo_user`, `pass_user`) VALUES
('26820455V', 'Rafa', 'Ruiz Lucena', 'rafaelingugr@gmail.com', 650739739, 'C/ Saladilla 31 1º. Cordoba', 'voluntario', '123456789'),
('45670983V', 'Jose', 'Rodriguez', 'jose@gmail.com', 0, '', 'voluntario', 'nada'),
('kjh', 'fasd', 'ljkjh', 'kjh@gmail.com', 0, 'kjh', 'casa', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntario`
--

CREATE TABLE IF NOT EXISTS `voluntario` (
  `dni_voluntario` varchar(9) NOT NULL,
  `password` varchar(20) NOT NULL,
  `apelllidos_voluntario` varchar(40) NOT NULL,
  `correo_voluntario` varchar(40) NOT NULL,
  `telefono_voluntario` int(20) NOT NULL,
  `direccion_voluntario` varchar(40) NOT NULL,
  PRIMARY KEY (`dni_voluntario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
