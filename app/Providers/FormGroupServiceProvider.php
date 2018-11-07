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
        Form::component('textGroup'      ,'components.text'      , ['col','name', 'value' => null, 'attributes' => [], 'label', 'errors']);
        Form::component('emailGroup'     ,'components.email'     , ['col','name', 'value' => null, 'attributes' => [], 'label', 'errors']);
        Form::component('dateGroup'      ,'components.datepiker' , ['col','name', 'value' => null, 'label', 'errors']);
        Form::component('selectGroup'    ,'components.select'    , ['col','name', 'optionValue'  , 'value' => null, 'attributes' => [], 'label', 'errors']);
        Form::component('mSelectGroup'   ,'components.mSelect'   , ['col','name', 'optionValue'  , 'value' => null, 'attributes' => [], 'label', 'errors']);
        Form::component('textAreaGroup'  ,'components.textArea'  , ['col','name', 'value' => null, 'attributes' => [], 'label', 'errors']);
        Form::component('textEditorGroup','components.textEditor', ['col','name', 'value' => null, 'attributes' => [], 'label', 'errors']);
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
