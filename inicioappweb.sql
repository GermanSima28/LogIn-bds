-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-02-2023 a las 07:47:54
-- Versión del servidor: 8.0.28
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inicioappweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iniciosesion`
--

CREATE TABLE `iniciosesion` (
  `email` varchar(55) NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `iniciosesion`
--

INSERT INTO `iniciosesion` (`email`, `usuario`, `password`) VALUES
('a.leysly.may@utponiente.edu.mx', 'LeyslyMay', 'chenson2000'),
('a.german.sima@utponiente.edu.mx', 'GermanSima', 'mostache5000'),
('a.brayan.canul@utponiente.edu.mx', 'BrayanCanul', 'utponiente19999'),
('joseTeodosio@gmail.com', 'Jose Ordoñez', '159000ordoñez'),
('GabrielaMoo@gmail.com', 'GabrielaMoo', 'gabrielitagutierrez'),
('adrianita@gmail.com', 'AdrianaColli', '90000'),
('vilma@gmail.com', 'VilmaEk', 'vilmaek2000'),
('', '', ''),
('carloshuchin@gmail.com', 'CarlosHuchin', '80000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_curso`
--

CREATE TABLE `usuario_curso` (
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `curso` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario_curso`
--

INSERT INTO `usuario_curso` (`email`, `usuario`, `curso`) VALUES
('a.leysly.may@utponiente.edu.mx', 'LeyslyMay', 'JavaScript'),
('a.german.sima@utponiente.edu.mx', 'GermanSima', 'JavaScript'),
('a.brayan.canul@utponiente.edu.mx', 'BrayanCanul', 'Dart'),
('vilma@gmail.com', 'VilmaEk', 'PHP'),
('joseTeodosio@gmail.com', 'Jose Ordoñez', 'Phyton'),
('GabrielaMoo@gmail.com', 'GabrielaMoo', 'Dart'),
('adrianita@gmail.com', 'AdrianaColli', 'PHP'),
('carloshuchin@gmail.com', 'CarlosHuchin', 'Dart'),
('a.leysly.may@utponiente.edu.mx', 'LeyslyMay', 'Dart');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
