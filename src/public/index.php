<?php
session_start();
require_once __DIR__ . "/../controlador/Postagem.php";
require_once __DIR__ . '/../controlador/ControleUsuario.php';

use Carloslincon29\Blogx\controlador\Postagem;


$postagem = new Postagem();
$postagens =  $postagem->pegarPostagem();

?>


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
  <script src="./js/index.js" defer> </script>
</head>

<body>
  <div class="container-principal">
    <div class="container-menu">
      <div class="container-menu-opcoes">
        <ul>
          <li>Página Inicial</li>
          <li>Perfil</li>
        </ul>
      </div>
    </div>
    <div class="container-postagens">
      <div class="grupoPG">
        <?php foreach ($postagens as $postagem) : ?>
          <div class="postagem" onclick="ativandoAPostagem(this ,event,<?php echo $_SESSION['UsuarioLogado'] ?>)">
            <div class="postagemContainer">
              <div class="fecharDiv">
                <div class="container-fechar">
                  <button class="botaoFechar" onclick="fecharElemento('postagemAtiva')"><- Voltar</button>
                </div>
              </div>
              <div class="container-inf">
                <span class=" titulo"> <?php echo $postagem['texto']; ?></span>
              </div>
            </div>
          </div>
        <?php endforeach; ?>


      </div>
    </div>
    <div class="container-recomendacoes">


    </div>
  </div>



  <?php

  ?>


</body>

</html>