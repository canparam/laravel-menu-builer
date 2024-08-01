<?php

namespace Cannv\LaraMenuBuilder\Facades;

use Illuminate\Support\Facades\Facade;
/**
 * @method static \Cannv\LaraMenuBuilder\Menu createMenu(string $name)
 * @method static \Cannv\LaraMenuBuilder\Menu getMenu(string $name)
 *
 * @see \Cannv\LaraMenuBuilder\MenuFactory
 */
class MenuBuilder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'cnv.menu.factory';
    }
}
