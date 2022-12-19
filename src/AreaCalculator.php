<?php

namespace Rb\Solids;

class AreaCalculator
{
    public function calculate($shapes): float|int
    {
        $totalArea = 0;
        foreach ($shapes as $shape) {
            $totalArea += $shape->area();
        }

        return $totalArea;
    }
}
