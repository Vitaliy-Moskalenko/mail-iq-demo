CREATE DATABASE IF NOT EXISTS polls CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS `users` (
	`id`    int NOT NULL AUTO_INCREMENT,
	`name`  varchar(256) NOT NULL,
	`email` varchar(127) NOT NULL unique,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `polls` (
	`id`          int NOT NULL AUTO_INCREMENT,
	`user_email`  varchar(127) NOT NULL,
	`question_1`  varchar(256), 
	`question_2`  varchar(256), 
	`question_3`  varchar(256),
	`poll_result` tinyint(1) DEFAULT NULL,
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;