<?php

$consulta = "SELECT * FROM `departamentos` WHERE id not in (SELECT id_departamento FROM propietarios)";
$departamentos = $conexion->selectAll($consulta);



