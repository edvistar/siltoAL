<?php
if ($_SESSION['cargo'] != "administrador") {
    if ($_SESSION['cargo'] != "supervisor") {
        if ($_SESSION['cargo'] != "bodeguero") {
            echo "<script>alert('Señor usuario,esta intentando acceder de forma incorrecta al sistema!')</script>";
            header("location: index/logout");
        }
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
                                <h1 class="text-center"><i class="fa fa-eye" aria-hidden="true"></i> Listado Solicitudes</h1>
                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>solicitud/crear")'>Crear Solicitud</button>
                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>public/pdf/solicitud.php")'>PDF</button>
                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>public/excel/functions/solicitud/createExcel.php")'>EXCEL</button><br>
                                <table id="tabla" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th  scope="col">Código</th>
                                            <th  scope="col">Fecha de Solicitud</th>
                                            <th  scope="col">Descripciòn</th>
                                            <th  scope="col">Centro</th>
                                            <th  scope="col">Encargado</th>
                                            <th  scope="col" colspan="2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-data">
                                <?php
                                    include_once 'models/solicitud.php';
                                    if(count($this->solicitudes)>0){
                                        foreach ($this->solicitudes as $row) {
                                            $solicitud = new SolicitudDAO();
                                            $solicitud = $row;
                                ?>
                                            <tr id="fila-<?php echo $solicitud->id_solicitud; ?>">
                                                <td><?php echo $solicitud->id_solicitud; ?></td>
                                                <td><?php echo $solicitud->fecha_solicitud; ?></td>
                                                <td><?php echo $solicitud->descripcion; ?>
                                                <td><?php echo $solicitud->id_centro; ?>
                                                <td><?php echo $solicitud->identificacion; ?>
                                                <td><a href="<?php echo constant('URL') . 'solicitud/leer/' . $solicitud->id_solicitud; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td>
                                                <td><button class="bEliminar" data-controlador="solicitud" data-accion="eliminar" data-id="<?php echo $solicitud->id_solicitud; ?>"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</button></td>
                                            </tr>
                                <?php
                                        }
                                    }else{
                                ?>
                                    <tr><td colspan="6" class="text-center">NO HAY SOLICITUDES DISPONIBLES</td></tr>
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