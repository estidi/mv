<?php

/**
 * Description of Flash
 *
 * @author estidi
 */
class Flash {

    const SUCCESS = 'success';
    const FAIL = 'fail';

    static private function add($message, $type = Flash::FAIL) {
        $array[$type][] = $message;
        Session::set('flash', $array);
    }

    static function fail($message) {
        self::add($message);
    }

    static function success($message) {
        self::add($message, self::SUCCESS);
    }

    static function get($type = null) {
        if ($type == null) {
            return Session::get('flash');
        } else {
            return Session::get('flash')[$type];
        }
    }

    static function clear() {
        Session::set('flash', null);
    }

}
