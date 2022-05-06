<?php

$consulta = "SELECT * FROM departamentos";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$departamentos = $resultado->fetchAll(PDO::FETCH_ASSOC);

// var_dump($pagos_movil);
// $objeto = null;
$objeto->close();
