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
                    <h3><i class="fa fa-user" aria-hidden="true"></i> Cambiar Password</h3>
                    <p>Todos los campos son obligatorios</p>
                </div>
                <h4> Identificación del usuario: <?php echo strtoupper($this->usuario->identificacion); ?></h4>
                <div><?php echo $this->mensaje; ?></div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo constant('URL'); ?>pass/editar" method="POST" enctype="multipart/form-data" id="formulariopass">
                            <div class="row">

                                <input type="hidden" class="form-control" value="<?php echo $this->usuario->identificacion; ?>" name="identificacion" id="identificacion" readonly>

                                <input type="hidden" name="nombre" id="nombre" class="form-control" value="<?php echo $this->usuario->nombre; ?>">

                                <input type="hidden" name="apellido" id="apellido" class="form-control" value="<?php echo $this->usuario->apellido; ?>">

                                <input type="hidden" name="email" id="email" class="form-control" value="<?php echo $this->usuario->email; ?>">

                                <input type="hidden" name="telefono" id="telefono" class="form-control" value="<?php echo $this->usuario->telefono; ?>">

                                <input type="hidden" name="whatsapp" id="whatsapp" class="form-control" value="<?php echo $this->usuario->whatsapp; ?>">

                                <input type="hidden" name="cargo" value="<?php echo $this->usuario->cargo; ?>">

                                <input type="hidden" name="estado" value="<?php echo $this->usuario->estado; ?>">

                                <input type="hidden" name="fotoriginal" value="<?php echo $this->usuario->foto; ?>">


                                <div class="form-group">
                                    <label for="passant">Password Actual</label>
                                    <input type="password" name="passant" id="passant" class="form-control" required>
                                    <small id="passHelp" class="form-text text-muted">Digite su password actual</small>
                                </div>
                                
                                <!-- Password Original BD-->
                                <input type="hidden" name="passoriginal" id="passoriginal" class="form-control" value="<?php echo $this->usuario->pass; ?>" required>



                                <div class="form-group">
                                    <label for="pass">Nuevo Password</label>
                                    <input type="password" name="pass" id="pass"  class="form-control" required>
                                    <small id="passHelp" class="form-text text-muted">Digite su nuevo Password</small>
                                </div>

                                <div class="form-group">
                                    <label for="pass">Confirmar Password</label>
                                    <input type="password" name="passy" id="passy"  class="form-control" required>
                                    <small id="passHelp" class="form-text text-muted">Confirme su nuevo Password</small><br>
                                    <input type="checkbox" onclick="verPassword()"> Ver Password
                                </div>
                            </div>

                            <!-- Campo para generar alerta cuando los password no coinciden -->
                            <div class="text-center" id="alerta"></div>

                            <div class="text-center">
                                <input type="submit" class="btn btn-info" value="Actualizar Password" onclick="validapassword();">
                                <input type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL') . 'perfil/leer/' . $_SESSION['identificacion']; ?>")' value="Cancelar">
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