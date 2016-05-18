<?php

// nie bawie sie w super skomplikowane logowanie, bo i tak nie jest potrzebne, a zarządzanie w tym wypadku lepiej zroobic oddzielnie jako backend
if ($Request->isPost()) {
    $data['username'] = $Request->post('username');
    $data['passwordCopy'] = $Request->post('passwordCopy');
    $data['password'] = $Request->post('password');

    if ($data['password'] == $data['passwordCopy'] && mb_strlen($data['password']) >= 6) {
        // $AdoDb->StartTrans();
        $AdoDb->Execute("INSERT INTO users (username,password,status,registrationDate) VALUES (?, ?,'beginner',now())", array(
            $data['username'],
            Auth::PasswordHash($data['password'])
        ));
        // $Smarty->assign('debug', debug($AdoDb->ErrorMsg(), $_POST, 'a: ' . $AdoDb->Affected_Rows(), 'i: ' . $AdoDb->Insert_ID()))
        if ($AdoDb->Affected_Rows() > 0) {
            Flash::success('Możesz się teraz zalogować');
        } else {
            Flash::fail('Niestety nazwa uzytkownika już istnieje');
            $Smarty->assign('register', true);
        }
        // $AdoDb->CompleteTrans(); // po skończeniu tranzakcji ado gubi wartości takie jak affected rows
    } else {
        Flash::fail('Hasła się nie zgadzają lub jest za krótkie');
        $Smarty->assign('register', true);
//   return;
    }
} else {
    $Smarty->assign('register', true);
}
$Smarty->assign('leftSide', $Smarty->fetch('User/loginPanel.tpl'));


