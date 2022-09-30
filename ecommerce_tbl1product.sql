CREATE DATABASE  IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecommerce`;
-- MySQL dump 10.13  Distrib 8.0.30, for Win64 (x86_64)
--
-- Host: localhost    Database: ecommerce
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl1product`
--

DROP TABLE IF EXISTS `tbl1product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl1product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(100) DEFAULT NULL,
  `pprice` varchar(100) DEFAULT NULL,
  `pimage` varchar(100) DEFAULT NULL,
  `pcategory` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl1product`
--

LOCK TABLES `tbl1product` WRITE;
/*!40000 ALTER TABLE `tbl1product` DISABLE KEYS */;
INSERT INTO `tbl1product` VALUES (1,'FlowerHorn','2500','uploadimage/flowerhorn-fish-1.jpg','fishes'),(2,'parrot','550','uploadimage/parrot.jpg','fishes'),(3,'Glass Tank ','5000','uploadimage/ftank1.jpg','fishtank'),(4,'Regular food','150','uploadimage/ffood3.jpg','fishfood'),(5,'Taiyo Food','300','uploadimage/ffood1.jpg','fishfood'),(6,'Fibre Tank ','2500','uploadimage/ftank5.png','fishtank'),(7,'Sponge Air pump ','450','uploadimage/item_sponge1.jpeg','fishfood'),(8,'Air pump','200','uploadimage/item_airpump.jpg','fishfood'),(9,'Food for all','100','uploadimage/ffood7.jpg','fishfood'),(10,'Filter ','550','uploadimage/item_powhead.jpg','fishfood'),(12,'Decoration Item','250','uploadimage/deco1.png','home'),(13,'Red cap short body','180','uploadimage/Redcap.jpg','fishes');
/*!40000 ALTER TABLE `tbl1product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-09-30  8:11:06
