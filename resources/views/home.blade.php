@extends('layouts.app')
@extends('layouts.modal')
@extends('tabelas')
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
                            <button class="btn btn-sm btn-primary" type="button" onclick="registroModal()">Registrar</button>
                        </div>
                        <div class="card border border-primary">
                            <button class="btn btn-sm btn-primary"  type="button" onclick="relatoriosModal()">Relatórios</button>
                        </div>
                        @if(Auth::user()->name === 'admin')
                            <div class="card border border-warning">
                                <button class="btn btn-sm btn-warning text-dark"  type="button" onclick="configuracoesModal()">Configurações</button>
                            </div>
                        @endif
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('javascript')
    <script type="text/javascript">

        function registroModal() {
            console.log('Registrar');
            $('#registros').modal('show');
        }
        function relatoriosModal() {
            console.log('Relatório');
            $('#relatorios').modal('show');
        }
        function configuracoesModal() {
            console.log('Configurações');
            $('#configuracoes').modal('show');
        }
    </script>
@endsection
