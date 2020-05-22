<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Editar Centro</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        
        <h1 class="center"><?php echo strtoupper($this->centro->nombre); ?></h1>
        <div><?php echo $this->mensaje; ?></div>
        <div class="col-sm-6 offset-sm-3">
            <form action="<?php echo constant('URL'); ?>centro/editar" method="POST">
            <div class="form-group">
                <label for="id_centro">Id centro</label>
                <input style="background: #dddddd; font-size:16px;" type="text" class="form-control" value="<?php echo $this->centro->id_centro; ?>" name="id_centro" id="id_centro" readonly>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" value="<?php echo $this->centro->nombre; ?>" name="nombre" id="nombre">
                <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del Centro</small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" value="<?php echo $this->centro->email; ?>" name="email" id="email">
                <small id="emailHelp" class="form-text text-muted">Diligencie el email del Centro</small>
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="number" class="form-control" value="<?php echo $this->centro->telefono; ?>" name="telefono" id="telefono">
                <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero del Centro</small>
            </div>
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
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="whatsapp2" name="whatsapp" value="0" class="custom-control-input"<?php echo (isset($whatsapp["0"])?$whatsapp["0"]:""); ?> value="0" class="radio-check-input">
                <label class="custom-control-label" for="whatsapp2">NO</label>
            <div class="form-group">
                <label for="departamento">Departamento</label>
                <input type="text" class="form-control" value="<?php echo $this->centro->departamento; ?>" name="departamento" id="departamento">
                <small id="departamentoeHelp" class="form-text text-muted">Departamento</small>
            </div>
            <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input type="text" class="form-control" value="<?php echo $this->centro->ciudad; ?>" name="ciudad" id="ciudad">
                <small id="ciudadHelp" class="form-text text-muted">Ciudad</small>
            </div>
            <div class="form-group">
                <label for="encargado">Encargado</label>
                <input type="text" class="form-control" value="<?php echo $this->centro->encargado; ?>" name="encargado" id="encargado">
                <small id="encargadoHelp" class="form-text text-muted">Persona encargada</small>
            </div>
            <div class="form-group">
                <label for="lugar">Lugar</label>
                <input type="text" class="form-control" value="<?php echo $this->centro->lugar; ?>" name="lugar" id="lugar">
                <small id="lugarHelp" class="form-text text-muted">Lugar de ubicacion</small>
            </div>

                <input type="submit" class="btn btn-primary btn-sm btn-block" value="Actualizar centro" >
                <input type="button" class="btn btn-danger btn-sm btn-block" onClick='window.location.assign("<?php echo constant('URL'); ?>/centro")' value="Cancelar">
            </form>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>
    
</body>
</html>