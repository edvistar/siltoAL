<?php
    include_once('models/centro.php');
    include_once('models/usuario.php');

    class CentroModel extends Model{
        function __construct(){
            parent::__construct();
        }
        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO centro( id_centro, nombre, email, telefono, whatsapp, departamento, ciudad, identificacion, lugar) VALUES( :id_centro, :nombre, :email, :telefono, :whatsapp, :departamento, :ciudad, :identificacion, :lugar)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);

                try{
                    $query->execute([
                                    'id_centro'       =>$datos['id_centro'], 
                                    'nombre'          => $datos['nombre'],
                                    'email'           => $datos['email'],
                                    'telefono'        => $datos['telefono'],
                                    'whatsapp'        => $datos['whatsapp'],
                                    'departamento'    => $datos['departamento'],
                                    'ciudad'          => $datos['ciudad'],
                                    'identificacion'  => $datos['identificacion'],
                                    'lugar'           => $datos['lugar']
                                   
                                    
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
                $query = $this->db->connect()->query('SELECT cent.id_centro, cent.nombre as nombrecentro, cent.email, cent.telefono, cent.whatsapp, depa.departamento, ciud.ciudad, usu.nombre as nombreusuario, cent.lugar 
                FROM centro as cent
                INNER JOIN departamentos as depa on depa.idDepa=cent.departamento
                INNER JOIN ciudades as ciud on ciud.idCiud=cent.ciudad
                INNER JOIN usuario as usu on usu.identificacion=cent.identificacion
                  
                ');

                while($row = $query->fetch()){
                    $item = new CentroDAO();
                    $item->id_centro        = $row['id_centro'];
                    $item->nombre           = $row['nombrecentro'];
                    $item->email            = $row['email'];
                    $item->telefono         = $row['telefono'];
                    $item->whatsapp         = $row['whatsapp'];
                    $item->departamento     = $row['departamento'];
                    $item->ciudad           = $row['ciudad'];
                    $item->identificacion   = $row['nombreusuario'];
                    $item->lugar            = $row['lugar'];

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
<<<<<<< HEAD
                $query = $this->db->connect()->prepare('SELECT * FROM centro WHERE id_centro = :id');
=======
                $query = $this->db->connect()->prepare('SELECT cent.id_centro, cent.nombre as nombrecentro, cent.email, cent.telefono, cent.whatsapp, depa.departamento, ciud.ciudad, usu.nombre as nombreusuario, cent.lugar 
                FROM centro as cent
                INNER JOIN departamentos as depa on depa.idDepa=cent.departamento
                INNER JOIN ciudades as ciud on ciud.idCiud=cent.ciudad
                INNER JOIN usuario as usu on usu.identificacion=cent.identificacion
                
                WHERE id_centro = :id');
>>>>>>> wapv

                $query->execute(['id' => $id]);

                while($row = $query->fetch()){
                    $item->id_centro       = $row['id_centro'];
<<<<<<< HEAD
                    $item->nombre          = $row['nombre'];
=======
                    $item->nombre          = $row['nombrecentro'];
>>>>>>> wapv
                    $item->email           = $row['email'];
                    $item->telefono        = $row['telefono'];
                    $item->whatsapp        = $row['whatsapp'];
                    $item->departamento    = $row['departamento'];
                    $item->ciudad          = $row['ciudad'];
<<<<<<< HEAD
                    $item->identificacion  = $row['identificacion'];
=======
                    $item->identificacion  = $row['nombreusuario'];
>>>>>>> wapv
                    $item->lugar           = $row['lugar'];
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
<<<<<<< HEAD
            $query = $this->db->connect()->prepare('UPDATE centro SET nombre = :nombre, email = :email, telefono = :telefono, whatsapp = :whatsapp, departamento = :departamento, ciudad = :ciudad, identificacion = :identificacion, lugar = :lugar WHERE id_centro = :id_centro');
            try{
                $query->execute([
                    'id_centro'    => $item['id_centro'],
                    'nombre'       => $item['nombre'],
                    'email'        => $item['email'],
                    'telefono'     => $item['telefono'],
                    'whatsapp'     => $item['whatsapp'],
                    'departamento' => $item['departamento'],
                    'ciudad'       => $item['ciudad'],
                    'identificacion'    => $item['identificacion'],
                    'lugar'        => $item['lugar']
=======
            $query = $this->db->connect()->prepare('UPDATE centro SET  email = :email, telefono = :telefono, whatsapp = :whatsapp, identificacion = :identificacion, lugar = :lugar WHERE id_centro = :id_centro');
            try{
                $query->execute([
                    'id_centro'      => $item['id_centro'],
                    //'nombre'       => $item['nombre'],
                    'email'          => $item['email'],
                    'telefono'       => $item['telefono'],
                    'whatsapp'       => $item['whatsapp'],
                    //'departamento'   => $item['departamento'],
                    //'ciudad'         => $item['ciudad'],
                    'identificacion' => $item['identificacion'],
                    'lugar'          => $item['lugar']
>>>>>>> wapv
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

        public function cargarEncargado(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT identificacion, nombre, apellido, cargo FROM usuario');
                include_once('models/usuario.php');
                while ($row = $query->fetch()) {
                    $item = new UsuarioDAO();
                    $item->identificacion = $row['identificacion'];
                    $item->nombre = $row['nombre'];
                    $item->apellido = $row['apellido'];
                    $item->cargo = $row['cargo'];
                   
                    array_push($items, $item);
                }
                return $items;
            } catch (PDOException $e) {
                if (constant("DEBUG")) {
                    echo $e->getMessage();
                }
                return [];
            }
        }
        
    }


?>