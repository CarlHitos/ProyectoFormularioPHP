<?php
function cli_foreach($clientes) {
    foreach ($clientes as $cliente) {
        include_once 'datos.php';
        include_once 'registros.php';
        $codcliente = $cliente[0];
        $nombre = $cliente[1];
        $apellidos = $cliente[2];
        $direccion = $cliente[3];
        $telefono = $cliente[4];
        $email = $cliente[5];
        $stmt->bind_param("ssssss", $codcliente, $nombre, $apellidos, $direccion, $telefono, $email);
            if ($stmt->execute() === FALSE) {
            echo "Error al insertar el cliente con código " . $codcliente . ": " . $conn->error;
        }
    }
}
/* 
function pro_foreach($producto) {

}
 */
?>