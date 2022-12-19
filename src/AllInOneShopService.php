<?php

namespace Rb\Solids;

class AllInOneShopService implements ShopService
{
    public function serveBurger($quantity)
    {
        echo "Serving order of " . $quantity . " burgers";
    }

    public function serveFries($quantity)
    {
        echo "Serving order of " . $quantity . " fries";
    }

    public function serveCombo($quantity, $fries)
    {
        echo "Serving order of " . $quantity . " combo";
    }
}
