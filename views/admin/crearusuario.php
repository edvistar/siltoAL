<!DOCTYPE html>
<html lang="es">

<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>

<body>
    <?php require 'views/header.php'; ?>
    <!-- Start Welcome area -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="text-center custom-login">
                    <h3><i class="fa fa-user" aria-hidden="true"></i> Registrar Usuario</h3>
                    <p>Todos los campos son obligatorios.</p>
                </div>
                <div class="center"><?php echo $this->mensaje;?></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo constant('URL'); ?>usuario/crear" method="POST" id="loginForm">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="identificacion">Identificación</label>
                                    <input type="number" name="identificacion" id="identificacion" class="form-control" placeholder="Ej: 123456789">
                                    <small id="identificacionHelp" class="form-text text-muted">Diligencie el numero de identificacion del usuario</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="nombre">Nombres</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Luis Felipe">
                                    <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del usuario</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ej: Agudelo Restrepo">
                                    <small id="apellidoHelp" class="form-text text-muted">Diligencie los apellidos del usuario</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Ej: impower5@tantos.com">
                                    <small id="emailHelp" class="form-text text-muted">Diligencie el email del usuario</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Minimo cinco caracteres">
                                    <small id="passHelp" class="form-text text-muted">Diligencie la contraseña del email</small>
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="telefono">Numero Telefonico</label>
                                    <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ej: 7777777">
                                    <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero de telefono del usuario</small>
                                </div>

                                <div class="custom-control custom-radio col-lg-6">
                                     <label >Whatsapp</label><br>
                                    <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp1" value="1">
                                    <label class="custom-control-label" for="whatsapp1">Si</label>
                                    <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp0" value="0">
                                    <label class="custom-control-label" for="whatsapp0">No</label><br>
                                    <small id="whatsappHelp" class="form-text text-muted">Diligencie si tiene whatsapp el numero de telefono ingresado</small>
                                </div>

                                <div id="cargo" class="form-group col-lg-6">
                                    <label for="cargo">Cargo</label>
                                    <select id="cargo" name="cargo" class="form-control">
                                        <option>--Seleccione un cargo--</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="bodeguero">Bodeguero</option>
                                        <option value="conductor">Conductor</option>
                                    </select>
                                    <small id="cargopHelp" class="form-text text-muted">Diligencie el cargo a desempeñar el usuario</small>
                                </div>

                                <div id="estado" class="form-group col-lg-6">
                                    <label for="estado">Estado</label>
                                    <select id="estado" name="estado" class="form-control">
                                        <!-- <option>--Seleccione un Estado--</option> -->
                                        <option value="activo">Activo</option>
                                        <option value="inactivo">Inactivo</option>
                                    </select>
                                    <small id="estadoHelp" class="form-text text-muted">Estado en la aplicación</small>
                                </div>
                            </div>
                            <div class="text-center ">
                                <button type="submit" class="btn btn-info">Registrar</button>
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