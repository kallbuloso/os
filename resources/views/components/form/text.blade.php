

{{-- text  --}}
<div class="col-xs-{{ $col }} {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label >{{ $label }}</label>
    {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
    <small class="text-danger">{{ $errors->first($name) }}</small>
</div>

{{--  <div class="col-xs-4">
    <label for="register1-password">12345</label>
    <div>
        <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password...">
    </div>
</div>  --}}

{{--  Usage  --}}
{{-- 
<div class="form-group">
    {{ Form::textGroup('4', 'Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors)
    {{ Form::textGroup('4', 'Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors)
</div>
    --}}

{{-- text Group --}}
{{-- <div class="form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <label class="col-xs-12">{{ $label }}</label>
    <div class="col-xs-12">            
        {!! Form::$type($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
        <small class="text-danger">{{ $errors->first($name) }}</small>
    </div>
</div> --}}
{{--  Usage  --}}
{{-- {{ Form::textForm('Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }} --}}
