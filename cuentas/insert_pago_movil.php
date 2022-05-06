<?php
if ($_POST) {
    $cedula = $_POST['cedula'];
    $telefono = $_POST['telefono'];
    $banco = $_POST['banco'];
    $banco = 'banesco';

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();

    try {
        $consulta = "INSERT INTO pago_movil (cedula, telefono, banco)
                    VALUES ('$cedula', '$telefono', '$banco')";
                    
        $resultado = $conexion->prepare($consulta);

        if ($resultado->execute()) {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("Pago Móvil Guardado exitosamente");
            window.location.replace("pago_movil.php");
            </script>';

        } else {
            $objeto = null;
            echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente el pago móvil");
            // window.location.replace("pago_movil.php");
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
