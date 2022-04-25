<?php include_once('../encabezado.php'); ?>

<div class="container">
    <div class="mx-auto py-5">
        <h1 class="text-center">Crea un nuevo usuario</h1>
        <hr>
    </div>
</div>


<div class="container">
    <div class="mx-auto">
        
        <form action="insert_usuario.php" method="POST">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <div class="card p-5">
                        <label for="usuario">Nombre de Usuario</label>
                        <input type="text" id="usuario" class="form-control mb-3" placeholder="Introduce un nombre" name="usuario" required>
                        <label for="contraseña">Contraseña</label>
                        <input type="password" id="contraseña" class="form-control mb-3" placeholder="Introduce una contraseña" name="contraseña" required>
                        <label for="contraseña2">Repetir Contraseña</label>
                        <input type="password" id="contraseña2" class="form-control mb-3" placeholder="Repite la contraseña" name="contraseña2" required>
                        <!-- <label for="email">Dirección de correo</label>
                        <input type="email" id="email" class="form-control" placeholder="Dirección de correo" name="email" required> -->
                        <label for="tipo_usuario">Tipo de Usuario</label>
                        <select id="tipo_usuario" class="form-control mb-3" name="tipo_usuario">
                            <option value="1">Administrador</option>
                            <option value="2">Cliente</option>
                        </select>
                        <br>
                        <input type="submit" class="btn btn-secondary" value="Guardar">
                    </div>

                </div>
                <div class="col-3"></div>
            </div>
        </form>

    </div>
</div>

<?php include_once('../pie.php'); ?>