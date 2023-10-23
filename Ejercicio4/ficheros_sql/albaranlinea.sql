CREATE TABLE albaranlinea (
    numalbaran int(11) NOT NULL,
    numlinea int(11) NOT NULL AUTO_INCREMENT,
    codproducto varchar(20) NOT NULL,
    cantidad int(11) NOT NULL,
    PRIMARY KEY (numlinea, numalbaran),
    FOREIGN KEY (numalbaran) REFERENCES albaran(numalbaran),
    FOREIGN KEY (codproducto) REFERENCES producto(codproducto)
);