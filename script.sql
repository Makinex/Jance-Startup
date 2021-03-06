CREATE DATABASE jance ;
USE jance;

CREATE TABLE usuarios(
COD_USU INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(45) NOT NULL,
sobrenome VARCHAR(60) NOT NULL,
email VARCHAR(100) NOT NULL,
usuario VARCHAR(45) NOT NULL,
senha VARCHAR (18) NOT NULL,
CONSTRAINT PRIMARY KEY(COD_USU)
);

CREATE TABLE administrador(
COD_ADM INT NOT NULL AUTO_INCREMENT,
nome_adm VARCHAR(45) NOT NULL,
sobrenome_adm VARCHAR(60) NOT NULL,
email_adm VARCHAR(100) NOT NULL,
usuario_adm VARCHAR(45) NOT NULL,
senha_adm VARCHAR (18) NOT NULL,
CONSTRAINT PRIMARY KEY(COD_ADM)
);

CREATE TABLE categoria (
COD_CAT INT NOT NULL AUTO_INCREMENT,
descricao VARCHAR(50) NOT NULL,
CONSTRAINT PRIMARY KEY (COD_CAT)
);

CREATE TABLE remedios (
COD_RE INT NOT NULL AUTO_INCREMENT,
nom_re VARCHAR(45) NOT NULL,
descricao TEXT NOT NULL,
hora TIME NOT NULL,
img_bula VARCHAR(100) NOT NULL,
img_remedio VARCHAR(100),
categoria INT NOT NULL,
CONSTRAINT PRIMARY KEY(COD_RE)
);

CREATE TABLE farmacias (
COD_FARM INT NOT NULL AUTO_INCREMENT,
nom_farm VARCHAR(45) NOT NULL,
estado INT NOT NULL,
cidade VARCHAR(45) NOT NULL,
endereco VARCHAR (45),
CONSTRAINT PRIMARY KEY (COD_FARM)
);

CREATE TABLE estado (
COD_EST INT NOT NULL AUTO_INCREMENT,
descricao VARCHAR(45) NOT NULL,
CONSTRAINT PRIMARY KEY (COD_EST)
);

ALTER TABLE remedios
ADD CONSTRAINT fk_categoria_remedios FOREIGN KEY (categoria)
REFERENCES categoria(COD_CAT);

ALTER TABLE farmacias
ADD CONSTRAINT fk_estado_farmacias FOREIGN KEY (estado)
REFERENCES estado(COD_EST);
