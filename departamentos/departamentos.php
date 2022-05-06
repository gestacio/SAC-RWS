<?php include_once('../header.php') ?>
<?php include_once('select_propietarios.php') ?>
<?php include_once('select_departamentos.php') ?>

<?php titulo_pagina("Departamentos") ?>

<div class="container">
    <div class="">

        <h4 class="pb-2 text-center">Registrar Departamento</h4>

        <div class="row justify-content-center">

                <form action="insert_departamento.php" method="POST">
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
                            <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="container px-5 my-3">
                <hr>
                <p class="text-center">Lista de Departamentos</p>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Departamento</th>
                            <!-- <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th> -->
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($departamentos as $departamento) : ?>
                            <tr>
                                <td><?php echo $departamento['departamento'] ?></td>
                                <!-- <td><?php echo $pago['telefono'] ?></td>
                                <td><?php echo '0134' ?></td>
                                <td><?php echo $pago['banco'] ?></td> -->
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

<?php include_once('../footer.php'); ?>