<?php
if ($_POST) {
    $usuario = $_POST['usuario'];

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    try {
        $consulta = "DELETE FROM usuarios
        WHERE usuario = '$usuario'";

        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("Usuario eliminado exitosamente");
            window.location.replace("administrar_usuarios.php");
            </script>';
        } else {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("No se ha podido eliminar correctamente el usuario");
            window.location.replace("administrar_usuarios.php");
            </script>';
        }
    } catch (PDOException $exception) {
        $error = $exception->getMessage();
        echo "An Error has occurred " . $error;
    } catch (Exception $e) {
        $objeto = null;
        die("El error de Conexión es: " . $e->getMessage());
    }
}
