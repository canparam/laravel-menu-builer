<?php

namespace Cannv\LaraMenuBuilder\Facades;

use Cannv\LaraMenuBuilder\Contracts\MenuFactoryInterface;
use Cannv\LaraMenuBuilder\Contracts\MenuInterface;
use Cannv\LaraMenuBuilder\Menu;
use Illuminate\Support\Facades\Facade;
/**
 * @method static MenuInterface createMenu(string $name)
 * @method static MenuInterface getMenu(string $name)
 *
 * @see MenuFactoryInterface
 */
class MenuBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cnv.menu.factory';
    }
}
