<?php
include_once '../Conexion.php';

if (isset(apache_request_headers()['token'])) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if (isset($_POST['id']) && isset($_POST['departamento'])) {
            $id = $_POST['id'];
            $departamento = $_POST['departamento'];

            $consulta = "UPDATE departamentos SET departamento = '$departamento' WHERE id = '$id'";
            $resultado = $conexion->update($consulta);

            if ($resultado == 1) {
                $data = array(
                    'msg' => 'Departamento actualizado correctamente',
                    'code' => http_response_code(200),
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'msg' => 'No se ha podido actualizar departamento',
                    'code' => http_response_code(400),
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'msg' => 'ID o Departamento no encontrado en la solicitud',
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