<?php

include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();


$consulta = "SELECT * FROM pago_movil";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$pagos_movil = $resultado->fetchAll(PDO::FETCH_ASSOC);

// var_dump($pagos_movil);
$objeto = null;
// var_dump($objeto);