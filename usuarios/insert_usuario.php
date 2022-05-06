<?php
include_once '../Conexion.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
    $tipo_usuario = $_POST['tipo_usuario'];

    if ($contraseña != $contraseña2) {
        echo '<script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.href = "administrar_usuarios.php";
            </script>';
        die();
    }

    $consulta = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña, tipo_usuario) VALUES ('$nombre', '$apellido', '$usuario', '$contraseña', '$tipo_usuario')";

    if ($conexion->insert($consulta)) {
        echo '<script type="text/javascript">
            alert("Usuario Guardado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';
    } else {
        echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente el usuario");
            window.location.replace("administrar_usuarios.php");
            </script>';
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}

$objeto->close();
