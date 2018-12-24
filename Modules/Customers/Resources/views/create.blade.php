@extends('layouts.backend')

@section('title_header', config('customers.name'))                       {{-- Título do cabeçalho --}}
@section('pageTitle', config('customers.name'))                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Adicionar novo Cliente')    {{-- Subtítulo/texto ta página atual --}}
@section('pageBgImage', asset('assets/img/photos/photo3@2x.jpg'))  {{-- Imagen do fundo do título da página atual --}}

@push('stylesheet')

@endpush

@section('content')
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <!-- Page Content -->
        <div class="content">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Bootstrap Register -->
                    <div class="block">
                        {{-- <div class="block-header">
                            <h3 class="block-title">Cadastrar novo Cliente</h3>
                        </div> --}}
                        <div class="block-content">
                                <h3 class="block-title">Dados pessoais</h3><p></p>
                            @formOpen('class' => 'form-horizontal push-5-t', 'route' => ['customerSave'])
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            @select(['col'=>'12','label'=>'Pessoa','name'=>'type','arrayOptions'=>['0'=>'Física','1'=>'Jurídica'],'selected'=>null,
                                                    'optionsAttributes'=>['require'=>'require']])
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            @select(['col'=>'12','label'=>'Status','name'=>'status',
                                                'arrayOptions'=>[
                                                    '0'=>'Ativo','1'=>'Inativo','2'=>'Bloqueado','3'=>'Atenção']
                                                ,'selected'=>'0'])
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Nome Completo','name'=>'name','value'=>null,
                                                'attributes'=>['placeholder'=>'Seu Nome Completo','require'=>'require']])
                                        </div>
                                    </div>                
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                        <div class="form-group">
                                            @select(['col'=>'12','label'=>'Sexo','name'=>'gender','arrayOptions'=>['0'=>'Masculino','1'=>'Feminino','2'=>'Outros'],
                                                    'optionsAttributes'=>['require'=>'require']])
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            @dateTimePicker(['col'=>'12','label'=>'Nascimento','name'=>'birtday','value'=>null,
                                                    'attributes'=>['id'=>'datetimepicker']])
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Apelido','name'=>'nickname','value'=>null,
                                                    'attributes'=>['placeholder'=>'Seu Apelido']])
                                        </div>
                                    </div>  
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Contato','name'=>'contact','value'=>null,
                                                    'attributes'=>['placeholder'=>'Contato']])                                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h3 class="block-title">Documentos</h3><p></p>
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'CPF/CNPJ','name'=>'cpf_cnpj','value'=>null,
                                                    'attributes'=>['placeholder'=>'CPF / CNPJ']])
                                        </div>
                                    
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'RG/Insc. Estadual','name'=>'rg_insc_est','value'=>null,
                                                    'attributes'=>['placeholder'=>'RG / Insc. Estadual','require'=>'require']])
                                        </div>
                                    
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Insc. Municipal','name'=>'insc_mun','value'=>null,
                                                    'attributes'=>['placeholder'=>'Insc. Municipal']])
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <h3 class="block-title">Telefones</h3><p></p>
                                        <div class="form-group">
                                            @tel(['col'=>'12','label'=>'Telefone','name'=>'telephone','value'=>null,
                                                    'attributes'=>['placeholder'=>'Telefone residencial']])
                                        </div>
                                    
                                        <div class="form-group">
                                            @tel(['col'=>'12','label'=>'Celular','name'=>'cellphone','value'=>null,
                                                    'attributes'=>['placeholder'=>'Telefone Celular']])
                                        </div>
                                    
                                        <div class="form-group">
                                            @tel(['col'=>'12','label'=>'WhatsApp','name'=>'whatsapp','value'=>null,
                                                    'attributes'=>['placeholder'=>'Whatsapp']])
                                        </div>
                                    </div>
                                </div>
                                <h3 class="block-title">Web</h3><p></p>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                            @email(['col'=>'12','label'=>'E-mail','name'=>'email','value'=>null,
                                                    'attributes'=>['placeholder'=>'Seu e-mail']])
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="newsletter">Newsletter</label>
                                            @checkbox(['col'=>'12','name'=>'newsletter','value'=>'Deseja receber nossos e-mails?','checked'=>true,'css'=>'primary'])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @email(['col'=>'12','label'=>'E-mail Nf-e','name'=>'email_nfe','value'=>null,
                                                    'attributes'=>['placeholder'=>'Seu e-mail']])
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @url(['col'=>'12','label'=>'Site','name'=>'url','value'=>null,
                                                    'attributes'=>['placeholder'=>'Site']])
                                        </div>
                                    </div>
                                </div>
                                <h3 class="block-title">Endereço</h3><p></p>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="form-group">
                                        
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        
                                    </div>
                                </div>
                                <h3 class="block-title">Outros detalhes</h3><p></p>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            @select(['col'=>'12','label'=>'Grupo','name'=>'group','arrayOptions'=>['0'=>'Consumidor','1'=>'Revenda','2'=>'Outros'],'selected'=>'0'])
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Limite de Compra','name'=>'limit_purc','value'=>null,
                                                    'attributes'=>['placeholder'=>'Limite de Compra']])
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            @text(['col'=>'12','label'=>'Nota de Compra','name'=>'note_purchase','value'=>null,
                                                    'attributes'=>['placeholder'=>'Limite de Compra']])
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3">
                                        @php
                                            $attendant = [
                                                '0'=>'Amaral',
                                                '1'=>'Amanda',
                                                '2'=>'Francis',
                                                '3'=>'Primo',
                                                '4'=>'Edney'
                                            ];
                                        @endphp
                                        <div class="form-group">
                                            @select(['col'=>'12','label'=>'Cliente cadastrado por:','name'=>'attendant_id','arrayOptions'=>$attendant])
                                        </div>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="form-group">
                                            @textArea(['col'=>'12','label'=>'Observações Gerais','name'=>'note','value'=>null,
                                                    'attributes'=>['placeholder'=>'Observações gerais']])
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        @button(['value'=>'Cadastrar Cliente','attributes'=>['class'=>'btn btn-primary','type'=>'submit']])
                                    </div>
                                </div>asjkn,.;
                                
    
                                {{-- @truncate($trunc,'250') @cep('06786510')
                                <div class="form-group">
                                    {{ request()->route()->getName('') }}
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
                                    
                                </div> --}}
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
