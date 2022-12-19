<?php

namespace Rb\Solids;

class Triangle implements Shape
{
    public float|int $base;
    public float|int $height;

    public function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    public function area()
    {
        return 0.5 * ($this->base * $this->height);
    }
}
