# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.42)
# Database: buskeeper_db
# Generation Time: 2017-01-03 02:00:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cms_settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_settings`;

CREATE TABLE `cms_settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `sid` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `type` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cms_settings` WRITE;
/*!40000 ALTER TABLE `cms_settings` DISABLE KEYS */;

INSERT INTO `cms_settings` (`id`, `sid`, `name`, `value`, `type`, `modified`)
VALUES
	(1,'oEAbW8S','navbar_brand_logo','/files/settings/jWbDKlWez.png','image','2017-01-02 19:27:56'),
	(2,'mRfcZLs','website_front_image','/files/settings/CalPc9Z9o.jpg','image','2017-01-02 19:27:58'),
	(3,'leMlnge','website_front_logo','/files/settings/P2MnLU5Yh.png','image','2017-01-02 19:27:58'),
	(4,'FUjfXs','website_name','BusKeeper - Registra y evalúa la calidad del transporte público.','text','2017-01-02 19:27:56'),
	(7,'d9ZoPku','website_favicon','/files/settings/P8EQQ8awO.png','image','2017-01-02 19:27:58'),
	(8,'yfcNKy','website_description','Monitorea la calidad del transporte público de tu ciudad. Comparte los resultados con tus amigos.','text','2017-01-02 19:27:56'),
	(9,'mVBXXEe','website_keywords','autobus, camión, transporte publico, control, vial, denuncia, registra, evalua','text','2017-01-02 19:27:56'),
	(10,'jKblvvL','website_share_image','/files/settings/URY5opzr.jpg',NULL,'2017-01-02 19:27:58'),
	(11,'b1y1vdjM','website_front_video','/files/settings/xAp3JITTI.mp4',NULL,'2017-01-02 19:27:58'),
	(12,'cjvQ5Sn6','website_front_text','',NULL,'2017-01-02 19:27:58');

/*!40000 ALTER TABLE `cms_settings` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_user_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_user_types`;

CREATE TABLE `cms_user_types` (
  `id` bigint(20) unsigned NOT NULL,
  `sid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `info` text COLLATE utf8_unicode_ci NOT NULL,
  `permissions` varchar(2500) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cms_user_types` WRITE;
/*!40000 ALTER TABLE `cms_user_types` DISABLE KEYS */;

INSERT INTO `cms_user_types` (`id`, `sid`, `name`, `role`, `info`, `permissions`)
VALUES
	(1,'qpJa8IL','Super administrador','super-admin','Solo el super administrador tiene control de dar de alta administradores, y modificar las propiedades del proyecto como las secciones y la estructura.','{\"Dashboard\":{\"controller\":\"Dashboard\",\"actions\":{\"index\":{\"label\":\"Dashboard\",\"navbar\":1},\"*\":[]}},\"Users\":{\"controller\":\"Users\",\"actions\":{\"index\":{\"label\":\"Users\",\"navbar\":1,\"dropdown\":\"Users\"},\"*\":[]}},\"User Types\":{\"controller\":\"UserTypes\",\"actions\":{\"index\":{\"label\":\"User Types\",\"navbar\":1,\"dropdown\":\"Users\"},\"*\":[]}},\"Settings\":{\"controller\":\"Settings\",\"actions\":{\"index\":{\"label\":\"Settings\"},\"*\":[]}}}'),
	(2,'BsizYH','Administrador','admin','Administrador da de alta todos los usuarios por debajo de su role.','{\"Users\":{\"controller\":\"Users\",\"actions\":{\"index\":{\"label\":\"Users\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Users Types\":{\"controller\":\"UserTypes\",\"actions\":{\"index\":{\"label\":\"Users Types\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Settings\":{\"controller\":\"Settings\",\"actions\":{\"index\":{\"label\":\"Settings\",\"navbar\":0},\"*\":[]}}}'),
	(3,'CCIBR7','Editor','editor','No tiene permisos de usuarios pero puede manipular la base de datos.','{\"Users\":{\"controller\":\"Users\",\"actions\":{\"index\":{\"label\":\"Users\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Users Types\":{\"controller\":\"UserTypes\",\"actions\":{\"index\":{\"label\":\"Users Types\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Settings\":{\"controller\":\"Settings\",\"actions\":{\"index\":{\"label\":\"Settings\",\"navbar\":0},\"*\":[]}}}'),
	(4,'mVz4kXl','Visitante','visitor','Usuario con acceso a el contenido sin permisos de modificar ni crear.','{\"Users\":{\"controller\":\"Users\",\"actions\":{\"index\":{\"label\":\"Users\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Users Types\":{\"controller\":\"UserTypes\",\"actions\":{\"index\":{\"label\":\"Users Types\",\"navbar\":1},\"view\":[],\"edit\":[],\"add\":[],\"delete\":[]}},\"Settings\":{\"controller\":\"Settings\",\"actions\":{\"index\":{\"label\":\"Settings\",\"navbar\":0},\"*\":[]}}}');

/*!40000 ALTER TABLE `cms_user_types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cms_users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cms_users`;

CREATE TABLE `cms_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `sid` varchar(255) DEFAULT NULL,
  `user_type_id` bigint(20) unsigned NOT NULL DEFAULT '1',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT 'encrypted',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `cms_users` WRITE;
/*!40000 ALTER TABLE `cms_users` DISABLE KEYS */;

INSERT INTO `cms_users` (`id`, `sid`, `user_type_id`, `username`, `email`, `name`, `password`, `active`, `created`, `modified`)
VALUES
	(1,'mYPAai6',1,'bogue89@gmail.com','bogue89@gmail.com','Jorge Benavides','$2y$10$fjJH8ANrMx.ii8Om0hVN7.aKZn5R6i2WZRN5h6563vmsocvVTVmjG',1,'2012-11-09 18:18:25','2016-11-03 16:55:57');

/*!40000 ALTER TABLE `cms_users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
