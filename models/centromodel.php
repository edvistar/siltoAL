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
                $sentenceSQL="INSERT INTO centro( id_centro, nombre, email, telefono, whatsapp, departamento, ciudad, nombreUsuario, lugar) VALUES( :id_centro, :nombre, :email, :telefono, :whatsapp, :departamento, :ciudad, :nombreUsuario, :lugar)";
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
                                    'nombreUsuario'  => $datos['nombreUsuario'],
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
                $query = $this->db->connect()->query('SELECT
                id_centro, nombre, email, telefono, whatsapp, depa.departamento, ciud.ciudad, lugar, 
                usu.nombreUsuario FROM centro as centro
                INNER JOIN departamentos as depa on depa.idDepa=centro.departamento
                INNER JOIN ciudades as ciud on ciud.idCiud=centro.ciudad
                INNER JOIN usuario as usu on usu.identificacion=centro.nombreUsuario
                
                
                ');

                while($row = $query->fetch()){
                    $item = new CentroDAO();
                    $item->id_centro        = $row['id_centro'];
                    $item->nombre           = $row['nombre'];
                    $item->email            = $row['email'];
                    $item->telefono         = $row['telefono'];
                    $item->whatsapp         = $row['whatsapp'];
                    $item->departamento     = $row['departamento'];
                    $item->ciudad           = $row['ciudad'];
                    $item->nombreUsuario   = $row['nombreUsuario'];
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
                $query = $this->db->connect()->prepare('SELECT
                id_centro, nombre, email, telefono, whatsapp, depa.departamento, ciud.ciudad, lugar, 
                usu.nombreUsuario FROM centro as centro
                INNER JOIN departamentos as depa on depa.idDepa=centro.departamento
                INNER JOIN ciudades as ciud on ciud.idCiud=centro.ciudad
                INNER JOIN usuario as usu on usu.identificacion=centro.nombreUsuario

                WHERE id_centro = :id');

                $query->execute(['id' => $id]);

                while($row = $query->fetch()){
                    $item->id_centro     = $row['id_centro'];
                    $item->nombre        = $row['nombre'];
                    $item->email         = $row['email'];
                    $item->telefono      = $row['telefono'];
                    $item->whatsapp      = $row['whatsapp'];
                    $item->departamento  = $row['departamento'];
                    $item->ciudad        = $row['ciudad'];
                    $item->nombreUsuario     = $row['nombreUsuario'];
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
            $query = $this->db->connect()->prepare('UPDATE centro SET nombre = :nombre, email = :email, telefono = :telefono, whatsapp = :whatsapp, departamento = :departamento, ciudad = :ciudad, nombreUsuario = :nombreUsuario, lugar = :lugar WHERE id_centro = :id_centro');
            try{
                $query->execute([
                    'id_centro'    => $item['id_centro'],
                    'nombre'       => $item['nombre'],
                    'email'        => $item['email'],
                    'telefono'     => $item['telefono'],
                    'whatsapp'     => $item['whatsapp'],
                    'departamento' => $item['departamento'],
                    'ciudad'       => $item['ciudad'],
                    'nombreUsuario'    => $item['nombreUsuario'],
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

        public function cargarEncargado(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT identificacion, nombreUsuario, apellidoUsuario, cargo FROM usuario');
                include_once('models/usuario.php');
                while ($row = $query->fetch()) {
                    $item = new UsuarioDAO();
                    $item->identificacion = $row['identificacion'];
                    $item->nombreUsuario = $row['nombreUsuario'];
                    $item->apellidoUsuario = $row['apellidoUsuario'];
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