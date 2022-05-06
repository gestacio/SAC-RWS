<?php
include_once '../Conexion.php';

if ($_POST) {
    $nombre = $_POST['nombre'];
    $propietario = $_POST['propietario'];
    $tipo_familiar = $_POST['tipo_familiar'];
    $edad = $_POST['edad'];

    $consulta = "INSERT INTO familiares (id_propietario, nombre, tipo_familiar, edad) 
    VALUES ('$propietario', '$nombre', '$tipo_familiar', '$edad')";

    try {
        $conexion->insert($consulta);
        registro_guardado("familiares.php");
    } catch(Exception $ex) {
        registro_fallido($ex);
    }
} else {
    die("Ha ocurrido un error en el envío del POST");
}
