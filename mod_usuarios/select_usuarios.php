<?php

include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();


$consulta = "SELECT usuarios.id, usuarios.usuario, tipo_usuario.tipo_usuario FROM usuarios INNER JOIN tipo_usuario ON tipo_usuario.id = usuarios.tipo_usuario;";
$resultado = $conexion->prepare($consulta);
$resultado->execute();

$usuarios = $resultado->fetchAll(PDO::FETCH_ASSOC);
$objeto = null;