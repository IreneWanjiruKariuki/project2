

USE `voge`;


DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `messageId` tinyint(1) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(30) DEFAULT NULL,
  `sender_username` varchar(50) DEFAULT NULL,
  `sender_password` text,
  `text_message` text,
  `datecreated` datetime DEFAULT current_timestamp(),
  `dateupdated` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`messageId`)
  ) ;

