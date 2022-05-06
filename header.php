<?php
include_once('Conexion.php');
// $objeto = new Conexion();
// $conexion = $objeto->conectar();


include_once('globals.php');
session_start();

if (!isset($_SESSION['usuario'])) {
	header('location: login/inicio_sesion.php');
}


// ------------------------------------------------------
function titulo_pagina($nombre_titulo)
{
	echo "
	<div class=\"container\">
		<div class=\"mx-auto py-5\">
			<h1 class=\"text-center\">$nombre_titulo</h1>
			<hr>
		</div>
	</div>";
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>SisCon</title>
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<!-- Boostrap Icons -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- SidebarCSS -->
	<link rel="stylesheet" href="<?php echo $server.'/css/sidebar.css' ?>">

</head>

<body>
	<!-- Sidebar -->
	<?php include_once("sidebar.php") ?>
	<div class="content w-100" id="post-side">
		<!-- Navbar -->
		<?php include_once("navbar.php") ?>
		<!-- End Navbar -->

		<div class="container">
			<div class="row">
				