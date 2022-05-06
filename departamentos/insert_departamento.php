<?php
include_once '../Conexion.php';

if ($_POST) {
    $departamento = $_POST['departamento'];
    
    $consulta = "SELECT id FROM departamentos WHERE departamento = $departamento";
    $departamentos = $conexion->selectAll($consulta);

    if (!$departamentos) {
        $consulta = "INSERT INTO departamentos (departamento) VALUES ('$departamento')";

        if ($conexion->insert($consulta)) {
            echo '<script type="text/javascript">
            alert("Departamento Guardado exitosamente");
            window.location.replace("departamentos.php");
            </script>';
        } else {
            echo '<script type="text/javascript">
            alert("No se ha podido ingresar correctamente el usuario");
            // window.location.replace("departamentos.php");
            </script>';
            echo (PDO::ERRMODE_EXCEPTION);
        }
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}

$objeto->close();