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
                            <input type="number" class="form-control" name="id_solicitud" id="id_solicitud" >
                            <small id="id_solicitudHelp" class="form-text text-muted">Ingrese el Id de la solicitud</small>
                        </div>
                        <div class="form-group col-md-6">
                                <label for="solicitud">Fecha de Solicitud</label>
                                <input type="date" class="form-control" name="solicitud" id="solicitud">
                                <small id="solicitudHelp" class="form-text text-muted">Diligencie la solicitud de ruta</small>
                            </div>

                        
                        <div class="form-group col-md-6">
                            <label for="id_centro">Centro Solicitantel</label>
                                <select class="custom-select" id="id_centro" name="id_centro" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                    <small id="centroHelp" class="form-text text-muted">Diligencie el centro solicitante.</small>
                                        <?php
                                            include_once 'models/centro.php';

                                            if(count($this->ddl_centros)>0){
                                                foreach ($this->ddl_centros as $centro) {
                                                $ddl_centro = new CentroDAO();
                                                $ddl_centro = $centro;
                                        ?>
                                                <option  value="<?php echo $ddl_centro->id_centro; ?>"><?php echo $ddl_centro->id_centro; ?>-<?php echo $ddl_centro->nombre;?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                                    <small id="encargadoHelp" class="form-text text-muted">Diligencie el centro solicitante.</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="identificacion">identificacion</label>
                                <select class="custom-select" id="identificacion" name="identificacion" style="width:100%">
                                    <option selected value="">seleccione...</option>
                                                <small id="encargadoHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>
                                        <?php
                                            include_once 'models/usuario.php';

                                            if(count($this->ddl_usuarios)>0){
                                                foreach ($this->ddl_usuarios as $usuario) {
                                                $ddl_usuario = new UsuarioDAO();
                                                $ddl_usuario = $usuario;
                                        ?>
                                                <option  value="<?php echo $ddl_usuario->identificacion; ?>"><?php echo $ddl_usuario->nombre;?>-<?php echo $ddl_usuario->apellido;?>-<?php echo $ddl_usuario->cargo;?></option>
                                                <?php
                                                }
                                            }
                                                ?>
                                </select>
                                    <small id="encargadoHelp" class="form-text text-muted">Diligencie el encargado de la solicitud.</small>

                        </div>
                        <div class="form-group col-md-6">
                            <label for="descripcion">Descripciòn</label>
                            <input type="text-area" class="form-control" name="descripcion" id="descripcion">
                            <small id="descripcionHelp" class="form-text text-muted">Diligencie el descripcion de la solicitud.</small>
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