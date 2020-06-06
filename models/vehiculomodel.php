<?php
    include_once('models/vehiculo.php');

    class VehiculoModel extends Model{
        function __construct(){
            parent::__construct();
        }

        public function create($datos = null){
            // insertar
            //if(!isset($datos)){
                $sentenceSQL="INSERT INTO vehiculo (placa, capacidad, seguro, tecnomecanica, tipo_vehiculo, identificacion,  gps, estado, fecha_registro) VALUES( :placa, :capacidad, :seguro, :tecnomecanica, :tipo_vehiculo, :identificacion, :gps, :estado,  :fecha_registro)";
                $connexionDB=$this->db->connect();
                $query = $connexionDB->prepare($sentenceSQL);

                try{
                    $query->execute([
                        'placa'          => $datos['placa'],
                        'capacidad'      => $datos['capacidad'],
                        'seguro'         => $datos['seguro'],
                        'tecnomecanica'  => $datos['tecnomecanica'],
                        'tipo_vehiculo'  => $datos['tipo_vehiculo'],
                        'identificacion' => $datos['identificacion'],
                        'gps'            => $datos['gps'],
                        'estado'         =>$datos['estado'],
                        'fecha_registro' =>$datos['fecha_registro']

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

                    $item->placa           = $row['placa'];
                    $item->capacidad       = $row['capacidad'];
                    $item->seguro          = $row['seguro'];
                    $item->tecnomecanica   = $row['tecnomecanica'];
                    $item->tipo_vehiculo   = $row['tipo_vehiculo'];
                    $item->identificacion  = $row['identificacion'];
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
                    $item->placa           = $row['placa'];
                    $item->capacidad       = $row['capacidad'];
                    $item->seguro          = $row['seguro'];
                    $item->tecnomecanica   = $row['tecnomecanica'];
                    $item->tipo_vehiculo   = $row['tipo_vehiculo'];
                    $item->identificaion   = $row['identificacion'];
                    $item->gps             = $row['gps'];
                    $item->estado          = $row['estado'];
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
            $query = $this->db->connect()->prepare('UPDATE vehiculo SET capacidad = :capacidad, seguro = :seguro, tecnomecanica = :tecnomecanica, tipo_vehiculo = :tipo_vehiculo, identificacion = :identificacion, gps = :gps, estado = :estado, fecha_registro = :fecha_registro WHERE placa = :placa ');

            try{
                $query->execute([
                    'placa'    => $item['placa'],
                    'capacidad'       => $item['capacidad'],
                    'seguro'        => $item['seguro'],
                    'tecnomecanica'     => $item['tecnomecanica'],
                    'tipo_vehiculo'     => $item['tipo_vehiculo'],
                    'identificacion' => $item['identificacion'],
                    'gps'    => $item['gps'],
                    'estado'        => $item['estado'],
                    'fecha_registro'        => $item['fecha_registro']
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

        public function cargarConductor(){
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