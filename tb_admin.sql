# Host: localhost  (Version: 5.5.27)
# Date: 2016-03-02 03:09:11
# Generator: MySQL-Front 5.3  (Build 4.175)

/*!40101 SET NAMES latin1 */;

#
# Structure for table "admin"
#

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL AUTO_INCREMENT,
  `nomeAdmin` varchar(200) NOT NULL DEFAULT '',
  `emailAdmin` varchar(100) NOT NULL DEFAULT '',
  `hashAdmin` varchar(255) NOT NULL DEFAULT '',
  `senhaAdmin` varchar(255) NOT NULL DEFAULT '',
  `statusAdmin` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "admin"
#

INSERT INTO `admin` VALUES (1,'teste','teste@teste.com','d41d8cd98f00b204e9800998ecf8427e','teste','1');
