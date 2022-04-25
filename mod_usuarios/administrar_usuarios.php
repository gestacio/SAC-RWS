<?php include_once('../encabezado.php'); ?>

<?php include_once('select_usuarios.php') ?>

<div class="container">
    <div class="mx-auto py-5">
        <h1 class="text-center">Administrar Usuarios</h1>
        <hr>
    </div>
</div>

<div class="container">
    <div class="row justify-content-center">
        
        <div class="col-auto"></div>
        <div class="col-9">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Usuario</th>
                        <th scope="col">Tipo Usuario</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                            <td><?php echo $usuario['usuario'] ?></td>
                            <td><?php echo $usuario['tipo_usuario'] ?></td>
                            <td><button class="btn btn-info">Editar</button></td>
                            <td><button class="btn btn-danger">Eliminar</button></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
        <div class="col-auto"></div>

    </div>
</div>

<?php include_once('../pie.php'); ?>