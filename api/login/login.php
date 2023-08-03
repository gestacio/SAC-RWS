<?php
include_once '../Conexion.php';
$METHOD = $_SERVER['REQUEST_METHOD'];

if ($METHOD == "POST") {
    if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
    
        $consulta = "SELECT contraseña FROM usuarios WHERE usuario='$usuario'";
        $data = $conexion->selectOne($consulta);
    
        if ($data) {
            if ($contraseña == $data) {
                $token = generate_token($usuario, $contraseña);
                $data = array(
                    'msg' => 'Acceso concedido',
                    'code' => http_response_code(200),
                    'token' => $token
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'msg' => 'Contraseña incorrecta',
                    'code' => http_response_code(401),
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'msg' => 'Usuario no encontrado',
                'code' => http_response_code(401),
            );
            echo json_encode($data);
        }
    } else {
        $data = array(
            'msg' => 'Usuario o contraseña no proporcionados',
            'code' => http_response_code(401),
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

function generate_token($usuario, $contraseña) {
    return base64_encode($usuario . "/" . $contraseña);
};
