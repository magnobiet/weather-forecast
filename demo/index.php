<?php

require_once '../src/WeatherForecast.php';

$wf   = new WeatherForecast(237); // Porto Alegre, RS
$data = $wf->get();

echo json_encode($data);
