<?php

$url = $_GET['url'];
echo $url;
/*
include_once 'bootstrap.php';


include_once('Log.php');
$l = new Log();

$result = $mysqli->query("SELECT value FROM catalog_product_entity_varchar");
*/
error_reporting(0);
$page = $_GET['page'];

require_once 'View.php';
new View($page);
?>

