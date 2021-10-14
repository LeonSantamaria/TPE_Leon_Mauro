-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2021 a las 15:27:33
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_tp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alojamiento`
--

CREATE TABLE `alojamiento` (
  `Id` int(11) NOT NULL,
  `Titulo` varchar(50) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Contacto` varchar(15) NOT NULL,
  `Tipo` varchar(20) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alojamiento`
--

INSERT INTO `alojamiento` (`Id`, `Titulo`, `Descripcion`, `Contacto`, `Tipo`, `id_ciudad`) VALUES
(1, 'Casa quinta Hermosa vista', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop p', '24945435', 'Casa Quinta', 1),
(2, 'Casa zona centro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum in orci consequat risus porta commodo nec vitae urna. Maecenas aliquam erat ut mi ornare, ut efficitur mi egestas. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam hendrerit risus non arcu vulputate mollis. Ut sodales eleifend erat, pellentesque maximus lectus faucibus sed. Nam efficitur feugiat mi, quis egestas turpis mattis eget. Curabitur non ornare nisl. Fusce faucibus lorem vitae dapibus iaculis. Phasellus ', '2496575', 'Casa', 3),
(3, 'hotel lujoso', 'asdasdsadasdsadasdasdas', '2312342', 'Hotel', 3),
(4, 'Casa zona sur', 'mimamamemima', '232312342', 'Casa', 5),
(5, 'Departamento fiestero', 'kifuinsduijnfdxbjkl gfxbjklfdbfdxftnhdrwegartn', '34847623', 'Depto', 5),
(6, 'Departamento fiestero', 'kifuinsduijnfdxbjkl gfxbjklfdbfdxftnhdrwegartn', '34847623', 'Depto', 1),
(7, 'departa lujoso', 'sdgdgfdgfdgdfg', '4423432423', 'Depto', 2),
(8, 'casa quinta zona campestre', 'elbananeroww', '12312332', 'Casa', 1),
(9, 'edificio lujoso', 'fdgfsdgfedg', '', 'Depto', 2),
(10, 'casa de campo', '', '', 'Casa', 3),
(15, 'edificio lujoso', 'adsdasd', '342342', 'Depto', 1),
(16, 'casa nueva', 'sin estrenar', '1231234343', 'nueva', 5),
(17, 'Chalet', 'lroem ipsu', '54235', 'Chalet', 5),
(19, 'Chalet lujosisimo', 'dasdasds', '342343', 'Chalet', 2),
(20, 'casita azul', 'asdfasdasdsadasd', '2312312', 'Casa', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `Ciudad_id` int(11) NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`Ciudad_id`, `ciudad`) VALUES
(0, 'Azul'),
(1, 'Tandil'),
(2, 'Capital Federal'),
(3, 'Mar del Plata'),
(5, 'Pinamar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id_usuarios` int(11) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Rol` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id_usuarios`, `Email`, `Password`, `Rol`) VALUES
(18, 'mauro', '$2y$10$7VhJlJPqE3vcIqKHqmLdweTKsYY1Mi897Zo21EAaUcsRndi1MUcnO', ''),
(19, 'lion', '$2y$10$HV9kPgZe7Xwe.ltr6AoVe.HwVnfI0I/1vJI5RuYnp1M7lMY.ytuMK', ''),
(20, 'gfsdghc', '$2y$10$kwGWk46n9owUGNA81a1ereJtf8zp/rZ.2nfh.D4x6/ffbgyeCd4FC', ''),
(21, 'lion', '$2y$10$3PnoioXqA4D/ShZdKpzPoehezI23F9I8NQz8GkyNhRclGYM9A/QXG', ''),
(22, 'emi', '$2y$10$Ay3Tifekg3O52RLN2Fopbe3eSL9/.pOAU54zitGiBEaplfvC86C.i', ''),
(23, 'amelie', '$2y$10$4GqM5xkZs50RTmE2NV6/h.f7M5/R8tzVTgsStW0OApC44LQGqkGr2', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FK_id_ciudad` (`id_ciudad`) USING BTREE;

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`Ciudad_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alojamiento`
--
ALTER TABLE `alojamiento`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `Ciudad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
