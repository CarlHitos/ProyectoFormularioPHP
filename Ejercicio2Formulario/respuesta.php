<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="form-register">
        <?php
        echo "<h4>Datos del formulario PHP</h4>";
        echo "El nombre que ha introducido es: " . "<b>" . $nombre = $_POST["nombre"] . "</b>" . "<br><br>";
        echo "El apellido que ha introducido es: " . "<b>" . $apellidos = $_POST["apellidos"] . "</b>" . "<br><br>";
        echo "La direccion que ha introducido es: " . "<b>" . $direccion = $_POST["direccion"] . "</b>" . "<br><br>";
        echo "El telefono que ha introducido es: " . "<b>" . $telefono = $_POST["telefono"] . "</b>" . "<br><br>";
        echo "La poblacion que ha introducido es: " . "<b>" . $apellidos = $_POST["poblacion"] . "</b>" . "<br><br>";
        echo "La provincia que ha introducido es: " . "<b>" . $apellidos = $_POST["provincia"] . "</b>" . "<br><br>";
        ?>
    </section>
</body>

</html>