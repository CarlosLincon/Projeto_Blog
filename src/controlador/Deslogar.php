<?php

use Carloslincon29\Blogx\controlador\ControleUsuario;

require_once __DIR__ . "/ControleUsuario.php";

$controleUsuario = new ControleUsuario();
$controleUsuario->deslogar();

echo json_encode(['status' => 'success', 'message' => 'Usuário deslogado com sucesso']);
