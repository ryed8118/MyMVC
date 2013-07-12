<?php

class Login extends Controller {

    public function __construct() {

        parent::__construct();

        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if(isset($_GET['pass'])) {
            $pass = $_GET['pass'];
        }

        $m = new M_Login();
        $data = $m->userLogin($id,$pass);

        echo "Login Controller Loaded..";

        if($data){
            echo 'login successful!';
            new View('dashboard');
        }else{
            new View('index');
        }


    }

}