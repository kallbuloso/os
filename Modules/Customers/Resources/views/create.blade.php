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

                                    @formOpen('class' => 'form-horizontal push-5-t', 'route' => ['customerSave'], 'onsubmit' => 'return false;')
                                        @truncate($trunc,'250')
                                        <div class="form-group">
                                        </div>
                                        <div class="form-group">
                                            @text(['label' => 'Nome do texto', 'name' => 'title', 'value' => '',
                                                    'attributes' => ['placeholder' => 'Seu Nome', 'require' => 'require']])
                                        </div>
                                        <div class="form-group">
                                            @textArea(['col' => '6', 'label' => 'TextArea', 'name' => 'text','value' => null,
                                                    'attributes' => ['placeholder' => 'placeholder-text', 'id' => 'id', 'rows' => '10', 'cols' => '54',  'require' => 'require']])
                                            @datetime(['col' => '6', 'label' => 'date', 'name' => 'date','value' => null,
                                                    'attributes' => ['placeholder' => 'placeholder-date', 'require' => 'require']])
                                        </div>
                                        <div class="form-group">  
                                            <h2>Checkbox</h2>                                        
                                            @checkbox(['col'=>'2','name'=>'checkbox','value'=>'Content-Checkbox','checked'=>true,'css'=>'primary','require'=>'require'])
                                        </div>
                                        <div class="form-group">
                                            <h2>Radio</h2>
                                            @radio(['col'=>'2','name'=>'radio','value'=>'Content-radio','checked'=>true,'css'=>'primary','require'=>'require'])
                                            @radio(['col'=>'2','name'=>'radio','value'=>'Content-radio','checked'=>false,'css'=>'primary','require'=>'require'])
                                        </div>
                                        <div class="form-group col-xs-12">
                                                @button(['value'=>'<i class="fa fa-home"></i>','attributes'=>['class'=>'btn btn-default']])
                                                @button(['value'=>'Primary','attributes'=>['class'=>'btn btn-primary']])
                                                @button(['value'=>'Info','attributes'=>['class'=>'btn btn-info']])
                                                @button(['value'=>'Success','attributes'=>['class'=>'btn btn-success']])
                                                @button(['value'=>'Warning','attributes'=>['class'=>'btn btn-warning']])
                                                @button(['value'=>'Danger','attributes'=>['class'=>'btn btn-danger']])
                                            {{--  </div>  --}}
                                        </div>
                                    @formClose()
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
