<?php include_once('../header.php'); ?>
<?php include_once('select_usuarios.php') ?>
<?php titulo_pagina("Administrar Usuarios") ?>

<div class="container">
    <h4 class="pb-2 text-center">Registrar Nuevo Usuario</h4>
    <div class="row justify-content-center">

        <form action="insert_usuario.php" method="POST">
            <div class="form-row justify-content-center">

                <!-- Nombre -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                    </div>
                </div>

                <!-- Apellido -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Apellido" name="apellido" required>
                    </div>
                </div>

                <!-- Cédula -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Usuario" name="usuario" required>
                    </div>
                </div>

                <!-- Nro. Cuenta -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-123"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Contraseña" name="contraseña" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                        </div>
                        <input type="password" class="form-control" placeholder="Repetir Contraseña" name="contraseña2" required>
                    </div>
                </div>

                <!-- Email -->
                <div class="col-auto">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                        </div>
                        <!-- <input type="password" class="form-control" placeholder="Repetir Contraseña" name="contraseña2" required> -->
                        <select class="form-control" name="tipo_usuario">
                            <option value="1">Administrador</option>
                            <option value="2">Propietario</option>
                        </select>
                    </div>
                </div>

                <!-- Submit -->
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                </div>

            </div>
        </form>

        <div class="container px-5 my-3">
            <hr>
            <p class="text-center">Lista de cuentas</p>
            <!-- <div class="col-auto"></div> -->
            <!-- <div class="col-9"> -->
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Usuario</th>
                            <th scope="col">Tipo Usuario</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($usuarios as $usuario) : ?>
                            <tr>
                                <td><?php echo $usuario['nombre'] ?></td>
                                <td><?php echo $usuario['apellido'] ?></td>
                                <td><?php echo $usuario['usuario'] ?></td>
                                <td><?php echo $usuario['tipo'] ?></td>
                                <td>
                                    <form action="editar_usuario.php" method="GET">
                                        <input type="hidden" value="<?php echo $usuario['usuario'] ?>" name="usuario">
                                        <button class="btn btn-info" type="submit">Editar</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="delete_usuario.php" method="POST">
                                        <input type="hidden" value="<?php echo $usuario['usuario'] ?>" name="usuario">
                                        <button onclick="return confirm('Estás seguro de eliminar el usuario?')" class="btn btn-danger" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
            <!-- <div class="col-auto"></div> -->
        </div>

    </div>
</div>

<?php include_once('../footer.php'); ?>