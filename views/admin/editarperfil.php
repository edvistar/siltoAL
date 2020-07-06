<!DOCTYPE html>
<html lang="es">

<head>
<?php require 'views/head.php'; ?>
</head>

<body>

    <?php require 'views/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
            <div class="col-md-8 col-md-8 col-sm-8 col-xs-12">
                <div class="text-center custom-login">
                    <h3><i class="fa fa-user" aria-hidden="true"></i> Editar mi Perfil</h3>
                    <p>Todos los campos son obligatorios</p>
                </div>
                <h4> Identificación del usuario: <?php echo strtoupper($this->usuario->identificacion); ?></h4>
                <div><?php echo $this->mensaje; ?></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo constant('URL'); ?>perfil/editar" method="POST" enctype="multipart/form-data" id="formularioeditar">           
                        <div class="row">

                                <input type="hidden" class="form-control" value="<?php echo $this->usuario->identificacion; ?>" name="identificacion" id="identificacion" readonly>

                                <div class="form-group col-md-6">
                                    <label for="nombre">Nombres</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $this->usuario->nombre; ?>" placeholder="Ej: Luis Felipe" required>
                                    <small id="nombreHelp" class="form-text text-muted">Diligencie el nombre del usuario</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="apellido">Apellidos</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control" value="<?php echo $this->usuario->apellido; ?>" placeholder="Ej: Agudelo Restrepo" required>
                                    <small id="apellidoHelp" class="form-text text-muted">Diligencie los apellidos del usuario</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control" value="<?php echo $this->usuario->email; ?>" placeholder="Ej: usuario@gmail.com" required>
                                    <small id="emailHelp" class="form-text text-muted">Diligencie el email del usuario</small>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="telefono">Numero Telefonico</label>
                                    <input type="number" name="telefono" id="telefono" class="form-control" value="<?php echo $this->usuario->telefono; ?>" placeholder="Ej: 3040000000" required>
                                    <small id="telefonoHelp" class="form-text text-muted">Diligencie el numero de telefono del usuario</small>
                                </div>
                               
                                <div class="form-group col-md-12">
                                <label for="whatsapp">Whatsapp</label><br>
                                    <input class="custom-control-input"required type="radio" name="whatsapp" id="whatsapp1" value="SI" checked>SI
                                    <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp0" value="NO">NO<br>
                                    <small id="whatsappHelp" class="form-text text-muted">Confirme si tiene whatsapp el numero de telefono ingresado</small>
                                </div>

                                <input type="hidden" name="cargo" value="<?php echo $this->usuario->cargo; ?>">

                                <input type="hidden" name="estado" value="<?php echo $this->usuario->estado; ?>">

                                <div class="form-group col-lg-6">
                                    <label for="pass">Password</label>
                                    <input type="password" name="pass" id="pass" value="<?php echo $this->usuario->pass; ?>" class="form-control" onclick="this.value=''" required >
                                    <small id="passHelp" class="form-text text-muted">AVISO: modifique solo si desea un password nuevo</small>       
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="pass">Confirme Password</label>
                                    <input type="password" name="passy" id="passy" value="<?php echo $this->usuario->pass; ?>" class="form-control" onclick="this.value=''" required >
                                    <small id="passHelp" class="form-text text-muted">Repita la contraseña del email</small>
                                    <input type="checkbox" onclick="verPassword()"> Ver Password
                                </div>
                                

                                 <!-- Password antiguo -->
                                <input type="hidden" name="passoriginal" id="passoriginal" class="form-control" value="<?php echo $this->usuario->pass; ?>" required>
                             
                                <div class="form-group col-md-6">
                                    <label for="foto">Cambiar Foto de perfil</label>
                                    <input type="file" name="foto" id="foto" accept=".jpg, .png, .jpeg">
                                    <br>
                                    <small id="foto" class="form-text text-muted"> Seleccione de su equipo una imagen nueva si desea cambiar su foto</small>
                                </div>
                                                                
                                <div class="form-group col-md-6">
                                    <label for="foto">Foto de Perfil Actual</label>
                                    <div>
                                        <input type="hidden" name="fotoriginal" value="<?php echo $this->usuario->foto; ?>">
                                        <img src="<?php echo '../../' . $this->usuario->foto; ?>" alt="imagen usuario" width="100" height="100">
                                    </div>
                                </div>

                            </div>

                            <!-- Campo para generar alerta cuando los password no coinciden -->
                            <div class="text-center" id="alerta"></div>
                            
                            <div class="text-center">
                                <input type="submit" class="btn btn-info" value="Actualizar Perfil" onclick="validapassword();">
                                <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>perfil")' value="Cancelar">
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