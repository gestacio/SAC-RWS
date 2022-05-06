<?php
if ($_POST) {
    $id = $_POST['id'];

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    try {
        $consulta = "DELETE FROM pago_movil
        WHERE id = '$id'";
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
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
    } catch (PDOException $exception) {
        $error = $exception->getMessage();
        echo "An Error has occurred " . $error;
        $objeto->close();
    } catch (Exception $e) {
        $objeto->close();
        die("El error de Conexión es: " . $e->getMessage());
    }
}

$objeto->close();