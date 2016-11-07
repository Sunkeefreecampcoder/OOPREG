<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 06/11/2016
 * Time: 08:24 PM
 */




class Database{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "oop";
    private $conn;

    public function dbConnect(){
        $this->conn = null;

        try{
            $this->conn = new PDO('mysql/host='.$this->host.';dbname='.$this->db,$this->user, $this->password );
            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch (PDOException $ex){
            echo "Connection Error". $ex->getMessage();

        }

        return $this->conn;
    }
}


?>