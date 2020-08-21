@section('modalEntrada')

    <div class="modal" tabindex="-1" role="dialog" id="cadEntradas">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo registro</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">

                        <div class="form-group">
                            <label for="nomeEntrada" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeEntrada" placeholder="Nome da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valorEntrada" class="control-label">Valor</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="valorEntrada" placeholder="Valor da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="user_id" class="control-label">Usuário</label>
                            <div class="input-group">
                                <select class="form-control" id="user_id" >
                                    <option value="{{ Auth::user()->id }}">{{__(Auth::user()->name)}}</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modalRelEntradas')

<div class="modal" tabindex="-1" role="dialog" id="relEntradas">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form class="form-horizontal" id="formProduto">
                <div class="modal-header">
                    <h5 class="modal-title">Relatorio entradas</h5>
                </div>
                <div class="modal-body">

                    <input type="hidden" id="id" class="form-control">
                    <div class="form-group">
                        <label for="nomeEntrada" class="control-label">Nome</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="nomeEntrada" placeholder="Nome da entrada">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="valorEntrada" class="control-label">Valor</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="valorEntrada" placeholder="Valor da entrada">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="quantidadeProduto" class="control-label">Quantidade</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do produto">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="categoriaProduto" class="control-label">Categoria</label>
                        <div class="input-group">
                            <select class="form-control" id="categoriaProduto" >
                                <option value="{{ Auth::user()->id }}">{{__(Auth::user()->name)}}</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('modalSaidas')

    <div class="modal" tabindex="-1" role="dialog" id="cadSaidas">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo registro</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeEntrada" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeEntrada" placeholder="Nome da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valorEntrada" class="control-label">Valor</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="valorEntrada" placeholder="Valor da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label">Quantidade</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label">Categoria</label>
                            <div class="input-group">
                                <select class="form-control" id="categoriaProduto" >
                                    <option value="{{ Auth::user()->id }}">{{__(Auth::user()->name)}}</option>

                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('modalRelSaidas')

    <div class="modal" tabindex="-1" role="dialog" id="relSaidas">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form class="form-horizontal" id="formProduto">
                    <div class="modal-header">
                        <h5 class="modal-title">Novo registro</h5>
                    </div>
                    <div class="modal-body">

                        <input type="hidden" id="id" class="form-control">
                        <div class="form-group">
                            <label for="nomeEntrada" class="control-label">Nome</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nomeEntrada" placeholder="Nome da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="valorEntrada" class="control-label">Valor</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="valorEntrada" placeholder="Valor da entrada">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="quantidadeProduto" class="control-label">Quantidade</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="quantidadeProduto" placeholder="Quantidade do produto">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="categoriaProduto" class="control-label">Categoria</label>
                            <div class="input-group">
                                <select class="form-control" id="categoriaProduto" >
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="cancel" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
