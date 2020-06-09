<?php
    include_once('models/solicitud.php');

    class SolicitudModel extends Model{
        function __construct(){
            parent::__construct();
        }
         //enlace con el  controlador para registrar datos
        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO solicitud ( solicitud, descripcion, centro, nombreUsuario) VALUES( :solicitud, :descripcion, :centro, :nombreUsuario)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);
                try{
                    $query->execute([
                        //'id_solicitud'    =>$datos['id_solicitud'],
                        'solicitud'       =>date("Y/m/d"),//$datos['solicitud'],
                        'descripcion'     =>$datos['descripcion'],
                        'centro'          =>$datos['centro'],
                        'nombreUsuario'   => $datos['nombreUsuario']
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
         //enlace con el  controlador para leer datos
        public function read(){
            $items = [];
            try{
                $query = $this->db->connect()->query('SELECT solicitud.id_solicitud as ID, solicitud.solicitud as Solicitud, solicitud.descripcion as Descripcion, cen.nombre as Centro, usu.nombreUsuario as Usuario FROM solicitud as solicitud  INNER JOIN centro as cen on cen.id_centro = solicitud.centro INNER JOIN usuario as usu on usu.identificacion = solicitud.nombreUsuario');

                while($row = $query->fetch()){
                    $item = new SolicitudDAO();

                    $item->id_solicitud     = $row['ID'];
                    $item->solicitud        = date("Y-m-d", strtotime($row['Solicitud']));
                    $item->descripcion      = $row['Descripcion'];
                    $item->centro        = $row['Centro'];
                    $item->nombreUsuario        = $row['Usuario'];

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
         //enlace con el  controlador para solicitar datos
        public function readById($id){
            $item = new SolicitudDAO();
            try{
                $query = $this->db->connect()->prepare('SELECT solicitud.id_solicitud as ID, solicitud.solicitud as Solicitud, solicitud.descripcion as Descripcion, cen.nombre as Centro, usu.nombreUsuario as Usuario FROM solicitud as solicitud  INNER JOIN centro as cen on cen.id_centro = solicitud.centro INNER JOIN usuario as usu on usu.identificacion = solicitud.nombreUsuario where solicitud.id_solicitud=:id');

                $query->execute(['id' => $id]);

                while($row = $query->fetch()){
                    $item->id_solicitud     = $row['ID'];
                    $item->solicitud        = date("Y-m-d", strtotime($row['Solicitud']));
                    $item->descripcion      = $row['Descripcion'];
                    $item->centro        = $row['Centro'];
                    $item->nombreUsuario    = $row['Usuario'];

                }
                return $item;
            }catch(PDOException $e){
                if(constant("DEBUG")){
                    echo $e->getMessage();
                }
                return null;
            }
        }
        //enlace con el  controlador para modificar datos
        public function update($item){
            $query = $this->db->connect()->prepare('UPDATE solicitud SET solicitud = :solicitud, descripcion = :descripcion, id_centro = :id_centro, identificacion = :identificacion  WHERE id_solicitud = :id_solicitud');
            try{
                $query->execute([
                    'id_solicitud'    => $item['id_solicitud'],
                    'solicitud'       => $item['solicitud'],
                    'descripcion'     => $item['descripcion'],
                    'id_centro'       => $item['id_centro'],
                    'identificacion'  => $item['identificacion']

                ]);

                return true;
            }catch(PDOException $e){
                if(constant("DEBUG")){
                    echo $e->getMessage();
                }
                return false;
            }
        }
         //enlace con el  controlador para eliminar datos
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

         //enlace con el  controlador para cargar datos de centros datos
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
        //enlace con el  controlador para cargar datos del centro llamando el encargado datos
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