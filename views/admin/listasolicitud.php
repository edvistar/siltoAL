<!DOCTYPE html>
<html lang="es">
<head>
    <title><?php  echo constant('NOMBRESITIO'); ?></title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado Solicitudes</h1>

        <table id="tabla" class="table table-hover">
            <thead class="dark">
                <tr>
                    <th  scope="col">ID</th>
                    <th  scope="col">Solicitud</th>
                    <th  scope="col">Descripciòn</th>
                    <th  scope="col">Cantidad kilos</th>
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
                        <td><?php echo $solicitud->solicitud; ?></td>
                        <td><?php echo $solicitud->descripcion; ?>
                        <td><?php echo $solicitud->cantidad_kilos; ?>
                        <td><a href="<?php echo constant('URL') . 'solicitud/leer/' . $solicitud->id_solicitud; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="solicitud" data-accion="eliminar" data-id="<?php echo $solicitud->id_solicitud; ?>">Eliminar</button></td>
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
        <button type="button" class="btn btn-info" onClick='window.location.assign("<?php echo constant('URL'); ?>solicitud/crear")'>Crear Centro</button><br>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>public/js/main.js"></script>
</body>
</html>