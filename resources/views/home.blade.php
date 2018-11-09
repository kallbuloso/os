@extends('layouts.backend')

@section('title_header', 'Dashboard')                       {{-- Título do cabeçalho --}}
@section('pageTitle', 'Dashboard')                          {{-- Título da content da página atual --}}
@section('subTitlePage', 'Welcome Administrator Amaral')    {{-- Subtítulo/texto ta página atual --}}
@section('pageBgImage', 'assets/img/photos/photo3@2x.jpg')  {{-- Imagen do fundo do título da página atual --}}


@section('content')
<div class="container">
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
</div>
@endsection
