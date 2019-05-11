SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `departamentos`
-- -------------------------------------------------

DROP TABLE IF EXISTS `departamentos`;
CREATE TABLE IF NOT EXISTS `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acronimo` varchar(10)  NOT NULL,
  `nombre` varchar(255)  NOT NULL,
  `descripcion` varchar(255)  NOT NULL DEFAULT '--',
  `imagen` varchar(255) NOT NULL DEFAULT 'etsit.jpg',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `departamentos`
-- ----------------------------

INSERT INTO `departamentos` VALUES ('1', 'DIT', 'Departamento de Ingeniería de Sistemas Telemáticos', 
'El departamento de Ingeniería de Sistemas Telemáticos desempeña tareas de docencia e investigación en redes y servicios telemáticos.', 'dit.jpg'), 
('2', 'SSR', 'Departamento de Señales, Sistemas y Radiotelecomunicación', 
'El departamento SSR fue creado en 1987 y trabaja en las áreas de radio, tratamiento de la señal y comunicaciones.', 'ssr.jpg'), 
('3','DIE', 'Departamento de Ingeniería Electrónica',
 'El departamento DIE agrupa profesores e investigadores en microelectrónica, tecnologías de habla y electrónica de alta velocidad', 'die.jpg');




