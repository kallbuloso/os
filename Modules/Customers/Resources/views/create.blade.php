@extends('layouts.backend')

@section('title_header', config('customers.name'))                       {{-- Título do cabeçalho --}}
@section('pageTitle', config('customers.name'))                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Adicionar novo Clientes')    {{-- Subtítulo/texto ta página atual --}}
@section('pageBgImage', asset('assets/img/photos/photo3@2x.jpg'))  {{-- Imagen do fundo do título da página atual --}}

@push('stylesheet')

@endpush

@section('content')
                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Bootstrap Register -->
                            <div class="block">
                                <div class="block-header">
                                    <h3 class="block-title">Novo Cliente</h3>
                                </div>
                                <div class="block-content">
                                    {{--  {!! Form::open(['class' => "form", 'method' => 'PUT','route' => ['postUpdate', $post]]) !!}  --}}

                                    {!! Form::open(['class' => 'form-horizontal push-5-t', 'route' => ['customerSave'], 'method' => 'post', 'onsubmit' => 'return false;']) !!}
                                    
                                    {{ Form::textGroup('Pessoa' , 'select', 'sel', ['', 'Masculino', 'Feminino', 'Outros'], ['placeholder' => 'Título do post'], $errors) }}
                                    <div class="form-group">
                                        {{ Form::textForm('4', 'Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }}
                                        {{ Form::textForm('4', 'Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }}
                                    </div>
                                        {{ Form::textGroup('Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors) }}


                                        <div class="form-group">
                                            <label class="col-xs-12" for="register1-password">Password</label>
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                                            </div>
                                        </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                    </div>
                </div>
                <!-- END Page Content -->

@endsection


@push('scripts')

@endpush