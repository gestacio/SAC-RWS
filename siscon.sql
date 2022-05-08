-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-05-2022 a las 02:13:46
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `siscon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bancos`
--

CREATE TABLE `bancos` (
  `codigo` varchar(4) NOT NULL,
  `nombre` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bancos`
--

INSERT INTO `bancos` (`codigo`, `nombre`) VALUES
('0001', 'BANCO CENTRAL DE VENEZUELA'),
('0102', 'BANCO DE VENEZUELA S.A.C.A. BANCO UNIVERSAL'),
('0104', 'VENEZOLANO DE CRÉDITO, S.A. BANCO UNIVERSAL'),
('0105', 'BANCO MERCANTIL, C.A. S.A.C.A. BANCO UNIVERSAL'),
('0108', 'BANCO PROVINCIAL, S.A. BANCO UNIVERSAL'),
('0114', 'BANCO DEL CARIBE, C.A. BANCO UNIVERSAL'),
('0115', 'BANCO EXTERIOR, C.A. BANCO UNIVERSAL'),
('0116', 'BANCO OCCIDENTAL DE DESCUENTO BANCO UNIVERSAL, C.A.'),
('0128', 'BANCO CARONI, C.A. BANCO UNIVERSAL'),
('0134', 'BANESCO BANCO UNIVERSAL S.A.C.A.'),
('0137', 'BANCO SOFITASA BANCO UNIVERSAL, C.A.'),
('0138', 'BANCO PLAZA, BANCO UNIVERSAL C.A.'),
('0146', 'BANCO DE LA GENTE EMPRENDEDORA BANGENTE, C.A.'),
('0149', 'BANCO DEL PUEBLO SOBERANO, BANCO DE DESARROLLO'),
('0151', 'BFC BANCO FONDO COMUN C.A. BANCO UNIVERSAL'),
('0157', 'DELSUR BANCO UNIVERSAL, C.A.'),
('0163', 'BANCO DEL TESORO, C.A. BANCO UNIVERSAL'),
('0166', 'BANCO AGRICOLA DE VENEZUELA, C.A. BANCO UNIVERSAL'),
('0168', 'BANCRECER S.A. BANCO DE DESARROLLO'),
('0169', 'MI BANCO, BANCO MICROFINANCIERO, C.A.'),
('0171', 'BANCO ACTIVO, C.A. BANCO UNIVERSAL'),
('0172', 'BANCAMIGA BANCO MICROFINANCIERO, C.A.'),
('0173', 'BANCO INTERNACIONAL DE DESARROLLO, C.A. BANCO UNIVERSAL'),
('0174', 'BANPLUS BANCO UNIVERAL, C.A.'),
('0175', 'BANCO BICENTENARIO BANCO UNIVERSAL, C.A.'),
('0176', 'NOVO BANCO, S.A. SUCURSAL VENEZUELA BANCO UNIVERSAL'),
('0177', 'BANCO DE LA FUERZA ARMADA NACIONAL BOLIVARIANA, B.U.'),
('0190', 'CITIBANK N.A.'),
('0191', 'BANCO NACIONAL CRÉDITO, C.A. BANCO UNIVERSAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas`
--

CREATE TABLE `cuentas` (
  `id` int(11) NOT NULL,
  `titular` varchar(200) NOT NULL,
  `cuenta` varchar(20) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `email` varchar(250) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cuentas`
--

INSERT INTO `cuentas` (`id`, `titular`, `cuenta`, `cedula`, `email`, `fecha_creacion`) VALUES
(1, 'gabriel', '0000', '0000', '0000@mail.com', '2022-04-25'),
(2, 'Gabriel Estacio', '0134112344567789', '25221952', 'gestacio@mail.com', '2022-05-01'),
(3, 'Jhon Alen', '0134112344567789', '28331914', 'jalen@mail.com', '2022-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamentos`
--

INSERT INTO `departamentos` (`id`, `departamento`, `fecha_creacion`) VALUES
(1, 'D-01', '2022-05-06'),
(2, 'D-02', '2022-05-06'),
(3, 'D-03', '2022-05-06'),
(4, 'D-04', '2022-05-06'),
(5, 'D-05', '2022-05-06'),
(6, 'D-06', '2022-05-06'),
(7, 'D-07', '2022-05-06'),
(8, 'D-08', '2022-05-06'),
(9, 'D-09', '2022-05-06'),
(10, 'D-10', '2022-05-06'),
(11, 'D-11', '2022-05-06'),
(12, 'D-12', '2022-05-06'),
(13, 'D-13', '2022-05-06'),
(14, 'D-14', '2022-05-06'),
(15, 'D-15', '2022-05-06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `body` text COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `class` varchar(45) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'event-important',
  `start` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `end` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `inicio_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `final_normal` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiares`
--

CREATE TABLE `familiares` (
  `id` int(11) NOT NULL,
  `id_propietario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `tipo_familiar` varchar(200) NOT NULL,
  `edad` int(11) NOT NULL,
  `fcreacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `familiares`
--

INSERT INTO `familiares` (`id`, `id_propietario`, `nombre`, `tipo_familiar`, `edad`, `fcreacion`) VALUES
(3, 1, 'Wilmer Estacio', 'padre', 53, '2022-05-06'),
(5, 1, 'Yorkis Estacio', 'hermano', 31, '2022-05-06'),
(6, 1, 'Gladys Rivas', 'madre', 52, '2022-05-06'),
(7, 1, 'Esteban Salas', 'hijo', 7, '2022-05-07'),
(8, 2, 'Alen ALen', 'padre', 50, '2022-05-07'),
(9, 3, 'Sandra Sisiruca', 'madre', 50, '2022-05-07'),
(10, 3, 'Jose Gomes', 'padre', 50, '2022-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago_movil`
--

CREATE TABLE `pago_movil` (
  `id` int(11) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `banco` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pago_movil`
--

INSERT INTO `pago_movil` (`id`, `cedula`, `telefono`, `banco`) VALUES
(1, '25221952', '04241829583', '0134'),
(2, '10123456', '123456789', '0102'),
(3, '321654', '1265498', '0102');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `id_departamento` int(11) NOT NULL,
  `fcreacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id`, `nombre`, `usuario`, `contraseña`, `id_departamento`, `fcreacion`) VALUES
(1, 'Gabriel Estacio', 'gestacio', '123456', 1, '2022-05-06'),
(2, 'Jhon Alen', 'jalen', '123456', 2, '2022-05-06'),
(3, 'Diana Gomes', 'dgomes', '123456', 3, '2022-05-06'),
(6, 'Propietario Prueba', 'pprueba', '123456', 4, '2022-05-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo_usuario` varchar(64) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo_usuario`, `fecha_creacion`) VALUES
(1, 'Administrador', '2022-04-24'),
(2, 'Propietario', '2022-04-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `usuario` varchar(64) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `usuario`, `contraseña`, `tipo_usuario`, `fecha_creacion`) VALUES
(1, 'Gabriel', 'Estacio', 'gestacio', '123456', 1, '2022-04-24'),
(6, 'Jhon', 'Alen', 'jalen', '123456', 1, '2022-05-01'),
(7, 'Diana', 'Gomes', 'dgomes', '123456', 1, '2022-05-01'),
(8, 'nombre', 'apellido', 'napellido', '123456', 2, '2022-05-01'),
(9, 'prueba', 'prueba2', 'prueba5', '123456', 2, '2022-05-01');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bancos`
--
ALTER TABLE `bancos`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familiares`
--
ALTER TABLE `familiares`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago_movil`
--
ALTER TABLE `pago_movil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_propietario` (`usuario`),
  ADD UNIQUE KEY `departemento_propietario` (`id_departamento`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD KEY `usuario-tipo_usuario` (`tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuentas`
--
ALTER TABLE `cuentas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `familiares`
--
ALTER TABLE `familiares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `pago_movil`
--
ALTER TABLE `pago_movil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuario-tipo_usuario` FOREIGN KEY (`tipo_usuario`) REFERENCES `tipo_usuario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
