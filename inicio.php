 <?php include_once('./header.php'); ?>
 <?php
    include_once('Conexion.php');
    $departamentos = $conexion->selectOne("SELECT count(*) FROM departamentos");
    $propietarios = $conexion->selectOne("SELECT count(*) FROM propietarios");
    $familiares = $conexion->selectOne("SELECT count(*) FROM familiares");
    $cuentas = $conexion->selectOne("SELECT count(*) FROM cuentas");


    ?>

 <div class="container pt-5">
     <div class="row">

         <div class="col-md-3">
             <a href="<?php echo "$server/departamentos/departamentos.php" ?>">
                 <div class="card text-white mb-3 bg-azul-violeta" id="card">
                     <div class="row">
                         <div class="col-7">
                             <h1 class="card-title my-3 mx-3"><?php echo "$departamentos" ?></h1>
                             Departamentos
                         </div>
                         <div class="col-5 card-image"><i class="bi bi-building"></i></div>
                     </div>
                 </div>
             </a>
         </div>
         <div class="col-md-3">
             <div class="card text-white mb-3 bg-rebecca-purpura" id="card">
                 <div class="row">
                     <div class="col-7">
                         <h1 class="card-title my-3 mx-3"><?php echo "$propietarios" ?></h1>
                         Propietarios
                     </div>
                     <div class="col-5 card-image"><i class="bi bi-person-circle"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="card text-white mb-3 bg-purpura" id="card">
                 <div class="row">
                     <div class="col-7">
                         <h1 class="card-title my-3 mx-3"><?php echo "$familiares" ?></h1>
                         Familiares
                     </div>
                     <div class="col-5 card-image"><i class="bi bi-people-fill"></i></div>
                 </div>
             </div>
         </div>
         <div class="col-md-3">
             <div class="card text-white mb-3 bg-marron" id="card">
                 <div class="row">
                     <div class="col-7">
                         <h1 class="card-title my-3 mx-3"><?php echo "$cuentas" ?></h1>
                         Cuentas
                     </div>
                     <div class="col-5 card-image"><i class="bi bi-currency-dollar"></i></div>
                 </div>
             </div>
         </div>


     </div>
 </div>

 <div class="container">
     <div class="row">
         <div class="mx-auto p-5">

             <img src="./img/logo_siscon_negro.png" width="500">
         </div>
     </div>
     <!-- <center>
     </center> -->
 </div>

 <table align="center" width=1000 border="0">
     <br>
     <center>
         <div class="footer">
             <p>
                 <!-- <MARQUEE WIDTH=50% HEIGHT=60 ALIGN=BOTTOM>
                     <h3>Ventas Jalen. ¡Asegurate bien! Para más información, por favor comunicate con +58 412.026.58.99</h3>
                 </marquee> -->
             </p>
         </div>
     </center>
 </table>

 <?php include_once('./footer.php'); ?>