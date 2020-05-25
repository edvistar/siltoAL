<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaReg</title>


</head>

<body>



    <?php require 'views/header.php'; ?>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                <div class="col-md-12">
                    <div class="row">
                        <div>
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12"></div>
                                    <div class="col-md-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="text-center custom-login">
                                            <h3>Registrar Usuario</h3>
                                            <p>Registrar un nuevo usuario SILTO.</p>
                                        </div>
                                        <div class="center"><?php echo $this->mensaje;?></div>
                                        <div class="hpanel">
                                            <div class="panel-body">
                                                <form action="<?php echo constant('URL'); ?>usuario/crear" method="POST" id="loginForm">
                                                    <div class="row">
                                                        <div class="form-group col-lg-6">
                                                            <label>Identificación</label>
                                                            <input type="number" name="identificacion" id="identificacion" class="form-control" placeholder="Ej: 123456789">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label>Nombres</label>
                                                            <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ej: Luis Felipe">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label>Apellidos</label>
                                                            <input type="text" name="apellido" id="apellido" class="form-control" placeholder="Ej: Agudelo Restrepo">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label>Email</label>
                                                            <input type="email" name="email" id="email" class="form-control" placeholder="Ej: impower5@tantos.com">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label>Password</label>
                                                            <input type="password" name="pass" id="pass" class="form-control" placeholder="Minimo cinco caracteres">
                                                        </div>

                                                        <div class="form-group col-lg-6">
                                                            <label>Numero Telefonico</label>
                                                            <input type="tel" name="telefono" id="telefono" class="form-control" placeholder="Ej: 7777777">
                                                        </div>
    
                                                        <div class="custom-control custom-radio col-lg-12">
                                                        <label >Whatsapp</label>
                                                            <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp1" value="1">
                                                            <label class="custom-control-label" for="whatsapp1">Si</label>
                                                            <input class="custom-control-input" type="radio" name="whatsapp" id="whatsapp0" value="0">
                                                            <label class="custom-control-label" for="whatsapp0">No</label>
                                                        </div>

                                                        <div id="cargo" class="form-group col-lg-6">
                                                            <label>Cargo</label>
                                                            <select id="cargo" name="cargo" class="form-control">
                                                                <option>--Seleccione un cargo--</option>
                                                                <option value="administrador">Administrador</option>
                                                                <option value="bodeguero">Bodeguero</option>
                                                                <option value="conductor">Conductor</option>
                                                            </select>
                                                        </div>

                                                        <div id="estado" class="form-group col-lg-6">
                                                            <label>Estado</label>
                                                            <select id="estado" name="estado" class="form-control">
                                                                <option>--Seleccione un Estado--</option>
                                                                <option value="activo">Activo</option>
                                                                <option value="inactivo">Inactivo</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="text-center ">
                                                        <button type="submit" class="btn btn-success loginbtn">Registrar</button>
                                                        <button class="btn btn-default">Cancelar</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require 'views/footer.php'; ?>

</body>

</html>