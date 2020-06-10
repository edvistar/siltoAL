<?php
    include_once('models/solicitud.php');

    class SolicitudModel extends Model{
        function __construct(){
            parent::__construct();
        }
        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO solicitud ( id_solicitud, solicitud, descripcion, cantidad_kilos) VALUES( :id_solicitud, :solicitud, :descripcion, :cantidad_kilos)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);
                
                try{
                    $query->execute([
                                    'id_solicitud'    =>$datos['id_solicitud'],
                                    'solicitud'       => $datos['solicitud'],
                                    'descripcion'     => $datos['descripcion'],
                                    'cantidad_kilos'  => $datos['cantidad_kilos']

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
                $query = $this->db->connect()->query('SELECT * FROM solicitud');

                while($row = $query->fetch()){
                    $item = new SolicitudDAO();

                    $item->id_solicitud     = $row['id_solicitud'];
                    $item->solicitud        = $row['solicitud'];
                    $item->descripcion      = $row['descripcion'];
                    $item->cantidad_kilos   = $row['cantidad_kilos'];

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
                    $item->cantidad_kilos   = $row['cantidad_kilos'];
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
                    'cantidad_kilos'  => $item['cantidad_kilos']
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