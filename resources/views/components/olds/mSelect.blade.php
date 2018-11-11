{{--  Multi Select  --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        {!! Form::select($name, $optionValue, $value ?? null, array_merge(['class' => 'form-control select2', 'multiple' => 'multiple'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::selectGroup('6','title', 'Values[]', value, ['data-placeholder' => 'Título do post'], 'Título do Post *' , $errors) }} --}}

{{-- 
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/select2/dist/css/select2.min.css') }}">
    <!-- Select2 -->
    <script src="{{ asset('adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
--}}