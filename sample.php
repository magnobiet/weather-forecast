<?php

require_once 'WeatherForest.php';

$wf   = new WeatherForest(237); // Porto Alegre, RS
$data = $wf->get();

header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

echo json_encode($data);
