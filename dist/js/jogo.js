var termos          = palavra.length

function iniciarDicionario(){
    var consulta    = Math.floor(Math.random() * termos + 1);
    document.getElementById('Traducao').innerHTML = "&nbsp;";
    document.getElementById('Exemplo').innerHTML = "&nbsp;";
    document.getElementById('Palavra').innerHTML = palavra[consulta];
    setTimeout(function(){exibirTraducao(consulta)},3500);
}
function exibirTraducao(consulta){
    document.getElementById('Traducao').innerHTML = traducao[consulta];
    document.getElementById('Exemplo').innerHTML = exemplo[consulta]+"&nbsp;";
    setTimeout(iniciarDicionario,2000);
}

/* iOS re-orientation fix */
if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i)) {
    /* iOS hides Safari address bar */
    window.addEventListener("load",function() {
        setTimeout(function() {
            window.scrollTo(0, 1);
        }, 1000);
    });
}

iniciarDicionario();