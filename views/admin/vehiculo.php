<?php
    class Vehiculo extends Controller{
        function __construct(){
            parent::__construct();
            $this->view->mensaje="";
        }

        function render(){
            $vehiculo = $this->view->datos = $this->model->read();
        $this->view->vehiculos = $vehiculo;
            $this->view->render('admin/listavehiculo');
        }
        function crear(){
            if(isset($_POST["placa"])){
                if($this->model->create($_POST)){
                    $this->view->mensaje = "registro correctamente el vehiculo";
                    $vehiculo = $this->view->datos = $this->model->read();
                    $this->view->vehiculo = $vehiculo;
                    $this->view->render('admin/listavehiculo');
                }else{
                    
                    $this->view->mensaje = "El vehiculo  ya existe 1";
                    $this->view->render('admin/crearvehiculo');
                }
            }else{
                $this->view->render('admin/crearvehiculo');
            }
        }
        
        function leer($param = null){
            $placa = $param[0];
            $vehiculo = $this->model->readById($placa);
    
            // session_start();
            // $_SESSION["id_Vervehiculo"] = $vehiculo->placa;
    
            $this->view->vehiculo = $vehiculo;
            $this->view->render('admin/editarvehiculo');
        }

        function editar($param = null){
            // session_start();
            // $placa = $_SESSION["id_Vervehiculo"];
            // unset($_SESSION['id_Vervehiculo']);  
    
            if($this->model->update($_POST)){
                $vehiculo = new vehiculoDAO();
                $vehiculo->placa= $id;
                $vehiculo->placa = $_POST['placa'];
                $vehiculo->capacidad = $_POST['capacidad'];
                $vehiculo->seguro = $_POST['seguro'];
                $vehiculo->tecnomecanica = $_POST['tecnomecanica'];
                $vehiculo->tipo_vehiculo = $_POST['tipo_vehiculo'];
                $vehiculo->conductor = $_POST['conductor'];
                $vehiculo->costo_flete = $costo_flete['costo_flete'];
                $vehiculo->gps = $_POST['gps'];
                
                
    
    
                $this->view->vehiculo = $vehiculo;
                $this->view->mensaje = "vehiculo actualizado correctamente";
            }else{
                $this->view->mensaje = "No se pudo actualizar el registro de el vehiculo";
            }
            $vehiculo = $this->view->datos = $this->model->read();
            $this->view->vehiculo = $vehiculo;
            $this->view->render('admin/listavehiculo');
        }
        function eliminar($param = null){
            $id = $param[0];
    
            if($this->model->delete($placa)){
                $mensaje ="vehiculo eliminado correctamente";
                //$this->view->mensaje = "Alumno eliminado correctamente";
            }else{
                $mensaje = "No se pudo eliminar el vehiculo";
                //$this->view->mensaje = "No se pudo eliminar al alumno";
            }
    
            //$this->render();
    
            echo $mensaje;
        }
    }
?>