<?php include_once('../header.php') ?>
<?php include_once('select_cuentas.php') ?>
<?php titulo_pagina("Cuentas Transferencia") ?>


<div class="container">
    <div class="">

        <h4 class="pb-2 text-center">Registrar Cuenta Transferencia</h4>

        <div class="row aling-items-center">

            <form action="insert_cuenta.php" method="POST">
                <div class="form-row align-items-center">

                    <!-- Titular -->
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-person-lines-fill"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nombre Apellido" name="titular" required>
                        </div>
                    </div>

                    <!-- Cédula -->
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="Cédula" name="cedula" required>
                        </div>
                    </div>

                    <!-- Nro. Cuenta -->
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-123"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nro. Cuenta" name="cuenta" required>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-envelope"></i></div>
                            </div>
                            <input type="email" class="form-control" placeholder="Correo" name="email" required>
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

                <table class="table table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Titular</th>
                            <th scope="col">Cédula</th>
                            <th scope="col">Nro. Cuenta</th>
                            <th scope="col">Correo</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cuentas as $cuenta) : ?>
                            <tr>
                                <td><?php echo $cuenta['titular'] ?></td>
                                <td><?php echo $cuenta['cedula'] ?></td>
                                <td><?php echo $cuenta['cuenta'] ?></td>
                                <td><?php echo $cuenta['email'] ?></td>
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