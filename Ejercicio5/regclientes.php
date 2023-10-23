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
        $regcli = "INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($regcli);
        // verificamos si hay algún error en la preparación de la consulta
        if ($stmt === FALSE) {
            echo "Error al preparar la consulta: " . $conn->error;
        }
        // recorremos el array y ejecutamos la consulta de inserción
        foreach ($clientes as $cliente) {
            $codcliente = $cliente[0];
            $nombre = $cliente[1];
            $apellidos = $cliente[2];
            $direccion = $cliente[3];
            $telefono = $cliente[4];
            $email = $cliente[5];
            // Vinculamos parámetros
            $stmt->bind_param("ssssss", $codcliente, $nombre, $apellidos, $direccion, $telefono, $email);
            if ($stmt->execute() === FALSE) {
            echo "Error al insertar el cliente con código " . $codcliente . ": " . $conn->error;
            }
        }echo "<br><h3>Se han insertado los datos correctamente en la tabla Clientes</h3>";
        // Cerramos la consulta y la conexión
        $stmt->close();
        $conn->close();
        ?>
    </div>
</body>
</html>