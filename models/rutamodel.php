<?php

class RutaModel extends Model{

    public function __construct(){
        parent::__construct();   
    }

    public function insert($datos){

        $query = $this->db->connect()->prepare('INSERT INTO rutas (id_ruta, destino, fecha_ruta, hora_salida, hora_llegada, descripcion, tipo_ruta, precinto, identificacion, placa, id_centro) VALUES (:id_ruta, :destino, :fecha_ruta, :hora_salida, :hora_llegada, :descripcion, :tipo_ruta, :precinto, :identificacion, :placa, :id_centro)');
        $query->execute(['id_ruta'=> $datos['id_ruta'],'destino'=> $datos['destino'],'fecha_ruta'=> $datos['fecha_ruta'],'hora_salida'=> $datos['hora_salida'],'hora_llegada'=> $datos['hora_llegada'],'descripcion'=> $datos['descripcion'],'tipo_ruta'=> $datos['tipo_ruta'],'precinto'=> $datos['precinto'], 'identificacion'=> $datos['identificacion'], 'placa'=> $datos['placa'], 'id_centro'=> $datos['id_centro']]);

        echo "Insertar vistas";
        
    }

}

?>