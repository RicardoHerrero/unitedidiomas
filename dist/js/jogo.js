var termos     = palavra.length
var historico  = new Array()
var consulta   = ""
var limite     = termos - 1

function iniciarDicionario(){

    var consulta    = Math.floor(Math.random() * (termos - 1) + 1)
    while(historico.indexOf(consulta)>=0){
        consulta    = Math.floor(Math.random() * (termos - 1) + 1)
        console.log("new Random = " + consulta)
    }

    document.getElementById('Traducao').innerHTML = "&nbsp;";
    document.getElementById('Exemplo').innerHTML = "&nbsp;";
    document.getElementById('Palavra').innerHTML = palavra[consulta];
    setTimeout(function(){exibirTraducao(consulta)},3500);

    historico.push(consulta);
    
    console.log("Tamanho do array Termos: "+termos)    
    console.log("Tamanho do array Historico: "+historico.length)
    console.log(historico)
    
}
function exibirTraducao(consulta){
    document.getElementById('Traducao').innerHTML = traducao[consulta];
    document.getElementById('Exemplo').innerHTML = exemplo[consulta]+"&nbsp;";
    setTimeout(iniciarDicionario,2000);

    if( limite == historico.length) {
        historico = []
        console.log("Zerando. Iniciando novo array. Starting.")
    }
}

iniciarDicionario();