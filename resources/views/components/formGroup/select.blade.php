
<div class="col-xs-{{ array_get($params, 'col', '12') }} {{ $errors->has(array_get($params, 'name')) ? 'has-error' : '' }}">
    {{ Form::label(array_get($params, 'name'),array_get($params, 'label')) }}
    {{ Form::select(
        array_get($params, 'name'),
        array_get($params, 'arrayOptions') ? array_merge(array_get($params, 'arrayOptions')) : [],
        array_get($params, 'selected') ? array_get($params, 'selected') : null,
        array_get($params, 'optionsAttributes') ? array_merge(['class' => 'form-control'], array_get($params, 'optionsAttributes')) : ['class' => 'form-control'] )
    }}
    <small class="text-danger">{{ $errors->first(array_get($params, 'name')) }}</small>
</div>
