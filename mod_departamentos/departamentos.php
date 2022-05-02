<?php include_once('../encabezado.php') ?>
<?php include_once('select_propietarios.php') ?>

<?php titulo_pagina("Departamentos") ?>

<div class="container">
    <div class="">

        <h4 class="pb-2 text-center">Registrar Departamento</h4>

        <div class="row justify-content-center">

                <form action="insert_pago_movil.php" method="POST">
                    <div class="form-row align-items-center">

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="Departamento" name="departamento" required>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-telephone"></i></div>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="propietario"> -->
                                <select name="propietario" class="form-control">
                                    <option value="">Sin Familiares</option>
                                    <?php foreach ($propietarios as $propietario) : ?>
                                        <option value="<?php echo $propietario['id'] ?>"><?php echo $propietario['usuario'] ?></option>
                                        <!-- <option value=""></option> -->
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-telephone"></i></div>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="propietario"> -->
                                <select name="inquilinos" class="form-control">
                                    <option value="">Sin Propietario</option>
                                    <option value="">Familiar 1</option>
                                    <option value="">Familiar 2</option>
                                    <option value="">Familiar 3</option>
                                    <option value="">Familiar 4</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-auto">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-bank"></i></div>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="numero"> -->
                                <select name="banco" id="" class="form-control" required>
                                    <option value="">Banco</option>
                                    <?php foreach ($bancos as $banco) : ?>
                                        <option value="<?php echo $banco['nombre'] ?>"><?php echo $banco['nombre'] ?></option>
                                        <!-- <option value=""></option> -->
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-auto">
                            <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container px-5 my-3">
                <hr>
                <p class="text-center">Lista de pago móvil</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nro. Telf</th>
                            <th scope="col">Código</th>
                            <th scope="col">Banco</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pagos_movil as $pago) : ?>
                            <tr>
                                <td><?php echo $pago['cedula'] ?></td>
                                <td><?php echo $pago['telefono'] ?></td>
                                <td><?php echo '0134' ?></td>
                                <td><?php echo $pago['banco'] ?></td>
                                <td><button class="btn btn-info">Editar</button></td>
                                <td><button class="btn btn-danger">Eliminar</button></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php include_once('../pie.php'); ?>