-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2019 a las 00:23:52
-- Versión del servidor: 10.3.15-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `roko`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_animal`
--

CREATE TABLE `cat_animal` (
  `id_cat_animal` int(11) NOT NULL,
  `cat_animal_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cat_animal`
--

INSERT INTO `cat_animal` (`id_cat_animal`, `cat_animal_descripcion`) VALUES
(1, 'Perros'),
(2, 'Gatos'),
(3, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `id_publicacion` int(11) NOT NULL,
  `id_cat_animal` int(11) NOT NULL,
  `id_tipo_publicacion` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id_publicacion`, `id_cat_animal`, `id_tipo_publicacion`, `titulo`, `descripcion`, `fecha`, `direccion`, `id_usuarios`) VALUES
(1, 1, 3, 'lindo perro ', 'pequeño ladra y no muerde', '2019-10-13', 'sarmiento3572', 1),
(2, 3, 1, 'lo saque a la plaza y se me perdio', 'pequeño escurridiso y gris', '2019-10-02', 'estacion de bella vista', 2),
(3, 3, 3, 'nanana', 'safafafaf', '2019-10-01', 'sfasfafaf', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_publicacion`
--

CREATE TABLE `tipo_publicacion` (
  `id_tipo_publicacion` int(11) NOT NULL,
  `tipo_publicacion_descripcion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_publicacion`
--

INSERT INTO `tipo_publicacion` (`id_tipo_publicacion`, `tipo_publicacion_descripcion`) VALUES
(1, 'Perdido'),
(2, 'Encontrado'),
(3, 'En Adopcion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `contrasenia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `mail`, `telefono`, `contrasenia`) VALUES
(1, 'Nahuel', 'jasndiashdu@gmail.com', 1515151515, '1234'),
(2, 'walter', 'askjasdja@gmail.com', 15667786, '9876'),
(3, 'pablo', 'profe@gmail.com', 15678924, 'profe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_animal`
--
ALTER TABLE `cat_animal`
  ADD PRIMARY KEY (`id_cat_animal`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`id_publicacion`),
  ADD KEY `id_cat_animal` (`id_cat_animal`),
  ADD KEY `id_tipo_publicacion` (`id_tipo_publicacion`),
  ADD KEY `id_usuarios` (`id_usuarios`);

--
-- Indices de la tabla `tipo_publicacion`
--
ALTER TABLE `tipo_publicacion`
  ADD PRIMARY KEY (`id_tipo_publicacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cat_animal`
--
ALTER TABLE `cat_animal`
  MODIFY `id_cat_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `id_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_publicacion`
--
ALTER TABLE `tipo_publicacion`
  MODIFY `id_tipo_publicacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`id_usuarios`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `publicacion_ibfk_2` FOREIGN KEY (`id_cat_animal`) REFERENCES `cat_animal` (`id_cat_animal`),
  ADD CONSTRAINT `publicacion_ibfk_3` FOREIGN KEY (`id_tipo_publicacion`) REFERENCES `tipo_publicacion` (`id_tipo_publicacion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
