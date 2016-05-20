-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-05-2016 a las 01:12:57
-- Versión del servidor: 5.6.25-log
-- Versión de PHP: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `peruforl_request`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `domain` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `names` varchar(150) NOT NULL,
  `phone` varchar(150) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `travelers` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `body_email` text NOT NULL,
  `span` tinyint(1) NOT NULL,
  `api_ip` varchar(100) NOT NULL,
  `api_country` varchar(100) NOT NULL,
  `api_city` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` char(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `requests`
--

INSERT INTO `requests` (`id`, `url`, `domain`, `email`, `names`, `phone`, `comment`, `hotel`, `travelers`, `length`, `body_email`, `span`, `api_ip`, `api_country`, `api_city`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', '6767@jhgj.com', '', '', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:44:02', '2016-05-19 02:44:02'),
(2, '', '', '6767@jhgj.com', '', '', '', '5star', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:45:38', '2016-05-19 02:45:38'),
(3, '', '', '6767@jhgj.com', '', '', '', '5star', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:45:45', '2016-05-19 02:45:45'),
(4, '', '', '6767@jhgj.com', 'rogelio', '8765', 'hola mundo', '5star', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:47:07', '2016-05-19 02:47:07'),
(5, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:48:41', '2016-05-19 02:48:41'),
(6, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario', '5star', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:50:27', '2016-05-19 02:50:27'),
(7, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario', 'bcc:', '', '', '', 1, '', '', '', '', '0', '2016-05-19 02:51:33', '2016-05-19 02:51:33'),
(8, '', '', '', 'fernando', '', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:53:54', '2016-05-19 02:53:54'),
(9, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 02:55:44', '2016-05-19 02:55:44'),
(10, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '', '', '', '', '0', '2016-05-19 02:56:22', '2016-05-19 02:56:22'),
(11, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '190.117.192.53', '', '', '', '0', '2016-05-19 03:17:31', '2016-05-19 03:17:31'),
(12, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '190.117.192.53', '', '', '', '0', '2016-05-19 03:18:03', '2016-05-19 03:18:03'),
(13, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '', '', '', '', '0', '2016-05-19 03:18:17', '2016-05-19 03:18:17'),
(14, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '', '', '', '', '0', '2016-05-19 03:18:21', '2016-05-19 03:18:21'),
(15, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 03:19:13', '2016-05-19 03:19:13'),
(16, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 03:19:17', '2016-05-19 03:19:17'),
(17, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 03:19:22', '2016-05-19 03:19:22'),
(18, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 03:33:28', '2016-05-19 03:33:28'),
(19, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '', '', '', '', '0', '2016-05-19 03:40:08', '2016-05-19 03:40:08'),
(20, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '190.117.192.53', '', '', '', '0', '2016-05-19 03:52:55', '2016-05-19 03:52:55'),
(21, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '190.117.192.53', '', '', '', '0', '2016-05-19 03:53:18', '2016-05-19 03:53:18'),
(22, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '190.117.192.53', '', '', '', '0', '2016-05-19 03:53:41', '2016-05-19 03:53:41'),
(23, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 03:55:27', '2016-05-19 03:55:27'),
(24, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '', 1, '190.117.192.53', '', '', '', '0', '2016-05-19 03:57:04', '2016-05-19 03:57:04'),
(25, '', '', '', 'fernando', '234234', '', '', '', '', '', 0, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 03:57:31', '2016-05-19 03:57:31'),
(26, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '<!DOCTYPE html>\n<html lang="en-US">\n	<head>\n		<meta charset="utf-8">\n	</head>\n	<body>\n		<h2>Contact</h2>\n\n		<p>\n			<strong>Url:</strong> \n		</p>\n\n		<p>\n			<strong>Token:</strong> \n		</p>\n\n		<hr/>\n\n		<p>	\n			<strong>Name:</strong>\n			braulio\n		</p>\n\n		<p>	\n			<strong>Email:</strong>\n			braulio@gmail.com\n		</p>\n\n		<p>	\n			<strong>Phone:</strong>\n			234234\n		</p>\n\n		<p>	\n			<strong>Tentative Dates:</strong>\n			\n		</p>\n\n		<p>	\n			<strong>Comment:</strong><br/>\n			miscomentario tiene un url &lt; a href=&quot;hola.pp&quot;&gt;asads&lt;/a&gt;\n		</p>\n\n\n		<p>	\n			<strong>Hotels:</strong><br/>\n			bcc:\n		</p>\n\n		<p>	\n			<strong>Travelers:</strong><br/>\n			\n		</p>\n\n		<p>	\n			<strong>Length:</strong><br/>\n			\n	\n		</p>\n			\n		<!--<p>\n			<strong>Yes, send me Peru For Less travel deals.</strong>\n			NO\n		</p>-->\n\n		<hr />	\n		\n		<p>	\n			<strong>Ip:</strong>\n			\n			\n		</p>\n\n		<p>	\n			<strong>Country:</strong>\n\n			\n		</p>\n\n		<p>	\n			<strong>Region:</strong>\n\n			\n		</p>\n\n		\n	</body>\n</html>\n', 1, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 04:13:06', '2016-05-19 04:13:06'),
(27, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '<!DOCTYPE html>\n<html lang="en-US">\n	<head>\n		<meta charset="utf-8">\n	</head>\n	<body>\n		<h2>Contact</h2>\n\n		<p>\n			<strong>Url:</strong> \n		</p>\n\n		<p>\n			<strong>Token:</strong> \n		</p>\n\n		<hr/>\n\n		<p>	\n			<strong>Name:</strong>\n			braulio\n		</p>\n\n		<p>	\n			<strong>Email:</strong>\n			braulio@gmail.com\n		</p>\n\n		<p>	\n			<strong>Phone:</strong>\n			234234\n		</p>\n\n		<p>	\n			<strong>Tentative Dates:</strong>\n			\n		</p>\n\n		<p>	\n			<strong>Comment:</strong><br/>\n			miscomentario tiene un url &lt; a href=&quot;hola.pp&quot;&gt;asads&lt;/a&gt;\n		</p>\n\n\n		<p>	\n			<strong>Hotels:</strong><br/>\n			bcc:\n		</p>\n\n		<p>	\n			<strong>Travelers:</strong><br/>\n			\n		</p>\n\n		<p>	\n			<strong>Length:</strong><br/>\n			\n	\n		</p>\n			\n		<!--<p>\n			<strong>Yes, send me Peru For Less travel deals.</strong>\n			NO\n		</p>-->\n\n		<hr />	\n		\n		<p>	\n			<strong>Ip:</strong>\n			\n			\n		</p>\n\n		<p>	\n			<strong>Country:</strong>\n\n			\n		</p>\n\n		<p>	\n			<strong>Region:</strong>\n\n			\n		</p>\n\n		\n	</body>\n</html>\n', 1, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 04:25:04', '2016-05-19 04:25:04'),
(28, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '<!DOCTYPE html>\n<html lang="en-US">\n	<head>\n		<meta charset="utf-8">\n	</head>\n	<body>\n		<h2>Contact</h2>\n\n		<p>\n			<strong>Url:</strong> \n		</p>\n\n		<p>\n			<strong>Token:</strong> \n		</p>\n\n		<hr/>\n\n		<p>	\n			<strong>Name:</strong>\n			braulio\n		</p>\n\n		<p>	\n			<strong>Email:</strong>\n			braulio@gmail.com\n		</p>\n\n		<p>	\n			<strong>Phone:</strong>\n			234234\n		</p>\n\n		<p>	\n			<strong>Tentative Dates:</strong>\n			\n		</p>\n\n		<p>	\n			<strong>Comment:</strong><br/>\n			miscomentario tiene un url &lt; a href=&quot;hola.pp&quot;&gt;asads&lt;/a&gt;\n		</p>\n\n\n		<p>	\n			<strong>Hotels:</strong><br/>\n			bcc:\n		</p>\n\n		<p>	\n			<strong>Travelers:</strong><br/>\n			\n		</p>\n\n		<p>	\n			<strong>Length:</strong><br/>\n			\n	\n		</p>\n			\n		<!--<p>\n			<strong>Yes, send me Peru For Less travel deals.</strong>\n			NO\n		</p>-->\n\n		<hr />	\n		\n		<p>	\n			<strong>Ip:</strong>\n			\n			\n		</p>\n\n		<p>	\n			<strong>Country:</strong>\n\n			\n		</p>\n\n		<p>	\n			<strong>Region:</strong>\n\n			\n		</p>\n\n		\n	</body>\n</html>\n', 1, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 04:29:51', '2016-05-19 04:29:51'),
(29, '', '', 'braulio@gmail.com', 'braulio', '234234', 'miscomentario tiene un url < a href="hola.pp">asads</a>', 'bcc:', '', '', '<!DOCTYPE html>\n<html lang="en-US">\n	<head>\n		<meta charset="utf-8">\n	</head>\n	<body>\n		<h2>Contact</h2>\n\n		<p>\n			<strong>Url:</strong> \n		</p>\n\n		<p>\n			<strong>Token:</strong> \n		</p>\n\n		<hr/>\n\n		<p>	\n			<strong>Name:</strong>\n			braulio\n		</p>\n\n		<p>	\n			<strong>Email:</strong>\n			braulio@gmail.com\n		</p>\n\n		<p>	\n			<strong>Phone:</strong>\n			234234\n		</p>\n\n		<p>	\n			<strong>Tentative Dates:</strong>\n			\n		</p>\n\n		<p>	\n			<strong>Comment:</strong><br/>\n			miscomentario tiene un url &lt; a href=&quot;hola.pp&quot;&gt;asads&lt;/a&gt;\n		</p>\n\n\n		<p>	\n			<strong>Hotels:</strong><br/>\n			bcc:\n		</p>\n\n		<p>	\n			<strong>Travelers:</strong><br/>\n			\n		</p>\n\n		<p>	\n			<strong>Length:</strong><br/>\n			\n	\n		</p>\n			\n		<!--<p>\n			<strong>Yes, send me Peru For Less travel deals.</strong>\n			NO\n		</p>-->\n\n		<hr />	\n		\n		<p>	\n			<strong>Ip:</strong>\n			\n			\n		</p>\n\n		<p>	\n			<strong>Country:</strong>\n\n			\n		</p>\n\n		<p>	\n			<strong>Region:</strong>\n\n			\n		</p>\n\n		\n	</body>\n</html>\n', 1, '190.117.192.53', 'Peru', 'Lima', '', '0', '2016-05-19 05:16:17', '2016-05-19 05:16:17');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
