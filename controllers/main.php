<?php

    class Main extends Controller{
        function __construct(){
            parent::__construct();
            //$this->view->mensaje = "Hay un error al cargar el recurso";
            //echo "<p>Controlador Index</p>";
        }

        function render(){
            $this->view->render('main/index');
        }

        function coordinadora(){
            $this->view->render('main/coord');
        }

        function bodeguero(){
            $this->view->render('main/bog');
        }
    }

?>