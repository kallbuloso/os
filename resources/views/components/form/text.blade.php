{{-- text  --}}
<div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label >{{ $label }}</label>
    {!! Form::$type($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>
{{--  Usage  --}}
{{-- {{ Form::textGroup('Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors) --}}