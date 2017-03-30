-- MySQL dump 10.11
--
-- to install this database, from terminal, type:
-- mysql -u root -p -h SERVERNAME nerdluv < nerdluv.sql
--
-- Host: localhost   Database: nerdluv
-- ------------------------------------------------------
-- Server version   5.0.45-log

DROP TABLE IF EXISTS basic_info;
CREATE TABLE basic_info (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
name VARCHAR(16) DEFAULT NOT NULL,
gender ENUM ('M','F') DEFAULT 'F',
age INT(2) UNSIGNED NOT NULL,
PRIMARY KEY (id)
);
INSERT INTO basic_info VALUES
(NULL, 'Ada Lovelace', 'F', 96),
(NULL, 'Adele Goldberg', 'F', 65),
(NULL, 'Alan Turning', 'M', 41),
(NULL, 'Anakin Skywalker','M',27),
(NULL, 'Angry Video Game Nerd','M',29),
(NULL, 


DROP TABLE IF EXISTS type;
CREATE TABLE type (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
person ENUM ('INTJ','INTP','INFJ','INFP','ISTJ','ISTP','ISFJ','ISTP','ENTJ','ENTP','ENFJ','ENFP','ESTJ','ESTP','ESFJ','ESTP'),
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS fav_os;
CREATE TABLE fav_os (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMENT,
system ENUM ('Mac OS X','Windows','Linux') DEFAULT 'Windows',
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS seeking;
CREATE TABLE seeking (
id INT(8) UNSIGNED NOT NULL AUTO_INCREMEMNT,
min INT(2) UNSIGNED NOT NULL 