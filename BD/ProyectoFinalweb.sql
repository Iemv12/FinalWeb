/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.10-MariaDB : Database - coronavirus
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coronavirus` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coronavirus`;

/*Table structure for table `casos` */

DROP TABLE IF EXISTS `casos`;

CREATE TABLE `casos` (
  `id_casos` int(25) NOT NULL AUTO_INCREMENT,
  `fecha_contagio` date DEFAULT NULL,
  `pais` varchar(255) DEFAULT NULL,
  `ciudad` varchar(255) DEFAULT NULL,
  `longitud` double(10,7) DEFAULT NULL,
  `latitud` double(10,7) DEFAULT NULL,
  `cedula` varchar(11) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `comentario` varchar(1000) DEFAULT NULL,
  `fecha_guardado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_casos`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `casos` */

insert  into `casos`(`id_casos`,`fecha_contagio`,`pais`,`ciudad`,`longitud`,`latitud`,`cedula`,`nombre`,`apellido`,`fecha_nacimiento`,`comentario`,`fecha_guardado`) values (1,'2020-04-06','República Dominicana','Santo Domingo',-69.3374630,18.7919180,'40228119125','Ivan','Matos','1999-07-12','Era bueno','2020-04-06 14:01:03');

/*Table structure for table `noticias` */

DROP TABLE IF EXISTS `noticias`;

CREATE TABLE `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `resumen` text DEFAULT NULL,
  `contenido` text DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `fecha_guardado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `noticias` */

insert  into `noticias`(`id`,`titulo`,`fecha`,`resumen`,`contenido`,`imagen`,`fecha_guardado`) values (1,'En santo domingo hay 25 mil infectados','2020-04-06','Aumenta el numero de infectados en la ciudad de santo domingo','Cada dia aumenta mas la cantidad de personas infectadas en la ciudad de santo domingo','noticias/FotoITLA.jpeg','2020-04-06 14:07:35'),(2,'En santo domingo hay 25 mil infectados','2020-04-06','Aumenta el numero de infectados en la ciudad de santo domingo','Cada dia aumenta mas la cantidad de personas infectadas en la ciudad de santo domingo','noticias/FotoITLA.jpeg','2020-04-06 14:08:36');

/*Table structure for table `users_tbl` */

DROP TABLE IF EXISTS `users_tbl`;

CREATE TABLE `users_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `rol` int(2) NOT NULL,
  `foto` varchar(101) DEFAULT NULL,
  `fecha_guardado` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `users_tbl` */

insert  into `users_tbl`(`id`,`nombre`,`usuario`,`email`,`password`,`rol`,`foto`,`fecha_guardado`) values (1,'ivan','ivan12','ivan@gmail.com','123456',1,'fotousuario/mifoto.jpg','2020-04-06 11:16:00'),(2,'ivan','ivan07','ivanmatosvillar@gmai','123456',2,'fotousuario/mifoto.jpg','2020-04-06 11:19:12'),(3,'Edwal','edwal','Edwal@gmail.com','123456',2,'fotousuario/Mifoto.jpg.png','2020-04-06 14:10:02'),(4,'Edwal','edwal','Edwal@gmail.com','123456',2,'fotousuario/Mifoto.jpg.png','2020-04-06 14:10:20');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
