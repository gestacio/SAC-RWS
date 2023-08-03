<?php
include_once '../Conexion.php';

if (isset(apache_request_headers()['token'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
        parse_str(file_get_contents("php://input"), $_DELETE);

        if (isset($_DELETE['id'])) {
            $id = $_DELETE['id'];

            $consulta = "DELETE FROM departamentos WHERE id = '$id'";
            $resultado = $conexion->delete($consulta);

            if ($resultado == 1) {
                $data = array(
                    'msg' => 'Departamento eliminado correctamente',
                    'code' => http_response_code(200),
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'msg' => 'No se ha podido eliminar departamento',
                    'code' => http_response_code(400),
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'msg' => 'ID Departamento no encontrado en la solicitud',
                'code' => http_response_code(404),
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