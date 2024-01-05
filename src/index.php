<?php

require_once 'controlador/Postagem.php';
require_once 'controlador/ControleLogin.php';

use Carloslincon29\Blogx\controlador\Postagem;

$loginUsuario = new ControleLogin();
$usuarioLogado = $loginUsuario->statusUsuario();

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
  <script src="./js/index.js" defer> </script>
</head>

<body>
  <!-- <div class="modal-principal" id="modal-ativo">
    <div class="container-main-modal">
      <div class="containerModalPG">
      <div class="modalPG-fecharMD">
          <div class="container-modalPG-fechar"><span>X</span></div>
        </div>
      </div>
    
        

    </div>
  </div> -->
  <div class="container-principal">

    <div class="container-postagens">
      <div class="grupoPG">
        <?php foreach ($postagens as $postagem) : ?>
          <div class="postagem" onclick="ativandoAPostagem(this ,event,<?php $usuarioLogado ?>)">
            <div class="postagemContainer">
              <div class="fecharDiv">
                <div class="container-fechar">
                  <button class="botaoFechar" onclick="fecharPostagem()"><- Voltar</button>
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

  </div>



  <?php

  ?>


</body>

</html>