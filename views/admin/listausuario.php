<!DOCTYPE html>
<html lang="es">

<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>

<body>

    <?php require 'views/header.php'; ?>
    <div class="product-status mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-status-wrap">
                        <div id="main">
                            <div><?php echo $this->mensaje; ?></div>
                            <h1 class="text-center"><i class="fa fa-users" aria-hidden="true"></i> Listado de Usuarios</h1>
                            <button type="button" class="btn btn-success loginbtn" onClick='window.location.assign("<?php echo constant('URL'); ?>/usuario/crear")'>Crear Usuario</button><br>
                            <table id="tabla" class="table table-hover">
                                <thead class="thead-dark">
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
                                        <th scope="col">Foto</th>
                                        <th scope="col" colspan="2">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-data">
                                    <?php
                                        include_once 'models/usuario.php';
                                        if(count($this->usuarios)>0){
                                            foreach ($this->usuarios as $row){
                                                $usuario = new UsuarioDAO();
                                                $usuario = $row;
                                    ?>
                                    <tr id="fila-<?php echo $usuario->identificacion; ?>">
                                        <td><?php echo $usuario->identificacion; ?></td>
                                        <td><?php echo $usuario->nombre; ?></td>                     
                                        <td><?php echo $usuario->apellido; ?></td>
                                        <td><?php echo $usuario->email; ?></td>
                                        <td><?php echo $usuario->telefono; ?></td>
                                        <td><?php echo $usuario->whatsapp; ?></td>
                                        <td><?php echo $usuario->cargo; ?></td>
                                        <td><?php echo $usuario->estado; ?></td>
                                        <td><?php echo $usuario->fecha_ingreso; ?></td>
                                        <td><img src="<?php echo constant('URL') . $usuario->foto; ?>" alt="imagen usuario" width="100" height="100"> </td>
                                        <td><a href="<?php echo constant('URL') . 'usuario/leer/' . $usuario->identificacion; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td> <!--url/controlador/metodo-->
                                        <td><button class="bEliminar" data-controlador="usuario" data-accion="eliminar" data-id="<?php echo $usuario->identificacion; ?>"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</button></td> 
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
                        </div>
                        <div class="custom-pagination">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'views/footer.php'; ?>

    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>