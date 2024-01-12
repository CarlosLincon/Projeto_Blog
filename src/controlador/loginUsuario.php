<?php 
use Carloslincon29\Blogx\controlador\ControleUsuario;

require_once __DIR__. "/ControleUsuario.php";

$controleUsuario = new ControleUsuario();

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $dadosDoLogin = $_POST;
    $controleUsuario->fazerLogin($dadosDoLogin["lg_nomeUsuario"],$dadosDoLogin["lg_senhaUsuario"]);
      

}

header("Location:../public/index.php");


?>