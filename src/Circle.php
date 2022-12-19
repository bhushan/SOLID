<?php

namespace Rb\Solids;

class Circle implements Shape
{
    public float|int $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area(): float|int
    {
        return pi() * $this->radius * $this->radius;
    }
}
