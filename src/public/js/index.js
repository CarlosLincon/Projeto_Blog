const grupoPG = document.querySelector(".grupoPG");
const body = document.body;
var postagemAtivada
function ativandoAPostagem(elemento, evento, estaLogado) {
  postagemAtivada = elemento;
  if (estaLogado) {
    if (postagemAtivada.id != "postagemAtiva" && evento.target.className != "botaoFechar") {
      postagemAtivada.id = "postagemAtiva";
    }
  } else {
    chamandoForm("formLogin");
  }

}

function fecharElemento(elementoParaRetiradaDoId) {
  let elementoComOId = document.querySelector(`#${elementoParaRetiradaDoId}`);
  elementoComOId.id = "";
  elementoComOId = " ";

}

function apagandoElemento(elementoQueDeveSerApagado) {
  let elementoQueVaiSerApagado = document.querySelector(`.${elementoQueDeveSerApagado}`);
  if (elementoQueVaiSerApagado != null) {
    body.removeChild(elementoQueVaiSerApagado);
  }
  return;
}

function chamandoForm(tipoDeForm) {

  if (tipoDeForm === 'formCadastro') {
    apagandoElemento("modal-principal");
    return body.innerHTML += `<div class="modal-principal" id="modal-ativo">
       <div class="container-main-modal">
         <div class="containerModalPG">
           <div class="modalPG-fecharMD" onclick="apagandoElemento('modal-principal')">
             <div class="container-modalPG-fechar"><span>X</span></div>
           </div>
           <div class="containerLogin">
             <div class="headerLogin">
               <div class="headerLogin">
                 <h1>Faça seu Cadastro</h1>
               </div>
             </div>
             <div class="containerFormLogin">
               <div class="formulario">
                 <form class="registro-form" action="./../controlador/registroUsuario.php" method="POST">
                   <input  required name="rg_usuario"  type="name" placeholder="Sua usuário" />
                   <input  required name="rg_senha"    type="password" placeholder="Sua senha" />
                   <input  required name="rg_email"    type="Email" placeholder="Seu e-mail" />
                   <button type="submit">Criar</button>
                   <p class="mensagem">Já tem Registro? <span onclick="chamandoForm('formLogin')">Faça seu Login</span></p>
                 </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>`;
  } else if (tipoDeForm === 'formLogin') {
    apagandoElemento("modal-principal");
    return body.innerHTML += ` <div class="modal-principal" id="modal-ativo">
    <div class="container-main-modal">
      <div class="containerModalPG">
        <div class="modalPG-fecharMD" onclick="apagandoElemento('modal-principal')">
          <div class="container-modalPG-fechar"><span>X</span></div>
        </div>
        <div class="containerLogin">
          <div class="headerLogin">
            <div class="headerLogin">
              <h1>Faça seu Login</h1>
            </div>
          </div>
          <div class="containerFormLogin">
            <div class="formulario">
              <form class="login-form" action="./../controlador/loginUsuario.php" method="POST">
                <input required name="lg_nomeUsuario" type="text" placeholder="E-mail ou Usuário" />
                <input required name="lg_senhaUsuario" type="password" placeholder="password" />
                <button type="submit">login</button>
                <p class="mensagem">Não está cadastrado? <span onclick="chamandoForm('formCadastro')">Faça seu Cadastro</span></p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>`;
  }


}