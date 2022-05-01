<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white">
    <div class="container">
        <!-- <a class="navbar-brand" href="<?php echo $inicio ?>">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a>Bienvenido <?php echo ucfirst($_SESSION['usuario']) ?></a>
                    <!-- <a class="nav-link" href="#"><?php echo $_SESSION['usuario'] ?></a> -->
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo $productos ?>">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $vender ?>">Vender</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo $ventas ?>">Ventas</a>
                </li> -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="<?php echo $administrar_cuentas ?>">Cuentas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Usuarios
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?php echo $crear_usuario ?>">Crear Usuario</a>
                        <a class="dropdown-item" href="<?php echo $administrar_usuarios ?>">Administrar Usuarios</a>
                    </div>
                </li> -->
            </ul>
        </div>
        <a href="<?php echo $salir ?>">
            <span class="navbar-text">
                Salir
            </span>
        </a>
    </div>
</nav>