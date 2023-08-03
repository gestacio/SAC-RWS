<?php
include_once '../Conexion.php';

if (isset(apache_request_headers()['token'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
        parse_str(file_get_contents("php://input"), $_PUT);
        $departamento = $_PUT['departamento'];

        $consulta = "SELECT id FROM departamentos WHERE departamento = '$departamento'";
        $departamentos = $conexion->selectAll($consulta);

        if (!$departamentos) {
            $consulta = "INSERT INTO departamentos (departamento) VALUES ('$departamento')";

            if ($conexion->insert($consulta)) {
                $data = array(
                    'msg' => 'Departamento ingresado correctamente',
                    'code' => http_response_code(200),
                    'departamento' => $departamento,
                );
                echo json_encode($data);
            } else {
                // $exception = (PDO::ERRMODE_EXCEPTION);
                $data = array(
                    'msg' => 'No se ha podido ingresar departamento',
                    'code' => http_response_code(400),
                    // 'exception' => $exception,
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'msg' => 'Departamento ya existente',
                'code' => http_response_code(400),
            );
            echo json_encode($data);
        }
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
        'code' => http_response_code(401),
    );
    echo json_encode($data);
}