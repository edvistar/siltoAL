<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>
<?php require 'views/header.php'; ?>

    <!-- Formulario de registro -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3>Registro Producto</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="<?php  echo constant('URL'); ?>producto/crear" id="loginForm" method="POST">
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <label for="id_producto">Id</label>
                                <input type="number" name="id_producto"  id="id_producto" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="nombre">Nombre</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="peso">Peso</label>
                                <input type="text" name="peso" id="peso" class="form-control" required>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="costo">Costo</label>
                                <input type="text" name="costo" id="costo" class="form-control" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-info">Registrar</button>
                            <button class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
    </div>
</div><br>
<?php require 'views/footer.php'; ?>

</body>
</html>
