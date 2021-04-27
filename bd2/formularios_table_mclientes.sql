
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mclientes`
--

CREATE TABLE `mclientes` (
  `id` int(10) NOT NULL,
  `fecha` date NOT NULL,
  `logo` varchar(100) NOT NULL,
  `nit` varchar(20) NOT NULL,
  `rsocial` varchar(30) NOT NULL,
  `empresa` varchar(30) NOT NULL,
  `actividad` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `url` varchar(30) NOT NULL,
  `telefono` varchar(30) NOT NULL,
  `sector` varchar(30) NOT NULL,
  `subsector` varchar(30) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `barrio` varchar(30) NOT NULL,
  `nempleados` varchar(30) NOT NULL,
  `contacto` varchar(30) NOT NULL,
  `tlfcontacto` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `asesor` varchar(30) NOT NULL,
  `plazo` varchar(15) NOT NULL,
  `cupo` varchar(30) NOT NULL,
  `estado` int(1) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
