{{-- Cadastrar os registros--}}

@section('modalRegistros')
    <div class="modal" tabindex="-1" role="dialog" id="registros" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="pform" action="/registrar" method="POST" enctype="multipart/form-data" name="pform">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Registros</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="tipos_id" class="form-control-label">Tipo de registro</label>
                            <div class="input-group">
                                <select class="form-control" id="tipos_id"  required name="tipos_id">
                                    <option value="" disabled selected>Escolha um tipo de registro</option>
                                    <option value="1" >Entrada</option>
                                    <option value="2" >Saida</option>
                                    <option value="3" >Retirada</option>
                                    <option value="4" >Despesas Fixas Mensais</option>
                                    <option value="5" >Despesas Fixas Anuais</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="descricao" class="control-label">Descrição</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="descricao" placeholder="Descricão" required name="descricao">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valor" class="control-label">Valor</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="valor" placeholder="Valor" required name="valor">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="users_id" class="control-label">Usuário</label>
                            <div class="input-group">
                                <select class="form-control" id="users_id"  required name="users_id">
                                    <option value="" disabled selected>Selecione um usuário</option>
                                    <option value="{{ Auth::user()->id }}">{{__(Auth::user()->name)}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" id="btnSubmit">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

{{-- Relatorios --}}

@section('modalRelatorios')
    <div class="modal" tabindex="-1" role="dialog" id="relatorios" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Relatórios</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">

                        <div class="form-group">
                            <label for="rel_id" class="control-label">Tipo de relatorio</label>
                            <div class="input-group">
                                <select class="form-control" id="rel_id" >
                                    <option value="1">Entradas</option>
                                    <option value="1">Saidas</option>
                                    <option value="1">Retiradas</option>
                                    <option value="1">Despesas Fixas Mensais</option>
                                    <option value="1">Despesas Ffixas Anuais</option>
                                </select>
                            </div>
                           <div class="form-group">
                               <label for="initial_date" class="control-label">Data inicial</label>
                                <input type="date" id="intial_date" class="form-control">
                               <label for="final_date" class="control-label">Data Final</label>
                                <input type="date" id="final_date" class="form-control">
                           </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Pesquisar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

{{-- Configurações apenas para administradores --}}

@section('modalConfiguracoesLogo')
    <div class="modal" tabindex="-1" role="dialog" id="configuracoesLogo" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <br>
                <h5 style="text-align: center;" class="modal-title text-danger">{{ __( Auth::user()->name . ' lembre-se que você é um administrador do sistema!' ) }}</h5>
                <div class="modal-header">
                    <div class="container" style="align-content: center">
                                <h4 class="modal-title text-center">Escolha sua imagem:</h4>
                                <br>
                                <form method="POST" action="/" enctype="multipart/form-data" name="post">
                                    @csrf
                                    <input type="file"  accept="images/*" class="custom-file-input"
                                           id="input" name="input" value="input" style="display:none" onclick="selectFile()">
                                    <script>
                                        function selectFile(){
                                            document.getElementById('input').click();
                                        }
                                    </script><center>
                                    <button type="button" class="btn-success btn btn-sm"  id="submit" name="submit"
                                            disabled="true" onclick="selectFile()"
                                            title="Somente pode escolher um arquivo para ser a logo da empresa. Apague a atual e volte a selecionar outra.">
                                        Selecione seu arquivo
                                    </button></center>
                                    <br>

                                    @foreach( $img as $imgs)
                                        @if(isset($imgs->id))
                                            <br>
                                            <div class="card card-body">
                                                <h6 class="text-justify text-sm-center" id="nameFile" name="nameFile" value="nameFile">{{ $imgs->file }} &ensp;</h6>
                                                <a href="/config/destroy/{{$imgs->id}}" class="btn-danger btn btn-sm" id="btnDestroy" name="btnDestroy" onclick="apaga()">Apagar</a>
                                                <br>

                                            </div>
                                        @endif
                                    @endforeach
                                    @empty($imgs->file)
                                        <div class="card card-body">
                                            <h6 class="text-lg-center text-danger" id="nas"><b>Nenhum arquivo selecionado!</b></h6>
                                            <h6 class="text-lg-center text-success" id="as"><b>Arquivo selecionado!</b></h6>
                                        </div>
                                    @endempty
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary" id="botao" onclick="salva()"
                                                title="Só podera salvar após selecionar uma imagem. Ou apagar a atual e retomar o processo do inicio.">Salvar</button>
                                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                    </div>
                                </form>

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
                document.getElementById("submit").disabled = false;
                document.getElementById("nameFile").addEventListener("nameFile", function(event){
                    var cnt = document.getElementById("nameFile").value;
                    if (cnt !== null && cnt !== '') {
                        document.getElementById("submit").disabled = true;


                    } else {
                        document.getElementById("submit").disabled = false;
                    }
                });
                function apaga(){

                    $('#apagadocomsucesso').modal('show');
                }
                function salva(){

                    $('#salvocomsucesso').modal('show');
                }
            </script>
        </div>
    </div>
@endsection

@section('modalConfiguracoes')
    <div class="modal" tabindex="-1" role="dialog" id="configuracoes" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Configurações Gerais</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block" onclick="cfgLogo()">Selecionar logo inicio</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block" onclick="apagarRegistros()">Apagar registros</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block">Configuração Y</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script type="text/javascript">

        function cfgLogo() {
            console.log('cfgLogo');
            $('#configuracoesLogo').modal('show');
        }
        function apagarRegistros() {
            console.log('apagarRegistros');
            $('#apagarRegistros').modal('show');
        }

    </script>
@endsection
@section('modalApagadoComSucesso')
    <div class="modal" tabindex="-1" role="dialog" id="apagadocomsucesso" data-backdrop="static" data-keyboard="false">
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Arquivo apagado com sucesso!</strong>
        </div>
    </div>
@endsection
@section('modalSalvadoComSucesso')
    <div class="modal" tabindex="-1" role="dialog" id="salvocomsucesso" data-backdrop="static" data-keyboard="false">
        <div class="alert alert-success alert-dismissible fade show"  role="alert">
            <strong>Arquivo salvo com sucesso!</strong>
        </div>
    </div>
@endsection

@section('modalPesquisar')
    <div class="modal" tabindex="-1" role="dialog" id="pesquisar" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Configurações Gerais</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block" onclick="cfgLogo()">Selecionar logo inicio</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block">Configuração X</button>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-group">
                                <button type="button" class="btn btn-primary btn-sm btn-block">Configuração Y</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <script type="text/javascript">

        function cfgLogo() {
            console.log('cfgLogo');
            $('#configuracoesLogo').modal('show');
        }

    </script>
@endsection

{{--modal apagar registros--}}

@section('modalApagarRegistros')
    <div class="modal" tabindex="-1" role="dialog" id="apagarRegistros" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Apagar Registros</h5>
                </div>
                <div class="modal-body">



                </div>
                <div class="modal-footer">
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                </div>
            </div>
        </div>
    </div>



@endsection
