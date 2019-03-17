-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2016 a las 23:20:19
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
('au-210', 'NORMATIVA CONTABLE'),
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
('au-313', 'METODOLOGIA DE LA INVESTIGACION PARA LA AUDITORIA'),
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
('au-420', 'INTRODUCCIÓN A LA AUDITORIA'),
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
('11.111.111-1', 'au-221', '2016-08-18', NULL),
('11.111.111-1', 'au-310', '2016-08-18', NULL),
('11.111.111-1', 'au-311', '2016-08-18', NULL),
('17.794.168-9', 'au-220', '2016-08-18', NULL),
('17.854.398-9', 'au-120', '2016-08-29', '<div>\n<p>PLANIFICACI&Oacute;N DESARROLLO DE LA ACTIVIDAD CURRICULAR</p>\n\n<ol style="list-style-type:upper-roman">\n	<li>ANTECEDENTES GENERALES\n	<table border="1" cellpadding="0" cellspacing="0">\n		<tbody>\n			<tr>\n				<td style="width:132px">\n				<p>Carrera</p>\n				</td>\n				<td colspan="9" style="width:456px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="width:132px">\n				<p>Nombre</p>\n				</td>\n				<td colspan="9" style="width:456px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="width:132px">\n				<p>C&oacute;digo</p>\n				</td>\n				<td colspan="9" style="width:456px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="width:132px">\n				<p>Semestre lectivo</p>\n				</td>\n				<td colspan="4" style="width:199px">\n				<p>&nbsp;</p>\n				</td>\n				<td colspan="2" style="width:105px">\n				<p>A&ntilde;o:</p>\n				</td>\n				<td colspan="3" style="width:153px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="width:132px">\n				<p>Cr&eacute;ditos SCT</p>\n				</td>\n				<td colspan="9" style="width:456px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="width:132px">\n				<p>Horas</p>\n				</td>\n				<td colspan="2" style="width:133px">\n				<p>Presencial</p>\n				</td>\n				<td style="width:47px">\n				<p>&nbsp;</p>\n				</td>\n				<td colspan="2" style="width:85px">\n				<p>Aut&oacute;noma</p>\n				</td>\n				<td colspan="2" style="width:56px">\n				<p>&nbsp;</p>\n				</td>\n				<td style="width:96px">\n				<p>Total</p>\n				</td>\n				<td style="width:39px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td rowspan="2" style="height:17px; width:132px">\n				<p>&Aacute;rea de Formaci&oacute;n</p>\n				</td>\n				<td colspan="2" rowspan="2" style="height:17px; width:133px">\n				<p>Disciplinar</p>\n				</td>\n				<td rowspan="2" style="height:17px; width:47px">\n				<p>&nbsp;</p>\n				</td>\n				<td colspan="2" rowspan="2" style="height:17px; width:85px">\n				<p>General</p>\n				</td>\n				<td colspan="2" rowspan="2" style="height:17px; width:56px">\n				<p>&nbsp;</p>\n				</td>\n				<td style="height:17px; width:96px">\n				<p>Profesional</p>\n				</td>\n				<td style="height:17px; width:39px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="height:17px; width:96px">\n				<p>Pr&aacute;ctica</p>\n				</td>\n				<td style="height:17px; width:39px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="height:17px; width:132px">\n				<p>Docente</p>\n				</td>\n				<td colspan="9" style="height:17px; width:456px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td rowspan="2" style="height:25px; width:132px">\n				<p>Contacto</p>\n				</td>\n				<td style="height:25px; width:76px">\n				<p>E-mail</p>\n				</td>\n				<td colspan="8" style="height:25px; width:381px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n			<tr>\n				<td style="height:25px; width:76px">\n				<p>Tel&eacute;fono</p>\n				</td>\n				<td colspan="2" style="height:25px; width:104px">\n				<p>&nbsp;</p>\n				</td>\n				<td colspan="4" style="height:25px; width:142px">\n				<p>Horario de Atenci&oacute;n</p>\n				</td>\n				<td colspan="2" style="height:25px; width:135px">\n				<p>&nbsp;</p>\n				</td>\n			</tr>\n		</tbody>\n	</table>\n	</li>\n</ol>\n\n<p>&nbsp;</p>\n\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; II. DESCRIPCI&Oacute;N</p>\n\n<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="width:588px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;&nbsp;&nbsp;&nbsp; III.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMPETENCIAS ASOCIADAS A LA ACTIVIDAD CURRICULAR</p>\n\n<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="height:17px; width:142px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="height:17px; width:223px">\n			<p style="text-align: center;">COMPETENCIAS</p>\n			</td>\n			<td style="height:17px; width:225px">\n			<p style="text-align: center;">SUBCOMPETENCIAS</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="height:17px; width:142px">\n			<p>PROFESIONAL(ES)</p>\n			</td>\n			<td style="height:17px; width:223px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="height:17px; width:225px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="height:17px; width:142px">\n			<p>GEN&Eacute;RICA(S)</p>\n			</td>\n			<td style="height:17px; width:223px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="height:17px; width:225px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp; &nbsp; &nbsp; IV. &nbsp; &nbsp; &nbsp; PLANIFICACI&Oacute;N POR UNIDAD</p>\n\n<div>\n<table border="1" cellpadding="0" cellspacing="0" style="width:866px">\n	<tbody>\n		<tr>\n			<td rowspan="2" style="height:18px; width:75px">\n			<p style="text-align: center;">Semanas</p>\n			</td>\n			<td rowspan="2" style="height:18px; width:162px">\n			<p style="text-align: center;">Resultados de aprendizaje</p>\n			</td>\n			<td rowspan="2" style="height:18px; width:95px">\n			<p style="text-align: center;">Ponderaci&oacute;n(%)</p>\n			</td>\n			<td colspan="2" style="height:18px; width:170px">\n			<p style="text-align: center;">Horas de Dedicaci&oacute;n</p>\n			</td>\n			<td rowspan="2" style="height:18px; width:106px">\n			<p style="text-align: center;">Nombre de la Unidad / Ejes tem&aacute;ticos</p>\n			</td>\n			<td rowspan="2" style="height:18px; width:123px">\n			<p style="text-align: center;">Actividades</p>\n			</td>\n			<td rowspan="2" style="height:18px; width:135px">\n			<p style="text-align: center;">Criterios y Procedimientos de Evaluaci&oacute;n</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="height:18px; width:86px">\n			<p style="text-align: center;">Docencia Presencial</p>\n			</td>\n			<td style="height:18px; width:84px">\n			<p style="text-align: center;">Trabajo Aut&oacute;nomo</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:75px">\n			<p>&nbsp;</p>\n\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:162px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:95px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:86px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:84px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:106px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:123px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:135px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:75px">\n			<p>&nbsp;</p>\n\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:162px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:95px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:86px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:84px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:106px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:123px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:135px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:75px">\n			<p>&nbsp;</p>\n\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:162px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:95px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:86px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:84px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:106px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:123px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:135px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:75px">\n			<p>&nbsp;</p>\n\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:162px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:95px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:86px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:84px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:106px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:123px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:135px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n</div>\n\n<p>&nbsp;</p>\n\n<p>&nbsp; &nbsp; &nbsp; V. &nbsp; &nbsp; &nbsp; ASPECTOS ADMINISTRATIVOS</p>\n\n<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="width:207px">\n			<p>Requisitos de Aprobaci&oacute;n</p>\n			</td>\n			<td style="width:381px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:207px">\n			<p>Asistencia m&iacute;nima</p>\n			</td>\n			<td style="width:381px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:207px">\n			<p>Otras consideraciones</p>\n			</td>\n			<td style="width:381px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>&nbsp; &nbsp; &nbsp;VI. &nbsp; &nbsp; &nbsp; RECURSOS DE APRENDIZAJE</p>\n\n<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="width:164px">\n			<p>&nbsp;</p>\n			</td>\n			<td style="width:408px">\n			<p>Autor, T&iacute;tulo, Editorial, A&ntilde;o de Edici&oacute;n</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:164px">\n			<p>B&Aacute;SICA OBLIGATORIA</p>\n			</td>\n			<td style="width:408px">\n			<p>&nbsp; -</p>\n\n			<p>&nbsp; -</p>\n\n			<p>&nbsp; -</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:164px">\n			<p>COMPLEMENTARIA</p>\n			</td>\n			<td style="width:408px">\n			<p>&nbsp; -</p>\n\n			<p>&nbsp; -</p>\n\n			<p>&nbsp; -</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p style="margin-left:18.0pt">VII. &nbsp; &nbsp; OTROS RECURSOS</p>\n\n<table border="1" cellpadding="0" cellspacing="0">\n	<tbody>\n		<tr>\n			<td style="width:142px">\n			<p>Tipo de Recurso</p>\n			</td>\n			<td style="width:116px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="height:18px; width:142px">\n			<p>Digital</p>\n			</td>\n			<td style="height:18px; width:116px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:142px">\n			<p>Audiovisual</p>\n			</td>\n			<td style="width:116px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:142px">\n			<p>Simuladores</p>\n			</td>\n			<td style="width:116px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n		<tr>\n			<td style="width:142px">\n			<p>Otros</p>\n			</td>\n			<td style="width:116px">\n			<p>&nbsp;</p>\n			</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `text_area`
--

CREATE TABLE `text_area` (
  `id_textarea` int(11) NOT NULL,
  `text_area` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `text_area`
--

INSERT INTO `text_area` (`id_textarea`, `text_area`) VALUES
(1, '<div>\r\n<p>PLANIFICACI&Oacute;N DESARROLLO DE LA ACTIVIDAD CURRICULAR</p>\r\n\r\n<ol style="list-style-type:upper-roman">\r\n	<li>ANTECEDENTES GENERALES\r\n	<table border="1" cellpadding="0" cellspacing="0">\r\n		<tbody>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>Carrera</p>\r\n				</td>\r\n				<td colspan="9" style="width:456px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>Nombre</p>\r\n				</td>\r\n				<td colspan="9" style="width:456px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>C&oacute;digo</p>\r\n				</td>\r\n				<td colspan="9" style="width:456px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>Semestre lectivo</p>\r\n				</td>\r\n				<td colspan="4" style="width:199px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td colspan="2" style="width:105px">\r\n				<p>A&ntilde;o:</p>\r\n				</td>\r\n				<td colspan="3" style="width:153px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>Cr&eacute;ditos SCT</p>\r\n				</td>\r\n				<td colspan="9" style="width:456px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="width:132px">\r\n				<p>Horas</p>\r\n				</td>\r\n				<td colspan="2" style="width:133px">\r\n				<p>Presencial</p>\r\n				</td>\r\n				<td style="width:47px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td colspan="2" style="width:85px">\r\n				<p>Aut&oacute;noma</p>\r\n				</td>\r\n				<td colspan="2" style="width:56px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td style="width:96px">\r\n				<p>Total</p>\r\n				</td>\r\n				<td style="width:39px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td rowspan="2" style="height:17px; width:132px">\r\n				<p>&Aacute;rea de Formaci&oacute;n</p>\r\n				</td>\r\n				<td colspan="2" rowspan="2" style="height:17px; width:133px">\r\n				<p>Disciplinar</p>\r\n				</td>\r\n				<td rowspan="2" style="height:17px; width:47px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td colspan="2" rowspan="2" style="height:17px; width:85px">\r\n				<p>General</p>\r\n				</td>\r\n				<td colspan="2" rowspan="2" style="height:17px; width:56px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td style="height:17px; width:96px">\r\n				<p>Profesional</p>\r\n				</td>\r\n				<td style="height:17px; width:39px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="height:17px; width:96px">\r\n				<p>Pr&aacute;ctica</p>\r\n				</td>\r\n				<td style="height:17px; width:39px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="height:17px; width:132px">\r\n				<p>Docente</p>\r\n				</td>\r\n				<td colspan="9" style="height:17px; width:456px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td rowspan="2" style="height:25px; width:132px">\r\n				<p>Contacto</p>\r\n				</td>\r\n				<td style="height:25px; width:76px">\r\n				<p>E-mail</p>\r\n				</td>\r\n				<td colspan="8" style="height:25px; width:381px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n			<tr>\r\n				<td style="height:25px; width:76px">\r\n				<p>Tel&eacute;fono</p>\r\n				</td>\r\n				<td colspan="2" style="height:25px; width:104px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n				<td colspan="4" style="height:25px; width:142px">\r\n				<p>Horario de Atenci&oacute;n</p>\r\n				</td>\r\n				<td colspan="2" style="height:25px; width:135px">\r\n				<p>&nbsp;</p>\r\n				</td>\r\n			</tr>\r\n		</tbody>\r\n	</table>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; II. DESCRIPCI&Oacute;N</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:588px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp; III.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; COMPETENCIAS ASOCIADAS A LA ACTIVIDAD CURRICULAR</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="height:17px; width:142px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="height:17px; width:223px">\r\n			<p style="text-align: center;">COMPETENCIAS</p>\r\n			</td>\r\n			<td style="height:17px; width:225px">\r\n			<p style="text-align: center;">SUBCOMPETENCIAS</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:17px; width:142px">\r\n			<p>PROFESIONAL(ES)</p>\r\n			</td>\r\n			<td style="height:17px; width:223px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="height:17px; width:225px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:17px; width:142px">\r\n			<p>GEN&Eacute;RICA(S)</p>\r\n			</td>\r\n			<td style="height:17px; width:223px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="height:17px; width:225px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; IV. &nbsp; &nbsp; &nbsp; PLANIFICACI&Oacute;N POR UNIDAD</p>\r\n\r\n<div>\r\n<table border="1" cellpadding="0" cellspacing="0" style="width:866px">\r\n	<tbody>\r\n		<tr>\r\n			<td rowspan="2" style="height:18px; width:75px">\r\n			<p style="text-align: center;">Semanas</p>\r\n			</td>\r\n			<td rowspan="2" style="height:18px; width:162px">\r\n			<p style="text-align: center;">Resultados de aprendizaje</p>\r\n			</td>\r\n			<td rowspan="2" style="height:18px; width:95px">\r\n			<p style="text-align: center;">Ponderaci&oacute;n(%)</p>\r\n			</td>\r\n			<td colspan="2" style="height:18px; width:170px">\r\n			<p style="text-align: center;">Horas de Dedicaci&oacute;n</p>\r\n			</td>\r\n			<td rowspan="2" style="height:18px; width:106px">\r\n			<p style="text-align: center;">Nombre de la Unidad / Ejes tem&aacute;ticos</p>\r\n			</td>\r\n			<td rowspan="2" style="height:18px; width:123px">\r\n			<p style="text-align: center;">Actividades</p>\r\n			</td>\r\n			<td rowspan="2" style="height:18px; width:135px">\r\n			<p style="text-align: center;">Criterios y Procedimientos de Evaluaci&oacute;n</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:18px; width:86px">\r\n			<p style="text-align: center;">Docencia Presencial</p>\r\n			</td>\r\n			<td style="height:18px; width:84px">\r\n			<p style="text-align: center;">Trabajo Aut&oacute;nomo</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:75px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:162px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:95px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:86px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:84px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:106px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:123px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:135px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:75px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:162px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:95px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:86px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:84px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:106px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:123px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:135px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:75px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:162px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:95px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:86px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:84px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:106px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:123px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:135px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:75px">\r\n			<p>&nbsp;</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:162px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:95px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:86px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:84px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:106px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:123px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:135px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; V. &nbsp; &nbsp; &nbsp; ASPECTOS ADMINISTRATIVOS</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:207px">\r\n			<p>Requisitos de Aprobaci&oacute;n</p>\r\n			</td>\r\n			<td style="width:381px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:207px">\r\n			<p>Asistencia m&iacute;nima</p>\r\n			</td>\r\n			<td style="width:381px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:207px">\r\n			<p>Otras consideraciones</p>\r\n			</td>\r\n			<td style="width:381px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;VI. &nbsp; &nbsp; &nbsp; RECURSOS DE APRENDIZAJE</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:164px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style="width:408px">\r\n			<p>Autor, T&iacute;tulo, Editorial, A&ntilde;o de Edici&oacute;n</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:164px">\r\n			<p>B&Aacute;SICA OBLIGATORIA</p>\r\n			</td>\r\n			<td style="width:408px">\r\n			<p>&nbsp; -</p>\r\n\r\n			<p>&nbsp; -</p>\r\n\r\n			<p>&nbsp; -</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:164px">\r\n			<p>COMPLEMENTARIA</p>\r\n			</td>\r\n			<td style="width:408px">\r\n			<p>&nbsp; -</p>\r\n\r\n			<p>&nbsp; -</p>\r\n\r\n			<p>&nbsp; -</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p style="margin-left:18.0pt">VII. &nbsp; &nbsp; OTROS RECURSOS</p>\r\n\r\n<table border="1" cellpadding="0" cellspacing="0">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:142px">\r\n			<p>Tipo de Recurso</p>\r\n			</td>\r\n			<td style="width:116px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="height:18px; width:142px">\r\n			<p>Digital</p>\r\n			</td>\r\n			<td style="height:18px; width:116px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:142px">\r\n			<p>Audiovisual</p>\r\n			</td>\r\n			<td style="width:116px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:142px">\r\n			<p>Simuladores</p>\r\n			</td>\r\n			<td style="width:116px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:142px">\r\n			<p>Otros</p>\r\n			</td>\r\n			<td style="width:116px">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>');

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
