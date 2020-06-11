<?php

class IndexModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function consultarUsuario($email,$password){
        $result="";
        try{
            $query = $this->db->connect()->prepare('SELECT * FROM usuario WHERE email = :email and pass=:clave');

            $query->execute(['email' => $email,
                             'clave'=>  md5($password)
                            ]);
            
            if($row = $query->fetch()){
                $result=$row['identificacion'];
            }
            return $result;
        }catch(PDOException $e){
            if(constant("DEBUG")){
                echo $e->getMessage();
            }
            return null;
        }
    }
}