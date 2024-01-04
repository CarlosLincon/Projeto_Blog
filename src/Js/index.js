const grupoPG = document.querySelector(".grupoPG");
var postagemAtivada
function ativandoAPostagem(elemento, evento) {
    postagemAtivada = elemento;

    if (postagemAtivada.id != "postagemAtiva" && evento.target.className != "botaoFechar") {
        postagemAtivada.id = "postagemAtiva";
    }

}


function fecharPostagem() {
    postagemAtivada.id = " ";

}
