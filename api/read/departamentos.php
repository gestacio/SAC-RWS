<?php
include_once '../Conexion.php';

if (isset(apache_request_headers()['token'])) {
    $token = base64_decode(apache_request_headers()['token']);
    $token = explode("/", $token);

    $METHOD = $_SERVER['REQUEST_METHOD'];

    if ($METHOD == "GET") {
        if (count($_GET) == 0) {
            $consulta = $conexion->selectAll("SELECT * FROM departamentos");
            $data = array(
                'msg' => 'Solicitud recibida',
                'code' => http_response_code(200),
                'data' => $consulta,
            );
            echo json_encode($data);
        } elseif (count($_GET) == 1) {
            $id = $_GET['id'];
            $consulta = $conexion->selectAll("SELECT * FROM departamentos WHERE id = '$id'");

            if ($consulta) {
                $data = array(
                    'msg' => 'Solicitud recibida',
                    'code' => http_response_code(200),
                    'data' => $consulta,
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'msg' => 'Departamento no encontrado',
                    'code' => http_response_code(404),
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'msg' => 'Error, argumentos no válidos',
                'code' => http_response_code(400),
            );
            echo json_encode($data);
        }
    }
} else {
    $data = array(
        'msg' => 'Error token no autorizado',
        'code' => http_response_code(400),
    );
    echo json_encode($data);
}