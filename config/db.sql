#####################################################################################
######                                                                         ######
######   Athor: Dountio sidof                                                  ######
######   License: LLC sidof.io                                                 ######
######   Date: Sept 09th, 2023                                                  ######
######   Version: 1.0                                                          ######
######                                                                         ######
#####################################################################################


DROP DATABASE IF EXISTS kdm;
CREATE DATABASE kdm;
SET NAMES 'UTF8MB4';
USE kdm;

CREATE TABLE users(
    usersId int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(50) UNIQUE,
    password VARCHAR(100),
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE = INNODB;
DESCRIBE users;
INSERT INTO users(usersId, email, password)
VALUES (1, "kdm", "passe");
SELECT *
FROM users;

CREATE TABLE appoitement
(
    id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    appointmentDate VARCHAR(50) NOT NULL,
    customerName VARCHAR(50) NOT NULL,
    customerEmail VARCHAR(50) NOT NULL,
    customerGender VARCHAR(50)NOT NULL
);

DESCRIBE appoitement;

SHOW TABLES;