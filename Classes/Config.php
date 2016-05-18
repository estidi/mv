<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author estidi
 */
class Config {

    const DELIMITER = '.';

    private static $name = '';
    private static $data = array();

    public static function getName() {
        return self::$name;
    }

    public static function setName($name = null) {
        self::$name = $name;
    }

    public static function get($name = null, $default = null) {
        if ($name == null) {
            return self::$data;
        }

        $names = explode(self::DELIMITER, $name);

        if (!array_key_exists($names[0], self::$data)) {
            self::load($names[0]);
        }

        $data = self::$data;

        foreach ($names as $name) {
            if (!array_key_exists($name, $data)) {
                return $default;
            }
            $data = $data[$name];
        }

        return empty($data) ? $default : $data;
    }

    public static function set($name, $value) {
        if ($name == null) {
            $name = self::$name;
        } else {
            if (self::$name != null) {
                $name = self::$name . self::DELIMITER . $name;
            }
        }

        $names = explode(self::DELIMITER, $name);

        $array[$names[count($names) - 1]] = $value;

        for ($cnt = count($names) - 2; $cnt >= 0; $cnt--) {
            $tmp[$names[$cnt]] = $array;
            $array = $tmp;
            unset($tmp);
        }

        self::$data = array_replace_recursive(self::$data, $array);
    }

    public static function load() {
        $loads = func_get_args();

        foreach ($loads as $load) {
            if (array_key_exists($load, self::$data)) {
                continue;
            }
            if (file_exists(MAIN . 'Config' . DIRECTORY_SEPARATOR . $load . '.php')) {
                require MAIN . 'Config' . DIRECTORY_SEPARATOR . $load . '.php';
            } 
        }
    }

    public static function save($filename, $value) {
        self::load($filename);
        if (array_key_exists($filename, self::$data)) {
            $value = array_replace_recursive(self::$data[$filename], $value);
        }
        
        $str = '<?php' . PHP_EOL;
        $str .= 'Config::setName(\'' . $filename . '\');' . PHP_EOL;

        $str .= Config::prepareToSave($value);

        $str .= 'Config::setName();' . PHP_EOL;

        file_put_contents(MAIN . 'Config' . DIRECTORY_SEPARATOR . $filename . '.php', $str, LOCK_EX);
    }

    private static function prepareToSave($value, $name = null) {
        $str = '';
        foreach ($value as $key => $el) {
            if (is_array($el)) {
                $str .= Config::prepareToSave($el, $name . $key . self::DELIMITER);
            } else {
                if (($name === null)) {
                    $str .= 'Config::set(\'' . $key . '\',\'' . $el . '\');' . PHP_EOL;
                } else {
                    $str .= 'Config::set(\'' . $name . $key . '\',\'' . $el . '\');' . PHP_EOL;
                }
            }
        }

        return $str;
    }

}
