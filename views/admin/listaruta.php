<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Rutas</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de Rutas</h1>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">Id Ruta</th>
                    <th  scope="col">Destino</th>
                    <th  scope="col">Fecha Ruta</th>
                    <th  scope="col">Hora Salida</th>
                    <th  scope="col">Hora Llegada</th>
                    <th  scope="col">Descripcion</th>
                    <th  scope="col">Tipo de Ruta</th>
                    <th  scope="col">Precinto</th>
                    <th  scope="col">Identificacion</th>
                    <th  scope="col">Placa</th>
                    <th  scope="col">Id Centro</th>
                    <th  scope="col" colspan="2">Acciones</th>
                    
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
                        <td><?php echo $ruta->destino; ?></td>
                        <td><?php echo $ruta->fecha_ruta; ?>
                        <td><?php echo $ruta->hora_salida; ?>
                        <td><?php echo $ruta->hora_llegada; ?>
                        <td><?php echo $ruta->descripcion; ?>
                        <td><?php echo $ruta->tipo_ruta; ?>
                        <td><?php echo $ruta->precinto; ?>
                        <td><?php echo $ruta->identificacion; ?>
                        <td><?php echo $ruta->placa; ?>
                        <td><?php echo $ruta->id_centro; ?>
                        <td><a href="<?php echo constant('URL') . 'ruta/leer/' . $ruta->id_ruta; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="ruta" data-accion="eliminar" data-id="<?php echo $ruta->id_ruta; ?>">Eliminar</button></td>
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
        <button type="button" class="btn btn-primary" onClick='window.location.assign("<?php echo constant('URL'); ?>/ruta/crear")'>Crear Ruta</button>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>