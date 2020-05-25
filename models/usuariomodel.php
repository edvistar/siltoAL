<?php
include_once('models/usuario.php');

class UsuarioModel extends Model{
    public function __construct(){
        parent::__construct();
    }


    public function create($datos = null){
        $sentenceSQL="INSERT INTO usuario (identificacion, nombre, apellido, email, pass, telefono, whatsapp, cargo, estado) VALUES (:identificacion, :nombre, :apellido, :email, :pass, :telefono, :whatsapp, :cargo, :estado)";
        $connexionDB=$this->db->connect();
        $query = $connexionDB->prepare($sentenceSQL);
            
        try{
            $query->execute([
        
                #'fecha_crea' => $datos['fecha_crea']
                'identificacion'=> $datos['identificacion'],
                'nombre'=> $datos['nombre'],
                'apellido'=> $datos['apellido'],
                'email'=> $datos['email'],
                'pass'=> $datos['pass'],
                'telefono'=> $datos['telefono'],
                'whatsapp'=> $datos['whatsapp'],
                'cargo'=> $datos['cargo'],
                'estado'=> $datos['estado']
            ]);
            return true;

        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return false;
        }
    }     


    public function read(){
        $items = [];
        try{
            $query = $this->db->connect()->query('SELECT * FROM usuario');
            
            while($row = $query->fetch()){
                $item = new UsuarioDAO();
                $item->identificacion = $row['identificacion'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->email = $row['email'];
                $item->telefono = $row['telefono'];
                // $item->pass = $row['pass'];
                $item->whatsapp = $row['whatsapp'];
                $item->cargo = $row['cargo'];
                $item->estado = $row['estado'];
                $item->fecha_ingreso  = $row['fecha_ingreso'];
                // $item-> = $row[''];
              
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
        $item = new UsuarioDAO();
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM usuario WHERE identificacion = :id');

            $query->execute(['id' => $id]);
            
            while($row = $query->fetch()){
                $item->identificacion = $row['identificacion'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
                $item->email = $row['email'];
                $item->telefono = $row['telefono'];
                $item->pass = $row['pass'];
                $item->whatsapp = $row['whatsapp'];
                $item->cargo = $row['cargo'];
                $item->estado = $row['estado'];
                $item->fecha_ingreso  = $row['fecha_ingreso'];
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
        $query = $this->db->connect()->prepare('UPDATE usuario SET nombre = :nombre, apellido = :apellido, email = :email, pass = :pass, telefono = :telefono, whatsapp = :whatsapp, cargo = :cargo, estado = :estado WHERE identificacion = :identificacion');
        try{
            $query->execute([

                'identificacion'=> $item['identificacion'],
                'nombre'=> $item['nombre'],
                'apellido'=> $item['apellido'],
                'email'=> $item['email'],
                'pass'=> $item['pass'],
                'telefono'=> $item['telefono'],
                'whatsapp'=> $item['whatsapp'],
                'cargo'=> $item['cargo'],
                'estado'=> $item['estado'],
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
        $query = $this->db->connect()->prepare('DELETE FROM usuario WHERE identificacion = :identificador');
        try{
            $query->execute([
                'identificador' => $id
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