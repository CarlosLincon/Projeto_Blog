const grupoPG = document.querySelector(".grupoPG");
const body = document.body;
var postagemAtivada
function ativandoAPostagem(elemento, evento, estaLogado) {
    postagemAtivada = elemento;
    if(estaLogado === true){
    if (postagemAtivada.id != "postagemAtiva" && evento.target.className != "botaoFechar") {
        postagemAtivada.id = "postagemAtiva";
    }
    }else{
        // body.innerHTML = '<div class="modal-principal" id="modal-ativo"><div class="containerModalPG"></div></div> <script src="./js/contraladorJlModal.js" defer> </script>'
           body.innerHTML = '<div class="modal-principal" id="modal-ativo"><div class="container-main-modal"><div class="containerModalPG"><div class="modalPG-fecharMD"><div class="container-modalPG-fechar"><span>X</span></div></div></div></div></div><script src="./js/contraladorJlModal.js" defer> </script>'
    
    }

} 

function fecharPostagem() {
    postagemAtivada.id = " ";

}
