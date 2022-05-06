<?php

$consulta = "SELECT *, departamento FROM `propietarios` INNER JOIN departamentos on departamentos.id = propietarios.id_departamento";
$propietarios = $conexion->selectAll($consulta);