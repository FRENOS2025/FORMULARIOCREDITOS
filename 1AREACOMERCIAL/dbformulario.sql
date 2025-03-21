-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2021 a las 04:46:10
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbformulario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_form`
--

CREATE TABLE `tabla_form` (
  `ID` int(5) NOT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  `CLIENTE` varchar(100) NOT NULL,
  `PRIORIDAD` varchar(20) NOT NULL,
  `NOVEDADES` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tabla_form`
--

INSERT INTO `tabla_form` (`ID`, `FECHA`, `HORA`, `CLIENTE`, `PRIORIDAD`, `NOVEDADES`) VALUES
(1, '2023-10-15', '09:30:00', 'Empresa ABC', 'Alta', 'Problema con el sistema de facturación'),
(2, '2023-10-16', '14:45:00', 'Cliente XYZ', 'Media', 'Solicitud de actualización de datos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_form`
--
ALTER TABLE `tabla_form`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tabla_form`
--
ALTER TABLE `tabla_form`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
