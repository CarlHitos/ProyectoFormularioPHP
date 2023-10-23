<?php
    //Declaramos las variables
    $servername = "localhost";
    $database = "bdcarlostoro";
    $username = "root";
    $password = "";

    // Conexión con la base de datos
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Verificamos la conexión
    if (!$conn) {
        die("Conexión fallida: " . mysqli_connect_error());
    }
    echo "<h1>Conexión exitosa</h1>";
?>
