<?php

if ($_POST) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    // $consulta = "SELECT usuario FROM usuarios WHERE usuario='$usuario'";
    // $resultado = $conexion->prepare($consulta);
    // $resultado->execute();
    // $data = $resultado->fetchColumn(0);

    try {
        $consulta = "SELECT contraseña FROM usuarios WHERE usuario='$usuario'";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data = $resultado->fetchColumn(0);

        if ($data) {
            if ($contraseña == $data) {
                session_start();
                $_SESSION['usuario'] = $usuario;
                $_SESSION['contraseña'] = $contraseña;

                // var_dump($_SESSION['usuario']);
                $objeto = null;
                // die();
                header('Location: ../inicio.php'); 
                // if (isset($_SESSION['usuario'])) { 
                    
                // }
            } else {
                $objeto = null;
                echo '<script type="text/javascript">
                alert("Usuario o contraseña incorrecta");
                window.location.replace("inicio_sesion.php");
                </script>';
            }
        } else {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("Usuario o contraseña incorrecta");
            window.location.replace("inicio_sesion.php");
            </script>';
        }
        
        $objeto = null;
        

    } catch (Exception $e) {
        $objeto = null;
        die("El error de Conexión es: ". $e->getMessage());
    }

} else {
    $objeto = null;
    die("Ha ocurrido un error en el envío del POST");
}
