-- MySQL dump 10.13  Distrib 5.7.25, for osx10.9 (x86_64)
--
-- Host: localhost    Database: laraclassified
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `<<prefix>>subadmin1`
--

/*!40000 ALTER TABLE `<<prefix>>subadmin1` DISABLE KEYS */;
INSERT INTO `<<prefix>>subadmin1` VALUES (3366,'TF.02','TF','Crozet','Crozet',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (3367,'TF.03','TF','Kerguelen','Kerguelen',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (3368,'TF.01','TF','Saint-Paul-et-Amsterdam','Saint-Paul-et-Amsterdam',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (3369,'TF.05','TF','Îles Éparses','Iles Eparses',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (3370,'TF.04','TF','Terre-Adélie','Terre-Adelie',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>subadmin2`
--

/*!40000 ALTER TABLE `<<prefix>>subadmin2` DISABLE KEYS */;
INSERT INTO `<<prefix>>subadmin2` VALUES (36292,'TF.05.TE','TF','TF.05','Tromelin Island','Tromelin Island',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (36293,'TF.05.EU','TF','TF.05','Europa Island','Europa Island',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (36294,'TF.05.BS','TF','TF.05','Bassas da India','Bassas da India',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (36295,'TF.05.JU','TF','TF.05','Juan de Nova Island','Juan de Nova Island',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (36296,'TF.05.GO','TF','TF.05','Glorioso Islands','Glorioso Islands',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>cities`
--

/*!40000 ALTER TABLE `<<prefix>>cities` DISABLE KEYS */;
INSERT INTO `<<prefix>>cities` VALUES (1546102,'TF','Port-aux-Français','Port-aux-Francais',-49.3492,70.2194,'P','PPLC','TF.03',NULL,45,'Indian/Kerguelen',1,'2018-08-16 23:00:00','2018-08-16 23:00:00');
/*!40000 ALTER TABLE `<<prefix>>cities` ENABLE KEYS */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed
