<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title><?php echo constant('NOMBRESITIO');?></title>
</head>
<body>
<DIV class="ROW">
<table id="tabla" class="table table-hover">
    <thead class="thead-dark">
        <tr>
            <th  scope="col">Id</th>
            <th  scope="col">Nombre</th>
            <th  scope="col">Costo</th>
            <th  scope="col" colspan="2" class="text-center">Acciones</th>
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
                <td><?php echo $producto->costo; ?>
                <td><a href="<?php echo constant('URL') . 'producto/leer/' . $producto->id_producto; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a></td>
                <td><button class="bEliminar" data-controlador="producto" data-accion="eliminar" data-id="<?php echo $producto->id_producto; ?>"><i class="fa fa-trash-o" aria-hidden="true"> Eliminar</button></td>
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
</table><br></DIV>

<!-- JS, Popper.js, and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>