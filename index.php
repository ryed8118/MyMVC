<?php

/*
 * SET ERROR REPORTING:
 */
error_reporting(E_ALL);
ini_set('display_errors', 1);


/*
 * SET AUTOLOADING:
 */
//require 'Autoload.php';
function __autoload($class) {
    if($class=='Controller'){
        require_once "Controller.php";
    }elseif($class=='View') {
        require_once "View.php";
    }elseif($class=='Model') {
        require_once "Model.php";
    }else {
        require_once "controllers/".$class.".php";
    }

}



$page = 'index';
if(isset($_GET['page'])) {
    $page = $_GET['page'];
}

$controller = ucfirst($page);
$model = 'M_'.ucfirst($page);

new $controller;

include_once 'bootstrap.php';

$result = $mysqli->query("SELECT value FROM catalog_product_entity_varchar LIMIT 5");