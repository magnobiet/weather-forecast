<?php

require_once 'WeatherForecast.php';

$wf   = new WeatherForecast(237); // Porto Alegre, RS
$data = $wf->get();

header('Content-type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');

echo json_encode($data);
