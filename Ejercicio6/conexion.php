<!DOCTYPE html>
<html lang="en">
<head>
    <title>conexion</title>
</head>
<body>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $nameBD = "Ventas";
        // Conexión con el servidor
        $conn = mysqli_connect($servername, $username, $password);
        // Verificar la conexión
        if (!$conn) {
            die("Conexión fallida: " . mysqli_connect_error());
        }
        ?>
</body>
</html>