
const containerUsuarioMN = document.querySelector(".container-menu-usuario");
var url = './../../APIs/usuario/dados_usuario_logado.php';

const pesquisaDados = async () => {
  var dadosDaURL = await fetch(url);
  var dadosUsuario = await dadosDaURL.json();
  exibirCarregamento("informacaoUsuario");
    if (dadosUsuario['statusUsuario'] === true) {
      criandoCardUsuario();
      let pNomeUsuario = document.querySelector(".menu-dados-nomeUsuario");
      let pEmailUsuario = document.querySelector(".menu-dados-emailUsuario");
      let imgPerfilUsuario = document.querySelector(".menu-foto-perfil-img");
      pNomeUsuario.textContent = dadosUsuario['nomeUsuario'];
      pEmailUsuario.textContent = dadosUsuario['emailUsuario'];
      imgPerfilUsuario.src = dadosUsuario["imagemPerfil"];

    } else {
      esconderCarregamento("informacaoUsuario");
      CriandoBotaoLogin();
    }
    stopCarregamento();
  

};

pesquisaDados();

const criandoCardUsuario = () => {
  containerUsuarioMN.innerHTML = ` 
  <div class="contener-card-perfil"> 
  <div class="menu-foto-perfil">
    <img class="menu-foto-perfil-img" src="" alt="Imagem de perfil">
  </div>
  <div class="menu-dados-perfil">
    <div class="menu-dados-nome">
      <p class="menu-dados-nomeUsuario"></p>
    </div>
    <div class="menu-dados-email">
      <p class="menu-dados-emailUsuario"></p>
    </div>
  </div>
  </div>`;
}

const CriandoBotaoLogin = () => {
  containerUsuarioMN.innerHTML = `

    <div class="container-menu-usuario-login">
      <button class="menu-usuario-login-button" onclick="chamandoForm('formLogin')">Fazer Login</button>
    </div>
  `;


}