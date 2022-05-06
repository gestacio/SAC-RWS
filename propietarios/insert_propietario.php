<?php
include_once '../Conexion.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
    $departamento = $_POST['departamento'];

    if ($contraseña != $contraseña2) {
        echo '<script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.href = "propietarios.php";
            </script>';
        die();
    }

    $consulta = "INSERT INTO propietarios (nombre, apellido, usuario, contraseña, id_departamento) 
    VALUES ('$nombre', '$apellido', '$usuario', '$contraseña', '$departamento')";

    try {
        $conexion->insert($consulta);
        registro_guardado("propietarios.php");
    } catch(Exception $ex) {
        registro_fallido($ex);
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}
