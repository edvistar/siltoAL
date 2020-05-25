<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
</head>

<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de Usuarios</h1>

        <table id="tabla" class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Identificacion</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apellidos</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Whatsapp</th>
                    <th scope="col">Cargo</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Fecha de ingreso</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>

            <tbody id="tbody-data">
                <?php
                    include_once 'models/usuariodao.php';
                    if(count($this->usuarios)>0){
                        foreach ($this->usuarios as $row){
                            $usuario = new UsuarioDAO();
                            $usuario = $row;
                ?>

                <tr id="fila-<?php echo $usuario->identificacion; ?>">
                    <td><?php echo $usuario->identificacion; ?></td>                     <td><?php echo $usuario->nombre; ?></td>
                    <td><?php echo $usuario->apellido; ?></td>
                    <td><?php echo $usuario->email; ?></td>
                    <td><?php echo $usuario->telefono; ?></td>
                    <td><?php echo $usuario->whatsapp; ?></td>
                    <td><?php echo $usuario->cargo; ?></td>
                    <td><?php echo $usuario->estado; ?></td>
                    <td><?php echo $usuario->fecha_ingreso; ?></td>
                    <td><a href="<?php echo constant('URL') . 'usuario/leer/' . $usuario->identificacion; ?>">Actualizar</a></td> <!--url/controlador/metodo-->
                    <td><button class="bEliminar" data-controlador="usuario" data-accion="eliminar" data-id="<?php echo $usuario->identificacion; ?>">Eliminar</button></td> 
                </tr>

                <?php   
                        } 
                    }else{
                ?>
                <tr><td colspan="11" class="text-center">NO HAY USUARIOS</td></tr>
                <?php    
                        }
                ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-success loginbtn" onClick='window.location.assign("<?php echo constant('URL'); ?>/usuario/crear")'>Registrar Usuario</button>
    </div>

    <?php require 'views/footer.php'; ?>

    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>