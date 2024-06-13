-- MySQL dump 10.13  Distrib 8.0.36, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: innobicitech
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

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
-- Table structure for table `devolucion`
--

DROP TABLE IF EXISTS `devolucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `devolucion` (
  `Id_devolucion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `Item` int(11) DEFAULT NULL,
  `detalle_factura_Id_detalle_factura` int(11) DEFAULT NULL,
  `detalle_factura_Id_factura` int(11) DEFAULT NULL,
  `detalle_factura_factura_cliente_id_cliente` int(11) DEFAULT NULL,
  `detalle_factura_producto_id_producto` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_devolucion`),
  KEY `fkid_detale_factura` (`detalle_factura_Id_detalle_factura`),
  KEY `fkid_detalleidfactura` (`detalle_factura_Id_factura`),
  KEY `fkid_detalle_factura_id_clientes` (`detalle_factura_factura_cliente_id_cliente`),
  KEY `idx_detalle_factura_producto_id_producto` (`detalle_factura_producto_id_producto`),
  CONSTRAINT `fkdetalle_producto` FOREIGN KEY (`detalle_factura_producto_id_producto`) REFERENCES `detallefactura` (`producto_id_producto`),
  CONSTRAINT `fkid_detale_factura` FOREIGN KEY (`detalle_factura_Id_detalle_factura`) REFERENCES `detallefactura` (`Id_detalle_factura`),
  CONSTRAINT `fkid_detalle_factura_id_clientes` FOREIGN KEY (`detalle_factura_factura_cliente_id_cliente`) REFERENCES `detallefactura` (`factura_cliente_Id_cliente`),
  CONSTRAINT `fkid_detalleidfactura` FOREIGN KEY (`detalle_factura_Id_factura`) REFERENCES `detallefactura` (`factura_id_factura`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `devolucion`
--

LOCK TABLES `devolucion` WRITE;
/*!40000 ALTER TABLE `devolucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `devolucion` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-13 17:55:35
