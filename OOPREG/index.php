<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 05/11/2016
 * Time: 09:54 PM
 */

//require_once 'Core/init.php';
require_once 'Classes/Users.php';
//DB::getInstance()->query("SELECT * FROM user WHERE  username = ?",array('alex','billy'));

$users = new Users();

if($users->is_logged()){
    return "<h1> Welcome to my world </h1>";

}else{
    
 return $users->redirect("404.php");
}

