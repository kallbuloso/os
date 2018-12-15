@extends('layouts.backend')

@section('title_header', config('customers.name'))                       {{-- Título do cabeçalho --}}
@section('pageTitle', config('customers.name'))                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Adicionar novo Cliente')    {{-- Subtítulo/texto ta página atual --}}
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

                                    @formopen('class' => 'form-horizontal push-5-t', 'route' => ['customerSave'], 'onsubmit' => 'return false;')
                                       <p> @truncate($trunc,'250')</p>
                                        <div class="form-group">
                                            @select(['col' => '4',
                                                'label' => 'label',
                                                'name' => 'select',
                                                'arrayOptions' => $cats,
                                                'selectedAttributes' => '',
                                                'optionsAttributes' => [
                                                    'placeholder' => 'Seu Nome',
                                                    'require' => 'require']])
                                        </div>
                                        <div class="form-group">
                                            @text(['label' => 'Nome do texto', 'name' => 'title', 'value' => '',
                                                'attributes' => ['placeholder' => 'Seu Nome', 'require' => 'require']])
                                                {{-- @text(['col' => '4', 'label' => 'Segundo label ', 'name' => 'name', 'value' => null,
                                                'attributes' => ['placeholder' => 'placeholder', 'require' => 'require']]) --}}
                                            {{-- @text(['col' => '4', 'name' => 'firstname']) --}}
                                        </div>
                                        <div class="form-group"></div>

                                    @formclose()
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
