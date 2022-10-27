-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 26-10-2022 a las 14:28:56
-- Versión del servidor: 5.7.39-log-cll-lve
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `wozialad_colaboradoes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel`
--

CREATE TABLE `carousel` (
  `id` int(10) NOT NULL,
  `orden` int(2) DEFAULT NULL,
  `titulo` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `txt` text COLLATE latin1_general_ci,
  `url` text COLLATE latin1_general_ci,
  `video` varchar(100) COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carousel2`
--

CREATE TABLE `carousel2` (
  `id` int(10) NOT NULL,
  `orden` int(2) DEFAULT NULL,
  `titulo` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `txt` text COLLATE latin1_general_ci,
  `url` text COLLATE latin1_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

CREATE TABLE `configuracion` (
  `id` int(2) NOT NULL,
  `title` varchar(200) COLLATE latin1_spanish_ci DEFAULT NULL,
  `description` text COLLATE latin1_spanish_ci,
  `prodspag` int(5) DEFAULT NULL,
  `sliderhmin` int(5) DEFAULT '0',
  `sliderhmax` int(5) DEFAULT '1000',
  `sliderproporcion` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `slideranim` int(1) DEFAULT NULL,
  `slidertextos` int(1) DEFAULT NULL,
  `paypalemail` text COLLATE latin1_spanish_ci,
  `destinatario1` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `destinatario2` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remitente` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remitentepass` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remitentehost` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remitenteport` varchar(5) COLLATE latin1_spanish_ci DEFAULT NULL,
  `remitenteseguridad` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono1` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `instagram` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `youtube` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `envio` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `envioglobal` varchar(10) COLLATE latin1_spanish_ci DEFAULT NULL,
  `iva` int(2) DEFAULT NULL,
  `incremento` int(2) DEFAULT NULL,
  `bank` text COLLATE latin1_spanish_ci,
  `tyct1` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tyct2` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tyct3` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tyct4` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `tyc1` text COLLATE latin1_spanish_ci,
  `tyc2` text COLLATE latin1_spanish_ci,
  `tyc3` text COLLATE latin1_spanish_ci,
  `tyc4` text COLLATE latin1_spanish_ci,
  `pdf1` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagen1` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagen2` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagen3` varchar(100) COLLATE latin1_spanish_ci DEFAULT NULL,
  `about1` text COLLATE latin1_spanish_ci,
  `about2` text COLLATE latin1_spanish_ci,
  `about3` text COLLATE latin1_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `title`, `description`, `prodspag`, `sliderhmin`, `sliderhmax`, `sliderproporcion`, `slideranim`, `slidertextos`, `paypalemail`, `destinatario1`, `destinatario2`, `remitente`, `remitentepass`, `remitentehost`, `remitenteport`, `remitenteseguridad`, `telefono`, `telefono1`, `facebook`, `instagram`, `youtube`, `envio`, `envioglobal`, `iva`, `incremento`, `bank`, `tyct1`, `tyct2`, `tyct3`, `tyct4`, `tyc1`, `tyc2`, `tyc3`, `tyc4`, `pdf1`, `imagen1`, `imagen2`, `imagen3`, `about1`, `about2`, `about3`) VALUES
