{{-- Lg text  --}}
<div class="col-md-{{ $col }} form-group {{ $errors->has('$name') ? 'has-error' : '' }}">
    <div>
        <label>{{ $label }}</label>
        {{--  <div class="input-group text">
            <div class="input-group-addon">
                <i class="fa fa-file-text-o"></i>
            </div>  --}}
            {!! Form::text($name, $value ?? null, array_merge(['class' => 'form-control'], $attributes)) !!}
            <small class="text-danger">{{ $errors->first($name) }}</small>
        {{--  </div>  --}}
    </div>
</div>
{{--  Usage  --}}
{{-- {{ Form::textGroup('6','title', '', ['placeholder' => 'Título do post'], 'Título do Post *' , $errors) }} --}}

<div class="form-group">
    <label class="col-xs-12" for="register1-email">Email</label>
    <div class="col-xs-12">
        <input class="form-control" type="email" id="register1-email" name="register1-email" placeholder="Enter your email..">
    </div>
</div>