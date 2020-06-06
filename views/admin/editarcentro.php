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
                <h3><i class="fa fa-edit" aria-hidden="true"></i> Editar Centro Acopio y Bodega</h3>
                <p>Todos los campos son obligatorios</p>
            </div>
            <h1><?php echo strtoupper($this->centro->nombre); ?></h1>
            <div><?php echo $this->mensaje; ?></div>
            <div class="hpanel">
                <div class="panel-body">
                <form action="<?php echo constant('URL'); ?>centro/editar" method="POST">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="id_centro">Id centro</label>
                            <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->centro->id_centro; ?>" name="id_centro" id="id_centro" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" value="<?php echo $this->centro->nombre; ?>" name="nombre" id="nombre">
                            <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del Centro</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?php echo $this->centro->email; ?>" name="email" id="email">
                            <small id="emailHelp" class="form-text text-muted">Diligencie el email del Centro</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="number" class="form-control" value="<?php echo $this->centro->telefono; ?>" name="telefono" id="telefono">
                            <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero del Centro</small>
                        </div>
                        <div class="form-grup col-md-6">
                        <label class="form-text text-muted">WHATSAPP</label>
                        <?php 
                            $arr_whatsapp=explode('.',$this->centro->whatsapp);
                            
                            $whatsapp;
                            foreach($arr_whatsapp as $item){
                                $whatsapp[$item]='checked="checked"';
                            }
                        ?>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="whatsapp1" name="whatsapp"  value="1" class="custom-control-input"<?php echo (isset($whatsapp["1"])?$whatsapp["1"]:""); ?> value="1" class="radio-check-input">
                            <label class="custom-control-label" for="whatsapp1">SI</label>
                        </div>
                        <div class="custom-control custom-radio ">
                            <input type="radio" id="whatsapp2" name="whatsapp" value="0" class="custom-control-input"<?php echo (isset($whatsapp["0"])?$whatsapp["0"]:""); ?> value="0" class="radio-check-input">
                            <label class="custom-control-label" for="whatsapp2">NO</label>
                        </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="departamento">Departamento</label>
                            <input type="text" class="form-control" value="<?php echo $this->centro->departamento; ?>" name="departamento" id="departamento">
                            <small id="departamentoeHelp" class="form-text text-muted">Departamento</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="ciudad">Ciudad</label>
                            <input type="text" class="form-control" value="<?php echo $this->centro->ciudad; ?>" name="ciudad" id="ciudad">
                            <small id="ciudadHelp" class="form-text text-muted">Ciudad</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="encargado">Encargado</label>
                            <input type="text" class="form-control" value="<?php echo $this->centro->identificacion; ?>" name="encargado" id="encargado">
                            <small id="encargadoHelp" class="form-text text-muted">Persona encargada</small>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lugar">Lugar</label>
                            <input type="text" class="form-control" value="<?php echo $this->centro->lugar; ?>" name="lugar" id="lugar">
                            <small id="lugarHelp" class="form-text text-muted">Lugar de ubicacion</small>
                        </div>
                    </div>
                    <div class="text-center">
                        <input type="submit" class="btn btn-info" value="Actualizar centro" >
                        <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>centro")' value="Cancelar">
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