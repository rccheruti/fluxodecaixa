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
function cfgLogo() {
    console.log('cfgLogo');
    $('#configuracoesLogo').modal('show');
}
function pesquisarRegistros() {
    console.log('pesquisarRegistros');
    $('#pesquisarRegistros').modal('show');
}
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
