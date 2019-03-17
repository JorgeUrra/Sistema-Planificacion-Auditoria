-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2016 a las 14:16:51
-- Versión del servidor: 5.7.11
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auditoria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `CODIGO` varchar(11) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `NOMBRE_A` varchar(1000) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`CODIGO`, `NOMBRE_A`) VALUES
('au-110', 'FUNDAMENTOS CONTABLES'),
('au-111', 'HABILIDADES DIRECTIVAS'),
('au-112', 'COMPORTAMIENTO ORGANIZACIONAL'),
('au-113', 'MATEMATICAS'),
('au-114', 'INGLES I'),
('au-120', 'PRACTICA CONTABLE'),
('au-121', 'DERECHO COMERCIAL'),
('au-122', 'ADMINISTRACION'),
('au-123', 'METODOS DESICIONALES'),
('au-124', 'OFIMATICA'),
('au-210', 'NORMATIVA CONTABLE I'),
('au-211', 'ECONOMIA'),
('au-212', 'DESARROLLO DE SISTEMAS DE INFORMACION'),
('au-213', 'ESTADISTICAS'),
('au-214', 'INGLES II'),
('au-220', 'NORMATIVA CONTABLE II'),
('au-221', 'MICROECONOMIA'),
('au-222', 'SISTEMA DE COSTEO'),
('au-223', 'METODOS CUANTITATIVOS DE GESTION'),
('au-224', 'DERECHO LABORAL'),
('au-310', 'ESTADOS FINANCIEROS'),
('au-311', 'MACROECONOMIA'),
('au-312', 'CONTABILIDAD GERENCIAL'),
('au-313', 'METODOLOGIA DE LA INVESTIGACION PARA LA AUDIT'),
('au-314', 'INTRODUCCION A LA FE'),
('au-320', 'PRACTICA TEMPRANA'),
('au-321', 'CODIGO TRIBUTARIO'),
('au-322', 'ADMINISTRACION DE PERSONAL'),
('au-323', 'MARKETING'),
('au-324', 'ETICA CRISTIANA'),
('au-410', 'CONTROL INTERNO'),
('au-411', 'IMPUESTO AL VALOR AGREGADO'),
('au-412', 'SISTEMAS INFORMATICOS PARA LA ORGANIZACIONES'),
('au-413', 'CALCULO FINANCIERO Y PRESUPUESTARIO'),
('au-414', 'CERTIFICACION I'),
('au-420', 'INTRODUCCION A LA AUDITORIA'),
('au-421', 'IMPUESTO A LAS EMPRESAS'),
('au-422', 'CREACION DE EMPRESAS'),
('au-423', 'GESTION FINANCIERA'),
('au-424', 'CERTIFICACION II'),
('au-510', 'AUDITORIA A ESTADOS FINANCIEROS'),
('au-511', 'IMPUESTO A LAS PERSONAS'),
('au-512', 'AUDITORIA INFORMATICA'),
('au-513', 'ESTRATEGIAS FINANCIERAS'),
('au-514', 'CERTIFICACION III'),
('au-520', 'AUDITORIA DE GESTION'),
('au-521', 'AUDITORIA TRIBUTARIA'),
('au-522', 'CONTROL DE GESTION'),
('au-523', 'FORMULACION Y EVALUACION DE PROYECTOS'),
('au-524', 'PRACTICA FINAL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `noticia_id` int(10) NOT NULL,
  `titulo` longtext COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `archivo` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `noticias`
--

INSERT INTO `noticias` (`noticia_id`, `titulo`, `descripcion`, `fecha`, `hora`, `imagen`, `archivo`) VALUES
(28, '<p>lkjljljlk</p>\r\n', '<p>uiuiuyiu</p>\r\n', '2016-08-18', '11:09:56', '1471529396-ruta2.png', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planificacion`
--

CREATE TABLE `planificacion` (
  `RUT_PROFESOR` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `CODIGO_ASIGNATURA` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `ANO_ASIGNATURA` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `PLANIFICACION` longtext COLLATE utf8_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `planificacion`
--

INSERT INTO `planificacion` (`RUT_PROFESOR`, `CODIGO_ASIGNATURA`, `ANO_ASIGNATURA`, `PLANIFICACION`) VALUES
('11.111.111-1', 'au-210', '2016-08-18', '<table border="1" cellpadding="1" cellspacing="1" style="width:900px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="5">\r\n			<p><strong>informacion de Curso y Profesor:</strong></p>\r\n\r\n			<ul>\r\n				<li><strong>Mail Contacto institucional:</strong></li>\r\n				<li><strong>Horario Curso</strong></li>\r\n				<li><strong>Horario atencion Alumnos</strong></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Unidad</strong></td>\r\n			<td style="text-align:center"><strong>Semana</strong></td>\r\n			<td style="text-align:center"><strong>Trabajo en Aula</strong></td>\r\n			<td style="text-align:center"><strong>Trabajo Autonomo</strong></td>\r\n			<td>\r\n			<p style="text-align:center"><strong>Material de apoyo</strong></p>\r\n\r\n			<p style="text-align:center"><strong>Requerido desarrollo de la&nbsp;</strong></p>\r\n\r\n			<p style="text-align:center"><strong>Actividad</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Unidad<em> &#39;Numero&#39;</em></td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Unidad<em> &#39;Numero&#39;</em></td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="5">Fecha Evaluaciones:</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="5">Politicas y Normas:</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
('11.111.111-1', 'au-221', '2016-08-18', NULL),
('11.111.111-1', 'au-310', '2016-08-18', NULL),
('11.111.111-1', 'au-311', '2016-08-18', NULL),
('17.794.168-9', 'au-220', '2016-08-18', NULL),
('17.822.827-7', 'au-110', '2016-08-17', '<table border="1" cellpadding="1" cellspacing="1" style="width:900px">\r\n	<tbody>\r\n		<tr>\r\n			<td colspan="5">\r\n			<p><strong>informacion de Curso y Profesor:</strong></p>\r\n\r\n			<ul>\r\n				<li><strong>Mail Contacto institucional:</strong></li>\r\n				<li><strong>Horario Curso</strong></li>\r\n				<li><strong>Horario atencion Alumnos</strong></li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="text-align:center"><strong>Unidad</strong></td>\r\n			<td style="text-align:center"><strong>Semana</strong></td>\r\n			<td style="text-align:center"><strong>Trabajo en Aula</strong></td>\r\n			<td style="text-align:center"><strong>Trabajo Autonomo</strong></td>\r\n			<td>\r\n			<p style="text-align:center"><strong>Material de apoyo</strong></p>\r\n\r\n			<p style="text-align:center"><strong>Requerido desarrollo de la&nbsp;</strong></p>\r\n\r\n			<p style="text-align:center"><strong>Actividad</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Unidad<em> &#39;Numero&#39;</em></td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Unidad<em> &#39;Numero&#39;</em></td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>\r\n			<p>Semana <em>&#39;Numero&#39;</em></p>\r\n\r\n			<p><em>&#39;Fecha&#39;</em></p>\r\n			</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="5">Fecha Evaluaciones:</td>\r\n		</tr>\r\n		<tr>\r\n			<td colspan="5">Politicas y Normas:</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n'),
('17.854.398-9', 'au-120', '2016-08-17', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text_area`
--

CREATE TABLE `text_area` (
  `id_textarea` int(11) NOT NULL,
  `text_area` longtext CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `text_area`
--

INSERT INTO `text_area` (`id_textarea`, `text_area`) VALUES
(1, '<table border="1" cellpadding="1" cellspacing="1" style="width:900px">    \r\n	<tbody>        \r\n		<tr>            \r\n			<td colspan="5">            \r\n				<p><strong>informacion de Curso y Profesor:</strong></p>            \r\n				<ul>                \r\n					<li><strong>Mail Contacto institucional:</strong></li>                \r\n					<li><strong>Horario Curso</strong></li>                \r\n					<li><strong>Horario atencion Alumnos</strong></li>            \r\n				</ul>            \r\n			</td>        \r\n		</tr>       \r\n		<tr>            \r\n			<td style="text-align: center;"><strong>Unidad</strong></td>            \r\n			<td style="text-align: center;"><strong>Semana</strong></td>            \r\n			<td style="text-align: center;"><strong>Trabajo en Aula</strong></td>            \r\n			<td style="text-align: center;"><strong>Trabajo Autonomo</strong></td>          \r\n			<td>            \r\n			<p style="text-align: center;"><strong>Material de apoyo</strong></p>            \r\n				<p style="text-align: center;"><strong>Requerido desarrollo de la&nbsp;</strong></p>            \r\n				<p style="text-align: center;"><strong>Actividad</strong></p>            \r\n				</td>       \r\n		</tr>        \r\n		<tr>            \r\n		<td>Unidad<em> &#39;Numero&#39;</em></td>            \r\n			<td>            \r\n			<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>            \r\n				</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>        \r\n		</tr>        \r\n		<tr>            \r\n		<td>&nbsp;</td>            \r\n			<td>            \r\n			<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>            \r\n				</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>       \r\n		</tr>\r\n		<tr>            \r\n		<td>&nbsp;</td>            \r\n			<td>            \r\n			<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>            \r\n				</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>        \r\n		</tr>        \r\n		<tr>            \r\n			<td>Unidad<em> &#39;Numero&#39;</em></td>            \r\n			<td>            \r\n				<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>            \r\n			</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>        \r\n		</tr>        \r\n		<tr>            \r\n			<td>&nbsp;</td>            \r\n			<td>            \r\n				<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>           \r\n			</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>       \r\n		</tr>        \r\n		<tr>            \r\n			<td>&nbsp;</td>           \r\n			<td>            \r\n				<p>Semana <em>&#39;Numero&#39;</em></p>            \r\n				<p><em>&#39;Fecha&#39;</em></p>            \r\n			</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>            \r\n			<td>&nbsp;</td>        \r\n		</tr>        \r\n		<tr>            \r\n			<td colspan="5">Fecha Evaluaciones:</td>        \r\n		</tr>        \r\n		<tr>            \r\n			<td colspan="5">Politicas y Normas:</td>        \r\n		</tr>    \r\n	</tbody>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `RUT` varchar(12) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `NOMBRE_1` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `NOMBRE_2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO_1` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `APELLIDO_2` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `DEPARTAMENTO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TELEFONO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CORREO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `CONTRASEÑA` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ESTADO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL,
  `TIPO` varchar(45) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`RUT`, `NOMBRE_1`, `NOMBRE_2`, `APELLIDO_1`, `APELLIDO_2`, `DEPARTAMENTO`, `TELEFONO`, `CORREO`, `CONTRASEÑA`, `ESTADO`, `TIPO`) VALUES
('11.111.111-1', 'abel', 'americo', 'poblete', 'toledo', 'Facultad de Cs. de la Ingeniería', '973034196', 'jorjolee@hotmail.com', '1', 'Activo', 'Profesor'),
('17.794.168-9', 'Manuel', 'Ignacio', 'Moraga', 'Castro', 'Facultad de Cs. de la Ingeniería', '973034196', 'jorjolee@hotmail.com', '1234', 'Activo', 'Profesor'),
('17.822.827-7', 'Jorge', 'Ismael', 'Valdes', 'Caceres', 'Facultad de Cs. de la Ingeniería', '123456789', 'jorge.valdes.20@gmail.com', '1234', 'Inactivo', 'Profesor'),
('17.854.398-9', 'Ignacio', 'Alberto', 'Monjes', 'Valdes', 'Facultad de Cs. de la Ingeniería', '973034196', 'jorjolee@hotmail.com', '1', 'Activo', 'Profesor'),
('17.968.598-1', 'Jorge', 'Francisco', 'Urra', 'Merino', 'Facultad de Cs. de la Ingeniería', '973034196', 'jorjolee@hotmail.com', '12345', 'Activo', 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`CODIGO`);

--
-- Indices de la tabla `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`noticia_id`);

--
-- Indices de la tabla `planificacion`
--
ALTER TABLE `planificacion`
  ADD PRIMARY KEY (`RUT_PROFESOR`,`CODIGO_ASIGNATURA`),
  ADD KEY `fk_PLANIFICACION_1_idx` (`RUT_PROFESOR`,`CODIGO_ASIGNATURA`),
  ADD KEY `fk_PLANIFICACION_2_idx` (`CODIGO_ASIGNATURA`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`RUT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticias`
--
ALTER TABLE `noticias`
  MODIFY `noticia_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
