<div class="col-xs-{{ array_get($params, 'col', '12') }} {{ $errors->has(array_get($params, 'name')) ? 'has-error' : '' }}">
    {{ Form::label(array_get($params, 'name'),array_get($params, 'label')) }}
    {{ Form::$type(
        array_get($params, 'name'),
        array_get($params, 'value') ? array_get($params, 'value') : null,
        array_merge(['class' => 'form-control'], array_get($params, 'attributes')))
    }}
    <small class="text-danger">{{ $errors->first(array_get($params, 'name')) }}</small>
</div>
