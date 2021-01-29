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
INSERT INTO `<<prefix>>subadmin1` VALUES (8,'AE.07','AE','Umm al Qaywayn','Umm al Qaywayn',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (9,'AE.05','AE','Raʼs al Khaymah','Ra\'s al Khaymah',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (10,'AE.03','AE','Dubai','Dubai',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (11,'AE.06','AE','Sharjah','Sharjah',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (12,'AE.04','AE','Fujairah','Fujairah',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (13,'AE.02','AE','Ajman','Ajman',1);
INSERT INTO `<<prefix>>subadmin1` VALUES (14,'AE.01','AE','Abu Dhabi','Abu Dhabi',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin1` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>subadmin2`
--

/*!40000 ALTER TABLE `<<prefix>>subadmin2` DISABLE KEYS */;
INSERT INTO `<<prefix>>subadmin2` VALUES (1,'AE.01.101','AE','AE.01','Abu Dhabi Municipality','Abu Dhabi Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (2,'AE.01.102','AE','AE.01','Al Ain Municipality','Al Ain Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (3,'AE.01.103','AE','AE.01','Al Dhafra','Al Dhafra',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (4,'AE.04.701','AE','AE.04','Al Fujairah Municipality','Al Fujairah Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (5,'AE.04.702','AE','AE.04','Dibba Al Fujairah Municipality','Dibba Al Fujairah Municipality',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (6,'AE.06.302','AE','AE.06','Dhaid','Dhaid',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (7,'AE.02.401','AE','AE.02','Ajman','Ajman',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (8,'AE.06.304','AE','AE.06','Khor Fakkan','Khor Fakkan',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (9,'AE.06.307','AE','AE.06','Dibba Al Hesn','Dibba Al Hesn',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (10,'AE.06.305','AE','AE.06','Kalba','Kalba',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (11,'AE.05.601','AE','AE.05','Ras Al Khaimah','Ras Al Khaimah',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (12,'AE.07.501','AE','AE.07','Umm AL Quwain','Umm AL Quwain',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (13,'AE.06.309','AE','AE.06','Milehah','Milehah',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (14,'AE.06.306','AE','AE.06','Al Madam','Al Madam',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (15,'AE.06.301','AE','AE.06','Sharjah','Sharjah',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (16,'AE.06.303','AE','AE.06','Al Hamriyah','Al Hamriyah',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (17,'AE.02.402','AE','AE.02','Manama','Manama',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (18,'AE.02.403','AE','AE.02','Masfout','Masfout',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (19,'AE.06.308','AE','AE.06','Al Batayih','Al Batayih',1);
INSERT INTO `<<prefix>>subadmin2` VALUES (20,'AE.03.201','AE','AE.03','Dubai','Dubai',1);
/*!40000 ALTER TABLE `<<prefix>>subadmin2` ENABLE KEYS */;

--
-- Dumping data for table `<<prefix>>cities`
--

/*!40000 ALTER TABLE `<<prefix>>cities` DISABLE KEYS */;
INSERT INTO `<<prefix>>cities` VALUES (290594,'AE','Umm Al Quwain City','Umm Al Quwain City',25.5647,55.5552,'P','PPLA','AE.07',NULL,62747,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (291074,'AE','Ras Al Khaimah City','Ras Al Khaimah City',25.7895,55.9432,'P','PPLA','AE.05',NULL,351943,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (291279,'AE','Muzayri‘','Muzayri`',23.1436,53.7881,'P','PPL','AE.01',NULL,10000,'Asia/Dubai',1,'2013-10-23 23:00:00','2013-10-23 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (291580,'AE','Zayed City','Zayed City',23.6542,53.7052,'P','PPL','AE.01','AE.01.103',63482,'Asia/Dubai',1,'2019-06-26 23:00:00','2019-06-26 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (291696,'AE','Khawr Fakkān','Khawr Fakkan',25.3313,56.342,'P','PPL','AE.06',NULL,40677,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292223,'AE','Dubai','Dubai',25.0657,55.1713,'P','PPLA','AE.03',NULL,2956587,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292231,'AE','Dibba Al-Fujairah','Dibba Al-Fujairah',25.5925,56.2618,'P','PPL','AE.04',NULL,30000,'Asia/Dubai',1,'2014-08-11 23:00:00','2014-08-11 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292239,'AE','Dibba Al-Hisn','Dibba Al-Hisn',25.6196,56.2729,'P','PPL','AE.04',NULL,26395,'Asia/Dubai',1,'2014-04-20 23:00:00','2014-04-20 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292672,'AE','Sharjah','Sharjah',25.3374,55.4121,'P','PPLA','AE.06',NULL,1324473,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292688,'AE','Ar Ruways','Ar Ruways',24.1103,52.7306,'P','PPL','AE.01',NULL,16000,'Asia/Dubai',1,'2012-11-02 23:00:00','2012-11-02 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292878,'AE','Al Fujairah City','Al Fujairah City',25.1164,56.3414,'P','PPLA','AE.04',NULL,86512,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292913,'AE','Al Ain City','Al Ain City',24.1917,55.7606,'P','PPL','AE.01',NULL,55091,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292932,'AE','Ajman City','Ajman City',25.4018,55.4788,'P','PPLA','AE.02',NULL,490035,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292953,'AE','Adh Dhayd','Adh Dhayd',25.2881,55.8816,'P','PPL','AE.06',NULL,24716,'Asia/Dubai',1,'2012-01-17 23:00:00','2012-01-17 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (292968,'AE','Abu Dhabi','Abu Dhabi',24.4667,54.3667,'P','PPLC','AE.01',NULL,603492,'Asia/Dubai',1,'2016-06-02 23:00:00','2016-06-02 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (8057551,'AE','Khalifah A City','Khalifah A City',24.4259,54.605,'P','PPLX','AE.01',NULL,85374,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (12042052,'AE','Bani Yas City','Bani Yas City',24.3098,54.6294,'P','PPL','AE.01',NULL,80498,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (12042053,'AE','Musaffah','Musaffah',24.3589,54.4827,'P','PPL','AE.01',NULL,243341,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (12047416,'AE','Al Shamkhah City','Al Shamkhah City',24.3927,54.7078,'P','PPL','AE.01',NULL,61710,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (12047417,'AE','Reef Al Fujairah City','Reef Al Fujairah City',25.1448,56.2476,'P','PPL','AE.04',NULL,82310,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
INSERT INTO `<<prefix>>cities` VALUES (12047418,'AE','Abu Dhabi Island and Internal Islands City','Abu Dhabi Island and Internal Islands City',24.4511,54.3969,'P','PPL','AE.01',NULL,552215,'Asia/Dubai',1,'2019-05-28 23:00:00','2019-05-28 23:00:00');
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
