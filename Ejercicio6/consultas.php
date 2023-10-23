<!DOCTYPE html>
<html lang="en">
<head>
    <title>Consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/MP09UF1/Ejercicio6/style.css">
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
        // Seleccionamos la base de datos
        mysqli_select_db($conn, $nameBD);
        //Creamos la funcion para crear las tablas
        function imprimirTabla($filas)
        {
            echo '<table class="table table-dark table-striped">';
            // Imprimimos el encabezado de la tabla
            echo '<tr><th>Código</th><th>Nombre</th><th>Apellidos</th><th>Dirección</th><th>Teléfono</th><th>Email</th></tr>';
            // Imprimimos cada fila
            foreach ($filas as $fila) {
                echo "<tr><td>".$fila["codcliente"]."</td><td>".$fila["nombre"]."</td><td>".$fila["apellidos"]."</td><td>".$fila["direccion"]."</td><td>".$fila["telefono"]."</td><td>".$fila["email"]."</td></tr>";
            }
            echo '</table>';
        }
        // Consulta 1
        echo "<h3>Datos de los clientes que viven en la calle “de la vida”</h3><hr>";
        $query = "SELECT * FROM cliente WHERE direccion LIKE '%de la vida%'";
        $resultado = mysqli_query($conn, $query);
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        imprimirTabla($filas);
        // Consulta 2
        echo "<h3>Datos de los clientes cuyo código empiece por 'a'</h3><hr>";
        $query = "SELECT * FROM cliente WHERE codcliente LIKE 'a%'";
        $resultado = mysqli_query($conn, $query);
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        imprimirTabla($filas);
        // Consulta 3
        echo "<h3>Datos de los clientes cuyo email sea de Gmail</h3><hr>";
        $query = "SELECT * FROM cliente WHERE email LIKE '%@gmail.com'";
        $resultado = mysqli_query($conn, $query);
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        imprimirTabla($filas);
        // Consulta 4
        echo "<h3>Código del cliente con nombre 'Ramón' y apellidos 'Díaz García'</h3><hr>";
        $query = "SELECT * FROM cliente WHERE nombre = 'Ramón' AND apellidos = 'Díaz García'";
        $resultado = mysqli_query($conn, $query);
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        imprimirTabla($filas);
        // Consulta 5
        echo "<h3>Nombre y apellidos del cliente con código 'b06'</h3><hr>";
        $query = "SELECT * FROM cliente WHERE codcliente = 'b06'";
        $resultado = mysqli_query($conn, $query);
        $filas = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        imprimirTabla($filas);
        ?>
    </div>
</body>

</html>