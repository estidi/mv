<?php

$l = 0;
// można by to ulepszyć a nie ctrl+c i ctrl+v
// w przyszłości dodać generowanie z predefiniowanych podanych przez uzytkownika danych 

for ($j = 0; $j < 360; $j = $j + 360 / 9) {

    for ($i = 6; $i < mt_rand(305, 355); $i = $i + 0.5) {

        // + mt_rand(-2,2);
        $array[$l]['x'] = 1 * ( 755 * round(50 * cos(deg2rad($i + $j + mt_rand(-2, 2))) + ($i * $i) * sin(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $array[$l]['y'] = 1 * (745 * round(50 * sin(deg2rad($i + $j + mt_rand(-2, 2))) - ($i * $i) * cos(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $l++;
    }
}

for ($j = 10; $j < 360; $j = $j + 360 / 9) {

    for ($i = 7; $i < mt_rand(305, 355); $i = $i + 1) {


        $array[$l]['x'] = 1 * (700 * round(50 * cos(deg2rad($i + $j + mt_rand(-2, 2))) + ($i * $i) * sin(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $array[$l]['y'] = 1 * ( 700 * round(50 * sin(deg2rad($i + $j + mt_rand(-2, 2))) - ($i * $i) * cos(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $l++;
    }
}
for ($j = 20; $j < 360; $j = $j + 360 / 9) {

    for ($i = 8; $i < mt_rand(305, 355); $i = $i + 2) {


        $array[$l]['x'] = 1 * (700 * round(50 * cos(deg2rad($i + $j + mt_rand(-2, 2))) + ($i * $i) * sin(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $array[$l]['y'] = 1 * ( 700 * round(50 * sin(deg2rad($i + $j + mt_rand(-2, 2))) - ($i * $i) * cos(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $l++;
    }
}

for ($j = 30; $j < 360; $j = $j + 360 / 9) {

    for ($i = 9; $i < mt_rand(305, 355); $i = $i + 3) {


        $array[$l]['x'] = 1 * (700 * round(50 * cos(deg2rad($i + $j + mt_rand(-2, 2))) + ($i * $i) * sin(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $array[$l]['y'] = 1 * ( 700 * round(50 * sin(deg2rad($i + $j + mt_rand(-2, 2))) - ($i * $i) * cos(deg2rad($i + $j + mt_rand(-2, 2))), 0));
        $l++;
    }
}

$sql = 'INSERT INTO solarSystems (x,y, planets) VALUES ';

foreach ($array as $value) {
    $rand = mt_rand(8, 16); // liczba planet na system
    $data[] = "({$value['x']},{$value['y']},{$rand})" . PHP_EOL;
}
$sql = $sql . implode(',', $data) . ';';

$AdoDb->Execute($sql);

$res = $AdoDb->Execute('SELECT min(x) as "left",min(y) as bottom, max(y) as top, max(x) as "right",count(id)  as systems,sum(planets) as "planets" from solarSystems;');

$systems = $res->fields['systems'];
$planets = $res->fields['planets'];
unset($res->fields['systems'], $res->fields['planets']);

$max = max($res->fields);
$min = abs(min($res->fields));

if ($min < $max) {
    $boundary = $max + 0.01 * $max;
} else { // lepszy kwadrat niż prostokąt ;] 
    $boundary = $min + 0.01 * $min;
}

Config::save('galaxy', array('systems' => $systems, 'planets' => $planets, 'boundary' => $boundary));
// generowanie planet
load('Galaxy/Generate');
$sql = 'INSERT INTO `planets`(`solarSystemId`,`angle`, `distance`, `diameter`, `temperature`) VALUES';

$data = array();
$i = 0;
foreach ($res as $k => $system) {

    $planets = generatePlanets($system);
    foreach ($planets as $planet) {
        //list($solarSystemId,$angle,$distance,$size,$temperature) = $planet;
        $data[$i][] = "({$planet['solarSystemId']},{$planet['angle']},{$planet['distance']},{$planet['size']},{$planet['temperature']})" . PHP_EOL;
    }

    if ($k % 500 == 0) {
        $i++;
    }
}

foreach ($data as $packet) {
    $query = $sql . implode(',', $packet) . ';';
    $AdoDb->Execute($query) or print $AdoDb->ErrorMsg();
}
 