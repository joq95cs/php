-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2021 a las 06:20:43
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica_blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `extracto` varchar(250) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `texto` text NOT NULL,
  `thumb` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`id`, `titulo`, `extracto`, `fecha`, `texto`, `thumb`) VALUES
(1, 'Kimera Castle', 'Kimera Castle tiene 51 años de edad. Viuda de Homero Lápida y de Cooper Kim. Está casada con Simbel Castle. Tiene ocho hijos en total: Nicolás, Gilberto, Emperatriz, Mentuhotep, Amenhotep, Elazibel, Sofía y Lev...', '2015-10-14 22:25:00', 'Kimera nació en un lugar muy lejano. Sus padres eran Ana y Carlos Flint. Desde pequeña Kimera siempre quiso tener una vida fabulosa, pero desafortunadamente eso no iba a ser posible en el sitio donde vivía. Ella sabía que quería llegar muy lejos, y pare lograrlo, debía mudarse muy lejos de su hogar. Después de terminar la universidad con honores, Kimera se mudó a Willow Creek en SimNation, ella tenía 21 años en ese momento. Se mudó junto a su mejor amiga Patito, la mamá de Patito y su hermano menor. También llevó consigo a sus hermanos Emma y Alex, quienes tenían 15 años. Al llegar a Willow Creek las verdaderas aventuras de Kimera comenzaron. Primero, encontró a su verdadera némesis, Mina Caliente, quien tenía un plan malvado junto al casanova Juan Tenorio. Mina quería casarse con un millonario llamado Homero Lápida, y para ello se embarazó de él dos veces tratando de amarrarlo. Pero, Kimero frustró sus planes, demostrando que su segundo hijo en realidad era de Juan Tenorio. Fue así como Homero rompió su compromiso con Mina Caliente y al poco tiempo se casó con Kimera. Kimera viviría muchas aventuras en SimNation al lado de su familia y amigos.', '1.png'),
(2, 'Madonna Material', 'Madonna tiene 36 años de edad. Está casada con Sansón, con quién tiene dos hijas: Madeline y Marlene. Es hija de Anabel y Miguel Material, y hermana de Gianluca y Giancarlo...', '2021-07-02 00:24:32', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc metus, vehicula maximus ultrices vel, ullamcorper non purus. Nulla nec dolor auctor, congue ligula sit amet, tempor elit. Nulla auctor pellentesque dolor in ullamcorper. Etiam convallis, felis ut blandit pretium, ante quam tempus metus, dignissim lobortis erat lorem a dolor. Vestibulum porttitor lacus sit amet tincidunt sagittis. Fusce suscipit sapien et fringilla dignissim. Proin ultricies ante non luctus posuere. Donec quis mauris id sapien dapibus vestibulum. Sed blandit, quam at posuere gravida, diam erat placerat dolor, non gravida diam nisl vitae quam. Integer ut massa dolor. Quisque efficitur, dolor a fringilla lacinia, metus ligula maximus velit, nec sodales lacus mi eget nisi. Donec quis vestibulum ante, quis viverra arcu. Suspendisse id augue elit. Sed risus lectus, fringilla at magna id, faucibus volutpat libero. Donec pretium turpis et leo accumsan, sit amet ornare mauris fermentum.', '2.png'),
(3, 'Zela Fyres', 'Zela tiene 27 años de edad. Está casada don Dominic Fyres, con quien tiene un hijo. Es hija de Ada De Edom y hermana gemela de Heli. Zela además es una sirena, ya que su padre era un tritón de quien Ada se enamoró en su juventud...', '2021-07-02 00:25:00', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc metus, vehicula maximus ultrices vel, ullamcorper non purus. Nulla nec dolor auctor, congue ligula sit amet, tempor elit. Nulla auctor pellentesque dolor in ullamcorper. Etiam convallis, felis ut blandit pretium, ante quam tempus metus, dignissim lobortis erat lorem a dolor. Vestibulum porttitor lacus sit amet tincidunt sagittis. Fusce suscipit sapien et fringilla dignissim. Proin ultricies ante non luctus posuere. Donec quis mauris id sapien dapibus vestibulum. Sed blandit, quam at posuere gravida, diam erat placerat dolor, non gravida diam nisl vitae quam. Integer ut massa dolor. Quisque efficitur, dolor a fringilla lacinia, metus ligula maximus velit, nec sodales lacus mi eget nisi. Donec quis vestibulum ante, quis viverra arcu. Suspendisse id augue elit. Sed risus lectus, fringilla at magna id, faucibus volutpat libero. Donec pretium turpis et leo accumsan, sit amet ornare mauris fermentum.', '3.png'),
(4, 'Sansón Material', 'Sansón tiene 38 años de edad. Es hijo de Anita, hermano de Patito y esposo de Madonna, con quien tiene dos hijas. Sansón trabaja como científico y ha ganado mucho prestigio y dinero a lo largo de su carrera...', '2021-07-02 00:25:48', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nunc metus, vehicula maximus ultrices vel, ullamcorper non purus. Nulla nec dolor auctor, congue ligula sit amet, tempor elit. Nulla auctor pellentesque dolor in ullamcorper. Etiam convallis, felis ut blandit pretium, ante quam tempus metus, dignissim lobortis erat lorem a dolor. Vestibulum porttitor lacus sit amet tincidunt sagittis. Fusce suscipit sapien et fringilla dignissim. Proin ultricies ante non luctus posuere. Donec quis mauris id sapien dapibus vestibulum. Sed blandit, quam at posuere gravida, diam erat placerat dolor, non gravida diam nisl vitae quam. Integer ut massa dolor. Quisque efficitur, dolor a fringilla lacinia, metus ligula maximus velit, nec sodales lacus mi eget nisi. Donec quis vestibulum ante, quis viverra arcu. Suspendisse id augue elit. Sed risus lectus, fringilla at magna id, faucibus volutpat libero. Donec pretium turpis et leo accumsan, sit amet ornare mauris fermentum.', '4.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulos`
--
ALTER TABLE `articulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
