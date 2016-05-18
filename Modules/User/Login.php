<?php

if ($Auth->loggedIn()) {
    Flash::success('Jesteś zalogowany');
    $Request->location('/galaxy');
}
if ($Request->isPost()) {
    if ($Auth->login($Request->post('username'), $Request->post('password'), $AdoDb)) {
        Flash::success('Udało się zalogować');
        $Request->location('/galaxy');
    } else {
        Flash::add('Nie poprawny login lub hasło');
    }
} else {
    
}

$Smarty->assign('leftSide', $Smarty->fetch('User/loginPanel.tpl'));
