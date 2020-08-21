@extends('layouts.app')
@extends('layouts.modal')
@php($title = 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">{{ __('Seja bem vindo!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="text-align: center;">{{ __('O que deseja fazer '. Auth::user()->name) }}</div>


                        <br>

                        <div class="card-deck">
                        <div class="card border border-primary">
                            <a href="/registrar" class="btn btn-sm btn-primary" type="button" >Registrar</a>
                        </div>
                        <div class="card border border-primary">
                            <a href="/relatorios" class="btn btn-sm btn-primary"  type="button">Relatórios</a>
                        </div>
                        @if(Auth::user()->name === 'Roger')
                            <div class="card border border-warning">
                                 <a href="/config" class="btn btn-sm btn-warning text-dark"  type="button">Configurações</a>
                            </div>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
