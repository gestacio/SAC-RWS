<?php
include_once '../Conexion.php';
$objeto = new Conexion();
$conexion = $objeto->conectar();

if ($_GET) {
    $id = $_GET['id'];

    $consulta = "SELECT * FROM pago_movil WHERE id = '$id'";

    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $pago_movil = $resultado->fetch(PDO::FETCH_ASSOC);
    $objeto->close();
}
?>
<!-- Inicio Bloque Página -->

<?php include_once('../header.php'); ?>
<?php include_once('select_bancos.php') ?>
<?php titulo_pagina("Editar pago movil") ?>

<div class="container">
    <div class="mx-auto">

        <form action="edit_pago_movil.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label>Cédula</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pago_movil['cedula'] ?>" name="cedula" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Nro. Telf.</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-telephone"></i></div>
                        </div>
                        <input type="text" class="form-control" value="<?php echo $pago_movil['telefono'] ?>" name="telefono" required>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label>Banco</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="bi bi-bank"></i></div>
                        </div>
                        <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="numero"> -->
                        <select name="banco" id="" class="form-control" required>
                            <option value="">Elige un banco</option>
                            <?php foreach ($bancos as $banco) : ?>
                                <option value="<?php echo $banco['codigo'] ?>"><?php echo $banco['nombre'] ?></option>
                                <!-- <option value=""></option> -->
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
            </div>

            <input type="hidden" value="<?php echo $pago_movil['id'] ?>" name="id">
            <div class="form-row justify-content-center">
                <div class="col-auto">
                    <button type="submit" class="btn btn-info mb-2">Editar</button>
                </div>
                <div class="col-auto">
                    <a onclick="window.location.href = 'pago_movil.php' " class="btn btn-danger mb-2">volver</a>
                </div>
            </div>
        </form>


    </div>
</div>

<?php include_once('../footer.php'); ?>