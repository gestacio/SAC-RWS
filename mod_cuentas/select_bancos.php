<?php

include_once '../Conexion.php';
// $objeto = new Conexion();
// $conexion = $objeto->conectar();


$consulta = "SELECT * FROM bancos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$bancos = $resultado->fetchAll(PDO::FETCH_ASSOC);
$objeto = null;

// var_dump($pagos_movil);
