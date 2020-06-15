<!DOCTYPE html>
<html lang="en">
<head>
<?php require 'views/head.php'; ?>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
            <div class="text-center custom-login mt-20px">
                <h3><i class="fa fa-map-marker" aria-hidden="true"></i> Editar Ruta</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <div class="center"><?php echo $this->mensaje;?></div>
            <div class="hpanel">
                <div class="panel-body">
                    <form action="<?php echo constant('URL'); ?>ruta/editar" method="POST">
                        <div class="row">
                        
                            <div class="form-group col-md-4">
                                <label for="fecha_ruta">Fecha Ruta</label>
                                <input type="date" class="form-control" value="<?php echo $this->ruta->fecha_ruta; ?>" name="fecha_ruta" id="fecha_ruta">
                                <small id="fecha_rutaHelp" class="form-text text-muted">Diligencie la fecha de la ruta</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="hora_salida">Hora Salida</label>
                                <input type="time" class="form-control" value="<?php echo $this->ruta->hora_salida; ?>"  name="hora_salida" id="hora_salida">
                                <small id="hora_salidaHelp" class="form-text text-muted">Diligencie la hora de salida</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="hora_llegada">Hora Llegada</label>
                                <input type="time" class="form-control" value="<?php echo $this->ruta->hora_llegada; ?>"   name="hora_llegada" id="hora_llegada">
                                <small id="hora_llegadaHelp" class="form-text text-muted">Diligencie la hora de llegada</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="tipo_ruta">Tipo Ruta</label>
                                <input type="text" class="form-control" value="<?php echo $this->ruta->tipo_ruta; ?>"  name="tipo_ruta" id="tipo_ruta">
                                <small id="tipo_rutaHelp" class="form-text text-muted">Tipo Ruta</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="precinto">Precinto</label>
                                <input type="text" class="form-control" value="<?php echo $this->ruta->precinto;?>" name="precinto" id="precinto">
                                <small id="precintoHelp" class="form-text text-muted">Precinto </small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="identificacion">Encargado</label>
                                <select class="form-control" id="identificacion" name="identificacion" style="width:100%">

                                    <option selected value="<?php echo $this->ruta->identificacion;?>"><?php echo $this->ruta->identificacion;?></option>
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
                                <small id="identificacionHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="placa">Placa</label>
                                <select class="form-control" id="placa" name="placa" style="width:100%">
                                    <option selected value="<?php echo $this->ruta->placa;?>"><?php echo $this->ruta->placa;?></option>
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
                                <small id="placaHelp" class="form-text text-muted">Diligencie la placa del vehiculo</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_centro">Centro Solicitante</label>
                                <select class="form-control" id="id_centro" name="id_centro" style="width:100%">
                                <option selected value="<?php echo $this->ruta->id_centro;?>"><?php echo $this->ruta->id_centro;?></option>
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
                                <small id="id_centroHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="id_solicitud">Id Solicitud</label>
                                <select class="form-control" id="id_solicitud" name="id_solicitud" style="width:100%">
                                <option selected value="<?php echo $this->ruta->id_solicitud;?>"><?php echo $this->ruta->id_solicitud;?></option>
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
                                <small id="id_solicitudHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                            </div>

                                <?php 
                                    $arr_productos=explode('.',$this->ruta->variedad_productos);
                                    $producto;
                                    foreach($arr_productos as $item){
                                        $producto[$item]='checked="checked"';
                                    }
                                 ?>
                        <div class="custom-control form-check form-group col-md-12">
                                <label class="form-text text-muted">Productos en la ruta</label><br>
                                <input type="checkbox" id="producto_0" name="productos[0]" <?php echo (isset($producto["uchuba"])?$producto["uchuba"]:""); ?>   value="uchuba" class="form-check-input">
                                <label class="form-check-label" for="producto_0">Uchuba</label>
                                <input type="checkbox" id="producto_1" name="productos[1]" <?php echo (isset($producto["maracuya"])?$producto["maracuya"]:""); ?>   value="maracuya" class="form-check-input">
                                <label class="form-check-label" for="producto_1">Maracuya</label>
                                <input type="checkbox" id="producto_2" name="productos[2]" <?php echo (isset($producto["chulupa"])?$producto["chulupa"]:""); ?>  value="chulupa" class="form-check-input">
                                <label class="form-check-label" for="producto_2">Chulupa</label>
                                <input type="checkbox" id="producto_3" name="productos[3]" <?php echo (isset($producto["arandanos"])?$producto["arandanos"]:""); ?>  value="arandanos" class="form-check-input">
                                <label class="form-check-label" for="producto_3">Arandanos</label>
                                <input type="checkbox" id="producto_4" name="productos[4]" <?php echo (isset($producto["pitaya"])?$producto["pitaya"]:""); ?>  value="pitaya" class="form-check-input">
                                <label class="form-check-label" for="producto_4">Pitaya</label><br>
                                <input type="checkbox" id="producto_5" name="productos[5]" <?php echo (isset($producto["granadilla"])?$producto["granadilla"]:""); ?>  value="granadilla" class="form-check-input">
                                <label class="form-check-label" for="producto_5">Granadilla</label>
                                <input type="checkbox" id="producto_6" name="productos[6]" <?php echo (isset($producto["freijoa"])?$producto["freijoa"]:""); ?>  value="freijoa" class="form-check-input">
                                <label class="form-check-label" for="productos_6">Freijoa</label>
                                <input type="checkbox" id="producto_7" name="productos[7]" <?php echo (isset($producto["lulo"])?$producto["lulo"]:""); ?>  value="lulo" class="form-check-input">
                                <label class="form-check-label" for="producto_7">Lulo</label>
                                <input type="checkbox" id="producto_8" name="productos[8]" <?php echo (isset($producto["guanabana"])?$producto["guanabana"]:""); ?>  value="guanabana" class="form-check-input">
                                <label class="form-check-label" for="producto_8">Guanabana</label>
                                <input type="checkbox" id="producto_9" name="productos[9]" <?php echo (isset($producto["tamarillo"])?$producto["tamarillo"]:""); ?>  value="tamarillo" class="form-check-input">
                                <label class="form-check-label" for="producto_9">Tamarillo</label>
                                <input type="checkbox" id="producto_10" name="productos[10]" <?php echo (isset($producto["babybanana"])?$producto["babybanana"]:""); ?> value="babybanana" class="form-check-input">
                                <label class="form-check-label" for="producto_10">Babybanana</label>
                            </div>
                             <!-- <div class="form-group col-md-4">
                                <label for="descripcion">Descripción</label>
                                <input type="text" class="form-control" value="<?php echo $this->ruta->descripcion; ?>" name="descripcion" id="descripcion">
                                <small id="descripcioneHelp" class="form-text text-muted">Descripción</small>
                            </div> -->
                            <div class="form-group col-md-12">
                                <label for="observaciones">Descripciòn de solicitud</label>
                                <textarea  class="form-control" name="observaciones" id="observaciones" cols="30" rows="10" value="<?php echo $this->ruta->observaciones; ?>" ></textarea>
                                <small id="descripcionHelp" class="form-text text-muted">Observaciones</small>
                            </div>
                        </div>
                        <div class="text-center ">
                            <button class="btn btn-info">Editar ruta</button>
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