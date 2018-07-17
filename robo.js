var palavra         = ['Apple'  , 'Book'    ,'Car',     'Father']
var traducao        = ['Maça'   , 'Livro'   ,'Carro'    ,'Pai']
var termos          = palavra.length

function iniciarDicionario(){
    var consulta    = Math.floor(Math.random() * termos + 1) - 1
    document.getElementById('Traducao').innerHTML = "&nbsp;";
    document.getElementById('Palavra').innerHTML = palavra[consulta];
    setTimeout(function(){exibirTraducao(consulta)},3500);
}
function exibirTraducao(consulta){
    document.getElementById('Traducao').innerHTML = traducao[consulta];
    setTimeout(iniciarDicionario,1500);
}

iniciarDicionario();