{{-- text  --}}
<div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label >{{ $label }}</label>
    {!! Form::$type($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  Usage  --}}
{{-- 
<div class="form-group">
    {{ Form::textGroup('4', 'Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors)
    {{ Form::textGroup('4', 'Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors)
</div>
    --}}