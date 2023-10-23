CREATE TABLE cliente (
    codcliente varchar(20) NOT NULL PRIMARY KEY,
    nombre varchar(100) NOT NULL,
    apellidos varchar(200) NOT NULL,
    direccion varchar(200),
    telefono varchar(20),
    email varchar(100)
);