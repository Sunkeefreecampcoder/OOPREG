<?php
/**
 * Created by PhpStorm.
 * User: IJATUYI OLASUNKANMI
 * Date: 05/11/2016
 * Time: 09:49 PM
 */
function escape($string){
    return htmlentities($string, ENT_QUOTES,'UTF-8');
}