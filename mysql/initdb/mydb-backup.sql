-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `laravel`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `laravel` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `laravel`;

--
-- Table structure for table `Brand`
--

DROP TABLE IF EXISTS `Brand`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Brand` (
  `Brand_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Brand_Name` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `Brand_Genaration` char(150) COLLATE utf8_unicode_ci NOT NULL,
  `Brand_Year` double NOT NULL,
  `Brand_Type` char(150) COLLATE utf8_unicode_ci NOT NULL,
  `Brand_Motor` char(150) COLLATE utf8_unicode_ci NOT NULL,
  `Brand_Gas` char(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Brand_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Brand`
--

LOCK TABLES `Brand` WRITE;
/*!40000 ALTER TABLE `Brand` DISABLE KEYS */;
INSERT INTO `Brand` VALUES (1,'Toyota','Toyota Vios 1.5 Entry My19 วีออส',2019,'รถเก๋ง 4 ประตู','เครื่องยนต์ 1,496 cc., ขับเคลื่อนล้อหน้า, เกียร์ออโต้แบบ CVT (พร้อม Sequential Shift)','เบนซิน 95, เบนซิน 91, แก๊สโซฮอล์ 95 (E10), แก๊สโซฮอล์ 91, เบนซิน E20, เบนซิน E85'),(2,'Mercedes-benz','Mercedes-benz S-Class S 350 d Exclusive เอส-คลาส',2019,'รถเก๋ง 4 ประตู, รถไฮบริด','เครื่องยนต์ 2,925 cc., ขับเคลื่อนล้อหลัง, เกียร์อัตโนมัติ 9AT (9G-Tronic)','ดีเซล');
/*!40000 ALTER TABLE `Brand` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Car`
--

DROP TABLE IF EXISTS `Car`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Car` (
  `Car_Licence` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `Car_Color` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Car_Outday` date NOT NULL,
  `Brand` bigint(20) unsigned NOT NULL,
  `User` double unsigned NOT NULL,
  PRIMARY KEY (`Car_Licence`),
  KEY `car_brand_foreign` (`Brand`),
  KEY `car_user_foreign` (`User`),
  CONSTRAINT `car_brand_foreign` FOREIGN KEY (`Brand`) REFERENCES `Brand` (`Brand_ID`),
  CONSTRAINT `car_user_foreign` FOREIGN KEY (`User`) REFERENCES `Users` (`User_Citizen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Car`
--

LOCK TABLES `Car` WRITE;
/*!40000 ALTER TABLE `Car` DISABLE KEYS */;
INSERT INTO `Car` VALUES ('dd1234','pink','2019-03-13',1,1254654557777),('กก1234','แดง','2018-09-10',2,1231231231231);
/*!40000 ALTER TABLE `Car` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Case`
--

DROP TABLE IF EXISTS `Case`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Case` (
  `Case_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Case_Detail` char(200) COLLATE utf8_unicode_ci NOT NULL,
  `Case_WhoName` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `Case_Phone` double NOT NULL,
  `OwnerCar` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `Station` bigint(20) unsigned NOT NULL,
  `Case_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Case_ID`),
  KEY `case_ownercar_foreign` (`OwnerCar`),
  KEY `case_station_foreign` (`Station`),
  CONSTRAINT `case_ownercar_foreign` FOREIGN KEY (`OwnerCar`) REFERENCES `Car` (`Car_Licence`),
  CONSTRAINT `case_station_foreign` FOREIGN KEY (`Station`) REFERENCES `PoliceStation` (`Station_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Case`
--

LOCK TABLES `Case` WRITE;
/*!40000 ALTER TABLE `Case` DISABLE KEYS */;
/*!40000 ALTER TABLE `Case` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `PoliceStation`
--

DROP TABLE IF EXISTS `PoliceStation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `PoliceStation` (
  `Station_ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Station_Name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Station_Province` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `Station_Post` double NOT NULL,
  `Station_Phone` double NOT NULL,
  `Station_Address` char(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Station_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `PoliceStation`
--

LOCK TABLES `PoliceStation` WRITE;
/*!40000 ALTER TABLE `PoliceStation` DISABLE KEYS */;
/*!40000 ALTER TABLE `PoliceStation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Users`
--

DROP TABLE IF EXISTS `Users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Users` (
  `User_Citizen` double NOT NULL,
  `User_Name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Lname` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_BirthDay` date NOT NULL,
  `User_Country` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Province` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `User_Post` double NOT NULL,
  `User_Address` char(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`User_Citizen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Users`
--

LOCK TABLES `Users` WRITE;
/*!40000 ALTER TABLE `Users` DISABLE KEYS */;
INSERT INTO `Users` VALUES (1231231231231,'Grim','Sann','1999-06-16','ไทย','ชลบุรี',20130,'11/74 ม.11 ต.แสนสุข อ.เมือง'),(1254654557777,'Timmy','jett','1995-05-19','ไทย','ชลบุรี',20130,'14/11 ม.2 ต.แสนสุข อ.เมือง');
/*!40000 ALTER TABLE `Users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_03_24_110148_create_table_brand',1),(4,'2019_03_24_110836_create_table_user',1),(5,'2019_04_24_154650_create_table_car',1),(6,'2019_04_25_103254_create_table_policestation',1),(7,'2019_04_25_110331_create_table_case',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'chanok','59160742@go.buu.ac.th',NULL,'$2y$10$zHSGlzvAGSREyXNTy.ZJve2aOUcy2O6hIF81FpiqtUYKl0Xr2DX6O',NULL,'2019-05-05 07:04:38','2019-05-05 07:04:38');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-05 16:43:44
