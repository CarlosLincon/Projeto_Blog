<?php

use Carloslincon29\Blogx\controlador\ControleUsuario;

require_once __DIR__. "/ControleUsuario.php";

$controleUsuario = new ControleUsuario();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dadosDoRegistro = $_POST;
    $controleUsuario->criarUsuario($dadosDoRegistro["rg_usuario"],$dadosDoRegistro["rg_senha"],$dadosDoRegistro["rg_email"]);
      

}

header("Location:../public/index.php");