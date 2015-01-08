<?php
/**
 * Created by PhpStorm.
 * User: Code-Architect
 * Date: 22-Dec-14
 * Time: 1:11 AM
 */

//Include Config
require_once('config/config.php');

//Helpers files
require_once('helpers/system_helper.php');

//Auto load
function __autoload($class_name){
    require_once('libraries/'.$class_name.'.php');
}