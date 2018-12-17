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
        Form::component('textGroup','components.formGroup.text', ['col', 'label', 'name', 'value' => null, 'attributes' => [], 'errors']);
        Form::component('inputGroup','components.formGroup.input', ['type', 'params', 'errors']);
        // Form::component('selectGroup','components.formGroup.select', ['type', 'params', 'errors']);

        // Form Components
        Form::component('textForm','components.form.text', ['col', 'label', 'name', 'value' => null, 'attributes' => [], 'errors']);

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
