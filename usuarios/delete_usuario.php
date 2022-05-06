<?php
include_once '../Conexion.php';

if ($_POST) {
    $usuario = $_POST['usuario'];

    $consulta = "DELETE FROM usuarios
        WHERE usuario = '$usuario'";

    if ($conexion->delete($consulta)) {
        echo '<script type="text/javascript">
            alert("Usuario eliminado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';
    } else {
        echo '<script type="text/javascript">
            alert("No se ha podido eliminar correctamente el usuario");
            window.location.replace("administrar_usuarios.php");
            </script>';
    }
}
