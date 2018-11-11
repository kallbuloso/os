{{--  Data  --}}
{{-- 
    <!-- stylesheet bootstrap datepicker -->
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">

    <!-- script bootstrap datepicker -->
    <script src="{{ asset('adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
--}}

<div class="col-md-{{ $col }} form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        <div class="input-group date">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            {!! Form::input('text',$name, $value ? $value->format('d/m/Y') : null, ['class' => 'form-control datepicker']) !!}
            <small class="text-danger">{{ $errors->first($name) }}</small>
        </div>
    </div>
</div>