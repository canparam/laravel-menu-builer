<?php

namespace Cannv\LaraMenuBuilder;

use Cannv\LaraMenuBuilder\Contracts\MenuFactoryInterface;

class MenuFactory implements MenuFactoryInterface
{

    public function createMenu(string $name)
    {
        return new Menu($name);
    }
}
