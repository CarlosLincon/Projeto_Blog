<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página inicial</title>

  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/menu.css">
  <link rel="stylesheet" href="./css/modal.css">
  <link rel="stylesheet" href="./css/postagem.css">
  <link rel="stylesheet" href="./css/recomendacoes.css">
  <link rel="stylesheet" href="./css/carregando.css">
  <link rel="shortcut icon" href="./assets/Img/LogoBGXV2.jpeg" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script src="./js/index.js" defer> </script>
  <script src="./js/carregou.js" defer></script>
  <script src="./js/dadosDoUsuarioLogado.js" defer></script>
  <script src="./js/deslogar.js" defer></script>
  <script src="./js/postagem.js" defer></script>


</head>

<body>

  <div class="container-principal">
    <header class="container-menu">
      <section class="container-menu-opcoes">
        <div class="container-menu-opcoes-logo">
          <img src="./assets/Img/LogoBGXV2.png" alt="Logo do BlogX">
          <span>
            <h1>BlogX</h1>
          </span>
        </div>
        <nav class="nav-controle-menu">
          <ul>
            <li>

              <div class="container-menu-opcoes-ul-li-div"> <i class="bi bi-house-door"></i> <span>Home</span></div>
            </li>
            <li>
              <div class="container-menu-opcoes-ul-li-div"><i class="bi bi-person"></i><span>Perfil</span></div>
            </li>
            <li>
              <div class="container-menu-opcoes-ul-li-div"><i class="bi bi-box-arrow-right"></i><span>Sair</span></div>
            </li>
          </ul>

        </nav>
        <div class="container-menu-opcoes-postagem">
                 <button class="container-menu-opcoes-postagem-button"> Postar</button>
        </div>
      </section>
      <section class="container-menu-usuario" id="informacaoUsuario">

      </section>
    </header>
    <main class="section-container-postagens" id="main-postagem">

      <!-- <section class="container-postagens"> 
          <section class="container-postagem" onclick="ativandoAPostagem(this ,event,<?php echo $_SESSION['UsuarioLogado'] ?>)">
            <div class="cp-container">
              <div class="postagemContainer-fechar-div">
                <div class="fecharDiv">
                  <div class="container-fechar">
                    <button class="botaoFechar" onclick="fecharElemento('postagemAtiva')">Voltar</button>
                  </div>
                </div>
              </div>

              <div class="info-postagem">
                <div class="menu-foto-perfil-dados-postagem">
                  <img src="./assets/Img/perfilpd.png" alt="Imagem de perfil">
                </div>
                <div class="menu-dados-perfil-dados-postagem">
                  <div class="menu-dados-perfil-dados-postagem-container">
                    <div class="menu-dados-nome-horario-dados-postagem">
                      <span>Carlos Lincon</span>
                      <span>14h</span>
                    </div>
                    <div class="menu-dados-email-dados-postagem">
                      <p>carloslincon29@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="container-inf">
                <div class="cn-inf-campo-texto-container">
                  <span class="campo-texto-container-texto"> <?php echo $postagem['texto']; ?></span>
                </div>
                <div class="cn-inf-campo-media">
                  <div class="campo-media-container">

                    <div class="campo-media-container-div">
                      <img src="assets/Img/logobgx.png" alt="">
                    </div>

                  </div>
                </div>
              </div>
              <div class="postagem-controler">
                <div class="postagem-controler-container">
                  <div class="pg-controler-curtir"><span><i class="bi bi-arrow-through-heart"></i></span></div>
                  <div class="pg-controler-comentar"><span><i class="bi bi-chat"></i></span></div>
                  <div class="pg-controler-favoritar"><span><i class="bi bi-floppy"></i></span></div>
                </div>
              </div>
          </section>
      

      </section> -->

      <section class="container-recomendacoes">

      </section>
    </main>

  </div>



</body>

</html>