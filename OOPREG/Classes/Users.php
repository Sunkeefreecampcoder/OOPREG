<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 06/11/2016
 * Time: 08:45 PM
 */
require_once 'dbConfig.php';
class Users {

    private $conn;

    public  function __construct(){
        $database = new Database();
        $db = $database->dbConnect();
        $this->conn = $db;
    }

    public function runQuery($sql){
        $stmt = $this->conn->prepare($sql);
        return $stmt;
    }

    public function is_logged(){
        if(isset($_SESSION['user_session'])){
            return true;

        }
    }

    public function redirect ($url){
        return header("location: $url");
    }

    public function  doLogout(){
        if(isset($_SESSION['user_session'])){
            session_unset();
            session_destroy();
            unset($_SESSION['user_session']);

            return true;

        }
    }

}