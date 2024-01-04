<?php
namespace Carloslincon29\Blogx\controlador;

use mysqli;

class AcessoAoBanco
{

    private string $host = "localhost";
    private string $usuario = "root";
    private string $senha = "";
    private string $banco = "blogx";
    private mysqli $conexaoAoBanco;

    public function __construct()
    {
        $this->conexaoAoBanco = new mysqli($this->host, $this->usuario, $this->senha, $this->banco);
        $this->conexaoAoBanco->set_charset("utf8");
    }
    public function getConexaoAoBanco()
    {
        return $this->conexaoAoBanco;
    }
}
