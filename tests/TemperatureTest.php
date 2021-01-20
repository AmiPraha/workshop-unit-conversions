<?php

namespace Amipraha\AmiPrahaWorkshopUnitConversions\Tests;

use AmiPraha\WorkshopUnitConversions\Temperature;
use PHPUnit\Framework\TestCase;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_convert_celsius_to_fahrenheit()
    {
        $temperature = new Temperature(15);

        $this->assertEquals(59.0, $temperature->toFahrenheit());
    }
}
