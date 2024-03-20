-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-09-2023 a las 01:53:19
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pokedex`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int(11) NOT NULL,
  `identificador` int(11) DEFAULT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `tipo` int(11) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `vida` int(11) DEFAULT NULL,
  `defensa` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  `velocidad` int(11) DEFAULT NULL,
  `ataque` int(11) DEFAULT NULL,
  `img` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `pokemon`
--

INSERT INTO `pokemon` (`id`, `identificador`, `nombre`, `tipo`, `descripcion`, `vida`, `defensa`, `peso`, `velocidad`, `ataque`, `img`) VALUES
(7, 1, 'Bulbasaur', 3, 'A Bulbasaur es facil de verle echandose una siesta al sol. La semilla que tiene en el lomo va creciendo cada vez mas a medida que absorbe los rayos del sol ', 80, 80, 7, 3, 3, '7.gif'),
(8, 25, 'Pikachu', 4, 'Cada vez que un Pikachu se encuentra con algo nuevo, le lanza una descarga electrica.Cuando se ve alguna baya chamuscada, es muy probable que sea obra de un Pikachu, ya que a veces no controlan la intensidad de la descarga', 435, 67, 5, 90, 55, '8.gif'),
(11, 7, 'Squirtle', 1, 'Squirtle tiene forma de una tortuga semiacuática de una tonalidad azulada, su caparazón es color café, las placas periféricas de color blanco y finalmente su plastrón de una tonalidad crema, posee una cola con la punta enrollada, además de tres dedos en cada una de sus extremidades, una boca con una punta en forma de pico característico de las tortugas y unos grandes ojos de tonalidad rojiza.\r\n\r\nAl nacer su espalda se va hinchando hasta formarse un caparazón, al principio es blando y elástico, si lo golpeas este rebotará, pero conforme pasa el tiempo se irá endureciendo para resistir los ataques de cualquier amenaza, ocultándose dentro de él cuando siente peligro, al estar escondido puede lanzar una enorme presión de agua desde su interior cuando tiene la oportunidad. Igualmente retrae su cabeza y extremidades mientras duerme para sentirse seguro, a veces se puede llegar a ver como se mece su caparazón entre sueños. Su caparazón no solo le sirve de protección únicamente, con su forma redondeada y las hendiduras que posee, le sirven para reducir su resistencia en el agua y así poder nadar a enormes velocidades. Además de lanzar con gran precisión chorros de agua a presión por la boca, también puede lanzar espuma y usar su duro caparazón para atacar. Siempre se lo ve cerca del agua, ya sea dulce o salada.', 72, 3, 9, 3, 379, '11.gif'),
(10, 4, 'Charmender', 2, 'La llama que tiene en la punta de la cola arde segun sus sentimientos. Llamea levemente cuando está alegre y arde vigorosamente cuando esta enfadado', 39, 43, 9, 65, 52, '10.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_pokemon`
--

CREATE TABLE `tipos_pokemon` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `tipos_pokemon`
--

INSERT INTO `tipos_pokemon` (`id`, `nombre`, `descripcion`) VALUES
(1, 'Agua', 'Tipo de Pokemon asociado con agua y habilidades acuáticas.'),
(2, 'Fuego', 'Tipo de Pokemon asociado con fuego y habilidades relacionadas con el fuego.'),
(3, 'Planta', 'Tipo de Pokemon asociado con plantas y habilidades relacionadas con la naturaleza.'),
(4, 'Electrico', 'Tipo de Pokemon asociado con electricidad y habilidades eléctricas.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `email`, `password`) VALUES
(4, 'usuario', 'test', 'poketest@mail.com', '12345');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `identificador` (`identificador`);

--
-- Indices de la tabla `tipos_pokemon`
--
ALTER TABLE `tipos_pokemon`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tipos_pokemon`
--
ALTER TABLE `tipos_pokemon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
