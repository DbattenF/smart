
CREATE TABLE `pwd`.`libros_d` (
  `id_libro` int(11) NOT NULL,
  `Autor` varchar(64) NOT NULL,
  `Titulo` varchar(128) NOT NULL,
  `edicion` varchar(32) NOT NULL,
  `año` varchar(32) NOT NULL,
  `origen` varchar(32) NOT NULL,
  `Area` varchar(32) NOT NULL,
  `Materia` varchar(32) NOT NULL,
  `Comentario` varchar(128) NOT NULL,
  `Archivo` varchar(128) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `libros_d` ADD PRIMARY KEY(`id_libro`);

ALTER TABLE `libros_d` CHANGE `id_libro` `id_libro` INT(11) NOT NULL AUTO_INCREMENT;
