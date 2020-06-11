<!DOCTYPE html>
<html lang="es">
<head>
    <title><?php echo constant ('NOMBRESITIO');?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-truck" aria-hidden="true"></i> Registro Vehiculo</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="center"><?php echo $this->mensaje;?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>vehiculo/crear" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="placa">Placa de vehículo</label>
                            <input type="text" class="form-control" name="placa" id="placa">
                            <small id="placaHelp" class="form-text text-muted">Digite placa del vehículo</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="capacidad">Capacidad del vehículo</label>
                            <input type="text" class="form-control" name="capacidad" id="capacidad">
                            <small id="capadidadHelp" class="form-text text-muted">Capacidad de carga del vehículo</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="seguro">Seguro del vehículo</label>
                            <input type="text" class="form-control" name="seguro" id="seguro">
                            <small id="seguroHelp" class="form-text text-muted">Digite datos de la poliza del seguro</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tecnomecanica">Tecnomecánica del vehículo</label>
                            <input type="date" class="form-control" name="tecnomecanica" id="tecnomecanica">
                            <small id="tecnomecanicaHelp" class="form-text text-muted">Fecha de vencimiento del la tecnomecánica del vehículo</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="tipo_vehiculo">Tipo de vehículo</label>
                            <input type="text" class="form-control" name="tipo_vehiculo" id="tipo_vehiculo">
                            <small id="tipo_vehiculoHelp" class="form-text text-muted">Tipo de vehículo</small>
                        </div>

                        <!-- <div class="form-group col-md-6">
                            <label for="conductor">Nombre del conductor </label>
                            <input type="text" class="form-control" name="conductor" id="conductor">
                            <small id="nombreHelp" class="form-text text-muted">Nombre del conductor</small>
                        </div> -->
                        <div class="form-group col-md-6">
                                <label for="identificacion">Encargado</label>
                                <select class="form-control" id="identificacion" name="identificacion" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="identificacionHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/usuario.php';

                                            if(count($this->ddl_usuarios)>0){
                                                foreach ($this->ddl_usuarios as $usuario) {
                                                $ddl_usuario = new UsuarioDAO();
                                                $ddl_usuario = $usuario;
                                        ?>
                                                <option  value="<?php echo $ddl_usuario->identificacion;?>"><?php echo $ddl_usuario->identificacion;?>-<?php echo $ddl_usuario->nombre;?>-<?php echo $ddl_usuario->apellido; ?>-<?php echo $ddl_usuario->cargo; ?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                            </div>

                        <div class="form-group col-md-6">
                            <label for="costo_flete">Costo del flete</label>
                            <input type="text" class="form-control" name="costo_flete" id="costo_flete">
                            <small id="fleteHelp" class="form-text text-muted">Valor del flete</small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="gps">GPS</label>
                            <input type="text" class="form-control" name="gps" id="gps">
                            <small id="gpsHelp" class="form-text text-muted">GPS incorporado en el vehículo</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" name="estado" id="estado">
                            <small id="estadoHelp" class="form-text text-muted">Estado del vehículo en la empresa</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha_registro">Fecha registro</label>
                            <input type="date" class="form-control" name="fecha_registro" id="fecha_registro">
                            <small id=fecha_registroHelp" class="form-text text-muted">Fecha de Registro</small>
                        </div>
                    </div>
                    <div class="text-center ">
                        <button type="submit" class="btn btn-info">Registrar vehículo</button>
                        <button class="btn btn-danger">Cancelar</button>
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