<?php

namespace Rb\Solids;

require __DIR__.'./../vendor/autoload.php';

$square = new Square(10, 20);
$squareTwo = new Square(10, 30);
$cirlce = new Circle(10);
$triangle = new Triangle(10, 30);
$squares = [
    $square,
    $squareTwo,
    $cirlce,
    $triangle
];
$areaCalculator = new AreaCalculator();

echo $areaCalculator->calculate($squares);
