<?php include_once('../header.php'); ?>
<?php include_once('../departamentos/select_departamentos.php'); ?>
<?php include_once('select_propietarios.php') ?>
<?php include_once('select_familiares.php') ?>
<?php titulo_pagina("Propietarios") ?>

<div class="container">
    <h4 class="pb-2 text-center">Registrar Nuevo Usuario</h4>
    <div class="row justify-content-center">

        <form action="insert_propietario.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Nombre</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre" name="nombre" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="apellido">Apellido</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input id="apellido" type="text" class="form-control" placeholder="apellido" name="apellido" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Usuario</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="usuario" name="usuario" required>
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
                    <label>Departamento</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-people"></i></div>
                        </div>
                        <select class="form-control" name="departamento" required>
                            <option value="">Seleccione</option>
                            <?php foreach ($departamentos_x_propietario as $departamento): ?>
                                <option value="<?php echo $departamento['id'] ?>"><?php echo $departamento['departamento'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>

            <div class="form-row justify-content-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                </div>
            </div>
        </form>

        <div class="container px-5 my-3">
            <hr>
            <p class="text-center">Lista de propietarios</p>
            <!-- <div class="col-auto"></div> -->
            <!-- <div class="col-9"> -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Departamento</th>
                        <th scope="col">Familiares</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i=0; $i<count($propietarios); $i++): ?>
                        <tr>
                            <td><?php echo $propietarios[$i]['nombre'] ?></td>
                            <td><?php echo $propietarios[$i]['usuario'] ?></td>
                            <td><?php echo $propietarios[$i]['departamento'] ?></td>
                            <td><?php echo boolval($i < count($count_familiares)) ? $count_familiares[$i]['count_familiares'] : "0" ?></td>
                            <td>
                                <form action="editar_usuario.php" method="GET">
                                    <input type="hidden" value="<?php echo $propietarios[$i]['usuario'] ?>" name="propietario">
                                    <button class="btn btn-info" type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete_usuario.php" method="POST">
                                    <input type="hidden" value="<?php echo $propietarios[$i]['id'] ?>" name="propietario">
                                    <button class="btn btn-danger" onclick="return confirm('Estás seguro de eliminar el usuario?')" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endfor ?>
                </tbody>
            </table>
        </div>
        <!-- <div class="col-auto"></div> -->
    </div>

</div>
</div>

<?php include_once('../footer.php'); ?>