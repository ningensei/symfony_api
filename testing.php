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

$id = 1;

// 1) POST an empresa resource
$response = $client->post('/api/empresa', [
	'body' => json_encode($data)
]);


// 2) GET an empresa resource
$response = $client->get('/api/empresa/'.$id);

echo "\n";
echo "status_code => ".$response->getStatusCode();
echo "\n";
echo "body => ".$response->getBody();
echo "\n";
echo "\n";

