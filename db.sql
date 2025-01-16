-- Check if the database exists, drop it if it does and create a new one
IF (SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'district') IS NOT NULL
BEGIN
    DROP DATABASE district;
END;
CREATE DATABASE district;

-- Switch to the new database
USE district;

-- Creating tables

-- Table: user
CREATE TABLE user (
    userId INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL, 
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    addresse VARCHAR(100) NOT NULL,
    codePostal INT NOT NULL,
    ville VARCHAR(50) NOT NULL,
    tel INT NOT NULL,
    userType VARCHAR(50) NOT NULL
);

-- Table: categorie
CREATE TABLE categorie (
    catId INT PRIMARY KEY AUTO_INCREMENT,
    catName VARCHAR(50) NOT NULL,
    catDescription VARCHAR(255) NOT NULL
);

-- Table: client
CREATE TABLE client (
    clId INT PRIMARY KEY AUTO_INCREMENT,
    fullName VARCHAR(50) NOT NULL,
    email VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    photo VARCHAR(255),
    addresse VARCHAR(50) NOT NULL,
    codePostal INT NOT NULL,
    tel INT NOT NULL
);

-- Table: plats
CREATE TABLE plats (
    platId INT PRIMARY KEY AUTO_INCREMENT,
    platName VARCHAR(50) NOT NULL,
    platDescription VARCHAR(255) NOT NULL,
    platPrice CHAR(50) NOT NULL,
    catId INT,
    FOREIGN KEY (catId) REFERENCES categorie(catId) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Table: command
CREATE TABLE command (
    comId INT PRIMARY KEY AUTO_INCREMENT,
    commandStatus VARCHAR(50) NOT NULL,
    commandDate DATE NOT NULL,
    editionFacture INT NOT NULL,
    clId INT,
    FOREIGN KEY (clId) REFERENCES client(clId) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Table: cart
CREATE TABLE cart (
    commandPlatQuantity INT NOT NULL,
    commandPlatPrice INT NOT NULL,
    commandTotalPrice INT NOT NULL,
    platId INT,
    comId INT,
    FOREIGN KEY (platId) REFERENCES plats(platId) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (comId) REFERENCES command(comId) ON DELETE CASCADE ON UPDATE CASCADE,
    PRIMARY KEY (platId, comId)  -- Composite primary key to ensure uniqueness
);
