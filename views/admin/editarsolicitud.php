<!DOCTYPE html>
<html lang="es">
<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-edit" aria-hidden="true"></i> Editar  Solicitud De vehículo</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <h1>ID solicitud : <?php echo strtoupper($this->solicitud->id_solicitud); ?></h1>
            <div><?php echo $this->mensaje; ?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>solicitud/editar" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id_solicitud">Id solicitud</label>
                            <input type="number" class="form-control" value="<?php echo $this->solicitud->id_solicitud; ?>" name="id_solicitud" id="id_solicitud" readonly>
                            <small id="id_solicitudHelp" class="form-text text-muted">Ingrese el Id de la solicitud</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="solicitud">Solicitud</label>
                            <input type="date" class="form-control" value="<?php echo $this->solicitud->solicitud; ?>" name="solicitud" id="solicitud">
                            <small id="solicitudHelp" class="form-text text-muted">Diligencie la solicitud de ruta</small>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="descripcion">Descripciòn</label>
                            <textarea  class="form-control" name="descripcion" id="descripcion" cols="30" rows="10" value="<?php echo $this->solicitud->descripcion; ?>"></textarea>
                            <small id="descripcionHelp" class="form-text text-muted">Diligencie el descripcion de la solicitud.</small>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-info" value="Actualizar centro" >
                        <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>solicitud")' value="Cancelar">
                    </div>
                 </form>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
    </div>
</div><br>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>