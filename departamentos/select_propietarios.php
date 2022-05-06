<?php

$consulta = "SELECT * FROM usuarios WHERE tipo_usuario = 2";
$propietarios = $conexion->selectAll($consulta);

