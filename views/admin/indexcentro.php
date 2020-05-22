<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Centros</title>
</head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h1 class="center">Listado de Centros de Acopio</h1>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">ID Centro</th>
                    <th  scope="col">Nombre</th>
                    <th  scope="col">email</th>
                    <th  scope="col">Telefono</th>
                    <th  scope="col">Whatsapp</th>
                    <th  scope="col">Departamento</th>
                    <th  scope="col">Ciudad</th>
                    <th  scope="col">Encargado</th>
                    <th  scope="col">Lugar</th>
                    <th  scope="col" colspan="2">Acciones</th>
                    
                </tr>
            </thead>

            <tbody id="tbody-data">
            
        <?php
            include_once 'models/centro.php';
            if(count($this->centros)>0){
                foreach ($this->centros as $row) {
                    $centro = new CentroDAO();
                    $centro = $row;
        ?>
                    <tr id="fila-<?php echo $centro->id_centro; ?>">
                        <td><?php echo $centro->id_centro; ?></td>
                        <td><?php echo $centro->nombre; ?></td>
                        <td><?php echo $centro->email; ?>
                        <td><?php echo $centro->telefono; ?>
                        <td><?php echo $centro->whatsapp; ?>
                        <td><?php echo $centro->departamento; ?>
                        <td><?php echo $centro->ciudad; ?>
                        <td><?php echo $centro->encargado; ?>
                        <td><?php echo $centro->lugar; ?>
                        <td><a href="<?php echo constant('URL') . 'centro/leer/' . $centro->id_centro; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="centro" data-accion="eliminar" data-id="<?php echo $centro->id_centro; ?>">Eliminar</button></td> 
                    </tr>
        <?php   
                } 
            }else{
        ?>
            <tr><td colspan="6" class="text-center">NO HAY CENTROS PROGRAMAS DISPONIBLES</td></tr>
        <?php    
            }
        ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" onClick='window.location.assign("<?php echo constant('URL'); ?>/centro/crear")'>Crear Centro</button>
    </div>

    <?php require 'views/footer.php'; ?>
    <script src="<?php echo constant('URL'); ?>/public/js/main.js"></script>
</body>
</html>