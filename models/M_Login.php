<?php

class M_Login extends Model {

    public function __construct() {
        parent::__construct();

    }

    public function userLogin($id, $pass) {
        $query = "SELECT id, role FROM users WHERE id='$id' AND password='$pass' LIMIT 1";
        $statement = $this->db->query($query);
        if(is_object($statement)){
            $data = $statement->fetchAll();
            return $data;
        }else{
            return false;
        }


    }

}