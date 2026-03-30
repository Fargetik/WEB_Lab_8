<?php

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;

class ApiTest extends TestCase
{
   public function testRequest()
   {
       $client = new Client([
           'base_uri' => $_ENV["DB_BASE_URL"]
       ]);

       $response = $client->get('/index.php');

       $this->assertEquals(200, $response->getStatusCode());
   }
}
