{{-- Email  --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        {!! Form::textarea($name, $value ?? null, array_merge([ 'rows' => '3', 'cols' => '54','class' => 'form-control'], $attributes)) !!}
        <p>Caracteres restantes <span id="chars"></span></p>
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::textGroup('6','title', '', ['placeholder' => 'Título do post'], 'Título do Post *' , $errors) }} --}}