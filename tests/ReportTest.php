<?php

namespace App\Tests;

use ApiPlatform\Core\Bridge\Symfony\Bundle\Test\ApiTestCase;
use Hautelook\AliceBundle\PhpUnit\RecreateDatabaseTrait;

class ReportTest extends ApiTestCase
{
    public function testGetReport(): void
    {
        $client = static::createClient();
        $client->disableReboot();
        $res = $client->request('GET','/report/1');
        echo $res->getContent();
        $this->assertResponseIsSuccessful();
        //this->assertJsonContains();
    }
}