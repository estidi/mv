<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

/**
 * Description of Exception
 *
 * @author estidi
 */
class Exception  {

    function exception(\Exception $exception)
    {
        echo \get_class($exception) .'  '. $exception->getTraceAsString().'  '. $exception->getCode() . '  '.$exception->getMessage() .'  '. $exception->getLine() .'  '. $exception->getFile();
    }

}

class userException extends \Exception {}

class LibException extends \Exception {}
