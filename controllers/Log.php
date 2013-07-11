<?php

class Log extends Controller {

    public function __construct() {
        parent::__construct();
        echo 'Log Controller Loaded...';

        new View('log');
    }

}