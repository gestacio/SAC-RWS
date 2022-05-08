<div class="d-flex">
  <div id="sidebar" class="bg-dark">
    <div class="p-2">
      <a href="<?php echo $inicio ?>" class="navbar-brand text-center text-light w-100 border-bottom p-3">
        <img src="<?php echo $server . '/img/logo_siscon_gray.png' ?>" alt="logo">
      </a>
    </div>

    <!-- Sidebar Accordion -->
    <div id="sidebar-accordion" class="accordion">
      <div class="list-group">
        <a href="<?php echo $inicio ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-speedometer mx-2" aria-hidden="true"></i>Inicio
        </a>
        <a href="<?php echo $server.'/departamentos/departamentos.php' ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-house-fill mx-2" aria-hidden="true"></i>Departamentos
        </a>
        <!-- <a href="<?php echo $server.'/calendario' ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-calendar mx-2" aria-hidden="true"></i>Calendario
        </a> -->

        <!-- Cuentas -->
        <a href="#cuentas" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-credit-card-fill mx-2"></i></i>Cuentas
        </a>
        <div id="cuentas" class="collapse" data-parent="#sidebar-accordion">
          <a href="<?php echo $server . '/cuentas/pago_movil.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Pago Móvil
          </a>
          <a href="<?php echo $server . '/cuentas/cuentas.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Cuentas
          </a>
        </div> <!-- End Cuentas -->

        <!-- Propietarios -->
        <a href="#propietarios" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-people-fill mx-2"></i></i>Propietarios
        </a>
        <div id="propietarios" class="collapse" data-parent="#sidebar-accordion">
          <a href="<?php echo $server . '/propietarios/propietarios.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Propietarios
          </a>
          <a href="<?php echo $server . '/propietarios/familiares.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Familiares
          </a>
        </div> <!-- End propietarios -->

        <!-- Usuarios -->        
        <a href="<?php echo $server.'/usuarios/administrar_usuarios.php' ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-person-fill mx-2" aria-hidden="true"></i>Usuarios
        </a>
        <!-- End Sidebar Accordion -->

      </div>
    </div>
  </div>