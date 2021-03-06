<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 05/11/2016
 * Time: 08:46 PM
 */
class DB{
    private static  $_instance = null;

    private $_pdo,
    $_query,
    $_error = false,
    $_results,
    $_count = 0;
  private function  __construct(){
      try{
      @$this->_pdo = new PDO('mysql/host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'),Config::get('mysql/username'),Config::get('mysql/password'));
          echo "Connected";
      }catch (PDOException $e){
         die($e->getMessage());
      }
  }

    public  static function getInstance(){
        if(!isset(self::$_instance)){
            self::$_instance = new DB();
        }
        return self::$_instance;
    }

    public function query($sql,$params = array()){
        $this->_error = false;


        if($this->_query = $this->_pdo->prepare($sql)){
            $x = 1;
            if(count($params)){
                foreach ($params as $param){
                    $this->_query->bindValue($x,$param);
                    $x++;
                }
            }
            if($this->_query->execute()){
                echo "Success";
            }
        }

    }

}

?>