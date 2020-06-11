<!DOCTYPE html>
<html lang="en">
<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Registro Ruta</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="center"><?php echo $this->mensaje;?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>ruta/crear" method="POST">
                    <div class="row">
                        <!-- <div class="form-group col-md-6">
                            <label for="id_ruta">Id Ruta</label>
                            <input type="number" class="form-control" name="id_ruta" id="id_ruta">
                            <small id="id_rutaHelp" class="form-text text-muted">Ingrese el número de Id Ruta</small>
                        </div> -->
                       

                        <div class="form-group col-md-6">
                            <label for="destino">Destino</label>
                            <input type="text" class="form-control" name="destino" id="destino">
                            <small id="destinoHelp" class="form-text text-muted">Diligencie el destino del centro</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="fecha_ruta">Fecha Ruta</label>
                            <input type="date" class="form-control" name="fecha_ruta" id="fecha_ruta">
                            <small id="fecha_rutaHelp" class="form-text text-muted">Diligencie la fecha de la ruta</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hora_salida">Hora Salida</label>
                            <input type="time" class="form-control" name="hora_salida" id="hora_salida">
                            <small id="hora_salidaHelp" class="form-text text-muted">Diligencie la hora de salida</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hora_llegada">Hora Llegada</label>
                            <input type="time" class="form-control" name="hora_llegada" id="hora_llegada">
                            <small id="hora_llegadaHelp" class="form-text text-muted">Diligencie la hora de llegada</small>
                        </div>
                        
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion">
                            <small id="descripcioneHelp" class="form-text text-muted">Descripción</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_ruta">Tipo Ruta</label>
                            <input type="text" class="form-control" name="tipo_ruta" id="tipo_ruta">
                            <small id="tipo_rutaHelp" class="form-text text-muted">Tipo Ruta</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precinto">Precinto</label>
                            <input type="text" class="form-control" name="precinto" id="precinto">
                            <small id="precintoHelp" class="form-text text-muted">Precinto </small>
                        </div>
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

                        <!-- <div class="form-group col-md-6">
                            <label for="placa">Placa</label>
                            <input type="text" class="form-control" name="placa" id="placa">
                            <small id="placaHelp" class="form-text text-muted">Placa</small>
                        </div> -->
                        <div class="form-group col-md-6">
                                <label for="placa">Placa</label>
                                <select class="form-control" id="placa" name="placa" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="placaHelp" class="form-text text-muted">Diligencie la placa del vehiculo</small>
                                        <?php
                                            include_once 'models/vehiculo.php';

                                            if(count($this->ddl_vehiculos)>0){
                                                foreach ($this->ddl_vehiculos as $vehiculo) {
                                                $ddl_vehiculo = new VehiculoDAO();
                                                $ddl_vehiculo = $vehiculo;
                                        ?>
                                                <option  value="<?php echo $ddl_vehiculo->placa;?>"><?php echo $ddl_vehiculo->placa;?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                            </div>
                        <!-- <div class="form-group col-md-6">
                            <label for="id_centro">Id Centro</label>
                            <input type="text" class="form-control" name="id_centro" id="id_centro">
                            <small id="id_centroHelp" class="form-text text-muted">Id Centro</small>
                        </div> -->
                         <div class="form-group col-md-6">
                                <label for="id_centro">Centro Solicitante</label>
                                <select class="form-control" id="id_centro" name="id_centro" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="id_centroHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/centro.php';

                                            if(count($this->ddl_centros)>0){
                                                foreach ($this->ddl_centros as $centro) {
                                                $ddl_centro = new CentroDAO();
                                                $ddl_centro = $centro;
                                        ?>
                                                <option  value="<?php echo $ddl_centro->id_centro;?>"><?php echo $ddl_centro->id_centro;?>-<?php echo $ddl_centro->nombre;?>
                                            </option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_producto">Id del Producto</label>
                                <select class="form-control" id="id_producto" name="id_producto" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="id_productoHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/centro.php';

                                            if(count($this->ddl_productos)>0){
                                                foreach ($this->ddl_productos as $centro) {
                                                $ddl_producto = new ProductoDAO();
                                                $ddl_producto = $centro;
                                        ?>
                                                <option  value="<?php echo $ddl_producto->id_producto;?>"><?php echo $ddl_producto->id_producto;?>-<?php echo $ddl_producto->nombre;?>
                                            </option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="id_solicitud">Id Solicitud</label>
                                <select class="form-control" id="id_solicitud" name="id_solicitud" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="id_solicitudHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/solicitud.php';

                                            if(count($this->ddl_solicitudes)>0){
                                                foreach ($this->ddl_solicitudes as $solicitud) {
                                                $ddl_solicitud = new SolicitudDAO();
                                                $ddl_solicitud = $solicitud;
                                        ?>
                                                <option  value="<?php echo $ddl_solicitud->id_solicitud;?>"><?php echo $ddl_solicitud->id_solicitud;?>-<?php echo $ddl_solicitud->descripcion;?>
                                            </option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                            </div>
                    </div>
                    <div class="text-center ">
                        <button class="btn btn-info">Registrar ruta</button>
                        <button class="btn btn-danger">Cancel</button>
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