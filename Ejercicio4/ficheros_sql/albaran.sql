CREATE TABLE albaran (
    numalbaran int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    codcliente varchar(20) NOT NULL,
    fecha date NOT NULL,
    FOREIGN KEY (codcliente) REFERENCES cliente(codcliente)
);