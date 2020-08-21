@section('menu')
<div class="row justify-content-center">
 <div class="col-md-8">
    <div class="card">
        <div class="card-header">
            {{ $title }}
        </div>
        <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        </div>
        <div class="card-deck">
            <div class="card border border-primary">
                <a href="/home" class="btn btn-sm btn-primary" type="button" title="Voltar a página inicial">Home</a>
            </div>
            @if($title === 'Relatórios' || $title === 'Home')
            <div class="card border border-primary">
                <a href="/registrar" class="btn btn-sm btn-primary" type="button" title="Fazer um registro de entrada, saida, etc...">Registrar</a>
            </div>
            @endif
            @if($title === 'Registrar' || $title === 'Home')
            <div class="card border border-primary">
                <a href="/relatorios" class="btn btn-sm btn-primary"  type="button" title="Relatórios, diários, mensais e anuais">Relatórios</a>
            </div>
            @endif
            @if(Auth::user()->name === 'Roger')
                <div class="card border border-warning">
                    <a href="/config" class="btn btn-sm btn-warning text-dark"  type="button">Configurações</a>
                </div>
            @endif
        </div>
        <br>
        <div class="card-link">
            <div class="card-deck">

                <div class="card border border-primary btn-group-sm">
                    <button class="btn btn-sm btn-outline-primary"
                       title="Entrada de dinheiro, serviços prestados ou produtos vendidos"
                       role="button"
                       @switch($title)
                           @case( $title === "Relatórios")
                                onclick="entradaRelatório()"
                                @break
                            @case ($title === "Registrar")
                                onclick="entradaRegistro()"
                                @break
                       @endswitch
                        >Entrada
                    </button>
                </div>

                <div class="card border border-primary btn-group-sm">
                    <button  class="btn btn-sm btn-outline-primary"
                             title="Saida de valores para insumos e outro coorelacionados"
                             role="button"
                          @switch($title)
                             @case( $title === "Relatórios")
                                onclick="saidaRelatorio()"
                                @break
                             @case ($title === "Registrar")
                                onclick="saidaRegistro()"
                                @break
                          @endswitch
                        >Saida
                    </button>
                </div>

                <div class="card border border-primary btn-group-sm">
                    <button class="btn btn-sm btn-outline-primary"
                            title="Retiradas de valores para fins pessoais"
                            role="button" onclick="retirada()">Retirada</button>
                </div>
                <div class="card border border-primary btn-group-sm">
                    <button class="btn btn-sm btn-outline-primary"
                            title="Despesas fixas mensais"
                            role="button" onclick="dfm()">DFM</a>
                </div>
                <div class="card border border-primary btn-group-sm">
                    <button class="btn btn-sm btn-outline-primary"
                            title="Despesas fixas anuais"
                            role="button" onclick="dfa()">DFA</a>
                </div>
            </div>
        </div>
    </div>
 </div>
</div>
@endsection

@section('javascript')
<script type="text/javascript">

       function entradaRegistro() {
            console.log('Entrada Registro');
           $('#cadEntradas').modal('show');
        }
       function entradaRelatório() {
           console.log('Entrada Relatório');
           $('#relEntradas').modal('show');
       }
       function saidaRegistro() {
           console.log('Saida Registro');
           $('#cadSaidas').modal('show');
       }
       function saidaRelatorio(){
           console.log('Saida Relatorio');
           $('#relSaidas').modal('show');
       }
       function retirada() {
           console.log('retirada');
       }
       function dfm() {
           console.log('dfm');
       }
       function dfa() {
           console.log('dfa');
       }

</script>
@endsection

