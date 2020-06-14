<!DOCTYPE html>
<html lang="es">
<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="container" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center"><?php echo strtoupper($this->ruta->tipo_ruta); ?></h1>
        <div class="col-sm-6 offset-sm-3">
          <form action="<?php echo constant('URL'); ?>ruta/editar" method="POST">
           <!-- <div class="form-group">
                <label for="id_ruta">Id Ruta</label>
                <input type="number" class="form-control" value="<?php echo $this->ruta->id_ruta; ?>" name="id_ruta" id="id_ruta">
                <small id="id_rutaHelp" class="form-text text-muted">Ingrese el número de Id Ruta</small>
            </div>-->
            <h1><?php echo strtoupper($this->ruta->id_ruta); ?></h1>
            <div><?php echo $this->mensaje; ?></div>
             <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>ruta/editar" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id_ruta">Id Ruta</label>
                            <input type="number" class="form-control" value="<?php echo $this->ruta->id_ruta; ?>" name="id_ruta" id="id_ruta">
                            <small id="id_rutaHelp" class="form-text text-muted">Ingrese el número de Id Ruta</small>
                         </div>

                        <!--<div class="form-group col-md-6">
                            <label for="destino">Destino</label>
                            <input type="text" class="form-control" value="<?php echo $this->ruta->destino; ?>" name="destino" id="destino">
                            <small id="destinoHelp" class="form-text text-muted">Diligencie el Destino del Centro</small>
                        </div>-->
                        <div class="form-group col-md-6">
                            <label for="fecha_ruta">Fecha Ruta</label>
                            <input type="date" class="form-control" value="<?php echo $this->ruta->fecha_ruta; ?>" name="fecha_ruta" id="fecha_ruta">
                            <small id="fecha_rutaHelp" class="form-text text-muted">Diligencie la Fecha de la ruta</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hora_salida">Hora Salida</label>
                            <input type="time" class="form-control" value="<?php echo $this->ruta->hora_salida; ?>" name="hora_salida" id="hora_salida">
                            <small id="hora_salidaHelp" class="form-text text-muted">Diligencie la hora de salida</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="hora_llegada">Hora Salida</label>
                            <input type="time" class="form-control" value="<?php echo $this->ruta->hora_llegada; ?>" name="hora_llegada" id="hora_llegada">
                            <small id="hora_llegadaHelp" class="form-text text-muted">Diligencie la hora de llegada</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" value="<?php echo $this->ruta->descripcion; ?>" name="descripcion" id="descripcion">
                            <small id="descripcioneHelp" class="form-text text-muted">Descripcion</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tipo_ruta">Tipo Ruta</label>
                            <input type="text" class="form-control" value="<?php echo $this->ruta->tipo_ruta; ?>" name="tipo_ruta" id="tipo_ruta">
                            <small id="tipo_rutaHelp" class="form-text text-muted">Tipo Ruta</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="precinto">Precinto</label>
                            <input type="text" class="form-control" value="<?php echo $this->ruta->precinto; ?>" name="precinto" id="precinto">
                            <small id="precintoHelp" class="form-text text-muted">Precinto </small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="identificacion">Encargado</label>
                            <select class="form-control" id="identificacion" name="identificacion" style="width:100%">
                                    <option >Seleccione...</option>
                                     <?php
                                            include_once 'models/usuario.php';

                                            if(count($this->ddl_usuarios)>0){
                                                foreach ($this->ddl_usuarios as $usuario) {
                                                $ddl_usuario = new UsuarioDAO();
                                                $ddl_usuario = $usuario;
                                                $seleccionado = '';
                                                if ($this->ruta->identificacion==$usuario->identificacion){
                                                    $seleccionado = "selected";
                                                }else{
                                                    $seleccionado = '';
                                                }
                                        ?>
                                                <option  <?php echo $seleccionado;?> value="<?php echo $ddl_usuario->identificacion;?>"><?php echo $ddl_usuario->identificacion;?>-<?php echo $ddl_usuario->nombre;?>-<?php echo $ddl_usuario->apellido; ?>-<?php echo $ddl_usuario->cargo; ?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="placa">Placa</label>
                            <select class="form-control" id="placa" name="placa" style="width:100%">
                                    <option >Seleccione...</option>                                                
                                        <?php
                                            include_once 'models/vehiculo.php';

                                            if(count($this->ddl_vehiculos)>0){
                                                foreach ($this->ddl_vehiculos as $vehiculo) {
                                                $ddl_vehiculo = new VehiculoDAO();
                                                $ddl_vehiculo = $vehiculo;
                                                $seleccionado = '';
                                                if ($this->ruta->placa==$vehiculo->placa){
                                                    $seleccionado = "selected";
                                                }else{
                                                    $seleccionado= '';
                                                }
                                        ?>
                                                <option <?php echo $seleccionado;?> value="<?php echo $ddl_vehiculo->placa;?>"><?php echo $ddl_vehiculo->placa;?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="id_centro">Centro Solicitante</label>
                                <select class="form-control" id="id_centro" name="id_centro" style="width:100%">
                                <option >Seleccione...</option>  
                                                
                                        <?php
                                            include_once 'models/centro.php';

                                            if(count($this->ddl_centros)>0){
                                                foreach ($this->ddl_centros as $centro) {
                                                $ddl_centro = new CentroDAO();
                                                $ddl_centro = $centro;
                                                $seleccionado = '';
                                                if($this->ruta->id_centro==$centro->id_centro){
                                                    $seleccionado = "selected";
                                                }else{
                                                    $seleccionado = '';
                                                }
                                        ?>
                                                <option <?php echo $seleccionado;?> value="<?php echo $ddl_centro->id_centro;?>"><?php echo $ddl_centro->id_centro;?>-<?php echo $ddl_centro->nombre;?>
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
                                    <option >Seleccione...</option>
                                                <small id="id_productoHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/centro.php';

                                            if(count($this->ddl_productos)>0){
                                                foreach ($this->ddl_productos as $centro) {
                                                $ddl_producto = new ProductoDAO();
                                                $ddl_producto = $centro;
                                                $seleccionado = '';
                                                if ($this->ruta->id_producto==$centro->id_producto){
                                                    $seleccionado = "selected";
                                                }else{
                                                    $seleccionado = '';
                                                }
                                        ?>
                                                <option <?php echo $seleccionado;?> value="<?php echo $ddl_producto->id_producto;?>"><?php echo $ddl_producto->id_producto;?>-<?php echo $ddl_producto->nombre;?>
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
                                    <option ></option>
                                               
                                        <?php
                                            include_once 'models/solicitud.php';

                                            if(count($this->ddl_solicitudes)>0){
                                                foreach ($this->ddl_solicitudes as $solicitud) {
                                                $ddl_solicitud = new SolicitudDAO();
                                                $ddl_solicitud = $solicitud;
                                                $seleccionado = '';
                                                if($this->ruta->id_solicitud==$solicitud->id_solicitud){
                                                    $seleccionado = "selected";
                                                }else{
                                                    $seleccionado = '';
                                                }
                                        ?>
                                                <option <?php echo $seleccionado;?> value="<?php echo $ddl_solicitud->id_solicitud;?>"><?php echo $ddl_solicitud->id_solicitud;?>-<?php echo $ddl_solicitud->descripcion;?>
                                            </option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                                <small id="id_solicitudHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                            </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-info" value="Actualizar Ruta" >
                        <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>ruta")' value="Cancelar">
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