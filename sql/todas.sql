chat 
	
CREATE TABLE `chat` (
 `id` int(50) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) NOT NULL,
 `msg` varchar(255) NOT NULL,
 `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=264 DEFAULT CHARSET=latin1

estudiante 	

CREATE TABLE `estudiante` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
 `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
 `sexo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 `matricula` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 `carrera` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 `email` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=150 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci

libros_d 	

CREATE TABLE `libros_d` (
 `id_libro` int(11) NOT NULL AUTO_INCREMENT,
 `Autor` varchar(64) NOT NULL,
 `Titulo` varchar(128) NOT NULL,
 `edicion` varchar(32) NOT NULL,
 `año` varchar(32) NOT NULL,
 `origen` varchar(32) NOT NULL,
 `Area` varchar(32) NOT NULL,
 `Materia` varchar(32) NOT NULL,
 `Comentario` varchar(128) NOT NULL,
 `Archivo` varchar(128) NOT NULL,
 `tipo` varchar(32) NOT NULL,
 PRIMARY KEY (`id_libro`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8

users
 	
CREATE TABLE `users` (
 `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
 `user` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
 `passwd` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
 `email` varchar(100) COLLATE latin1_spanish_ci NOT NULL,
 `rol` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci