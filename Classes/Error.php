<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

/**
 * Description of Error
 *
 * @author estidi
 */
class Error {

    public function error($errno, $errstr, $errfile, $errline, $errcontext)
    {
        if (!(error_reporting() & $errno))
        {
            
            return false;
        }

        switch ($errno)
        {
            case E_USER_ERROR:
                echo "<b>My ERROR</b> [$errno] $errstr<br />\n";
                echo "  Fatal error on line $errline in file $errfile";
                echo ", PHP " . PHP_VERSION . " (" . PHP_OS . ")<br />\n";
                echo "Aborting...<br />\n";
                var_dump($errcontext);
                break;

            case E_USER_WARNING:
                echo "<b>My WARNING</b> [$errno] $errstr<br />$errline     <br />$errfile\n";
                break;

            case E_USER_NOTICE:
                echo "<b>My NOTICE</b> [$errno] $errstr<br />\n";
                break;

            default:
                echo "Unknown error type: [$errno] $errstr<br />\n";
                break;
        }

        /* Don't execute PHP internal error handler */
        return true;
    }

}
