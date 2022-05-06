<?php
include_once '../Conexion.php';

if ($_POST) {
    $id = $_POST['id'];


    $consulta = "DELETE FROM pago_movil
        WHERE id = '$id'";

    if ($conexion->delete($consulta)) {
        echo '<script type="text/javascript">
            alert("pago_movil eliminado exitosamente");
            window.location.replace("pago_movil.php");
            </script>';
        $objeto->close();
    } else {
        echo '<script type="text/javascript">
            alert("No se ha podido eliminar correctamente el pago_movil");
            window.location.replace("pago_movil.php");
            </script>';
        my_print_r($resultado->errorInfo());
        $objeto->close();
        die();
    }
}

$objeto->close();
