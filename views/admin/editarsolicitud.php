<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Solicitud de ruta</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>solicitud/editar" method="POST">
            <div class="form-group">
                <label for="id_solicitud">Id solicitud</label>
                <input type="number" class="form-control" value="<?php echo $this->solicitud->id_solicitud; ?>" name="id_solicitud" id="id_solicitud" readonly>
                <small id="id_solicitudHelp" class="form-text text-muted">Ingrese el Id de la solicitud</small>
            </div>

            <div class="form-group">
                <label for="solicitud">Solicitud</label>
                <input type="date" class="form-control" value="<?php echo $this->solicitud->solicitud; ?>" name="solicitud" id="solicitud">
                <small id="solicitudHelp" class="form-text text-muted">Diligencie la solicitud de ruta</small>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripciòn</label>
                <input type="descripcion" class="form-control" value="<?php echo $this->solicitud->descripcion; ?>" name="descripcion" id="descripcion">
                <small id="descripcionHelp" class="form-text text-muted">Diligencie el descripcion de la solicitud.</small>
            </div>
            <div class="form-group">
                <label for="cantidad_kilos">Cantidad kilos</label>
                <input type="number" class="form-control" value="<?php echo $this->solicitud->cantidad_kilos; ?>" name="cantidad_kilos" id="cantidad_kilos">
                <small id="cantidad_kilosHelp" class="form-text text-muted">Diligencie la cantidad de kilos a trasportar.</small>
            </div>
            <input type="submit" class="btn btn-info" value="Actualizar Solicitud">
        </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>