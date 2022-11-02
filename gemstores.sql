-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: gemstores
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` char(128) NOT NULL,
  `price_current` decimal(10,2) DEFAULT NULL,
  `price_main` decimal(10,2) DEFAULT NULL,
  `brief_desc` text DEFAULT NULL,
  `sku` char(25) DEFAULT NULL,
  `tags` char(255) DEFAULT NULL,
  `color` char(255) DEFAULT NULL,
  `size` char(255) DEFAULT NULL,
  `qty` int(11) DEFAULT 0,
  `prod_desc` text DEFAULT NULL,
  `add_info` text DEFAULT NULL,
  `feat_image` char(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_products`
--

LOCK TABLES `tbl_products` WRITE;
/*!40000 ALTER TABLE `tbl_products` DISABLE KEYS */;
INSERT INTO `tbl_products` VALUES (1,'1789',0.01,0.01,'7681278y1w','71wu71w09','uus','ysquuo','jjn',0,'jsjkjkklklakllzl','gjaxjkjkxjka','5FFB571F-F45D-4789-9668-6581EBA45A39L0001.jpeg.jpg'),(2,'500mls',0.00,0.00,'','','','','',0,'','','500ml.jpg'),(3,'500 ml Bottle water',120.00,120.00,'This is a brief description','','','','',0,'','','ceo.jpg'),(4,'500mls',0.00,0.00,'good water','5636637837','water500','red','500',1,'very water','goodded water','IMG-20221017-WA0003.jpg'),(5,'500mls',0.00,0.00,'good water','5636637837','water500','red','500',1,'very water','goodded water','IMG-20221017-WA0000.jpg'),(6,'logo',0.00,0.00,'companylogo','56366378386788','logo big','black','big',1,'company','better logo','label-01.png'),(7,'500mls',0.00,0.00,'','5636637837','water500','red','',1,'very','very good','100ml.jpg');
/*!40000 ALTER TABLE `tbl_products` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-02 14:27:46
