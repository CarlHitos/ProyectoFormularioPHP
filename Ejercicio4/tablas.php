<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creacion de tablas</title>
    <link rel="stylesheet" href="./tools/style.css">
    <link rel="stylesheet" href="./tools/stylenav.css">
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
        include ('conexion.php');
        // Seleccionamos la base de datos
        mysqli_select_db($conn, $nameBD);
        //Declaramos variables que incluyen las consultas sql mediante include de los ficheros
        $cliente = file_get_contents('./ficheros_sql/cliente.sql');
        $albaran = file_get_contents('./ficheros_sql/albaran.sql');
        $albalinea = file_get_contents('./ficheros_sql/albaranlinea.sql');
        $producto = file_get_contents('./ficheros_sql/producto.sql');
        //Creamos condicionales para crear cada una de las tablas
        if (mysqli_query($conn, $cliente)) {
            echo 'La tabla CLIENTE se creó correctamente<hr>';
        } else {
            echo 'Error al crear la tabla: ' . mysqli_error($conn);
        }        
        if (mysqli_query($conn, $albaran)) {
            echo 'La tabla ALBARAN se creó correctamente<hr>';
        } else {
            echo 'Error al crear la tabla: ' . mysqli_error($conn);
        }
        if (mysqli_query($conn, $producto)) {
            echo 'La tabla PRODUCTO se creó correctamente<hr>';
        } else {
            echo 'Error al crear la tabla: ' . mysqli_error($conn);
        }
        if (mysqli_query($conn, $albalinea)) {
            echo 'La tabla ALBARANLINEA se creó correctamente<hr>';
        } else {
            echo 'Error al crear la tabla: ' . mysqli_error($conn);
        }
        mysqli_close($conn);
        echo "<br><h3>¿Quieres insertar los registros?</h3>";
        ?>
    </div>
    <div>
        <a class="boton" href="registros.php" target="_blank">Insertar registros</a>
    </div>
</body>
</html>