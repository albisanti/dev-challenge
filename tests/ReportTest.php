<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;

class ReportTest extends ApiTestCase
{
    /**
     * Testing if the URL returns the JSON with all the transactions
     * @return void
     * @throws \Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface
     */
    public function testGetReport(): void
    {
        $client = static::createClient();
        $res = $client->request('GET','/report/1');
        $this->assertResponseIsSuccessful();
        $this->assertJsonContains([
            'transactions' => []
        ]);
    }
}