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
                <h3><i class="fa fa-truck" aria-hidden="true"></i> Editar Vehículo</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <h1>ID = <?php echo strtoupper($this->vehiculo->placa); ?></h1>
            <div><?php echo $this->mensaje; ?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>vehiculo/editar" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="placa">Placa de vehículo</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->placa; ?>" name="placa" id="placa" readonly>
                            <small id="placaHelp" class="form-text text-muted">Digite placas del vehículo</small>
                        </div>
         
                        <div class="form-group col-md-6">
                            <label for="capacidad"> Capacidad del vehículo</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->capacidad; ?>" name="capacidad" id="capacidad">
                            <small id="capadidadHelp" class="form-text text-muted">Capacidad de carga del vehiculo</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="seguro">Seguro del vehículo</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->seguro; ?>" name="seguro" id="seguro">
                            <small id="seguroHelp" class="form-text text-muted">Digite numero de la poliza del seguro</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tecnomecanica">Tecnomecanica del vehículo</label>
                            <input type="date" class="form-control" value="<?php echo $this->vehiculo->tecnomecanica; ?>" name="tecnomecanica" id="tecnomecanica">
                            <small id="tecnomecanicaHelp" class="form-text text-muted">Fecha de vencimiento del la tecnomecanica del vehículo</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tipo_vehiculo">Tipo de vehículo</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->tipo_vehiculo; ?>" name="tipo_vehiculo" id="tipo_vehiculo">
                            <small id="tipo_vehiculoHelp" class="form-text text-muted">Tipo de vehículo</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="conductor">Nombre del conductor </label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->conductor; ?>" name="conductor" id="conductor">
                            <small id="nombreHelp" class="form-text text-muted">Nombre del conductor</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="costo_flete">Costo del flete</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->costo_flete; ?>" name="costo_flete" id="costo_flete">
                            <small id="fleteHelp" class="form-text text-muted">Valor del flete</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gps">GPS</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->gps; ?>" name="gps" id="gps">
                            <small id="gpsHelp" class="form-text text-muted">GPS de vehículo incorporado</small>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" value="<?php echo $this->vehiculo->estado; ?>" name="estado" id="estado">
                            <small id="estadoHelp" class="form-text text-muted">Estado dentro de la empresa Propiedad o contratista</small>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="fecha_registro">Fecha registro</label>
                            <input type="date" class="form-control" value="<?php echo $this->vehiculo->fecha_registro; ?>" name="fecha_registro" id="fecha_registro" readonly>
                            <small id="fecha_registroHelp" class="form-text text-muted">Fecha de Registro</small>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-info" value="Actualizar vehículo" >
                        <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>vehiculo")' value="Cancelar">
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