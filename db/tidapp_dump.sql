/*
SQLyog Community
MySQL - 5.7.31 : Database - tidsapp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `activities` */

CREATE TABLE `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

/*Data for the table `activities` */

insert  into `activities`(`id`,`activity`) values 
(1,'Skapat databas'),
(2,'Slötittat på YouTube'),
(3,'Testat backend'),
(4,'Halvsovit till NetFlix');

/*Table structure for table `tasks` */

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activityId` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `description` varchar(255) COLLATE utf8_swedish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `PK_ActivityId` (`activityId`),
  CONSTRAINT `PK_ActivityId` FOREIGN KEY (`activityId`) REFERENCES `activities` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

/*Data for the table `tasks` */

insert  into `tasks`(`id`,`activityId`,`date`,`time`,`description`) values 
(1,1,'2022-01-28','01:10:00','Testing testing'),
(2,1,'2022-01-26','00:50:00','Testing festing'),
(3,2,'2022-01-25','00:55:00','Testing guesting'),
(4,2,'2022-01-08','01:45:00','Blaha blahä'),
(5,2,'2022-02-03','05:00:00','Hurra!'),
(6,3,'2022-01-25','02:25:00','Ny post'),
(7,2,'2022-02-01','03:10:00','Flera rader'),
(8,3,'2022-01-29','08:00:00',NULL),
(9,3,'2022-02-07','07:59:00',NULL),
(10,3,'2022-02-01','07:59:00',NULL),
(11,3,'2022-02-04','07:59:00',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
