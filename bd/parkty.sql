-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3312
-- Tiempo de generación: 19-01-2022 a las 23:24:02
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parkty`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_contacto`
--

CREATE TABLE `atencion_contacto` (
  `id_contacto` tinyint(4) NOT NULL,
  `email` varchar(19) DEFAULT NULL,
  `nombre` varchar(6) DEFAULT NULL,
  `apellidos` varchar(8) DEFAULT NULL,
  `prefijo` varchar(5) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atencion_contacto`
--

INSERT INTO `atencion_contacto` (`id_contacto`, `email`, `nombre`, `apellidos`, `prefijo`, `telefono`) VALUES
(7, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(8, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(9, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(10, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Srita', 64004587),
(11, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(12, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(13, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Srita', 64004587),
(14, 'adobrasca@gmail.com', 'Adilem', 'Castillo', 'Srita', 303818639),
(15, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Srita', 64004587),
(16, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Sra', 64004587),
(17, 'adobrasca@gmail.com', 'asd', 'Dobras', 'Srita', 64004587),
(18, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Srita', 64004587),
(19, 'adobrasca@gmail.com', 'Adilem', 'Dobras', 'Srita', 64004587);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion_mensaje`
--

CREATE TABLE `atencion_mensaje` (
  `id_mensaje` tinyint(4) NOT NULL,
  `mensaje` varchar(6) DEFAULT NULL,
  `tema` varchar(22) DEFAULT NULL,
  `id_contacto` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `atencion_mensaje`
--

INSERT INTO `atencion_mensaje` (`id_mensaje`, `mensaje`, `tema`, `id_contacto`) VALUES
(4, 'asdasd', 'erroneos', 7),
(5, 'sad', 'Otros', 8),
(6, 'a', 'Problema inicio sesion', 9),
(7, 'sdsdf', 'Error donar', 10),
(8, 'asd', 'Problema inicio sesion', 11),
(9, 'sad', 'Error donar', 12),
(10, 'asd', 'Problema inicio sesion', 13),
(11, 'asd', 'Problema perfil', 14),
(12, 'asd', 'Problema perfil', 15),
(13, 'asd', 'Otros', 16),
(14, 'sd', 'Error donar', 17),
(15, 'asd', 'Error donar', 18),
(16, 'SD', 'Error donar', 19);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `club`
--

CREATE TABLE `club` (
  `id_club` int(11) NOT NULL,
  `nombre` varchar(31) DEFAULT NULL,
  `descripcion` varchar(136) DEFAULT NULL,
  `historia` text DEFAULT NULL,
  `likes` smallint(6) DEFAULT NULL,
  `direccion` varchar(24) DEFAULT NULL,
  `cp` mediumint(9) DEFAULT NULL,
  `pais` varchar(24) DEFAULT NULL,
  `categoria` varchar(21) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `club`
--

INSERT INTO `club` (`id_club`, `nombre`, `descripcion`, `historia`, `likes`, `direccion`, `cp`, `pais`, `categoria`, `telefono`, `correo`) VALUES
(1, 'Club de recoleccion de flores', 'El club de flores se dedica a arreglar flores y realizar nuevas decoracion y forografiarlas, es una actividad de paciencia y dedicacion.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid,ES', 28670, 'Torrejon de Aldos', 'Naturaleza & Animales', 631235345, 'flores_club@gmail.com'),
(2, 'Club de fotografia paisajistica', 'Realizamos excursiones y capturamos fotografias de paisajes. Suelen ser entornos inospitos y muy naturales.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 19, 'España, Madrid. ES', 28679, 'Via Argentina, Calle 54.', 'Naturaleza & Animales', 635435345, 'fotografia_club@gmail.com'),
(3, 'Club de adiestramiento canino', 'Ten un tiempo para divertirte y aprender con tu canino.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28678, 'Via España, Principe Pio', 'Naturaleza & Animales', 675634534, 'canino_club@gmail.com'),
(4, 'Club de anatomia animal', 'Estudiamos la biologia de los animales en el bosque', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 70, 'España, Madrid, ES', 28677, 'Principe Pio, Calle Tajo', 'Naturaleza & Animales', 645648345, 'anatomia_club@gmail.com'),
(5, 'Club de lectura', 'Realizamos reuniones y discutimos nuestras opiniones.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 21, 'España, Madrid, ES', 28666, 'Villaviciosa, Tajo 34', 'Actividades & Hobbys', 645354677, 'lectura_club@gmail.com'),
(6, 'Club de futbol', 'Es un club encargado de enseñarles a los niños una manera diferente de hacer deporte.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28675, 'Boadilla, C/78', 'Actividades & Hobbys', 665635677, 'futbol_club@gmail.com'),
(7, 'Club de ping pong', 'Trae tu raqueta y compite con los mejores', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28670, 'Mostoles, Ardoz', 'Actividades & Hobbys', 663477777, 'pingpong_club@gmail.com'),
(8, 'Club de ajedrez', 'Somos un grupo elite que va a las mejores regionales de ajedrez', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 100, 'España, Madrid, ES', 28679, 'Via Argentina, Calle 54.', 'Actividades & Hobbys', 654326645, 'ajedrez_club@gmail.com'),
(9, 'Club pride', 'Festejemos sobre nuestros gustos y expresemos nuestra sexualidad', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28678, 'Torrejon de Aldos', 'Autoayuda & Salud', 645787868, 'pride_club@gmail.com'),
(10, 'Club de debate', 'Discutiremos temas controverciales marcadas en la historia y te abriremos un nuevo campo a el aprendizaje por gusto.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 8, 'España, Madrid, ES', 28677, 'Via Argentina, Calle 54.', 'Actividades & Hobbys', 668999865, 'debate_club@gmail.com'),
(11, 'Club redes sociales', 'Nos gusta hacer lives y postear contenido atractivo y artistico, ayudamos a promocionar tambien fotos y obtener mas likes.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28666, 'Via España, Principe Pio', 'Negocios & Trends', 637886453, 'sociales_club@gmail.com'),
(12, 'Club de costura', 'Hacemos lienzos elegantes para manteles y cortinas.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 20, 'España, Madrid, ES', 28675, 'Principe Pio, Calle Tajo', 'Negocios & Trends', 685644536, 'costura_club@gmail.com'),
(13, 'Club de marketing', 'Estas listo para comprar acciones y usar criptomonedas?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 6, 'España, Madrid, ES', 28666, 'Villaviciosa, Tajo 34', 'Negocios & Trends', 667854322, 'marketing_club@gmail.com'),
(14, 'Club anti-drogas', 'Protestamos contra la legalizacion de drogas y ayudamos a los que dependen de ellas', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 'España, Madrid, ES', 28675, 'Boadilla, C/78', 'Autoayuda & Salud', 687543545, 'antidrogas_club@gmail.com'),
(15, 'Club de baile', 'Es un club que nos divertimos realizando cualquier...', 'Lorem ipsum dolor sit amet, consectetur adipiscing...\r\nLorem ipsum dolor sit amet, consectetur adipiscing...\r\nLorem ipsum dolor sit amet, consectetur adipiscing...\r\nLorem ipsum dolor sit amet, consectetur adipisci', 5, 'Via Argentina, Calle 54.', 28670, 'España', 'Actividades & Hobbys', 664534534, 'baile_club@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  `id_club` tinyint(4) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `id_usuario`, `id_club`, `comentario`) VALUES
(1, 2, 5, 'Holajnnkjnkjnknjknk'),
(2, 2, 5, 'Hola como estassdas'),
(3, 2, 5, 'sdfsfsdfsdsdfsdfsdf'),
(4, 2, 5, 'asdadassssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss'),
(5, 14, 4, 'Es un club bastante interactivo y emocionante me ha dado mucha inspiracion. Espero q a otros tambien'),
(6, 16, 4, 'hola me gustaria estar en este grupo y participar de sus actividades creo que son bastantes creativo'),
(7, 2, 5, 'Hola, es interezante la lectura me gustaria que se pueda proponer mas cosas o actividades asi no....'),
(8, 2, 5, 'Me encanta este club es bastante interesante, deberian haber mas como este y otros parecidos........'),
(9, 2, 5, 'Ojala hubieran clubes parecidos a este, me parece bastante entretenido y diferente ojala hubiera mas'),
(10, 2, 12, 'Me agrada este club, me ayuda a relajarme y sentirme serena, comoda conmigo misma, espero tener mas.'),
(11, 2, 2, 'Me encanta este club, es divertido, increible y con gran cantidad de actividades que evolucionan y..'),
(12, 2, 13, 'Comentariofnsadkanjsdkjdnakjdnsakjsdnaksdjnakjsdnakjsdnaksdasdasdasdasdasdasdasdasdasdasdasdasdadsas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `donacion`
--

CREATE TABLE `donacion` (
  `id_donacion` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  `monto` varchar(4) DEFAULT NULL,
  `fecha_transaccion` varchar(10) DEFAULT NULL,
  `tarjeta` varchar(32) DEFAULT NULL,
  `cvv` varchar(32) DEFAULT NULL,
  `fecha_caducidad` varchar(32) DEFAULT NULL,
  `id_club` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `donacion`
--

INSERT INTO `donacion` (`id_donacion`, `id_usuario`, `monto`, `fecha_transaccion`, `tarjeta`, `cvv`, `fecha_caducidad`, `id_club`) VALUES
(1, 2, '6.0', '2021/12/21', '8a759210d1f9bdb683260fe9f0579a31', '1534b76d325a8f591b52d302e7181331', 'e8181dca7409f50ab0097bb9f685e78a', 5),
(2, 2, '5.0', '2021/12/22', '6d1743022979890f4f4d7b4de204bde6', '289dff07669d7a23de0ef88d2f7129e7', '571cae54ee43d115ed9321b23753eb07', 5),
(3, 2, '5.0', '2021/12/22', 'ecd9cc9525a8e1040309e068505ccfb7', 'bc6dc48b743dc5d013b1abaebd2faed2', '36e009ec51d9a050b5bb5a65e4699ca7', 5),
(4, 2, '6.0', '2021/12/22', '4ee47e94ddaec3281c17385ef6cff27c', '289dff07669d7a23de0ef88d2f7129e7', '95646561d466f66633db9c88b96a9d31', 5),
(5, 2, '5.0', '2021/12/22', '02e469cb0239168c61f3610cba8f308c', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(6, 2, '5.0', '2021/12/22', '2da80d2edb947a0d3cbfdf28564bace2', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(7, 2, '3.0', '2021/12/22', '197261a178bfd985c77e35746fcbea8d', '289dff07669d7a23de0ef88d2f7129e7', '95646561d466f66633db9c88b96a9d31', 5),
(8, 2, '5.0', '2021/12/22', 'e42d3f6c61c73f57998c0c1bcd342235', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(9, 2, '34.0', '2021/12/22', '2aa4ae16764daeb0592cc4bf854cf75d', '289dff07669d7a23de0ef88d2f7129e7', '6cb9acf82ff6efa32969a07713fda381', 5),
(10, 2, '34.0', '2021/12/22', 'd8e5ba6f6fd30bac34ebfdfd08cc660d', '289dff07669d7a23de0ef88d2f7129e7', '60d8c3a9732dd9f28b2d7be5fea45f60', 5),
(11, 2, '5.0', '2021/12/22', '48f2e293d5ff448374badb62c8ea69df', '250cf8b51c773f3f8dc8b4be867a9a02', 'fd08b212395a3a9b13d23232fb68f7a4', 13),
(12, 2, '20.0', '2021/12/22', '90763d3efc0faa1c01248e447969c7cd', '15de21c670ae7c3f6f3f1f37029303c9', 'fd08b212395a3a9b13d23232fb68f7a4', 4),
(13, 2, '22.0', '2021/12/22', '6d68edc8af6c6d4e796a6379c122b262', '289dff07669d7a23de0ef88d2f7129e7', 'fd08b212395a3a9b13d23232fb68f7a4', 6),
(14, 2, '4.0', '2021/12/22', '7cdfdffc89631a6a8f762477173478d1', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(15, 2, '3.0', '2021/12/22', 'd6026794f9f6b0d67ce47a627ae2ef41', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(16, 2, '4.0', '2021/12/22', '921db3e7ccb89185ce95320b8bc468ac', 'bcbe3365e6ac95ea2c0343a2395834dd', 'fd08b212395a3a9b13d23232fb68f7a4', 5),
(17, 2, '4.0', '2021/12/22', '7cdfdffc89631a6a8f762477173478d1', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(18, 2, '50.0', '2021/12/22', '1cf4c22b04216f50fb7b253a9398cac9', '289dff07669d7a23de0ef88d2f7129e7', '571cae54ee43d115ed9321b23753eb07', 5),
(19, 2, '1.0', '2021/12/24', '6c3a85f158fa36a4e42cad3a955ebd05', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(20, 2, '', '2021/12/24', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 5),
(21, 2, '', '2021/12/26', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 'd41d8cd98f00b204e9800998ecf8427e', 5),
(22, 2, '4.0', '2021/12/28', '289dff07669d7a23de0ef88d2f7129e7', '289dff07669d7a23de0ef88d2f7129e7', '95646561d466f66633db9c88b96a9d31', 5),
(23, 14, '5', '2021/12/29', '02e469cb0239168c61f3610cba8f308c', '289dff07669d7a23de0ef88d2f7129e7', '571cae54ee43d115ed9321b23753eb07', 4),
(24, 14, '3', '2021/12/29', '9a62cfc56c25588349ba5f8689dc51aa', '289dff07669d7a23de0ef88d2f7129e7', 'dcf4c7f4169749aee541e8ecf2a099b3', 5),
(25, 16, '4', '2021/12/30', '0c827cb033c61fbc005472c844ddfc42', 'dd8eb9f23fbd362da0e3f4e70b878c16', '83542517e7adf8d23113824b08e1a3b4', 4),
(26, 2, '4', '2021/12/31', '84b26be543301f170bffacf0d399b03e', '550a141f12de6341fba65b0ad0433500', '7a6c7c3bedf4dff05a1d7fef587c2560', 5),
(27, 2, '10', '2021/12/31', '67e2c26e838a40a2e5e006db2b2b6dd7', '202cb962ac59075b964b07152d234b70', 'ca1147f1f0089d5c035efbc7ae34d671', 5),
(28, 2, '30', '2022/01/09', '1b8f5b172185c956cb13f2428fdb5fc0', '289dff07669d7a23de0ef88d2f7129e7', 'f0b6612846dcbbaee3369a5123706b79', 12),
(29, 2, '15', '2022/01/10', '548bd430335bd4f0c2b1187f896763be', '202cb962ac59075b964b07152d234b70', 'fd08b212395a3a9b13d23232fb68f7a4', 2),
(30, 2, '5', '2022/01/10', '4f54481632757533be28d2b97ad36d87', '289dff07669d7a23de0ef88d2f7129e7', 'fd08b212395a3a9b13d23232fb68f7a4', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id_multimedia` smallint(6) NOT NULL,
  `tipo` varchar(16) DEFAULT NULL,
  `enlace` varchar(51) DEFAULT NULL,
  `id_club` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id_multimedia`, `tipo`, `enlace`, `id_club`) VALUES
(1, 'imagen', '_images/clubes/club-flores/club-flower1.jpg', 1),
(2, 'imagen', '_images/clubes/club-flores/club-flower2.jpg', 1),
(3, 'imagen', '_images/clubes/club-flores/club-flower3.jpg', 1),
(4, 'imagen', '_images/clubes/club-flores/club-flower4.jpg', 1),
(5, 'video', '_images/clubes/club-flores/club-flowers.mp4', 1),
(6, 'imagen', '_images/clubes/club-anatomia/club-anatomy1.jpg', 4),
(7, 'imagen', '_images/clubes/club-anatomia/club-anatomy2.jpg', 4),
(8, 'imagen', '_images/clubes/club-anatomia/club-anatomy3.jpg', 4),
(9, 'imagen', '_images/clubes/club-anatomia/club-anatomy4.jpg', 4),
(10, 'video', '_images/clubes/club-anatomia/club-anatomy.mp4', 4),
(11, 'imagen', '_images/clubes/club-baile/club-baile1.jpg', 15),
(12, 'imagen', '_images/clubes/club-baile/club-baile2.jpg', 15),
(13, 'imagen', '_images/clubes/club-baile/club-baile3.jpg', 15),
(14, 'imagen', '_images/clubes/club-baile/club-baile4.jpg', 15),
(15, 'video', '_images/clubes/club-baile/club-baile.mp4', 15),
(16, 'imagen', '_images/clubes/club-debate/club-debate1.jpg', 10),
(17, 'imagen', '_images/clubes/club-debate/club-debate2.jpg', 10),
(18, 'imagen', '_images/clubes/club-debate/club-debate3.jpg', 10),
(19, 'imagen', '_images/clubes/club-debate/club-debate4.jpg', 10),
(20, 'video', '_images/clubes/club-paisaje/club-paisaje.mp4', 2),
(21, 'imagen', '_images/clubes/club-paisaje/club-paisaje1.jpg', 2),
(22, 'imagen', '_images/clubes/club-paisaje/club-paisaje2.jpg', 2),
(23, 'imagen', '_images/clubes/club-paisaje/club-paisaje3.jpg', 2),
(24, 'imagen', '_images/clubes/club-paisaje/club-paisaje4.jpg', 2),
(26, 'imagen', '_images/clubes/club-futbol/club-futbol1.jpg', 6),
(27, 'imagen', '_images/clubes/club-futbol/club-futbol2.jpg', 6),
(28, 'imagen', '_images/clubes/club-futbol/club-futbol3.jpg', 6),
(29, 'imagen', '_images/clubes/club-futbol/club-futbol4.jpg', 6),
(30, 'video', '_images/clubes/club-futbol/club-futbol.mp4', 6),
(31, 'imagen', '_images/clubes/club-perros/club-dogs1.jpg', 3),
(32, 'imagen', '_images/clubes/club-perros/club-dogs2.jpg', 3),
(33, 'imagen', '_images/clubes/club-perros/club-dogs3.jpg', 3),
(34, 'imagen', '_images/clubes/club-perros/club-dogs4.jpg', 3),
(35, 'video', '_images/clubes/club-perros/club-dogs.mp4', 3),
(36, 'imagen', '_images/clubes/club-marketing/club-marketing1.jpg', 13),
(37, 'imagen', '_images/clubes/club-marketing/club-marketing2.jpg', 13),
(38, 'imagen', '_images/clubes/club-marketing/club-marketing3.jpg', 13),
(39, 'imagen', '_images/clubes/club-marketing/club-marketing4.jpg', 13),
(40, 'video', '_images/clubes/club-marketing/club-marketing.mp4', 13),
(41, 'imagen', '_images/clubes/club-lectura/club-lectura1.jpg', 5),
(42, 'imagen', '_images/clubes/club-lectura/club-lectura2.jpg', 5),
(43, 'imagen', '_images/clubes/club-lectura/club-lectura3.jpg', 5),
(44, 'imagen', '_images/clubes/club-lectura/club-lectura4.jpg', 5),
(45, 'video', '_images/clubes/club-lectura/club-lectura.mp4', 5),
(46, 'imagen', '_images/clubes/club-ajedrez/club-ajedrez1.jpg', 8),
(47, 'imagen', '_images/clubes/club-ajedrez/club-ajedrez2.jpg', 8),
(48, 'imagen', '_images/clubes/club-ajedrez/club-ajedrez3.jpg', 8),
(49, 'imagen', '_images/clubes/club-ajedrez/club-ajedrez4.jpg', 8),
(50, 'video', '_images/clubes/club-ajedrez/club-ajedrez.mp4', 8),
(51, 'imagen', '_images/clubes/club-antidrogas/club-antidrogas1.jpg', 14),
(52, 'imagen', '_images/clubes/club-antidrogas/club-antidrogas2.jpg', 14),
(53, 'imagen', '_images/clubes/club-antidrogas/club-antidrogas3.jpg', 14),
(54, 'imagen', '_images/clubes/club-antidrogas/club-antidrogas4.jpg', 14),
(55, 'video', '_images/clubes/club-antidrogas/club-antidrogas.mp4', 14),
(56, 'video', '_images/clubes/club-debate/club-debate.mp4', 10),
(57, 'imagen', '_images/clubes/club-costura/club-costura1.jpg', 12),
(58, 'imagen', '_images/clubes/club-costura/club-costura2.jpg', 12),
(59, 'imagen', '_images/clubes/club-costura/club-costura3.jpg', 12),
(60, 'imagen', '_images/clubes/club-costura/club-costura4.jpg', 12),
(61, 'video', '_images/clubes/club-costura/club-costura.mp4', 12),
(62, 'imagen', '_images/clubes/club-pingpong/club-pingpong1.jpg', 7),
(63, 'imagen', '_images/clubes/club-pingpong/club-pingpong2.jpg', 7),
(64, 'imagen', '_images/clubes/club-pingpong/club-pingpong3.jpg', 7),
(65, 'imagen', '_images/clubes/club-pingpong/club-pingpong4.jpg', 7),
(66, 'video', '_images/clubes/club-pingpong/club-pingpong.mp4', 7),
(67, 'imagen', '_images/clubes/club-pride/club-pride1.jpg', 9),
(68, 'imagen', '_images/clubes/club-pride/club-pride2.jpg', 9),
(69, 'imagen', '_images/clubes/club-pride/club-pride3.jpg', 9),
(70, 'imagen', '_images/clubes/club-pride/club-pride4.jpg', 9),
(71, 'video', '_images/clubes/club-pride/club-pride.mp4', 9),
(72, 'imagen', '_images/clubes/club-social/club-social1.jpg', 11),
(73, 'imagen', '_images/clubes/club-social/club-social2.jpg', 11),
(74, 'imagen', '_images/clubes/club-social/club-social3.jpg', 11),
(75, 'imagen', '_images/clubes/club-social/club-social4.jpg', 11),
(76, 'video', '_images/clubes/club-social/club-social.mp4', 11),
(77, 'icono', 'club-baile-small.jpg', 15),
(78, 'icono', 'club-ajedrez-small.jpg', 8),
(79, 'icono', 'club-pingpong-small.jpg', 7),
(80, 'icono', 'club-flores-small.jpg', 1),
(81, 'icono', 'club-marketing-small.jpg', 13),
(82, 'icono', 'club-pride-small.jpg', 9),
(83, 'icono', 'club-antidrogas-small.jpg', 14),
(84, 'icono', 'club-futbol-small.jpg', 6),
(85, 'icono', 'club-costura-small.jpg', 12),
(86, 'icono', 'club-perros-small.jpg', 3),
(87, 'icono', 'club-paisaje-small.jpg', 2),
(88, 'icono', 'club-debate-small.jpg', 10),
(89, 'icono', 'club-lectura-small.jpg', 5),
(90, 'imagen-donacion', 'donacion-club-lectura.jpg', 5),
(91, 'imagen-donacion', 'donacion-club-marketing.jpg', 13),
(92, 'imagen-donacion', 'donacion-club-fotografia.jpg', 2),
(93, 'imagen-donacion', 'donacion-club-costura.jpg', 12),
(94, 'imagen-donacion', 'donacion-club-flores.jpg', 1),
(95, 'imagen-donacion', 'donacion-club-futbol.jpg', 6),
(96, 'imagen-donacion', 'donacion-club-anatomia.jpg', 4),
(97, 'imagen-donacion1', 'club-lectura-donacion.jpg', 5),
(98, 'imagen-donacion1', 'club-marketing-donacion.jpg', 13),
(99, 'imagen-donacion1', 'club-paisaje-donacion.jpg', 2),
(100, 'imagen-donacion1', 'club-costura-donacion.jpg', 12),
(101, 'imagen-donacion1', 'club-flores-donacion.jpg', 1),
(102, 'imagen-donacion1', 'club-futbol-donacion.jpg', 6),
(103, 'imagen-donacion1', 'club-anatomia-donacion.jpg', 4),
(104, 'imagen-club', 'club-costura.jpg', 12),
(105, 'imagen-club', 'club-social.jpg', 11),
(106, 'imagen-club', 'club-pride.jpg', 9),
(107, 'imagen-club', 'club-debate.jpg', 10),
(108, 'imagen-club', 'club-flores.png', 1),
(109, 'imagen-club', 'club-canino.png', 3),
(110, 'imagen-club', 'club-pingpong.png', 7),
(111, 'imagen-club', 'club-marketing.png', 13),
(112, 'imagen-club', 'club-baile.jpg', 15),
(113, 'imagen-club', 'club-lectura.jpg', 5),
(114, 'imagen-club', 'club-anatomia.png', 4),
(115, 'imagen-club', 'club-antidrogas.png', 14),
(116, 'imagen-club', 'club-futbol.png', 6),
(117, 'imagen-club', 'club-fotografia.png', 2),
(118, 'imagen-club', 'club-ajedrez.png', 8),
(119, 'icono', 'club-anatomia-small.jpg', 4),
(120, 'icono', 'club-redes-small.jpg', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id_horario` tinyint(4) NOT NULL,
  `id_club` tinyint(4) DEFAULT NULL,
  `dia` varchar(9) DEFAULT NULL,
  `horaA` varchar(5) DEFAULT NULL,
  `horaB` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horarios`
--

INSERT INTO `horarios` (`id_horario`, `id_club`, `dia`, `horaA`, `horaB`) VALUES
(1, 1, 'Lunes', '12:00', '13:00'),
(2, 4, 'Martes', '1:00', '2:00'),
(3, 15, 'Miercoles', '15:00', '16:00'),
(4, 1, 'Viernes', '10:00', '11:00'),
(5, 2, 'Sabado', '13:00', '16:00'),
(6, 2, 'Miercoles', '12:00', '13:00'),
(8, 3, 'Jueves', '18:00', '19:00'),
(9, 3, 'Lunes', '14:00', '15:00'),
(10, 4, 'Martes', '20:00', '21:00'),
(11, 5, 'Domingo', '13:00', '13:30'),
(12, 5, 'Viernes', '12:00', '12:30'),
(13, 6, 'Lunes', '8:00', '9:00'),
(14, 6, 'Martes', '9:00', '10:00'),
(15, 7, 'Miercoles', '10:00', '11:00'),
(16, 9, 'Jueves', '11:00', '12:00'),
(17, 10, 'Viernes', '12:00', '13:00'),
(18, 10, 'Sabado', '13:00', '14:00'),
(19, 10, 'Domingo', '14:00', '15:00'),
(20, 11, 'Lunes', '16:00', '17:00'),
(21, 11, 'Martes', '17:00', '18:00'),
(22, 12, 'Miercoles', '18:00', '19:00'),
(23, 12, 'Jueves', '19:00', '20:00'),
(24, 13, 'Viernes', '20:00', '21:00'),
(25, 13, 'Sabado', '21:00', '22:00'),
(26, 14, 'Lunes', '22:00', '23:00'),
(27, 14, 'Martes', '22:00', '23:00'),
(28, 8, 'Martes', '22:00', '23:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `id_noticia` int(11) NOT NULL,
  `email` varchar(22) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `email`, `cp`) VALUES
(1, 'adobrasca@gmails.com', NULL),
(2, 'adobrasca512@gmail.com', NULL),
(3, 'adobrascsa@gmail.com', NULL),
(4, 'adobrrasca@gmail.com', NULL),
(5, 'adobrasca@gmail.com', NULL),
(6, 'adobrasc33a@gmail.com', 23424),
(7, 'adobra44sca@gmail.com', 43432),
(8, 'adobr45345@gmail.com', 43453),
(9, 'carlito_gsefonz@gmail.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propuestas`
--

CREATE TABLE `propuestas` (
  `id_propuesta` tinyint(4) NOT NULL,
  `titulo` varchar(26) DEFAULT NULL,
  `descripcion` varchar(128) DEFAULT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  `likes` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propuestas`
--

INSERT INTO `propuestas` (`id_propuesta`, `titulo`, `descripcion`, `id_usuario`, `likes`) VALUES
(1, 'Club de tenis', 'Necesitamos apoyo para comprar nuevas raquetas, ya no nos quedan', 2, 12),
(2, 'Club de dibujo', 'Queremos realizar un viaje a cataluña para apreciar las pinturas, somos pocos y no tenemos mucho presupuesto, necesitamos ayuda.', 4, 4),
(3, 'Club de escritura japoneza', 'Necesitamos mejorar nuestro lenguaje asi que requerimos tutores pero necesitamos apoyo para conseguirlos.', 3, 13),
(4, 'Club de festivales', 'Necesitamos comprar fuegos artificiales para el evento del 7 de enero.', 1, 9),
(7, 'Club de Pelea', 'Club requiere aportacion para comprar trofeos para niños de 10 años en competencia de boxeo.', 2, 5),
(9, 'Club de Artesanias', 'Queremos participar en el dia cultural y queremos ayuda para tener el espacio y que nos puedan conocer.', 2, 4),
(10, 'Club de Atletas', 'Necesitamos un nuevo uniforme y no poseemos el presupuesto', 14, 4),
(11, 'Club de tirolinas', 'Queremos tener una reserva de polvo para no caer.', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscripcion`
--

CREATE TABLE `suscripcion` (
  `id_suscripcion` tinyint(4) NOT NULL,
  `id_usuario` tinyint(4) DEFAULT NULL,
  `id_club` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `suscripcion`
--

INSERT INTO `suscripcion` (`id_suscripcion`, `id_usuario`, `id_club`) VALUES
(72, 1, 8),
(73, 1, 9),
(74, 1, 10),
(75, 1, 12),
(76, 3, 12),
(77, 3, 13),
(78, 3, 14),
(79, 4, 10),
(80, 4, 13),
(81, 14, 4),
(82, 15, 13),
(91, 2, 14),
(92, 2, 5),
(93, 2, 11),
(94, 2, 12),
(95, 2, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `username` varchar(10) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellidos` varchar(30) DEFAULT NULL,
  `fecha` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`username`, `password`, `email`, `id_usuario`, `nombre`, `apellidos`, `fecha`) VALUES
('asd', '7815696ecbf1c96e6894b7', 'asd', 1, 'Peggy', 'Corrales', '10-12-2000'),
('Adilem', '360f28c92c5f24201678fe04ac258f1c', 'adobrasca512@gmail.com', 2, 'Ana', 'Perez', '2010-07-15'),
('ana', '276b6c4692e78d4799c12a', 'ana', 3, 'Adilem', 'Dobras', '5-12-200'),
('Andreai', '827ccb0eea8a706c4c34a1', 'adob3rasca512@gmail.co', 4, 'Andrea', 'Perez', '2021-12-17'),
('Adisi', 'c44a471bd78cc6c2fea32b', 'asdasd', 5, 'andre', 'sandoval', '2021-12-07'),
('Carlito', 'b5d68a78e7c5951c6310bb', 'carlito_gonz@gmail.com', 7, 'Carlitos', 'Perez Ma', '2007-02-08'),
('JoseMan', '360f28c92c5f24201678fe', 'adobr3asca@gmail.com', 10, 'Jose', 'Perez', '2002-06-05'),
('NadiaGo', '360f28c92c5f24201678fe', 'a2dobrasca@gmail.com', 11, 'Nadia', 'Gonzales', '2005-06-09'),
('hannia5', '360f28c92c5f24201678fe', 'a6dobrasca@gmail.com', 12, 'Hanna', 'Sanjur', '2004-06-15'),
('Colltendiz', 'b5d68a78e7c5951c6310bb', 'adobrasca@gmail.com', 13, 'Collete', 'Cervante', '2006-06-06'),
('adobrasca5', '360f28c92c5f24201678fe', 'adidoca@hotmail.com', 14, ' Coletti', 'Cervante', '2000-06-07'),
('Santiaguit', '6dd81ec8db9f0984d22e29', 'santiagoenrique509@gmail.com', 15, 'Enrique', 'Santiago', '2002-10-25'),
('Yanis2512', '360f28c92c5f24201678fe', 'santiagoenrique509@gmail.com', 16, ' Andreas', 'Yanis', '2002-12-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion_contacto`
--
ALTER TABLE `atencion_contacto`
  ADD PRIMARY KEY (`id_contacto`),
  ADD UNIQUE KEY `id_contacto` (`id_contacto`);

--
-- Indices de la tabla `atencion_mensaje`
--
ALTER TABLE `atencion_mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD UNIQUE KEY `id_mensaje` (`id_mensaje`);

--
-- Indices de la tabla `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id_club`),
  ADD UNIQUE KEY `id_club` (`id_club`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD UNIQUE KEY `id_comentario` (`id_comentario`);

--
-- Indices de la tabla `donacion`
--
ALTER TABLE `donacion`
  ADD PRIMARY KEY (`id_donacion`),
  ADD UNIQUE KEY `id_donacion` (`id_donacion`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id_multimedia`),
  ADD UNIQUE KEY `id_multimedia` (`id_multimedia`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id_horario`),
  ADD UNIQUE KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD UNIQUE KEY `id_noticia` (`id_noticia`);

--
-- Indices de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  ADD PRIMARY KEY (`id_propuesta`),
  ADD UNIQUE KEY `id_propuesta` (`id_propuesta`);

--
-- Indices de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  ADD PRIMARY KEY (`id_suscripcion`),
  ADD UNIQUE KEY `id_suscripcion` (`id_suscripcion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion_contacto`
--
ALTER TABLE `atencion_contacto`
  MODIFY `id_contacto` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `atencion_mensaje`
--
ALTER TABLE `atencion_mensaje`
  MODIFY `id_mensaje` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `club`
--
ALTER TABLE `club`
  MODIFY `id_club` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `donacion`
--
ALTER TABLE `donacion`
  MODIFY `id_donacion` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id_multimedia` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id_horario` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id_noticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `propuestas`
--
ALTER TABLE `propuestas`
  MODIFY `id_propuesta` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `suscripcion`
--
ALTER TABLE `suscripcion`
  MODIFY `id_suscripcion` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
