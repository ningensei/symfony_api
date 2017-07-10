<?php

namespace tests\AppBundle\Controller\Api;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ApiTestCase extends TestCase
{

    private static $staticClient;
    
    /**
     * @var Client
     */
    protected $client;

    public static function setUpBeforeClass()
    {
        self::$staticClient = new Client([
            'base_uri' => 'http://symfony_api.dev',
            'defaults' => [
                'exceptions' => false
            ]
        ]);
    }

    protected function setUp()
    {
        $this->client = self::$staticClient;
    }
}