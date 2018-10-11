CREATE TABLE `carteles` (
 `id_cartel` int(11) NOT NULL AUTO_INCREMENT,
 `categoria` varchar(25) NOT NULL DEFAULT '''AGENDA''',
 `titulo` text NOT NULL,
 `texto` text,
 `imagen` varchar(128) DEFAULT NULL,
 `plantilla` int(11) DEFAULT '1',
 `v_desde` varchar(20) DEFAULT NULL,
 `v_hasta` varchar(20) DEFAULT NULL,
 `activo` int(11) NOT NULL DEFAULT '1',
 `link` varchar(128) DEFAULT NULL,
 `texto1` text,
 `texto2` text,
 `imagen1` text,
 PRIMARY KEY (`id_cartel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8