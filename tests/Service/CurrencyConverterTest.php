<?php

namespace App\Tests\Service;

use App\Service\CurrencyConverter;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

final class CurrencyConverterTest extends KernelTestCase {

    public function testCalculateEurFromUsd() {

        self::bootKernel();
        $container = static::getContainer();
        $converter = $container->get(CurrencyConverter::class);

        $result = $converter->calculate(22.99,'USD','EUR');
        $this->assertIsFloat($result);
        $result = $converter->calculate(15.78,'EUR','EUR');
        $this->assertEquals(15.78,$result);
    }
}