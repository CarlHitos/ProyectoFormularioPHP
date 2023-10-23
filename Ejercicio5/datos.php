<?php
        // datos de los clientes a insertar
        $clientes = array(
            array("a01", "Agustin", "Alonso Berzosa", "C/ de la vida 2", "601601601", "pe@as.com"),
            array("a02", "Martha Yaneth", "Bergaño Jaramillo", "C/ de la vida 3", "602602602", "santiago@yahoo.es"),
            array("b01", "Carina Janneth", "Collaguazo Lalangui", "C/ de la vida 4", "603603603", "mio@tuyo.es"),
            array("b02", "Ramon", "Diaz Garcia", "C/ de la vida 5", "604604604", "mario@yahoo.es"),
            array("b03", "María Francisca", "Gimenez Llagunes", "C/ de la vida 6", "605605605", "chesca@gmail.com"),
            array("b04", "Isabel", "Losilla Perez", "C/ de la vida 7", "606606606", "isable@hotmail.com"),
            array("b05", "El Bachir", "Moujib Dadou", "C/ de la vida 8", "604604604", "elbachir@gmail.com"),
            array("b06", "Sergio", "Reyes Cespedes", "C/ de la vida 9", "606206205", "sergio@yahoo.es"),
            array("b07", "Jose María", "Soler Gonzalez", "C/ de la vida 10", "606606606", "josemaria@gmail.com")
        );

        $productos = array(
            array("A0001", "Caja ATX fuente 500 watt", 25.30),
            array("A0002", "Placa base intel p5g41t-m lx", 36.00),
            array("A0003", "Procesador intel celeron e3100", 25.00),
            array("A0004", "Memoria 2gb pc-1333 ddr3", 12.00),
            array("A0005", "Disco duro 500gb sata3", 60.00),
            array("A0006", "lector dvd rw sata lg h22n", 22.00)
        );

        $albaranes = array(
            array(1, "b02", "2011-11-11"),
            array(2, "b06", "2011-11-12"),
            array(3, "a01", "2011-11-13"),
            array(4, "b02", "2011-11-14"),
            array(5, "a01", "2011-11-15"),
            array(6, "b07", "2011-11-16")
        );

        $albaranlineas = array(
            array(1, 1, "A0001", 3),
            array(1, 2, "A0002", 2),
            array(2, 3, "A0004", 3),
            array(2, 4, "A0002", 12),
            array(3, 5, "A0004", 1),
            array(4, 6, "A0002", 1),
            array(4, 7, "A0004", 2),
            array(4, 8, "A0004", 5),
            array(5, 9, "A0002", 6)
        );
?>