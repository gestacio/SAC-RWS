-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2022 a las 00:05:57
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
-- Base de datos: `condominio`
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
  `propietario` varchar(200) NOT NULL DEFAULT 'Sin Propietario',
  `area` varchar(50) NOT NULL,
  `grupo` varchar(50) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, '25221952', '04241829583', 'banesco'),
(2, '222222222', '123456789', 'banesco'),
(3, '321654', '1265498', 'banesco');

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
  `usuario` varchar(64) NOT NULL,
  `contraseña` varchar(64) NOT NULL,
  `tipo_usuario` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `contraseña`, `tipo_usuario`, `fecha_creacion`) VALUES
(1, 'gestacio', '123456', 1, '2022-04-24'),
(2, 'jalen', '123456', 1, '2022-04-24'),
(3, 'dgomes', '123456', 1, '2022-04-24'),
(4, 'prueba', '123456', 2, '2022-04-24');

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
-- Indices de la tabla `pago_movil`
--
ALTER TABLE `pago_movil`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago_movil`
--
ALTER TABLE `pago_movil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
