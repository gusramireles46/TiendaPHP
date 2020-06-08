CREATE DATABASE tienda;

/*
 * Creación del ususario administrador (NO ROOT)
 * CREATE USER 'tiendaFDB'@'localhost' IDENTIFIED BY '@admin';
 * GRANT ALL PRIVILEGES ON 'tienda'.* TO 'tiendaFDB'@'localhost';
 */

USE tienda;

CREATE TABLE Usuarios (
    idUsuario INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(25),
    apellidoP VARCHAR(25),
    apellidoM VARCHAR(25),
    username VARCHAR(15),
    pwdUsuario VARCHAR(20),
    dirUsuario VARCHAR(150),
    cpUsuario INT(5),
    telUSuario CHAR(10),
    nivelUsuario INT(1),
    PRIMARY KEY (idUsuario)
);

CREATE TABLE tipoProducto(
    tipoProducto INT NOT NULL,
    nombreTipo VARCHAR(25),
    PRIMARY KEY (tipoProducto)
);

CREATE TABLE Productos (
    idProducto INT NOT NULL AUTO_INCREMENT,
    nomProducto VARCHAR(50) NOT NULL,
    descripcion VARCHAR(100),
    costo FLOAT (8,2),
    precio FLOAT (8,2) NOT NULL,
    isAvailable BIT,
    cantidad INT,
    tipoProducto INT NOT NULL,
    PRIMARY KEY (idProducto),
    FOREIGN KEY (tipoProducto) REFERENCES tipoProducto(tipoProducto)
);

CREATE TABLE Proveedores(
  idProveedor INT NOT NULL AUTO_INCREMENT,
  nomProveedor VARCHAR(80),
  dirProveedor VARCHAR(150),
  telProveedor CHAR(10),
  mailProveedor VARCHAR(30),
  PRIMARY KEY (idProveedor)
);