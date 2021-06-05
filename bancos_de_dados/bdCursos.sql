CREATE DATABASE  IF NOT EXISTS `bdcursos` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `bdcursos`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: bdsitecompras
-- ------------------------------------------------------
-- Server version	5.7.20-log

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
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `cursos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cursos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` text NOT NULL,
  `oferta` text NOT NULL,
  `modalidade` text NOT NULL,
  `habilitacao` text NOT NULL,
  `localizacao` text NOT NULL,
  `eixoTec` text NOT NULL,
  `turno` text NOT NULL,
  `vagas` text NOT NULL,
  `periodo` text NOT NULL,
  `horas` text NOT NULL,
  `integralizacao` text NOT NULL,
  `integralizacaoMax` text NOT NULL,
  `diretorEns` text NOT NULL,
  `coordenador` text NOT NULL,
  `justificativa` text NOT NULL,
  `objetivoG` text NOT NULL,
  `objetivoE` text NOT NULL,
  `competencias` text NOT NULL,
  `atuacao` text NOT NULL,
  `matrizCurricular` varchar(45) NOT NULL,
  `infraestrutura` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

DELETE FROM cursos WHERE id = '1';
SELECT id FROM cursos where nome = 'arquitetura';
SELECT * FROM cursos where nome = 'arquitetura';
DELETE FROM cursos WHERE id = (SELECT id FROM cursos where nome = 'arquitetura');
SELECT * FROM cursos;
SELECT COUNT("id") FROM cursos;
--
-- Dumping data for table `usuario`
--
LOCK TABLES `cursos` WRITE;
/*!40000 ALTER TABLE `cursos` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
