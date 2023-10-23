<!DOCTYPE html>
<html lang="en">
<head>
    <title>Creacion BD</title>
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
    <div class=form-bd>
        <?php
        //Incluimos el fichero de comprobacion de conexion
        include 'conexion.php';
        //Creamos variables
        $sql = "CREATE DATABASE $nameBD";
        //Mostramos por pantalla el resultado de la peticion
        if ($conn->query($sql) === FALSE) {
            echo "Error al crear la base de datos: " . $conn->error;
        } else {
            echo "<hr><p>Base de datos creada correctamente</p>";
        }
        echo "<hr><h3>¿Quieres crear las tablas?</h3>";
        ?>
    </div>
    <div>
        <a class="boton" href="tablas.php" target="_blank">Crear tablas</a>
    </div>
</body>
</html>