CREATE DATABASE GALERIA;
USE GALERIA;
CREATE TABLE IMAGECRUD (
  ID INT AUTO_INCREMENT PRIMARY KEY,
  TITLE VARCHAR(30) NOT NULL,
  DESCRIPTION VARCHAR(100) NOT NULL,
  URL VARCHAR(255) NOT NULL,
  IMAGE VARCHAR(255) NOT NULL
);
