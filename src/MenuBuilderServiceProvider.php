<?php

namespace Cannv\LaraMenuBuilder;

use Cannv\LaraMenuBuilder\Facades\MenuBuilder;
use Illuminate\Support\ServiceProvider;

class MenuBuilderServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('cnv.menu.factory', function ($app) {
            return new MenuFactory();
        });
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('MenuBuilder', MenuBuilder::class);
        $this->loadHelpers();
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'cnv_menu_builder');
    }

    protected function loadHelpers()
    {
        $helpersPath = __DIR__ . '/Helpers/helpers.php';
        if (file_exists($helpersPath)) {
            require_once $helpersPath;
        }
    }
}
