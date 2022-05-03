<?php
include_once '../globals.php';
include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

if ($_POST) {
    // var_dump($_POST);
    // die();
    $id = $_POST['id'];
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $banco = $_POST['banco'];

    try {
        $consulta = "UPDATE pago_movil SET cedula='$cedula', telefono='$telefono', banco='$banco' WHERE id='$id'";
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            echo '<script type="text/javascript">
            alert("Pago Movil Editado exitosamente");
            window.location.replace("pago_movil.php");
            </script>';
            $objeto->close();
        } else {
            echo '<script type="text/javascript">
            alert("No se ha podido editar correctamente el pago movil");
            // window.location.replace("editar_pago_movil.php");
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
