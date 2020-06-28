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
                            <div id="main" >
                                <div><?php echo $this->mensaje; ?></div>
                                <h1 class="text-center"><i class="fa fa-car" aria-hidden="true"></i> Listado de vehículos</h1>
                                <div class="row">
                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>/vehiculo/crear")'>Crear vehículo</button>

                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>public/pdf/vehiculo.php")'>PDF</button>
                                
                                <button type="button" class="btn btn-danger" onClick='window.location.assign("<?php echo constant('URL'); ?>public/excel/functions/vehiculo/createExcel.php")'>EXCEL</button>
                                
                                </div>
                                <table id="tabla" class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr class="text-center">
                                            
                                            <th  scope="col">Placa vehículo</th>
                                            <th  scope="col">Capacidad</th>
                                            <th  scope="col">Seguro </th>
                                            <th  scope="col">Tecnomecánica</th>
                                            <th  scope="col">Tipo vehiculo</th>
                                            <th  scope="col">GPS</th>
                                            <th  scope="col">Estado</th>
                                            <th  scope="col">Conductor</th>
                                            <th  scope="col">Fecha registro</th>
                                            <th  scope="col" colspan="2">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-data">
                                <?php
                                    include_once 'models/vehiculo.php';
                                    if(count($this->vehiculos)>0){
                                        foreach ($this->vehiculos as $row) {
                                            $vehiculo = new VehiculoDAO();
                                            $vehiculo = $row;
                                ?>

                                                                            
                                            <tr id="fila-<?php echo $vehiculo->placa; ?>">
                                                <td><?php echo $vehiculo->placa; ?></td>
                                                <td><?php echo $vehiculo->capacidad;?></td>
                                                <td><?php echo $vehiculo->seguro;?></td>
                                                <td><?php echo $vehiculo->tecnomecanica; ?></td>
                                                <td><?php echo $vehiculo->tipo_vehiculo;?></td> 
                                                <td><?php echo $vehiculo->gps;?></td>
                                                <td><?php echo $vehiculo->estado;?></td>
                                                <td><?php echo $vehiculo->identificacion;?></td>
                                                <td><?php echo $vehiculo->fecha_registro;?></td>

                                                <td><a href="<?php echo constant('URL') . 'vehiculo/leer/' . $vehiculo->placa; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td>
                                                <td><button class="bEliminar" data-controlador="vehiculo" data-accion="eliminar" data-id="<?php echo $vehiculo->placa; ?>"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</button></td>
                                            </tr>
                                <?php
                                        }
                                    }else{
                                ?>
                                    <tr><td colspan="10" class="text-center">NO HAY VEHICULOS REGISTRADOS</td></tr>
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