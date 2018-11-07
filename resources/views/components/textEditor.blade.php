{{-- Editor  --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        {!! Form::textarea($name, $value ?? null, array_merge([ 'rows' => '3', 'cols' => '4','class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{--  {{ Form::textEditorGroup('12','editor', ['placeholder' => 'Faça um breve resumo da sua publicação...'], 'Resumo da Publicação' , $errors) }}  --}}

{{--  <div class="col-lg-{{ $col }} {{ $errors->has($name) ? 'has-error' : '' }}">
        {!! Form::textarea($name, $value, array_merge([ 'rows' => '4', 'cols' => '4','class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
</div>  --}}