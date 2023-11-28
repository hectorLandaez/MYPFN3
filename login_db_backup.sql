-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: pf
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
-- Table structure for table `clases`
--

DROP TABLE IF EXISTS `clases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `maestro` varchar(100) NOT NULL,
  KEY `clases_id_IDX` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clases`
--

LOCK TABLES `clases` WRITE;
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
INSERT INTO `clases` VALUES (1,'quimica','Birch Lyenyng'),(2,'matematicas','Yulma Eggerton'),(3,'salud','Mohandas Jacobssen'),(4,'biologia','Verene McFater'),(5,'ciencias','');
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscripciones`
--

DROP TABLE IF EXISTS `inscripciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscripciones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) DEFAULT NULL,
  `id_clase` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_estudiante` (`id_estudiante`),
  KEY `fk_id_clase` (`id_clase`),
  CONSTRAINT `fk_id_clase` FOREIGN KEY (`id_clase`) REFERENCES `clases` (`id`),
  CONSTRAINT `fk_id_estudiante` FOREIGN KEY (`id_estudiante`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscripciones`
--

LOCK TABLES `inscripciones` WRITE;
/*!40000 ALTER TABLE `inscripciones` DISABLE KEYS */;
INSERT INTO `inscripciones` VALUES (1,13,2),(2,12,3),(3,11,4),(4,10,1),(5,9,3),(6,8,4),(7,7,1),(8,6,2);
/*!40000 ALTER TABLE `inscripciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `FN` date DEFAULT NULL,
  `contraseña` varchar(50) DEFAULT NULL,
  `permiso` varchar(100) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'Birch Lyenyng','Lyenyng','blyenyng0@t-online.de','9897 Di Loreto Park','2023-06-25','nB6,GrCAn$yO?l>V','maestro','activo'),(2,'Yulma Eggerton','Eggerton','yeggerton1@nhs.uk','8 Service Avenue','2023-04-29','cA3.|VP(L','maestro','activo'),(3,'Mohandas Jacobssen','Jacobssen','mjacobssen2@etsy.com','766 Reindahl Trail','2023-06-01','hP5#\"?9*oz&z','maestro','activo'),(4,'Verene McFater','McFater','vmcfater3@umn.edu','89 5th Park','2023-02-06','sN9.c~FcjoY','maestro','activo'),(6,'Corinne Mityushin','Mityushin','cmityushin5@globo.com','13496 Debs Way','2023-09-20','sW9>d**I+*\"ji%','alumno','activo'),(7,'Wolf Yvon','Yvon','wyvon6@salon.com','7 Mendota Avenue','2022-12-01','oL6\"Fb}/h`pVrke','alumno','activo'),(8,'Rodrique Brennans','Brennans','rbrennans7@github.com','62978 Ronald Regan Avenue','2023-06-19','cC8#&kMIi{','alumno','activo'),(9,'Netti Jones','Jones','njones8@flickr.com','64 Memorial Park','2023-03-26','wV6\'9erVy`','alumno','inactivo'),(10,'Adolph Pharaoh','Pharaoh','apharaoh9@loc.gov','4814 Packers Hill','2023-10-10','fU3%ml=Z!2S1RtJ','alumno','activo'),(11,'Gilbertina Connop','Connop','gconnopa@goo.gl','1189 Hauk Park','2023-08-19','qT0\"e{VfpAz{','alumno','activo'),(12,'Yanaton Lindroos','Lindroos','ylindroosb@wp.com','21 Mayfield Plaza','2023-01-02','mW1*2O=QvS\'Z6Xzl','alumno','activo'),(13,'Dix Tevelov','Tevelov','dtevelovc@cisco.com','1 Division Park','2023-02-19','qL5<qpm\"ojc5%vY','alumno','activo'),(24,'admin','admin','admin',NULL,NULL,'admin','admin','activo');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-28 11:27:34
