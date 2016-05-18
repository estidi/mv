<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Request
 *
 * @author estidi
 */
class Request {

    protected $post = array();
    protected $get = array();
    private $_params = array();

    public function __construct()
    {
        $index = strpos($_SERVER['REQUEST_URI'], '?');
        if($index !== false) {
            $index = strpos($_SERVER['REQUEST_URI'], '?') - 1;
        } else {
            $index = strlen($_SERVER['REQUEST_URI']);
        }
        $uri = substr($_SERVER['REQUEST_URI'], 1, $index);
        $params = explode('/', $uri);
        foreach ($params as $param)
        {
            $this->_params[] = filter_var($param, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH); //a po co komu html lub apostrofy w uri
        }
    }

    public function isPost()
    {
        return ($_SERVER['REQUEST_METHOD'] === 'POST');
    }

    public function isGet()
    {
        return ($_SERVER['REQUEST_METHOD'] === 'GET');
    }

    public function isAjax()
    {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }

    public function get($name, $default = false, $filter = FILTER_SANITIZE_STRING)
    {
        return !empty($_GET[$name]) ? filter_input(INPUT_GET, $name, $filter) : $default;
    }

    public function post($name, $default = false, $filter = FILTER_SANITIZE_STRING)
    {
        return !empty($_POST[$name]) ? filter_input(INPUT_POST, $name, $filter) : $default;
    }

    public function param($num, $default = false)
    {
        return !empty($this->_params[$num]) ? $this->_params[$num] : $default;
    }

    public function getParams()
    {
        return $this->_params;
    }

    public function server($name)
    {
        return $_SERVER[$name];
    }
    
    public function location($location) {
        header('Location: ' . $location);
        exit(1);
    }

}
