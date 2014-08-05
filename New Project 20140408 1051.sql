-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.8


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema loginoficialdb
--

CREATE DATABASE IF NOT EXISTS loginoficialdb;
USE loginoficialdb;

--
-- Definition of table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `EMAIL_USUARIO` varchar(35) NOT NULL,
  `SENHA_USUARIO` varchar(60) NOT NULL,
  `NOME_USUARIO` varchar(45) NOT NULL,
  `TIPO_USUARIO` char(3) DEFAULT NULL,
  PRIMARY KEY (`COD_USUARIO`),
  UNIQUE KEY `EMAIL_USUARIO_UNIQUE` (`EMAIL_USUARIO`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`COD_USUARIO`,`EMAIL_USUARIO`,`SENHA_USUARIO`,`NOME_USUARIO`,`TIPO_USUARIO`) VALUES 
 (8,'bruhs2@live.com','12345678','Bruna Morelli','RES'),
 (9,'bruhadmin@live.com','12345678','Bruna Administradora','ADM'),
 (10,'tobias@hotmail','123456789','tobias',NULL),
 (13,'1','1','1',NULL),
 (16,'bruna@outlook','aeiou','bruna',NULL),
 (17,'grazi@outlook','ppppp','grazi',NULL),
 (18,'weverton@gmail','vvvvvvv','weverton',NULL),
 (20,'amanda@live','uuuuuuuuu','amanda',NULL),
 (21,'yuri@jigt','12315','yuri','RES');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
