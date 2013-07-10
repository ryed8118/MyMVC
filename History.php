<?php

class History {

    private $user_history;

    public function __construct() {
        session_start();

        if(!isset($_SESSION['history'])) {
            settype($_SESSION['history'], 'array');
        }

        array_unshift($_SESSION['history'], $_SERVER['PHP_SELF']);
        if(count($_SESSION['history'])>5) {
            array_pop($_SESSION['history']);
        }

        $user_history = serialize($_SESSION['history']);



        if(!isset($_COOKIE['history'])) {
            setcookie('history',$user_history,time()+60*60*24*30);
            echo 'cookie created';
        }else {
            $_COOKIE['history'] = $user_history;

        }
    }

    public function render() {
        if (!isset($_SESSION['history']) && isset($_COOKIE['history'])) {
            $user_history = unserialize($_COOKIE['history']);
            foreach($user_history as $val) {
                echo $val;
            }
        }
    }
}