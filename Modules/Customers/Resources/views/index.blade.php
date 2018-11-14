@extends('layouts.backend')

@section('title_header', config('customers.name'))                       {{-- Título do cabeçalho --}}
@section('pageTitle', config('customers.name'))                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Dashboard dos Clientes')    {{-- Subtítulo/texto ta página atual --}}
@section('pageBgImage', asset('assets/img/photos/photo3@2x.jpg'))  {{-- Imagen do fundo do título da página atual --}}

@push('stylesheet')

@endpush

@section('content')
                <!-- Stats -->
                <div class="content bg-white border-b">
                    <div class="row items-push text-uppercase">
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Total</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Geral de Clientes</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html"> {{ $custFindCount }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Cadastrados</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Hoje</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html"> {{ $custFindDay }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Cadastrados</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Esta semana</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">{{ $custFindWeek }}</a>
                        </div>
                        <div class="col-xs-6 col-sm-3">
                            <div class="font-w700 text-gray-darker animated fadeIn">Cadastrados</div>
                            <div class="text-muted animated fadeIn"><small><i class="si si-calendar"></i> Este ano</small></div>
                            <a class="h2 font-w300 text-primary animated flipInX" href="base_comp_charts.html">{{ $custFindYear }}</a>
                        </div>
                        {{--  'custFindDay',
                        'custFindWeek',
                        'custFindYear'  --}}
                    </div>
                </div>
                <!-- END Stats -->

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="block">
                                <div class="block-header">
                                    <h3 >Filtro dos Clientes</h3>
                                </div>
                                <div class="block-content">
                                    <h3 class="block-title"> Status</h3>
                                    <ul class="nav nav-pills nav-stacked push">
                                        <li> {{-- <li class="active"> --}}
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindActive }}</span><i class="fa fa-fw fa-inbox push-5-r"></i> Ativos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindAtent }}</span><i class="fa fa-fw fa-star push-5-r"></i> Atenção
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindInactive }}</span><i class="fa fa-fw fa-inbox push-5-r"></i> Inativos
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindBlock }}</span><i class="fa fa-fw fa-star push-5-r"></i> Bloqueados
                                            </a>
                                        </li>
                                    </ul>

                                    <h3 class="block-title"> Pessoa</h3>
                                    <ul class="nav nav-pills nav-stacked push">
                                        <li > {{-- class="active" --}}
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindFis }}</span><i class="fa fa-fw fa-inbox push-5-r"></i> Física
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindJur }}</span><i class="fa fa-fw fa-star push-5-r"></i> Jurídica
                                            </a>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">Gênero</h3>
                                    <ul class="nav nav-pills nav-stacked push">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindMas }}</span><i class="fa fa-fw fa-star push-5-r"></i> Marculino
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindFem }}</span><i class="fa fa-fw fa-star push-5-r"></i> Feminino
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">
                                                <span class="badge pull-right">{{ $custFindOrd }}</span><i class="fa fa-fw fa-star push-5-r"></i> Outros
                                            </a>
                                        </li>
                                    </ul>
                                    <ul class="list-group">

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!-- Bootstrap Register -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        {{-- <li> --}}
                                            <button type="button" class="btn btn-xs btn-success" data-toggle="tooltip" title="Novo Cliente"><i class="fa fa-plus"></i> Novo Cliente</button>
                                        {{-- </li> --}}
                                        {{-- <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="content_toggle"></button>
                                        </li> --}}
                                    </ul>
                                    <h3 class="block-title">Lista de Clientes</h3>
                                </div>
                                <div class="block-content">
                                    <table class="table table-condensed">
                                        <thead>
                                            <tr>
                                                <th class="text-center" style="width: 50px;">Id</th>
                                                <th>Nome</th>
                                                <th class="hidden-xs" style="width: 15%;">Pessoa</th>
                                                <th class="hidden-xs" style="width: 15%;">Status</th>
                                                <th class="text-center" style="width: 100px;">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($customers as $customer)
                                            <tr>
                                                <td class="text-center">{{ $customer->id }}</td>
                                                <td>{{ $customer->name }}</td>
                                                <td>
                                                    @switch($customer->tipe)
                                                        @case(0)
                                                            Física
                                                            @break
                                                        @default
                                                            Jurídica
                                                    @endswitch
                                                </td>
                                                <td class="hidden-xs">
                                                    @switch($customer->status)
                                                        @case(0)
                                                            <span class="label label-danger">Bloqueado</span>
                                                            @break
                                                        @case(1)
                                                            <span class="label label-success">Ativo</span>
                                                            @break
                                                        @case(2)
                                                            <span class="label label-warning">Inativo</span>
                                                            @break
                                                        @default
                                                            <span class="label label-info">Atenção</span>                                                            
                                                    @endswitch                                                    
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Ver Cliente"><i class="fa fa-eye"></i></button>
                                                        <button class="btn btn-xs btn-info" type="button" data-toggle="tooltip" title="Editar Cliente"><i class="fa fa-pencil"></i></button>
                                                        <button class="btn btn-xs btn-danger" type="button" data-toggle="tooltip" title="Remover Cliente"><i class="fa fa-times"></i></button>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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