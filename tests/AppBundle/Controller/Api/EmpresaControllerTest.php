<?php

namespace tests\AppBundle\Controller\Api;

require "ApiTestCase.php";


class EmpresaControllerTest extends ApiTestCase
{

    public function testNewAction()
    {   
        $data = [
            'nombre' => 'EmpresaTest',
            'cuit'   => '20-34929950-0',
            'direccion' => 'Castillo 843'
        ];

        $response = $this->client->post('/api/empresa', [
            'body' => json_encode($data)
        ]);

        $this->assertEquals(201, $response->getStatusCode());
        $this->assertTrue($response->hasHeader('Location'));

        $finishedData = json_decode($response->getBody(true), true);
        $this->assertArrayHasKey('nombre', $finishedData);
    }
}