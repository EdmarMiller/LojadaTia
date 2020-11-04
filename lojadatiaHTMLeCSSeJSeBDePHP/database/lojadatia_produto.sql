-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: localhost    Database: lojadatia
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Table structure for table `produto`
--

DROP TABLE IF EXISTS `produto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nome` varchar(45) CHARACTER SET latin1 NOT NULL,
  `descricao` varchar(200) CHARACTER SET latin1 NOT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  `precofinal` decimal(8,2) DEFAULT NULL,
  `imagem` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produto`
--

LOCK TABLES `produto` WRITE;
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
INSERT INTO `produto` VALUES (1,'Bolo','Bolo Branco','Delicioso bolo Branco',89.25,69.23,'./imagens/FLORESTA_BRANCA_4344-460x368.jpg'),(2,'Bolo','Bolo Chocolate','Delicioso bolo de Chocolate',89.25,69.23,'imagens/PRESTIGIO_4383-460x368.jpg'),(3,'Bolo','Bolo Sem Açucar','Bolo ZERO Açucar',120.25,89.23,'./imagens/FRUTAS_4359-460x368.jpg'),(4,'Doce','Premium','Doces especiais pra pessoas especiais!',85.25,67.23,'imagens/cachepo-de-limao-SMH_8240-copiar-460x460.jpg'),(5,'Doce','Tradicionais','Vai um brigadeiro?',85.25,67.23,'imagens/ALINE_DOCES-brigadeiro_belga-interno-600x600px-460x460.jpg'),(6,'Doce','Clássicos','Aqueles doces atemporais',65.25,35.83,'./imagens/ALINE_DOCES-casadinho-interno-600x600px-460x460.jpg'),(7,'Doce','Convidados','Lembraças Inesquecíveis',64.25,38.23,'./imagens/SMH_8543-copiar-460x460.jpg'),(8,'Doce','Padrinhos','Convites lindos e saborosos.',75.25,57.23,'./imagens/FLORESTA_BRANCA_4344-460x368.jpg');
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-03 23:05:44
