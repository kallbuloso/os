<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {


        Blade::directive('hello', function ($expression) {
            list($greet, $name, $test) = explode(',', $expression);
        
            return "<?php echo {$greet} . ' ' . {$name} . ' ' . {$test}; ?>";
        });

        /*
                // Group Components
        Form::component('textGroup'      ,'components.formGroup.text', ['label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);

        // Form Components
        Form::component('textForm'      ,'components.form.text'      , ['col', 'label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);
        */

        Blade::directive('message_type', function($expression) {
            return "<input id=\"message_type\" type=\"hidden\" name=\"type_id\" value=\"{$expression}\">";
        }); 
        Blade::directive('message_type2', function($expression) {
            return "<input id=\"Minha_mensagem\" type=\"hidden\" name=\"type_id\" value=\"{$expression}\">";
        }); 
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
