<?php

$consulta = "SELECT * FROM propietarios INNER JOIN departamentos ON departamentos.id = propietarios.id_departamento";
$propietarios = $conexion->selectAll($consulta);

