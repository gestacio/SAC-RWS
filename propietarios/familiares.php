<?php include_once('../header.php'); ?>
<?php include_once('select_propietarios.php') ?>
<?php include_once('select_familiares.php') ?>
<?php titulo_pagina("Familiares") ?>

<div class="container">
    <h4 class="pb-2 text-center">Registrar Nuevo Familiar</h4>
    <div class="row justify-content-center">

        <form action="insert_familiar.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label>Propietario</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-people"></i></div>
                        </div>
                        <select class="form-control" name="propietario" required autofocus>
                            <option value="">Seleccione</option>
                            <?php foreach ($propietarios as $propietario) : ?>
                                <option value="<?php echo $propietario['id'] ?>"><?php echo $propietario['nombre'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Nombre y apellido</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Nombre y Apellido" name="nombre" required>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label>Tipo de Familiar</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-people"></i></div>
                        </div>
                        <select class="form-control" name="tipo_familiar" required>
                            <option value="">Seleccione</option>
                            <option value="padre">Padre</option>
                            <option value="madre">Madre</option>
                            <option value="hijo">Hijo</option>
                            <option value="hermano">Hermano</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-2">
                    <label>Edad</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                        </div>
                        <input type="text" class="form-control" placeholder="Edad" name="edad" required>
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
            <p class="text-center">Lista de familiares</p>
            <!-- <div class="col-auto"></div> -->
            <!-- <div class="col-9"> -->
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Parentezco</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Propietario</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($familiares as $familiar) : ?>
                        <tr>
                            <td><?php echo $familiar['familiar'] ?></td>
                            <td><?php echo $familiar['tipo_familiar'] ?></td>
                            <td><?php echo $familiar['edad'] ?></td>
                            <td><?php echo $familiar['propietario'] ?></td>
                            <td>
                                <form action="editar_usuario.php" method="GET">
                                    <input type="hidden" value="<?php echo $familiar['nombre'] ?>" name="familiar">
                                    <button class="btn btn-info" type="submit">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="delete_usuario.php" method="POST">
                                    <input type="hidden" value="<?php echo $familiar['id'] ?>" name="familiar">
                                    <button class="btn btn-danger" onclick="return confirm('Estás seguro de eliminar el usuario?')" type="submit">Eliminar</button>
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