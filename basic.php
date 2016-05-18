<?php

if (!defined('multiVerse')) {
    die('<img src="https://img.4plebs.org/boards/pol/image/1395/08/1395084091354.gif">');
}


/**
 *
 */
define('BASE', dirname(realpath(__FILE__)) . DIRECTORY_SEPARATOR);
define('MAIN', BASE . 'Main' . DIRECTORY_SEPARATOR);
define('CLAS', BASE . 'Classes' . DIRECTORY_SEPARATOR);
define('MODS', BASE . 'Modules' . DIRECTORY_SEPARATOR);
define('FUNC', MODS . 'Functions' . DIRECTORY_SEPARATOR);

include_once CLAS . 'SplClassLoader.php'; // do ładowania wlasnych rzeczy
include_once CLAS . 'Smarty/Smarty.php'; // smarty ladowane ręcznie
include_once CLAS . 'adoDb/adodb.inc.php';
include_once CLAS . 'adoDb/drivers/adodb-mysqli.inc.php';
include_once CLAS . 'adoDb/adodb-error.inc.php'; // bez errorów sie nie obejdzie 

include_once FUNC . 'Common.php';


$SplClassLoader = new SplClassLoader(null, 'Classes');
$SplClassLoader->register();


$Smarty = new Smarty();
$Smarty->setTemplateDir(MAIN . 'View/');
$Smarty->setCompileDir(MAIN . 'View/Compile/');
$Smarty->setConfigDir(MAIN . 'View/Config/');
$Smarty->setCacheDir(MAIN . 'View/Cache');
$Smarty->debugging = true;

$Request = new \Request();

if ($Request->isAjax()) {
    if ($Request->get('template')) {
        $Smarty->display($Request->get('template') . '.html');
        die();
    }
}

$AdoDb = new ADODB_mysqli();
if (!$AdoDb->Connect('localhost', 'root', 'password', 'multiVerse')) {
    print $AdoDb->ErrorMsg();
}
$AdoDb->SetFetchMode(ADODB_FETCH_ASSOC);

Session::initialize();

Config::set('default.module', $Request->param(0, Config::get('default.module')));
Config::set('default.action', $Request->param(1, Config::get('default.action')));
$Auth = new Auth;
include MODS . 'Dispatcher.php';

$Smarty->assign('debug', debug(Config::get(), $_SESSION, $_COOKIE, session_name()));

$Smarty->assign('flash', Flash::get());
Flash::clear();
$Smarty->display('template.tpl');

