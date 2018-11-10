<?php

namespace App\Providers;

use Form;
use Illuminate\Support\ServiceProvider;

class FormGroupServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Group Components
        Form::component('textGroup'      ,'components.formGroup.text', ['label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);

        // Form Components
        Form::component('textForm'      ,'components.form.text'      , ['col', 'label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);
        
        // Buttons
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
