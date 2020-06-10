<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
</head>

<body>

    <?php require 'views/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                <div class="text-center custom-login">
                    <h3><i class="fa fa-user" aria-hidden="true"></i> Registrar Usuario</h3>
                    <p>Todos los campos son obligatorios</p>
                </div>
                <div><?php echo $this->mensaje; ?></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo constant('URL'); ?>usuario/crear" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="identificacion">Identificación</label>
                                    <input type="number" class="form-control" name="identificacion" id="identificacion" placeholder="Ej: 107000000">
                                    <small id="identificacionHelp" class="form-text text-muted">Diligencie el numero de identificación del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="nombreUsuario">Nombres</label>
                                    <input type="text" name="nombreUsuario" id="nombreUsuario" class="form-control" placeholder="Ej: Luis Felipe">
                                    <small id="nombreUsuarioHelp" class="form-text text-muted">Diligencie el nombre del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="apellidoUsuario">Apellidos</label>
                                    <input type="text" name="apellidoUsuario" id="apellidoUsuario" class="form-control" placeholder="Ej: Agudelo Restrepo">
                                    <small id="apellidoUsuarioHelp" class="form-text text-muted">Diligencie los apellidos del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="emailUsuario">Email</label>
                                    <input type="email" name="emailUsuario" id="emailUsuario" class="form-control" placeholder="Ej: usuario@gmail.com">
                                    <small id="emailUsuarioHelp" class="form-text text-muted">Diligencie el email del usuario</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control">
                                    <small id="passHelp" class="form-text text-muted">Diligencie la contraseña del email</small>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label for="telefonoUsuario">Numero Telefonico</label>
                                    <input type="number" name="telefonoUsuario" id="telefonoUsuario" class="form-control" placeholder="Ej: 304123456">
                                    <small id="telefonoUsuarioHelp" class="form-text text-muted">Diligencie el numero de telefono del usuario</small>
                                </div>
                                <div class="custom-control custom-radio col-md-6">
                                    <label for="">Whatsapp</label><br>
                                    <input class="custom-control-input" type="radio" name="whatsappUsuario" id="whatsapp1" value="1">
                                    <label class="custom-control-label" for="whatsapp1">Si</label>
                                    <input class="custom-control-input" type="radio" name="whatsappUsuario" id="whatsapp2" value="0">
                                    <label class="custom-control-label" for="whatsapp2">No</label><br>
                                    <small id="whatsappHelp" class="form-text text-muted">Confirme si tiene whatsapp el numero telefonico ingresado</small>
                                </div>
                                <div id="cargo" name="cargo" class="form-group col-lg-6">
                                    <label for="cargo">Cargo</label>
                                    <select id="cargo" name="cargo" class="form-control">
                                        <option>-- Seleccionar --</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="coordinador">Coordinador</option>
                                        <option value="conductor">Conductor</option>
                                    </select>
                                    <small id="cargopHelp" class="form-text text-muted">Diligencie el cargo a desempeñar el usuario</small>
                                </div>
                                <div id="estado" name="estado" class="form-group col-lg-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                    <small id="estadopHelp" class="form-text text-muted">Estado en la aplicación</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="foto">Foto de perfil</label>
                                    <input type="file" name="foto" id="foto" class="form-control" accept=".jpg, .png, .jpeg">
                                    <small id="foto" class="form-text text-muted"> Seleccione de su equipo una foto en formatos .jpg, .png, .jpeg</small>

                                </div>

                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-info" value="Registrar Usuario" >
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