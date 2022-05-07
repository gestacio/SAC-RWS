<?php

$consulta = "SELECT *, familiares.nombre as familiar, propietarios.nombre as propietario FROM familiares INNER JOIN propietarios ON propietarios.id = familiares.id_propietario";
$familiares = $conexion->selectAll($consulta);

$consulta = "SELECT COUNT(*) as count_familiares FROM familiares INNER JOIN propietarios ON propietarios.id = familiares.id_propietario GROUP BY id_propietario;";
$count_familiares = $conexion->selectAll($consulta);