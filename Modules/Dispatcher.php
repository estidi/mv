<?php

$module = ucfirst(Config::get('default.module'));
$action = ucfirst(Config::get('default.action'));



if (!$Auth->loggedIn() and $module != 'User') {
    $Request->location('/user/login');
}

$Smarty->append('leftSide', $Smarty->fetch('Common/menu.tpl'));

if (file_exists(MODS . $module . '.php')) {

    $Smarty->assign('module', $module);
    include MODS . $module . '.php';

    if (file_exists(MODS . $module . DIRECTORY_SEPARATOR . $action . '.php')) {
        $Smarty->assign('action', Config::get('default.action'));
        include MODS . $module . DIRECTORY_SEPARATOR . $action . '.php';
    } else {
        if (file_exists(MODS . $module . DIRECTORY_SEPARATOR . 'default' . '.php')) {
            include MODS . $module . DIRECTORY_SEPARATOR . 'default' . '.php';
        }
    }
} else {
    include MODS . 'Error.php';
}


