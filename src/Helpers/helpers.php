<?php

use Cannv\LaraMenuBuilder\Facades\MenuBuilder;
use Cannv\LaraMenuBuilder\MenuFactory;

if (!function_exists('render_menu_item')) {
    function render_menu_item(string $name): string
    {
        $menu = MenuBuilder::getMenu("admin_menu");
        if (empty($menu)) {
            return '';
        }
        return view('cnv_menu_builder::menu', ['menu' => $menu])->render();
    }
}
