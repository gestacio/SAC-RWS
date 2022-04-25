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
        <div class="col-auto"></div>

    </div>
</div>

<?php include_once('../pie.php'); ?>