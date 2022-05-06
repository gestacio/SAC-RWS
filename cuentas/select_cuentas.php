<?php

include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();


$consulta = "SELECT * FROM cuentas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$cuentas = $resultado->fetchAll(PDO::FETCH_ASSOC);

// var_dump($pagos_movil);
$objeto = null;