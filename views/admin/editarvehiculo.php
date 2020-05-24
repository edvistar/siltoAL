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

    <div class="container_fluid">
        <div class="row">
        <div class="col-sm-1"></div>
            <div class="col-md-5">
                    <form action="<?php echo constant('URL'); ?>vehiculo/editar" method="POST">
                    <div class="form-group">
                        <label for="placa">Nro placa</label>
                        <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->vehiculo->placa; ?>" name="placa" id="placa" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nombre">capacidad</label>
                        <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->vehiculo->capacidad; ?>" name="capacidad" id="capacidad" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nombre">seguro del vehiculo</label>
                        <input type="text" class="form-control" value="<?php echo $this->vehiculo->seguro; ?>" name="seguro" id="seguro">
                        <small id="seguroHelp" class="form-text text-muted">Digite numero de la poliza del seguro</small>
                    </div>

                    <div class="form-group">
                        <label for="nombre">tecnomecanica del vehiculo</label>
                        <input type="text" class="form-control" value="<?php echo $this->vehiculo->tecnomecanica; ?>" name="tecnomecanica" id="tecnomecanica">
                        <small id="tecnomecanicaHelp" class="form-text text-muted">fecha de vencimiento del la tecnomecanica del vehiculo</small>
                    </div>

                    <div class="form-group">tipo de vehiculo</label>
                        <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->vehiculo->tipo_vehiculo; ?>" name="tipo_vehiculo" id="tipo_vehiculo" readonly>
                    </div>
            </div>

            <div class="col-md-5">
                    <div class="form-group">
                        <label for="nombre">conductor</label>
                        <input type="text" class="form-control" value="<?php echo $this->vehiculo->conductor; ?>" name="conductor" id="conductor">
                        <small id="tecnomecanicaHelp" class="form-text text-muted">nombre del conductor</small>
                    </div>

                    <div class="form-group">
                        <label for="nombre">costo del flete</label>
                        <input type="text" class="form-control" value="<?php echo $this->vehiculo->costo_flete; ?>" name="costo_flete" id="costo_flete">
                        <small id="tecnomecanicaHelp" class="form-text text-muted">fecha de vencimiento del la tecnomecanica del vehiculo</small>
                    </div>

                    <div class="form-group">
                        <label for="nombre">gps</label>
                        <input type="text" class="form-control" value="<?php echo $this->vehiculo->gps; ?>" name="gps" id="gps">
                        <small id="tecnomecanicaHelp" class="form-text text-muted">el vehiculo tiene gps</small>
                    </div>

                    <div class="form-group">estado</label>
                        <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->vehiculo->estado; ?>" name="estado" id="estado" readonly>
                    </div>

                    <div class="form-group">fecha de registero</label>
                        <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->vehiculo->fecha_registro; ?>" name="fecha_registro" id="fecha_registro" readonly>
                    </div>

                  
               

            </div>

            <div class="col-md-4"></div>

            <div class="col-md-4">
                    <input type="submit" class="btn btn-primary btn-sm btn-block" value="Actualizar vehiculo" >
                        <input type="button" class="btn btn-danger btn-sm btn-block" onClick='window.location.assign("<?php echo constant('URL'); ?>/vehiculo")' value="Cancelar">
                    
                    </div>
                </form>
            </div>

            <div class="col-md-4"></div>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>
