<?php
require 'vendor/autoload.php';

use GuzzleHttp\Client;

// $client = new Client();

$client = new GuzzleHttp\Client(['base_uri' => 'http://lifelock.com/reviews']);

// $res = $client->request('GET', 'http://httpbin.org/get');
$res = $client->request('GET', 'reviews');

echo '<pre>';
var_dump($client);

?>