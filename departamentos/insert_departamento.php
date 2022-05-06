<?php
include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

if ($_POST) {
    $departamento = $_POST['departamento'];

    $consulta = "SELECT id FROM departamentos WHERE departamento = $departamento";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $departamentos = $resultado->fetchAll(PDO::FETCH_ASSOC);

    // var_dump(is_bool($departamentos));
    // die();
    


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