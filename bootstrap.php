<?php

//include_once 'Autoload.php';
//new Autoload();



$s = simplexml_load_file('local.xml');

//var_dump($s);
//var_dump($s->global->resources->default_setup->connection->host);

$mysqli = new mysqli($s->global->resources->default_setup->connection->host,$s->global->resources->default_setup->connection->username,$s->global->resources->default_setup->connection->password,$s->global->resources->default_setup->connection->dbname);

//var_dump($mysqli);

/*
 * CREATE/MODIFY LOG FILES
 */
$text = '';
$d = date('Y-m-d');
if(!file_exists('logs/'.$d)) {
    touch('logs/'.$d);
}else {
    $text = file_get_contents('logs/'.$d);
}
$timestamp = time();
$ip = $_SERVER['REMOTE_ADDR'];
$url = $_SERVER['PHP_SELF'];
$sid = session_id();

$text .= "$timestamp\t$ip\t$url\t$sid\n";
$fhandle = fopen('logs/'.$d,'r+');
fwrite($fhandle,$text);
var_dump($_COOKIE);
//var_dump($_SESSION);