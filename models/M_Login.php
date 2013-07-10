<?php

class M_Login extends Model {

    public function __construct() {
        parent::__construct();

    }

    public function userLogin($id, $pass) {
        $result = $this->db->query("SELECT id, role FROM users WHERE id=$id AND password=$pass");
        return $result;
    }
}