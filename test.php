<?php

$time_start = microtime(true);
define('multiVerse', 'Moc jest z nami :D');
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
//header("Content-Type: text/plain");
$AdoDb = new ADODB_mysqli();
if (!$AdoDb->Connect('localhost', 'root', 'password', 'multiVerse')) {
    print $AdoDb->ErrorMsg();
}
$AdoDb->SetFetchMode(ADODB_FETCH_ASSOC);

$res = $AdoDb->GetAll('SELECT  * from solarSystems');



print_r($data);
/*

foreach ($data as $planets) {
    $rand = mt_rand(8, 16); // liczba planet na system
    $data[] = "({$value['x']},{$value['y']},{$rand})" . PHP_EOL;
}
$sql = $sql . implode(',', $data) . ';';

$AdoDb->Execute($sql);


/*
  id	int(11)
  userId	int(11)
  imageId	int(11)
  angle	float
  distance	int(11)
  name	varchar(15)	utf8_general_ci
  size	mediumint(9)
  temperature	tinyint(4)
 *  */

function generatePlanets($system) {
    $planets = $system['planets'];
    for ($i = 1; $i <= $planets; $i++) {
        $data[$i]['solarSystemId'] = $system['id'];
        $data[$i]['angle'] = mt_rand(0, 360);
        $data[$i]['distance'] = planetDistance($i) * 1000000; // realna odleglosc
        $data[$i]['size'] = planetDiameter(planetPosition($i, $planets)) * 100 * 5; // realna srednica
        $data[$i]['temperature'] = planetTemperature(planetPosition($i, $planets));
    }

    return $data;
}

function planetPosition($pos, $max) {
    return round($pos * 16 / $max, 3) + mt_rand(-5000, 5000) / 10000;
}

function planetDistance($pos) {
    $pos = planetPosition($pos, 16);

    return round(20.50 * pow($pos, 3) - 120 * pow($pos, 2) + 244 * $pos - 81, 6);
}

function planetDiameter($pos) {
    return round(0.0825792 * pow($pos, 4) - 2.92667 * pow($pos, 3) + 30.9081 * pow($pos, 2) - 88.4073 * $pos + 116, 1);
}

function planetTemperature($pos) {
    return round(217. - 17 * $pos + mt_rand(-15, 15), 0);
}


