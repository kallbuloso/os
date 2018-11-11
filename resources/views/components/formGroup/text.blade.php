{{-- text Group --}}
<div class="form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label class="col-xs-12">{{ $label }}</label>
    <div class="col-xs-12">            
        {!! Form::$type($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::textForm('Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }} --}}
