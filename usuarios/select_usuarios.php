<?php

$consulta = "SELECT usuarios.*, tipo_usuario.tipo_usuario as tipo FROM usuarios INNER JOIN tipo_usuario ON tipo_usuario.id = usuarios.tipo_usuario;";
$usuarios = $conexion->selectAll($consulta);
