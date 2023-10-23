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
        include 'conexion.php';
        include_once 'datos.php';
        include_once 'funciones.php';
        // Seleccionamos la base de datos
        mysqli_select_db($conn, $nameBD);        
        // prepara la consulta de inserción
        $regcli = "INSERT INTO cliente (codcliente, nombre, apellidos, direccion, telefono, email) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($regcli);
        cli_foreach($clientes);
        
        // prepara la consulta de inserción
/*         $regpro = "INSERT INTO producto (codproducto, descripcion, precio) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($regpro);
        //Llamamos a la funcion foreach para la tabla clientes
        function pro_foreach($producto);
        // Vincular parámetros
        $stmt->bind_param("ssd", $codproducto, $descripcion, $precio) */;








        //Cerramos la conexion           
        mysqli_close($conn);
        ?>
    </div>
</body>
</html>