<?php
if ($_SESSION['cargo'] != "administrador") {
    if ($_SESSION['cargo'] != "supervisor") {
        echo "<script>alert('Señor usuario,esta intentando acceder de forma incorrecta al sistema!')</script>";
        header("location: index/logout");
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<?php require 'views/head.php'; ?>
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
                            <h1 class="text-center"><i class="fa fa-map" aria-hidden="true"></i> Listado de Rutas</h1>
                            <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>/ruta/crear")'>Crear Ruta</button>
                            <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>public/pdf/ruta.php")'>PDF</button><br>

                            <table id="tabla" class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th  scope="col">Id Ruta</th>
                                        <th  scope="col">Fecha Ruta</th>
                                        <th  scope="col">Hora Salida</th>
                                        <th  scope="col">Hora Llegada</th>
                                        <th  scope="col">Tipo de Ruta</th>
                                        <th  scope="col">Precinto</th>
                                        <th  scope="col">Identificacion</th>
                                        <th  scope="col">Placa</th>
                                        <th  scope="col">Id Centro</th>
                                        <th  scope="col">Productos</th>
                                        <th  scope="col">Id Solicitud</th>
                                        <th  scope="col">Observaciones</th>
                                        <th  scope="col" colspan="2" class="text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="tbody-data">
                            <?php
                                include_once 'models/ruta.php';
                                if(count($this->rutas)>0){
                                    foreach ($this->rutas as $row) {
                                        $ruta = new RutaDAO();
                                        $ruta = $row;
                            ?>
                                        <tr id="fila-<?php echo $ruta->id_ruta; ?>">
                                            <td><?php echo $ruta->id_ruta; ?></td>
                                            <td><?php echo $ruta->fecha_ruta; ?></td>
                                            <td><?php echo $ruta->hora_salida; ?></td>
                                            <td><?php echo $ruta->hora_llegada; ?></td>
                                            <td><?php echo $ruta->tipo_ruta; ?></td>
                                            <td><?php echo $ruta->precinto; ?></td>
                                            <td><?php echo $ruta->identificacion; ?></td>
                                            <td><?php echo $ruta->placa; ?></td>
                                            <td><?php echo $ruta->id_centro; ?></td>
                                            <td><?php echo $ruta->variedad_productos; ?></td>
                                            <td><?php echo $ruta->id_solicitud; ?></td>
                                            <td><?php echo $ruta->observaciones; ?></td>
                                            <td><a href="<?php echo constant('URL') . 'ruta/leer/' . $ruta->id_ruta; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td>
                                            <td><button class="bEliminar" data-controlador="ruta" data-accion="eliminar" data-id="<?php echo $ruta->id_ruta; ?>"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</button></td>
                                        </tr>
                            <?php   
                                    } 
                                }else{
                            ?>
                                <tr><td colspan="6" class="text-center">NO HAY CENTROS RUTAS DISPONIBLES</td></tr>
                            <?php
                                }
                            ?>
                                </tbody>
                            </table>
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
    </div>
    <?php require 'views/footer.php'; ?>
</body>
</html>