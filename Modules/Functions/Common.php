<?php
/**
Chapie wszystkie zmienne i wysrywa za pomocą print_r
*/
function debug() {
    $what = '';
    foreach (func_get_args() as $arg) {
        $what.= print_r($arg, true) . PHP_EOL;
    }
    return print_r($what,true);
}
 
function load ($file) {
    if (file_exists(FUNC . $file . '.php')) {
        include_once FUNC . $file . '.php';
    } else {
        return false;
    }
}