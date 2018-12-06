<?php

use App\Providers\Blade\DirectivesRepository;
use App\Providers\FormGroupServiceProvider;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |---------------------------------------------------------------------
    | @istrue / @isfalse
    |---------------------------------------------------------------------
    */

    'istrue' => function ($expression) {
        if (str_contains($expression, ',')) {
            $expression = DirectivesRepository::parseMultipleArgs($expression);

            return  "<?php if (isset({$expression->get(0)}) && (bool) {$expression->get(0)} === true) : ?>".
                    "<?php echo {$expression->get(1)}; ?>".
                    '<?php endif; ?>';
        }

        return "<?php if (isset({$expression}) && (bool) {$expression} === true) : ?>";
    },

    'endistrue' => function ($expression) {
        return '<?php endif; ?>';
    },

    'isfalse' => function ($expression) {
        if (str_contains($expression, ',')) {
            $expression = DirectivesRepository::parseMultipleArgs($expression);

            return  "<?php if (isset({$expression->get(0)}) && (bool) {$expression->get(0)} === false) : ?>".
                    "<?php echo {$expression->get(1)}; ?>".
                    '<?php endif; ?>';
        }

        return "<?php if (isset({$expression}) && (bool) {$expression} === false) : ?>";
    },

    'endisfalse' => function ($expression) {
        return '<?php endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @isnull / @isnotnull
    |---------------------------------------------------------------------
    */

    'isnull' => function ($expression) {
        return "<?php if (is_null({$expression})) : ?>";
    },

    'endisnull' => function ($expression) {
        return '<?php endif; ?>';
    },

    'isnotnull' => function ($expression) {
        return "<?php if (! is_null({$expression})) : ?>";
    },

    'endisnotnull' => function ($expression) {
        return '<?php endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @mix
    |---------------------------------------------------------------------
    */

    'mix' => function ($expression) {
        if (ends_with($expression, ".css'")) {
            return '<link rel="stylesheet" href="<?php echo mix('.$expression.') ?>">';
        }

        if (ends_with($expression, ".js'")) {
            return '<script src="<?php echo mix('.$expression.') ?>"></script>';
        }

        return "<?php echo mix({$expression}); ?>";
    },

    /*
    |---------------------------------------------------------------------
    | @style
    |---------------------------------------------------------------------
    */

    'style' => function ($expression) {
        if (! empty($expression)) {
            return '<link rel="stylesheet" href="{{ asset('.$expression.') }}">';
        }

        return '<style>';
    },

    'endstyle' => function () {
        return '</style>';
    },

    /*
    |---------------------------------------------------------------------
    | @script
    |---------------------------------------------------------------------
    */

    'script' => function ($expression) {
        if (! empty($expression)) {
            return '<script src="{{ asset('.$expression.') }}"></script>';
        }

        return '<script>';
    },

    'endscript' => function () {
        return '</script>';
    },

    /*
    |---------------------------------------------------------------------
    | @js
    |---------------------------------------------------------------------
    */

    'js' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        $variable = DirectivesRepository::stripQuotes($expression->get(0));

        return  "<script>\n".
                "window.{$variable} = <?php echo is_array({$expression->get(1)}) ? json_encode({$expression->get(1)}) : '\''.{$expression->get(1)}.'\''; ?>;\n".
                '</script>';
    },

    /*
    |---------------------------------------------------------------------
    | @inline
    |---------------------------------------------------------------------
    */

    'inline' => function ($expression) {
        $include = "//  {$expression}\n".
                   "<?php include public_path({$expression}) ?>\n";

        if (ends_with($expression, ".html'")) {
            return $include;
        }

        if (ends_with($expression, ".css'")) {
            return "<style>\n".$include.'</style>';
        }

        if (ends_with($expression, ".js'")) {
            return "<script>\n".$include.'</script>';
        }
    },

    /*
    |---------------------------------------------------------------------
    | @routeis
    |---------------------------------------------------------------------
    */

    'routeis' => function ($expression) {
        return "<?php if (fnmatch({$expression}, Route::currentRouteName())) : ?>";
    },

    'endrouteis' => function ($expression) {
        return '<?php endif; ?>';
    },

    'routeisnot' => function ($expression) {
        return "<?php if (! fnmatch({$expression}, Route::currentRouteName())) : ?>";
    },

    'endrouteisnot' => function ($expression) {
        return '<?php endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @instanceof
    |---------------------------------------------------------------------
    */

    'instanceof' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return  "<?php if ({$expression->get(0)} instanceof {$expression->get(1)}) : ?>";
    },

    'endinstanceof' => function () {
        return '<?php endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @typeof
    |---------------------------------------------------------------------
    */

    'typeof' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return  "<?php if (gettype({$expression->get(0)}) == {$expression->get(1)}) : ?>";
    },

    'endtypeof' => function () {
        return '<?php endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @dump, @dd
    |---------------------------------------------------------------------
    */

    'dump' => function ($expression) {
        return "<?php dump({$expression}); ?>";
    },

    'dd' => function ($expression) {
        return "<?php dd({$expression}); ?>";
    },

    /*
    |---------------------------------------------------------------------
    | @pushonce
    |---------------------------------------------------------------------
    */

    'pushonce' => function ($expression) {
        list($pushName, $pushSub) = explode(':', trim(substr($expression, 1, -1)));

        $key = '__pushonce_'.str_replace('-', '_', $pushName).'_'.str_replace('-', '_', $pushSub);

        return "<?php if(! isset(\$__env->{$key})): \$__env->{$key} = 1; \$__env->startPush('{$pushName}'); ?>";
    },

    'endpushonce' => function () {
        return '<?php $__env->stopPush(); endif; ?>';
    },

    /*
    |---------------------------------------------------------------------
    | @repeat
    |---------------------------------------------------------------------
    */

    'repeat' => function ($expression) {
        return "<?php for (\$iteration = 0 ; \$iteration < (int) {$expression}; \$iteration++): ?>";
    },

    'endrepeat' => function ($expression) {
        return '<?php endfor; ?>';
    },

    /*
     |---------------------------------------------------------------------
     | @data
     |---------------------------------------------------------------------
     */

    'data' => function ($expression) {
        $output = 'collect((array) '.$expression.')
            ->map(function($value, $key) {
                return "data-{$key}=\"{$value}\"";
            })
            ->implode(" ")';

        return "<?php echo $output; ?>";
    },

    /*
    |---------------------------------------------------------------------
    | @iconsi, @iconfa, @iconfas, @iconfar, @iconfal, @iconfab, @iconmdi, @iconglyph
    |---------------------------------------------------------------------
    */

    'iconsi' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="si si-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconfa' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="fa fa-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconfas' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="fas fa-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconfar' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="far fa-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconfal' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="fal fa-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconfab' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="fab fa-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconmdi' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="mdi mdi-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    'iconglyph' => function ($expression) {
        $expression = DirectivesRepository::parseMultipleArgs($expression);

        return '<i class="glyphicons glyphicons-'.DirectivesRepository::stripQuotes($expression->get(0)).' '.DirectivesRepository::stripQuotes($expression->get(1)).'"></i>';
    },

    /*
    |---------------------------------------------------------------------
    | @haserror
    |---------------------------------------------------------------------
    */

    'haserror' => function ($expression) {
        return '<?php if (isset($errors) && $errors->has('.$expression.')): ?>';
    },

    'endhaserror' => function () {
        return '<?php endif; ?>';
    },

    /*
    |-----------------------------------------------------------------------
    | Format date
    | @formatdate('2018-05-28','d/m/Y')
    |-----------------------------------------------------------------------
    */
    'formatdate' => function ($expression)
    {
        list($date, $format) = explode(',', $expression);
        return '<?php echo date_format(date_create($date), $format); ?>';
    },

    /*
    |-----------------------------------------------------------------------
    | buttons, inputs, etc 
    | @text
    |-----------------------------------------------------------------------
    */
    'text' => function ($expression)
    {
        $expression = DirectivesRepository::parseMultipleArgs($expression);
        //list($pushName, $pushSub) = explode(':', trim(substr($expression, 1, -1)));
        
        $col = DirectivesRepository::stripQuotes($expression->get(0));
        $label = DirectivesRepository::stripQuotes($expression->get(1));
        $name = DirectivesRepository::stripQuotes($expression->get(2));
        $value = DirectivesRepository::stripQuotes($expression->get(3));
        $attributes = $expression->get(4);
        $errors = '$errors';

        return "<?php echo Form::textGroup('{$col}', '{$label}', '{$name}', '{$value}', {$attributes}, {$errors}); ?>"; 
    },

    /*
    |-----------------------------------------------------------------------
    | buttons, inputs, etc 
    | @text
    |-----------------------------------------------------------------------
    */
    'text2' => function ($expression)
    {
        $expression = DirectivesRepository::parseMultipleArgs($expression);
        // list($label, $name, $value, $attributes[], $errors) = explode(',',str_replace(['(',')'], ' ', $expression));
        list($label, $name, $value, $attributes[], $errors) = explode(',', $expression);
        // $view = DirectivesRepository::viewPathFormGroup('text');
        // Form::component('textGroup', $view, ['label', 'type', 'name', 'value' => null, 'attributes' => [], $errors]);
        // Form::component('textGroup','components.formGroup.text', ['label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);
        // Form::textGroup('Título do Post 3' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors)
        return '<?php echo Form::textGroup(\'label\', \'text\', \'name\', \'value\', \'attributes[]\', $errors); ?>';
    },



    /*


    // Group Components
    Form::component('textGroup'      ,'components.formGroup.text', ['label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);

    // Form Components
    Form::component('textForm'      ,'components.form.text'      , ['col', 'label', 'type', 'name', 'value' => null, 'attributes' => [], 'errors']);

    <div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">
        <label >{{ $label }}</label>
        {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>

    <div class="col-xs-4">
        <label for="register1-password">Password</label>
        <div>
            <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
        </div>
    </div>

    public static function viewPathForm($expression)
    {
        $view = 'components.form.';
        return $view . $expression;
    }

    public static function viewPathFormGroup($expression)
    {
        $view = 'components.formGroup.';
        return $view . $expression;
    }

    */

];