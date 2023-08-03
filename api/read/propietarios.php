<?php
include_once '../Conexion.php';

if (isset(apache_request_headers()['token'])) {

    $METHOD = $_SERVER['REQUEST_METHOD'];

    if ($METHOD == "GET") {
        $consulta = $conexion->selectAll("SELECT * FROM propietarios");
        $data = array(
            'msg' => 'Solicitud recibida',
            'code' => http_response_code(200),
            'data' => $consulta,
        );
        echo json_encode($data);
    } else {
        $data = array(
            'msg' => 'Error protocolo HTTP',
            'code' => http_response_code(400),
        );
        echo json_encode($data);
    }
} else {
    $data = array(
        'msg' => 'Error token no autorizado',
        'code' => http_response_code(400),
    );
    echo json_encode($data);
}
