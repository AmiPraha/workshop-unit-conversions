<?php

namespace AmiPraha\WorkshopUnitConversions;

class Temperature
{
    protected float $celsius;

    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 3;
    }

    public function hello(): string
    {
        return 'hi';
    }
}
