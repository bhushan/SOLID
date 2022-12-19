<?php

namespace Rb\Solids;

class BurgerShopService implements ShopService
{
    public function serveBurger($quantity)
    {
        echo "Serving order of " . $quantity . " burgers";
    }

    public function serveFries($quantity)
    {
        throw new \Exception("No fries in burger only order");
    }

    public function serveCombo($quantity, $fries)
    {
        throw new \Exception("No combo in burger only order");
    }
}
