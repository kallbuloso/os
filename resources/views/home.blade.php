@extends('layouts.backend')

@section('title_header', 'Dashboard')                       {{-- Título do cabeçalho --}}
@section('pageTitle', 'Dashboard')                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Bem vindo '. Auth::user()->name)    {{-- Subtítulo/texto ta página atual --}}
@section('pageBgImage', 'assets/img/photos/photo3@2x.jpg')  {{-- Imagen do fundo do título da página atual --}}


@section('content')
                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Today</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">300</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Product Sales</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> This Month</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">8,790</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Total Earnings</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 93,880</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Average Sale</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> All Time</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">$ 270</a>
                        </div>
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-primary">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Bootstrap</h3>
                                </div>
                                <div class="block-content">
                                    <form class="form-horizontal push-5-t" action="base_forms_premade.html" method="post" onsubmit="return false;">
                                        {{ Form::textGroup('Título do Post *' , 'text', 'email', null, ['placeholder' => 'Título do post'], $errors) }}

                                        <div class="form-group">
                                            {{ Form::textForm('4', 'Título do Post 2' , 'email','firstname', null, ['placeholder' => 'Título do post'], $errors) }}
                                            {{--  {{ Form::textForm('4', 'title', null, ['placeholder' => 'Título do post'], 'Título do Post 2' , $errors) }}
                                            {{ Form::textForm('4', 'title', null, ['placeholder' => 'Título do post'], 'Título do Post 2' , $errors) }}  --}}
                                        </div>

                                        {{--  <div class="form-group">

                                        </div>  --}}
                                        <div class="form-group">
                                            <label class="col-xs-12" for="register1-password">Password</label>
                                            <div class="col-xs-12">
                                                <input class="form-control" type="password" id="register1-password" name="register1-password" placeholder="Enter your password..">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                    </div>
        

                </div>
                <!-- END Page Content -->

@endsection

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --}}