<?php
    class Producto extends Controller{
        //funcion de constructor de producto
        function __construct(){
            parent::__construct();
            $this->view->mensaje="";
        }
        //funcion de renderisa la vista por defecto
        function render(){
            $productos = $this->view->datos = $this->model->read();
            $this->view->productos = $productos;
            $this->view->render('admin/list');
        }
        //funcion de leer datos de la base de datos con ayuda de  readbyid
        function leer($param = null){
            $id_producto = $param[0];
            $productos = $this->model->readById($id_producto);

            $this->view->admin = $productos;
            $this->view->render('admin/list');
        }
        //funcion de crear registros en base de datos
        function crear(){
            if(isset($_POST["id_producto"])){
                if($this->model->create($_POST)){
                    $this->view->mensaje = "Producto creado correctamente";
                    $productos = $this->view->datos = $this->model->read();
                    $this->view->producto = $productos;
                    $this->view->render('admin/list');
                }else{
                    $this->view->mensaje = "Producto ya existe";
                    $this->view->render('admin/list');
                }
            }else{
                $this->view->render('admin/registro-producto');
            }
        }
        //funcion de editar los registros
        function editar($param = null){
            if($this->model->update($_POST)){
                $producto = new ProductoDAO();
                $producto->id_producto= $id;
                $producto->nombre = $_POST['nombre'];
                $producto->peso = $_POST['peso'];
                $producto->costo = $_POST['costo'];
                $this->view->admin = $producto;
                $this->view->mensaje = "Producto actualizado correctamente";
            }else{
                $this->view->mensaje = "No se pudo actualizar al producto";
            }
            $productos = $this->view->datos = $this->model->read();
            $this->view->admin = $productos;
            $this->view->render('admin/list');
        }
        //Funcion de eliminar registros de la base de datos.
        function eliminar($param = null){
            $id_producto = $param[0];
            if($this->model->delete($id_producto)){
                $mensaje ="Producto eliminado correctamente";
            }else{
                $mensaje = "No se pudo eliminar el producto";
            }
            echo $mensaje;
        }
    }
?>