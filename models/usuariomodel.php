<?php
include_once('models/usuario.php');

class UsuarioModel extends Model{
    public function __construct(){
        parent::__construct();
    }


    public function create($datos = null){
        $sentenceSQL="INSERT INTO usuario (identificacion, nombreUsuario, apellidoUsuario, emailUsuario, pass, telefonoUsuario, whatsappUsuario, cargo, estado, foto) VALUES (:identificacion, :nombreUsuario, :apellidoUsuario, :emailUsuario, :pass, :telefonoUsuario, :whatsappUsuario, :cargo, :estado, :foto)";
        $connexionDB=$this->db->connect();
        $query = $connexionDB->prepare($sentenceSQL);

        $foto= "public/img/contact/".$_FILES['foto']['name'];
        move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
            
        try{
            $query->execute([
    
                'identificacion'   => $datos['identificacion'],
                'nombreUsuario'    => $datos['nombreUsuario'],
                'apellidoUsuario'  => $datos['apellidoUsuario'],
                'emailUsuario'     => $datos['emailUsuario'],
                'pass'             => md5($datos['pass']),
                'telefonoUsuario'  => $datos['telefonoUsuario'],
                'whatsappUsuario'  => $datos['whatsappUsuario'],
                'cargo'            => $datos['cargo'],
                'estado'           => $datos['estado'],
                'foto'             => "public/img/contact/".$_FILES['foto']['name']
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
                $item->identificacion    = $row['identificacion'];
                $item->nombreUsuario     = $row['nombreUsuario'];
                $item->apellidoUsuario   = $row['apellidoUsuario'];
                $item->emailUsuario      = $row['emailUsuario'];
                $item->telefonoUsuario   = $row['telefonoUsuario'];
                $item->whatsappUsuario   = $row['whatsappUsuario'];
                $item->cargo             = $row['cargo'];
                $item->estado            = $row['estado'];
                $item->fecha_ingreso     = $row['fecha_ingreso'];
                $item->foto              = $row['foto'];
              
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
                $item->identificacion    = $row['identificacion'];
                $item->nombreUsuario     = $row['nombreUsuario'];
                $item->apellidoUsuario   = $row['apellidoUsuario'];
                $item->emailUsuario      = $row['emailUsuario'];
                $item->telefonoUsuario   = $row['telefonoUsuario'];
                $item->pass              = $row['pass'];
                $item->whatsappUsuario   = $row['whatsappUsuario'];
                $item->cargo             = $row['cargo'];
                $item->estado            = $row['estado'];
                $item->fecha_ingreso     = $row['fecha_ingreso'];
                $item->foto              = $row['foto'];
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
        $query = $this->db->connect()->prepare('UPDATE usuario SET nombreUsuario = :nombreUsuario, apellidoUsuario = :apellidoUsuario, emailUsuario = :emailUsuario, pass = :pass, telefonoUsuario = :telefonoUsuario, whatsappUsuario = :whatsappUsuario, cargo = :cargo, estado = :estado, foto = :foto WHERE identificacion = :identificacion');

        $foto = $_FILES['foto']['name'];
        $fotoriginal=$_POST['fotoriginal'];

        if (empty($foto)) {
            $foto = $fotoriginal;
        } else {
            $foto="public/img/contact/".$foto;
            move_uploaded_file($_FILES["foto"]["tmp_name"], $foto);
            unlink($fotoriginal);
        }      
        
        try{
            $query->execute([

                'identificacion'  => $item['identificacion'],
                'nombreUsuario'          => $item['nombreUsuario'],
                'apellidoUsuario'        => $item['apellidoUsuario'],
                'emailUsuario'    => $item['emailUsuario'],
                'pass'            => md5($item['pass']), 
                'telefonoUsuario' => $item['telefonoUsuario'],
                'whatsappUsuario' => $item['whatsappUsuario'],
                'cargo'           => $item['cargo'],
                'estado'          => $item['estado'],
                'foto'            => $foto,
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