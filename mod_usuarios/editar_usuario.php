<?php
if ($_GET) {
    $usuario = $_GET['usuario'];    

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();


    $consulta = "SELECT * 
    FROM usuarios 
    INNER JOIN tipo_usuario ON tipo_usuario.id = usuarios.tipo_usuario 
    WHERE usuarios.usuario = '$usuario'";

    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
    $objeto = null;
}
?>
<!-- Inicio Bloque Página -->

<?php include_once('../encabezado.php'); ?>

<div class="container">
    <div class="mx-auto py-5">
        <h1 class="text-center">Editar usuario <?php echo $usuario['usuario'] ?> </h1>
        <hr>
    </div>
</div>

<div class="container">
    <div class="mx-auto">
        
        <form action="insert_usuario.php" method="POST">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card p-5">
                        <label for="usuario">Nombre de Usuario</label>
                        <input type="text" id="usuario" class="form-control mb-3" value="<?php echo $usuario['usuario'] ?>" name="usuario" required>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" id="contraseña" class="form-control mb-3" value="<?php echo $usuario['contraseña'] ?>" name="contraseña" required>
                        <label for="contraseña2">Repetir Contraseña</label>
                        <input type="password" id="contraseña2" class="form-control mb-3" placeholder="Repite la contraseña" name="contraseña2" required>
                        <!-- <label for="email">Dirección de correo</label>
                        <input type="email" id="email" class="form-control" placeholder="Dirección de correo" name="email" required> -->
                        <label for="tipo_usuario">Tipo de Usuario</label>
                        <select id="tipo_usuario" class="form-control mb-3" name="tipo_usuario">
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                        </select>
                        <br>
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                        <br>
                        <a href="<?php echo $administrar_usuarios ?>" class="btn btn-secondary">Volver</a>
                    </div>

                </div>
                <div class="col-3"></div>
            </div>
        </form>

    </div>
</div>

<?php include_once('../pie.php'); ?>