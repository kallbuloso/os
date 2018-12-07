{{-- text Group --}}
    <div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">            
        <label>{{ $label }}</label>
        {!! Form::$type($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
{{--  Usage  --}}
{{-- 
    @email('4', 'Novo email3', 'email2', , ['placeholder' => 'Seu email'])    
--}}
