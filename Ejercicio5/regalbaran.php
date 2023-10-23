<!DOCTYPE html>
<html lang="en">

<head>
    <title>Entrada de registros</title>
    <link rel="stylesheet" href="/MP09UF1/Ejercicio4/tools/style.css">
    <link rel="stylesheet" href="/MP09UF1/Ejercicio4/tools/stylenav.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="formulario.php">Formulario</a></li>
                <li><a href="tablas.php">Crear Tablas</a></li>
                <li><a href="registros.php">Insertar</a></li>
                <li><a href="consultas.php">Consultas</a></li>
                <li><a href="modificaciones.php">Modificaciones</a></li>
            </ul>
        </nav>
    </header>
    <div class="form-bd">
        <?php
        include 'conexion.php';
        include 'datos.php';
        // Seleccionamos la base de datos
        mysqli_select_db($conn, $nameBD);
        // preparamos la consulta de inserción
        $regalba = "INSERT INTO albaran (numalbaran, codcliente, fecha) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($regalba);
        // verificamos si hay algún error en la preparación de la consulta
        if ($stmt === FALSE) {
            echo "Error al preparar la consulta: " . $conn->error;
        }
        //  Iteramos sobre los albaranes y ejecutamos la consulta para cada uno
        foreach ($albaranes as $albaran) {
            $numalbaran = $albaran[0];
            $codcliente = $albaran[1];
            $fecha = $albaran[2];
            // Vinculamos parámetros
            $stmt->bind_param("iss", $numalbaran, $codcliente, $fecha);
            $stmt->execute();
        }
        echo "<br><h3>Se han insertado los datos correctamente en la tabla Albarán</h3>";
        // Cerramos la consulta y la conexión
        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>

</html>