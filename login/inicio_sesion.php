<?php
session_start();
if (isset($_SESSION['usuario'])) {
    session_destroy();
}

?>

<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- Boostrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>Sigma RW | Iniciar Sesión</title>
</head>

<body class="text-center">
    <div class="container p-5">
        <div class="row justify-content-center">

            <div class="col-auto"></div>
            <div class="col-sm-10 col-md-8 col-lg-6">
                <form class="form-signin" action="login.php" method="POST">
                    <img class="my-4" src="../img/logo_siscon_negro.png" alt="Sistema de Condominios" width="400px">
                    <h1 class="h3 mb-3 font-weight-normal">Inicia Sesión</h1>
                    <div class="container px-5 pt-3">
                        <div class="input-group">
                            <label for="usuario" class="sr-only">Nombre de Usuario</label>
                            <input type="text" name="usuario"  id="usuario" class="form-control" placeholder="Nombre de Usuario" required autofocus>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="bi bi-person-fill"></i></span>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <label for="contraseña" class="sr-only">Contraseña</label>
                            <input type="password" name="contraseña" id="contraseña" class="form-control" placeholder="Contraseña" required>
                            <div class="input-group-append">
                                <span class="input-group-text" id="basic-addon2"><i class="bi bi-key-fill"></i></span>
                            </div>
                        </div>

                        <button class="btn btn-lg btn-secondary btn-block" type="submit">Entrar</button>
                        <p class="mt-5 mb-3 text-muted">&copy; Redwine Softwares | 2022</p>
                    </div>

                </form>
            </div>
            <div class="col-auto"></div>
        </div>
    </div>




    <!-- jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>