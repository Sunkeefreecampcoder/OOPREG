<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 05/11/2016
 * Time: 07:46 PM
 */

 class Config{
     //declarations  of properties

     public $conn;
     private $username;
     private $password;

     public static function  get($path = null){
         if($path){
             $config = $GLOBALS['config'];
             $path = explode('/',$path);

             foreach($path as $bit){
                if(isset($config[$bit])){
                    $config = $config[$bit];
                }
             }
             return $config;
         }
     }





 }

?>