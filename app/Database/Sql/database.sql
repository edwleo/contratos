CREATE DATABASE bdcontratos;

CREATE TABLE clientes
(
	idcliente 		INT AUTO_INCREMENT PRIMARY KEY,
    tipodoc			ENUM('DNI', 'CEX') DEFAULT 'DNI',
    nrodocumento	VARCHAR(11) 	NOT NULL,
    apellidos 		VARCHAR(50) 	NULL,
    nombres			VARCHAR(50) 	NULL,
    razonsocial 	VARCHAR(200)	NULL,
    tienda 			ENUM('Chincha', 'Ica') NOT NULL DEFAULT 'Chincha',
    fechacontrato	DATE 			NOT NULL,
    fecharegistro 	DATE 			NOT NULL DEFAULT NOW(),
    tipovehiculo 	ENUM('Suv', 'Hatchback', 'Sedan', 'Camioneta', 'Minivan', 'Mototaxi'),
    marca 			VARCHAR(50) 	NOT NULL,
    modelo 			VARCHAR(20)		NOT NULL,
    color 			VARCHAR(20) 	NOT NULL,
    avehiculo 		CHAR(4) 		NOT NULL,
    vin 			VARCHAR(20) 	NOT NULL,
    pathexpediente	VARCHAR(200) 	NOT NULL
)ENGINE = INNODB;