<?php
namespace Carloslincon29\Blogx\controlador;
require_once 'AcessoAoBanco.php';



class Postagem {

    private $acessoaobanco;
    private $conexao;
    
    public function __construct() {
        $this->acessoaobanco = new AcessoAoBanco();
        $this->conexao = $this->acessoaobanco->getConexaoAoBanco();
    }

    public function pegarPostagem(){
        $mysql = $this->conexao;
        $resposta = $mysql->query("SELECT * FROM `postagem`");
        $itens = $resposta->fetch_all(MYSQLI_ASSOC);
        return $itens;
    }


}




?>