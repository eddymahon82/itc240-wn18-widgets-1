#Apocalypse.sql

drop table if exists Apocalypses;
CREATE TABLE `Apocalypse` (
    `ApocalypseID` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `ApocalypseType` varchar(50) DEFAULT NULL,
    `ApocalypseOrigin` varchar(50) DEFAULT NULL,
    `ApocalypseDate` datetime,
    `ApocalypseHarbinger` varchar(80) DEFAULT NULL,
    `ApocalypseDescription` text DEFAULT NULL,
    `ApocalypseSurvivors` int(10),
  PRIMARY KEY (`ApocalypseID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
