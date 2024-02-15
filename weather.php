<?php

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = array(
    'id' => 703448,
    'appid' => '6ebae21178ed60bf1ec93fe0942fff05',
    'units' => 'metric',
    'lang' => 'en'
);

$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url. '?'. http_build_query($options));

$response = curl_exec($ch);
$data = json_decode($response, true);
curl_close($ch);

echo '<pre>';
print_r($data);






