<?php

include __DIR__ . '/../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->get('https://ithillel.ua/');
echo $response->getBody()->getContents();