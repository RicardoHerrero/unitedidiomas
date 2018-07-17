DROP TABLE IF EXISTS `Termos`;

CREATE TABLE `Termos` (
  `termoid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `grupo` varchar(50) NOT NULL,
  `palavra` varchar(150) NOT NULL,
  `traducao` varchar(150) NOT NULL,
  `exemplo` varchar(255) NOT NULL,
  PRIMARY KEY (`termoid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Termos` (`termoid`, `grupo`, `palavra`, `traducao`, `exemplo`)
VALUES
	(1,'book 01','Egg','Ovo',''),
	(2,'book 01','Glasses','Óculos',''),
	(3,'book 01','Brazil','Brasil',''),
	(4,'book 01','The USA','Estados Unidos',''),
	(5,'book 01','France','França',''),
	(6,'book 01','Spain','Espainha',''),
	(7,'book 01','China','China',''),
	(8,'book 01','Japan','Japão',''),
	(9,'book 01','Colombia','Colombia',''),
	(10,'book 01','Peru','Peru',''),
	(11,'book 01','Argentina','Argentina',''),
	(12,'book 01','Korea','Korea',''),
	(13,'book 01','Turkey','Turkia',''),
	(14,'book 01','Greece','Grecia',''),
	(15,'book 01','Switzerland','Suiça',''),
	(16,'book 01','Germany','Alemanha',''),
	(17,'book 01','The UK','Inglaterra',''),
	(18,'book 01','Swiss','Suiço',''),
	(19,'book 01','Colombian','Colombiano',''),
	(20,'book 01','This','Isto/ Perto','This is an Apple'),
	(21,'book 01','That','Aquilo/ Distante','That is an Apple');