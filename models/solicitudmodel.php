<?php
    include_once('models/solicitud.php');

    class SolicitudModel extends Model{
        function __construct(){
            parent::__construct();
        }
        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO solicitud (solicitud, descripcion, id_centro, identificacion) VALUES( :solicitud, :descripcion, :id_centro, :identificacion)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);
                
                try{
                    $query->execute([
                                    //'id_solicitud'    =>$datos['id_solicitud'],
                                    'solicitud'       => date('Y-m-d H:i:s'),
                                    'descripcion'     => $datos['descripcion'],
                                    'id_centro'       => $datos['id_centro'],
                                    'identificacion'  => $datos['identificacion']
                                    


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
        public function cargarCentro(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT id_centro, nombre FROM centro');
                include_once('models/centro.php');
                while ($row = $query->fetch()) {
                    $item = new CentroDAO();
                    $item->id_centro = $row['id_centro'];
                    $item->nombre = $row['nombre'];
                    
                   
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
        public function read(){
            $items = [];
            try{
                $query = $this->db->connect()->query('SELECT sol.id_solicitud, sol.solicitud, sol.descripcion, 
                cent.nombre as nombreCentro, usu.nombre as nombreUsuario
                FROM solicitud as sol
                INNER JOIN centro as cent on cent.id_centro=cent.id_centro
                INNER JOIN usuario as usu on usu.identificacion=cent.identificacion
                ');

                while($row = $query->fetch()){
                    $item = new SolicitudDAO();

                    $item->id_solicitud     = $row['id_solicitud'];
                    $item->solicitud        = $row['solicitud'];
                    $item->descripcion      = $row['descripcion'];
                    $item->id_centro        = $row['nombreCentro'];
                    $item->identificacion   = $row['nombreUsuario'];

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
            $item = new SolicitudDAO();
            try{
                $query = $this->db->connect()->prepare('SELECT * FROM solicitud WHERE id_solicitud = :id');

                $query->execute(['id' => $id]);

                while($row = $query->fetch()){
                    $item->id_solicitud     = $row['id_solicitud'];
                    $item->solicitud        = $row['solicitud'];
                    $item->descripcion      = $row['descripcion'];
                    $item->id_centro   = $row['id_centro'];
                    $item->identificacion   = $row['identificacion'];
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
            $query = $this->db->connect()->prepare('UPDATE solicitud SET solicitud = :solicitud, descripcion = :descripcion, cantidad_kilos = :cantidad_kilos WHERE id_solicitud = :id_solicitud');
            try{
                $query->execute([
                    'id_solicitud'    => $item['id_solicitud'],
                    'solicitud'       => $item['solicitud'],
                    'descripcion'     => $item['descripcion'],
                    'cantidad_kilos'  => $item['cantidad_kilos'],
                    'id_centro'       => $item['id_centro'],
                    'identificacion'   => $item['identificacion']
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
            $query = $this->db->connect()->prepare('DELETE FROM solicitud WHERE id_solicitud = :id');
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