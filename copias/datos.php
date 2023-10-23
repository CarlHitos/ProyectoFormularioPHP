<?php
include_once 'registros.php';
include_once 'funciones.php';
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
            array("COD001", "Producto 1", 10.50),
            array("COD002", "Producto 2", 25.00),
            array("COD003", "Producto 3", 15.75)
        );
?>