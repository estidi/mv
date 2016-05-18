<?php

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


