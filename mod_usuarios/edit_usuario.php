<?php
include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

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

    try {
        $consulta = "INSERT INTO usuarios (nombre, apellido, usuario, contraseña, tipo_usuario)
                    VALUES ('$nombre', '$apellido', '$usuario', '$contraseña', '$tipo_usuario')";
                    
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            $objeto->close();
            echo '<script type="text/javascript">
            alert("Usuario Guardado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';

        } else {
            $objeto->close();
            echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente el usuario");
            window.location.replace("administrar_usuarios.php");
            </script>';
        }


    } catch(PDOException $exception) {
        $error = $exception->getMessage();
        echo "An Error has occurred " . $error;

    } catch (Exception $e) {
        $objeto->close();
        die("El error de Conexión es: " . $e->getMessage());
    }
} else {
    $objeto->close();
    die("Ha ocurrido un error en el envío del POST");
}
$objeto->close();
