<?php

include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();


$consulta = "SELECT * FROM usuarios WHERE tipo_usuario = 2";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$propietarios = $resultado->fetchAll(PDO::FETCH_ASSOC);

// var_dump($pagos_movil);
$objeto = null;
