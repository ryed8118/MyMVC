<?php

class Index extends Controller {

    public function __construct() {
        parent::__construct();
        new View('index');
        echo 'Index controller loaded..';
        $this->loadModel('Index');
    }

}