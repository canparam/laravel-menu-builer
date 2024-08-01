<?php

namespace Cannv\LaraMenuBuilder;

use Cannv\LaraMenuBuilder\Contracts\MenuFactoryInterface;

class MenuFactory implements MenuFactoryInterface
{
    private array $items = [];

    public function createMenu(string $name)
    {
        $menu = new Menu($name);
        $this->items[$name] = $menu;
        return $menu;
    }

    public function getMenu(string $name)
    {
        return $this->items[$name] ?? null;
    }

}