(1, 'Somos una familia - Eshot.mx', 'Dada la situación actual con la epidemia del coronavirus se creó esta página para que cualquiera pueda postear sus servicios y así ayudarnos entre nosotros', 4, 300, 700, '5:2', 2, 0, 'business@wozial.com', 'desarrollo@wozial.com', NULL, 'contacto@eshot.mx', 'LeGuaGua@ElPerrito', 'mail.eshot.mx', '465', 'SSL', '3323381792', '3323381792', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://pinterest.com.mx/', '100', '50', 16, 0, 'Bancomer', 'Aviso de privacidad', 'Métodos de pago', 'Devoluciones y envío', 'Términos y condiciones', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nulla ac libero viverra laoreet. Duis varius scelerisque nunc at feugiat. Sed viverra est non fringilla pellentesque. Sed dictum suscipit tristique. In ultricies neque vel aliquam pharetra. Aliquam magna dolor, accumsan a mi id, commodo consequat purus. Nullam lobortis erat a tempor blandit.</p>\r\n<p>Quisque semper turpis in erat cursus, id auctor nisi sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer at blandit lectus. Pellentesque aliquet velit sem, vitae mollis eros tempor vel. Duis id orci in nulla viverra dignissim at a sem. Mauris iaculis nisl nec enim rhoncus iaculis. Curabitur dapibus fringilla quam, sed blandit ipsum accumsan nec. Donec ac elit lobortis purus sagittis convallis quis et est. Praesent vitae sagittis felis, ac sagittis tortor. Cras tortor lectus, molestie consequat ipsum id, efficitur ullamcorper felis. Sed sapien ipsum, rutrum a odio id, gravida ultrices neque. Nullam finibus mi vel ante dignissim auctor.</p>\r\n<p>In nec diam in ipsum dictum auctor quis sit amet sapien. Mauris augue enim, volutpat a malesuada id, hendrerit vitae neque. Aliquam erat volutpat. Etiam ut finibus neque. Nulla et finibus felis. Etiam vestibulum orci id nisl iaculis sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum rutrum mi non faucibus. Nulla molestie urna eu orci malesuada dictum. Integer eros dui, tempor ac ipsum a, consectetur facilisis sem. Proin placerat porttitor velit sed mattis. Suspendisse ut erat orci. In hac habitasse platea dictumst.</p>\r\n<p>Aenean cursus maximus odio, vel pharetra leo condimentum vel. In nec molestie massa. Suspendisse a tellus ultrices massa laoreet facilisis ac ultricies neque. Curabitur fringilla nunc sed interdum fermentum. Etiam egestas maximus arcu nec dictum. Integer ornare ligula ipsum, sit amet consequat justo euismod porta. Suspendisse a quam lorem. Donec ac ornare tortor. Suspendisse leo tortor, fringilla ut imperdiet ac, pulvinar nec eros. Etiam dignissim mauris sapien, vitae pulvinar nibh placerat dignissim. Pellentesque vitae vulputate nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam elementum tempor lorem, blandit aliquam ipsum commodo id. Nam dictum iaculis neque, quis tempus tortor luctus sit amet.</p>\r\n<p>Suspendisse porta enim purus, sit amet accumsan ligula molestie quis. Cras rhoncus ultricies odio. Aliquam imperdiet dapibus aliquet. Curabitur et ullamcorper eros. Fusce ut massa sit amet dolor suscipit tincidunt. Phasellus at tincidunt massa. Praesent ac imperdiet est, ac laoreet libero. Ut in turpis velit. Morbi non diam dui.</p>', '<p>Quisque semper turpis in erat cursus, id auctor nisi sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer at blandit lectus. Pellentesque aliquet velit sem, vitae mollis eros tempor vel. Duis id orci in nulla viverra dignissim at a sem. Mauris iaculis nisl nec enim rhoncus iaculis. Curabitur dapibus fringilla quam, sed blandit ipsum accumsan nec. Donec ac elit lobortis purus sagittis convallis quis et est. Praesent vitae sagittis felis, ac sagittis tortor. Cras tortor lectus, molestie consequat ipsum id, efficitur ullamcorper felis. Sed sapien ipsum, rutrum a odio id, gravida ultrices neque. Nullam finibus mi vel ante dignissim auctor.</p>\r\n<p>In nec diam in ipsum dictum auctor quis sit amet sapien. Mauris augue enim, volutpat a malesuada id, hendrerit vitae neque. Aliquam erat volutpat. Etiam ut finibus neque. Nulla et finibus felis. Etiam vestibulum orci id nisl iaculis sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum rutrum mi non faucibus. Nulla molestie urna eu orci malesuada dictum. Integer eros dui, tempor ac ipsum a, consectetur facilisis sem. Proin placerat porttitor velit sed mattis. Suspendisse ut erat orci. In hac habitasse platea dictumst.</p>\r\n<p>Aenean cursus maximus odio, vel pharetra leo condimentum vel. In nec molestie massa. Suspendisse a tellus ultrices massa laoreet facilisis ac ultricies neque. Curabitur fringilla nunc sed interdum fermentum. Etiam egestas maximus arcu nec dictum. Integer ornare ligula ipsum, sit amet consequat justo euismod porta. Suspendisse a quam lorem. Donec ac ornare tortor. Suspendisse leo tortor, fringilla ut imperdiet ac, pulvinar nec eros. Etiam dignissim mauris sapien, vitae pulvinar nibh placerat dignissim. Pellentesque vitae vulputate nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam elementum tempor lorem, blandit aliquam ipsum commodo id. Nam dictum iaculis neque, quis tempus tortor luctus sit amet.</p>', '<p>Quisque semper turpis in erat cursus, id auctor nisi sollicitudin. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Integer at blandit lectus. Pellentesque aliquet velit sem, vitae mollis eros tempor vel. Duis id orci in nulla viverra dignissim at a sem. Mauris iaculis nisl nec enim rhoncus iaculis. Curabitur dapibus fringilla quam, sed blandit ipsum accumsan nec. Donec ac elit lobortis purus sagittis convallis quis et est. Praesent vitae sagittis felis, ac sagittis tortor. Cras tortor lectus, molestie consequat ipsum id, efficitur ullamcorper felis. Sed sapien ipsum, rutrum a odio id, gravida ultrices neque. Nullam finibus mi vel ante dignissim auctor.</p>\r\n<p>In nec diam in ipsum dictum auctor quis sit amet sapien. Mauris augue enim, volutpat a malesuada id, hendrerit vitae neque. Aliquam erat volutpat. Etiam ut finibus neque. Nulla et finibus felis. Etiam vestibulum orci id nisl iaculis sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum rutrum mi non faucibus. Nulla molestie urna eu orci malesuada dictum. Integer eros dui, tempor ac ipsum a, consectetur facilisis sem. Proin placerat porttitor velit sed mattis. Suspendisse ut erat orci. In hac habitasse platea dictumst.</p>\r\n<p>Aenean cursus maximus odio, vel pharetra leo condimentum vel. In nec molestie massa. Suspendisse a tellus ultrices massa laoreet facilisis ac ultricies neque. Curabitur fringilla nunc sed interdum fermentum. Etiam egestas maximus arcu nec dictum. Integer ornare ligula ipsum, sit amet consequat justo euismod porta. Suspendisse a quam lorem. Donec ac ornare tortor. Suspendisse leo tortor, fringilla ut imperdiet ac, pulvinar nec eros. Etiam dignissim mauris sapien, vitae pulvinar nibh placerat dignissim. Pellentesque vitae vulputate nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam elementum tempor lorem, blandit aliquam ipsum commodo id. Nam dictum iaculis neque, quis tempus tortor luctus sit amet.</p>\r\n<p>Suspendisse porta enim purus, sit amet accumsan ligula molestie quis. Cras rhoncus ultricies odio. Aliquam imperdiet dapibus aliquet. Curabitur et ullamcorper eros. Fusce ut massa sit amet dolor suscipit tincidunt. Phasellus at tincidunt massa. Praesent ac imperdiet est, ac laoreet libero. Ut in turpis velit. Morbi non diam dui.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nulla ac libero viverra laoreet. Duis varius scelerisque nunc at feugiat. Sed viverra est non fringilla pellentesque. Sed dictum suscipit tristique. In ultricies neque vel aliquam pharetra. Aliquam magna dolor, accumsan a mi id, commodo consequat purus. Nullam lobortis erat a tempor blandit.</p>\r\n<p>In nec diam in ipsum dictum auctor quis sit amet sapien. Mauris augue enim, volutpat a malesuada id, hendrerit vitae neque. Aliquam erat volutpat. Etiam ut finibus neque. Nulla et finibus felis. Etiam vestibulum orci id nisl iaculis sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fermentum rutrum mi non faucibus. Nulla molestie urna eu orci malesuada dictum. Integer eros dui, tempor ac ipsum a, consectetur facilisis sem. Proin placerat porttitor velit sed mattis. Suspendisse ut erat orci. In hac habitasse platea dictumst.</p>\r\n<p>Aenean cursus maximus odio, vel pharetra leo condimentum vel. In nec molestie massa. Suspendisse a tellus ultrices massa laoreet facilisis ac ultricies neque. Curabitur fringilla nunc sed interdum fermentum. Etiam egestas maximus arcu nec dictum. Integer ornare ligula ipsum, sit amet consequat justo euismod porta. Suspendisse a quam lorem. Donec ac ornare tortor. Suspendisse leo tortor, fringilla ut imperdiet ac, pulvinar nec eros. Etiam dignissim mauris sapien, vitae pulvinar nibh placerat dignissim. Pellentesque vitae vulputate nisl. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam elementum tempor lorem, blandit aliquam ipsum commodo id. Nam dictum iaculis neque, quis tempus tortor luctus sit amet.</p>', NULL, '834602900.jpg', NULL, '808594938.jpg', '<p>Somos una una empresa mexicana de orgullo familiar fundada en 1997 por los hermanos S&aacute;nchez M&aacute;rquez. Con una gran iniciativa, los hermanos S&aacute;nchez, comenzaron con una peque&ntilde;a f&aacute;brica y una tienda ubicada en el coraz&oacute;n de la zona tur&iacute;stica de Tlaquepaque, Jalisco, M&eacute;xico.</p>\r\n<p>La Gama de productos era muy b&aacute;sica pero muy interesante, lo cual les ayudo a tener una muy buena acept&aacute;cion y el reconocimiento de los clientes Nacionales y Extranjeros.</p>\r\n<p>R&aacute;pidamente fueron aumentando su oferta de productos, lo cual los llev&oacute; a abrir m&aacute;s f&aacute;brica de producci&oacute;n y buscar la ampliaci&oacute;n de la que ser&iacute;a la primera tienda CASA PIEL.</p>', '<p>En nuestras tiendas contamos con una extensa variedad de art&iacute;culoes con un surtido en diferentes texturas, colores y modelos.</p>\r\n<p>Actualmente CASA PIEL ofrece m&aacute;s de 1,000 productos diferentes, siendo cada uno de trabajo artesanal y consideramos cada pieza &uacute;nica y especial, ya que las marcas de la piel hacen que cada pieza lleve un estampado, dise&ntilde;o y color irrepetible a&uacute;n cuendo el molde sea el mismo.</p>', '<p>Habremos logrado satisfacer el gusto delicado del mercado nacional y del extranjero, sinti&eacute;ndonos orgullosos de que el producto hecho en M&eacute;xico sea del agrado de pa&iacute;ses como Canad&aacute;, Estados Unidos y algunos pa&iacute;ses de Europa.</p>\r\n<p>Manejando la m&aacute;s alta calidad en cada uno de nuestros productos hechos con pieles seleccionadas especialmente para nuestos clientes.</p>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faq`
--

CREATE TABLE `faq` (
  `id` int(5) NOT NULL,
  `orden` int(2) NOT NULL,
  `pregunta` text NOT NULL,
  `respuesta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ipn`
--

CREATE TABLE `ipn` (
  `id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(50) DEFAULT NULL,
  `txn_id` varchar(50) DEFAULT NULL,
  `pedido` int(10) DEFAULT NULL,
  `ipn` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `metadescription` text COLLATE utf8_spanish_ci,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `txt` text COLLATE utf8_spanish_ci,
  `url` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `instagram` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `whatsapp` varchar(12) COLLATE utf8_spanish_ci DEFAULT NULL,
  `servicio` int(5) DEFAULT NULL,
  `empresa` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `inicio` int(1) NOT NULL DEFAULT '0',
  `estatus` int(1) NOT NULL DEFAULT '1',
  `fecha` date DEFAULT NULL,
  `orden` int(2) DEFAULT '99'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `title`, `metadescription`, `titulo`, `txt`, `url`, `instagram`, `facebook`, `whatsapp`, `servicio`, `empresa`, `imagen`, `inicio`, `estatus`, `fecha`, `orden`) VALUES
(9, '', '', 'neuvo', '', 'a', 'a', 'a', '', 9, 'nuevo', NULL, 0, 1, '2022-10-24', 99),
(10, '', '', 'Montse Barragan', '<p>Fabricamos macetas de fibra de vidrio con dise&ntilde;os desde lo m&aacute;s tradicional hasta algunas ic&oacute;nicas. Tenemos precio de mayoreo.Pablo Neruda 4131</p>', 'www.Anteramx.com', '', 'https://www.facebook.com/Anteramexico', '3329413680', 11, 'Antera Mx', NULL, 0, 1, '2022-10-24', 99),
(11, '', '', 'Melissa Valdivia / Francisco Moreno', '<p>Venta de pl&aacute;sticos para el hogar, (botes, cajas, tuppers, etc) Cristaler&iacute;a, aparatos el&eacute;ctricos para la casa (creperas, secadoras de cabello, parrillas, licuadoras etc) Cosm&eacute;ticos, regalos, ART&Iacute;CULOS DE TEMPORADA.&nbsp;<br /><br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Av jesus 1588 Colonia Santa Margarita, Zapopan. &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Av jesus 1588 Colonia Santa Margarita, Zapopan. </span></p>', '', '', 'https://www.facebook.com/Niu1224', '3334535633', 6, 'Ni&Uuml;', NULL, 0, 1, '2022-10-24', 99),
(12, '', '', 'Andres Holzleitner', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Aserradero de madera de pino. Venta de madera de pino por mayoreo. </span></p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Producci&oacute;n 82, Parque Industrial Ruta 80, Cocula, Jalisco </span></p>', '', '', '', '3318087671', 6, 'HOELZER', NULL, 0, 1, '2022-10-24', 99),
(13, '', '', 'Adriana Gonz&aacute;lez', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Importacion y Exportacion en caja de 53 pies entre USA y MEXICO. Terrestre e intermodal &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Importacion y Exportacion en caja de 53 pies entre USA y MEXICO. Terrestre e intermodal </span></p>', 'www.schneider.com', '', '', '3335852082', 12, 'Schneider', NULL, 0, 1, '2022-10-24', 99),
(14, '', '', 'Alvaro Cuevas de Alba', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Artista pl&aacute;stico- escultura, pintura, grabado, Joyeria &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Artista pl&aacute;stico- escultura, pintura, grabado, Joyeria </span></p>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Artista pl&aacute;stico- escultura, pintura, grabado, Joyeria &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Prisciliano Sanchez 1078. Col americana. Guadalajara, Jalisco</span></p>', 'www.alvarocuevas.com', 'https://www.instagram.com/alvarocuevasdealba/', '', '3317880086', 13, 'Todos dejamos huella', NULL, 0, 1, '2022-10-24', 99),
(15, '', '', 'Betty Contreras Audiffred', '<p>Venta de aceites esenciales y productos a base de ingredientes naturales para el bienestar de las personas.<br /><br />Paseo Panoramico 65 Int 22 Las Ca&ntilde;adas (La reserva)</p>', 'WWW.JUST.COM.MX/BEATRIZ', 'https://www.instagram.com/betty_audiffred_consultora/?hl=es-la', 'https://www.facebook.com/saludyexitoconjust/', '3314378079', 9, 'Just', NULL, 0, 1, '2022-10-24', 99),
(16, '', '', 'Juan Gonz&aacute;lez Gomez', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Asesor de ventas en veh&iacute;culos nuevos de diferentes marcas. &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Asesor de ventas en veh&iacute;culos nuevos de diferentes marcas. </span></p>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Asesor de ventas en veh&iacute;culos nuevos de diferentes marcas. &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Adolfo L&oacute;pez Mateos sur 5706</span></p>', '', '', 'https://www.facebook.com/juan.gonzalezvw.7', '3338143298', 6, 'Volkswagen', NULL, 0, 1, '2022-10-24', 99),
(17, '', '', 'Venancio Chaidez Hern&aacute;ndez', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Instalaciones el&eacute;ctricas en Media y baja tensi&oacute;n industrial, vertical, hoteler&iacute;a, hospitalaria y urbanizaci&oacute;n.<br />Loreto 1289 col. Chapalita Guadalajara Jalisco<br /></span></p>', 'www.grupoprasco.com', 'https://instagram.com/prascooficial?igshid=YmMyMTA2M2Y=', 'https://www.facebook.com/grupoprasco', '3315814672', 14, 'Grupo Prasco ( Instalaciones El&eacute;ctricas)', NULL, 0, 1, '2022-10-24', 99),
(18, '', '', 'Beatriz Carolina Contreras Audiffred', '<p>Swiss Just ofrece una gama de productos basados en aceites esenciales y extractos naturales enfocados a 4 categor&iacute;as seg&uacute;n el prop&oacute;sito de su uso: <br />1. Aromaterapia: L&iacute;nea de aceites esenciales 100% puros de calidad farmac&eacute;utica. <br />2. Emocional y mental: Concebidos para promover un estado de revitalizaci&oacute;n, energ&iacute;a, paz, armon&iacute;a, relajaci&oacute;n y bienestar. <br />3. F&iacute;sico: Para promover el bienestar f&iacute;sico en momentos de tensi&oacute;n y malestar corporal. <br />4. Dermocosm&eacute;tico: Cuidado del rostro y cuerpo, que tienen que ver con la salud y apariencia de la piel.&nbsp;<br /><br />Paseo Panor&aacute;mico 65 int. 22 La Reserva de las Ca&ntilde;adas, 45206 Zapopan, Jal.</p>', 'https://www.just.com.mx/Olivier', 'https://www.instagram.com/cabrera.olivier/', '', '3314378079', 9, 'Swiss Just', NULL, 0, 1, '2022-10-24', 99),
(19, '', '', 'Norma Alcala Hayakawa', '<p>Landstar es una empresa de transporte terrestre internacional que da servicio en EEUU, Canada y Mexico. Podemos dar servicio en caja seca, equipo especializado (plataformas, stepdeck, lowboys), Consolidado (LTL), Intermodal, refrigerado, mercanc&iacute;a peligrosa.</p>', 'www.landstar.com', '', '', '3331483059', 12, 'Landstar GDL', NULL, 0, 1, '2022-10-24', 99),
(20, '', '', 'Alfonso Gonz&aacute;lez Martinez', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Cortineria, Telas y Mercer&iacute;a &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Cortineria, Telas y Mercer&iacute;a.<br /><br />Plaza del sol Av santa M&oacute;nica 179 centro<br /></span></p>', 'https://bellardina.negocio.site/', 'https://www.instagram.com/bellardina.mx/', 'https://www.facebook.com/bellardina.mx', '3334928877', 11, 'Bellardina', NULL, 0, 1, '2022-10-24', 99),
(21, '', '', 'Jaime Dur&oacute;n', '<p>Venta de alimento para perros. Marca Vitacan. Marca mexicana. Dieta balanceada por expertos para todas las razas. 4Kg y 20 kg</p>\r\n<p>&nbsp;</p>', '', '', 'https://www.facebook.com/elperro.gourmet', '3310264948', 15, 'El Perro Gourmet', NULL, 0, 1, '2022-10-24', 99),
(22, '', '', 'Ana Laura Ca&ntilde;edo', '<p>Distribuci&oacute;n de Joyer&iacute;a fina. 4 ba&ntilde;os de oro 18 quilates, platino y piedras de cristal. Garant&iacute;a 1 a&ntilde;o. Precios muy accesibles. Posibilidad de hacer el negocio o s&oacute;lo consumir producto.&nbsp;</p>', 'www.niceonline.com.mx/expresanice', '', 'https://www.facebook.com/capri.jewerly', '3310264948', 16, 'Aura Joyer&iacute;a', NULL, 0, 1, '2022-10-24', 99),
(23, '', '', 'Linda Dom&iacute;nguez', '<p>Compra venta y arrendamiento de bienes inmuebles habitacionales, comerciales, corporativos e industriales.<br />Plaza One Ca&ntilde;adas Local 4 Av. Camino a Bosque de San Isidro 530 int 4, San Jos&eacute; del Baj&iacute;o, 45133 Zapopan, Jal.</p>', 'https://www.jucali.mx/', 'https://www.instagram.com/jucali_grupo_inmobiliario/', 'https://m.facebook.com/profile.php?id=100057615152420', '3329995367', 17, 'Jucali Grupo Inmobiliario', NULL, 0, 1, '2022-10-24', 99),
(24, '', '', 'Adriana Ortiz Castro', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Papeler&iacute;a de autor, personal, etiquetas escolares y de regalo.</span></p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Etiquetas escolares de vinil y dise&ntilde;os de papeler&iacute;a personal , etiquetas planchables, tags de mochila</span></p>', '', 'www.instagram.com/besosdeazucarpa', 'https://www.facebook.com/besosdeazucarpa', '3331907548', 18, 'Besos de az&uacute;car', NULL, 0, 1, '2022-10-24', 99),
(25, '', '', 'Karen Aldana', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Cafeteria , postres y desayunos &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Cafeteria , postres y desayunos.<br /><br />Aurelio Ortega 755 colonia Seattle <br /></span></p>', '', 'https://www.instagram.com/lukasdeli/', '', '3331154344', 7, 'Lukas deli', NULL, 0, 1, '2022-10-24', 99),
(26, '', '', 'Paola Bauche Petersen', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Fondo ambiental que busca la conservaci&oacute;n de la naturaleza en el noroeste y occidente de M&eacute;xico. </span></p>', 'www.fonnor.org', 'https://www.instagram.com/fonnor.ac/', 'https://www.facebook.com/Fonnor-AC-567889170290604', '3313202329', 19, 'Fonnor, a.c.', NULL, 0, 1, '2022-10-24', 99),
(27, '', '', 'Paola Soto', '<p>Arte en pared, arte moderno en madera hecho con gran detalle por manos mexicanas. Cuidadosamente dise&ntilde;ado, pintado y ensamblado para hacer de tu espacio algo &uacute;nico. Cuadros fabricados en madera natural.&nbsp;</p>\r\n<p>&nbsp;</p>', '', 'https://www.instagram.com/alborozoarte/', '', '3331917894', 11, 'Alborozo Arte', NULL, 0, 1, '2022-10-24', 99),
(28, '', '', 'Sofi Lopez', '<p>Distribuyo aceites esenciales y ense&ntilde;o como utilizarlos. Capacitaciones constantes y soporte al usuario.</p>\r\n<p>Zona Ca&ntilde;adas</p>', 'https://sofilopezesencial.com/', 'https://www.instagram.com/sofilopezesencial/', 'https://www.facebook.com/sofilopezesencial/', '3316044917', 9, 'Doterra', NULL, 0, 1, '2022-10-24', 99),
(29, '', '', 'Joaquin Antonio Moreno Arriola', '<p>Desarrollo con fundamento sustentable y a medida seg&uacute;n necesidades; para la fabricaci&oacute;n de todo tipo de prenda textil; desde especializados, industriales, corporativos, de seguridad, que incluyen: dibujo de patrones, selecci&oacute;n de composici&oacute;n de tela, personalizados, innovaci&oacute;n en dise&ntilde;o, elaboraci&oacute;n de muestras y clasificaci&oacute;n.&nbsp;<br /><br /></p>\r\n<p>Oficina sin venta p&uacute;blico Luige Pirandello No. 5276 Jardines universidad</p>', 'http://www.customgear.mx/', 'https://www.instagram.com/customgear.mx/', '', '3324659220', 20, 'Custom Gear', NULL, 0, 1, '2022-10-24', 99),
(30, '', '', 'Erika S&aacute;nchez Jaime', '<p>Transporte de muebles nuevos y usados a toda la Rep&uacute;blica Mexicana. Damos servicio principalmente a muebler&iacute;as, hoteles, tiendas departamentales, etc.&nbsp;</p>', '', '', '', '3331453060', 21, 'TRAMUSA', NULL, 0, 1, '2022-10-24', 99),
(31, '', '', 'Mauricio Echeverria', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Restaurante / trattoria italiana &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Restaurante / trattoria italiana</span></p>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Restaurante / trattoria italiana &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Miguel Leon Portilla 548-C Colonia Santa F&eacute; Zapopan Jalisco&nbsp;</span></p>', 'www.uliveto.con.mx', '', '', '3336246335', 7, 'Restaurante Uliveto Trattoria', NULL, 0, 1, '2022-10-24', 99),
(32, '', '', 'Gaby Gerber', '<p>Impresiones de todo tipo y sobre cualquier superficie. Bordados Uniformes Serigraf&iacute;a Hot stamping Lonas Viniles y recorte de vinil ( adherible y textil) Proyectos especiales ( decoraci&oacute;n oara fiestas, oficinas) Papeler&iacute;a Papeler&iacute;a membretadas ( hojas, notas, tarjetas de presentaci&oacute;n, recibos, flyers, tr&iacute;pticos, etc) Corte l&aacute;ser: acr&iacute;lico, mdf, papeles Grabado l&aacute;ser: maderas, termos tipo yeti, acr&iacute;licos Copias Dise&ntilde;o.<br /><br />Garibaldi 1865, ladr&oacute;n de guevara, gdl, jalisco</p>', 'inkso.mx', 'https://www.instagram.com/inkso_solucionescreativas/', '', '3326317371', 22, 'INKso', NULL, 0, 1, '2022-10-24', 99),
(33, '', '', 'Douglas Woolfolk', '<p>Desarrollamos agentes de vida, para brindar Asesor&iacute;a en reducci&oacute;n de pago de impuestos y acumulaci&oacute;n de patrimonio.&nbsp;<br /><br />Patria 888 piso 6</p>', 'www.confinza.mx', 'https://www.instagram.com/cofinza_oficial/', 'https://www.facebook.com/cofinza', '', 23, 'COFINZA Metlife', NULL, 0, 1, '2022-10-24', 99),
(34, '', '', 'Arturo Guill&eacute;n Gonz&aacute;lez', '<p>Elaboraci&oacute;n de alimentos esterilizados conservados en bolsas o charolas son conservadores y con caducidad de 18 meses.&nbsp;<br /><br />Av Vicente Guerrero #320 col el mante zapopan&nbsp;</p>', 'www.fichalimentos.com', 'https://www.instagram.com/cocina.de.piedra/', '', '3331884304', 24, 'Frich Alimentos SA de CV', NULL, 0, 1, '2022-10-24', 99),
(35, '', '', 'Marina Ruiz D&iacute;az', '<p>Consulta psicol&oacute;gica con enfoque xognitivo conductual y especialista en euroterapia con bio y neurofeedback. Aprende a modular tu cerebro y por lo tanto tus emociones y conductas, entrenamiento cerebral para mejorar atenci&oacute;n, memoria y funciones cognitivas, entrenamiento en alto rendimiento. Trastornos de ansiedad, depresi&oacute;n, TEA, TOC, trastornos de aprendizaje, TDAH, epilepsia, trastornos del sue&ntilde;o, etc.<br />Av altavista 450. Coto Altavista Bosques.</p>', '', 'https://www.instagram.com/marina.ruiz.psicologa/', '', '3318323655', 25, 'SynapsCenter', NULL, 0, 1, '2022-10-24', 99),
(36, '', '', 'Tannia L&oacute;pez Salas', '<p>Venta de art&iacute;culos y equipo de tecnolog&iacute;a y computaci&oacute;n.<br />Dell HP LENOVO APPLE LG SAMSUNG ASUS ASER</p>\r\n<p>L&oacute;pez Mateos sur 1820 Esq. san Uriel Campo de polo chapalita&nbsp;</p>', 'www.digitalife.com.mx', 'https://www.instagram.com/digitalifemx/', '', '3336300660', 26, 'Digitalife', NULL, 0, 1, '2022-10-24', 99),
(37, '', '', 'Ruben Sanju&aacute;n Cort&eacute;s', '<p>Fabricaci&oacute;n y venta de cajas de cart&oacute;n para la industria alimenticia y electr&oacute;nica.<br />Cajas plegadizas, corrugadas y micro corrugadas.</p>', 'www.empaquesespeciales.com', '', 'https://www.facebook.com/EMPAQUES-ESPECIALES-128437397168234', '3338171755', 6, 'Empaques Especiales', NULL, 0, 1, '2022-10-24', 99),
(38, '', '', 'Hans Schmal', '<p>Distribuidor de Contpaqi.<br /><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Consultor&iacute;a de Software</span><br /><br /></p>', 'www.plataformas.com', '', 'https://www.facebook.com/PlataformaiMx', '3319183468', 1, 'Plataforma i', NULL, 0, 1, '2022-10-24', 99),
(39, '', '', 'Francy Johanna Joya Mejia', '<p>Ofrezco hospedaje de departamentos mediante la plataforma de airbnb y directo si es conocido o familias del colegio Alem&aacute;n.&nbsp;<br /><br />Colonia La Calma, Zapopan. Colonia Lomas de Independencia, Guadalajara. Colonia Americana, Guadalajara. Vallarta.&nbsp;</p>', 'https://www.airbnb.com/h/lifed', '', '', '3323584823', 28, 'Airbnb', NULL, 0, 1, '2022-10-24', 99),
(40, '', '', 'Pamela Villalvazo', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Dise&ntilde;o, fabricaci&oacute;n y comercializaci&oacute;n de art&iacute;culos decorativos. Corte l&aacute;ser.<br />Ceboruco #2139 col. El Colli. Zapopan, jalisco CP 45070<br /></span></p>', 'www.thepapayastudio.com', 'https://www.instagram.com/papayastudiomx/', '', '3337809585', 11, 'Papaya Studio', NULL, 0, 1, '2022-10-24', 99),
(41, '', '', 'Daniela Pradoa', '<p>Postres caseros, cupcakes, pasteles y galletas personalizadas, candy bar&hellip; todo lo necesario para hacer de todo una ocasi&oacute;n especial!&nbsp;</p>', '', 'https://instagram.com/soulfultreatsbydani', '', '5554008878', 29, 'Soulful Treats by Dani', NULL, 0, 1, '2022-10-24', 99),
(42, '', '', 'Francisco Javier Flores Robles', '<p>Empresa dedica a la Consultoria Legal general, principalmente empresarial, Derecho Corporativo todo lo relacionado con movimientos a nivel de &oacute;rganos de gobierno, vemos cuestiones de contratos de todo tipo con clientes y proveedores, cuestiones fiscales, laborales, penales corporativas. Asuntos inmobiliarios, arrendamientos, compraventas, etc, cuestiones financieras y mercantiles, civiles sucesiones, familiares, cambio de regimen matrimonial, custodias, divorcios privados y litigiosos, etc. Adem&aacute;s todos los temas los fortalecemos por aplicaci&oacute;n de m&eacute;todos de Justicia Alternativa, con prestares certificados.<br /><br />Buenos Aires n&uacute;mero 3060 (tres mil sesenta), 202 (doscientos dos), Colonia Providencia Cuarta Secci&oacute;n, en Guadalajara, Jalisco, C&oacute;digo Postal 44630</p>', 'www.grupobratila.com', '', 'https://www.facebook.com/profile.php?id=100077696171591', '3322373492', 30, 'Grupo Bratila', NULL, 0, 1, '2022-10-24', 99),
(43, '', '', 'Daniela Figueroa Guerra', '<p>Tienda de productos organicos y naturales.<br />Avenida providencia 2818<br /><br /></p>', '', '', 'https://www.facebook.com/tiendajengibregdl', '3336400327', 9, 'Jengibre', NULL, 0, 1, '2022-10-24', 99),
(44, '', '', 'Carm&iacute;n Arroyo L&oacute;pez', '<p>En I HEART YOU dise&ntilde;amos y creamos lindas cosas para tus hijos 100% hechas por manos de mam&aacute;s mexicanas con much&iacute;simo amor!!! Desde decoraci&oacute;n para el cuarto hasta invitaciones, etiquetas y tarjetas e presentaci&oacute;n.</p>', '', '', 'https://www.facebook.com/iYouHEART', '3331916327', 11, 'I heart you', NULL, 0, 1, '2022-10-24', 99),
(45, '', '', 'Javier A Perales Stahl', '<p>Barras de granola y superfoods naturales de diversos sabores.</p>', 'www.barrinolas.com.mx', '', '', '3389958991', 24, 'Barrinolas', NULL, 0, 1, '2022-10-24', 99),
(46, '', '', 'Ricardo Nu&ntilde;o Flores', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Comercializadora que distribuye en M&eacute;xico y de mayoreo, gran variedad figuras de peluche. </span></p>', 'https://www.lamagiadeelba.com/', '', 'https://www.facebook.com/lamagiadeelba', '3314881783', 31, 'La Magia de Elba', NULL, 0, 1, '2022-10-24', 99),
(47, '', '', 'Germ&aacute;n Cort&eacute;s Valencia', '<p>Legacy es una firma especializada en servicios fiscales. Estamos enfocados en dar soluciones personalizadas a los clientes, mediante una comunicaci&oacute;n clara y precisa con ellos. Tambi&eacute;n proveemos servicios para el cumplimiento fiscal, procesamiento de contabilidad y n&oacute;mina. Nuestro equipo se encuentra actualizado en el &aacute;mbito fiscal, lo cual es importante debido a los cambios constantes que en esta materia se dan.<br /><br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Calle Ontario 1373, Providencia 2a. Secc. Guadalajara, Jalisco, C.P. 44630&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Calle Ontario 1373, Providencia 2a. Secc. Guadalajara, Jalisco, C.P. 44630</span></p>', 'www.legacysc.mx', '', '', '3312996799', 30, 'LEGACY TAX ADVISORY', NULL, 0, 1, '2022-10-24', 99),
(48, '', '', 'Santiago Alfaro Barbosa', '<p>Tratamiento m&eacute;dico y quir&uacute;rgico del sistema m&uacute;sculo esquel&eacute;tico. Atenci&oacute;n de lesiones (musculares, esguinces, fracturas, meniscos, ligamentos, cart&iacute;lago articular, dolor de espalda), rehabilitaci&oacute;n con servicio m&eacute;dico especializado y fisioterapia. Cirug&iacute;a artrosc&oacute;pica (hombro, codo, rodilla, cadera, tobillo) y pr&oacute;tesis articulares (hombro, cadera, rodilla, tobillo).&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>1. Hospital M&eacute;xico Americano, consultorios 210 y 211, Colomos 2110, colonia Ayuntamiento, CP 44620, Guadalajara, Jalisco.</p>\r\n<p>2. Mediclinic. Nelson 62 entre Hidalgo y Justo Sierra, Vallarta Norte, CP 44690, Guadalajara, Jalisco.</p>', 'https://www.doctoralia.com.mx/santiago-alfaro-barbosa/ortopedista-traumatologo/guadalajara', 'https://www.instagram.com/yagonidas/', 'https://www.facebook.com/santiago.alfaro/', '3334974630', 32, 'Dr. Santiago Alfaro Barbosa', NULL, 0, 1, '2022-10-24', 99),
(49, '', '', 'Antonio Jim&eacute;nez Salazar', '<p>KYMA LIFE es una cl&iacute;nica de rehabilitaci&oacute;n f&iacute;sica que cuenta con servicios de Traumatologia deportiva y ortopedia, terapia f&iacute;sica y rehabilitaci&oacute;n, acondicionamiento f&iacute;sico, medicina y nutrici&oacute;n clinica; y medicina est&eacute;tica y anti envejecimiento.</p>\r\n<p>Av. Las Rosas 171-A Chapalita Sur</p>', 'kymalife.mx', 'https://www.instagram.com/kymalifewellness/', 'https://www.facebook.com/kymalifewellness', '3311727536', 32, 'KYMA LIFE', NULL, 0, 1, '2022-10-24', 99),
(50, '', '', 'GUILLERMO AGUILAR SILVA', '<p>Dise&ntilde;o y c&aacute;lculo estructural. Construcci&oacute;n.</p>', '', '', 'https://www.facebook.com/asingenieriayconstruccion', '3333690151', 34, 'AGUILAR SILVA INGENIERIA ESTRUCTURAL', NULL, 0, 1, '2022-10-24', 99),
(51, '', '', 'Itzel Velazquez Martinez', '<p>Centro de cursos psicoprofil&aacute;ctico, cursos de lactancia, cursos de primeros auxilios, pilates reformer prenatal y pilates reformer para todo el p&uacute;blico. Venta de productos Medela , medias de compresi&oacute;n para la circulaci&oacute;n y otros relacionados al embarazo.<br /><br />Av. M&eacute;xico 3370 , Plaza Bonita&nbsp;</p>', 'www.grupocoras.com.mx', '', 'https://www.instagram.com/grupo.coras/', '', 32, 'Grupo Coras', NULL, 0, 1, '2022-10-24', 99),
(52, '', '', 'Almendra Alvarez', '<p>Centro cambiario y constructora.<br /><br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Av Patria 1841 &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Av Patria 1841 </span></p>', '', '', '', '3331600915', 30, 'Grupo Tellal, y Wall St', NULL, 0, 1, '2022-10-24', 99),
(53, '', '', 'Angelica Oropeza', '<p>JENGIBRE es una empresa joven comprometida con el respeto al cuerpo y su nutrici&oacute;n, buscamos crear conciencia social de alimentaci&oacute;n a trav&eacute;s de productos sustentables, libres de qu&iacute;micos da&ntilde;inos y basados en la filosof&iacute;a de comercio justo, apoyando a productores locales, con estilo de vida en equilibrio con la naturaleza y en armon&iacute;a con el medio ambiente.<br /><br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Av. Providencia 2818 Entre Rub&eacute;n Dario y Alberta CP 44630&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Av. Providencia 2818 Entre Rub&eacute;n Dario y Alberta CP 44630</span></p>', 'www.jengibregdl.com', 'https://www.instagram.com/jengibregdl/', '', '3323738282', 24, 'Jengibre Real Food Store', NULL, 0, 1, '2022-10-24', 99),
(54, '', '', 'Irene Ramirez Bricio', '<p>Asesor&iacute;a patrimonial, venta de seguros todos los ramos individuales y empresariales, contando con el respaldo de diversas Aseguradoras.<br /><br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Ontario 1374 Col Providencia&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Ontario 1374 Col Providencia</span></p>', 'www.lsiconsultores.com', '', 'https://www.facebook.com/profile.php?id=100063753452270', '3336427002', 30, 'LSI ASESORES PATRIMONIALES', NULL, 0, 1, '2022-10-25', 99),
(55, '', '', 'Carolina Moreno', '<p>Odont&oacute;loga especialista en Periodoncia.&nbsp;<br />Avila Camacho 2280 Jardines del Country&nbsp;</p>', '', '', '', '3314664875', 0, 'Consulta dental en Periodoncis', NULL, 0, 1, '2022-10-25', 99),
(56, '', '', 'Sol Romero', '<p>Termos de Acero Inoxidable con personalizado en l&aacute;ser.</p>\r\n<p>Se entregan los termos en el colegio&nbsp;</p>', '', '', '', '3338414657', 31, 'Norday', NULL, 0, 1, '2022-10-25', 99),
(57, '', '', 'Celina Jimen&eacute;z', '<p>VENUE Y ORGANIZACION DE TODO TIPO DE EVENTOS SOCIALES Y CORPORATIVOS.</p>\r\n<p>LUGAR PARA REALIZAR CUALQUIER TIPO DE EVENTO, CATERING, RENTA DE MOBILIARIO, SERVICIO DE MESEROS, ORGANIZACION TOTAL.</p>\r\n<p>VOLCAN CITLALTEPEC 2657 EL COLLI URBANO</p>', 'www.laagavia.com', 'https://www.instagram.com/laagavia.hacienda/', 'https://www.facebook.com/laagavia.hacienda', '3319928084', 36, 'HACIENDA LA AGAVIA', NULL, 0, 1, '2022-10-25', 99),
(58, '', '', 'Sol Romero', '<p>Es una agencia de origen colombiano respaldada por CEIPA, que es un grupo Educativo y empresarial muy importante en Colombia. Esta agencia tiene v&iacute;nculos con universidades en Australia. Es un facilitador para ayudar en todos los tr&aacute;mites que se requieren para que un joven a partir de sus 18 a&ntilde;os pueda ir a estudiar a Australia desde un curso de ingl&eacute;s hasta un diplomado o maestr&iacute;a.&nbsp;<br /><br /></p>', 'https://muvu.com.co/', '', 'https://www.facebook.com/muvuoficial', '3338414657', 35, 'MUV-U Latam', NULL, 0, 1, '2022-10-25', 99),
(59, '', '', 'Marcela Karthe / Luis Montes de Oca / Camile y Martina Montes de Oca', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Desarrollo de parques industriales . Venta y renta de naves industriales dentro de parque industrial&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Desarrollo de parques industriales. Venta y renta de naves industriales dentro de parque industrial.</span></p>', 'www.eliteindustrial.mx', '', 'https://www.facebook.com/eliteparquesindustriales', '3335782562', 6, 'Elite Parques Industriales', NULL, 0, 1, '2022-10-25', 99),
(60, '', '', 'Maria Gabriela De la Mora Bola&ntilde;os', '<p>Defiant y Adikto sportwear son unas marcas 100% mexicanas que nacieron en Guadalajara ante la necesidad de su fundadora Gabriela De la mora de encontrar una soluci&oacute;n a la comodidad, dise&ntilde;o, exclusividad y alta calidad requerida en cualquier deporte; maquilamos todo tipo de uniformes deportivos tanto de l&iacute;nea como personalizados ya sea para equipos, escuelas deportivas, y/o publicidad, utilizamos telas con tecnolog&iacute;a cient&iacute;fica como lo es Laftech sun con protecci&oacute;n solar FPS+50, laftech antibacterial, de secado r&aacute;pido y con capa protectora antibacterial para que la prenda no guarde olores, probada y atesorada por los atletas que conocen las exigencias que los mismos requieren y que combina perfectamente la calidad y comodidad sin descuidar ning&uacute;n detalle es maquilada a mano, por artesanos mexicanos pero con tela de la mas alta calidad de importaci&oacute;n colombiana e italiana, Pad y el&aacute;sticos de gel Italiano. Y sus productos van desde uniformes para futbol soccer, ciclismo, nataci&oacute;n, triatlon, atletismo hasta futbol americano y gorras y playeras de algod&oacute;n publicitarias con bordado.&nbsp;</p>', 'www.defiantsportwear.com', 'https://www.instagram.com/defiant_sportwear/', 'https://www.facebook.com/Defiantsport', '3338098621', 37, 'Defiant-Adikto sportwear', NULL, 0, 1, '2022-10-25', 99),
(61, '', '', 'Karla Ch&aacute;vez Mu&ntilde;oz', '<p>Dise&ntilde;o de interiores y fabricaci&oacute;n de muebles a la medida.<br /><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Atencion personalizada, todo a medida/seg&uacute;n dise&ntilde;o&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Atencion personalizada, todo a medida/seg&uacute;n dise&ntilde;o.<br /><br /></span></p>', '', 'https://www.instagram.com/karanataller/', '', '3331872434', 11, 'KARANA Taller e Interiorismo', NULL, 0, 1, '2022-10-25', 99),
(62, '', '', 'Mario Collignon', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Dedicados a la creaci&oacute;n de bebidas alcoholics mexicanas y regalos corporativos.<br /><br /></span></p>', '', '', '', '3333783947', 38, 'Black lobo spirits', NULL, 0, 1, '2022-10-25', 99),
(63, '', '', 'Mar&iacute;a de Lourdes Godinez Palafox', '<p>Arquitecta, dedicada a realizar proyecto de casa habitaci&oacute;n o locales comerciales hasta su construcci&oacute;n y entrega.</p>', '', '', '', '3315377074', 2, 'Mar&iacute;a de Lourdes Godinez Palafox', NULL, 0, 1, '2022-10-25', 99),
(64, '', '', 'Andrea P&eacute;rez Vergara', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Negocio de art&iacute;culos de fiesta y regalos.<br />Globos para eventos, bouquetes de globos, globos personalizados, desechables, velas, envolturas de regalo, manteles, gorros etc.<br /><br />Av san Ignacio 906 local 8 arriba de mariana gall&oacute; la pasteler&iacute;a Chapalita&nbsp;<br /></span></p>', '', 'https://www.instagram.com/yukipartystore/', 'https://www.facebook.com/profile.php?id=100066378916505', '3312502519', 36, 'Yuki Party', NULL, 0, 1, '2022-10-25', 99),
(65, '', '', 'Jos&eacute; Luis Su&aacute;rez', '<p>Cl&iacute;nica equipada para ofrecer tratamiento de hemodi&aacute;lisis a pacientes renales. Se trabaja con aseguradoras tambi&eacute;n.<br /><br />Av Ni&ntilde;os h&eacute;roes 2535 Jardines del bosque Guadalajara Jalisco&nbsp;</p>', '', '', '', '3331221978', 32, 'Clinica San Diego Lebens haus', NULL, 0, 1, '2022-10-25', 99),
(66, '', '', 'Abisai Dominguez Blanco', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Comercializadora de productos y herramientas de Belleza (M&aacute;quinas para Corte de Cabello, Planchas para Cabello, Secadoras de Cabello, Productos para el Cuidado del Cabello etc.)</span></p>\r\n<p>&nbsp;</p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Plaza Joyalia Dionisio Rodr&iacute;guez No. 125 int 291 Col. San Juan de Dios, Guadalajara, Jalisco C.P. 44360</span></p>', '', '', 'https://www.facebook.com/beltecib86', '3314481904', 39, 'BelTec IB', NULL, 0, 1, '2022-10-25', 99),
(67, '', '', 'Francisco Javier Flores Robles', '<p>Consultoria en las &aacute;reas jur&iacute;dicas, notariales e inmobiliarias, enfocados en proporcionar las mejores herramientas corporativas para el correcto funcionamiento de su negocio o empresa, manejamos las materias corporativa, fiscal, laboral, financiera, mercantil, familiar, en particular vida de gobierno corporativo, todo tipo de contratos, sucesiones, divorcios, todo ello fortalecido por mecanismos de Justicia Alternativa o Justicia privada, ya que contamos con prestadores certificados por el Poder Judicial del Estado de Jalisco.</p>\r\n<p>Calle Buenos Aires n&uacute;mero 3060, 202, Colonia Providencia Cuarta Secci&oacute;n, en Guadalajara, Jalisco, C&oacute;digo Postal 44630</p>', 'www.grupobratila.com', '', 'https://www.facebook.com/profile.php?id=100077696171591', '3338221668', 30, 'Grupo Bratila', NULL, 0, 1, '2022-10-25', 99),
(68, '', '', 'Sofia Blum L&oacute;pez', '<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Dise&ntilde;o y fabricaci&oacute;n de bisuter&iacute;a y joyer&iacute;a de acero, plata y chapa de oro.</span></p>\r\n<p><span data-sheets-value=\"{\" data-sheets-userformat=\"{\">Av Las Palmas 150 int b-12</span></p>', 'www.sofiablum.com', 'https://www.instagram.com/sofiablumjewelry/', 'https://www.facebook.com/Sofia.Blum.Jewelry.Designs', '3319413980', 16, 'Sofia Blum Jewelry', NULL, 0, 1, '2022-10-25', 99),
(69, '', '', 'Adriana Menchaca Guerra', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Estrategia comercial y de Mercadotecnia para centros comerciales. Dise&ntilde;o de experiencias para centros comerciales. &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Estrategia comercial y de Mercadotecnia para centros comerciales. Dise&ntilde;o de experiencias para centros comerciales. </span></p>', '', 'https://www.instagram.com/adestudiocreativo/', '', '3311471109', 30, 'Estrategia de comercializaci&oacute;n para centros comerciales y retail', NULL, 0, 1, '2022-10-25', 99),
(70, '', '', 'Stefan Widmer', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Con Mexpando hacemos un 2B2 Lead Management en el mercado Mexicano. Creamos listas de contactos basandonos en datos publicos (INEGI, LinkedIn, etc.) y contactamos a estos contactos / leads para agendar sales meetings para nuestros clientes. Nuestros clientes son empresas extranjeras tanto como mexicanas. Mas detalles bajo www.mexpando.com&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Con Mexpando hacemos un 2B2 Lead Management en el mercado Mexicano. Creamos listas de contactos basandonos en datos publicos (INEGI, LinkedIn, etc.) y contactamos a estos contactos / leads para agendar sales meetings para nuestros clientes. Nuestros clientes son empresas extranjeras tanto como mexicanas. Mas detalles bajo www.mexpando.com</span></p>', 'www.mexpando.com', '', '', '3318650917', 30, 'Mexpando S.A. DE C.V.', NULL, 0, 1, '2022-10-25', 99),
(71, '', '', 'Jorge Eduardo', '<p>Actualmente nos encontramos desarrollando soluciones tecnol&oacute;gicas tanto de hardware c&oacute;mo de software tipo IoT. Nuestro proyecto principal en desarrollo es un dispositivo de localizaci&oacute;n GPS + UWB que hemos estado realizando desde el hardware hasta la programaci&oacute;n del software embebido, y buscamos lograr brindar otras soluciones de tecnolog&iacute;a similar. As&iacute; mismo y como proyecto fundador se cuenta con un sistema de rayos X e imagenologia que ofrecemos como servicio con varios a&ntilde;os de experiencia.<br /><br />Av. Pase de las aves 2442 Int 107</p>', 'https://soletracking.com', '', '', '3318041648', 30, 'Soluciones M&eacute;dicas del Pac&iacute;fico', NULL, 0, 1, '2022-10-25', 99),
(72, '', '', 'RAFAEL VELASCO MICHEL', '<p>Me dedico a la fabricaci&oacute;n de uniformes para empresas. Camisas, pantalones, chamarras, etc. As&iacute; mismo la elaboraci&oacute;n de ropa m&eacute;dica desechable: Bata paciente y cirujano. Uniforme quir&uacute;rgico. Gorro enfermera y cirujano. Botas para quir&oacute;fano.equipos para cirug&iacute;as.&nbsp;</p>\r\n<p>Ropa M&eacute;dica desechable. Uniformes y vestuarios Material M&eacute;dico</p>', '', '', '', '3318475997', 20, 'DISTRIBUIDORA MICHEL', NULL, 0, 1, '2022-10-25', 99),
(73, '', '', 'Antonio Salles', '<p>Producci&oacute;n de Tequila y Hoteleria.<br /><br />La Villa #3 Tequila Jal</p>', 'www.tequileno.com', '', '', '3746880388', 38, 'Jorge Salles Cuervo Sucesores', NULL, 0, 1, '2022-10-25', 99),
(74, '', '', 'Patricia Bravo &Aacute;guila', '<p>Asesor&iacute;a y venta de productos Suizos de aromaterapia&nbsp;</p>', 'www.just.com.mx/PATYBRAVO', 'https://www.instagram.com/swissjust_patybravo/', '', '3334841726', 9, 'Just Swiss', NULL, 0, 1, '2022-10-25', 99),
(75, '', '', 'Jorge Sanz Cerrada', '<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Empresa dedicada a la promoci&oacute;n del ahorro y la protecci&oacute;n patrimonial, as&iacute; como inversi&oacute;n a corto y largo plazo en instrumentos internacionales que ofrecen altos rendimientos a diferentes plazos.&quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Empresa dedicada a la promoci&oacute;n del ahorro y la protecci&oacute;n patrimonial, as&iacute; como inversi&oacute;n a corto y largo plazo en instrumentos internacionales que ofrecen altos rendimientos a diferentes plazos.</span></p>', '', '', 'https://www.facebook.com/profile.php?id=100067299548952', '3314662250', 23, 'Increse Seguros, Fianzas e Inversiones Internacionales', NULL, 0, 1, '2022-10-25', 99),
(76, '', '', 'Carmen Zamudio', '<p>Consultas y Terapias de Ayurveda donde abarcamos el cuidado de la Mente -Cuerpo-Alma; alimentaci&oacute;n consciente y Homeopatia, as&iacute; como venta de productos ayurv&eacute;dicos.</p>\r\n<p>&nbsp;</p>\r\n<p><span data-sheets-value=\"{&quot;1&quot;:2,&quot;2&quot;:&quot;Rinconada del Camichin 1327 interior 98, Real de Valdepe&ntilde;as, Zapopan Jalisco &quot;}\" data-sheets-userformat=\"{&quot;2&quot;:33568769,&quot;3&quot;:{&quot;1&quot;:0,&quot;3&quot;:1},&quot;14&quot;:{&quot;1&quot;:3,&quot;3&quot;:1},&quot;15&quot;:&quot;Calibri&quot;,&quot;16&quot;:11,&quot;28&quot;:1}\">Rinconada del Camichin 1327 interior 98, Real de Valdepe&ntilde;as, Zapopan Jalisco </span></p>', '', 'https://www.instagram.com/sanaenequilibrio/', '', '3317242849', 9, 'Sana en equilibrio&nbsp;', NULL, 0, 1, '2022-10-25', 99),
(77, '', '', 'David de Santiago Gonz&aacute;lez', '<p>Consultor&iacute;a de estrategia para la transformaci&oacute;n o evoluci&oacute;n digital de negocios.</p>\r\n<p>Consultor&iacute;a en: -&gt;Ecommerce (Marketing/Tecnolog&iacute;a/UX/CX/Comercial/Log&iacute;stica) para venta en modo B2B, B2C, Omnicanal (fisico y digital), Multicanal (marketplaces), leads -&gt; Transformaci&oacute;n Digital enfocado en Redise&ntilde;o de Procesos, Arquitectura Tecnol&oacute;gica, Eficiencia Operativa, Estrategia Digital (iniciativas de mejora)</p>\r\n<p>&nbsp;</p>', '', '', '', '5540108361', 5, 'Consulta Digital', NULL, 0, 1, '2022-10-25', 99);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoscat`
--

CREATE TABLE `productoscat` (
  `id` int(11) NOT NULL,
  `parent` int(2) NOT NULL,
  `txt` text COLLATE latin1_spanish_ci,
  `imagen` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `imagenhover` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estatus` int(1) NOT NULL DEFAULT '0',
  `orden` int(2) NOT NULL DEFAULT '99'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productospic`
--

CREATE TABLE `productospic` (
  `id` int(10) NOT NULL,
  `producto` int(10) NOT NULL,
  `titulo` text COLLATE latin1_spanish_ci,
  `title` text COLLATE latin1_spanish_ci,
  `txt` text COLLATE latin1_spanish_ci,
  `orden` int(2) NOT NULL DEFAULT '99'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(10) NOT NULL,
  `titulo` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `txt` text COLLATE utf8_spanish_ci,
  `txtdetalle` text COLLATE utf8_spanish_ci,
  `color` varchar(50) COLLATE utf8_spanish_ci DEFAULT '#8c2c95',
  `estatus` int(1) NOT NULL DEFAULT '0',
  `fecha` date DEFAULT NULL,
  `orden` int(2) DEFAULT '99',
  `imagen` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `titulo`, `txt`, `txtdetalle`, `color`, `estatus`, `fecha`, `orden`, `imagen`) VALUES
(1, 'Software', '<p>Dise&ntilde;o en general, editorial, de empaque impreso, etc.</p>', NULL, 'red', 0, '2020-01-02', 0, '2020-03-16924792316.png'),
(2, 'Arquitectura', '<p>Dise&ntilde;o de imagen, papeler&iacute;a corporativa, iconos, presentaciones, etc.</p>', 'ASFASASD', '#8c2c95', 0, '2020-01-10', 1, '2020-03-16649352735.png'),
(3, 'Redes Sociales', '<p>Gesti&oacute;n de redes, desarrollo de campa&ntilde;as y publicidad digital.</p>', NULL, '#8c2c95', 0, '2020-01-10', 2, '2020-03-16535128297.png'),
(4, 'Multimedia', '<p>Fotograf&iacute;a y Producci&oacute;n de v&iacute;deos interior y exterior.</p>', NULL, '#8c2c95', 0, '2020-03-08', 99, '2020-03-16452128008.jpg'),
(5, 'Consultor&iacute;a', '<p>Imagen institucional, funcionamiento web e imagen personal.</p>', NULL, '#8c2c95', 0, '2020-03-08', 99, '2020-03-16628024214.png'),
(6, 'Venta o renta', '<p>Desarrollo web, E-Commerce, SEO, Dise&ntilde;o de interfaz y UX</p>', NULL, '#8c2c95', 0, '2020-03-08', 99, '2020-03-16132409258.png'),
(7, 'Restaurantes', '', NULL, '#8c2c95', 0, '2020-03-27', 99, NULL),
(8, 'Entretenimiento', '', NULL, '#8c2c95', 0, '2020-03-27', 99, NULL),
(9, 'BIENESTAR', '', NULL, '#8c2c95', 0, '2020-03-27', 99, NULL),
(10, 'nombre', '', NULL, '#8c2c95', 0, '2022-09-13', 99, NULL),
(11, 'Decoraci&oacute;n', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(12, 'Logistica', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(13, 'Arte', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(14, 'Electricidad', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(15, 'Mascotas', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(16, 'Joyeria', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(17, 'Bienes raices', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(18, 'Papeler&iacute;a', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(19, 'Asociaci&oacute;n civil', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(20, 'Textil', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(21, 'Transporte', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(22, 'Imprenta', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(23, 'Financiera', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(24, 'Alimentos', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(25, 'Psicolog&iacute;a', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(26, 'Electr&oacute;nica', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(27, 'Software', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(28, 'Hospedaje', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(29, 'Reposter&iacute;a', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(30, 'Servicios', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(31, 'Regalos', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(32, 'Salud', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(33, 'Salud', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(34, 'Construcci&oacute;n', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(35, 'Educaci&oacute;n', '', NULL, '#8c2c95', 0, '2022-10-24', 99, NULL),
(36, 'Eventos', '', NULL, '#8c2c95', 0, '2022-10-25', 99, NULL),
(37, 'Deportivo', '', NULL, '#8c2c95', 0, '2022-10-25', 99, NULL),
(38, 'Bebidas Alcoh&oacute;licas', '', NULL, '#8c2c95', 0, '2022-10-25', 99, NULL),
(39, 'Belleza', '', NULL, '#8c2c95', 0, '2022-10-25', 99, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `user` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `nivel` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `user`, `pass`, `fecha`, `nivel`) VALUES
(1, 'efra', '12eb5fef578326a527019871e4ca1c35', '2019-09-16 00:00:00', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nivel` int(1) NOT NULL DEFAULT '0',
  `distribuidor` int(1) NOT NULL DEFAULT '0',
  `alta` date DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `udate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `empresa` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rfc` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `calle` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `noexterior` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nointerior` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entrecalles` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci DEFAULT 'Mexico',
  `estado` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `colonia` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cp` varchar(11) COLLATE utf8_spanish_ci DEFAULT NULL,
  `calle2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `noexterior2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nointerior2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `entrecalles2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais2` varchar(100) COLLATE utf8_spanish_ci DEFAULT 'Mexico',
  `estado2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `municipio2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `colonia2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cp2` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `carousel2`
--
ALTER TABLE `carousel2`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ipn`
--
ALTER TABLE `ipn`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productoscat`
--
ALTER TABLE `productoscat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `productospic`
--
ALTER TABLE `productospic`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `carousel2`
--
ALTER TABLE `carousel2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `configuracion`
--
ALTER TABLE `configuracion`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ipn`
--
ALTER TABLE `ipn`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `productoscat`
--
ALTER TABLE `productoscat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productospic`
--
ALTER TABLE `productospic`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
