<?php

$Auth->logout();
Flash::success('Zostałeś wylogowany');
$Request->location('/');