CREATE TABLE `viajes` (
  `codviaje` varchar(100) NOT NULL,
  `destino` varchar(60) DEFAULT NULL,
  `precio` integer(100) DEFAULT NULL,
  `oferta` varchar(100) DEFAULT NULL,
  `tipo` varchar(100) DEFAULT NULL,
  `f_salida` varchar(30) DEFAULT NULL,
  `f_vuelta` varchar(30) DEFAULT NULL,
  `hora_alta` varchar(255) DEFAULT NULL,
  `fecha_alta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`codviaje`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;