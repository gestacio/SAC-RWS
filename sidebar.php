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
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-archive mx-2" aria-hidden="true"></i>Productos
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-archive mx-2" aria-hidden="true"></i>Vender
        </a>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-archive mx-2" aria-hidden="true"></i>Ventas
        </a>
        <a href="<?php echo $server.'/mod_departamentos/departamentos.php' ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-house mx-2" aria-hidden="true"></i>Departamentos
        </a>
        <a href="<?php echo $server.'/calendario' ?>" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-calendar mx-2" aria-hidden="true"></i>Calendario
        </a>

        <!--  -->
        <!-- <a href="#profile-items" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="fa fa-user mr-3" aria-hidden="true"></i>Profile
        </a>
        <div id="profile-items" class="collapse" data-parent="#sidebar-accordion">
          <a href="#" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Item 1
          </a>
          <a href="#" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Item 2
          </a>
        </div>
        <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="fa fa-shopping-cart mr-3" aria-hidden="true"></i>Buy Now!
        </a>
        <a href="#setting-items" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="fa fa-cog mr-3" aria-hidden="true"></i>Settings
        </a>
        <div id="setting-items" class="collapse" data-parent="#sidebar-accordion">
          <div class="d-flex flex-row text-center">
            <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
              Item 1
            </a>
            <a href="#" class="list-group-item list-group-item-action bg-dark text-light">
              Item 2
            </a>
          </div>
        </div> -->

        <!-- Cuentas -->
        <a href="#cuentas" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-credit-card mx-2"></i></i>Cuentas
        </a>
        <div id="cuentas" class="collapse" data-parent="#sidebar-accordion">
          <a href="<?php echo $server . '/mod_cuentas/pago_movil.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Pago Móvil
          </a>
          <a href="<?php echo $server . '/mod_cuentas/cuentas.php' ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Cuentas
          </a>
        </div> <!-- End Cuentas -->

        <!-- Usuarios -->
        <a href="#usuarios" data-toggle="collapse" aria-expanded="false" class="list-group-item list-group-item-action bg-dark text-light">
          <i class="bi bi-person-fill mx-2"></i>Usuarios
        </a>
        <div id="usuarios" class="collapse" data-parent="#sidebar-accordion">
          <a href="<?php echo $crear_usuario ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Crear Usuario
          </a>
          <a href="<?php echo $administrar_usuarios ?>" class="list-group-item list-group-item-action bg-dark text-light pl-5">
            Administrar Usuarios
          </a>
        </div> <!-- End Usuarios -->
        <!-- End Sidebar Accordion -->

      </div>
    </div>
  </div>