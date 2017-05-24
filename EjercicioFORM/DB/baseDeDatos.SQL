CREATE DATABASE registro;
use registro;

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(60) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `f_nac` varchar(30) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `hora_alta` varchar(255) DEFAULT NULL,
  `fecha_alta` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;