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
        // prepara la consulta de inserción
        $regalbalinea = "INSERT INTO albaranlinea (numalbaran, numlinea, codproducto, cantidad) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($regalbalinea);
        // verifica si hay algún error en la preparación de la consulta
        if ($stmt === FALSE) {
            echo "Error al preparar la consulta: " . $conn->error;
        }
        //  Iteramos sobre los albaranes y ejecutamos la consulta para cada uno
        foreach ($albaranlineas as $albaranlinea) {
            $numalbaran = $albaranlinea[0];
            $numlinea = $albaranlinea[1];
            $codproducto = $albaranlinea[2];
            $cantidad = $albaranlinea[3];
            // Vinculamos parámetros
            $stmt->bind_param("iisi", $numalbaran, $numlinea, $codproducto, $cantidad);
            $stmt->execute();
        }
        echo "<br><h3>Se han insertado los datos correctamente en la tabla AlbaranLinea</h3>";
        // Cerramos la consulta y la conexión
        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>