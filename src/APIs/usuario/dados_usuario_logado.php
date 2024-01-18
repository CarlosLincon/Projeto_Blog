<?php

use Carloslincon29\Blogx\controlador\ControleUsuario;

require_once __DIR__ . '/../../controlador/AcessoAoBanco.php';
require_once __DIR__ . '/../../controlador/ControleUsuario.php';

session_start();

$usuarioArray = array(
    'nomeUsuario' => $_SESSION["NomeUsuario"],
    'emailUsuario' => $_SESSION["EmailUsuario"],
    'idUsuario' => $_SESSION["IDUsuario"],
    'imagemPerfil' => $_SESSION["FotoPerfilSrc"],
    'statusUsuario' => $_SESSION["UsuarioLogado"]
);

$usuarioJson = json_encode($usuarioArray);

echo $usuarioJson;
