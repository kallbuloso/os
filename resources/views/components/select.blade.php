{{--  Select  --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        {!! Form::select($name, $optionValue, $value ?? null, array_merge(['class' => 'form-control select'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::selectGroup('4','categories', $categories, $post->category_id ?? null, ['placeholder' => 'Selecione uma categoria...'], 'Categoria *' , $errors) }} --}}