<?php
include_once '../globals.php';
include_once '../Conexion.php';

if ($_POST) {
    $user_id = $_POST['user_id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
    $tipo_usuario = $_POST['tipo_usuario'];


    if ($contraseña != $contraseña2) {
        echo '<script type="text/javascript">
            alert("Las contraseñas no coinciden");
            window.location.replace("administrar_usuarios.php");
            </script>';
        die();
    }

    $consulta = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', contraseña='$contraseña', tipo_usuario='$tipo_usuario' WHERE id='$user_id'";

    if ($conexion->update($consulta)) {
        echo '<script type="text/javascript">
            alert("Usuario Editado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';
    } else {
        echo '<script type="text/javascript">
            alert("No se ha podido editar correctamente el usuario");
            // window.location.replace("administrar_usuarios.php");
            </script>';
        // my_print_r($resultado->errorInfo());
        // die();
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}

$objeto->close();
