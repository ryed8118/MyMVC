<?php

class Autoload {

    public function __construct() {


        spl_autoload_register('autoload');

    }

    public function autoload($class_name) {

        include_once $class_name . '.php';

    }
}