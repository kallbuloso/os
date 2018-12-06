{{-- text Group --}}
{{--  <div class="form-group {{ $errors->has('$name') ? 'has-error' : '' }}">  --}}
    <div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">            
        <label>{{ $label }}</label>
        {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
{{--  </div>
        <div class="col-xs-4">            
                <label>{{ $label }}</label>
            {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
            <small class="text-danger">{{ $errors->first($name) }}</small>
        </div>
        <div class="col-xs-4">            
                <label>{{ $label }}</label>
            {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
            <small class="text-danger">{{ $errors->first($name) }}</small>
        </div>  --}}
{{--  Usage  --}}
{{-- {{ Form::textForm('Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }} --}}
