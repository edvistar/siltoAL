<?php

    class Index extends Controller{
        function __construct(){
            parent::__construct();
            //$this->view->mensaje = "Hay un error al cargar el recurso";
            //echo "<p>Controlador Index</p>";
        }

        function render(){
            $this->view->render('index/index');
        }

        function login(){
            $this->view->render('index/login');
        }
    }

?>