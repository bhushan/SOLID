<?php

namespace Rb\Solids;

class Square implements Shape
{
    public float|int $width;
    public float|int $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float|int
    {
        return $this->width * $this->height;
    }
}
