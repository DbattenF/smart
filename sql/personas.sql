CREATE TABLE `personas` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
 `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
 `sexo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 `dni` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
 `carrera` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
 `telefono` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
 `email` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
 `user` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
 `passwd` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
 `rol` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci
