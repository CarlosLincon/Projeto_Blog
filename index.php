<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página inicial</title>
  <link rel="stylesheet" href="./css/reset.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/menu.css">
  <script src="./Js/index.js" defer> </script>
</head>

<body>


  <?php
  require_once('menu.php');
  ?>

  <div class="container-principal">

    <div class="container-postagens">
      <div class="grupoPG">
        <div class="postagem" onclick="ativandoAPostagem(this ,event)">
          <div class="fecharDiv">
            <div class="container-fechar">
              <button class="botaoFechar" onclick="fecharPostagem()"><- Voltar</button>
            </div>
          </div>
          <div class="container-inf" ">
            <span class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium.
              Dolorem ea repellat deleniti quos quam recusandae modi!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium. Dolorem ea repellat deleniti quos quam recusandae modi!
            </span>
          </div>
        </div>
        <div class="postagem" onclick="ativandoAPostagem(this, event)">
          <div class="fecharDiv">
            <div class="container-fechar">
              <button class="botaoFechar" onclick="fecharPostagem()"><- Voltar</button>
            </div>
          </div>
          <div class="container-inf">
            <span class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium.
              Dolorem ea repellat deleniti quos quam recusandae modi!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium. Dolorem ea repellat deleniti quos quam recusandae modi!
            </span>
          </div>
        </div>
        <div class="postagem" onclick="ativandoAPostagem(this ,event)">
          <div class="fecharDiv">
            <div class="container-fechar">
              <button class="botaoFechar"  onclick="fecharPostagem()"><- Voltar</button>
            </div>
          </div>
          <div class="container-inf">
            <span class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium.
              Dolorem ea repellat deleniti quos quam recusandae modi!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium. Dolorem ea repellat deleniti quos quam recusandae modi!
            </span>
          </div>
        </div>

        <div class="postagem" onclick="ativandoAPostagem(this ,event)">
          <div class="fecharDiv">
            <div class="container-fechar">
              <button class="botaoFechar"  onclick="fecharPostagem()"><- Voltar</button>
            </div>
          </div>
          <div class="container-inf">
            <span class="titulo">Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium.
              Dolorem ea repellat deleniti quos quam recusandae modi!
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo sit qui repellat, porro voluptas corporis fugit labore aut impedit reiciendis soluta accusantium. Dolorem ea repellat deleniti quos quam recusandae modi!
            </span>
          </div>
        </div>

      </div>
    </div>

  </div>



  <?php

  ?>


</body>

</html>