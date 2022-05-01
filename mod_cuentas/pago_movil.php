<?php include_once('../encabezado.php'); ?>
<?php titulo_pagina("Pago Móvil") ?>


<div class="container">
    <div class="">

        <h4 class="pb-2 text-center">Registrar Pago Móvil</h4>
        <div class="row aling-items-center">
            <div class="col-2"></div>

            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-person-badge"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="Introduce cédula" name="cedula">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-123"></i></div>
                            </div>
                            <input type="text" class="form-control" placeholder="Nro. Telf." name="numero">
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text"><i class="bi bi-bank"></i></div>
                            </div>
                            <!-- <input type="text" class="form-control" placeholder="Nro. Telf." name="numero"> -->
                            <select name="banco" id="" class="form-control">
                                <option value="1">Banesco</option>
                                <option value="2">Venezuela</option>
                                <option value="3">Sambil</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-secondary mb-2">Registrar</button>
                    </div>
                </div>
            </form>
            <div class="col-2"></div>

            <div class="container px-5 my-3">
                <hr>
                <p class="text-center">Lista de pago móvil</p>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Cëdula</th>
                            <th scope="col">Nro. Telf</th>
                            <th scope="col">Código</th>
                            <th scope="col">Banco</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td><button class="btn btn-secondary">hola</button></td>
                            <td><button class="btn btn-secondary">hola</button></td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td><button class="btn btn-secondary">hola</button></td>
                            <td><button class="btn btn-secondary">hola</button></td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                            <td><button class="btn btn-secondary">hola</button></td>
                            <td><button class="btn btn-secondary">hola</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</div>

<?php include_once('../pie.php'); ?>