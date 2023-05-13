-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: localhost    Database: aerocarrillo

-- create database aerocarrillo;
use aerocarrillo;
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `adicionales`
--

DROP TABLE IF EXISTS `adicionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `adicionales` (
  `pk_adicional` int NOT NULL AUTO_INCREMENT,
  `maleta_extra` int DEFAULT NULL,
  `costo` int DEFAULT NULL,
  PRIMARY KEY (`pk_adicional`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `adicionales`
--

LOCK TABLES `adicionales` WRITE;
/*!40000 ALTER TABLE `adicionales` DISABLE KEYS */;
INSERT INTO `adicionales` VALUES (1,1,350),(2,2,700),(3,3,1000);
/*!40000 ALTER TABLE `adicionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aeropuertos`
--

DROP TABLE IF EXISTS `aeropuertos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aeropuertos` (
  `pk_aeropuerto` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `tua` int DEFAULT NULL,
  PRIMARY KEY (`pk_aeropuerto`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aeropuertos`
--

LOCK TABLES `aeropuertos` WRITE;
/*!40000 ALTER TABLE `aeropuertos` DISABLE KEYS */;
INSERT INTO `aeropuertos` VALUES (1,'Aeropuerto Internacional de Cancún',232),(2,'Aeropuerto Internacional de Merida',580),(3,'Aeropuerto Internacional de Veracruz',580),(4,'Aeropuerto Internacional de Campeche ',470),(5,'Aeropuerto Internacional Carlos Rovirosa Pérez',580),(6,'Aeropuerto Internacional de Chetumal',470);
/*!40000 ALTER TABLE `aeropuertos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asientos`
--

DROP TABLE IF EXISTS `asientos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `asientos` (
  `pk_asiento` int NOT NULL AUTO_INCREMENT,
  `numero_de_asiento` int DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `fk_paquete` int DEFAULT NULL,
  PRIMARY KEY (`pk_asiento`),
  KEY `fk_paquete` (`fk_paquete`),
  CONSTRAINT `asientos_ibfk_1` FOREIGN KEY (`fk_paquete`) REFERENCES `paquetes` (`pk_paquete`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asientos`
--

LOCK TABLES `asientos` WRITE;
/*!40000 ALTER TABLE `asientos` DISABLE KEYS */;
INSERT INTO `asientos` VALUES (2,1,'Ventanilla',3),(3,2,'Pasillo',3),(4,3,'Ventanilla',3),(5,4,'Pasillo',2),(6,5,'Ventanilla',1),(7,6,'Pasillo',2),(8,7,'Ventanilla',3),(9,8,'Pasillo',1),(10,9,'Ventanilla',1),(11,10,'Pasillo',2),(12,11,'Ventanilla',3),(13,12,'Pasillo',1),(14,13,'Ventanilla',1),(15,14,'Pasillo',1),(16,15,'Ventanilla',1),(17,16,'Pasillo',2),(18,17,'Ventanilla',2),(19,18,'Pasillo',2),(20,19,'Ventanilla',2),(21,20,'Pasillo',1),(22,21,'Ventanilla',3),(23,22,'Pasillo',3),(24,23,'Ventanilla',3),(25,24,'Pasillo',1),(26,25,'Ventanilla',1),(27,26,'Pasillo',1),(28,27,'Ventanilla',1),(29,28,'Pasillo',1),(30,29,'Ventanilla',1),(31,30,'Pasillo',1),(32,31,'Ventanilla',1),(33,32,'Pasillo',2),(34,33,'Ventanilla',2),(35,34,'Pasillo',2),(36,35,'Ventanilla',2),(37,36,'Pasillo',2),(38,37,'Ventanilla',2),(39,38,'Pasillo',2),(40,39,'Ventanilla',1),(41,40,'Pasillo',1),(42,41,'Ventanilla',1),(43,42,'Pasillo',1),(44,43,'Ventanilla',1),(45,44,'Pasillo',1),(46,45,'Ventanilla',1),(47,46,'Pasillo',2),(48,47,'Ventanilla',2),(49,48,'Pasillo',1),(50,49,'Ventanilla',2),(51,50,'Pasillo',1),(52,51,'Ventanilla',2),(53,52,'Pasillo',1),(54,53,'Ventanilla',2),(55,54,'Pasillo',1),(56,55,'Ventanilla',2),(57,56,'Pasillo',1),(58,57,'Ventanilla',1),(59,58,'Pasillo',1),(60,59,'Ventanilla',1),(61,60,'Pasillo',1),(62,61,'Ventanilla',1),(63,62,'Pasillo',1),(64,63,'Ventanilla',1),(65,64,'Pasillo',1),(66,65,'Ventanilla',1),(67,66,'Pasillo',1),(68,67,'Ventanilla',1),(69,68,'Pasillo',2),(70,69,'Ventanilla',2),(71,70,'Pasillo',1),(72,71,'Ventanilla',1),(73,72,'Pasillo',1),(74,73,'Ventanilla',1),(75,74,'Pasillo',1),(76,75,'Ventanilla',1),(77,76,'Pasillo',1),(78,77,'Ventanilla',2),(79,78,'Pasillo',2),(80,79,'Ventanilla',2),(81,80,'Pasillo',2),(82,81,'Ventanilla',2),(83,82,'Pasillo',1),(84,83,'Ventanilla',1),(85,84,'Pasillo',1),(86,85,'Ventanilla',1),(87,86,'Pasillo',1),(88,87,'Ventanilla',1),(89,88,'Pasillo',1),(90,89,'Ventanilla',1),(91,90,'Pasillo',1),(92,NULL,NULL,NULL);
/*!40000 ALTER TABLE `asientos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `aviones`
--

DROP TABLE IF EXISTS `aviones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aviones` (
  `pk_avion` int NOT NULL AUTO_INCREMENT,
  `modelo` varchar(25) DEFAULT NULL,
  `año_de_fabricacion` int DEFAULT NULL,
  `fk_matricula` int DEFAULT NULL,
  PRIMARY KEY (`pk_avion`),
  KEY `fk_matricula` (`fk_matricula`),
  CONSTRAINT `aviones_ibfk_1` FOREIGN KEY (`fk_matricula`) REFERENCES `matriculas` (`pk_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aviones`
--

LOCK TABLES `aviones` WRITE;
/*!40000 ALTER TABLE `aviones` DISABLE KEYS */;
INSERT INTO `aviones` VALUES (1,'ATR 42 ',2019,1),(2,'ATR 42 ',2019,2),(3,'ATR 42',2019,3),(4,'ATR 42',2018,4),(5,'Sukhoi Superjet 100',2017,5),(6,'Sukhoi Superjet 100',2020,6),(7,'Embraer E175',2021,7);
/*!40000 ALTER TABLE `aviones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boletos`
--

DROP TABLE IF EXISTS `boletos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `boletos` (
  `pk_boleto` int NOT NULL AUTO_INCREMENT,
  `folio` int DEFAULT NULL,
  `fk_reservacion` int DEFAULT NULL,
  PRIMARY KEY (`pk_boleto`),
  KEY `fk_reservacion` (`fk_reservacion`),
  CONSTRAINT `boletos_ibfk_12` FOREIGN KEY (`fk_reservacion`) REFERENCES `reservaciones` (`pk_reservacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boletos`
--

LOCK TABLES `boletos` WRITE;
/*!40000 ALTER TABLE `boletos` DISABLE KEYS */;
INSERT INTO `boletos` VALUES (1,1101,1);
/*!40000 ALTER TABLE `boletos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudades`
--

DROP TABLE IF EXISTS `ciudades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ciudades` (
  `pk_ciudad` int NOT NULL AUTO_INCREMENT,
  `ciudad` varchar(25) DEFAULT NULL,
  `estado` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`pk_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudades`
--

LOCK TABLES `ciudades` WRITE;
/*!40000 ALTER TABLE `ciudades` DISABLE KEYS */;
INSERT INTO `ciudades` VALUES (1,'Cancun','Quintana Roo'),(2,'Merida','Yucatan'),(3,'Veracruz','Veracruz'),(4,'Campeche ','Campeche '),(5,'Villahermosa','Tabasco'),(6,'Chetumal ','Quintana Roo');
/*!40000 ALTER TABLE `ciudades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descuentos`
--

DROP TABLE IF EXISTS `descuentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `descuentos` (
  `pk_descuento` int NOT NULL AUTO_INCREMENT,
  `dias` int DEFAULT NULL,
  `descuento` int DEFAULT NULL,
  PRIMARY KEY (`pk_descuento`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descuentos`
--

LOCK TABLES `descuentos` WRITE;
/*!40000 ALTER TABLE `descuentos` DISABLE KEYS */;
INSERT INTO `descuentos` VALUES (1,2,2),(2,5,6),(3,10,8),(4,20,12),(5,30,20);
/*!40000 ALTER TABLE `descuentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipajes`
--

DROP TABLE IF EXISTS `equipajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `equipajes` (
  `pk_equipaje` int NOT NULL AUTO_INCREMENT,
  `equipaje_de_mano` int DEFAULT NULL,
  `equipaje_documentado` int DEFAULT NULL,
  PRIMARY KEY (`pk_equipaje`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipajes`
--

LOCK TABLES `equipajes` WRITE;
/*!40000 ALTER TABLE `equipajes` DISABLE KEYS */;
INSERT INTO `equipajes` VALUES (1,1,0),(2,1,1),(3,1,2);
/*!40000 ALTER TABLE `equipajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horarios` (
  `pk_horario` int NOT NULL AUTO_INCREMENT,
  `hora_salida` time DEFAULT NULL,
  `hora_llegada` time DEFAULT NULL,
  `fk_ciudad` int DEFAULT NULL,
  `fk_aeropuerto` int DEFAULT NULL,
  `fk_vuelo` int DEFAULT NULL,
  PRIMARY KEY (`pk_horario`),
  KEY `fk_ciudad` (`fk_ciudad`),
  KEY `fk_aeropuerto` (`fk_aeropuerto`),
  KEY `fk_vuelo` (`fk_vuelo`),
  CONSTRAINT `horarios_ibfk_1` FOREIGN KEY (`fk_ciudad`) REFERENCES `ciudades` (`pk_ciudad`),
  CONSTRAINT `horarios_ibfk_2` FOREIGN KEY (`fk_aeropuerto`) REFERENCES `aeropuertos` (`pk_aeropuerto`),
  CONSTRAINT `horarios_ibfk_3` FOREIGN KEY (`fk_vuelo`) REFERENCES `vuelos` (`pk_vuelo`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
INSERT INTO `horarios` VALUES (1,'13:00:00','15:30:00',1,1,1),(2,'14:00:00','16:00:00',2,2,2),(3,'12:00:00','13:00:00',4,4,3),(4,'10:00:00','12:30:00',6,6,4),(5,'20:00:00','23:00:00',6,6,5),(6,'04:00:00','05:30:00',1,1,6),(7,'10:30:00','11:30:00',4,4,7),(8,'09:30:00','10:40:00',1,1,8),(9,'18:00:00','19:45:00',3,3,9),(10,'23:50:00','02:00:00',2,2,10),(11,'05:10:00','07:45:00',6,6,11),(12,'06:50:00','10:45:00',1,1,12),(13,'08:20:00','10:30:00',2,2,13),(14,'12:30:00','02:45:00',3,3,14),(15,'13:55:00','15:00:00',3,3,15);
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `matriculas` (
  `pk_matricula` int NOT NULL AUTO_INCREMENT,
  `matricula` varchar(255) DEFAULT NULL,
  KEY `pk_matricula` (`pk_matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,'AZ7458'),(2,'AE8752'),(3,'AT7468'),(4,'AE7785'),(5,'AE6657'),(6,'AE2215'),(7,'AE4578'),(8,'AE5248');
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `metodos_pago`
--

DROP TABLE IF EXISTS `metodos_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `metodos_pago` (
  `pk_metodo_pago` int NOT NULL AUTO_INCREMENT,
  `tipo_metodo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`pk_metodo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `metodos_pago`
--

LOCK TABLES `metodos_pago` WRITE;
/*!40000 ALTER TABLE `metodos_pago` DISABLE KEYS */;
INSERT INTO `metodos_pago` VALUES (1,'Efectivo'),(2,'Tarjeta debito'),(3,'Tarjeta credito'),(4,'Transferencia');
/*!40000 ALTER TABLE `metodos_pago` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paquetes`
--

DROP TABLE IF EXISTS `paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paquetes` (
  `pk_paquete` int NOT NULL AUTO_INCREMENT,
  `express` varchar(255) DEFAULT NULL,
  `cambios` varchar(255) DEFAULT NULL,
  `seleccion_asiento` varchar(255) DEFAULT NULL,
  `fk_equipaje` int DEFAULT NULL,
  `fk_tipo_paquete` int DEFAULT NULL,
  PRIMARY KEY (`pk_paquete`),
  KEY `fk_equipajes` (`fk_equipaje`),
  KEY `fk_tipo_paquete` (`fk_tipo_paquete`),
  CONSTRAINT `paquetes_ibfk_1` FOREIGN KEY (`fk_equipaje`) REFERENCES `equipajes` (`pk_equipaje`),
  CONSTRAINT `paquetes_ibfk_2` FOREIGN KEY (`fk_tipo_paquete`) REFERENCES `tipo_paquetes` (`pk_tipo_paquete`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paquetes`
--

LOCK TABLES `paquetes` WRITE;
/*!40000 ALTER TABLE `paquetes` DISABLE KEYS */;
INSERT INTO `paquetes` VALUES (1,'no ','no','no',1,1),(2,'si','si','no',2,2),(3,'si ','si','si',3,2);
/*!40000 ALTER TABLE `paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasajeros`
--

DROP TABLE IF EXISTS `pasajeros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pasajeros` (
  `pk_pasajero` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) DEFAULT NULL,
  `apellido` varchar(25) DEFAULT NULL,
  `correo` varchar(25) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `numero_telefono` varchar(15) DEFAULT NULL,
  `numero_accidentes` varchar(15) DEFAULT NULL,
  `fk_tipo_pasajero` int DEFAULT NULL,
  PRIMARY KEY (`pk_pasajero`),
  KEY `fk_tipo_pasajero` (`fk_tipo_pasajero`),
  CONSTRAINT `pasajeros_ibfk_1` FOREIGN KEY (`fk_tipo_pasajero`) REFERENCES `tipos_pasajeros` (`pk_tipo_pasajero`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pasajeros`
--

LOCK TABLES `pasajeros` WRITE;
/*!40000 ALTER TABLE `pasajeros` DISABLE KEYS */;
INSERT INTO `pasajeros` VALUES (1,'Jesus Alberto','Zamora','albertozamora@gmail.com','2001-11-03','9933353748','9933156284',1),(2,'Maria Guadalupe','Martines','gm3780@gmail.com','2002-04-05','9930478539','9933158742',1),(3,'Carlos Armando','Arellano','carlosarell@gmail.com','2001-08-10','9937895430','9933152045',1),(4,'Diego','Morales','diegomr@gmail.com','2006-12-21','9933538590','9933234387',2),(5,'Matias','Lopez','matiaslp@gmail.com','2010-12-23','9933232123','9934293420',2),(6,'Juan Santiago','Perez','juanSp@gmail.com','1998-05-25','9935413789','9937456870',2);
/*!40000 ALTER TABLE `pasajeros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservaciones`
--

DROP TABLE IF EXISTS `reservaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reservaciones` (
  `pk_reservacion` int NOT NULL AUTO_INCREMENT,
  `folio` int DEFAULT NULL,
  `fk_pasajero` int DEFAULT NULL,
  `fk_descuento` int DEFAULT NULL,
  `fk_metodo_pago` int DEFAULT NULL,
  `fk_adicional` int DEFAULT NULL,
  `fk_asiento` int DEFAULT NULL,
  `fk_terminal` int DEFAULT NULL,
  `fk_horario` int DEFAULT NULL,
  PRIMARY KEY (`pk_reservacion`),
  KEY `fk_pasajero` (`fk_pasajero`),
  KEY `fk_descuento` (`fk_descuento`),
  KEY `fk_metodo_pago` (`fk_metodo_pago`),
  KEY `fk_adicional` (`fk_adicional`),
  KEY `fk_asiento` (`fk_asiento`),
  KEY `fk_terminal` (`fk_terminal`),
  KEY `fk_horario` (`fk_horario`),
  CONSTRAINT `reservaciones_ibfk_11` FOREIGN KEY (`fk_adicional`) REFERENCES `adicionales` (`pk_adicional`),
  CONSTRAINT `reservaciones_ibfk_12` FOREIGN KEY (`fk_asiento`) REFERENCES `asientos` (`pk_asiento`),
  CONSTRAINT `reservaciones_ibfk_13` FOREIGN KEY (`fk_terminal`) REFERENCES `terminales` (`pk_terminal`),
  CONSTRAINT `reservaciones_ibfk_14` FOREIGN KEY (`fk_horario`) REFERENCES `horarios` (`pk_horario`),
  CONSTRAINT `reservaciones_ibfk_4` FOREIGN KEY (`fk_pasajero`) REFERENCES `pasajeros` (`pk_pasajero`),
  CONSTRAINT `reservaciones_ibfk_6` FOREIGN KEY (`fk_descuento`) REFERENCES `descuentos` (`pk_descuento`),
  CONSTRAINT `reservaciones_ibfk_9` FOREIGN KEY (`fk_metodo_pago`) REFERENCES `metodos_pago` (`pk_metodo_pago`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservaciones`
--

LOCK TABLES `reservaciones` WRITE;
/*!40000 ALTER TABLE `reservaciones` DISABLE KEYS */;
INSERT INTO `reservaciones` VALUES (1,1,1,1,1,1,2,1,NULL),(4,2,2,2,2,1,3,2,NULL),(5,3,3,1,1,1,4,2,NULL);
/*!40000 ALTER TABLE `reservaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terminales`
--

DROP TABLE IF EXISTS `terminales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `terminales` (
  `pk_terminal` int NOT NULL AUTO_INCREMENT,
  `puerto` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`pk_terminal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terminales`
--

LOCK TABLES `terminales` WRITE;
/*!40000 ALTER TABLE `terminales` DISABLE KEYS */;
INSERT INTO `terminales` VALUES (1,'1'),(2,'2'),(3,'3');
/*!40000 ALTER TABLE `terminales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_paquetes`
--

DROP TABLE IF EXISTS `tipo_paquetes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipo_paquetes` (
  `pk_tipo_paquete` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) DEFAULT NULL,
  `costo` int DEFAULT NULL,
  PRIMARY KEY (`pk_tipo_paquete`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_paquetes`
--

LOCK TABLES `tipo_paquetes` WRITE;
/*!40000 ALTER TABLE `tipo_paquetes` DISABLE KEYS */;
INSERT INTO `tipo_paquetes` VALUES (1,'Zero',250),(2,'Ligth',740),(3,'Extra',1350);
/*!40000 ALTER TABLE `tipo_paquetes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_pasajeros`
--

DROP TABLE IF EXISTS `tipos_pasajeros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_pasajeros` (
  `pk_tipo_pasajero` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`pk_tipo_pasajero`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_pasajeros`
--

LOCK TABLES `tipos_pasajeros` WRITE;
/*!40000 ALTER TABLE `tipos_pasajeros` DISABLE KEYS */;
INSERT INTO `tipos_pasajeros` VALUES (1,'Adulto'),(2,'Menor'),(3,'Bebe');
/*!40000 ALTER TABLE `tipos_pasajeros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_vuelos`
--

DROP TABLE IF EXISTS `tipos_vuelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tipos_vuelos` (
  `pk_tipo_vuelo` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`pk_tipo_vuelo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_vuelos`
--

LOCK TABLES `tipos_vuelos` WRITE;
/*!40000 ALTER TABLE `tipos_vuelos` DISABLE KEYS */;
INSERT INTO `tipos_vuelos` VALUES (1,'Directo'),(2,'Escalas');
/*!40000 ALTER TABLE `tipos_vuelos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vuelos`
--

DROP TABLE IF EXISTS `vuelos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vuelos` (
  `pk_vuelo` int NOT NULL AUTO_INCREMENT,
  `fecha_salida` date DEFAULT NULL,
  `fecha_llegada` date DEFAULT NULL,
  `duración` time DEFAULT NULL,
  `fk_tipo_vuelo` int DEFAULT NULL,
  `fk_avion` int DEFAULT NULL,
  PRIMARY KEY (`pk_vuelo`),
  KEY `fk_tipo_vuelo` (`fk_tipo_vuelo`),
  KEY `fk_avion` (`fk_avion`),
  CONSTRAINT `vuelos_ibfk_2` FOREIGN KEY (`fk_tipo_vuelo`) REFERENCES `tipos_vuelos` (`pk_tipo_vuelo`),
  CONSTRAINT `vuelos_ibfk_3` FOREIGN KEY (`fk_avion`) REFERENCES `aviones` (`pk_avion`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vuelos`
--

LOCK TABLES `vuelos` WRITE;
/*!40000 ALTER TABLE `vuelos` DISABLE KEYS */;
INSERT INTO `vuelos` VALUES (1,'2023-02-26','2023-02-26','02:00:00',1,1),(2,'2023-02-26','2023-02-26','02:00:00',1,2),(3,'2023-02-27','2023-02-27','02:00:00',1,3),(4,'2023-03-01','2023-03-01','02:00:00',1,4),(5,'2023-04-03','2023-04-04','02:00:00',1,5),(6,'2023-04-05','2023-04-05','02:00:00',1,1),(7,'2023-04-06','2023-04-06','02:00:00',1,6),(8,'2023-04-06','2023-04-06','02:00:00',1,2),(9,'2023-04-07','2023-04-07','02:00:00',1,5),(10,'2023-04-07','2023-04-07','02:00:00',1,4),(11,'2023-04-08','2023-04-08','02:00:00',1,1),(12,'2023-04-08','2023-04-08','03:00:00',1,7),(13,'2023-04-08','2023-04-08','02:00:00',1,5),(14,'2023-04-08','2023-04-09','03:00:00',1,4),(15,'2023-04-09','2023-04-09','02:00:00',1,3),(16,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `vuelos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-01 21:14:36
