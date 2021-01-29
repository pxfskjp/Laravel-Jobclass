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
INSERT INTO `<<prefix>>subadmin1` VALUES (1060,'GL.04','GL','Kujalleq','Kujalleq',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (1061,'GL.06','GL','Qeqqata','Qeqqata',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (1062,'GL.07','GL','Sermersooq','Sermersooq',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (1063,'GL.11839534','GL','Qeqertalik','Qeqertalik',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (1064,'GL.11839537','GL','Avannaata','Avannaata',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (1065,'GL.00','GL','','Qaasuitsup Kommunia',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>subadmin2`
--

/*!40000 ALTER TABLE `<<prefix>>subadmin2` DISABLE KEYS */;
INSERT INTO `<<prefix>>subadmin2` VALUES (13741,'GL.04.3420847','GL','GL.04','Qaqortoq Municipality','Qaqortoq Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (13742,'GL.04.3421723','GL','GL.04','Narsaq Municipality','Narsaq Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (13743,'GL.04.3421767','GL','GL.04','Nanortalik Municipality','Nanortalik Municipality',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>cities`
--

/*!40000 ALTER TABLE `<<prefix>>cities` DISABLE KEYS */;
INSERT INTO `<<prefix>>cities` VALUES (3419842,'GL','Sisimiut','Sisimiut',66.9395,-53.6735,'P','PPLA','GL.06',NULL,5227,'America/Godthab',1,'2011-02-15 23:00:00','2011-02-15 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (3420846,'GL','Qaqortoq','Qaqortoq',60.7184,-46.0356,'P','PPLA','GL.04','GL.04.3420847',3224,'America/Godthab',1,'2018-07-23 23:00:00','2018-07-23 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (3421319,'GL','Nuuk','Nuuk',64.1835,-51.7216,'P','PPLC','GL.07',NULL,14798,'America/Godthab',1,'2014-05-10 23:00:00','2014-05-10 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (3423146,'GL','Ilulissat','Ilulissat',69.2198,-51.0986,'P','PPLA','GL.11839537',NULL,4413,'America/Godthab',1,'2018-04-04 23:00:00','2018-04-04 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (3424901,'GL','Aasiaat','Aasiaat',68.7098,-52.8699,'P','PPLA','GL.11839534',NULL,3005,'America/Godthab',1,'2018-04-25 23:00:00','2018-04-25 23:00:00');
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
