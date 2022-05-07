<?php

$consulta = "SELECT * FROM `departamentos`";
$departamentos = $conexion->selectAll($consulta);
$consulta = "SELECT * FROM `departamentos` WHERE id not in (SELECT id_departamento FROM propietarios)";
$departamentos_x_propietario = $conexion->selectAll($consulta);


