<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>

<body>

    <?php require 'views/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                <div class="text-center custom-login">
                    <h3><i class="fa fa-user" aria-hidden="true"></i> Editar  usuario</h3>
                    <p>Todos los campos son obligatorios</p>
                </div>
                <h1><?php echo strtoupper($this->usuario->identificacion); ?></h1>
                <div><?php echo $this->mensaje; ?></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo constant('URL'); ?>usuario/editar" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="identificacion">Identificación</label>
                                    <input type="number" class="form-control" value="<?php echo $this->usuario->identificacion; ?>" name="identificacion" id="identificacion" readonly>
                                    <small id="identificacionHelp" class="form-text text-muted">Diligencie el numero de identificación del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="nombre">Nombres</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $this->usuario->nombre; ?>" placeholder="Ej: Luis Felipe">
                                    <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $this->usuario->apellido; ?>" placeholder="Ej: Agudelo Restrepo">
                                    <small id="apellidoHelp" class="form-text text-muted">Diligencie los apellidos del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $this->usuario->email; ?>" placeholder="Ej: impower5@tantos.com">
                                    <small id="emailHelp" class="form-text text-muted">Diligencie el email del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $this->usuario->pass; ?>" placeholder="Minimo cinco caracteres">
                                    <small id="passHelp" class="form-text text-muted">Diligencie la contraseña del email</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="telefono">Numero Telefonico</label>
                                    <input type="tel" name="telefono" id="telefono" class="form-control" value="<?php echo $this->usuario->telefono; ?>" placeholder="Ej: 7777777">
                                    <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero de telefono del usuario</small>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <label for="">Whatsapp</label><br>
                                    <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp1" value="1">
                                    <label class="custom-control-label" for="whatsapp1">Si</label>
                                    <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp2" value="0">
                                    <label class="custom-control-label" for="whatsapp2">No</label><br>
                                    <small id="whatsappHelp" class="form-text text-muted">Diligencie si tiene whatsapp el numero de telefono ingresado</small>
                                </div>
                                <div id="cargo" name="cargo" class="form-group col-lg-6">
                                    <label for="cargo">Cargo</label>
                                    <select id="cargo" name="cargo" class="form-control">
                                        <option >Seleccionar</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="bodeguero">Bodeguero</option>
                                        <option value="conductor">Conductor</option>
                                    </select>
                                    <small id="cargopHelp" class="form-text text-muted">Diligencie el cargo a desempeñar el usuario</small>
                                </div>
                                <div id="estado" name="estado" class="form-group col-lg-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <!-- <option>Seleccionar</option> -->
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                    <small id="estadopHelp" class="form-text text-muted">Estado en la aplicación</small>
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-info" value="Actualizar Usuario" >
                                <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>usuario")' value="Cancelar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>