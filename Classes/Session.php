<?php

/**
 * Description of Session
 *
 * @author estidi
 */
class Session {

    static function initialize() {
        if (!session_id()) {
            session_start();
        }
    }

    static function get($name) {
        return $_SESSION[$name];
    }

    static function set($name, $value) {
        return $_SESSION[$name] = $value;
    }

    static function destroy() {
        // $_SESSION = array();
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        self::initialize();
        return session_destroy();
 
    }

    static function regenerate() {
        session_regenerate_id(true);
    }

}
