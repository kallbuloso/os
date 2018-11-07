{{-- E-mail --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
            <div class="input-group email">
                <div class="input-group-addon">
                    <i class="fa fa-envelope-o"></i>
                </div>
            {!! Form::email($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
            <small class="text-danger">{{ $errors->first($name) }}</small>
        </div>
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::emailGroup('6','title', '', ['placeholder' => 'Título do post'], 'Título do Post *' , $errors) }} --}}