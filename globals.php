<?php
$server = "http://$_SERVER[HTTP_HOST]";


// Links Urls
$inicio = "$server/inicio.php";
$productos = "$server/listar.php";
$vender = "$server/vender.php";
$ventas = "$server/ventas.php";

// Usuarios
$crear_usuario = "$server/mod_usuarios/crear_usuario.php";
$administrar_usuarios = "$server/mod_usuarios/administrar_usuarios.php";

// Cuentas
// $crear_usuario = "$server/mod_usuarios/crear_usuario.php";
$administrar_cuentas = "$server/mod_cuentas/administrar_cuentas.php";


// Index
$salir = "$server/login/inicio_sesion.php";
$index = "$server/login/inicio_sesion.php";

// DataTables
$datatablesCSS = "$server/plugins/datatables.min.css";
$datatablesJS = "$server/plugins/datatables.min.js";

// $fontawesome = "$server/css/fontawesome-all.min.css";


// $https = $_SERVER['HTTPS'];

// if (http_response_code() == 404) {
//     header("location: $inicio");
// }
