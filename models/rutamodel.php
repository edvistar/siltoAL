<?php
    include_once('models/ruta.php');

    class RutaModel extends Model{
        function __construct(){
            parent::__construct();
        }
        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO rutas (fecha_ruta, hora_salida, hora_llegada, descripcion, tipo_ruta, precinto, identificacion, placa, id_centro, id_producto, id_solicitud) VALUES(:fecha_ruta, :hora_salida, :hora_llegada, :descripcion, :tipo_ruta, :precinto, :identificacion, :placa, :id_centro, :id_producto, :id_solicitud)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);

                try{
                    $query->execute([
                                    
                                    'fecha_ruta'     => $datos['fecha_ruta'],
                                    'hora_salida'    => $datos['hora_salida'],
                                    'hora_llegada'   => $datos['hora_llegada'],
                                    'descripcion'    => $datos['descripcion'],
                                    'tipo_ruta'      => $datos['tipo_ruta'],
                                    'precinto'       => $datos['precinto'],
                                    'identificacion' => $datos['identificacion'],
                                    'placa'          => $datos['placa'],
                                    'id_centro'      => $datos['id_centro'],
                                    'id_producto'      => $datos['id_producto'],
                                    'id_solicitud'      => $datos['id_solicitud']
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
        public function cargarVehiculo(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT placa FROM vehiculo');
                include_once('models/vehiculo.php');
                while ($row = $query->fetch()) {
                    $item = new VehiculoDAO();
                    $item->placa = $row['placa'];
                   
                   
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
        public function cargarSolicitud(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT id_solicitud, descripcion FROM solicitud');
                include_once('models/solicitud.php');
                while ($row = $query->fetch()) {
                    $item = new solicitudDAO();
                    $item->id_solicitud = $row['id_solicitud'];
                    $item->descripcion = $row['descripcion'];
                    
                   
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
        public function cargarProducto(){
            $items = [];
            try {
                $query = $this->db->connect()->query('SELECT id_producto, nombre FROM producto');
                include_once('models/producto.php');
                while ($row = $query->fetch()) {
                    $item = new ProductoDAO();
                    $item->id_producto = $row['id_producto'];
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
                $query = $this->db->connect()->query('SELECT
                rut.id_ruta, 
                rut.fecha_ruta, 
                rut.hora_salida, 
                rut.hora_llegada, 
                rut.descripcion, 
                rut.tipo_ruta, 
                rut.precinto, 
                usu.nombre as nombreConductor,
                rut.placa, 
                cent.nombre as nombreCentro,
                pro.nombre as nombreProducto,
                rut.id_solicitud
            
                FROM rutas as rut
                INNER JOIN usuario as usu on usu.identificacion=rut.identificacion
                INNER JOIN centro as cent on cent.id_centro=rut.id_centro
                INNER JOIN producto as pro on pro.id_producto=rut.id_producto
                ');

                while($row = $query->fetch()){
                    $item = new RutaDAO();

                    $item->id_ruta        = $row['id_ruta'];
                    $item->fecha_ruta     = $row['fecha_ruta'];
                    $item->hora_salida    = $row['hora_salida'];
                    $item->hora_llegada   = $row['hora_llegada'];
                    $item->descripcion    = $row['descripcion'];
                    $item->tipo_ruta      = $row['tipo_ruta'];
                    $item->precinto       = $row['precinto'];
                    $item->identificacion = $row['nombreConductor'];
                    $item->placa          = $row['placa'];
                    $item->id_centro      = $row['nombreCentro'];
                    $item->id_producto      = $row['nombreProducto'];
                    $item->id_solicitud      = $row['id_solicitud'];

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
                    $item->fecha_ruta     = $row['fecha_ruta'];
                    $item->hora_salida    = $row['hora_salida'];
                    $item->hora_llegada   = $row['hora_llegada'];
                    $item->descripcion    = $row['descripcion'];
                    $item->tipo_ruta      = $row['tipo_ruta'];
                    $item->precinto       = $row['precinto'];
                    $item->identificacion = $row['identificacion'];
                    $item->placa          = $row['placa'];
                    $item->id_centro      = $row['id_centro'];
                    $item->id_producto      = $row['id_producto'];
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
?>