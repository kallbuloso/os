{{-- E-mail --}}
<div class="form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label class="col-xs-12">{{ $label }}</label>
    <div class="col-xs-12">
        {!! Form::email($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::emailGroup('6','title', '', ['placeholder' => 'Título do post'], 'Título do Post *' , $errors) }} --}}