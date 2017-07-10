<?php

require __DIR__.'/vendor/autoload.php';

$client = new \GuzzleHttp\Client([
	'base_uri' => 'http://symfony_api.dev',
	'defaults' => [
		'exceptions' => false,
	]
]);

$data = [
	'nombre' => 'EmpresaTest',
	'cuit'   => '20-34929950-0',
	'direccion' => 'Castillo 843'
];

$id = 1;

// 1) POST an empresa resource
$response = $client->post('/api/empresa', [
	'body' => json_encode($data)
]);

$location = getHeader($response, 'Location');

// 2) GET an empresa resource
$response = $client->get($location);

getResponse();


function getResponse() {
	echo "\n\n";
	echo $response->getBody();
	echo "\n\n";
}


function getHeader($response, $header) {
	return $response->getHeaders()[$header][0];
}