<?php

namespace Rb\Solids;

interface ShopService
{
    public function serveBurger($quantity);
    public function serveFries($quantity);
    public function serveCombo($quantity, $fries);
}
