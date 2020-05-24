<?php
include_once('models/ruta.php');

class RutaModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function create($datos = null){
        // insertar
        //if(!isset($datos)){
            $sentenceSQL="INSERT INTO rutas (id_ruta, destino, fecha_ruta, hora_salida, hora_llegada, descripcion, tipo_ruta, precinto, identificacion, placa, id_centro) VALUES( :id_ruta, :destino, :fecha_ruta, :hora_salida, :hora_llegada, :descripcion, :tipo_ruta, :precinto, :identificacion, :placa, :id_centro)";
            $connexionDB=$this->db->connect();
            $query = $connexionDB->prepare($sentenceSQL);
            
            try{
                $query->execute([
                                 
                                'id_ruta'        => $datos['id_ruta'],
                                'destino'        => $datos['destino'],
                                'fecha_ruta'     => $datos['fecha_ruta'],
                                'hora_salida'    => $datos['hora_salida'],
                                'hora_llegada'   => $datos['hora_llegada'],
                                'descripcion'    => $datos['descripcion'],
                                'tipo_ruta'      => $datos['tipo_ruta'],
                                'precinto'       => $datos['precinto'],
                                'identificacion' => $datos['identificacion'],
                                'placa'          => $datos['placa'],
                                'id_centro'      => $datos['id_centro']
                ]);
                return true;
            }catch(PDOException $e){
            if(constant("DEBUG")){
                    echo $e->getMessage();
            }
                
                return false;
            }
        // }else{
        //     return false;
        // }
        
        
    }

    public function read(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM rutas');
            
            while($row = $query->fetch()){
                $item = new RutaDAO();
                
                $item->id_ruta        = $row['id_ruta'];
                $item->destino        = $row['destino'];
                $item->fecha_ruta     = $row['fecha_ruta'];
                $item->hora_salida    = $row['hora_salida'];
                $item->hora_llegada   = $row['hora_llegada'];
                $item->descripcion    = $row['descripcion'];
                $item->tipo_ruta      = $row['tipo_ruta'];
                $item->precinto       = $row['precinto'];
                $item->identificacion = $row['identificacion'];
                $item->placa          = $row['placa'];
                $item->id_centro      = $row['id_centro'];
                
              
                array_push($items, $item);
            }
            return $items;
        }catch(PDOException $e){
           if(constant("DEBUG")){
               echo $e->getMessage();
           }
            return [];
        }
    }
    public function readById($id){
        $item = new RutaDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM rutas WHERE id_ruta = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
            
                $item->id_ruta        = $row['id_ruta'];
                $item->destino        = $row['destino'];
                $item->fecha_ruta     = $row['fecha_ruta'];
                $item->hora_salida    = $row['hora_salida'];
                $item->hora_llegada   = $row['hora_llegada'];
                $item->descripcion    = $row['descripcion'];
                $item->tipo_ruta      = $row['tipo_ruta'];
                $item->precinto       = $row['precinto'];
                $item->identificacion = $row['identificacion'];
                $item->placa          = $row['placa'];
                $item->id_centro      = $row['id_centro'];
            }
            return $item;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return null;
        }
    }
    public function update($item){
        $query = $this->db->connect()->prepare('UPDATE rutas SET destino = :destino, fecha_ruta = :fecha_ruta, hora_salida = :hora_salida, hora_llegada = :hora_llegada, descripcion = :descripcion, tipo_ruta = :tipo_ruta, precinto = :precinto, identificacion = :identificacion, placa = :placa, id_centro = :id_centro WHERE id_ruta = :id_ruta');
        try{
            $query->execute([
                    'id_ruta'        => $item['id_ruta'],
                    'destino'        => $item['destino'],
                    'fecha_ruta'     => $item['fecha_ruta'],
                    'hora_salida'    => $item['hora_salida'],
                    'hora_llegada'   => $item['hora_llegada'],
                    'descripcion'    => $item['descripcion'],
                    'tipo_ruta'      => $item['tipo_ruta'],
                    'precinto'       => $item['precinto'],
                    'identificacion' => $item['identificacion'],
                    'placa'          => $item['placa'],
                    'id_centro'      => $item['id_centro']
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }
    public function delete($id){
        $query = $this->db->connect()->prepare('DELETE FROM rutas WHERE id_ruta = :id');
        try{
            $query->execute([
                'id' => $id
            ]);
            return true;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }
}