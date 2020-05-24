<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title><?php echo constant ('NOMBRESITIO');?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de vehiculos</h1>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">placa del vehiculo</th>
                    <th  scope="col">capacidad</th>
                    <th  scope="col">seguro todo riesgo</th>
                    <th  scope="col">tecnomecanica</th>
                    <th  scope="col">tipo de vehiculo</th>
                    <th  scope="col">conductor</th>
                    <th  scope="col">casto de flete</th>
                    <th  scope="col"> gps</th>
                    <th  scope="col">estado</th>
                    <th  scope="col">fecha de registro</th>
                    <th  scope="col" colspan="2">Acciones</th>           
                </tr>
            </thead>

            <tbody id="tbody-data">
            
        <?php
            include_once 'models/vehiculo.php';
            if(count($this->vehiculos)>0){
                foreach ($this->vehiculos as $row) {
                    $vehiculo= new vehiculoDAO();
                    $vehiculo = $row;
        ?>
                    <tr id="fila-<?php echo $vehiculo->placa; ?>">
                        <td><?php echo $vehiculo->placa; ?></td>
                        <td><?php echo $vehiculo->capacidad;?></td>
                        <td><?php echo $vehiculo->seguro;?></td>
                        <td><?php echo $vehiculo->tecnomecanica; ?></td>
                        <td><?php echo $vehiculo->tipo_vehiculo;?></td>
                        <td><?php echo $vehiculo->conductor;?></td>
                        <td><?php echo $vehiculo->costo_flete;?></td>
                        <td><?php echo $vehiculo->gps;?></td>
                        <td><?php echo $vehiculo->estado;?></td>
                        <td><?php echo $vehiculo->fecha_registro;?></td>
                        
                        <td><a href="<?php echo constant('URL') . 'vehiculo/leer/' . $vehiculo->placa; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="vehiculo" data-accion="eliminar" data-id="<?php echo $vehiculo->placa; ?>">Eliminar</button></td> 
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
        <button type="button" class="btn btn-primary" onClick='window.location.assign("<?php echo constant('URL'); ?>/vehiculo/crear")'>Crear vehiculo</button>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>