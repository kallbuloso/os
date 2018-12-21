<?php

namespace App\Providers\Blade;

use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerDirectives();
        $this->registerCustonsDirectives();
    }

    /**
     * Register all directives.
     *
     * @return void
     */
    public function registerDirectives()
    {
        $directives = require __DIR__.'/BladeDirectives.php';
        DirectivesRepository::register($directives);
    }

    /**
     * Register Custons Directives
     * 
     * @return void
     */
    public function registerCustonsDirectives()
    {
        $directives = require __DIR__.'/BladeCustonsDirectives.php';
        DirectivesRepository::register($directives);
    }
}
