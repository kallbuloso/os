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
}
