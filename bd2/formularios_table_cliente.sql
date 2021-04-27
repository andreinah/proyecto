
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) NOT NULL,
  `proceso` varchar(30) NOT NULL,
  `subproceso` varchar(30) NOT NULL,
  `actividad` varchar(30) NOT NULL,
  `sedes` varchar(30) NOT NULL,
  `maquina` varchar(30) NOT NULL,
  `bodega` varchar(30) NOT NULL,
  `empleado` varchar(30) NOT NULL,
  `cargo` varchar(30) NOT NULL,
  `area` varchar(30) NOT NULL,
  `procesoempleado` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telefono` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
