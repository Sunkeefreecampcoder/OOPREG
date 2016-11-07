<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 05/11/2016
 * Time: 08:48 PM
 */
session_start();
$GLOBALS['config'] = array(
    'mysql' => array(
        'host'=> '127.0.0.1',
        'user' => 'root',
        'password' => '',
        'db' => 'oop'
    ),
    'remeber' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 604800
    ),
    'session' => array(
        'session_name' => 'user'
    )
);

spl_autoload_register(function($class){
    require_once 'classes/'.$class.'.php';

});
require_once 'Functions/sanitize.php';

