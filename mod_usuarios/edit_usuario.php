<?php
include_once '../globals.php';
include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

if ($_POST) {
    // var_dump($_POST);
    // die();
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

    try {
        $consulta = "UPDATE usuarios SET nombre='$nombre', apellido='$apellido', usuario='$usuario', contraseña='$contraseña', tipo_usuario='$tipo_usuario' WHERE id='$user_id'";
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            echo '<script type="text/javascript">
            alert("Usuario Editado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';
            $objeto->close();
        } else {
            echo '<script type="text/javascript">
            alert("No se ha podido editar correctamente el usuario");
            // window.location.replace("administrar_usuarios.php");
            </script>';
            my_print_r($resultado->errorInfo());
            $objeto->close();
            die();
        }
    } catch (PDOException $exception) {
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
