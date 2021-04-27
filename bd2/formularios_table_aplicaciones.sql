
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE `aplicaciones` (
  `codigo` int(100) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `fpago` varchar(30) NOT NULL,
  `ndocumentos` int(10) NOT NULL,
  `nalmacenamiento` int(10) NOT NULL,
  `nempleados` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
