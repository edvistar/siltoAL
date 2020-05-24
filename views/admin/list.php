<!DOCTYPE html>
<html lang="es">
<head>
<title><?php  echo constant('NOMBRESITIO'); ?></title></head>
<body>

    <?php require 'views/header.php'; ?>

    <div id="main" class="container">
        <div><?php echo $this->mensaje; ?></div>
        <h2>Listado de Productos </h2>
        <p>Todos los campos son obligatorios</p>

        <table id="tabla" class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th  scope="col">Id</th>
                    <th  scope="col">Nombre</th>
                    <th  scope="col">Peso</th>
                    <th  scope="col">Costo</th>
                    <th  scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody id="tbody-data">
        <?php
            include_once 'models/producto.php';
            if(count($this->productos)>0){
                foreach ($this->productos as $row) {
                    $producto = new ProductoDAO();
                    $producto = $row;
        ?>
                    <tr id="fila-<?php echo $producto->id_producto; ?>">
                        <td><?php echo $producto->id_producto; ?>
                        <td><?php echo $producto->nombre; ?>
                        <td><?php echo $producto->peso; ?>
                        <td><?php echo $producto->costo; ?>
                        <td><a href="<?php echo constant('URL') . 'producto/leer/' . $producto->id_producto; ?>">Actualizar</a></td>
                        <td><button class="bEliminar" data-controlador="producto" data-accion="eliminar" data-id="<?php echo $producto->id_producto; ?>">Eliminar</button></td>
                    </tr>
        <?php
                }
            }else{
        ?>
            <tr><td colspan="6" class="text-center">NO HAY PRODUCTOS DISPONIBLES</td></tr>
        <?php
            }
        ?>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" onClick='window.location.assign("<?php echo constant('URL'); ?>producto/crear")'>Crear Producto</button>
    </div>

    <?php require 'views/footer.php'; ?>
</body>
</html>