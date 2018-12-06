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

                                    {!! Form::open(['class' => 'form-horizontal push-5-t', 'route' => ['customerSave'], 'method' => 'post', 'onsubmit' => 'return false;']) !!}
                                    {{-- @truncate('adsdas adas aggjhjs dasd asdhjkhkj', 30) <Br></Br> --}}
                                    {{-- {{ Form::textGroup('Pessoa' , 'select', 'sel', ['', 'Masculino', 'Feminino', 'Outros'], ['placeholder' => 'Título do post'], $errors) }} --}}
                                 
                                    <p>
                                        
                                        {{--  @vary('foo', 'bar')  --}}
                                    </p>
                                   <div class="form-group">
                                        @text('6', 'Meu novo text', 'title', '', ['placeholder' => 'Título do postes'])

                                        {{--  {{ Form::textForm('4', 'Título do Post 1' , 'firstname', null, ['placeholder' => 'Título do post'], $errors) }}  --}}
                                    </div>
                                         {{--  {{ Form::textForm('4', 'Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }} 
                                        {{ Form::textGroup('Título do Post 3' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors) }}


                                        <div class="form-group">
                                            
                                            <div class="col-xs-4">
                                                <label for="register1-password">Password</label>
                                                <div>
                                                    <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label for="register1-password">Password</label>
                                                <div>
                                                    <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                                <label for="register1-password">Password</label>
                                                <div>
                                                    <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                                                </div>
                                            </div>
                                        </div>  --}}
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