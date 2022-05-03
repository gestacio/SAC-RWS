<?php include_once('../header.php') ?>
<?php include_once('select_pago_movil.php') ?>
<?php include_once('select_bancos.php') ?>

<?php titulo_pagina("Pago Móvil") ?>

<div class="container">
    <div class="">

        <h4 class="pb-2 text-center">Registrar Cuenta Pago Móvil</h4>

        <div class="row aling-items-center">
            <div class="col-2"></div>

            <div class="col-8">
                <form action="insert_pago_movil.php" method="POST">
                    <div class="form-row align-items-center">
                        <div class="col-3">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="Cédula" name="cedula" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-telephone"></i></div>
                                </div>
                                <input type="text" class="form-control" placeholder="Nro. Telf." name="telefono" required>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="bi bi-bank"></i></div>
                                </div>
                                <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="numero"> -->
                                <select name="banco" id="" class="form-control" required>
                                    <option value="">Seleccione un banco</option>
                                    <?php foreach ($bancos as $banco) : ?>
                                        <option value="<?php echo $banco['nombre'] ?>"><?php echo $banco['nombre'] ?></option>
                                        <!-- <option value=""></option> -->
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-2"></div>

            <div class="container px-5 my-3">
                <hr>
                <p class="text-center">Lista de pago móvil</p>

                <table class="table table-striped">
                    <thead class="thead-dark">
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
                                <td>
                                    <form action="editar_pago_movil.php">
                                        <input type="hidden" value="<?php echo $pago['id'] ?>" name="id">
                                        <input type="submit" class="btn btn-info" value="Editar"></input>
                                    </form>
                                </td>
                                <td>
                                    <form action="delete_pago_movil.php" method="POST">
                                        <input type="hidden" value="<?php echo $pago['id'] ?>" name="id">
                                        <input type="submit" class="btn btn-danger" value="Eliminar"></input>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>

    </div>
</div>

<?php include_once('../footer.php'); ?>