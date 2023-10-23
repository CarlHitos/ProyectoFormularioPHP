<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <section class="form-register">
        <h4>Formulario PHP</h4>
        <form action="respuesta.php" method="post">
            Nombre: <input class="controls" type="TEXT" name="nombre" placeholder="Ingrese su nombre">
            Apellidos: <input class="controls" type="TEXT" name="apellidos" placeholder="Ingrese sus apellidos">
            Direccion: <input class="controls" type="TEXT" name="direccion" placeholder="Ingrese su direccion">
            Telefono: <input class="controls" type="TEXT" name="telefono" placeholder="Ingrese su telefono">
            Poblacion: <input class="controls" type="TEXT" name="poblacion" placeholder="Ingrese su poblacion">
            Provincia: <input class="controls" type="TEXT" name="provincia" placeholder="Ingrese su provincia">
            <input class="buttons" type="submit" value="Enviar">
    </section>
</body>

</html>