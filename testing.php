<?php

require __DIR__.'/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
	'base_uri' => 'http://symfony_api.dev',
	'defaults' => [
		'exceptions' => false,
	]
]);

$data = [
	'nombre' => 'Apple',
	'cuit'   => '20-34929950-0',
	'direccion' => 'Castillo 843'
];

$response = $client->post('/api/empresa', [
	'body' => json_encode($data)
]);

echo "\n";
echo "status_code => ".$response->getStatusCode();
echo "\n";
echo "body => ".$response->getBody();
echo "\n";
echo "\n";

