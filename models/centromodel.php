<?php
include_once('models/centro.php');

class CentroModel extends Model{
    function __construct(){
        parent::__construct();
    }
    public function create($datos = null){
        // insertar
        //if(!isset($datos)){
            $sentenceSQL="INSERT INTO centro( nombre, email, telefono, whatsapp,departamento, ciudad, encargado, lugar) VALUES( :nombre, :email, :telefono, :whatsapp, :departamento, :ciudad, :encargado, :lugar)";
            $connexionDB=$this->db->connect();
            $query = $connexionDB->prepare($sentenceSQL);
            
            try{
                $query->execute([
                                'nombre'       => $datos['nombre'],
                                'email'        => $datos['email'],
                                'telefono'     => $datos['telefono'],
                                'whatsapp'     => $datos['whatsapp'],
                                'departamento' => $datos['departamento'],
                                'ciudad'       => $datos['ciudad'],
                                'encargado'    => $datos['encargado'],
                                'lugar'        => $datos['lugar']
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
            $query = $this->db->connect()->query('SELECT * FROM centro');
            
            while($row = $query->fetch()){
                $item = new CentroDAO();
                $item->id_centro     = $row['id_centro'];
                $item->nombre        = $row['nombre'];
                $item->email         = $row['email'];
                $item->telefono      = $row['telefono'];
                $item->whatsapp      = $row['whatsapp'];
                $item->departamento  = $row['departamento'];
                $item->ciudad        = $row['ciudad'];
                $item->encargado     = $row['encargado'];
                $item->lugar         = $row['lugar'];
              
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
        $item = new CentroDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM centro WHERE id_centro = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->id_centro     = $row['id_centro'];
                $item->nombre        = $row['nombre'];
                $item->email         = $row['email'];
                $item->telefono      = $row['telefono'];
                $item->whatsapp      = $row['whatsapp'];
                $item->departamento  = $row['departamento'];
                $item->ciudad        = $row['ciudad'];
                $item->encargado     = $row['encargado'];
                $item->lugar         = $row['lugar'];
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
        $query = $this->db->connect()->prepare('UPDATE centro SET nombre = :nombre, email = :email, telefono = :telefono, whatsapp = :whatsapp, departamento = :departamento, ciudad = :ciudad, encargado = :encargado, lugar = :lugar WHERE id_centro = :id_centro');
        try{
            $query->execute([
                'id_centro'    => $item['id_centro'],
                'nombre'       => $item['nombre'],
                'email'        => $item['email'],
                'telefono'     => $item['telefono'],
                'whatsapp'     => $item['whatsapp'],
                'departamento' => $item['departamento'],
                'ciudad'       => $item['ciudad'],
                'encargado'    => $item['encargado'],
                'lugar'        => $item['lugar']
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
        $query = $this->db->connect()->prepare('DELETE FROM centro WHERE id_centro = :id');
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