#olySummerSports.sql

drop table if exists olySummerSports;
CREATE TABLE `olySummerSports` (
    `olySummerSportID` int(10) unsigned NOT NULL AUTO_INCREMENT,
    `olySummerSportName` varchar(50) DEFAULT NULL,
    `olySummerSportFirstPlayed` datetime,
    `olySummerSportVariations` int(10),
    `olySummerSportMostMedals` varchar(80) DEFAULT NULL,
    `olySummerSportDescription` text DEFAULT NULL,
  PRIMARY KEY (`olySummerSportID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8
