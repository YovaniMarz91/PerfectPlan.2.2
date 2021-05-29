-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para perfectplan
CREATE DATABASE IF NOT EXISTS `perfectplan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `perfectplan`;

-- Volcando estructura para tabla perfectplan.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  KEY `Índice 1` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla perfectplan.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id_usuario`, `nombre`, `email`, `ubicacion`, `contrasena`) VALUES
	(29, 'Yovani', 'yovanimarz91@gmail.com', 'santa Elena', '$2y$10$K9beNk23.EwPfseNGeQhbuS0TU6PLOhCVtPPHvVAdY3oEO8v0iv4i'),
	(31, 'Angel Bran', 'angelbranm@gmail.com', 'Santa Elena', '$2y$10$NU6Oqie3QFnhco1JUuBjj.2Zz.SqagZDToakQdUc2ikGDspY0Vlbu'),
	(32, 'Angel', 'Angel@gmail.com', 'Santa', '$2y$10$n0flL2Zk6tCG0JDJDVrR0.532cbgSndNXtmXam3tEtsB4lUEEQtRO'),
	(33, 'Angel', 'Angel2@gmail.com', 'Santa', '$2y$10$QbfPYNi8eOkmvdP.8ujNEOUyYIn8hWo7YFSQAaeG7Ji0sX4k0Gr6G');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
