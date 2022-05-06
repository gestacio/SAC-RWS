<?php
if ($_GET) {
    $usuario = $_GET['usuario'];

    include_once '../Conexion.php';
    $objeto = new Conexion();
    $conexion = $objeto->conectar();


    $consulta = "SELECT *,
    usuarios.id as user_id
    FROM usuarios 
    INNER JOIN tipo_usuario ON tipo_usuario.id = usuarios.tipo_usuario 
    WHERE usuarios.usuario = '$usuario'";

    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    $usuario = $resultado->fetch(PDO::FETCH_ASSOC);
    $objeto->close();
}
?>
<!-- Inicio Bloque Página -->

<?php include_once('../header.php'); ?>
<?php titulo_pagina("Editar usuario {$usuario['usuario']}") ?>

<div class="container">
    <div class="mx-auto">

        <form action="edit_usuario.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $usuario['nombre'] ?>" name="nombre" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="apellido">Apellido</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input id="apellido" type="text" class="form-control" value="<?php echo $usuario['apellido'] ?>" name="apellido" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Usuario</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $usuario['usuario'] ?>" name="usuario" required>
                    </div>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Contraseña</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-key"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Repetir Contraseña</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-key-fill"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Repetir Contraseña" name="contraseña2" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Tipo de Usuario</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-people"></i></div>
                        </div>
                        <select class="form-control" name="tipo_usuario" required>
                            <option value="">Seleccione</option>
                            <option value="1">Administrador</option>
                            <option value="2">Propietario</option>
                        </select>
                    </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo $usuario['user_id'] ?>" name="user_id">
            <div class="form-row justify-content-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-info mb-2">Editar</button>
                </div>
                <div class="col-auto">
                    <a onclick="window.location.href = 'administrar_usuarios.php' " class="btn btn-danger mb-2">volver</a>
                </div>
            </div>
        </form>


    </div>
</div>

<?php include_once('../footer.php'); ?>