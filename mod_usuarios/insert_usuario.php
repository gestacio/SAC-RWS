<?php
if ($_POST) {
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
    // $email = $_POST['email'];
    $tipo_usuario = $_POST['tipo_usuario'];

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    try {
        $consulta = "INSERT INTO usuarios (usuario, contraseña, tipo_usuario)
                    VALUES ('$usuario', '$contraseña', '$tipo_usuario')";
                    
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("Usuario Guardado exitosamente");
            window.location.replace("crear_usuario.php");
            </script>';

        } else {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente el usuario");
            window.location.replace("crear_usuario.php");
            </script>';
        }


    } catch(PDOException $exception) {
        $error = $exception->getMessage();
        echo "An Error has occurred " . $error;

    } catch (Exception $e) {
        $objeto = null;
        die("El error de Conexión es: " . $e->getMessage());
    }
} else {
    $objeto = null;
    die("Ha ocurrido un error en el envío del POST");
}
