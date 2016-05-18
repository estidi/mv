<?php

class Auth {
    private $data;
    public function __construct() {
        
    }

    public function login($username, $password, ADODB_mysqli $AdoDb) {
        $res = $AdoDb->Execute('SELECT id as userId, username,status FROM users WHERE username = ? AND password = ? LIMIT 1', array(
            $username,
            self::PasswordHash($password)
        ));
        if ($res) {
            Session::regenerate();
            $res->fields['loggedIn'] = true;
            Session::set('login',$res->fields);
           
            return $res;
        } else {
            return false;
        }
    }

    public function Logout() {
        Session::destroy();
    }

    static public function loggedIn() {
        if (isset($_SESSION['login']['loggedIn']) and isset($_SESSION['login']['userId'])) {
            return true;
        }
        return false;
    }

    static function PasswordHash($password) {
        $seed = Config::get('default.seed');
        return hash('sha256', $password . $seed);
    }
    
     

}
