<?php
include_once '../Conexion.php';

if ($_POST) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    $consulta = "SELECT contraseña FROM usuarios WHERE usuario='$usuario'";
    $data = $conexion->selectOne($consulta);

    if ($data) {
        if ($contraseña == $data) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            $_SESSION['contraseña'] = $contraseña;

            header('Location: ../inicio.php');
            
        } else {
            echo '<script type="text/javascript">
                alert("Usuario o contraseña incorrecta");
                window.location.replace("inicio_sesion.php");
                </script>';
        }
    } else {
        echo '<script type="text/javascript">
            alert("Usuario o contraseña incorrecta");
            window.location.replace("inicio_sesion.php");
            </script>';
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}
