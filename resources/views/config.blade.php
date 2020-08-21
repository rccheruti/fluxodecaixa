@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center text-danger"><b>{{ __('ATENÇÃO!') }}</b></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div style="text-align: center;">{{ __( Auth::user()->name . ' lembre-se que você é um administrador do sistema!' ) }}</div>


                        <br>

                        <div class="card-deck">
                            <div class="card border border-primary">
                                <a href="/home" class="btn btn-sm btn-primary" type="button" title="Voltar a página inicial">Home</a>
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <section class="jumbotron text-center">
                        <div class="container">
                            <h4 class="jumbotron-heading">Escolha sua imagem:</h4>
                            <form method="POST" action="/" enctype="multipart/form-data" name="post">
                                @csrf
                                <input type="file" class="custom-file-input" id="input" name="input" value="input">
                                <label for="input" class="btn-success btn btn-lg" id="submit" name="submit">
                                    Selecione seu arquivo
                                </label>
                                <br>
                                @foreach( $img as $imgs)
                                    @if(isset($imgs->id))
                                        <br>
                                        <div class="card card-body">
                                            <h6 class="text-justify text-sm-center" id="nameFile" name="nameFile">{{ $imgs->file }} &ensp;</h6>
                                            <a href="/config/destroy/{{$imgs->id}}" class="btn-danger btn btn-sm">Apagar</a>
                                        </div>
                                    @endif
                                @endforeach
                                @empty($imgs->file)
                                    <div class="card card-body">
                                        <h6 class="text-lg-center text-danger" id="nas"><b>Nenhum arquivo selecionado!</b></h6>
                                        <h6 class="text-lg-center text-success" id="as"><b>Arquivo selecionado!</b></h6>
                                    </div>
                                @endempty
                                <br>
                                <p>
                                    <button type="submit" class="btn btn-primary btn-lg" id="botao">Salvar</button>
                                </p>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    document.getElementById("botao").disabled = true;
    document.getElementById("input").addEventListener("input", function(event){
        var conteudo = document.getElementById("input").value;
        if (conteudo !== null && conteudo !== '') {
            document.getElementById("botao").disabled = false;


        } else {
            document.getElementById("botao").disabled = true;
        }
    });
    document.getElementById("as").hidden = true;
    document.getElementById("input").addEventListener("input", function(event){
        var cont = document.getElementById("input").value;
        if (cont !== null && cont !== '') {
            document.getElementById("nas").hidden = true;
            document.getElementById("as").hidden = false;
        } else {
            document.getElementById("nas").hidden = true;
            document.getElementById("as").hidden = false;
        }
    });

</script>
@endsection
