<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
        <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-edit" aria-hidden="true"></i> Registro Solicitud</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="center"><?php echo $this->mensaje;?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>solicitud/crear" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id_solicitud">Id solicitud</label>
                            <input type="number" class="form-control" name="id_solicitud" id="id_solicitud">
                            <small id="id_solicitudHelp" class="form-text text-muted">Ingrese el Id de la solicitud</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="solicitud">Solicitud</label>
                            <input type="date" class="form-control" name="solicitud" id="solicitud">
                            <small id="solicitudHelp" class="form-text text-muted">Diligencie la solicitud de ruta</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripciòn</label>
                            <input type="descripcion" class="form-control" name="descripcion" id="descripcion">
                            <small id="descripcionHelp" class="form-text text-muted">Diligencie el descripcion de la solicitud.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cantidad_kilos">Cantidad kilos</label>
                            <input type="number" class="form-control" name="cantidad_kilos" id="cantidad_kilos">
                            <small id="cantidad_kilosHelp" class="form-text text-muted">Diligencie la cantidad de kilos a trasportar.</small>
                        </div>
                    </div>
                    <div class="text-center ">
                        <button type="submit" class="btn btn-info">Registrar Solicitud</button>
                        <button class="btn btn-danger">Cancelar</button>
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