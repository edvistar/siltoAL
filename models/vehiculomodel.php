<?php
include_once('models/vehiculo.php');
class vehiculoModel extends Model{
    function __construct(){
        parent::__construct();
    }

    public function create($datos = null){
        // insertar
        //if(!isset($datos)){
            $sentenceSQL="INSERT INTO vehiculo (placa, capacidad, seguro, tecnomecanica, tipo_vehiculo, conductor, costo_flete, gps, estado) VALUES( :placa, :capacidad, :seguro, :tecnomecanica, :tipo_vehiculo, :conductor, :costo_flete, :gps, :estado)";
            $connexionDB=$this->db->connect();
            $query = $connexionDB->prepare($sentenceSQL);
           
            try{
                $query->execute([
                                'placa' => $datos['placa'],
                                'capacidad' => $datos['capacidad'],
                                'seguro' => $datos['seguro'],
                                'tecnomecanica' => $datos['tecnomecanica'],
                                'tipo_vehiculo' => $datos['tipo_vehiculo'],
                                'conductor' => $datos['conductor'],
                                'costo_flete' => $datos['costo_flete'],
                                'gps' => $datos['gps'],
                                'estado'=>$datos['estado']
                                
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
            $query = $this->db->connect()->query('SELECT * FROM vehiculo');
            
            while($row = $query->fetch()){
                $item = new vehiculoDAO();
                //aguanta una calvacera bien zampada!!!//por que  donde esta el error
                $item->placa           = $row['placa'];
                $item->capacidad       = $row['capacidad'];
                $item->seguro          = $row['seguro'];
                $item->tecnomecanica   = $row['tecnomecanica'];
                $item->tipo_vehiculo   = $row['tipo_vehiculo'];
                $item->conductor       = $row['conductor'];
                $item->costo_flete     = $row['costo_flete'];
                $item->gps             = $row['gps'];
                $item->estado          = $row['estado'];
                $item->fecha_registro  = $row['fecha_registro'];
              
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
        $item = new vehiculoDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM vehiculo WHERE placa = :id'); //campo placa sera igual a uvardiale id

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->placa         = $row['placa']; 
                $item->capacidad     = $row['capacidad'];
                $item->seguro        = $row['seguro']; 
                $item->tecnomecanica = $row['tecnomecanica'];
                $item->tipo_vehiculo = $row['tipo_vehiculo'];
                $item->conductor     = $row['conductor'];
                $item->gps           = $row['gps'];
                $item->estado        = $row['estado'];
                $item->fecha_registro  = $row['fecha_registro'];
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
        $query = $this->db->connect()->prepare('UPDATE vehiculo SET placa = :placa, capacidad = :capacidad, seguro = :seguro, tecnomecanica = :tecnomecanica, tipo_vehiculo = :tipo_vehiculo, conductor = :conductor, costo_flete = :costo_flete, gps = :gps, fecha_registro = :fecha_registro WHERE placa = :placa');
        try{
            $query->execute([
                'placa '        => $item['placa'],
                'capacidad'     => $item['capacidad'],
                'seguro'        => $item['seguro'],
                'tecnomecanica' => $item['tecnomecanica'],
                'tipo_vehiculo' => $item['tipo_vehiculo'],
                'conductor'     => $item['conductor'],
                'costo_flete'   => $item['costo_flete'],
                'gps'           => $item['gps'],
                'estado'        =>$item['estado']
                
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
        $query = $this->db->connect()->prepare('DELETE FROM vehiculo WHERE placa = :id');
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


?>