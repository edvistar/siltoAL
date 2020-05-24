<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo constant ('NOMBRESITIO');?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">registro de vehiculo</h1>
        <div class="col-sm-6 offset-sm-3">
        <form action="<?php echo constant('URL'); ?>vehiculo/crear" method="POST">
            <div class="form-group">
                <label for="nombre">placa de vehiculo</label>
                <input type="text" class="form-control" name="placa" id="placa">
                <small id="placaHelp" class="form-text text-muted">Digite placas del vehiculo</small>
            </div>
         
            <div class="form-group">
                <label for="nombre"> capacidad del vehiculo</label>
                <input type="text" class="form-control" name="capacidad" id="capacidad">
                <small id="capadidadHelp" class="form-text text-muted">capacidad de carga del vehiculo</small>
            </div>

            <div class="form-group">
                <label for="nombre">seguro del vehiculo</label>
                <input type="text" class="form-control" name="seguro" id="seguro">
                <small id="seguroHelp" class="form-text text-muted">Digite numero de la poliza del seguro</small>
            </div>

            <div class="form-group">
                <label for="nombre">tecnomecanica del vehiculo</label>
                <input type="date" class="form-control" name="tecnomecanica" id="tecnomecanica">
                <small id="tecnomecanicaHelp" class="form-text text-muted">fecha de vencimiento del la tecnomecanica del vehiculo</small>
            </div>

            <div class="form-group">
                <label for="nombre">tipo de vehiculo</label>
                <input type="text" class="form-control" name="tipo_vehiculo" id="tipo_vehiculo">
                <small id="tipo_vehiculoHelp" class="form-text text-muted">tipo de vehiculo</small>
            </div>

            <div class="form-group">
                <label for="nombre">nombre del conductor </label>
                <input type="text" class="form-control" name="conductor" id="conductor">
                <small id="nombreHelp" class="form-text text-muted">nombre del conductor</small>
            </div>

            <div class="form-group">
                <label for="nombre">costo del flete</label>
                <input type="text" class="form-control" name="costo_flete" id="costo_flete">
                <small id="fleteHelp" class="form-text text-muted">valor del flete</small>
            </div>

            <div class="form-group">
                <label for="nombre">gps</label>
                <input type="text" class="form-control" name="gps" id="gps">
                <small id="gpsHelp" class="form-text text-muted">gps</small>
            </div>
            
            <div class="form-group">
                <label for="nombre">estado</label>
                <input type="text" class="form-control" name="estado" id="estado">
                <small id="estadoHelp" class="form-text text-muted">estado</small>
            </div>
            

            <input type="submit" class="btn btn-primary" value="Crear vehiculo">
        </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>